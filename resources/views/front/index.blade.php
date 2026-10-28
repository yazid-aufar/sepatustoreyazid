<!DOCTYPE html>
<html lang="en" class="relative min-h-full">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1">


  <!-- Title -->
  <title>SepatuStore</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="../favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- CSS HS -->
  <link rel="stylesheet" href="{{ asset('assets/css/main.min.css?v=3.0.1') }}">

  <!-- Theme Check and Update -->
  <script>
    const html = document.querySelector('html');
    const isLightOrAuto = localStorage.getItem('hs_theme') === 'light' || (localStorage.getItem('hs_theme') === 'auto' && !window.matchMedia('(prefers-color-scheme: dark)').matches);
    const isDarkOrAuto = localStorage.getItem('hs_theme') === 'dark' || (localStorage.getItem('hs_theme') === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches);

    if (isLightOrAuto && html.classList.contains('dark')) html.classList.remove('dark');
    else if (isDarkOrAuto && html.classList.contains('light')) html.classList.remove('light');
    else if (isDarkOrAuto && !html.classList.contains('dark')) html.classList.add('dark');
    else if (isLightOrAuto && !html.classList.contains('light')) html.classList.add('light');
  </script>
  <style>
    @keyframes typing
    {
      0%
      {
        opacity: 1;
        scale: 1;
      }

      50%
      {
        opacity: 0.75;
        scale: 0.75;
      }

      100%
      {
        opacity: 1;
        scale: 1;
      }
    }
  </style>
</head>

