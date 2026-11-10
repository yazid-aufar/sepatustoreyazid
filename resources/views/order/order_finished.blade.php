<!DOCTYPE html>
<html lang="en" class="relative min-h-full scroll-smooth">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1">
  <link rel="canonical" href="https://preline.co/">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="A modern eCommerce template for multi-vendor stores with an advanced Mega Menu, filtering, and seamless browsing.">

  <meta name="twitter:site" content="@preline">
  <meta name="twitter:creator" content="@preline">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Shop Product Detail | Preline Pro | Preline UI, crafted with Tailwind CSS">
  <meta name="twitter:description" content="A modern eCommerce template for multi-vendor stores with an advanced Mega Menu, filtering, and seamless browsing.">
  <meta name="twitter:image" content="https://preline.co/assets/img/og-image.png">

  <meta property="og:url" content="https://preline.co/">
  <meta property="og:locale" content="en_US">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Preline">
  <meta property="og:title" content="Shop Product Detail | Preline Pro | Preline UI, crafted with Tailwind CSS">
  <meta property="og:description" content="A modern eCommerce template for multi-vendor stores with an advanced Mega Menu, filtering, and seamless browsing.">
  <meta property="og:image" content="https://preline.co/assets/img/og-image.png">

  <!-- Title -->
  <title>Shop Product Detail | Preline Pro | Preline UI, crafted with Tailwind CSS</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- CSS HS -->
  <link rel="stylesheet" href="{{ asset('assets/css/main.min.css') }}?v=3.0.1">

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
</head>

