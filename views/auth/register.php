<?php require_once '../../partials/header.php'; ?>

<div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
    <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
        <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="mx-auto max-w-2xl text-center">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Bergabung Dengan Kami</h2>
        <p class="mt-2 text-lg leading-8 text-gray-600">Satu langkah untuk menjadi salah satu dari matematikawan terbaik.</p>
    </div>
    <?php
    require_once '../../app/User.php';
    session_start();
    if (isset($_SESSION['username'])) {
        header('Location: ../user/dashboard.php');
        exit();
    }

    if (isset($_POST['registerBtn'])) {
        $result = $User->register($_POST);
        if ($result['error']) {
            echo '<h2 class="text-base font-semibold leading-7 text-red-600 w-100 text-center mt-5">' . $result['message'] . '</h2>';
        } else {
            header('Location: login.php');
        }
    }

    ?>
    <form action="register.php" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
        <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
            <div class="sm:col-span-2">
                <label for="nama" class="block text-sm font-semibold leading-6 text-gray-900">Nama</label>
                <div class="mt-2.5">
                    <input type="text" name="nama" id="nama" autocomplete="organization" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div class="sm:col-span-2">
                <label for="username" class="block text-sm font-semibold leading-6 text-gray-900">Username</label>
                <div class="mt-2.5">
                    <input type="text" name="username" id="username" autocomplete="username" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <label for="password" class="block text-sm font-semibold leading-6 text-gray-900">Password</label>
                <div class="mt-2.5">
                    <input type="password" name="password" id="password" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <label for="re_password" class="block text-sm font-semibold leading-6 text-gray-900">Confirm Password</label>
                <div class="mt-2.5">
                    <input type="password" name="re_password" id="re_password" autocomplete="family-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
        </div>
        <div class="mt-10">
            <button type="submit" name="registerBtn" class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Daftar</button>
        </div>
    </form>
    <div class="hidden sm:mb-8 sm:flex sm:justify-center mt-5">
        <div class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
            Sudah memiliki akun? <a href="login.php" class="font-semibold text-indigo-600"><span class="absolute inset-0" aria-hidden="true"></span>Login <span aria-hidden="true">&rarr;</span></a>
        </div>
    </div>
</div>

<?php require_once '../../partials/footer.php'; ?>