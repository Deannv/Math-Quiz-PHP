<?php require_once 'partials/header.php'; ?>

<div class="bg-white h-dvh">
    <div class="relative isolate px-6 pt-14 lg:px-8">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
            <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                <div class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                    Pelajari lebih lanjut. <a href="#about" class="font-semibold text-indigo-600"><span class="absolute inset-0" aria-hidden="true"></span>Tentang Kami <span aria-hidden="true">&rarr;</span></a>
                </div>
            </div>
            <div class="text-center">
                <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Math isn't mathing</h1>
                <p class="mt-6 text-lg leading-8 text-gray-600">Bergabung dengan lebih dari 10.000 pengguna untuk memperebutkan posisi menjadi matematikawan terbaik! kalahkan rekor dan teruslah berhitung.</p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="views/auth/register.php" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Mulai Bergabung</a>
                    <a href="views/auth/login.php" class="text-sm font-semibold leading-6 text-gray-900">Login <span aria-hidden="true">→</span></a>
                </div>
            </div>
        </div>
        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
            <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
    </div>
</div>

<div class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:overflow-visible lg:px-0" id="about">
    <div class="absolute inset-0 -z-10 overflow-hidden">
        <svg class="absolute left-[max(50%,25rem)] top-0 h-[64rem] w-[128rem] -translate-x-1/2 stroke-gray-200 [mask-image:radial-gradient(64rem_64rem_at_top,white,transparent)]" aria-hidden="true">
            <defs>
                <pattern id="e813992c-7d03-4cc4-a2bd-151760b470a0" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
                    <path d="M100 200V.5M.5 .5H200" fill="none" />
                </pattern>
            </defs>
            <svg x="50%" y="-1" class="overflow-visible fill-gray-50">
                <path d="M-100.5 0h201v201h-201Z M699.5 0h201v201h-201Z M499.5 400h201v201h-201Z M-300.5 600h201v201h-201Z" stroke-width="0" />
            </svg>
            <rect width="100%" height="100%" stroke-width="0" fill="url(#e813992c-7d03-4cc4-a2bd-151760b470a0)" />
        </svg>
    </div>
    <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start lg:gap-y-10">
        <div class="lg:col-span-2 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
            <div class="lg:pr-4">
                <div class="lg:max-w-lg">
                    <p class="text-base font-semibold leading-7 text-indigo-600">Tentang Kami</p>
                    <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Mulailah dengan operator bilangan mudah</h1>
                    <p class="mt-6 text-xl leading-8 text-gray-700">
                        Tidak ada tempat untuk mengasah skill komputasi dengan menggabungkan permainan kompetitif yang lebih baik dari kami.
                    </p>
                </div>
            </div>
        </div>
        <div class="-ml-12 -mt-12 p-12 lg:sticky lg:top-4 lg:col-start-2 lg:row-span-2 lg:row-start-1 lg:overflow-hidden">
            <img class="w-[48rem] max-w-none rounded-xl bg-gray-900 shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem]" src="https://images.unsplash.com/photo-1556302132-40bb13638500?q=80&w=2076&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
        </div>
        <div class="lg:col-span-2 lg:col-start-1 lg:row-start-2 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
            <div class="lg:pr-4">
                <div class="max-w-xl text-base leading-7 text-gray-700 lg:max-w-lg">
                    <p>
                        Mulailah petualangan matematika Anda sekarang dan buktikan bahwa matematika bisa menjadi lebih dari sekadar angka — matematika bisa menjadi sebuah petualangan yang menyenangkan dan memuaskan!
                    </p>
                    <ul role="list" class="mt-8 space-y-8 text-gray-600">
                        <li class="flex gap-x-3">
                            <svg class="mt-1 h-5 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.5 17a4.5 4.5 0 01-1.44-8.765 4.5 4.5 0 018.302-3.046 3.5 3.5 0 014.504 4.272A4 4 0 0115 17H5.5zm3.75-2.75a.75.75 0 001.5 0V9.66l1.95 2.1a.75.75 0 101.1-1.02l-3.25-3.5a.75.75 0 00-1.1 0l-3.25 3.5a.75.75 0 101.1 1.02l1.95-2.1v4.59z" clip-rule="evenodd" />
                            </svg>
                            <span><strong class="font-semibold text-gray-900">Unggah Record Kamu.</strong> Kamu dapat membagikan pencapaian dan nilai skormu ke user lain melalui leaderboard.</span>
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="mt-1 h-5 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
                            </svg>
                            <span><strong class="font-semibold text-gray-900">Privasi Record.</strong> Jika kamu adalah seorang yang sangat rahasia, kamu dapat mengatur informasi profile sebagai private.</span>
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="mt-1 h-5 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path d="M4.632 3.533A2 2 0 016.577 2h6.846a2 2 0 011.945 1.533l1.976 8.234A3.489 3.489 0 0016 11.5H4c-.476 0-.93.095-1.344.267l1.976-8.234z" />
                                <path fill-rule="evenodd" d="M4 13a2 2 0 100 4h12a2 2 0 100-4H4zm11.24 2a.75.75 0 01.75-.75H16a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75h-.01a.75.75 0 01-.75-.75V15zm-2.25-.75a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75H13a.75.75 0 00.75-.75V15a.75.75 0 00-.75-.75h-.01z" clip-rule="evenodd" />
                            </svg>
                            <span><strong class="font-semibold text-gray-900">Jejak Terdata.</strong> Seluruh progres kamu akan direkam sebagai acuan perkembanganmu dalam berhitung.</span>
                        </li>
                    </ul>
                    <p class="mt-8">Bergabunglah dengan komunitas pemain matematika kami yang ramah dan bersemangat. Bagikan strategi, tanyakan pertanyaan, dan ajak teman untuk bermain bersama dalam tantangan khusus.</p>
                    <h2 class="mt-16 text-2xl font-bold tracking-tight text-gray-900">Pemula? Bukan sebuah masalah.</h2>
                    <p class="mt-6">Bermainlah dengan menggunakan tingkat kesulitan awal untuk mengasah skillmu, kami menyediakan waktu yang sangat variatif pada laman kompetisi.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-3">
        <div class="max-w-2xl">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Meet my creator</h2>
            <p class="mt-6 text-lg leading-8 text-gray-600">Seorang mahasiswa banyak beban yang menginginkan roti bakar rasa ayam, berkomitmen untuk mengembangkan sebuah website seperti anak sendiri.</p>
        </div>
        <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
            <li>
                <div class="flex items-center gap-x-6">
                    <img class="h-16 w-16 rounded-full" src="https://cdn.discordapp.com/attachments/1077850837298204702/1235020317424877686/ITB-RESMI-300x300.png?ex=6632d9cd&is=6631884d&hm=d8827b965dbab3b4eb147b432c9559b4f5d135c00a3c8cf52c6d1d54c78e39c8&" alt="">
                    <div>
                        <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Kemas Muhamad A.D 220040225</h3>
                        <p class="text-sm font-semibold leading-6 text-indigo-600"></p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>




<?php require_once 'partials/footer.php'; ?>