<body class="dark:bg-neutral-900">
  <!-- ========== HEADER ========== -->
  <header class="flex flex-col lg:flex-nowrap z-50 bg-white dark:bg-neutral-900">


    <div class="max-w-[85rem] basis-full w-full mx-auto py-3 px-4 sm:px-6 lg:px-8">
      <div class="w-full flex md:flex-nowrap md:items-center gap-2 lg:gap-6">
        <!-- Logo -->
        <div class="order-1 md:w-auto flex items-center gap-x-1">
          <div class="hidden sm:block">
            <!-- Logo -->
            <a class="flex-none rounded-md text-xl inline-block font-semibold focus:outline-hidden focus:opacity-80" href="{{ route('front.index') }}" aria-label="Preline">
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
            <a class="flex-none rounded-md text-xl inline-block font-semibold focus:outline-hidden focus:opacity-80" href="{{ route('front.index') }}" aria-label="Preline">
              <svg class="w-[31px] h-auto" width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.0835 3.23358C9.88316 3.23358 3.23548 9.8771 3.23548 18.0723V35.5832H0.583496V18.0723C0.583496 8.41337 8.41851 0.583252 18.0835 0.583252C27.7485 0.583252 35.5835 8.41337 35.5835 18.0723C35.5835 27.7312 27.7485 35.5614 18.0835 35.5614H16.7357V32.911H18.0835C26.2838 32.911 32.9315 26.2675 32.9315 18.0723C32.9315 9.8771 26.2838 3.23358 18.0835 3.23358Z" class="fill-emerald-600 dark:fill-emerald-500" fill="currentColor" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.0833 8.62162C12.8852 8.62162 8.62666 12.9245 8.62666 18.2879V35.5833H5.97468V18.2879C5.97468 11.5105 11.3713 5.97129 18.0833 5.97129C24.7954 5.97129 30.192 11.5105 30.192 18.2879C30.192 25.0653 24.7954 30.6045 18.0833 30.6045H16.7355V27.9542H18.0833C23.2815 27.9542 27.54 23.6513 27.54 18.2879C27.54 12.9245 23.2815 8.62162 18.0833 8.62162Z" class="fill-emerald-600 dark:fill-emerald-500" fill="currentColor" />
                <path d="M24.8225 18.1012C24.8225 21.8208 21.8053 24.8361 18.0833 24.8361C14.3614 24.8361 11.3442 21.8208 11.3442 18.1012C11.3442 14.3815 14.3614 11.3662 18.0833 11.3662C21.8053 11.3662 24.8225 14.3815 24.8225 18.1012Z" class="fill-emerald-600 dark:fill-emerald-500" fill="currentColor" />
              </svg>
            </a>
          </div>
        </div>
        <!-- End Logo -->
      </div>


      </div>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content">
    <!-- Product Details: Gallery Slider -->
    <div class="w-full max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
      <div class="pt-6">

        <!-- FAQ -->
        <div class="pt-10 pb-20">
          <div class="max-w-6xl px-4 sm:px-6 lg:px-8 mx-auto">
            <!-- Title -->
            <div class="mb-8 max-w-2xl mx-auto text-center">
              <h2 class="font-semibold text-3xl text-gray-800 dark:text-neutral-200">
                🎉 Order confirmed
              </h2>
              <br class="mt-2 text-gray-500 dark:text-neutral-400">
                Thank you for your order! </br> We will check your order, please check your order status periodically.
              </p>
            </div>
            <!-- End Title -->

            <div class="max-w-2xl mx-auto">


              <!-- Products Card -->
              <div class="mb-5 flex flex-col bg-white border border-stone-200 overflow-hidden rounded-xl shadow-2xs dark:bg-neutral-800 dark:border-neutral-700">
                <!-- Header -->
                <div class="py-3 px-5 flex justify-between items-center gap-x-5 border-b border-stone-200 dark:border-neutral-700">
                  <div class="flex items-center justify-between gap-x-5 w-full">
                    <!-- Area Klik Accordion Toggle (Sisi Kiri) -->
                    <button class="hs-accordion-toggle group flex items-center gap-x-3 grow text-start focus:outline-hidden" aria-expanded="true" aria-controls="hs-booking-content">
                      <div class="flex shrink-0 justify-center items-center size-10 bg-green-100 text-green-700 rounded-lg dark:bg-green-500/20 dark:text-green-400">
                        <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M2 9a3 3 0 0 1 0 6v2a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2a3 3 0 0 1 0-6V7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z"/>
                          <path d="M13 5v2"/>
                          <path d="M13 11v2"/>
                          <path d="M13 17v2"/>
                        </svg>
                      </div>
                      <div>
                        <span class="block text-sm text-gray-500 dark:text-neutral-400">Booking ID</span>
                        <span id="booking-id-val" class="text-lg font-medium font-bold text-gray-800 dark:text-neutral-100">{{ $productTransaction->booking_trx_id }}</span>
                      </div>
                    </button>

                    <!-- Tombol Copy ID -->
                    <button type="button"
                            onclick="navigator.clipboard.writeText(document.getElementById('booking-id-val').innerText); const el = this.querySelector('.js-copy-text'); el.innerText = 'Copied!'; setTimeout(() => el.innerText = 'Copy ID', 2000);"
                            class="shrink-0 py-1.5 px-3 inline-flex items-center gap-x-1.5 text-xs font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700">
                      <svg class="shrink-0 size-3.5 text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect width="14" height="14" x="8" y="8" rx="2" ry="2"/>
                        <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"/>
                      </svg>
                      <span class="js-copy-text">Copy ID</span>
                    </button>
                  </div>

                </div>
                <!-- End Header -->

                <!-- Body -->
                <div class="p-5 space-y-4">

                  <!-- Item -->
                  <div class=" flex gap-x-5">
                    <div class="relative">
                      <img class="shrink-0 w-20 h-28 object-contain rounded-lg dark:bg-neutral-700" src="{{ $thumbnailUrl ?? asset('assets/img/logo/logo-short.png') }}" alt="{{ $shoe?->name ?? 'Product Image' }}">
                    </div>

                    <div class="grow flex flex-col">
                      <label for="hs-pro-epdsku" class="block mb-2 text-lg font-medium text-stone-800 dark:text-neutral-200 capitalize">
                        {{ $shoe?->name ?? '-' }}
                      </label>
                    </div>
                  </div>
                  <!-- End Item -->

                  <!-- Input Grid -->
                  <div class="grid sm:grid-cols-2 gap-3 sm:gap-5">
                    <div>
                      <div class="inline-flex items-center gap-x-2 text-stone-600 dark:text-neutral-400">
                        <span class="text-sm">
                          Brand
                        </span>
                      </div>
                      <p class="text-sm font-semibold text-stone-800 dark:text-neutral-200">
                        {{ $shoe?->brand?->name ?? '-' }}
                      </p>
                    </div>

                    <div>
                      <div class="inline-flex items-center gap-x-2 text-stone-600 dark:text-neutral-400">
                        <span class="text-sm">
                          Price
                        </span>
                      </div>
                      <p class="text-sm font-semibold text-stone-800 dark:text-neutral-200">
                        {{ number_format($unitPrice, 0, ',', '.') }}
                      </p>
                    </div>
                  </div>
                  <!-- End Input Grid -->

                  <!-- Input Grid -->
                  <div class="grid sm:grid-cols-2 gap-3 sm:gap-5">
                    <div>
                      <div class="inline-flex items-center gap-x-2 text-stone-600 dark:text-neutral-400">
                        <span class="text-sm">
                          Quantity
                        </span>
                      </div>
                      <p class="text-sm font-semibold text-stone-800 dark:text-neutral-200">
                        {{ $productTransaction->quantity }} Pcs
                      </p>
                    </div>

                    <div>
                      <div class="inline-flex items-center gap-x-2 text-stone-600 dark:text-neutral-400">
                        <span class="text-sm">
                          Shoe Size
                        </span>
                      </div>
                      <p class="text-sm font-semibold text-stone-800 dark:text-neutral-200">
                        EU {{ $shoeSize ?? '-' }}
                      </p>
                    </div>
                  </div>
                  <!-- End Input Grid -->



                </div>
                <!-- End Body -->
              </div>
              <!-- End Products Card -->


              <!-- Customer Card -->
              <div class="flex mb-5 flex-col bg-white border border-stone-200 shadow-2xs rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
                <!-- Header -->
                <div id="payment-details-header" class="py-3 px-5 flex items-center justify-between gap-4 border-stone-200 dark:border-neutral-700">
                  <h2 class="font-semibold text-stone-800 dark:text-neutral-200">
                    Payment Details
                  </h2>
                  <div class="flex items-center gap-2 sm:gap-3">

                    <button
                      id="payment-details-toggle"
                      type="button"
                      class="shrink-0 size-8 inline-flex items-center justify-center rounded-lg text-stone-600  focus:outline-hidden "
                      aria-label="Show payment details"
                      aria-expanded="false"
                      aria-controls="payment-details-content"
                    >
                      <svg class="size-4 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="m6 9 6 6 6-6"/>
                      </svg>
                    </button>
                  </div>
                </div>
                <!-- End Header -->

                <!-- Payment Details -->
                <div id="payment-details-content" hidden>
                  <div class="pt-2 pb-4 px-5">
                    <dl class="mt-4 grid grid-cols-12 gap-2 pe-1">
                      <dt class="col-span-8 text-sm text-stone-800 dark:text-neutral-200">Sub Total:</dt>
                      <dd class="col-span-4 text-end font-semibold text-sm text-stone-800 dark:text-neutral-200">Rp. {{ number_format($productTransaction->sub_total_amount, 0, ',', '.') }}</dd>
                      <dt class="col-span-8 text-sm text-stone-800 dark:text-neutral-200">Promo Code:</dt>
                      <dd class="col-span-4 text-end font-semibold text-sm text-stone-800 dark:text-neutral-200">{{ $productTransaction->promoCode?->code ?? '-' }}</dd>
                      <dt class="col-span-8 text-sm text-stone-800 dark:text-neutral-200">Discount:</dt>
                      <dd class="col-span-4 text-end font-semibold text-sm text-green-700 dark:text-neutral-200">- Rp. {{ number_format($productTransaction->discount_amount, 0, ',', '.') }}</dd>
                      <dt class="col-span-8 text-sm text-stone-800 dark:text-neutral-200">PPN 11%:</dt>
                      <dd class="col-span-4 text-end font-semibold text-sm text-stone-800 dark:text-neutral-200">Rp. {{ number_format($totalTax, 0, ',', '.') }}</dd>
                      <dt class="col-span-8 text-sm text-stone-800 dark:text-neutral-200">Delivery:</dt>
                      <dd class="col-span-4 text-end font-semibold text-sm text-stone-800 dark:text-neutral-200">Rp. 0</dd>
                      <dt class="col-span-8 text-sm text-stone-800 dark:text-neutral-200">Grand Total:</dt>
                      <dd class="col-span-4 text-end font-semibold text-lg text-green-700 dark:text-neutral-200">Rp. {{ number_format($productTransaction->grand_total_amount, 0, ',', '.') }}</dd>
                    </dl>
                  </div>
                </div>
                <!-- End Payment Details -->
              </div>
              <!-- End Customer Card -->

              <!-- Button Group -->
              <div class="mt-5 mb-20 grid grid-cols-1 sm:grid-cols-2 gap-3">
                <a href="{{ route('front.check_booking') }}" class="w-full py-2.5 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-50 dark:bg-neutral-900 dark:border-neutral-800 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-700">
                  <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/>
                    <path d="M14 2v4a2 2 0 0 0 2 2h4"/>
                    <path d="M10 9H8"/>
                    <path d="M16 13H8"/>
                    <path d="M16 17H8"/>
                  </svg>
                  View Booking
                </a>
                <a href="{{ route('front.index') }}" class="w-full py-2.5 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-green-600 text-white hover:bg-green-700 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:ring-2 focus:ring-green-500">
                  Continue shopping
                  <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6" />
                  </svg>
                </a>
              </div>
              <!-- End Button Group -->



            </div>



          </div>
        </div>
        <!-- End FAQ -->


      </div>


      </div>
    </div>
    <!-- End Product Details: Gallery Slider -->



  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== FOOTER ========== -->
  <footer class="mt-auto h-23 sm:h-16 absolute bottom-0 inset-x-0 bg-white border-t border-gray-200 dark:bg-neutral-900 dark:border-neutral-700">
    <div class="w-full max-w-5xl py-6 mx-auto px-4 sm:px-6 lg:px-8">
      <!-- List -->
      <ul class="flex flex-wrap justify-center items-center whitespace-nowrap gap-3">
        <li class="inline-flex items-center relative text-xs text-gray-500 pe-3.5 last:pe-0 last:after:hidden after:absolute after:top-1/2 after:end-0 after:inline-block after:size-[3px] after:bg-gray-400 after:rounded-full after:-translate-y-1/2 dark:text-neutral-500 dark:after:bg-neutral-600">
          © 2026 PT. Store Sepatu Jaya.
        </li>
        <li class="inline-flex items-center relative text-xs text-gray-500 pe-3.5 last:pe-0 last:after:hidden after:absolute after:top-1/2 after:end-0 after:inline-block after:size-[3px] after:bg-gray-400 after:rounded-full after:-translate-y-1/2 dark:text-neutral-500 dark:after:bg-neutral-600">
          <a class="text-xs text-gray-500 underline-offset-4 hover:underline hover:text-gray-800 focus:outline-hidden focus:underline focus:text-gray-800 dark:text-neutral-500 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">
            Products
          </a>
        </li>
        <li class="inline-flex items-center relative text-xs text-gray-500 pe-3.5 last:pe-0 last:after:hidden after:absolute after:top-1/2 after:end-0 after:inline-block after:size-[3px] after:bg-gray-400 after:rounded-full after:-translate-y-1/2 dark:text-neutral-500 dark:after:bg-neutral-600">
          <a class="text-xs text-gray-500 underline-offset-4 hover:underline hover:text-gray-800 focus:outline-hidden focus:underline focus:text-gray-800 dark:text-neutral-500 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">
            About
          </a>
        </li>
        <li class="inline-flex items-center relative text-xs text-gray-500 pe-3.5 last:pe-0 last:after:hidden after:absolute after:top-1/2 after:end-0 after:inline-block after:size-[3px] after:bg-gray-400 after:rounded-full after:-translate-y-1/2 dark:text-neutral-500 dark:after:bg-neutral-600">
          <a class="text-xs text-gray-500 underline-offset-4 hover:underline hover:text-gray-800 focus:outline-hidden focus:underline focus:text-gray-800 dark:text-neutral-500 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">
            Help
          </a>
        </li>
        <li class="inline-flex items-center relative text-xs text-gray-500 pe-3.5 last:pe-0 last:after:hidden after:absolute after:top-1/2 after:end-0 after:inline-block after:size-[3px] after:bg-gray-400 after:rounded-full after:-translate-y-1/2 dark:text-neutral-500 dark:after:bg-neutral-600">
          <!-- Dark Mode -->
          <button type="button" class="hs-dark-mode-active:hidden flex hs-dark-mode items-center gap-x-1.5 text-sm text-gray-500 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-500 dark:hover:text-neutral-200 dark:focus:text-neutral-200" data-hs-theme-click-value="dark">
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path>
            </svg>
            <span class="sr-only">Dark mode</span>
          </button>
          <button type="button" class="hs-dark-mode-active:flex hidden hs-dark-mode items-center gap-x-1.5 text-sm text-gray-500 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-500 dark:hover:text-neutral-200 dark:focus:text-neutral-200" data-hs-theme-click-value="light">
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
      <!-- End List -->
    </div>
  </footer>
  <!-- ========== END FOOTER ========== -->



  <!-- JS PLUGINS -->
  <script src="{{ asset('assets/vendor/@floating-ui/core/dist/floating-ui.core.umd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/@floating-ui/dom/dist/floating-ui.dom.umd.min.js') }}"></script>
  <!-- Required plugins -->
  <script src="{{ asset('assets/vendor/preline/dist/index.js') }}?v=3.0.1"></script>
  <!-- Clipboard -->
  <script src="{{ asset('assets/vendor/clipboard/dist/clipboard.min.js') }}"></script>
  <script src="{{ asset('assets/js/hs-copy-clipboard-helper.js') }}"></script>

  <script src="{{ asset('assets/vendor/lodash/lodash.min.js') }}"></script>
  <script>
    const paymentDetailsToggle = document.getElementById('payment-details-toggle');
    const paymentDetailsHeader = document.getElementById('payment-details-header');
    const paymentDetailsContent = document.getElementById('payment-details-content');

    if (paymentDetailsToggle && paymentDetailsHeader && paymentDetailsContent) {
      paymentDetailsToggle.addEventListener('click', () => {
        const isExpanded = paymentDetailsToggle.getAttribute('aria-expanded') === 'true';

        paymentDetailsToggle.setAttribute('aria-expanded', String(!isExpanded));
        paymentDetailsToggle.setAttribute('aria-label', `${isExpanded ? 'Show' : 'Hide'} payment details`);
        paymentDetailsContent.hidden = isExpanded;
        paymentDetailsHeader.classList.toggle('border-b', !isExpanded);
        paymentDetailsToggle.querySelector('svg').classList.toggle('rotate-180', !isExpanded);
      });
    }
  </script>
  <script>
    function contentToSwitch() {
      const BREAKPOINTS = {
        xs: 0,
        sm: 640,
        md: 768,
        lg: 1024,
        xl: 1280,
        '2xl': 1536,
      };
      let currentWrapper;
      const windowWidth = window.innerWidth;
      const contentToSwitch = document.querySelectorAll("[data-hs-switch-place]");

      contentToSwitch.forEach((el) => {
        const options = JSON.parse(el.getAttribute("data-hs-switch-place"));
        Object.keys(options).forEach((key) => {
          if (windowWidth >= BREAKPOINTS[key]) currentWrapper = document.querySelector(options[key]);
        });

        if (currentWrapper.contains(el)) return false;

        currentWrapper.append(el);
      });
    };

    window.addEventListener("load", () => {
      contentToSwitch();
    });

    window.addEventListener("resize", _.debounce(() => {
      contentToSwitch();
    }), 100);
  </script>

  <script>
    window.addEventListener('load', () => {
      (function () {
        if (typeof HSTabs === 'undefined' || typeof HSScrollNav === 'undefined') return;

        const tabsId = 'hs-pro-reviews-tabs';
        const tabs = HSTabs.getInstance(`#${tabsId}`, true);
        const scrollNav = HSScrollNav.getInstance('#hs-pro-reviews-tabs-scroll', true);

        if (!tabs || !scrollNav) return;

        tabs.element.on('change', ({ el }) => {
          scrollNav.element.centerElement(el);
        });

        window.addEventListener('resize', _.debounce(() => {
          scrollNav.element.centerElement(tabs.element.current);
        }, 100));

        window.addEventListener('change.hs.tab', ({ detail }) => {
          if (detail.payload.tabsId !== tabsId) return false;

          const tabs = document.querySelector('#hs-pro-reviews-tabs-scroll');

          window.scrollTo({
            top: tabs.offsetTop,
            behavior: 'smooth'
          });
        });
      })();

      (function () {
        const gallery = document.querySelector('[data-product-gallery]');
        if (gallery) {
          const track = gallery.querySelector('.hs-carousel-body');
          const slides = Array.from(gallery.querySelectorAll('.hs-carousel-slide'));
          const thumbs = Array.from(gallery.querySelectorAll('.hs-carousel-pagination-item'));
          const prevButton = gallery.querySelector('.hs-carousel-prev');
          const nextButton = gallery.querySelector('.hs-carousel-next');

          if (track && slides.length && thumbs.length) {
            let currentIndex = 0;

            const syncThumbs = () => {
              thumbs.forEach((thumb, index) => {
                thumb.classList.toggle('active', index === currentIndex);
              });
            };

            const updateLayout = (withTransition = true) => {
              track.style.opacity = '1';
              track.style.transitionDuration = withTransition ? '500ms' : '0ms';
              track.style.transform = 'none';
              track.style.width = '100%';

              slides.forEach((slide, index) => {
                slide.style.position = 'absolute';
                slide.style.inset = '0';
                slide.style.width = '100%';
                slide.style.height = '100%';
                slide.style.display = index === currentIndex ? 'block' : 'none';
              });

              syncThumbs();
            };

            const goTo = (index) => {
              currentIndex = (index + slides.length) % slides.length;
              updateLayout();
            };

            thumbs.forEach((thumb, index) => {
              thumb.addEventListener('click', () => goTo(index));
            });

            prevButton?.addEventListener('click', () => goTo(currentIndex - 1));
            nextButton?.addEventListener('click', () => goTo(currentIndex + 1));

            window.addEventListener('resize', _.debounce(() => {
              updateLayout(false);
            }, 100));

            updateLayout(false);
          }
        }

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
          track.style.transform = `translateX(${-(currentIndex * (slideWidth + gap)) + dragDeltaX}px)`;
        };

        const onPointerUp = () => {
          if (!isDragging) return;

          isDragging = false;
          track.style.cursor = 'grab';

          if (Math.abs(dragDeltaX) > slideWidth / 4) {
            goTo(currentIndex + (dragDeltaX < 0 ? 1 : -1));
          } else {
            updatePosition();
          }
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
