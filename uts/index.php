<?php
  // Koneksi ke database 
  include 'koneksi/config.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

</head> 
<body>

<?php include('header.php'); ?>

<!-- div home -->
<div class="relative isolate px-6 pt-14 lg:px-8" data-aos="fade-up">
  <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
    <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
  </div>
  <div class="mx-auto max-w-2xl py-10 sm:py-25 lg:py-25" data-aos="fade-up">
    <div class="hidden sm:mb-8 sm:flex sm:justify-center">
      <!-- Optional content here -->
    </div>
    <div class="text-center" data-aos="fade-up">
      <h1 class="text-balance text-5xl font-semibold tracking-tight text-gray-900 sm:text-7xl">Selamat Datang di MukNews</h1>
      <p class="mt-8 text-pretty text-lg font-medium text-gray-500 sm:text-xl/8">Memberikan Berita Terbaru hehe</p>
      <div class="mt-10 flex items-center justify-center gap-x-6" data-aos="fade-up">
        <a href="login.php" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Login</a>
        <a href="#berita-terkini" class="text-sm/6 font-semibold text-gray-900">Learn more <span aria-hidden="true">→</span></a>
      </div>
    </div>
  </div>
  <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true" data-aos="fade-up">
    <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
  </div>


<!-- div1 (Increased margin-top for more space) -->
<div id="berita-terkini" class="bg-white py-10 sm:py-14 mt-40" data-aos="fade-up">
  <div class="mx-auto max-w-7xl px-10 lg:px-12 flex justify-center items-center">
    <div class="text-center max-w-2xl lg:mx-3 mx-auto">
      <h2 class="text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Berita Terkini</h2>
      <p class="mt-2 text-lg text-gray-600">hehe.</p>
    </div>
  </div>
</div>




<!-- div2 (Perubahan margin dan padding) -->
<div class="bg-white py-16 sm:py-24 mt-0" data-aos="fade-up">
  <div class="mx-auto max-w-7xl px-10 lg:px-12">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
      <!-- Post 1 -->
      <article class="flex max-w-xl flex-col items-start justify-between">
        <div class="flex items-center gap-x-4 text-xs" data-aos="fade-up">
          <time datetime="2020-03-16" class="text-gray-500">Minggu, 17 November 2024 04:27 WIB</time>
          <a href="https://www.instagram.com/muklisnrdnkhrdn?igsh=d3gwc2sxMmtob3R6" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Hot News</a>
        </div>
        <div class="group relative" data-aos="fade-up">
          <h3 class="mt-3 text-lg font-semibold text-gray-900 group-hover:text-gray-600">
            <a href="https://www.tribunnews.com/regional/2024/11/17/pengakuan-mahasiswa-pelaku-tabrak-lari-di-sleman-hilang-konsentrasi-menyetir-dioral-teman-wanita#google_vignette">
              <span class="absolute inset-0"></span>
              Pengakuan Mahasiswa Pelaku Tabrak Lari di Sleman, Hilang Konsentrasi Menyetir 'Dioral' Teman Wanita
            </a>
          </h3>
          <p class="mt-5 line-clamp-3 text-sm text-gray-600">TRIBUNNEWS.COM, SLEMAN - Santoso (45), seorang pejalan kaki di Ringroad Utara, Kalurahan
          Sinduadi, Mlati, Kabupaten Sleman, Yogyakarta menjadi korban tabrak lari.</p>
        </div>
        <div class="relative mt-8 flex items-center gap-x-4" data-aos="fade-up">
          <img src="assets/dany.png" alt="Danny" class="w-10 h-10 rounded-full bg-gray-50">
          <div class="text-sm">
            <p class="font-semibold text-gray-900">
              <a href="#">
                <span class="absolute inset-0"></span>
                Danny
              </a>
            </p>
            <p class="text-gray-600">Copet</p>
          </div>
        </div>
      </article>

      <!-- Post 2 -->
      <article class="flex max-w-xl flex-col items-start justify-between" data-aos="fade-up">
        <div class="flex items-center gap-x-4 text-xs" data-aos="fade-up">
          <time datetime="2021-07-22" class="text-gray-500">Minggu, 17 Nov 2024</time>
          <a href="https://www.instagram.com/muklisnrdnkhrdn?igsh=d3gwc2sxMmtob3R6" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Sport</a>
        </div>
        <div class="group relative" data-aos="fade-up">
          <h3 class="mt-3 text-lg font-semibold text-gray-900 group-hover:text-gray-600">
            <a href="https://www.cnnindonesia.com/olahraga/20241117194132-156-1167620/jorge-martin-juara-dunia-motogp-2024">
              <span class="absolute inset-0"></span>
              Jorge Martin Juara Dunia MotoGP 2024
            </a>
          </h3>
          <p class="mt-5 line-clamp-3 text-sm text-gray-600">Jakarta, CNN Indonesia -- Jorge Martin merebut gelar juara dunia MotoGP 2024 setelah finis ketiga di
