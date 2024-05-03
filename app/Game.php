<?php

require_once 'Database.php';
require_once 'Question.php';

class Game extends Database
{
    protected $tb = 'games';

    public function __construct()
    {
        parent::__construct();
    }

    function uuid($data = null)
    {
        $data = $data ?? random_bytes(16);
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }

    public function create()
    {
        $player_id  = $_SESSION['id'];

        $game_id    = $this->uuid();
        $query      = mysqli_query($this->db, "INSERT INTO $this->tb (id, player_id) VALUES ('$game_id','$player_id')");

        $Question = new Question;
        $Question->generate($game_id);

        if ($query) return ['error' => 0, 'game_id' => $game_id];
        return ['error' => 1, 'game_id' => null];
    }

    public function get($id)
    {
        $query      = mysqli_query($this->db, "SELECT * FROM $this->tb WHERE id = '$id' LIMIT 1");
        $game       = mysqli_fetch_assoc($query);

        if (count($game)) return ['error' => 0, 'game' => $game];
        return ['error' => 1, 'game' => []];
    }

    public function submit($game)
    {
        date_default_timezone_set('Asia/singapore');
        $submit_time    = date('Y-m-d H:i:s');
        $game_start     = $game['game_start'];
        $remaining_time = strtotime($submit_time) - strtotime($game_start);
        $is_timeout     = $remaining_time >= 300;
        $game_id        = $game['game_id'];
        $score          = 0;
        $is_submitted   = true;

        for ($i = 0; $i < 5; $i++) {
            $question_id    = $game['question' . $i . 'id'];
            $player_answer  = $game['player_answer' . $i];
            $question       = new Question();
            if ($question->update($question_id, $player_answer, $is_timeout)) {
                if (!$is_timeout) $score += 10;
            }
        }

        $query          = mysqli_query($this->db, "UPDATE $this->tb SET submit_time = '$submit_time', remaining_time = '$remaining_time', score = '$score', is_answered = '$is_submitted', timeout = '$is_timeout' WHERE id ='$game_id'");
        if ($query->num_rows) return false;
        return true;
    }

    public function getRecord()
    {
        $player_id  = $_SESSION['id'];
        $sql        = "SELECT * FROM $this->tb WHERE player_id = '$player_id' ORDER BY game_start DESC";
        $query      = mysqli_query($this->db, $sql);
        $games      = array();

        if ($query->num_rows) {
            while ($data = mysqli_fetch_assoc($query)) {
                $game_id    = $data['id'];
                $query_q    = mysqli_query($this->db, "SELECT * FROM questions WHERE game_id = '$game_id'");
                $questions  = array();
                while ($ques = mysqli_fetch_assoc($query_q)) {
                    $questions[] = $ques;
                }
                $data['questions']  = $questions;
                $games[]            = $data;
            }
        }

        return $games;
    }

    public function getScore()
    {
        $player_id   = $_SESSION['id'];
        $query       = mysqli_query($this->db, "SELECT SUM(score) as scores FROM $this->tb WHERE player_id = '$player_id'");

        return mysqli_fetch_assoc($query)['scores'];
    }
}

$Game = new Game();
