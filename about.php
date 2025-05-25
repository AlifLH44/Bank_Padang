<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    
    <title>About</title>
</head>
<body>
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
          <a href="https://flowbite.com/" class="flex items-center">
            <img src="assets/logo.png" class="h-8 mr-3" alt="">
              <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
          </a>
          <button data-collapse-toggle="navbar-defaults" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
              </svg>
          </button>
          <div class="hidden w-full md:block md:w-auto bg-gray-700" id="navbar-defaults">
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 
            rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
              <li>
                <a href="index.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Home</a>
              </li>
              <li>
                <a href="about.php" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">About</a>
              </li>
              <li>
                <a href="service.html" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
              </li>
              <li>
                <a href="record.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Record</a>
              </li>
              <li>
                <a href="kontak.html" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
 
      <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
          <div class="mx-auto max-w-2xl lg:mx-0">
            <img src="assets/logo.png" class="h-12 mr-6" alt="">
            <p class="mt-2 text-lg leading-8 text-gray-600">Memiliki Integrasi dalam pelayanan.</p>
          </div>
          <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            <article class="flex max-w-xl flex-col items-start justify-between">
              <div class="flex items-center gap-x-4 text-xs">
                <time datetime="2020-03-16" class="text-gray-500">Januari 12, 2023</time>
                <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Sekretaris</a>
              </div>
              <div class="group relative">
                <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                  <a href="#">
                    <span class="absolute inset-0"></span>
                    Mending Turu Dek
                  </a>
                </h3>
                <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">Money will come and go. We all know that. The most important thing in life will always be the people in this room. Right here, right now.</p>
              </div>
              <div class="relative mt-8 flex items-center gap-x-4">
                <img src="assets/profil1.jpg" alt="" class="h-15 w-10 rounded-full bg-gray-50">
                <div class="text-sm leading-6">
                  <p class="font-semibold text-gray-900">
                    <a href="#">
                      <span class="absolute inset-0"></span>
                      Irgi Fahrezi
                    </a>
                  </p>
                  <p class="text-gray-600"></p>
                </div>
              </div>
            </article>

              <article class="flex max-w-xl flex-col items-start justify-between">
                <div class="flex items-center gap-x-4 text-xs">
                  <time datetime="2020-03-16" class="text-gray-500">October 14, 2023</time>
                  <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Programmer</a>
                </div>
                <div class="group relative">
                  <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                    <a href="#">
                      <span class="absolute inset-0"></span>
                      Life is about time
                    </a>
                  </h3>
                  <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">Lebih baik satu tindakan daripada seribu kata namun tidak ada perubahan.".</p>
                </div>
                <div class="relative mt-8 flex items-center gap-x-4">
                  <img src="https://play-lh.googleusercontent.com/hKZp5Jg2rmFMsD0O2wohA1NkQTHBokXwalRpoxmjYt94WyMu4nVN0rXtbcTmh7tIur8=w202-h360-rw" alt="" class="h-10 w-10 rounded-full bg-gray-50">
                  <div class="text-sm leading-6">
                    <p class="font-semibold text-gray-900">
                      <a href="#">
                        <span class="absolute inset-0"></span>
                        Alif Molino Rizki
                      </a>
                    </p>
                    <p class="text-gray-600">Kepala Divisi IT</p>
                  </div>
                </div>
              </article>
              <article class="flex max-w-xl flex-col items-start justify-between">
                <div class="flex items-center gap-x-4 text-xs">
                  <time datetime="2020-03-16" class="text-gray-500">November 16, 2023</time>
                  <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
                </div>
                <div class="group relative">
                  <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                    <a href="#">
                      <span class="absolute inset-0"></span>
                      Speed is limit
                    </a>
                  </h3>
                  <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">Tetaplah berlaku santun dan profesional, termasuk kepada orang yang biasa berlaku sebaliknya kepada Anda. Ketidak-santunan orang lain tidak boleh mengurangi keindahan pribadi Anda.</p>
                </div>
                <div class="relative mt-8 flex items-center gap-x-4">
                  <img src="https://upload.wikimedia.org/wikipedia/id/e/eb/Manchester_City_FC_badge.svg" alt="" class="h-10 w-10 rounded-full bg-gray-50">
                  <div class="text-sm leading-6">
                    <p class="font-semibold text-gray-900">
                      <a href="#">
                        <span class="absolute inset-0"></span>
                        Diko Karnavian
                      </a>
                    </p>
                    <p class="text-gray-600">Marketing</p>
                  </div>
                </div>
              </article>
              <article class="flex max-w-xl flex-col items-start justify-between">
                <div class="flex items-center gap-x-4 text-xs">
                  <time datetime="2020-03-16" class="text-gray-500">August 16, 2023</time>
                  <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Design</a>
                </div>
                <div class="group relative">
                  <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                    <a href="#">
                      <span class="absolute inset-0"></span>
                      Warnai Hidupmu
                    </a>
                  </h3>
                  <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">"Kita boleh punya tank terbaik dan pesawat tempur terbaik. Namun pertahanan terbaik suatu perusahaan adalah kemakmuran & kesejahteraan karyawan.</p>
                </div>
                <div class="relative mt-8 flex items-center gap-x-4">
                  <img src="https://cdn.idntimes.com/content-images/duniaku/post/20200310/kimimaro-1-d027ad136d68887991f536ac017069c2.png" alt="" class="h-10 w-10 rounded-full bg-gray-50">
                  <div class="text-sm leading-6">
                    <p class="font-semibold text-gray-900">
                      <a href="#">
                        <span class="absolute inset-0"></span>
                        Muhammad Zaeid
                      </a>
                    </p>
                    <p class="text-gray-600">Graphic Design</p>
                  </div>
                </div>
              </article>
              <article class="flex max-w-xl flex-col items-start justify-between">
                <div class="flex items-center gap-x-4 text-xs">
                  <time datetime="2020-03-16" class="text-gray-500">Maret 16, 2023</time>
                  <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Ketua</a>
                </div>
                <div class="group relative">
                  <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                    <a href="#">
                      <span class="absolute inset-0"></span>
                      Terus Berjalan
                    </a>
                  </h3>
                  <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">Saya hanyalah SEMUT yang harus melawan GAJAH-GAJAH yang punya segalanya.</p>
                </div>
                <div class="relative mt-8 flex items-center gap-x-4">
                  <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="h-10 w-10 rounded-full bg-gray-50">
                  <div class="text-sm leading-6">
                    <p class="font-semibold text-gray-900">
                      <a href="#">
                        <span class="absolute inset-0"></span>
                        Ilham Asyuari
                      </a>
                    </p>
                    <p class="text-gray-600">Co-Founder / CTO</p>
                  </div>
                </div>
              </article>

            
      
            <!-- More posts... -->
          </div>
        </div>
      </div>
      

    
</body>
</html>