MotoGP Barcelona 2024 di belakang Francesco Bagnaia dan Marc Marquez.
Dalam balapan di Sirkuit Catalunya, Minggu (17/11), Martin sempat memberi tekanan kepada Bagnaia saat
start. Pecco yang start dari pole berhasil mempertahankan posisi terdepan di tikungan pertama.
Di lap kedua, Marquez berhasil menyalip Martin di tikungan pertama. Setelah itu hampir tidak ada insiden
berarti di sisa balapan MotoGP Barcelona 2024.
</p>
        </div>
        <div class="relative mt-8 flex items-center gap-x-4" data-aos="fade-up">
          <img src="assets/rival.png" alt="Rival" class="w-10 h-10 rounded-full bg-gray-50">
          <div class="text-sm" data-aos="fade-up">
            <p class="font-semibold text-gray-900">
              <a href="#">
                <span class="absolute inset-0"></span>
                Rival
              </a>
            </p>
            <p class="text-gray-600">Psikolog</p>
          </div>
        </div>
      </article>

      <!-- Post 3 -->
      <article class="flex max-w-xl flex-col items-start justify-between" data-aos="fade-up">
        <div class="flex items-center gap-x-4 text-xs" data-aos="fade-up">
          <time datetime="2022-05-10" class="text-gray-500">17 Nov 2024, 21:00 WIB</time>
          <a href="https://www.instagram.com/muklisnrdnkhrdn?igsh=d3gwc2sxMmtob3R6" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Content kreator</a>
        </div>
        <div class="group relative" data-aos="fade-up">
          <h3 class="mt-3 text-lg font-semibold text-gray-900 group-hover:text-gray-600">
            <a href="https://www.liputan6.com/regional/read/5788696/dinda-anwar-selebgram-medan-yang-kini-terjun-ke-dunia-boxing-influencer">
              <span class="absolute inset-0"></span>
              Dinda Anwar, Selebgram Medan yang Kini Terjun ke Dunia Boxing Influencer
            </a>
          </h3>
          <p class="mt-5 line-clamp-3 text-sm text-gray-600">Sabagai seorang konten kreator, Dinda Anwar tidak cepat merasa puas dengan satu hal. Kini, selebgram Kota Medan, Sumatera Utara (Sumut), terjun ke dunia boxing influencer. <div class="relative mt-8 flex items-center gap-x-4" data-aos="fade-up">
          <img src="https://images.unsplash.com/photo-1597645587827-2aaf9b4b7bc6?crop=entropy&cs=tinysrgb&fit=max&ixid=MXwyMDg1N3wwfDF8c2VhY2h8Mnx8fGVhcnxlbnwwfHx8fHw&ixlib=rb-1.2.1&q=80&w=256" alt="Jessica Lee" class="w-10 h-10 rounded-full bg-gray-50">
          <div class="text-sm" data-aos="fade-up">
            <p class="font-semibold text-gray-900">
              <a href="#">
                <span class="absolute inset-0"></span>
                Mukhlis
              </a>
            </p>
            <p class="text-gray-600">Content kreator</p>
          </div>
        </div>
      </article>
    </div>
  </div>
</div>

