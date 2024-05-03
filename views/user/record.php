<?php
require_once '../../partials/header.php';
session_start();
require_once '../../app/Game.php';

if (!isset($_SESSION['username'])) {
    header('Location: ../auth/login.php');
    exit();
}

$games  = $Game->getRecord();
$scores = $Game->getScore();

?>
<header class="absolute inset-x-0 top-0 z-50">
    <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="dashboard.php" class="-m-1.5 p-1.5">
                <span class="sr-only">Matematika</span>
                <img class="h-8 w-auto" src="https://cdn.discordapp.com/attachments/1077850837298204702/1235029545472757821/icon.png?ex=6632e265&is=663190e5&hm=a6fe8934110fe2301a14315b01b369c245f0875cd12ce8efa68a40e62eab8250&" alt="">
            </a>
        </div>
        <div class="flex lg:hidden">
            <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            <a href="dashboard.php" class="text-sm font-semibold leading-6">Dashboard</a>
            <a href="record.php" class="text-sm font-semibold text-indigo-600 leading-6 text-gray-900">Records</a>
            <a href="../auth/logout.php" class="text-sm font-semibold leading-6 text-gray-900">Logout</a>
        </div>
    </nav>
</header>
<div class="bg-white py-24 sm:py-32">
    <div class="relative isolate px-6 pt-14 lg:px-8">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>

        <div class="py-24 w-2/5 mx-auto sm:py-32">
            <div class="mx-auto w-full px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:mx-0">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Hallo, <?= $_SESSION['nama'] ?></h2>
                    <p class="mt-2 text-lg leading-8 text-gray-600">Selamat datang di daftar record permainanmu. Score kamu <?= $scores ?></p>
                </div>
            </div>
        </div>


        <?php foreach ($games as $game) : ?>
            <div class="relative w-2/5 mx-auto overflow-x-auto shadow-md sm:rounded-lg mb-5">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                    <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white">
                        <?= $game['game_start'] ?>
                        <?php if (!$game['is_answered'] || $game['timeout']) : ?>
                            <span class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded">
                                Tidak Terjawab / Timeout
                            </span>
                        <?php endif ?>
                        <?php if ($game['is_answered'] && !$game['timeout']) : ?>
                            <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded">
                                Berhasil Menjawab
                            </span>
                        <?php endif ?>
                    </caption>
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                #
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Soal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($game['questions'] as $i => $question) : ?>
                            <tr class="bg-white border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    <?= $i + 1 ?>
                                </th>
                                <td class="px-6 py-4">
                                    <?= $question['operand_1'] ?>&nbsp;&nbsp;<?= $question['operator'] ?>&nbsp;&nbsp;<?= $question['operand_2'] ?>&nbsp;&nbsp;=&nbsp;&nbsp;<?= $question['answer'] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $question['status'] ?>
                                </td>
                            </tr>
                        <?php endforeach ?>
                        <tr>
                            <td colspan="2" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">Total score</td>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap"><?= $game['score'] ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        <?php endforeach ?>

        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
            <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
    </div>
</div>

<?php require_once '../../partials/footer.php'; ?>