<body class="dark:bg-neutral-900">
  <!-- ========== HEADER ========== -->
  <header class="flex flex-col lg:flex-nowrap z-50 bg-white dark:bg-neutral-900">
    <!-- Topbar -->
    <div class="bg-gray-100 dark:bg-neutral-800">
      <div class="max-w-[85rem] flex justify-between w-full mx-auto py-3 px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-x-5">
          <button type="button" class="flex items-center gap-x-1 text-start font-medium text-xs text-gray-800 hover:text-gray-600 focus:outline-hidden focus:text-gray-600 dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300" data-hs-overlay="#hs-pro-shmnlcm">
            <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
              <circle cx="12" cy="10" r="3" />
            </svg>
            Banjarmasin, Indonesia
          </button>
        </div>

        <ul class="flex flex-wrap items-center gap-3">
          <li class="inline-flex items-center relative text-xs text-gray-500 ps-3.5 first:ps-0 first:after:hidden after:absolute after:top-1/2 after:start-0 after:inline-block after:w-px after:h-2.5 after:bg-gray-400 after:rounded-full after:-translate-y-1/2 after:rotate-12 dark:text-neutral-500 dark:after:bg-neutral-600">
            <button type="button" class="flex items-center gap-x-1.5 text-start text-xs text-gray-500 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" data-hs-overlay="#hs-pro-shmnrsm">
              <img class="shrink-0 size-3.5 rounded-full" src="{{ asset('assets/vendor/svg-country-flags/png250px/us.png') }}" alt="English">
              English · USD
            </button>
          </li>
          <li class="hidden sm:inline-flex items-center relative text-xs text-gray-500 ps-3.5 first:ps-0 first:after:hidden after:absolute after:top-1/2 after:start-0 after:inline-block after:w-px after:h-2.5 after:bg-gray-400 after:rounded-full after:-translate-y-1/2 after:rotate-12 dark:text-neutral-500 dark:after:bg-neutral-600">
            <!-- Dark Mode -->
            <button type="button" class="hs-dark-mode-active:hidden flex hs-dark-mode items-center gap-x-1.5 text-sm text-gray-500 hover:text-gray-500 focus:outline-hidden focus:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" data-hs-theme-click-value="dark">
              <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path>
              </svg>
              <span class="sr-only">Dark mode</span>
            </button>
            <button type="button" class="hs-dark-mode-active:flex hidden hs-dark-mode items-center gap-x-1.5 text-sm text-gray-500 hover:text-gray-500 focus:outline-hidden focus:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" data-hs-theme-click-value="light">
              <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="4"></circle>
                <path d="M12 2v2"></path>
                <path d="M12 20v2"></path>
                <path d="m4.93 4.93 1.41 1.41"></path>
                <path d="m17.66 17.66 1.41 1.41"></path>
                <path d="M2 12h2"></path>
                <path d="M20 12h2"></path>
                <path d="m6.34 17.66-1.41 1.41"></path>
                <path d="m19.07 4.93-1.41 1.41"></path>
              </svg>
              <span class="sr-only">Light mode</span>
            </button>
            <!-- End Dark Mode -->
          </li>
        </ul>
      </div>
    </div>
    <!-- End Topbar -->

    <div class="max-w-[85rem] basis-full w-full mx-auto py-3 px-4 sm:px-6 lg:px-8">
      <div class="w-full flex md:flex-nowrap md:items-center gap-2 lg:gap-6">
        <!-- Logo -->
        <div class="order-1 md:w-auto flex items-center gap-x-1">
          <div class="hidden sm:block">
            <!-- Logo -->
            <a class="flex-none rounded-md text-xl inline-block font-semibold focus:outline-hidden focus:opacity-80" href="../../pro/shop-marketplace/index.html" aria-label="Preline">
              <svg
                class="h-auto"
                width="196"
                height="32"
                viewBox="0 0 196 32"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <text
                  x="33.57"
                  y="25.5"
                  font-family="Inter, Arial, sans-serif"
                  font-size="22"
                  font-weight="700"
                  class="fill-emerald-600 dark:fill-white"
                  fill="currentColor"
                >SepatuStore</text>

                <path
                  d="M1 29.5V16.5C1 9.87258 6.37258 4.5 13 4.5C19.6274 4.5 25 9.87258 25 16.5C25 23.1274 19.6274 28.5 13 28.5H12"
                  class="stroke-emerald-600 dark:stroke-white"
                  stroke="currentColor"
                  stroke-width="2"
                />

                <path
                  d="M5 29.5V16.66C5 12.1534 8.58172 8.5 13 8.5C17.4183 8.5 21 12.1534 21 16.66C21 21.1666 17.4183 24.82 13 24.82H12"
                  class="stroke-emerald-600 dark:stroke-white"
                  stroke="currentColor"
                  stroke-width="2"
                />

                <circle
                  cx="13"
                  cy="16.5214"
                  r="5"
                  class="fill-emerald-600 dark:fill-white"
                  fill="currentColor"
                />
              </svg>
            </a>
            <!-- End Logo -->
          </div>
          <div class="sm:hidden">
            <a class="flex-none rounded-md text-xl inline-block font-semibold focus:outline-hidden focus:opacity-80" href="../../pro/shop-marketplace/index.html" aria-label="Preline">
              <svg class="w-[31px] h-auto" width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.0835 3.23358C9.88316 3.23358 3.23548 9.8771 3.23548 18.0723V35.5832H0.583496V18.0723C0.583496 8.41337 8.41851 0.583252 18.0835 0.583252C27.7485 0.583252 35.5835 8.41337 35.5835 18.0723C35.5835 27.7312 27.7485 35.5614 18.0835 35.5614H16.7357V32.911H18.0835C26.2838 32.911 32.9315 26.2675 32.9315 18.0723C32.9315 9.8771 26.2838 3.23358 18.0835 3.23358Z" class="fill-emerald-600 dark:fill-emerald-500" fill="currentColor" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.0833 8.62162C12.8852 8.62162 8.62666 12.9245 8.62666 18.2879V35.5833H5.97468V18.2879C5.97468 11.5105 11.3713 5.97129 18.0833 5.97129C24.7954 5.97129 30.192 11.5105 30.192 18.2879C30.192 25.0653 24.7954 30.6045 18.0833 30.6045H16.7355V27.9542H18.0833C23.2815 27.9542 27.54 23.6513 27.54 18.2879C27.54 12.9245 23.2815 8.62162 18.0833 8.62162Z" class="fill-emerald-600 dark:fill-emerald-500" fill="currentColor" />
                <path d="M24.8225 18.1012C24.8225 21.8208 21.8053 24.8361 18.0833 24.8361C14.3614 24.8361 11.3442 21.8208 11.3442 18.1012C11.3442 14.3815 14.3614 11.3662 18.0833 11.3662C21.8053 11.3662 24.8225 14.3815 24.8225 18.1012Z" class="fill-emerald-600 dark:fill-emerald-500" fill="currentColor" />
              </svg>
            </a>
          </div>
        </div>
        <!-- End Logo -->

        <!-- Search -->
        <div class="md:w-full order-2 md:grow md:w-auto">
          <div class="relative flex basis-full items-center gap-x-1 md:gap-x-3">
            <!-- Dropdown Link -->
            <div class="hs-dropdown [--adaptive:none] [--auto-close:inside] md:inline-block">
              <!-- Link Button -->
              <button id="hs-pro-shmnctdm" type="button" class="hs-dropdown-toggle relative py-[7px] sm:py-2 sm:py-2.5 px-3 flex items-center gap-x-1.5 text-sm text-start bg-emerald-600 border border-transparent text-white rounded-full hover:bg-emerald-700 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-emerald-700 dark:bg-emerald-500 dark:hover:bg-emerald-600 dark:focus:bg-emerald-600" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                <svg class="hs-dropdown-open:hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="4" x2="20" y1="12" y2="12" />
                  <line x1="4" x2="20" y1="6" y2="6" />
                  <line x1="4" x2="20" y1="18" y2="18" />
                </svg>
                <svg class="hs-dropdown-open:block hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M18 6 6 18" />
                  <path d="m6 6 12 12" />
                </svg>
                Catalog
              </button>
              <!-- End Link Button -->


            </div>
            <!-- End Dropdown Link -->

            <div class="hidden md:block w-full">
              <!-- Search Input -->
              <div class="relative w-full">
                <input type="text" class="py-1.5 ps-4 sm:py-2.5 pe-10 block w-full bg-white border-gray-200 text-base sm:text-sm rounded-full focus:outline-hidden focus:border-emerald-600 focus:ring-emerald-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder:text-neutral-400" placeholder="Search Preline">
                <div class="absolute inset-y-0 end-0 z-10 flex items-center pe-1 sm:pe-1.5">
                  <button type="button" class="inline-flex shrink-0 justify-center items-center w-10 h-8 rounded-full bg-emerald-600 text-white hover:bg-emerald-700 focus:outline-hidden focus:bg-emerald-700 dark:bg-emerald-500 dark:hover:bg-emerald-600 dark:focus:bg-emerald-600">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <circle cx="11" cy="11" r="8" />
                      <path d="m21 21-4.3-4.3" />
                    </svg>
                  </button>
                </div>

              </div>
              <!-- End Search Input -->
            </div>
          </div>
        </div>
        <!-- End Search -->

        <!-- Widgets -->
        <div class="order-2 md:order-3 ms-auto lg:ms-0">
          <div class="flex justify-end items-center gap-x-2">
            <!-- Account Button Icon -->
            <a class="flex flex-col justify-center items-center gap-1 min-w-14 min-h-8 text-xs rounded-full text-gray-800 hover:text-emerald-600 focus:outline-hidden focus:text-emerald-600 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" href="#">
              <svg class="shrink-0 size-4 text-gray-800 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                <circle cx="12" cy="7" r="4" />
              </svg>
              My Order
            </a>
            <!-- End Account Button Icon -->


            <!-- Cart Button Icon -->
            <a class="relative flex flex-col justify-center items-center gap-1 min-w-14 min-h-8 text-xs rounded-full text-gray-800 hover:text-emerald-600 focus:outline-hidden focus:text-emerald-600 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" href="#">
              <svg class="shrink-0 size-4 text-gray-800 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="8" cy="21" r="1" />
                <circle cx="19" cy="21" r="1" />
                <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12" />
              </svg>
              Cart
            </a>
            <!-- End Cart Button Icon -->
          </div>
        </div>
        <!-- End Widgets -->
      </div>

      <div class="md:hidden mt-2.5 md:mt-0 w-full">
        <!-- Search Input -->
        <div class="relative w-full">
          <input type="text" class="py-1.5 ps-4 sm:py-2.5 pe-10 block w-full bg-white border-gray-200 text-base sm:text-sm rounded-full focus:outline-hidden focus:border-emerald-600 focus:ring-emerald-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder:text-neutral-400" placeholder="Search Preline">
          <div class="absolute inset-y-0 end-0 z-10 flex items-center pe-1 sm:pe-1.5">
            <button type="button" class="inline-flex shrink-0 justify-center items-center w-10 h-8 rounded-full bg-emerald-600 text-white hover:bg-emerald-700 focus:outline-hidden focus:bg-emerald-700 dark:bg-emerald-500 dark:hover:bg-emerald-600 dark:focus:bg-emerald-600">
              <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="8" />
                <path d="m21 21-4.3-4.3" />
              </svg>
            </button>
          </div>

        </div>
        <!-- End Search Input -->
      </div>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content">
    <!-- Slider -->
    <div class="py-4 w-full max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
      <div data-hero-slider class="relative">
        <div class="hs-carousel relative overflow-hidden w-full bg-gray-100 rounded-xl dark:bg-neutral-800" style="aspect-ratio: 1920 / 600; width: 100%; height: auto;">
          <div class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700">
            <!-- Item -->
            <div class="hs-carousel-slide">
              <!-- Slide -->
              <a class="relative block rounded-xl focus:outline-hidden" href="#" style="height: 100%; width: 100%;">
                <img class="absolute inset-0 size-full object-cover rounded-xl" src="{{ asset('assets/img/banner/banner01.webp') }}" alt="Banner promo 1">
                <div class="absolute inset-0 bg-black/25 rounded-xl"></div>

                <div class="relative z-10 text-center size-full max-w-lg mx-auto px-12 flex flex-col justify-center items-center">

                  <div class="mt-7">
                    <span class="py-2 px-3 font-semibold text-sm bg-white text-gray-800 rounded-full">
                      Shop Now
                    </span>
                  </div>
                </div>
              </a>
              <!-- End Slide -->
            </div>
            <!-- End Item -->

            <!-- Item -->
            <div class="hs-carousel-slide">
              <!-- Slide -->
              <a class="relative block rounded-xl focus:outline-hidden" href="#" style="height: 100%; width: 100%;">
                <img class="absolute inset-0 size-full object-cover rounded-xl" src="{{ asset('assets/img/banner/banner02.webp') }}" alt="Banner promo 1">
                <div class="absolute inset-0 bg-black/25 rounded-xl"></div>

                <div class="relative z-10 text-center size-full max-w-lg mx-auto px-12 flex flex-col justify-center items-center">

                  <div class="mt-7">
                    <span class="py-2 px-3 font-semibold text-sm bg-white text-gray-800 rounded-full">
                      Shop Now
                    </span>
                  </div>
                </div>
              </a>
              <!-- End Slide -->
            </div>
            <!-- End Item -->

            <!-- Item -->
            <div class="hs-carousel-slide">
              <!-- Slide -->
              <a class="relative block rounded-xl focus:outline-hidden" href="#" style="height: 100%; width: 100%;">
                <img class="absolute inset-0 size-full object-cover rounded-xl" src="{{ asset('assets/img/banner/banner03.webp') }}" alt="Banner promo 1">
                <div class="absolute inset-0 bg-black/25 rounded-xl"></div>

                <div class="relative z-10 text-center size-full max-w-lg mx-auto px-12 flex flex-col justify-center items-center">

                  <div class="mt-7">
                    <span class="py-2 px-3 font-semibold text-sm bg-white text-gray-800 rounded-full">
                      Shop Now
                    </span>
                  </div>
                </div>
              </a>
              <!-- End Slide -->
            </div>
            <!-- End Item -->

          </div>
        </div>

        <button type="button" class="hs-carousel-prev hs-carousel-disabled:opacity-50 hs-carousel-disabled:cursor-default absolute top-1/2 start-1 sm:start-4 inline-flex justify-center items-center size-10 bg-white border border-gray-100 text-gray-800 rounded-full shadow-2xs hover:bg-gray-100 -translate-y-1/2 focus:outline-hidden">
          <span class="text-2xl" aria-hidden="true">
            <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="m15 18-6-6 6-6" />
            </svg>
          </span>
          <span class="sr-only">Previous</span>
        </button>
        <button type="button" class="hs-carousel-next hs-carousel-disabled:opacity-50 hs-carousel-disabled:cursor-default absolute top-1/2 end-1 sm:end-4 inline-flex justify-center items-center size-10 bg-white border border-gray-100 text-gray-800 rounded-full shadow-2xs hover:bg-gray-100 -translate-y-1/2 focus:outline-hidden">
          <span class="sr-only">Next</span>
          <span class="text-2xl" aria-hidden="true">
            <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="m9 18 6-6-6-6" />
            </svg>
          </span>
        </button>

        <div class="hs-carousel-pagination flex justify-center absolute bottom-4 start-0 end-0 space-x-2"></div>
      </div>
    </div>
    <!-- End Slider -->


    <!-- Catgory Group -->
    <div class="py-6 sm:py-12 w-full max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
      <div data-category-carousel class="relative">
      <!-- Header -->
      <div class="mb-2 flex flex-wrap justify-between items-center gap-3">
        <h2 class="font-medium text-lg text-gray-800 dark:text-neutral-200">
          Shop by categories
        </h2>

        <!-- Nav -->
        <div class="flex items-center gap-x-2">
          <button type="button" class="hs-carousel-prev hs-carousel-disabled:opacity-50 hs-carousel-disabled:cursor-default inline-flex justify-center items-center size-8 bg-white border border-gray-100 text-gray-800 rounded-full shadow-2xs hover:bg-gray-100 focus:outline-hidden dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
            <span class="text-2xl" aria-hidden="true">
              <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m15 18-6-6 6-6" />
              </svg>
            </span>
            <span class="sr-only">Previous</span>
          </button>
          <button type="button" class="hs-carousel-next hs-carousel-disabled:opacity-50 hs-carousel-disabled:cursor-default inline-flex justify-center items-center size-8 bg-white border border-gray-100 text-gray-800 rounded-full shadow-2xs hover:bg-gray-100 focus:outline-hidden dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
            <span class="sr-only">Next</span>
            <span class="text-2xl" aria-hidden="true">
              <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m9 18 6-6-6-6" />
              </svg>
            </span>
          </button>
        </div>
        <!-- End Nav -->
      </div>
      <!-- End Header -->

        <!-- Carousel -->
        <div class="hs-carousel w-full overflow-hidden">
          <div class="hs-carousel w-full">
            <div class="hs-carousel-body flex flex-nowrap gap-2 sm:gap-4 transition-transform duration-700 cursor-grab select-none">
              @php
                $categoryDisk = \Illuminate\Support\Facades\Storage::disk();
              @endphp

              @forelse ($categories as $category)
                <div class="hs-carousel-slide">
                  <!-- Category Card -->
                  <a class="block flex items-center bg-white border border-gray-200 hover:border-gray-300 rounded-xl focus:outline-hidden focus:border-gray-300 dark:bg-neutral-900 dark:border-neutral-700 dark:hover:border-neutral-600 dark:focus:border-neutral-600" href="{{ route('front.category', ['category' => $category->slug]) }}">
                    <div class="relative shrink-0 w-20 sm:w-28 h-20">
                      <img
                        class="size-full absolute inset-0 object-cover object-center rounded-s-xl"
                        src="{{ $categoryDisk->providesTemporaryUrls()
                          ? $categoryDisk->temporaryUrl($category->icon, now()->addHour())
                          : $categoryDisk->url($category->icon) }}"
                        alt="{{ $category->name }}"
                        loading="lazy"
                      >
                    </div>
                    <div class="grow p-3">
                      <span class="block font-medium text-sm text-gray-800 dark:text-neutral-200">
                        {{ $category->name }}
                      </span>
                    </div>
                  </a>
                  <!-- End Category Card -->
                </div>
              @empty
                <p class="w-full py-4 text-sm text-gray-500 dark:text-neutral-400">
                  Belum ada kategori tersedia.
                </p>
              @endforelse
            </div>
          </div>
        </div>
        <!-- End Carousel -->
      </div>
    </div>
    <!-- End Catgory -->

    <!-- Featured -->
    <div class="py-6 sm:py-12 w-full max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
      <!-- Header -->
      <div class="mb-4 flex flex-wrap justify-between items-center gap-3">
        <h1 class="font-medium text-xl text-gray-800 dark:text-neutral-200">
          Featured
        </h1>

        <button type="button" class="py-2 px-3 flex items-center text-sm text-start bg-gray-100 text-gray-800 rounded-full hover:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-200 dark:bg-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-600 dark:focus:bg-neutral-600">
          View all
          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="m9 18 6-6-6-6" />
          </svg>
        </button>
      </div>
      <!-- End Header -->

      <!-- Grid -->
      <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-5 gap-y-10 gap-x-4">

        <!-- Card -->
        <div class="h-full flex flex-col">
          <div class="group relative">
            <div class="relative">
              <a class="block shrink-0 relative w-full h-48 md:h-64 overflow-hidden rounded-xl focus:outline-hidden" href="../../pro/shop-marketplace/product-detail.html">
                <img class="size-full absolute inset-0 object-cover object-center group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-xl" src="{{ asset('assets/img/product/ADIDAS-FFSSBADI5-ADIHQ8708-Black 01-.webp') }}" alt="Product Image">
              </a>
            </div>

            <a class="after:z-1 after:absolute after:inset-0" href="../../pro/shop-marketplace/product-detail.html"></a>

            <div class="pt-3">
              <h4 class="font-medium text-sm text-gray-800 dark:text-neutral-200 capitalize">
                Campus 00s Men's Sneakers - Core Black
              </h4>
              <div class="mt-1 flex flex-wrap items-center gap-1">
                <span class="font-semibold text-emerald-600 dark:text-emerald-500">
                  Rp <span class="text-sm">1.700.000</span>
                </span>
                <span class="ms-auto text-sm text-gray-500 dark:text-neutral-500">
                  Adidas
                </span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="h-full flex flex-col">
          <div class="group relative">
            <div class="relative">
              <a class="block shrink-0 relative w-full h-48 md:h-64 overflow-hidden rounded-xl focus:outline-hidden" href="../../pro/shop-marketplace/product-detail.html">
                <img class="size-full absolute inset-0 object-cover object-center group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-xl" src="{{ asset('assets/img/product/NIKE-F34KBNIK5-NIKIO7448400-Navy 01-.webp') }}" alt="Product Image">
              </a>
            </div>

            <a class="after:z-1 after:absolute after:inset-0" href="../shop-marketplace/product-detail.html"></a>

            <div class="pt-3">
              <h4 class="font-medium text-sm text-gray-800 dark:text-neutral-200 capitalize">
                air jordan 1 low - obsidian university gold
              </h4>
              <div class="mt-1 flex flex-wrap items-center gap-1">
                <span class="font-semibold text-emerald-600 dark:text-emerald-500">
                  Rp <span class="text-sm">1.939.000</span>
                </span>
                <span class="ms-auto text-sm text-gray-500 dark:text-neutral-500">
                  Nike
                </span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="h-full flex flex-col">
          <div class="group relative">
            <div class="relative">
              <a class="block shrink-0 relative w-full h-48 md:h-64 overflow-hidden rounded-xl focus:outline-hidden" href="../../pro/shop-marketplace/product-detail.html">
                <img class="size-full absolute inset-0 object-cover object-center group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-xl" src="{{ asset('assets/img/product/ADIDAS-F34RUADI5-ADIKI9873-White 01-.webp') }}" alt="Product Image">
              </a>
            </div>

            <a class="after:z-1 after:absolute after:inset-0" href="../../pro/shop-marketplace/product-detail.html"></a>

            <div class="pt-3">
              <h4 class="font-medium text-sm text-gray-800 dark:text-neutral-200 capitalize">
                fx adizero evo sl - off white aurora coffee met
              </h4>
              <div class="mt-1 flex flex-wrap items-center gap-1">
                <span class="font-semibold text-emerald-600 dark:text-emerald-500">
                  Rp <span class="text-sm">2.500.000</span>
                </span>
                <span class="ms-auto text-sm text-gray-500 dark:text-neutral-500">
                  Adidas
                </span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="h-full flex flex-col">
          <div class="group relative">
            <div class="relative">
              <a class="block shrink-0 relative w-full h-48 md:h-64 overflow-hidden rounded-xl focus:outline-hidden" href="../../pro/shop-marketplace/product-detail.html">
                <img class="size-full absolute inset-0 object-cover object-center group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-xl" src="{{ asset('assets/img/product/ON-FFSSBONR5-ONRM10100264-Black 01-.webp') }}" alt="Product Image">
              </a>
            </div>

            <a class="after:z-1 after:absolute after:inset-0" href="../../pro/shop-marketplace/product-detail.html"></a>

            <div class="pt-3">
              <h4 class="font-medium text-sm text-gray-800 dark:text-neutral-200 capitalize">
                on cloudtilt men's sneakers shoes - eclipse black
              </h4>
              <div class="mt-1 flex flex-wrap items-center gap-1">
                <span class="font-semibold text-emerald-600 dark:text-emerald-500">
                  Rp <span class="text-sm">2.800.000</span>
                </span>
                <span class="ms-auto text-sm text-gray-500 dark:text-neutral-500">
                  On Cloud
                </span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="h-full flex flex-col">
          <div class="group relative">
            <div class="relative">
              <a class="block shrink-0 relative w-full h-48 md:h-64 overflow-hidden rounded-xl focus:outline-hidden" href="../../pro/shop-marketplace/product-detail.html">
                <img class="size-full absolute inset-0 object-cover object-center group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-xl" src="{{ asset('assets/img/product/NIKE-F34KBNIK5-NIKIW3808400-Navy 01-.webp') }}" alt="Product Image">
              </a>
            </div>

            <a class="after:z-1 after:absolute after:inset-0" href="../../pro/shop-marketplace/product-detail.html"></a>

            <div class="pt-3">
              <h4 class="font-medium text-sm text-gray-800 dark:text-neutral-200 capitalize">
                air jordan 13 retro - navy university blue flint
              </h4>
              <div class="mt-1 flex flex-wrap items-center gap-1">
                <span class="font-semibold text-emerald-600 dark:text-emerald-500">
                  Rp <span class="text-sm">3.269.000</span>
                </span>
                <span class="ms-auto text-sm text-gray-500 dark:text-neutral-500">
                  Nike
                </span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Card -->


      </div>
      <!-- End Grid -->
    </div>
    <!-- End Featured -->

    <!-- Brands -->
    <div class="py-6 sm:py-12 w-full max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
      <!-- Header -->
      <div class="mb-4">
        <h2 class="font-medium text-lg text-gray-800 dark:text-neutral-200">
          Shop by brands
        </h2>
      </div>
      <!-- End Header -->

      <!-- Grid -->
      <div class="flex flex-wrap items-center gap-3 lg:gap-6 xl:gap-16">
        <a class="p-4 flex flex-1 justify-center items-center hover:bg-gray-100 rounded-full focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
          <img class="h-6 w-auto object-contain mx-auto sm:mx-0" src="{{ asset('assets/img/brand/nike.webp') }}" alt="Adidas">
        </a>

        <a class="p-4 flex flex-1 justify-center items-center hover:bg-gray-100 rounded-full focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
          <img class="h-6 w-auto object-contain mx-auto sm:mx-0" src="{{ asset('assets/img/brand/adidas.webp') }}" alt="Adidas">
        </a>

        <a class="p-4 flex flex-1 justify-center items-center hover:bg-gray-100 rounded-full focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
          <img class="h-6 w-auto object-contain mx-auto sm:mx-0" src="{{ asset('assets/img/brand/new-balance.webp') }}" alt="Adidas">
        </a>

        <a class="p-4 flex flex-1 justify-center items-center hover:bg-gray-100 rounded-full focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
          <img class="h-6 w-auto object-contain mx-auto sm:mx-0" src="{{ asset('assets/img/brand/on-running.webp') }}" alt="Adidas">
        </a>

        <a class="p-4 flex flex-1 justify-center items-center hover:bg-gray-100 rounded-full focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
          <img class="h-6 w-auto object-contain mx-auto sm:mx-0" src="{{ asset('assets/img/brand/puma.webp') }}" alt="Adidas">
        </a>

        <a class="p-4 flex flex-1 justify-center items-center hover:bg-gray-100 rounded-full focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
          <img class="h-6 w-auto object-contain mx-auto sm:mx-0" src="{{ asset('assets/img/brand/converse.webp') }}" alt="Adidas">
        </a>


      </div>
      <!-- End Grid -->
    </div>
    <!-- End Brands -->

    <!-- Explore Interests -->
    <div class="py-6 sm:py-12 w-full max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
      <!-- Header -->
      <div class="mb-4 flex flex-wrap justify-between items-center gap-3">
        <h2 class="font-medium text-xl text-gray-800 dark:text-neutral-200">
          Explore your Interests
        </h2>
      </div>
      <!-- End Header -->


      <!-- Grid -->
      <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-5 gap-y-10 gap-x-4">

        <!-- Card -->
        <div class="h-full flex flex-col">
          <div class="group relative">
            <div class="relative">
              <a class="block shrink-0 relative w-full h-48 md:h-64 overflow-hidden rounded-xl focus:outline-hidden" href="../../pro/shop-marketplace/product-detail.html">
                <img class="size-full absolute inset-0 object-cover object-center group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-xl" src="{{ asset('assets/img/product/01-ADIDAS-FFSSBADI5-ADIB75806-White.webp') }}" alt="Product Image">
              </a>
            </div>

            <a class="after:z-1 after:absolute after:inset-0" href="../../pro/shop-marketplace/product-detail.html"></a>

            <div class="pt-3">
              <h4 class="font-medium text-sm text-gray-800 dark:text-neutral-200 capitalize">
                Samba OG Men's Sneaker Shoes - Ftwr White
              </h4>
              <div class="mt-1 flex flex-wrap items-center gap-1">
                <span class="font-semibold text-emerald-600 dark:text-emerald-500">
                  Rp <span class="text-sm">2.200.000</span>
                </span>
                <span class="ms-auto text-sm text-gray-500 dark:text-neutral-500">
                  Adidas
                </span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="h-full flex flex-col">
          <div class="group relative">
            <div class="relative">
              <a class="block shrink-0 relative w-full h-48 md:h-64 overflow-hidden rounded-xl focus:outline-hidden" href="../../pro/shop-marketplace/product-detail.html">
                <img class="size-full absolute inset-0 object-cover object-center group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-xl" src="{{ asset('assets/img/product/01-PUMA-FFSSEPMAA-PMA398846-02-Red.webp') }}" alt="Product Image">
              </a>
            </div>

            <a class="after:z-1 after:absolute after:inset-0" href="../../pro/shop-marketplace/product-detail.html"></a>

            <div class="pt-3">
              <h4 class="font-medium text-sm text-gray-800 dark:text-neutral-200 capitalize">
                Speedcat OG Unisex Lifestyle Shoes - Red
              </h4>
              <div class="mt-1 flex flex-wrap items-center gap-1">
                <span class="font-semibold text-emerald-600 dark:text-emerald-500">
                  Rp <span class="text-sm">1.899.000</span>
                </span>
                <span class="ms-auto text-sm text-gray-500 dark:text-neutral-500">
                  Puma
                </span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="h-full flex flex-col">
          <div class="group relative">
            <div class="relative">
              <a class="block shrink-0 relative w-full h-48 md:h-64 overflow-hidden rounded-xl focus:outline-hidden" href="../../pro/shop-marketplace/product-detail.html">
                <img class="size-full absolute inset-0 object-cover object-center group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-xl" src="{{ asset('assets/img/product/01-ADIDAS-F34RUADI5-ADIJR3419-Silver.webp') }}" alt="Product Image">
              </a>
            </div>

            <a class="after:z-1 after:absolute after:inset-0" href="../../pro/shop-marketplace/product-detail.html"></a>

            <div class="pt-3">
              <h4 class="font-medium text-sm text-gray-800 dark:text-neutral-200 capitalize">
                Adizero EVO SL Men's Running Shoes - Silver
              </h4>
              <div class="mt-1 flex flex-wrap items-center gap-1">
                <span class="font-semibold text-emerald-600 dark:text-emerald-500">
                  Rp <span class="text-sm">2.000.000</span>
                </span>
                <span class="ms-auto text-sm text-gray-500 dark:text-neutral-500">
                  Adidas
                </span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="h-full flex flex-col">
          <div class="group relative">
            <div class="relative">
              <a class="block shrink-0 relative w-full h-48 md:h-64 overflow-hidden rounded-xl focus:outline-hidden" href="../../pro/shop-marketplace/product-detail.html">
                <img class="size-full absolute inset-0 object-cover object-center group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-xl" src="{{ asset('assets/img/product/01-NIKE-F34KBNIK5-NIKCT2302100-White.webp') }}" alt="Product Image">
              </a>
            </div>

            <a class="after:z-1 after:absolute after:inset-0" href="../../pro/shop-marketplace/product-detail.html"></a>

            <div class="pt-3">
              <h4 class="font-medium text-sm text-gray-800 dark:text-neutral-200 capitalize">
                Nike Air Force 1 '07 Men's Basketball Shoes - White
              </h4>
              <div class="mt-1 flex flex-wrap items-center gap-1">
                <span class="font-semibold text-emerald-600 dark:text-emerald-500">
                  Rp <span class="text-sm">1.500.000</span>
                </span>
                <span class="ms-auto text-sm text-gray-500 dark:text-neutral-500">
                  Nike
                </span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="h-full flex flex-col">
          <div class="group relative">
            <div class="relative">
              <a class="block shrink-0 relative w-full h-48 md:h-64 overflow-hidden rounded-xl focus:outline-hidden" href="../../pro/shop-marketplace/product-detail.html">
                <img class="size-full absolute inset-0 object-cover object-center group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-xl" src="{{ asset('assets/img/product/01-NIKE-FFSSBNIK5-NIKIF0666300-Green.webp') }}" alt="Product Image">
              </a>
            </div>

            <a class="after:z-1 after:absolute after:inset-0" href="../../pro/shop-marketplace/product-detail.html"></a>

            <div class="pt-3">
              <h4 class="font-medium text-sm text-gray-800 dark:text-neutral-200 capitalize">
                Field General Men's Sneakers - Light Army
              </h4>
              <div class="mt-1 flex flex-wrap items-center gap-1">
                <span class="font-semibold text-emerald-600 dark:text-emerald-500">
                  Rp <span class="text-sm">1.200.000</span>
                </span>
                <span class="ms-auto text-sm text-gray-500 dark:text-neutral-500">
                  Nike
                </span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="h-full flex flex-col">
          <div class="group relative">
            <div class="relative">
              <a class="block shrink-0 relative w-full h-48 md:h-64 overflow-hidden rounded-xl focus:outline-hidden" href="../../pro/shop-marketplace/product-detail.html">
                <img class="size-full absolute inset-0 object-cover object-center group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-xl" src="{{ asset('assets/img/product/01-NEW-BALANCE-FFSSBNEWA-NEWM1906RA-Multicolor.webp') }}" alt="Product Image">
              </a>
            </div>

            <a class="after:z-1 after:absolute after:inset-0" href="../../pro/shop-marketplace/product-detail.html"></a>

            <div class="pt-3">
              <h4 class="font-medium text-sm text-gray-800 dark:text-neutral-200 capitalize">
                1906 Men's Sneakers Shoes - Multi Color
              </h4>
              <div class="mt-1 flex flex-wrap items-center gap-1">
                <span class="font-semibold text-emerald-600 dark:text-emerald-500">
                  Rp <span class="text-sm">1.850.000</span>
                </span>
                <span class="ms-auto text-sm text-gray-500 dark:text-neutral-500">
                  New Balance
                </span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="h-full flex flex-col">
          <div class="group relative">
            <div class="relative">
              <a class="block shrink-0 relative w-full h-48 md:h-64 overflow-hidden rounded-xl focus:outline-hidden" href="../../pro/shop-marketplace/product-detail.html">
                <img class="size-full absolute inset-0 object-cover object-center group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-xl" src="{{ asset('assets/img/product/0886-NIK305381007005011-1.webp') }}" alt="Product Image">
              </a>
            </div>

            <a class="after:z-1 after:absolute after:inset-0" href="../../pro/shop-marketplace/product-detail.html"></a>

            <div class="pt-3">
              <h4 class="font-medium text-sm text-gray-800 dark:text-neutral-200 capitalize">
                Air Jordan 8 Retro Men's Basketball Shoes - Black-Lt Graphite
              </h4>
              <div class="mt-1 flex flex-wrap items-center gap-1">
                <span class="font-semibold text-emerald-600 dark:text-emerald-500">
                  Rp <span class="text-sm">3.230.000</span>
                </span>
                <span class="ms-auto text-sm text-gray-500 dark:text-neutral-500">
                  Nike
                </span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="h-full flex flex-col">
          <div class="group relative">
            <div class="relative">
              <a class="block shrink-0 relative w-full h-48 md:h-64 overflow-hidden rounded-xl focus:outline-hidden" href="../../pro/shop-marketplace/product-detail.html">
                <img class="size-full absolute inset-0 object-cover object-center group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-xl" src="{{ asset('assets/img/product/0886-CONA24322CLEM10H-1.webp') }}" alt="Product Image">
              </a>
            </div>

            <a class="after:z-1 after:absolute after:inset-0" href="../../pro/shop-marketplace/product-detail.html"></a>

            <div class="pt-3">
              <h4 class="font-medium text-sm text-gray-800 dark:text-neutral-200 capitalize">
                x SHAI 001 Lace Up Unisex Sneakers - Lime Latte
              </h4>
              <div class="mt-1 flex flex-wrap items-center gap-1">
                <span class="font-semibold text-emerald-600 dark:text-emerald-500">
                  Rp <span class="text-sm">2.300.000</span>
                </span>
                <span class="ms-auto text-sm text-gray-500 dark:text-neutral-500">
                  Converse
                </span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="h-full flex flex-col">
          <div class="group relative">
            <div class="relative">
              <a class="block shrink-0 relative w-full h-48 md:h-64 overflow-hidden rounded-xl focus:outline-hidden" href="../../pro/shop-marketplace/product-detail.html">
                <img class="size-full absolute inset-0 object-cover object-center group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-xl" src="{{ asset('assets/img/product/0886-ADIKZ671370012H-1.webp') }}" alt="Product Image">
              </a>
            </div>

            <a class="after:z-1 after:absolute after:inset-0" href="../../pro/shop-marketplace/product-detail.html"></a>

            <div class="pt-3">
              <h4 class="font-medium text-sm text-gray-800 dark:text-neutral-200 capitalize">
                Handball Spezial Loafer Men's Sneakers - Dark Brown
              </h4>
              <div class="mt-1 flex flex-wrap items-center gap-1">
                <span class="font-semibold text-emerald-600 dark:text-emerald-500">
                  Rp <span class="text-sm">2.200.000</span>
                </span>
                <span class="ms-auto text-sm text-gray-500 dark:text-neutral-500">
                  Adidas
                </span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="h-full flex flex-col">
          <div class="group relative">
            <div class="relative">
              <a class="block shrink-0 relative w-full h-48 md:h-64 overflow-hidden rounded-xl focus:outline-hidden" href="../../pro/shop-marketplace/product-detail.html">
                <img class="size-full absolute inset-0 object-cover object-center group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-xl" src="{{ asset('assets/img/product/01-PUMA-F34KBPMAA-PMA314098-03-Mint.webp') }}" alt="Product Image">
              </a>
            </div>

            <a class="after:z-1 after:absolute after:inset-0" href="../../pro/shop-marketplace/product-detail.html"></a>

            <div class="pt-3">
              <h4 class="font-medium text-sm text-gray-800 dark:text-neutral-200 capitalize">
                Hali 1 Unisex Basketball Shoes - Fresh Mint
              </h4>
              <div class="mt-1 flex flex-wrap items-center gap-1">
                <span class="font-semibold text-emerald-600 dark:text-emerald-500">
                  Rp <span class="text-sm">2.199.000</span>
                </span>
                <span class="ms-auto text-sm text-gray-500 dark:text-neutral-500">
                  Puma
                </span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Card -->


      </div>
      <!-- End Grid -->

      <div class="mt-10 text-center max-w-40 mx-auto">
        <button type="button" class="py-3 px-4 w-full inline-flex justify-center items-center gap-x-1 text-sm font-medium rounded-full border border-transparent bg-emerald-600 text-white hover:bg-emerald-700 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-emerald-700">
          See more
        </button>
      </div>
    </div>
    <!-- End Explore Interests -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== FOOTER ========== -->
  <footer class="bg-white border-t border-gray-200 dark:bg-neutral-900 dark:border-neutral-700">
    <div class="w-full max-w-[85rem] mx-auto py-10 lg:py-14 px-4 sm:px-6 lg:px-8">
      <!-- Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
        <div>
          <h4 class="mb-3 font-medium text-sm text-gray-800 dark:text-neutral-200">Products</h4>

          <ul class="grid space-y-2">
            <li><a class="text-sm text-gray-500 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Express Shipping ⚡</a></li>
            <li><a class="text-sm text-gray-500 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Sneakers</a></li>
            <li><a class="text-sm text-gray-500 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Apparel</a></li>
            <li><a class="text-sm text-gray-500 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Luxury</a></li>
            <li><a class="text-sm text-gray-500 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Electronics & Collectibles</a></li>
          </ul>
        </div>
        <!-- End Col -->

        <div>
          <h4 class="mb-3 font-medium text-sm text-gray-800 dark:text-neutral-200">About</h4>

          <ul class="grid space-y-2">
            <li><a class="text-sm text-gray-500 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Our Story</a></li>
            <li><a class="text-sm text-gray-500 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Blog & News</a></li>
            <li><a class="text-sm text-gray-500 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Privacy Policy</a></li>
            <li><a class="text-sm text-gray-500 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Terms and Conditions</a></li>
          </ul>
        </div>
        <!-- End Col -->

        <div>
          <h4 class="mb-3 font-medium text-sm text-gray-800 dark:text-neutral-200">Help</h4>

          <ul class="grid space-y-2">
            <li><a class="text-sm text-gray-500 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">FAQ</a></li>
            <li><a class="text-sm text-gray-500 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Customer Service</a></li>
            <li><a class="text-sm text-gray-500 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Events & Partnership</a></li>
          </ul>
        </div>
        <!-- End Col -->

        <div class="space-y-10">
          <div class="space-y-10">
            <div>
              <h4 class="font-medium text-sm text-gray-800 dark:text-neutral-200">Download Sepatu Store App</h4>

              <!-- Social Brands -->
              <div class="mt-2 -mx-3 flex flex-col gap-y-2">
                <div class="max-w-42.5">
                  <a class="w-full inline-flex items-center gap-x-2 py-2 px-5 border border-gray-200 text-sm rounded-full hover:border-gray-300 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:border-gray-300 dark:border-neutral-700 dark:hover:border-neutral-600 dark:focus:border-neutral-600" href="#">
                    <svg class="shrink-0 size-6 text-black dark:text-white" width="28" height="32" viewBox="0 0 28 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M13.6727 7.7422C15.44 7.7422 16.9903 7.05207 18.3238 5.6718C19.6572 4.29152 20.3239 2.6865 20.3239 0.856739C20.3239 0.655779 20.308 0.370205 20.2763 1.52588e-05C20.0435 0.0317458 19.8689 0.0581879 19.7525 0.0793416C18.1227 0.312032 16.6887 1.11058 15.4505 2.47496C14.2124 3.83938 13.5933 5.29898 13.5933 6.85377C13.5933 7.03355 13.6197 7.32973 13.6727 7.7422ZM20.0064 32C21.2658 32 22.6574 31.138 24.1814 29.414C25.7053 27.69 26.8694 25.6645 27.6737 23.3376C24.6787 21.7934 23.1813 19.5776 23.1813 16.6901C23.1813 14.2787 24.393 12.2162 26.8165 10.5028C25.1338 8.39796 22.9114 7.34556 20.1493 7.34556C18.9852 7.34556 17.9216 7.52008 16.9586 7.86912L16.3554 8.09123L15.5458 8.40854C15.0167 8.6095 14.5351 8.71001 14.1013 8.71001C13.7626 8.71001 13.3181 8.59363 12.7678 8.36094L12.1487 8.1071L11.5614 7.86912C10.7042 7.50951 9.78348 7.3297 8.79929 7.3297C6.16417 7.3297 4.04763 8.21815 2.44961 9.99506C0.851602 11.7719 0.0526123 14.1147 0.0526123 17.0233C0.0526123 21.1165 1.33312 24.8977 3.89416 28.3669C5.67208 30.789 7.29654 32 8.76753 32C9.39193 32 10.011 31.8784 10.6248 31.6351L11.4026 31.3178L12.0218 31.0957C12.8895 30.789 13.6885 30.6356 14.4187 30.6356C15.1913 30.6356 16.0802 30.8313 17.0856 31.2226L17.5777 31.413C18.6042 31.8043 19.4138 32 20.0064 32Z" fill="currentColor" />
                    </svg>

                    <div class="grow">
                      <span class="block text-[11px] leading-tight text-gray-500 dark:text-neutral-500">Download on the</span>
                      <span class="block font-medium text-sm text-gray-800 dark:text-neutral-200">App Store</span>
                    </div>
                  </a>
                </div>

                <div class="max-w-42.5">
                  <a class="w-full inline-flex items-center gap-x-2 py-2 px-5 border border-gray-200 text-sm rounded-full hover:border-gray-300 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:border-gray-300 dark:border-neutral-700 dark:hover:border-neutral-600 dark:focus:border-neutral-600" href="#">
                    <svg class="shrink-0 size-6" width="32" height="37" viewBox="0 0 32 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M20.5159 11.1765L1.20745 0.140891C0.964824 1.05128e-05 0.659583 0.00783721 0.424782 0.148718C0.182154 0.289598 0.0334473 0.540052 0.0334473 0.821813C0.0334473 0.821813 0.041274 1.83928 0.0491007 3.5142L14.1137 17.5788L20.5159 11.1765Z" fill="url(#paint0_linear_4406_2034)" />
                      <path d="M0.0491007 3.5142C0.0725807 9.5564 0.143021 24.2236 0.174328 31.5259L14.1215 17.5788L0.0491007 3.5142Z" fill="url(#paint1_linear_4406_2034)" />
                      <path d="M31.5672 17.4927L20.5159 11.1765L14.1058 17.5788L21.3377 24.8106L31.575 18.8467C31.8177 18.7058 31.9664 18.4475 31.9664 18.1736C31.9664 17.8918 31.8098 17.6336 31.5672 17.4927Z" fill="url(#paint2_linear_4406_2034)" />
                      <path d="M0.166501 31.5259C0.182154 34.1322 0.189981 35.7993 0.189981 35.7993C0.189981 36.0811 0.338688 36.3394 0.581316 36.4724C0.823943 36.6133 1.12136 36.6133 1.36399 36.4724L21.3455 24.8185L14.1137 17.5866L0.166501 31.5259Z" fill="url(#paint3_linear_4406_2034)" />
                      <defs>
                        <linearGradient id="paint0_linear_4406_2034" x1="0.0334473" y1="18.3158" x2="31.972" y2="18.3158" gradientUnits="userSpaceOnUse">
                          <stop stop-color="#63BE6B" />
                          <stop offset="0.506" stop-color="#5BBC6A" />
                          <stop offset="1" stop-color="#4AB96A" />
                        </linearGradient>
                        <linearGradient id="paint1_linear_4406_2034" x1="0.0249224" y1="18.313" x2="31.9479" y2="18.313" gradientUnits="userSpaceOnUse">
                          <stop stop-color="#3EC6F2" />
                          <stop offset="1" stop-color="#45AFE3" />
                        </linearGradient>
                        <linearGradient id="paint2_linear_4406_2034" x1="0.0468809" y1="18.322" x2="31.963" y2="18.322" gradientUnits="userSpaceOnUse">
                          <stop stop-color="#FAA51A" />
                          <stop offset="0.387" stop-color="#FAB716" />
                          <stop offset="0.741" stop-color="#FAC412" />
                          <stop offset="1" stop-color="#FAC80F" />
                        </linearGradient>
                        <linearGradient id="paint3_linear_4406_2034" x1="0.169948" y1="27.082" x2="21.3452" y2="27.082" gradientUnits="userSpaceOnUse">
                          <stop stop-color="#EC3B50" />
                          <stop offset="1" stop-color="#E7515B" />
                        </linearGradient>
                      </defs>
                    </svg>

                    <div class="grow">
                      <span class="block text-[11px] leading-tight text-gray-500 dark:text-neutral-500">Get it on</span>
                      <span class="block font-medium text-sm text-gray-800 dark:text-neutral-200">Google Play</span>
                    </div>
                  </a>
                </div>
              </div>
              <!-- End Social Brands -->
            </div>
          </div>

          <div class="space-y-10">
            <div>
              <h4 class="font-medium text-sm text-gray-800 dark:text-neutral-200">Stay connected</h4>

              <!-- Social Brands -->
              <div class="mt-2 -mx-2 flex flex-wrap items-center gap-1">
                <a class="flex flex-col justify-center items-center size-9 rounded-full text-sm text-gray-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-500 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
                  <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                    <line x1="17.5" x2="17.51" y1="6.5" y2="6.5" />
                  </svg>
                  <span class="sr-only">Instagram</span>
                </a>
                <a class="flex flex-col justify-center items-center size-9 rounded-full text-sm text-gray-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-500 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
                  <svg class="shrink-0 size-4" width="48" height="50" viewBox="0 0 48 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M28.5665 20.7714L46.4356 0H42.2012L26.6855 18.0355L14.2931 0H0L18.7397 27.2728L0 49.0548H4.23464L20.6196 30.0087L33.7069 49.0548H48L28.5655 20.7714H28.5665ZM22.7666 27.5131L5.76044 3.18778H12.2646L42.2032 46.012H35.699L22.7666 27.5142V27.5131Z" fill="currentColor" />
                  </svg>
                  <span class="sr-only">X (Twitter)</span>
                </a>
                <a class="flex flex-col justify-center items-center size-9 rounded-full text-sm text-gray-500 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-500 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
                  <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17" />
                    <path d="m10 15 5-3-5-3z" />
                  </svg>
                  <span class="sr-only">YouTube</span>
                </a>
              </div>
              <!-- End Social Brands -->
            </div>
          </div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Grid -->
    </div>

    <div class="w-full max-w-[85rem] pb-10 mx-auto px-4 sm:px-6 lg:px-8">


      <!-- List -->
      <ul class="flex flex-wrap items-center whitespace-nowrap gap-3">
        <li class="inline-flex items-center relative text-xs text-gray-500 pe-3.5 last:pe-0 last:after:hidden after:absolute after:top-1/2 after:end-0 after:inline-block after:size-[3px] after:bg-gray-400 after:rounded-full after:-translate-y-1/2 dark:text-neutral-500 dark:after:bg-neutral-600">
          <p class="text-xs text-gray-500 dark:text-neutral-500">
            © 2026 PT. Store Sepatu Jaya.
          </p>
        </li>
        <li class="inline-flex items-center relative text-xs text-gray-500 pe-3.5 last:pe-0 last:after:hidden after:absolute after:top-1/2 after:end-0 after:inline-block after:size-[3px] after:bg-gray-400 after:rounded-full after:-translate-y-1/2 dark:text-neutral-500 dark:after:bg-neutral-600">
          <a class="text-xs text-gray-500 underline underline-offset-2 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-500 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">
            All Rights Reserved
          </a>
        </li>
      </ul>
      <!-- End List -->
    </div>
  </footer>
  <!-- ========== END FOOTER ========== -->



  <!-- JS PLUGINS -->
  <script src="{{ asset('assets/vendor/@floating-ui/core/dist/floating-ui.core.umd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/@floating-ui/dom/dist/floating-ui.dom.umd.min.js') }}"></script>
  <!-- Required plugins -->
  <script src="{{ asset('assets/vendor/preline/dist/index.js?v=3.0.1') }}"></script>


  <!-- Catalog navigation -->
  <script>
    window.addEventListener('load', () => {
      (function () {
        if (typeof HSSelect === 'undefined' || typeof HSTabs === 'undefined') return;

        const select = HSSelect.getInstance('#hs-catalog-sidebar-nav-select', true);
        const tabs = HSTabs.getInstance('#hs-catalog-sidebar-nav-tabs', true);

        if (!select || !tabs) return;

        select.element.on('change', (val) => {
          if (tabs.element.currentContentId === val) return false;

          const tab = document.querySelector(`[data-hs-tab="${val}"]`);

          if (tab) HSTabs.open(tab);
        });

        tabs.element.on('change', ({ current }) => {
          if (select.element.value === current) return false;

          select.element.setValue(current);
        });
      })();

      (function () {
        const slider = document.querySelector('[data-hero-slider]');
        if (!slider) return;

        const viewport = slider.querySelector('.hs-carousel');
        const track = slider.querySelector('.hs-carousel-body');
        const slides = Array.from(slider.querySelectorAll('.hs-carousel-slide'));
        const prevButton = slider.querySelector('.hs-carousel-prev');
        const nextButton = slider.querySelector('.hs-carousel-next');
        const pagination = slider.querySelector('.hs-carousel-pagination');

        if (!viewport || !track || !slides.length || !prevButton || !nextButton || !pagination) return;

        let currentIndex = 0;
        let slideWidth = 0;
        let pointerStartX = 0;
        let pointerDeltaX = 0;
        let isDragging = false;
        let dots = [];

        const updateDots = () => {
          dots.forEach((dot, index) => {
            dot.classList.toggle('bg-white', index === currentIndex);
            dot.classList.toggle('bg-white/50', index !== currentIndex);
          });
        };

        const updatePosition = (withTransition = true) => {
          track.style.transitionDuration = withTransition ? '700ms' : '0ms';
          track.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
          updateDots();
        };

        const goTo = (index, withTransition = true) => {
          currentIndex = (index + slides.length) % slides.length;
          updatePosition(withTransition);
        };

        const updateLayout = () => {
          slideWidth = viewport.clientWidth;
          track.style.opacity = '1';
          track.style.touchAction = 'pan-y';

          slides.forEach((slide) => {
            slide.style.display = 'block';
            slide.style.flex = `0 0 ${slideWidth}px`;
            slide.style.width = `${slideWidth}px`;
            slide.style.maxWidth = `${slideWidth}px`;
          });

          updatePosition(false);
        };

        const onPointerDown = (event) => {
          isDragging = true;
          pointerStartX = event.clientX;
          pointerDeltaX = 0;
          track.style.cursor = 'grabbing';
          updatePosition(false);
        };

        const onPointerMove = (event) => {
          if (!isDragging) return;

          pointerDeltaX = event.clientX - pointerStartX;
          track.style.transform = `translateX(${-(currentIndex * slideWidth) + pointerDeltaX}px)`;
        };

        const onPointerUp = () => {
          if (!isDragging) return;

          isDragging = false;
          track.style.cursor = 'grab';

          const threshold = Math.max(60, slideWidth * 0.12);
          if (pointerDeltaX <= -threshold) goTo(currentIndex + 1);
          else if (pointerDeltaX >= threshold) goTo(currentIndex - 1);
          else updatePosition();
        };

        pagination.innerHTML = '';
        dots = slides.map((_, index) => {
          const dot = document.createElement('button');
          dot.type = 'button';
          dot.className = 'size-3 rounded-full cursor-pointer bg-white/50';
          dot.setAttribute('aria-label', `Go to slide ${index + 1}`);
          dot.addEventListener('click', () => goTo(index));
          pagination.appendChild(dot);
          return dot;
        });

        prevButton.addEventListener('click', () => goTo(currentIndex - 1));
        nextButton.addEventListener('click', () => goTo(currentIndex + 1));

        track.addEventListener('pointerdown', onPointerDown);
        track.addEventListener('pointermove', onPointerMove);
        track.addEventListener('pointerup', onPointerUp);
        track.addEventListener('pointerleave', onPointerUp);
        track.addEventListener('pointercancel', onPointerUp);

        window.addEventListener('resize', updateLayout);

        updateLayout();
      })();

      (function () {
        const carousel = document.querySelector('[data-category-carousel]');
        if (!carousel) return;

        const track = carousel.querySelector('.hs-carousel-body');
        const slides = Array.from(carousel.querySelectorAll('.hs-carousel-slide'));
        const prevButton = carousel.querySelector('.hs-carousel-prev');
        const nextButton = carousel.querySelector('.hs-carousel-next');

        if (!track || !slides.length || !prevButton || !nextButton) return;

        let currentIndex = 0;
        let slidesPerView = 1;
        let slideWidth = 0;
        let gap = 0;
        let dragStartX = 0;
        let dragDeltaX = 0;
        let isDragging = false;

        const getSlidesPerView = () => {
          const containerWidth = carousel.querySelector('.overflow-hidden')?.clientWidth || carousel.clientWidth;

          if (containerWidth >= 840) return 4;
          if (containerWidth >= 480) return 2;

          return 1;
        };

        const getGap = () => {
          const styles = window.getComputedStyle(track);
          return Number.parseFloat(styles.columnGap || styles.gap || '0');
        };

        const getMaxIndex = () => Math.max(0, slides.length - slidesPerView);

        const updateButtons = () => {
          prevButton.disabled = currentIndex === 0;
          nextButton.disabled = currentIndex >= getMaxIndex();
        };

        const updatePosition = (withTransition = true) => {
          track.style.transitionDuration = withTransition ? '700ms' : '0ms';
          track.style.transform = `translateX(-${currentIndex * (slideWidth + gap)}px)`;
          updateButtons();
        };

        const updateLayout = () => {
          slidesPerView = getSlidesPerView();
          gap = getGap();
          track.style.cursor = 'grab';
          track.style.touchAction = 'pan-y';

          const containerWidth = carousel.querySelector('.overflow-hidden')?.clientWidth || track.clientWidth;
          slideWidth = (containerWidth - gap * (slidesPerView - 1)) / slidesPerView;

          slides.forEach((slide) => {
            slide.style.display = 'block';
            slide.style.flex = `0 0 ${slideWidth}px`;
            slide.style.maxWidth = `${slideWidth}px`;
          });

          currentIndex = Math.min(currentIndex, getMaxIndex());
          updatePosition(false);
        };

        const goTo = (index) => {
          currentIndex = Math.max(0, Math.min(index, getMaxIndex()));
          updatePosition();
        };

        const onPointerDown = (event) => {
          isDragging = true;
          dragStartX = event.clientX;
          dragDeltaX = 0;
          track.style.cursor = 'grabbing';
          updatePosition(false);
        };

        const onPointerMove = (event) => {
          if (!isDragging) return;

          dragDeltaX = event.clientX - dragStartX;
          const baseOffset = currentIndex * (slideWidth + gap);
          track.style.transform = `translateX(-${Math.max(0, baseOffset - dragDeltaX)}px)`;
        };

        const onPointerUp = () => {
          if (!isDragging) return;

          isDragging = false;
          track.style.cursor = 'grab';

          const threshold = Math.max(48, slideWidth * 0.2);
          if (dragDeltaX <= -threshold) goTo(currentIndex + 1);
          else if (dragDeltaX >= threshold) goTo(currentIndex - 1);
          else updatePosition();
        };

        prevButton.addEventListener('click', () => goTo(currentIndex - 1));
        nextButton.addEventListener('click', () => goTo(currentIndex + 1));

        track.addEventListener('pointerdown', onPointerDown);
        track.addEventListener('pointermove', onPointerMove);
        track.addEventListener('pointerup', onPointerUp);
        track.addEventListener('pointerleave', onPointerUp);
        track.addEventListener('pointercancel', onPointerUp);

        window.addEventListener('resize', updateLayout);

        updateLayout();
      })();
    });
  </script>

</body>
</html>