<div class="container flex flex-col px-6 py-10 mx-auto space-y-6 lg:h-[32rem] lg:py-16 lg:flex-row lg:items-center" data-aos="fade-up">
            <div class="w-full lg:w-1/2" data-aos="fade-up">
                <div class="lg:max-w-lg" data-aos="fade-up">
                    <h1 class="text-3xl font-bold tracking-wide text-gray-800 dark:text-white lg:text-5xl">
                        Easiest way to create your website
                    </h1>
                    
                    <div class="mt-8 space-y-5" data-aos="fade-up">
                        <p class="flex items-center -mx-2 text-gray-700 dark:text-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>

                            <span class="mx-2">Clean and Simple Layout</span>
                        </p>

                        <p class="flex items-center -mx-2 text-gray-700 dark:text-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>

                            <span class="mx-2">Just Copy Paste Codeing</span>
                        </p>

                        <p class="flex items-center -mx-2 text-gray-700 dark:text-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>

                            <span class="mx-2">Easy to Use</span>
                        </p>
                    </div>
                </div>

                <div class="w-full mt-8 bg-transparent border rounded-md lg:max-w-sm dark:border-gray-700 focus-within:border-blue-400 focus-within:ring focus-within:ring-blue-300 dark:focus-within:border-blue-400 focus-within:ring-opacity-40" data-aos="fade-up">
                    <form class="flex flex-col lg:flex-row">
                        <input type="email" placeholder="Enter your email address" class="flex-1 h-10 px-4 py-2 m-1 text-gray-700 placeholder-gray-400 bg-transparent border-none appearance-none dark:text-gray-200 focus:outline-none focus:placeholder-transparent focus:ring-0" /> 
                        
                        <button type="button" class="h-10 px-4 py-2 m-1 text-white transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-400 focus:outline-none focus:bg-blue-400">
                            Join Us
                        </button>
                    </form>
                </div>
            </div>
    
            <div class="flex items-center justify-center w-full h-96 lg:w-1/2" data-aos="fade-up">
                <img class="object-cover w-full h-full mx-auto rounded-md lg:max-w-2xl" src="https://images.unsplash.com/photo-1543269664-7eef42226a21?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="glasses photo">
            </div>
        </div>
    </section>

    <div class="max-w-2xl px-8 py-4 bg-white rounded-lg shadow-md dark:bg-gray-800" data-aos="fade-up">
    <div class="flex items-center justify-between" data-aos="fade-up">
        <span class="text-sm font-light text-gray-600 dark:text-gray-400">selasa, 19 Nov 2024</span>
        <a href="https://www.instagram.com/muklisnrdnkhrdn?igsh=d3gwc2sxMmtob3R6" class="px-3 py-1 text-sm font-bold text-gray-100 transition-colors duration-300 transform bg-gray-600 rounded cursor-pointer hover:bg-gray-500" tabindex="0" role="button">Design</a>
    </div>

    <div class="mt-2" data-aos="fade-up">
        <a href="https://www.instagram.com/muklisnrdnkhrdn?igsh=d3gwc2sxMmtob3R6" class="text-xl font-bold text-gray-700 dark:text-white hover:text-gray-600 dark:hover:text-gray-200 hover:underline" tabindex="0" role="link">Desainer dan Pengembang</a>
        <p class="mt-2 text-gray-600 dark:text-gray-300">Mukhlis adalah seorang pria yang sederhana dan rendah hati. Dia menjalani hidup dengan penuh semangat dan kebijaksanaan. Meskipun terkadang menghadapi tantangan, Mukhlis selalu mampu mengatasinya dengan sabar dan tegar. Kehidupannya adalah cerita tentang ketulusan, kerja keras, dan perjuangan dalam meraih mimpi-mimpinya.</div>

    <div class="flex items-center justify-between mt-4" data-aos="fade-up">
        <a href="https://www.instagram.com/muklisnrdnkhrdn?igsh=d3gwc2sxMmtob3R6" class="text-blue-600 dark:text-blue-400 hover:underline" tabindex="0" role="link">Read more</a>

        <div class="flex items-center" data-aos="fade-up">
            <img class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block" src="Photo" alt="avatar">
            <a class="font-bold text-gray-700 cursor-pointer dark:text-gray-200" tabindex="0" role="link">22552011081_Mukhlis</a>
        </div>
    </div>
</div>

