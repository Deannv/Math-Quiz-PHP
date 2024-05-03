<?php require_once '../../partials/header.php'; ?>

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <img class="mx-auto h-10 w-auto" src="https://cdn.discordapp.com/attachments/1077850837298204702/1235029545472757821/icon.png?ex=6632e265&is=663190e5&hm=a6fe8934110fe2301a14315b01b369c245f0875cd12ce8efa68a40e62eab8250&" alt="Your Company">
        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your account</h2>
    </div>
    <?php
    require_once '../../app/User.php';
    session_start();
    if (isset($_SESSION['username'])) {
        header('Location: ../user/dashboard.php');
        exit();
    }

    if (isset($_POST['loginBtn'])) {
        $result = $User->login($_POST);
        if ($result['error']) {
            echo '<h2 class="text-base font-semibold leading-7 text-red-600 w-100 text-center mt-5">' . $result['message'] . '</h2>';
        } else {
            header('Location: ../user/dashboard.php');
        }
    }

    ?>
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="login.php" method="POST">
            <div>
                <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
                <div class="mt-2">
                    <input id="username" name="username" type="text" autocomplete="username" required class="block w-full rounded-md border-0 px-3 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                </div>
                <div class="mt-2">
                    <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 px-3 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div>
                <button type="submit" name="loginBtn" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
            </div>
        </form>

        <p class="mt-10 text-center text-sm text-gray-500">
            belum memiliki akun?
            <a href="register.php" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">bergabung sekarang.</a>
        </p>
    </div>
</div>


<?php require_once '../../partials/footer.php'; ?>