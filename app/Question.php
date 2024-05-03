<?php

require_once 'Database.php';

class Question extends Database
{
    protected $tb = 'questions';

    public function __construct()
    {
        parent::__construct();
    }

    public function getAnswer($operand1, $operand2, $operator)
    {
        switch ($operator) {
            case "X":
                return (int)($operand1 * $operand2);
            case "+":
                return (int)($operand1 + $operand2);
            case "-":
                return (int)($operand1 - $operand2);
            case "/":
                return ($operand1 / $operand2);
            case "%":
                return (int)($operand1 % $operand2);
            default:
                return 0;
        }
    }

    public function generate($game_id)
    {
        $operators      = array("X", "+", "-", "/", "%");
        shuffle($operators);
        foreach ($operators as $operator) {
            $operand1   = rand(2, 99);
            $operand2   = rand(2, 99);
            $answer     = $this->getAnswer($operand1, $operand2, $operator);
            $sql        = "INSERT INTO $this->tb (operand_1, operand_2, operator, answer, game_id) VALUES ('$operand1', '$operand2', '$operator', '$answer', '$game_id')";

            $query      = mysqli_query($this->db, $sql);
        }
    }

    public function get($game_id)
    {
        $sql    = "SELECT * FROM $this->tb WHERE game_id = '$game_id'";
        $query  = mysqli_query($this->db, $sql);

        $questions = array();
        while ($data = mysqli_fetch_assoc($query)) {
            $questions[] = $data;
        }

        if ($query->num_rows) {
            return ['error' => 0, 'questions' => $questions];
        }
        return ['error' => 1, 'questions' => []];
    }

    public function update($question_id, $player_answer, $is_timeout)
    {
        $query          = mysqli_query($this->db, "SELECT * FROM $this->tb WHERE id = '$question_id' LIMIT 1");
        if (!$query->num_rows) return false;

        $question       = mysqli_fetch_assoc($query);
        $status         = (($question['answer'] == $player_answer) && !$is_timeout) ? 'Benar' : 'Salah';
        $player_answer  = $is_timeout ? 0 : $player_answer;
        $query          = mysqli_query($this->db, "UPDATE $this->tb SET status = '$status', player_answer = '$player_answer' WHERE id = '$question_id'");

        return ($question['answer'] == $player_answer);
    }
}

$Question = new Question();