<!-- component -->
<html>
  <head>
    <link
      rel="stylesheet"
      href="https://horizon-ui.com/shadcn-nextjs-boilerplate/_next/static/css/32144b924e2aa5af.css"
    />
  </head>

  <body>
    <div class="flex flex-col justify-center items-center bg-white min-h-[100vh]" data-aos="fade-up">
      <div
        class="mx-auto flex w-full mt-20 flex-col justify-center px-5 pt-0 md:h-[unset] max-w-[520px] lg:px-6 xl:pl-0"
      >
        <div class="relative flex w-full flex-col pt-[20px] md:pt-0" data-aos="fade-up">
          <div
            class="rounded-lg border bg-card text-card-foreground shadow-sm mb-5 mr-0 h-min max-w-full pt-8 pb-6 px-6 dark:border-zinc-800 md:mb-0"
          >
            <div>
              <p
                class="text-xl font-extrabold text-zinc-950 dark:text-white md:text-3xl"
              >
                Notifications
              </p>
              <p
                class="mb-5 mt-1 text-sm font-medium text-zinc-500 dark:text-zinc-400 md:mt-4 md:text-base"
              >
                You have 3 unread messages.
              </p>
            </div>
            <div
              class="rounded-lg border bg-card text-card-foreground shadow-sm mb-5 h-min flex items-center max-w-full py-4 px-4 dark:border-zinc-800" data-aos="fade-up"
            >
              <svg
                stroke="currentColor"
                fill="none"
                stroke-width="1.5"
                viewBox="0 0 24 24"
                aria-hidden="true"
                class="w-6 h-6 me-4"
                height="1em"
                width="1em"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5"
                ></path>
              </svg>
              <div>
                <p class="text-zinc-950 dark:text-white font-medium mb-1" data-aos="fade-up">
                  Push Notifications
                </p>
                <p class="text-zinc-500 dark:text-zinc-400 font-medium">
                  Send notifications to device.
                </p>
              </div>
              <button
                type="button"
                role="switch"
                aria-checked="true"
                data-state="checked"
                value="on"
                class="peer inline-flex h-6 w-11 shrink-0 cursor-pointer items-center rounded-full border-2 border-transparent transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 focus-visible:ring-offset-background disabled:cursor-not-allowed disabled:opacity-50 data-[state=checked]:bg-primary data-[state=unchecked]:bg-input ms-auto"
              >
                <span
                  data-state="checked"
                  class="pointer-events-none block h-5 w-5 rounded-full bg-background shadow-lg ring-0 transition-transform data-[state=checked]:translate-x-5 data-[state=unchecked]:translate-x-0"
                ></span>
              </button>
            </div>
            <div
              class="relative mx-auto flex w-full max-w-full md:pt-[unset] mb-6" data-aos="fade-up"
            >
              <div class="w-2 h-2 mt-1 me-4 rounded-full bg-blue-500"></div>
              <div>
                <p class="text-zinc-950 dark:text-white font-medium mb-1">
                  Your call has been confirmed.
                </p>
                <p class="text-zinc-500 dark:text-zinc-400 font-medium">
                  1 hour ago
                </p>
              </div>
            </div>
            <div
              class="relative mx-auto flex w-full max-w-full md:pt-[unset] mb-6" data-aos="fade-up"
            >
              <div class="w-2 h-2 mt-1 me-4 rounded-full bg-blue-500" data-aos="fade-up"></div>
              <div>
                <p class="text-zinc-950 dark:text-white font-medium mb-1" data-aos="fade-up">
                  You have a new message!
                </p>
                <p class="text-zinc-500 dark:text-zinc-400 font-medium">
                  1 hour ago
                </p>
              </div>
            </div>
            <div class="relative mx-auto flex w-full max-w-full md:pt-[unset]" data-aos="fade-up">
              <div class="w-2 h-2 mt-1 me-4 rounded-full bg-blue-500" data-aos="fade-up"></div>
              <div>
                <p class="text-zinc-950 dark:text-white font-medium mb-1">
                  Your subscription is expiring soon!
                </p>
                <p class="text-zinc-500 dark:text-zinc-400 font-medium">
                  2 hours ago
                </p>
              </div>
            </div>
            <button
              class="whitespace-nowrap ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 flex w-full max-w-full mt-6 items-center justify-center rounded-lg px-4 py-4 text-base font-medium"
            >
              <svg
                stroke="currentColor"
                fill="none"
                stroke-width="2"
                viewBox="0 0 24 24"
                aria-hidden="true"
                class="me-2 h-6 w-6"
                height="1em"
                width="1em"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M5 13l4 4L19 7"
                ></path>
              </svg>
              Mark all as read
            </button>
          </div>
        </div>
      </div>
      <p class="font-normal text-zinc-950 mt-20 mx-auto w-max">
        Notifications Card Component  from
        <a
          href="https://horizon-ui.com/shadcn-ui?ref=twcomponents"
          target="_blank"
          class="text-brand-500 font-bold"
          >Mukhlis</a>
      </p>
    </div>
  </body>


</html>
</body>
</html>
 
<footer>
<hr class="my-3 md:my-6 border-gray-400" />
		<div class="flex flex-wrap items-center md:justify-between justify-center" data-aos="fade-up">
			<div class="w-full md:w-4/12 px-4 mx-auto text-center">
				<div class="text-sm text-gray-600 dark:text-gray-400 py-1">
					&copy;
					<span id="year">Copyright by</span>
					<a href="https://github.com/ahampriyanshu" class="hover:underline hover:text-gray-900">22552011081_Mukhlis Nurdin Khoerudin</a>.
				</div>
			</div>
		</div>
	</div>
</footer>

<!-- AOS JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    // Inisialisasi AOS
    AOS.init({
        duration: 1000,  // Durasi animasi dalam milidetik
        easing: 'ease-in-out',  // Tipe easing untuk animasi
        once: true,  // Agar animasi hanya terjadi sekali ketika elemen muncul
    });
</script>

