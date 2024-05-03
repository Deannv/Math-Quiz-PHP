<?php
require_once '../../partials/header.php';
?>

<?php
session_start();
require_once '../../app/Game.php';
require_once '../../app/Question.php';

if (!isset($_SESSION['username'])) {
    header('Location: ../auth/login.php');
    exit();
}

if (!isset($_GET['game_id'])) {
    header('Location: dashboard.php');
    exit();
}

$getGame = $Game->get($_GET['game_id']);

if ($getGame['error']) {
    header('Location: dashboard.php');
    exit();
}

$game           = $getGame['game'];
$getQuestion    = $Question->get($_GET['game_id']);

if ($getQuestion['error']) {
    header('Location: dashboard.php');
    exit();
}

$questions      = $getQuestion['questions'];

if (isset($_POST['submitBtn'])) {
    $res = $Game->submit($_POST);
    if ($res) header('Location: record.php');
}

?>
<style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type=number] {
        -moz-appearance: textfield;
    }
</style>

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <img class="mx-auto h-10 w-auto" src="https://media.discordapp.net/attachments/1089470162601771028/1235079964530053214/waste.png?ex=6633115a&is=6631bfda&hm=36eeb91fb40ca39b23274963b4ad6dbd4d07f23e2d79717354b7e250c7bcc1a9&=&format=webp&quality=lossless" alt="Your Company">
        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Game</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="play.php?game_id=<?= $game['id'] ?>" method="POST">
            <input name="game_id" value="<?= $game['id'] ?>" hidden>
            <input name="game_start" value="<?= $game['game_start'] ?>" hidden>
            <div class="mt-6 border-t border-gray-100">
                <dl class="divide-y divide-gray-100">
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">Player name : </dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"><?= $_SESSION['nama'] ?></dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">Starting Time : </dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"><?= $game['game_start'] ?></dd>
                    </div>
                </dl>
            </div>
            <?php foreach ($questions as $index => $question) : ?>
                <div>
                    <label for="player_answer<?= $index ?>" class="block text-sm font-medium leading-6 text-gray-900">Soal <?= $index + 1 ?></label>
                    <div class="mt-2 flex justify-evenly items-center rounded border border-black p-3">
                        <p><?= $question['operand_1'] ?></p>
                        <p><?= $question['operator'] ?></p>
                        <p><?= $question['operand_2'] ?></p>
                        <input name="question<?= $index ?>id" value="<?= $question['id'] ?>" hidden>
                        <input id="player_answer<?= $index ?>" required name="player_answer<?= $index ?>" type="number" autocomplete="player_answer" required class="block w-12 text-center rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
            <?php endforeach ?>
            <div>
                <button type="submit" <?php if ($game['is_answered']) : ?> disabled <?php endif ?> name="submitBtn" class="disabled:opacity-25 disabled:cursor-not-allowed flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    <?= $game['is_answered'] ? 'Kamu sudah menjawab game ini' : 'Simpan Jawaban' ?>
                </button>
            </div>
        </form>

        <p class="mt-10 text-center text-sm text-gray-500">
            Kamu harus mengirim jawaban sebelum waktu berakhir. Mohon untuk tidak meninggalkan halaman ini agar kamu tidak kehilangan progres.
        </p>
    </div>
</div>



<?php require_once '../../partials/footer.php'; ?>