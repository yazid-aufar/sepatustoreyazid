<!DOCTYPE html>
<html lang="en" class="relative min-h-full">
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
  <meta name="twitter:title" content="Shop | Preline Pro | Preline UI, crafted with Tailwind CSS">
  <meta name="twitter:description" content="A modern eCommerce template for multi-vendor stores with an advanced Mega Menu, filtering, and seamless browsing.">
  <meta name="twitter:image" content="https://preline.co/assets/img/og-image.png">

  <meta property="og:url" content="https://preline.co/">
  <meta property="og:locale" content="en_US">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Preline">
  <meta property="og:title" content="Shop | Preline Pro | Preline UI, crafted with Tailwind CSS">
  <meta property="og:description" content="A modern eCommerce template for multi-vendor stores with an advanced Mega Menu, filtering, and seamless browsing.">
  <meta property="og:image" content="https://preline.co/assets/img/og-image.png">

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

              <!-- Dropdown Menu -->
              <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 opacity-0 w-full hidden z-20 top-full start-0 min-w-60 bg-white shadow-xl before:absolute before:-top-4 before:start-0 before:w-full before:h-5 dark:bg-neutral-900 dark:border-neutral-700" role="menu" aria-orientation="vertical" aria-labelledby="hs-pro-shmnctdm">
                <!-- Container -->
                <div class="max-w-[85rem] w-full mx-auto py-2 md:py-4 px-4 sm:px-6 lg:px-8">
                  <select id="hs-catalog-sidebar-nav-select" class="hidden" data-hs-select='{
                    "placeholder": "Select option...",
                    "toggleTag": "<button type=\"button\" aria-expanded=\"false\"><span class=\"me-2\" data-icon></span><span class=\"text-gray-800 dark:text-neutral-200 \" data-title></span></button>",
                    "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-2 px-3 pe-9 flex items-center text-nowrap w-full cursor-pointer bg-gray-100 text-gray-800 rounded-lg text-start text-sm dark:bg-neutral-800 dark:text-neutral-200",
                    "wrapperClasses": "sm:hidden mb-4",
                    "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg shadow-xl overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-900 dark:border-neutral-700",
                    "optionClasses": "hs-selected:bg-gray-100 dark:hs-selected:bg-neutral-800 py-2 px-3 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800",
                    "optionTemplate": "<div class=\"flex items-center\"><div class=\"me-3\" data-icon></div><div class=\"text-gray-800 dark:text-neutral-200 \" data-title></div></div>",
                    "extraMarkup": "<div class=\"absolute top-1/2 end-3 -translate-y-1/2\"><svg class=\"shrink-0 size-3.5 text-gray-500 dark:text-neutral-500 \" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m7 15 5 5 5-5\"/><path d=\"m7 9 5-5 5 5\"/></svg></div>"
                  }'>
                    <option value="#mega-menu-catalog-tab-1" data-hs-select-option='{
                      "icon": "<svg class=\"shrink-0 size-4\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><rect width=\"14\" height=\"20\" x=\"5\" y=\"2\" rx=\"2\" ry=\"2\"/><path d=\"M12 18h.01\"/></svg>"
                    }' selected>Electronics</option>
                    <option value="#mega-menu-catalog-tab-2" data-hs-select-option='{
                      "icon": "<svg class=\"shrink-0 size-4\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M20.38 3.46 16 2a4 4 0 0 1-8 0L3.62 3.46a2 2 0 0 0-1.34 2.23l.58 3.47a1 1 0 0 0 .99.84H6v10c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2V10h2.15a1 1 0 0 0 .99-.84l.58-3.47a2 2 0 0 0-1.34-2.23z\"/></svg>"
                    }'>Clothing</option>
                    <option value="#mega-menu-catalog-tab-3" data-hs-select-option='{
                      "icon": "<svg class=\"shrink-0 size-4\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M7 20h10\"/><path d=\"M10 20c5.5-2.5.8-6.4 3-10\"/><path d=\"M9.5 9.4c1.1.8 1.8 2.2 2.3 3.7-2 .4-3.5.4-4.8-.3-1.2-.6-2.3-1.9-3-4.2 2.8-.5 4.4 0 5.5.8z\"/><path d=\"M14.1 6a7 7 0 0 0-1.1 4c1.9-.1 3.3-.6 4.3-1.4 1-1 1.6-2.3 1.7-4.6-2.7.1-4 1-4.9 2z\"/></svg>"
                    }'>House &amp; Garden</option>
                    <option value="#mega-menu-catalog-tab-4" data-hs-select-option='{
                      "icon": "<svg class=\"shrink-0 size-4\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M9 12h.01\"/><path d=\"M15 12h.01\"/><path d=\"M10 16c.5.3 1.2.5 2 .5s1.5-.2 2-.5\"/><path d=\"M19 6.3a9 9 0 0 1 1.8 3.9 2 2 0 0 1 0 3.6 9 9 0 0 1-17.6 0 2 2 0 0 1 0-3.6A9 9 0 0 1 12 3c2 0 3.5 1.1 3.5 2.5s-.9 2.5-2 2.5c-.8 0-1.5-.4-1.5-1\"/></svg>"
                    }'>Baby Care</option>
                    <option value="#mega-menu-catalog-tab-5" data-hs-select-option='{
                      "icon": "<svg class=\"shrink-0 size-4\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M3 6h3\"/><path d=\"M17 6h.01\"/><rect width=\"18\" height=\"20\" x=\"3\" y=\"2\" rx=\"2\"/><circle cx=\"12\" cy=\"13\" r=\"5\"/><path d=\"M12 18a2.5 2.5 0 0 0 0-5 2.5 2.5 0 0 1 0-5\"/></svg>"
                    }'>Home appliances</option>
                    <option value="#mega-menu-catalog-tab-6" data-hs-select-option='{
                      "icon": "<svg class=\"shrink-0 size-4\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M11.1 7.1a16.55 16.55 0 0 1 10.9 4\"/><path d=\"M12 12a12.6 12.6 0 0 1-8.7 5\"/><path d=\"M16.8 13.6a16.55 16.55 0 0 1-9 7.5\"/><path d=\"M20.7 17a12.8 12.8 0 0 0-8.7-5 13.3 13.3 0 0 1 0-10\"/><path d=\"M6.3 3.8a16.55 16.55 0 0 0 1.9 11.5\"/><circle cx=\"12\" cy=\"12\" r=\"10\"/></svg>"
                    }'>Sports &amp; Fitness</option>
                    <option value="#mega-menu-catalog-tab-7" data-hs-select-option='{
                      "icon": "<svg class=\"shrink-0 size-4\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M10 18a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H5a3 3 0 0 1-3-3 1 1 0 0 1 1-1z\"/><path d=\"M13 10H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a1 1 0 0 1 1 1v6a1 1 0 0 1-1 1l-.81 3.242a1 1 0 0 1-.97.758H8\"/><path d=\"M14 4h3a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-3\"/><path d=\"M18 6h4\"/><path d=\"m5 10-2 8\"/><path d=\"m7 18 2-8\"/></svg>"
                    }'>Construction &amp; Renovation</option>
                    <option value="#mega-menu-catalog-tab-8" data-hs-select-option='{
                      "icon": "<svg class=\"shrink-0 size-4\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M12 20.94c1.5 0 2.75 1.06 4 1.06 3 0 6-8 6-12.22A4.91 4.91 0 0 0 17 5c-2.22 0-4 1.44-5 2-1-.56-2.78-2-5-2a4.9 4.9 0 0 0-5 4.78C2 14 5 22 8 22c1.25 0 2.5-1.06 4-1.06Z\"/><path d=\"M10 2c1 .5 2 2 2 5\"/></svg>"
                    }'>Food</option>
                    <option value="#mega-menu-catalog-tab-9" data-hs-select-option='{
                      "icon": "<svg class=\"shrink-0 size-4\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m10.5 20.5 10-10a4.95 4.95 0 1 0-7-7l-10 10a4.95 4.95 0 1 0 7 7Z\"/><path d=\"m8.5 8.5 7 7\"/></svg>"
                    }'>Pharmacy</option>
                    <option value="#mega-menu-catalog-tab-10" data-hs-select-option='{
                      "icon": "<svg class=\"shrink-0 size-4\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M11.25 16.25h1.5L12 17z\"/><path d=\"M16 14v.5\"/><path d=\"M4.42 11.247A13.152 13.152 0 0 0 4 14.556C4 18.728 7.582 21 12 21s8-2.272 8-6.444a11.702 11.702 0 0 0-.493-3.309\"/><path d=\"M8 14v.5\"/><path d=\"M8.5 8.5c-.384 1.05-1.083 2.028-2.344 2.5-1.931.722-3.576-.297-3.656-1-.113-.994 1.177-6.53 4-7 1.923-.321 3.651.845 3.651 2.235A7.497 7.497 0 0 1 14 5.277c0-1.39 1.844-2.598 3.767-2.277 2.823.47 4.113 6.006 4 7-.08.703-1.725 1.722-3.656 1-1.261-.472-1.855-1.45-2.239-2.5\"/></svg>"
                    }'>Pet Products</option>
                    <option value="#mega-menu-catalog-tab-11" data-hs-select-option='{
                      "icon": "<svg class=\"shrink-0 size-4\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20\"/><path d=\"M8 11h8\"/><path d=\"M8 7h6\"/></svg>"
                    }'>Books</option>
                    <option value="#mega-menu-catalog-tab-12" data-hs-select-option='{
                      "icon": "<svg class=\"shrink-0 size-4\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><circle cx=\"4\" cy=\"4\" r=\"2\"/><path d=\"m14 5 3-3 3 3\"/><path d=\"m14 10 3-3 3 3\"/><path d=\"M17 14V2\"/><path d=\"M17 14H7l-5 8h20Z\"/><path d=\"M8 14v8\"/><path d=\"m9 14 5 8\"/></svg>"
                    }'>Tourism, fishing, hunting</option>
                    <option value="#mega-menu-catalog-tab-13" data-hs-select-option='{
                      "icon": "<svg class=\"shrink-0 size-4\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M19 9V6a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v3\"/><path d=\"M3 16a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-5a2 2 0 0 0-4 0v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V11a2 2 0 0 0-4 0z\"/><path d=\"M5 18v2\"/><path d=\"M19 18v2\"/></svg>"
                    }'>Furniture</option>
                    <option value="#mega-menu-catalog-tab-14" data-hs-select-option='{
                      "icon": "<svg class=\"shrink-0 size-4\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M6 3h12l4 6-10 13L2 9Z\"/><path d=\"M11 3 8 9l4 13 4-13-3-6\"/><path d=\"M2 9h20\"/></svg>"
                    }'>Jewelery</option>
                    <option value="#mega-menu-catalog-tab-15" data-hs-select-option='{
                      "icon": "<svg class=\"shrink-0 size-4\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><circle cx=\"6\" cy=\"15\" r=\"4\"/><circle cx=\"18\" cy=\"15\" r=\"4\"/><path d=\"M14 15a2 2 0 0 0-2-2 2 2 0 0 0-2 2\"/><path d=\"M2.5 13 5 7c.7-1.3 1.4-2 3-2\"/><path d=\"M21.5 13 19 7c-.7-1.3-1.5-2-3-2\"/></svg>"
                    }'>Accessories</option>
                    <option value="#mega-menu-catalog-tab-16" data-hs-select-option='{
                      "icon": "<svg class=\"shrink-0 size-4\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><line x1=\"6\" x2=\"10\" y1=\"11\" y2=\"11\"/><line x1=\"8\" x2=\"8\" y1=\"9\" y2=\"13\"/><line x1=\"15\" x2=\"15.01\" y1=\"12\" y2=\"12\"/><line x1=\"18\" x2=\"18.01\" y1=\"10\" y2=\"10\"/><path d=\"M17.32 5H6.68a4 4 0 0 0-3.978 3.59c-.006.052-.01.101-.017.152C2.604 9.416 2 14.456 2 16a3 3 0 0 0 3 3c1 0 1.5-.5 2-1l1.414-1.414A2 2 0 0 1 9.828 16h4.344a2 2 0 0 1 1.414.586L17 18c.5.5 1 1 2 1a3 3 0 0 0 3-3c0-1.545-.604-6.584-.685-7.258-.007-.05-.011-.1-.017-.151A4 4 0 0 0 17.32 5z\"/></svg>"
                    }'>Games &amp; Consoles</option>
                    <option value="#mega-menu-catalog-tab-17" data-hs-select-option='{
                      "icon": "<svg class=\"shrink-0 size-4\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M13 7 8.7 2.7a2.41 2.41 0 0 0-3.4 0L2.7 5.3a2.41 2.41 0 0 0 0 3.4L7 13\"/><path d=\"m8 6 2-2\"/><path d=\"m18 16 2-2\"/><path d=\"m17 11 4.3 4.3c.94.94.94 2.46 0 3.4l-2.6 2.6c-.94.94-2.46.94-3.4 0L11 17\"/><path d=\"M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z\"/><path d=\"m15 5 4 4\"/></svg>"
                    }'>Stationery</option>
                    <option value="#mega-menu-catalog-tab-18" data-hs-select-option='{
                      "icon": "<svg class=\"shrink-0 size-4\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M12 10a2 2 0 0 0-2 2c0 1.02-.1 2.51-.26 4\"/><path d=\"M14 13.12c0 2.38 0 6.38-1 8.88\"/><path d=\"M17.29 21.02c.12-.6.43-2.3.5-3.02\"/><path d=\"M2 12a10 10 0 0 1 18-6\"/><path d=\"M2 16h.01\"/><path d=\"M21.8 16c.2-2 .131-5.354 0-6\"/><path d=\"M5 19.5C5.5 18 6 15 6 12a6 6 0 0 1 .34-2\"/><path d=\"M8.65 22c.21-.66.45-1.32.57-2\"/><path d=\"M9 6.8a6 6 0 0 1 9 5.2v2\"/></svg>"
                    }'>Digital Goods</option>
                    <option value="#mega-menu-catalog-tab-19" data-hs-select-option='{
                      "icon": "<svg class=\"shrink-0 size-4\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M9 18V5l12-2v13\"/><circle cx=\"6\" cy=\"18\" r=\"3\"/><circle cx=\"18\" cy=\"16\" r=\"3\"/></svg>"
                    }'>Music</option>
                  </select>

                  <!-- Grid -->
                  <div class="flex">
                    <!-- Sidebar -->
                    <div class="hidden sm:block sm:pe-4 w-96 h-[75dvh] overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
                      <div id="hs-catalog-sidebar-nav-tabs" class="flex flex-col gap-y-1" aria-label="Tabs" role="tablist" aria-orientation="horizontal" data-hs-tabs='{
                        "eventType": "hover",
                        "preventNavigationResolution": "sm"
                      }'>
                        <!-- Link -->
                        <a class="hs-tab-active:bg-gray-100 dark:hs-tab-active:bg-neutral-800 py-2.5 px-2 w-full flex items-center gap-x-2 text-start font-medium text-sm bg-white text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800 active" id="mega-menu-catalog-tab-item-1" aria-selected="true" data-hs-tab="#mega-menu-catalog-tab-1" aria-controls="mega-menu-catalog-tab-1" role="tab" href="#">
                          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="14" height="20" x="5" y="2" rx="2" ry="2" />
                            <path d="M12 18h.01" />
                          </svg>
                          Electronics
                          <svg class="shrink-0 size-3.5 ms-auto text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                          </svg>
                        </a>
                        <!-- End Link -->

                        <!-- Link -->
                        <a class="hs-tab-active:bg-gray-100 dark:hs-tab-active:bg-neutral-800 py-2.5 px-2 w-full flex items-center gap-x-2 text-start font-medium text-sm bg-white text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" id="mega-menu-catalog-tab-item-2" aria-selected="false" data-hs-tab="#mega-menu-catalog-tab-2" aria-controls="mega-menu-catalog-tab-2" role="tab" href="#">
                          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20.38 3.46 16 2a4 4 0 0 1-8 0L3.62 3.46a2 2 0 0 0-1.34 2.23l.58 3.47a1 1 0 0 0 .99.84H6v10c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2V10h2.15a1 1 0 0 0 .99-.84l.58-3.47a2 2 0 0 0-1.34-2.23z" />
                          </svg>
                          Clothing
                          <svg class="shrink-0 size-3.5 ms-auto text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                          </svg>
                        </a>
                        <!-- End Link -->

                        <!-- Link -->
                        <a class="hs-tab-active:bg-gray-100 dark:hs-tab-active:bg-neutral-800 py-2.5 px-2 w-full flex items-center gap-x-2 text-start font-medium text-sm bg-white text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" id="mega-menu-catalog-tab-item-3" aria-selected="false" data-hs-tab="#mega-menu-catalog-tab-3" aria-controls="mega-menu-catalog-tab-3" role="tab" href="#">
                          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M7 20h10" />
                            <path d="M10 20c5.5-2.5.8-6.4 3-10" />
                            <path d="M9.5 9.4c1.1.8 1.8 2.2 2.3 3.7-2 .4-3.5.4-4.8-.3-1.2-.6-2.3-1.9-3-4.2 2.8-.5 4.4 0 5.5.8z" />
                            <path d="M14.1 6a7 7 0 0 0-1.1 4c1.9-.1 3.3-.6 4.3-1.4 1-1 1.6-2.3 1.7-4.6-2.7.1-4 1-4.9 2z" />
                          </svg>
                          House &amp; Garden
                          <svg class="shrink-0 size-3.5 ms-auto text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                          </svg>
                        </a>
                        <!-- End Link -->

                        <!-- Link -->
                        <a class="hs-tab-active:bg-gray-100 dark:hs-tab-active:bg-neutral-800 py-2.5 px-2 w-full flex items-center gap-x-2 text-start font-medium text-sm bg-white text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" id="mega-menu-catalog-tab-item-4" aria-selected="false" data-hs-tab="#mega-menu-catalog-tab-4" aria-controls="mega-menu-catalog-tab-4" role="tab" href="#">
                          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 12h.01" />
                            <path d="M15 12h.01" />
                            <path d="M10 16c.5.3 1.2.5 2 .5s1.5-.2 2-.5" />
                            <path d="M19 6.3a9 9 0 0 1 1.8 3.9 2 2 0 0 1 0 3.6 9 9 0 0 1-17.6 0 2 2 0 0 1 0-3.6A9 9 0 0 1 12 3c2 0 3.5 1.1 3.5 2.5s-.9 2.5-2 2.5c-.8 0-1.5-.4-1.5-1" />
                          </svg>
                          Baby Care
                          <svg class="shrink-0 size-3.5 ms-auto text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                          </svg>
                        </a>
                        <!-- End Link -->

                        <!-- Link -->
                        <a class="hs-tab-active:bg-gray-100 dark:hs-tab-active:bg-neutral-800 py-2.5 px-2 w-full flex items-center gap-x-2 text-start font-medium text-sm bg-white text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" id="mega-menu-catalog-tab-item-5" aria-selected="false" data-hs-tab="#mega-menu-catalog-tab-5" aria-controls="mega-menu-catalog-tab-5" role="tab" href="#">
                          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 6h3" />
                            <path d="M17 6h.01" />
                            <rect width="18" height="20" x="3" y="2" rx="2" />
                            <circle cx="12" cy="13" r="5" />
                            <path d="M12 18a2.5 2.5 0 0 0 0-5 2.5 2.5 0 0 1 0-5" />
                          </svg>
                          Home appliances
                          <svg class="shrink-0 size-3.5 ms-auto text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                          </svg>
                        </a>
                        <!-- End Link -->

                        <!-- Link -->
                        <a class="hs-tab-active:bg-gray-100 dark:hs-tab-active:bg-neutral-800 py-2.5 px-2 w-full flex items-center gap-x-2 text-start font-medium text-sm bg-white text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" id="mega-menu-catalog-tab-item-6" aria-selected="false" data-hs-tab="#mega-menu-catalog-tab-6" aria-controls="mega-menu-catalog-tab-6" role="tab" href="#">
                          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M11.1 7.1a16.55 16.55 0 0 1 10.9 4" />
                            <path d="M12 12a12.6 12.6 0 0 1-8.7 5" />
                            <path d="M16.8 13.6a16.55 16.55 0 0 1-9 7.5" />
                            <path d="M20.7 17a12.8 12.8 0 0 0-8.7-5 13.3 13.3 0 0 1 0-10" />
                            <path d="M6.3 3.8a16.55 16.55 0 0 0 1.9 11.5" />
                            <circle cx="12" cy="12" r="10" />
                          </svg>
                          Sports &amp; Fitness
                          <svg class="shrink-0 size-3.5 ms-auto text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                          </svg>
                        </a>
                        <!-- End Link -->

                        <!-- Link -->
                        <a class="hs-tab-active:bg-gray-100 dark:hs-tab-active:bg-neutral-800 py-2.5 px-2 w-full flex items-center gap-x-2 text-start font-medium text-sm bg-white text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" id="mega-menu-catalog-tab-item-7" aria-selected="false" data-hs-tab="#mega-menu-catalog-tab-7" aria-controls="mega-menu-catalog-tab-7" role="tab" href="#">
                          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M10 18a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H5a3 3 0 0 1-3-3 1 1 0 0 1 1-1z" />
                            <path d="M13 10H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a1 1 0 0 1 1 1v6a1 1 0 0 1-1 1l-.81 3.242a1 1 0 0 1-.97.758H8" />
                            <path d="M14 4h3a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-3" />
                            <path d="M18 6h4" />
                            <path d="m5 10-2 8" />
                            <path d="m7 18 2-8" />
                          </svg>
                          Constraction &amp; Renovation
                          <svg class="shrink-0 size-3.5 ms-auto text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                          </svg>
                        </a>
                        <!-- End Link -->

                        <!-- Link -->
                        <a class="hs-tab-active:bg-gray-100 dark:hs-tab-active:bg-neutral-800 py-2.5 px-2 w-full flex items-center gap-x-2 text-start font-medium text-sm bg-white text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" id="mega-menu-catalog-tab-item-8" aria-selected="false" data-hs-tab="#mega-menu-catalog-tab-8" aria-controls="mega-menu-catalog-tab-8" role="tab" href="#">
                          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 20.94c1.5 0 2.75 1.06 4 1.06 3 0 6-8 6-12.22A4.91 4.91 0 0 0 17 5c-2.22 0-4 1.44-5 2-1-.56-2.78-2-5-2a4.9 4.9 0 0 0-5 4.78C2 14 5 22 8 22c1.25 0 2.5-1.06 4-1.06Z" />
                            <path d="M10 2c1 .5 2 2 2 5" />
                          </svg>
                          Food
                          <svg class="shrink-0 size-3.5 ms-auto text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                          </svg>
                        </a>
                        <!-- End Link -->

                        <!-- Link -->
                        <a class="hs-tab-active:bg-gray-100 dark:hs-tab-active:bg-neutral-800 py-2.5 px-2 w-full flex items-center gap-x-2 text-start font-medium text-sm bg-white text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" id="mega-menu-catalog-tab-item-9" aria-selected="false" data-hs-tab="#mega-menu-catalog-tab-9" aria-controls="mega-menu-catalog-tab-9" role="tab" href="#">
                          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m10.5 20.5 10-10a4.95 4.95 0 1 0-7-7l-10 10a4.95 4.95 0 1 0 7 7Z" />
                            <path d="m8.5 8.5 7 7" />
                          </svg>
                          Pharmacy
                          <svg class="shrink-0 size-3.5 ms-auto text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                          </svg>
                        </a>
                        <!-- End Link -->

                        <!-- Link -->
                        <a class="hs-tab-active:bg-gray-100 dark:hs-tab-active:bg-neutral-800 py-2.5 px-2 w-full flex items-center gap-x-2 text-start font-medium text-sm bg-white text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" id="mega-menu-catalog-tab-item-10" aria-selected="false" data-hs-tab="#mega-menu-catalog-tab-10" aria-controls="mega-menu-catalog-tab-10" role="tab" href="#">
                          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M11.25 16.25h1.5L12 17z" />
                            <path d="M16 14v.5" />
                            <path d="M4.42 11.247A13.152 13.152 0 0 0 4 14.556C4 18.728 7.582 21 12 21s8-2.272 8-6.444a11.702 11.702 0 0 0-.493-3.309" />
                            <path d="M8 14v.5" />
                            <path d="M8.5 8.5c-.384 1.05-1.083 2.028-2.344 2.5-1.931.722-3.576-.297-3.656-1-.113-.994 1.177-6.53 4-7 1.923-.321 3.651.845 3.651 2.235A7.497 7.497 0 0 1 14 5.277c0-1.39 1.844-2.598 3.767-2.277 2.823.47 4.113 6.006 4 7-.08.703-1.725 1.722-3.656 1-1.261-.472-1.855-1.45-2.239-2.5" />
                          </svg>
                          Pet Products
                          <svg class="shrink-0 size-3.5 ms-auto text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                          </svg>
                        </a>
                        <!-- End Link -->

                        <!-- Link -->
                        <a class="hs-tab-active:bg-gray-100 dark:hs-tab-active:bg-neutral-800 py-2.5 px-2 w-full flex items-center gap-x-2 text-start font-medium text-sm bg-white text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" id="mega-menu-catalog-tab-item-11" aria-selected="false" data-hs-tab="#mega-menu-catalog-tab-11" aria-controls="mega-menu-catalog-tab-11" role="tab" href="#">
                          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20" />
                            <path d="M8 11h8" />
                            <path d="M8 7h6" />
                          </svg>
                          Books
                          <svg class="shrink-0 size-3.5 ms-auto text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                          </svg>
                        </a>
                        <!-- End Link -->

                        <!-- Link -->
                        <a class="hs-tab-active:bg-gray-100 dark:hs-tab-active:bg-neutral-800 py-2.5 px-2 w-full flex items-center gap-x-2 text-start font-medium text-sm bg-white text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" id="mega-menu-catalog-tab-item-12" aria-selected="false" data-hs-tab="#mega-menu-catalog-tab-12" aria-controls="mega-menu-catalog-tab-12" role="tab" href="#">
                          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="4" cy="4" r="2" />
                            <path d="m14 5 3-3 3 3" />
                            <path d="m14 10 3-3 3 3" />
                            <path d="M17 14V2" />
                            <path d="M17 14H7l-5 8h20Z" />
                            <path d="M8 14v8" />
                            <path d="m9 14 5 8" />
                          </svg>
                          Tourism, fishing, hunting
                          <svg class="shrink-0 size-3.5 ms-auto text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                          </svg>
                        </a>
                        <!-- End Link -->

                        <!-- Link -->
                        <a class="hs-tab-active:bg-gray-100 dark:hs-tab-active:bg-neutral-800 py-2.5 px-2 w-full flex items-center gap-x-2 text-start font-medium text-sm bg-white text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" id="mega-menu-catalog-tab-item-13" aria-selected="false" data-hs-tab="#mega-menu-catalog-tab-13" aria-controls="mega-menu-catalog-tab-13" role="tab" href="#">
                          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M19 9V6a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v3" />
                            <path d="M3 16a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-5a2 2 0 0 0-4 0v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V11a2 2 0 0 0-4 0z" />
                            <path d="M5 18v2" />
                            <path d="M19 18v2" />
                          </svg>
                          Furniture
                          <svg class="shrink-0 size-3.5 ms-auto text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                          </svg>
                        </a>
                        <!-- End Link -->

                        <!-- Link -->
                        <a class="hs-tab-active:bg-gray-100 dark:hs-tab-active:bg-neutral-800 py-2.5 px-2 w-full flex items-center gap-x-2 text-start font-medium text-sm bg-white text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" id="mega-menu-catalog-tab-item-14" aria-selected="false" data-hs-tab="#mega-menu-catalog-tab-14" aria-controls="mega-menu-catalog-tab-14" role="tab" href="#">
                          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6 3h12l4 6-10 13L2 9Z" />
                            <path d="M11 3 8 9l4 13 4-13-3-6" />
                            <path d="M2 9h20" />
                          </svg>
                          Jewelery
                          <svg class="shrink-0 size-3.5 ms-auto text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                          </svg>
                        </a>
                        <!-- End Link -->

                        <!-- Link -->
                        <a class="hs-tab-active:bg-gray-100 dark:hs-tab-active:bg-neutral-800 py-2.5 px-2 w-full flex items-center gap-x-2 text-start font-medium text-sm bg-white text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" id="mega-menu-catalog-tab-item-15" aria-selected="false" data-hs-tab="#mega-menu-catalog-tab-15" aria-controls="mega-menu-catalog-tab-15" role="tab" href="#">
                          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="6" cy="15" r="4" />
                            <circle cx="18" cy="15" r="4" />
                            <path d="M14 15a2 2 0 0 0-2-2 2 2 0 0 0-2 2" />
                            <path d="M2.5 13 5 7c.7-1.3 1.4-2 3-2" />
                            <path d="M21.5 13 19 7c-.7-1.3-1.5-2-3-2" />
                          </svg>
                          Accessories
                          <svg class="shrink-0 size-3.5 ms-auto text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                          </svg>
                        </a>
                        <!-- End Link -->

                        <!-- Link -->
                        <a class="hs-tab-active:bg-gray-100 dark:hs-tab-active:bg-neutral-800 py-2.5 px-2 w-full flex items-center gap-x-2 text-start font-medium text-sm bg-white text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" id="mega-menu-catalog-tab-item-16" aria-selected="false" data-hs-tab="#mega-menu-catalog-tab-16" aria-controls="mega-menu-catalog-tab-16" role="tab" href="#">
                          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="6" x2="10" y1="11" y2="11" />
                            <line x1="8" x2="8" y1="9" y2="13" />
                            <line x1="15" x2="15.01" y1="12" y2="12" />
                            <line x1="18" x2="18.01" y1="10" y2="10" />
                            <path d="M17.32 5H6.68a4 4 0 0 0-3.978 3.59c-.006.052-.01.101-.017.152C2.604 9.416 2 14.456 2 16a3 3 0 0 0 3 3c1 0 1.5-.5 2-1l1.414-1.414A2 2 0 0 1 9.828 16h4.344a2 2 0 0 1 1.414.586L17 18c.5.5 1 1 2 1a3 3 0 0 0 3-3c0-1.545-.604-6.584-.685-7.258-.007-.05-.011-.1-.017-.151A4 4 0 0 0 17.32 5z" />
                          </svg>
                          Games &amp; Consoles
                          <svg class="shrink-0 size-3.5 ms-auto text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                          </svg>
                        </a>
                        <!-- End Link -->

                        <!-- Link -->
                        <a class="hs-tab-active:bg-gray-100 dark:hs-tab-active:bg-neutral-800 py-2.5 px-2 w-full flex items-center gap-x-2 text-start font-medium text-sm bg-white text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" id="mega-menu-catalog-tab-item-17" aria-selected="false" data-hs-tab="#mega-menu-catalog-tab-17" aria-controls="mega-menu-catalog-tab-17" role="tab" href="#">
                          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M13 7 8.7 2.7a2.41 2.41 0 0 0-3.4 0L2.7 5.3a2.41 2.41 0 0 0 0 3.4L7 13" />
                            <path d="m8 6 2-2" />
                            <path d="m18 16 2-2" />
                            <path d="m17 11 4.3 4.3c.94.94.94 2.46 0 3.4l-2.6 2.6c-.94.94-2.46.94-3.4 0L11 17" />
                            <path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                            <path d="m15 5 4 4" />
                          </svg>
                          Stationery
                          <svg class="shrink-0 size-3.5 ms-auto text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                          </svg>
                        </a>
                        <!-- End Link -->

                        <!-- Link -->
                        <a class="hs-tab-active:bg-gray-100 dark:hs-tab-active:bg-neutral-800 py-2.5 px-2 w-full flex items-center gap-x-2 text-start font-medium text-sm bg-white text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" id="mega-menu-catalog-tab-item-18" aria-selected="false" data-hs-tab="#mega-menu-catalog-tab-18" aria-controls="mega-menu-catalog-tab-18" role="tab" href="#">
                          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 10a2 2 0 0 0-2 2c0 1.02-.1 2.51-.26 4" />
                            <path d="M14 13.12c0 2.38 0 6.38-1 8.88" />
                            <path d="M17.29 21.02c.12-.6.43-2.3.5-3.02" />
                            <path d="M2 12a10 10 0 0 1 18-6" />
                            <path d="M2 16h.01" />
                            <path d="M21.8 16c.2-2 .131-5.354 0-6" />
                            <path d="M5 19.5C5.5 18 6 15 6 12a6 6 0 0 1 .34-2" />
                            <path d="M8.65 22c.21-.66.45-1.32.57-2" />
                            <path d="M9 6.8a6 6 0 0 1 9 5.2v2" />
                          </svg>
                          Digital Goods
                          <svg class="shrink-0 size-3.5 ms-auto text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                          </svg>
                        </a>
                        <!-- End Link -->

                        <!-- Link -->
                        <a class="hs-tab-active:bg-gray-100 dark:hs-tab-active:bg-neutral-800 py-2.5 px-2 w-full flex items-center gap-x-2 text-start font-medium text-sm bg-white text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" id="mega-menu-catalog-tab-item-19" aria-selected="false" data-hs-tab="#mega-menu-catalog-tab-19" aria-controls="mega-menu-catalog-tab-19" role="tab" href="#">
                          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 18V5l12-2v13" />
                            <circle cx="6" cy="18" r="3" />
                            <circle cx="18" cy="16" r="3" />
                          </svg>
                          Music
                          <svg class="shrink-0 size-3.5 ms-auto text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                          </svg>
                        </a>
                        <!-- End Link -->
                      </div>
                    </div>
                    <!-- End Sidebar -->

                    <!-- Content -->
                    <div class="pe-4 sm:px-10 w-full h-[75dvh] overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
                      <!-- Tab -->
                      <div id="mega-menu-catalog-tab-1" role="tabpanel" aria-labelledby="mega-menu-catalog-tab-item-1">
                        <!-- Grid -->
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7 md:gap-10">
                          <div class="flex flex-col gap-7 md:gap-10">
                            <!-- List -->
                            <div class="space-y-7 md:space-y-10">
                              <div>
                                <span class="mb-2 flex justify-center items-center size-12 bg-gray-100 text-gray-800 rounded-xl dark:bg-neutral-800 dark:text-neutral-200">
                                  <svg class="shrink-0 size-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <rect width="14" height="20" x="5" y="2" rx="2" ry="2" />
                                    <path d="M12 18h.01" />
                                  </svg>
                                </span>
                                <span class="block mb-3 font-medium text-sm text-gray-800 dark:text-neutral-200">Phones and smart watches</span>

                                <div class="flex flex-col gap-y-1">
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Smartphones &amp; Tablets</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Accessories for smartphones and phones</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Smart Watch</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Fitness bracelets</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Straps for smartwatches and fitness bracelets</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Accessories for smartwatches and fitness bracelets</a></div>

                                  <div id="hs-shmnctdmsh1_1-heading" class="hs-collapse hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-shmnctdmsh1_1">
                                    <div class="flex flex-col gap-y-1">
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Mobile Phones</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">SIM Cards</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Replacement Parts</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Corded and cordless telephones</a></div>
                                    </div>
                                  </div>

                                  <button type="button" class="hs-collapse-toggle flex items-center gap-x-1 font-medium text-[13px] text-emerald-600 text-start hover:text-emerald-700 focus:outline-hidden focus:text-emerald-700 dark:text-emerald-500 dark:hover:text-emerald-600 dark:focus:text-emerald-600" id="hs-shmnctdmsh1_1" aria-expanded="false" aria-controls="hs-shmnctdmsh1_1-heading" data-hs-collapse="#hs-shmnctdmsh1_1-heading">
                                    <span class="hs-collapse-open:hidden">Show more</span>
                                    <span class="hs-collapse-open:block hidden">Show less</span>
                                    <svg class="hs-collapse-open:rotate-180 shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                      <path d="m6 9 6 6 6-6" />
                                    </svg>
                                  </button>
                                </div>
                              </div>
                            </div>
                            <!-- End List -->

                            <!-- List -->
                            <div class="space-y-7 md:space-y-10">
                              <div>
                                <span class="mb-2 flex justify-center items-center size-12 bg-gray-100 text-gray-800 rounded-xl dark:bg-neutral-800 dark:text-neutral-200">
                                  <svg class="shrink-0 size-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 16V7a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v9m16 0H4m16 0 1.28 2.55a1 1 0 0 1-.9 1.45H3.62a1 1 0 0 1-.9-1.45L4 16" />
                                  </svg>
                                </span>
                                <span class="block mb-3 font-medium text-sm text-gray-800 dark:text-neutral-200">Laptops, tablets and e-books</span>

                                <div class="flex flex-col gap-y-1">
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Laptops</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Gaming Laptops</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Tablets</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">E-books</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Graphics Tablets</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Cases and stands for tablets</a></div>

                                  <div id="hs-shmnctdmsh1_2-heading" class="hs-collapse hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-shmnctdmsh1_2">
                                    <div class="flex flex-col gap-y-1">
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Touch pens</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Laptop Accessories</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Replacement Parts</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Laptop Batteries</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Chargers</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">E-book cases</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Translators and dictionaries</a></div>
                                    </div>
                                  </div>

                                  <button type="button" class="hs-collapse-toggle flex items-center gap-x-1 font-medium text-[13px] text-emerald-600 text-start hover:text-emerald-700 focus:outline-hidden focus:text-emerald-700 dark:text-emerald-500 dark:hover:text-emerald-600 dark:focus:text-emerald-600" id="hs-shmnctdmsh1_2" aria-expanded="false" aria-controls="hs-shmnctdmsh1_2-heading" data-hs-collapse="#hs-shmnctdmsh1_2-heading">
                                    <span class="hs-collapse-open:hidden">Show more</span>
                                    <span class="hs-collapse-open:block hidden">Show less</span>
                                    <svg class="hs-collapse-open:rotate-180 shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                      <path d="m6 9 6 6 6-6" />
                                    </svg>
                                  </button>
                                </div>
                              </div>
                            </div>
                            <!-- End List -->

                            <!-- List -->
                            <div class="space-y-7 md:space-y-10">
                              <div>
                                <span class="mb-2 flex justify-center items-center size-12 bg-gray-100 text-gray-800 rounded-xl dark:bg-neutral-800 dark:text-neutral-200">
                                  <svg class="shrink-0 size-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="3" />
                                    <path d="M3 7V5a2 2 0 0 1 2-2h2" />
                                    <path d="M17 3h2a2 2 0 0 1 2 2v2" />
                                    <path d="M21 17v2a2 2 0 0 1-2 2h-2" />
                                    <path d="M7 21H5a2 2 0 0 1-2-2v-2" />
                                  </svg>
                                </span>
                                <span class="block mb-3 font-medium text-sm text-gray-800 dark:text-neutral-200">Optical devices</span>

                                <div class="flex flex-col gap-y-1">
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Telescopes</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Microscopes</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Microscope Accessories</a></div>
                                </div>
                              </div>
                            </div>
                            <!-- End List -->

                            <!-- List -->
                            <div class="space-y-7 md:space-y-10">
                              <div>
                                <span class="mb-2 flex justify-center items-center size-12 bg-gray-100 text-gray-800 rounded-xl dark:bg-neutral-800 dark:text-neutral-200">
                                  <svg class="shrink-0 size-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M3 14h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-7a9 9 0 0 1 18 0v7a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3" />
                                  </svg>
                                </span>
                                <span class="block mb-3 font-medium text-sm text-gray-800 dark:text-neutral-200">Headphones and audio equipment</span>

                                <div class="flex flex-col gap-y-1">
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Headphone</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Wireless Speakers</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Smart speakers</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Speakers</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Studio and stage equipment</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Microphones</a></div>

                                  <div id="hs-shmnctdmsh1_3-heading" class="hs-collapse hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-shmnctdmsh1_3">
                                    <div class="flex flex-col gap-y-1">
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Walkie-talkies and radios</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Radios</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Vinyl Players & Accessories</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Headphone Accessories</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Accessories for audio equipment</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Amplifiers, receivers and DACs</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">MP3 Players</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Voice recorders</a></div>
                                    </div>
                                  </div>

                                  <button type="button" class="hs-collapse-toggle flex items-center gap-x-1 font-medium text-[13px] text-emerald-600 text-start hover:text-emerald-700 focus:outline-hidden focus:text-emerald-700 dark:text-emerald-500 dark:hover:text-emerald-600 dark:focus:text-emerald-600" id="hs-shmnctdmsh1_3" aria-expanded="false" aria-controls="hs-shmnctdmsh1_3-heading" data-hs-collapse="#hs-shmnctdmsh1_3-heading">
                                    <span class="hs-collapse-open:hidden">Show more</span>
                                    <span class="hs-collapse-open:block hidden">Show less</span>
                                    <svg class="hs-collapse-open:rotate-180 shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                      <path d="m6 9 6 6 6-6" />
                                    </svg>
                                  </button>
                                </div>
                              </div>
                            </div>
                            <!-- End List -->
                          </div>
                          <!-- End Col -->

                          <div class="flex flex-col gap-7 md:gap-10">
                            <!-- List -->
                            <div class="space-y-7 md:space-y-10">
                              <div>
                                <span class="mb-2 flex justify-center items-center size-12 bg-gray-100 text-gray-800 rounded-xl dark:bg-neutral-800 dark:text-neutral-200">
                                  <svg class="shrink-0 size-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <rect width="14" height="8" x="5" y="2" rx="2" />
                                    <rect width="20" height="8" x="2" y="14" rx="2" />
                                    <path d="M6 18h2" />
                                    <path d="M12 18h6" />
                                  </svg>
                                </span>
                                <span class="block mb-3 font-medium text-sm text-gray-800 dark:text-neutral-200">Computers &amp; Peripherals</span>

                                <div class="flex flex-col gap-y-1">
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Monitors</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">System Units</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">All-in-One PCs</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Periphery</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Networking</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Nettops and Mini PCs</a></div>

                                  <div id="hs-shmnctdmsh2_1-heading" class="hs-collapse hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-shmnctdmsh2_1">
                                    <div class="flex flex-col gap-y-1">
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Miners &amp; Crypto Wallets</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Microcomputers and components</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Industrial Computers and Servers</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Spare parts for monitors</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Software</a></div>
                                    </div>
                                  </div>

                                  <button type="button" class="hs-collapse-toggle flex items-center gap-x-1 font-medium text-[13px] text-emerald-600 text-start hover:text-emerald-700 focus:outline-hidden focus:text-emerald-700 dark:text-emerald-500 dark:hover:text-emerald-600 dark:focus:text-emerald-600" id="hs-shmnctdmsh2_1" aria-expanded="false" aria-controls="hs-shmnctdmsh2_1-heading" data-hs-collapse="#hs-shmnctdmsh2_1-heading">
                                    <span class="hs-collapse-open:hidden">Show more</span>
                                    <span class="hs-collapse-open:block hidden">Show less</span>
                                    <svg class="hs-collapse-open:rotate-180 shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                      <path d="m6 9 6 6 6-6" />
                                    </svg>
                                  </button>
                                </div>
                              </div>
                            </div>
                            <!-- End List -->

                            <!-- List -->
                            <div class="space-y-7 md:space-y-10">
                              <div>
                                <span class="mb-2 flex justify-center items-center size-12 bg-gray-100 text-gray-800 rounded-xl dark:bg-neutral-800 dark:text-neutral-200">
                                  <svg class="shrink-0 size-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M14.5 4h-5L7 7H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3l-2.5-3z" />
                                    <circle cx="12" cy="13" r="3" />
                                  </svg>
                                </span>
                                <span class="block mb-3 font-medium text-sm text-gray-800 dark:text-neutral-200">Photo and video cameras</span>

                                <div class="flex flex-col gap-y-1">
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Action Cameras</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Action Camera Accessories</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Camcorders</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">SLR Cameras</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Mirrorless Cameras</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Lenses</a></div>

                                  <div id="hs-shmnctdmsh2_2-heading" class="hs-collapse hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-shmnctdmsh2_2">
                                    <div class="flex flex-col gap-y-1">
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Compact Cameras</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Instant Print Cameras</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Children's cameras and camcorders</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Accessories for photo and video equipment</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Photophones</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Studio equipment</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Cartridges and photographic film</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Compact Photo Printers</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Digital Photo Frames</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Other Accessories</a></div>
                                    </div>
                                  </div>

                                  <button type="button" class="hs-collapse-toggle flex items-center gap-x-1 font-medium text-[13px] text-emerald-600 text-start hover:text-emerald-700 focus:outline-hidden focus:text-emerald-700 dark:text-emerald-500 dark:hover:text-emerald-600 dark:focus:text-emerald-600" id="hs-shmnctdmsh2_2" aria-expanded="false" aria-controls="hs-shmnctdmsh2_2-heading" data-hs-collapse="#hs-shmnctdmsh2_2-heading">
                                    <span class="hs-collapse-open:hidden">Show more</span>
                                    <span class="hs-collapse-open:block hidden">Show less</span>
                                    <svg class="hs-collapse-open:rotate-180 shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                      <path d="m6 9 6 6 6-6" />
                                    </svg>
                                  </button>
                                </div>
                              </div>
                            </div>
                            <!-- End List -->

                            <!-- List -->
                            <div class="space-y-7 md:space-y-10">
                              <div>
                                <span class="mb-2 flex justify-center items-center size-12 bg-gray-100 text-gray-800 rounded-xl dark:bg-neutral-800 dark:text-neutral-200">
                                  <svg class="shrink-0 size-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="6" x2="10" y1="11" y2="11" />
                                    <line x1="8" x2="8" y1="9" y2="13" />
                                    <line x1="15" x2="15.01" y1="12" y2="12" />
                                    <line x1="18" x2="18.01" y1="10" y2="10" />
                                    <path d="M17.32 5H6.68a4 4 0 0 0-3.978 3.59c-.006.052-.01.101-.017.152C2.604 9.416 2 14.456 2 16a3 3 0 0 0 3 3c1 0 1.5-.5 2-1l1.414-1.414A2 2 0 0 1 9.828 16h4.344a2 2 0 0 1 1.414.586L17 18c.5.5 1 1 2 1a3 3 0 0 0 3-3c0-1.545-.604-6.584-.685-7.258-.007-.05-.011-.1-.017-.151A4 4 0 0 0 17.32 5z" />
                                  </svg>
                                </span>
                                <span class="block mb-3 font-medium text-sm text-gray-800 dark:text-neutral-200">Game consoles and laptops</span>

                                <div class="flex flex-col gap-y-1">
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Game consoles</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Gaming Laptops</a></div>
                                </div>
                              </div>
                            </div>
                            <!-- End List -->

                            <!-- List -->
                            <div class="space-y-7 md:space-y-10">
                              <div>
                                <span class="mb-2 flex justify-center items-center size-12 bg-gray-100 text-gray-800 rounded-xl dark:bg-neutral-800 dark:text-neutral-200">
                                  <svg class="shrink-0 size-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 7 3 5" />
                                    <path d="M9 6V3" />
                                    <path d="m13 7 2-2" />
                                    <circle cx="9" cy="13" r="3" />
                                    <path d="M11.83 12H20a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-4a2 2 0 0 1 2-2h2.17" />
                                    <path d="M16 16h2" />
                                  </svg>
                                </span>
                                <span class="block mb-3 font-medium text-sm text-gray-800 dark:text-neutral-200">Office equipment</span>

                                <div class="flex flex-col gap-y-1">
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Laptops</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">System Units</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Monitors</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">MFPs</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Printers</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Cartridges and supplies</a></div>

                                  <div id="hs-shmnctdmsh2_3-heading" class="hs-collapse hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-shmnctdmsh2_3">
                                    <div class="flex flex-col gap-y-1">
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Equipment for trade</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">3D Equipment</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Spare Parts & Accessories</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Scanners</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Copiers</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Plotters</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Laminators</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Shredders</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Brochure makers</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Archive Binding</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Projectors</a></div>
                                    </div>
                                  </div>

                                  <button type="button" class="hs-collapse-toggle flex items-center gap-x-1 font-medium text-[13px] text-emerald-600 text-start hover:text-emerald-700 focus:outline-hidden focus:text-emerald-700 dark:text-emerald-500 dark:hover:text-emerald-600 dark:focus:text-emerald-600" id="hs-shmnctdmsh2_3" aria-expanded="false" aria-controls="hs-shmnctdmsh2_3-heading" data-hs-collapse="#hs-shmnctdmsh2_3-heading">
                                    <span class="hs-collapse-open:hidden">Show more</span>
                                    <span class="hs-collapse-open:block hidden">Show less</span>
                                    <svg class="hs-collapse-open:rotate-180 shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                      <path d="m6 9 6 6 6-6" />
                                    </svg>
                                  </button>
                                </div>
                              </div>
                            </div>
                            <!-- End List -->
                          </div>
                          <!-- End Col -->

                          <div class="flex flex-col gap-7 md:gap-10">
                            <!-- List -->
                            <div class="space-y-7 md:space-y-10">
                              <div>
                                <span class="mb-2 flex justify-center items-center size-12 bg-gray-100 text-gray-800 rounded-xl dark:bg-neutral-800 dark:text-neutral-200">
                                  <svg class="shrink-0 size-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <rect width="7" height="12" x="2" y="6" rx="1" />
                                    <path d="M13 8.32a7.43 7.43 0 0 1 0 7.36" />
                                    <path d="M16.46 6.21a11.76 11.76 0 0 1 0 11.58" />
                                    <path d="M19.91 4.1a15.91 15.91 0 0 1 .01 15.8" />
                                  </svg>
                                </span>
                                <span class="block mb-3 font-medium text-sm text-gray-800 dark:text-neutral-200">Smart Home</span>

                                <div class="flex flex-col gap-y-1">
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Accessories</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Switches and relays</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Sensors & Regulators</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Smart Home Kits</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Lighting</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Sockets</a></div>

                                  <div id="hs-shmnctdmsh3_1-heading" class="hs-collapse hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-shmnctdmsh3_1">
                                    <div class="flex flex-col gap-y-1">
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Safety devices</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Smart Home Control</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Electric curtain rods</a></div>
                                    </div>
                                  </div>

                                  <button type="button" class="hs-collapse-toggle flex items-center gap-x-1 font-medium text-[13px] text-emerald-600 text-start hover:text-emerald-700 focus:outline-hidden focus:text-emerald-700 dark:text-emerald-500 dark:hover:text-emerald-600 dark:focus:text-emerald-600" id="hs-shmnctdmsh3_1" aria-expanded="false" aria-controls="hs-shmnctdmsh3_1-heading" data-hs-collapse="#hs-shmnctdmsh3_1-heading">
                                    <span class="hs-collapse-open:hidden">Show more</span>
                                    <span class="hs-collapse-open:block hidden">Show less</span>
                                    <svg class="hs-collapse-open:rotate-180 shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                      <path d="m6 9 6 6 6-6" />
                                    </svg>
                                  </button>
                                </div>
                              </div>
                            </div>
                            <!-- End List -->

                            <!-- List -->
                            <div class="space-y-7 md:space-y-10">
                              <div>
                                <span class="mb-2 flex justify-center items-center size-12 bg-gray-100 text-gray-800 rounded-xl dark:bg-neutral-800 dark:text-neutral-200">
                                  <svg class="shrink-0 size-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <rect width="20" height="15" x="2" y="7" rx="2" ry="2" />
                                    <polyline points="17 2 12 7 7 2" />
                                  </svg>
                                </span>
                                <span class="block mb-3 font-medium text-sm text-gray-800 dark:text-neutral-200">Televisions and video equipment</span>

                                <div class="flex flex-col gap-y-1">
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Television</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Set-top boxes and media players</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Brackets &amp; Mounts</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Digital and satellite TV</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Online cinemas</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Remote controls</a></div>

                                  <div id="hs-shmnctdmsh3_2-heading" class="hs-collapse hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-shmnctdmsh3_2">
                                    <div class="flex flex-col gap-y-1">
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Antenna</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Spare Parts &amp; Accessories</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">DVD Players</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Projectors</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Projection screens</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Interactive panels and LED screens</a></div>
                                    </div>
                                  </div>

                                  <button type="button" class="hs-collapse-toggle flex items-center gap-x-1 font-medium text-[13px] text-emerald-600 text-start hover:text-emerald-700 focus:outline-hidden focus:text-emerald-700 dark:text-emerald-500 dark:hover:text-emerald-600 dark:focus:text-emerald-600" id="hs-shmnctdmsh3_2" aria-expanded="false" aria-controls="hs-shmnctdmsh3_2-heading" data-hs-collapse="#hs-shmnctdmsh3_2-heading">
                                    <span class="hs-collapse-open:hidden">Show more</span>
                                    <span class="hs-collapse-open:block hidden">Show less</span>
                                    <svg class="hs-collapse-open:rotate-180 shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                      <path d="m6 9 6 6 6-6" />
                                    </svg>
                                  </button>
                                </div>
                              </div>
                            </div>
                            <!-- End List -->

                            <!-- List -->
                            <div class="space-y-7 md:space-y-10">
                              <div>
                                <span class="mb-2 flex justify-center items-center size-12 bg-gray-100 text-gray-800 rounded-xl dark:bg-neutral-800 dark:text-neutral-200">
                                  <svg class="shrink-0 size-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="13" r="8" />
                                    <path d="M12 9v4l2 2" />
                                    <path d="M5 3 2 6" />
                                    <path d="m22 6-3-3" />
                                    <path d="M6.38 18.7 4 21" />
                                    <path d="M17.64 18.67 20 21" />
                                  </svg>
                                </span>
                                <span class="block mb-3 font-medium text-sm text-gray-800 dark:text-neutral-200">Clocks and electronic alarm clocks</span>

                                <div class="flex flex-col gap-y-1">
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Electronic alarm clocks</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Radio alarm clocks</a></div>
                                </div>
                              </div>
                            </div>
                            <!-- End List -->

                            <!-- List -->
                            <div class="space-y-7 md:space-y-10">
                              <div>
                                <span class="mb-2 flex justify-center items-center size-12 bg-gray-100 text-gray-800 rounded-xl dark:bg-neutral-800 dark:text-neutral-200">
                                  <svg class="shrink-0 size-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M16.75 12h3.632a1 1 0 0 1 .894 1.447l-2.034 4.069a1 1 0 0 1-1.708.134l-2.124-2.97" />
                                    <path d="M17.106 9.053a1 1 0 0 1 .447 1.341l-3.106 6.211a1 1 0 0 1-1.342.447L3.61 12.3a2.92 2.92 0 0 1-1.3-3.91L3.69 5.6a2.92 2.92 0 0 1 3.92-1.3z" />
                                    <path d="M2 19h3.76a2 2 0 0 0 1.8-1.1L9 15" />
                                    <path d="M2 21v-4" />
                                    <path d="M7 9h.01" />
                                  </svg>
                                </span>
                                <span class="block mb-3 font-medium text-sm text-gray-800 dark:text-neutral-200">Security systems and video surveillance</span>

                                <div class="flex flex-col gap-y-1">
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">CCTV Cameras</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Video surveillance systems</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Automation for gates</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Intercoms</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Security equipment for home and cottage</a></div>
                                  <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Security systems for business</a></div>

                                  <div id="hs-shmnctdmsh3_3-heading" class="hs-collapse hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-shmnctdmsh3_3">
                                    <div class="flex flex-col gap-y-1">
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Hidden Cameras & Personal Video Recorders</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Registrars</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Dummy CCTV Cameras</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Electronic locks</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Electronic keys and cards</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Signal suppressors and anti-bugs</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Installation of video surveillance</a></div>
                                      <div><a class="text-[13px] text-gray-500 underline-offset-4 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Personal alarms</a></div>
                                    </div>
                                  </div>

                                  <button type="button" class="hs-collapse-toggle flex items-center gap-x-1 font-medium text-[13px] text-emerald-600 text-start hover:text-emerald-700 focus:outline-hidden focus:text-emerald-700 dark:text-emerald-500 dark:hover:text-emerald-600 dark:focus:text-emerald-600" id="hs-shmnctdmsh3_3" aria-expanded="false" aria-controls="hs-shmnctdmsh3_3-heading" data-hs-collapse="#hs-shmnctdmsh3_3-heading">
                                    <span class="hs-collapse-open:hidden">Show more</span>
                                    <span class="hs-collapse-open:block hidden">Show less</span>
                                    <svg class="hs-collapse-open:rotate-180 shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                      <path d="m6 9 6 6 6-6" />
                                    </svg>
                                  </button>
                                </div>
                              </div>
                            </div>
                            <!-- End List -->
                          </div>
                          <!-- End Col -->
                        </div>
                        <!-- End Grid -->
                      </div>
                      <!-- End Tab -->

                      <!-- Tab -->
                      <div id="mega-menu-catalog-tab-2" class="hidden h-full" role="tabpanel" aria-labelledby="mega-menu-catalog-tab-item-2">
                        <!-- Grid -->
                        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-3 md:gap-6">
                          <!-- Item -->
                          <a class="group block p-4 rounded-lg text-center hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="../../pro/shop-marketplace/listing.html">
                            <div class="relative shrink-0">
                              <img class="shrink-0 size-16 sm:size-20 lg:size-24 mx-auto object-cover bg-gray-100 rounded-full dark:bg-neutral-800" src="https://images.unsplash.com/photo-1726828501829-9188cde81755?q=80&w=180&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Product Image">
                              <div class="absolute -top-0.5 end-0.5">
                                <span class="py-0.5 px-2 inline-flex items-center gap-x-1.5 text-xs font-medium bg-emerald-100 text-emerald-800 rounded-full dark:bg-emerald-900 dark:text-emerald-500">Hot</span>
                              </div>
                            </div>
                            <span class="mt-3 block text-sm text-gray-800 dark:text-neutral-200">Phones</span>
                          </a>
                          <!-- End Item -->

                          <!-- Item -->
                          <a class="group block p-4 rounded-lg text-center hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="../../pro/shop-marketplace/listing.html">
                            <div class="relative shrink-0">
                              <img class="shrink-0 size-16 sm:size-20 lg:size-24 mx-auto object-cover bg-gray-100 rounded-full dark:bg-neutral-800" src="https://images.unsplash.com/photo-1616763355603-9755a640a287?q=80&w=180&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Product Image">
                            </div>
                            <span class="mt-3 block text-sm text-gray-800 dark:text-neutral-200">Computers</span>
                          </a>
                          <!-- End Item -->

                          <!-- Item -->
                          <a class="group block p-4 rounded-lg text-center hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="../../pro/shop-marketplace/listing.html">
                            <div class="relative shrink-0">
                              <img class="shrink-0 size-16 sm:size-20 lg:size-24 mx-auto object-cover bg-gray-100 rounded-full dark:bg-neutral-800" src="https://images.unsplash.com/photo-1666401565408-9b6b0741f0d6?q=80&w=180&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Product Image">
                            </div>
                            <span class="mt-3 block text-sm text-gray-800 dark:text-neutral-200">Smart Home</span>
                          </a>
                          <!-- End Item -->

                          <!-- Item -->
                          <a class="group block p-4 rounded-lg text-center hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="../../pro/shop-marketplace/listing.html">
                            <div class="relative shrink-0">
                              <img class="shrink-0 size-16 sm:size-20 lg:size-24 mx-auto object-cover bg-gray-100 rounded-full dark:bg-neutral-800" src="https://images.unsplash.com/photo-1611186871348-b1ce696e52c9?q=80&w=180&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Product Image">
                            </div>
                            <span class="mt-3 block text-sm text-gray-800 dark:text-neutral-200">Laptops</span>
                          </a>
                          <!-- End Item -->

                          <!-- Item -->
                          <a class="group block p-4 rounded-lg text-center hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="../../pro/shop-marketplace/listing.html">
                            <div class="relative shrink-0">
                              <img class="shrink-0 size-16 sm:size-20 lg:size-24 mx-auto object-cover bg-gray-100 rounded-full dark:bg-neutral-800" src="https://images.unsplash.com/photo-1698729616468-5b2f627df845?q=80&w=180&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Product Image">
                              <div class="absolute -top-0.5 end-0.5">
                                <span class="py-0.5 px-2 inline-flex items-center gap-x-1.5 text-xs font-medium bg-emerald-100 text-emerald-800 rounded-full dark:bg-emerald-900 dark:text-emerald-500">Hot</span>
                              </div>
                            </div>
                            <span class="mt-3 block text-sm text-gray-800 dark:text-neutral-200">Smart Watches</span>
                          </a>
                          <!-- End Item -->

                          <!-- Item -->
                          <a class="group block p-4 rounded-lg text-center hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="../../pro/shop-marketplace/listing.html">
                            <div class="relative shrink-0">
                              <img class="shrink-0 size-16 sm:size-20 lg:size-24 mx-auto object-cover bg-gray-100 rounded-full dark:bg-neutral-800" src="https://images.unsplash.com/photo-1662731340335-e5485bd50268?q=80&w=180&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Product Image">
                              <div class="absolute -top-0.5 end-0.5">
                                <span class="py-0.5 px-2 inline-flex items-center gap-x-1.5 text-xs font-medium bg-emerald-100 text-emerald-800 rounded-full dark:bg-emerald-900 dark:text-emerald-500">Hot</span>
                              </div>
                            </div>
                            <span class="mt-3 block text-sm text-gray-800 dark:text-neutral-200">Tablets</span>
                          </a>
                          <!-- End Item -->

                          <!-- Item -->
                          <a class="group block p-4 rounded-lg text-center hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="../../pro/shop-marketplace/listing.html">
                            <div class="relative shrink-0">
                              <img class="shrink-0 size-16 sm:size-20 lg:size-24 mx-auto object-cover bg-gray-100 rounded-full dark:bg-neutral-800" src="https://images.unsplash.com/photo-1522401195795-1d580bb06720?q=80&w=180&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Product Image">
                            </div>
                            <span class="mt-3 block text-sm text-gray-800 dark:text-neutral-200">Cameras</span>
                          </a>
                          <!-- End Item -->

                          <!-- Item -->
                          <a class="group block p-4 rounded-lg text-center hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="../../pro/shop-marketplace/listing.html">
                            <div class="relative shrink-0">
                              <img class="shrink-0 size-16 sm:size-20 lg:size-24 mx-auto object-cover bg-gray-100 rounded-full dark:bg-neutral-800" src="https://images.unsplash.com/photo-1594155187705-bd33d893961c?q=80&w=180&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Product Image">
                            </div>
                            <span class="mt-3 block text-sm text-gray-800 dark:text-neutral-200">TVs</span>
                          </a>
                          <!-- End Item -->

                          <!-- Item -->
                          <a class="group block p-4 rounded-lg text-center hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="../../pro/shop-marketplace/listing.html">
                            <div class="relative shrink-0">
                              <img class="shrink-0 size-16 sm:size-20 lg:size-24 mx-auto object-cover bg-gray-100 rounded-full dark:bg-neutral-800" src="https://images.unsplash.com/photo-1532543758257-0f4e06e08aec?q=80&w=180&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Product Image">
                            </div>
                            <span class="mt-3 block text-sm text-gray-800 dark:text-neutral-200">Optical Devices</span>
                          </a>
                          <!-- End Item -->

                          <!-- Item -->
                          <a class="group block p-4 rounded-lg text-center hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="../../pro/shop-marketplace/listing.html">
                            <div class="relative shrink-0">
                              <img class="shrink-0 size-16 sm:size-20 lg:size-24 mx-auto object-cover bg-gray-100 rounded-full dark:bg-neutral-800" src="https://images.unsplash.com/photo-1542549237432-a176cb9d5e5e?q=80&w=180&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Product Image">
                              <div class="absolute -top-0.5 end-0.5">
                                <span class="py-0.5 px-2 inline-flex items-center gap-x-1.5 text-xs font-medium bg-emerald-100 text-emerald-800 rounded-full dark:bg-emerald-900 dark:text-emerald-500">Hot</span>
                              </div>
                            </div>
                            <span class="mt-3 block text-sm text-gray-800 dark:text-neutral-200">Game Consoles</span>
                          </a>
                          <!-- End Item -->

                          <!-- Item -->
                          <a class="group block p-4 rounded-lg text-center hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="../../pro/shop-marketplace/listing.html">
                            <div class="relative shrink-0">
                              <img class="shrink-0 size-16 sm:size-20 lg:size-24 mx-auto object-cover bg-gray-100 rounded-full dark:bg-neutral-800" src="https://images.unsplash.com/photo-1628329567705-f8f7150c3cff?q=80&w=180&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Product Image">
                            </div>
                            <span class="mt-3 block text-sm text-gray-800 dark:text-neutral-200">Headphones</span>
                          </a>
                          <!-- End Item -->

                          <!-- Item -->
                          <a class="group block p-4 rounded-lg text-center hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="../../pro/shop-marketplace/listing.html">
                            <div class="relative shrink-0">
                              <img class="shrink-0 size-16 sm:size-20 lg:size-24 mx-auto object-cover bg-gray-100 rounded-full dark:bg-neutral-800" src="https://images.unsplash.com/photo-1618482914248-29272d021005?q=80&w=180&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Product Image">
                            </div>
                            <span class="mt-3 block text-sm text-gray-800 dark:text-neutral-200">Security Systems</span>
                          </a>
                          <!-- End Item -->

                          <!-- Item -->
                          <a class="group block p-4 rounded-lg text-center hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="../../pro/shop-marketplace/listing.html">
                            <div class="relative shrink-0">
                              <img class="shrink-0 size-16 sm:size-20 lg:size-24 mx-auto object-cover bg-gray-100 rounded-full dark:bg-neutral-800" src="https://images.unsplash.com/photo-1550009158-9ebf69173e03?q=80&w=180&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Product Image">
                            </div>
                            <span class="mt-3 block text-sm text-gray-800 dark:text-neutral-200">PC Accessories</span>
                          </a>
                          <!-- End Item -->

                          <!-- Item -->
                          <a class="group block p-4 rounded-lg text-center hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="../../pro/shop-marketplace/listing.html">
                            <div class="relative shrink-0">
                              <img class="shrink-0 size-16 sm:size-20 lg:size-24 mx-auto object-cover bg-gray-100 rounded-full dark:bg-neutral-800" src="https://images.unsplash.com/photo-1631052941794-2a6e26d4ac17?q=80&w=180&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Product Image">
                            </div>
                            <span class="mt-3 block text-sm text-gray-800 dark:text-neutral-200">Drones</span>
                          </a>
                          <!-- End Item -->

                          <!-- Item -->
                          <a class="group block p-4 rounded-lg text-center hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="../../pro/shop-marketplace/listing.html">
                            <div class="relative shrink-0">
                              <img class="shrink-0 size-16 sm:size-20 lg:size-24 mx-auto object-cover bg-gray-100 rounded-full dark:bg-neutral-800" src="https://images.unsplash.com/photo-1657734240363-356201c49b15?q=80&w=180&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Product Image">
                            </div>
                            <span class="mt-3 block text-sm text-gray-800 dark:text-neutral-200">VRs</span>
                          </a>
                          <!-- End Item -->
                        </div>
                        <!-- Grid -->
                      </div>
                      <!-- End Tab -->

                      <!-- Tab -->
                      <div id="mega-menu-catalog-tab-3" class="hidden h-full" role="tabpanel" aria-labelledby="mega-menu-catalog-tab-item-3">
                        <!-- Loading Indicator -->
                        <div class="h-full flex flex-col justify-center items-center text-center">
                          <span class="py-1.5 inline-flex gap-x-1">
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite] dark:bg-neutral-200"></span>
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite_0.2s] dark:bg-neutral-200"></span>
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite_0.4s] dark:bg-neutral-200"></span>
                          </span>
                          <p class="mt-3 text-sm text-gray-500 dark:text-neutral-500">
                            This is a placeholder loader.<br>This conent is empty.
                          </p>
                        </div>
                        <!-- End Loading Indicator -->
                      </div>
                      <!-- End Tab -->

                      <!-- Tab -->
                      <div id="mega-menu-catalog-tab-4" class="hidden h-full" role="tabpanel" aria-labelledby="mega-menu-catalog-tab-item-4">
                        <!-- Loading Indicator -->
                        <div class="h-full flex flex-col justify-center items-center text-center">
                          <span class="py-1.5 inline-flex gap-x-1">
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite] dark:bg-neutral-200"></span>
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite_0.2s] dark:bg-neutral-200"></span>
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite_0.4s] dark:bg-neutral-200"></span>
                          </span>
                          <p class="mt-3 text-sm text-gray-500 dark:text-neutral-500">
                            This is a placeholder loader.<br>This conent is empty.
                          </p>
                        </div>
                        <!-- End Loading Indicator -->
                      </div>
                      <!-- End Tab -->

                      <!-- Tab -->
                      <div id="mega-menu-catalog-tab-5" class="hidden h-full" role="tabpanel" aria-labelledby="mega-menu-catalog-tab-item-5">
                        <!-- Loading Indicator -->
                        <div class="h-full flex flex-col justify-center items-center text-center">
                          <span class="py-1.5 inline-flex gap-x-1">
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite] dark:bg-neutral-200"></span>
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite_0.2s] dark:bg-neutral-200"></span>
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite_0.4s] dark:bg-neutral-200"></span>
                          </span>
                          <p class="mt-3 text-sm text-gray-500 dark:text-neutral-500">
                            This is a placeholder loader.<br>This conent is empty.
                          </p>
                        </div>
                        <!-- End Loading Indicator -->
                      </div>
                      <!-- End Tab -->

                      <!-- Tab -->
                      <div id="mega-menu-catalog-tab-6" class="hidden h-full" role="tabpanel" aria-labelledby="mega-menu-catalog-tab-item-6">
                        <!-- Loading Indicator -->
                        <div class="h-full flex flex-col justify-center items-center text-center">
                          <span class="py-1.5 inline-flex gap-x-1">
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite] dark:bg-neutral-200"></span>
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite_0.2s] dark:bg-neutral-200"></span>
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite_0.4s] dark:bg-neutral-200"></span>
                          </span>
                          <p class="mt-3 text-sm text-gray-500 dark:text-neutral-500">
                            This is a placeholder loader.<br>This conent is empty.
                          </p>
                        </div>
                        <!-- End Loading Indicator -->
                      </div>
                      <!-- End Tab -->

                      <!-- Tab -->
                      <div id="mega-menu-catalog-tab-7" class="hidden h-full" role="tabpanel" aria-labelledby="mega-menu-catalog-tab-item-7">
                        <!-- Loading Indicator -->
                        <div class="h-full flex flex-col justify-center items-center text-center">
                          <span class="py-1.5 inline-flex gap-x-1">
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite] dark:bg-neutral-200"></span>
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite_0.2s] dark:bg-neutral-200"></span>
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite_0.4s] dark:bg-neutral-200"></span>
                          </span>
                          <p class="mt-3 text-sm text-gray-500 dark:text-neutral-500">
                            This is a placeholder loader.<br>This conent is empty.
                          </p>
                        </div>
                        <!-- End Loading Indicator -->
                      </div>
                      <!-- End Tab -->

                      <!-- Tab -->
                      <div id="mega-menu-catalog-tab-8" class="hidden h-full" role="tabpanel" aria-labelledby="mega-menu-catalog-tab-item-8">
                        <!-- Loading Indicator -->
                        <div class="h-full flex flex-col justify-center items-center text-center">
                          <span class="py-1.5 inline-flex gap-x-1">
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite] dark:bg-neutral-200"></span>
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite_0.2s] dark:bg-neutral-200"></span>
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite_0.4s] dark:bg-neutral-200"></span>
                          </span>
                          <p class="mt-3 text-sm text-gray-500 dark:text-neutral-500">
                            This is a placeholder loader.<br>This conent is empty.
                          </p>
                        </div>
                        <!-- End Loading Indicator -->
                      </div>
                      <!-- End Tab -->

                      <!-- Tab -->
                      <div id="mega-menu-catalog-tab-9" class="hidden h-full" role="tabpanel" aria-labelledby="mega-menu-catalog-tab-item-9">
                        <!-- Loading Indicator -->
                        <div class="h-full flex flex-col justify-center items-center text-center">
                          <span class="py-1.5 inline-flex gap-x-1">
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite] dark:bg-neutral-200"></span>
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite_0.2s] dark:bg-neutral-200"></span>
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite_0.4s] dark:bg-neutral-200"></span>
                          </span>
                          <p class="mt-3 text-sm text-gray-500 dark:text-neutral-500">
                            This is a placeholder loader.<br>This conent is empty.
                          </p>
                        </div>
                        <!-- End Loading Indicator -->
                      </div>
                      <!-- End Tab -->

                      <!-- Tab -->
                      <div id="mega-menu-catalog-tab-10" class="hidden h-full" role="tabpanel" aria-labelledby="mega-menu-catalog-tab-item-10">
                        <!-- Loading Indicator -->
                        <div class="h-full flex flex-col justify-center items-center text-center">
                          <span class="py-1.5 inline-flex gap-x-1">
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite] dark:bg-neutral-200"></span>
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite_0.2s] dark:bg-neutral-200"></span>
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite_0.4s] dark:bg-neutral-200"></span>
                          </span>
                          <p class="mt-3 text-sm text-gray-500 dark:text-neutral-500">
                            This is a placeholder loader.<br>This conent is empty.
                          </p>
                        </div>
                        <!-- End Loading Indicator -->
                      </div>
                      <!-- End Tab -->

                      <!-- Tab -->
                      <div id="mega-menu-catalog-tab-11" class="hidden h-full" role="tabpanel" aria-labelledby="mega-menu-catalog-tab-item-11">
                        <!-- Loading Indicator -->
                        <div class="h-full flex flex-col justify-center items-center text-center">
                          <span class="py-1.5 inline-flex gap-x-1">
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite] dark:bg-neutral-200"></span>
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite_0.2s] dark:bg-neutral-200"></span>
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite_0.4s] dark:bg-neutral-200"></span>
                          </span>
                          <p class="mt-3 text-sm text-gray-500 dark:text-neutral-500">
                            This is a placeholder loader.<br>This conent is empty.
                          </p>
                        </div>
                        <!-- End Loading Indicator -->
                      </div>
                      <!-- End Tab -->

                      <!-- Tab -->
                      <div id="mega-menu-catalog-tab-12" class="hidden h-full" role="tabpanel" aria-labelledby="mega-menu-catalog-tab-item-12">
                        <!-- Loading Indicator -->
                        <div class="h-full flex flex-col justify-center items-center text-center">
                          <span class="py-1.5 inline-flex gap-x-1">
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite] dark:bg-neutral-200"></span>
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite_0.2s] dark:bg-neutral-200"></span>
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite_0.4s] dark:bg-neutral-200"></span>
                          </span>
                          <p class="mt-3 text-sm text-gray-500 dark:text-neutral-500">
                            This is a placeholder loader.<br>This conent is empty.
                          </p>
                        </div>
                        <!-- End Loading Indicator -->
                      </div>
                      <!-- End Tab -->

                      <!-- Tab -->
                      <div id="mega-menu-catalog-tab-13" class="hidden h-full" role="tabpanel" aria-labelledby="mega-menu-catalog-tab-item-13">
                        <!-- Loading Indicator -->
                        <div class="h-full flex flex-col justify-center items-center text-center">
                          <span class="py-1.5 inline-flex gap-x-1">
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite] dark:bg-neutral-200"></span>
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite_0.2s] dark:bg-neutral-200"></span>
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite_0.4s] dark:bg-neutral-200"></span>
                          </span>
                          <p class="mt-3 text-sm text-gray-500 dark:text-neutral-500">
                            This is a placeholder loader.<br>This conent is empty.
                          </p>
                        </div>
                        <!-- End Loading Indicator -->
                      </div>
                      <!-- End Tab -->

                      <!-- Tab -->
                      <div id="mega-menu-catalog-tab-14" class="hidden h-full" role="tabpanel" aria-labelledby="mega-menu-catalog-tab-item-14">
                        <!-- Loading Indicator -->
                        <div class="h-full flex flex-col justify-center items-center text-center">
                          <span class="py-1.5 inline-flex gap-x-1">
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite] dark:bg-neutral-200"></span>
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite_0.2s] dark:bg-neutral-200"></span>
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite_0.4s] dark:bg-neutral-200"></span>
                          </span>
                          <p class="mt-3 text-sm text-gray-500 dark:text-neutral-500">
                            This is a placeholder loader.<br>This conent is empty.
                          </p>
                        </div>
                        <!-- End Loading Indicator -->
                      </div>
                      <!-- End Tab -->

                      <!-- Tab -->
                      <div id="mega-menu-catalog-tab-15" class="hidden h-full" role="tabpanel" aria-labelledby="mega-menu-catalog-tab-item-15">
                        <!-- Loading Indicator -->
                        <div class="h-full flex flex-col justify-center items-center text-center">
                          <span class="py-1.5 inline-flex gap-x-1">
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite] dark:bg-neutral-200"></span>
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite_0.2s] dark:bg-neutral-200"></span>
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite_0.4s] dark:bg-neutral-200"></span>
                          </span>
                          <p class="mt-3 text-sm text-gray-500 dark:text-neutral-500">
                            This is a placeholder loader.<br>This conent is empty.
                          </p>
                        </div>
                        <!-- End Loading Indicator -->
                      </div>
                      <!-- End Tab -->

                      <!-- Tab -->
                      <div id="mega-menu-catalog-tab-16" class="hidden h-full" role="tabpanel" aria-labelledby="mega-menu-catalog-tab-item-16">
                        <!-- Loading Indicator -->
                        <div class="h-full flex flex-col justify-center items-center text-center">
                          <span class="py-1.5 inline-flex gap-x-1">
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite] dark:bg-neutral-200"></span>
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite_0.2s] dark:bg-neutral-200"></span>
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite_0.4s] dark:bg-neutral-200"></span>
                          </span>
                          <p class="mt-3 text-sm text-gray-500 dark:text-neutral-500">
                            This is a placeholder loader.<br>This conent is empty.
                          </p>
                        </div>
                        <!-- End Loading Indicator -->
                      </div>
                      <!-- End Tab -->

                      <!-- Tab -->
                      <div id="mega-menu-catalog-tab-17" class="hidden h-full" role="tabpanel" aria-labelledby="mega-menu-catalog-tab-item-17">
                        <!-- Loading Indicator -->
                        <div class="h-full flex flex-col justify-center items-center text-center">
                          <span class="py-1.5 inline-flex gap-x-1">
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite] dark:bg-neutral-200"></span>
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite_0.2s] dark:bg-neutral-200"></span>
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite_0.4s] dark:bg-neutral-200"></span>
                          </span>
                          <p class="mt-3 text-sm text-gray-500 dark:text-neutral-500">
                            This is a placeholder loader.<br>This conent is empty.
                          </p>
                        </div>
                        <!-- End Loading Indicator -->
                      </div>
                      <!-- End Tab -->

                      <!-- Tab -->
                      <div id="mega-menu-catalog-tab-18" class="hidden h-full" role="tabpanel" aria-labelledby="mega-menu-catalog-tab-item-18">
                        <!-- Loading Indicator -->
                        <div class="h-full flex flex-col justify-center items-center text-center">
                          <span class="py-1.5 inline-flex gap-x-1">
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite] dark:bg-neutral-200"></span>
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite_0.2s] dark:bg-neutral-200"></span>
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite_0.4s] dark:bg-neutral-200"></span>
                          </span>
                          <p class="mt-3 text-sm text-gray-500 dark:text-neutral-500">
                            This is a placeholder loader.<br>This conent is empty.
                          </p>
                        </div>
                        <!-- End Loading Indicator -->
                      </div>
                      <!-- End Tab -->

                      <!-- Tab -->
                      <div id="mega-menu-catalog-tab-19" class="hidden h-full" role="tabpanel" aria-labelledby="mega-menu-catalog-tab-item-19">
                        <!-- Loading Indicator -->
                        <div class="h-full flex flex-col justify-center items-center text-center">
                          <span class="py-1.5 inline-flex gap-x-1">
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite] dark:bg-neutral-200"></span>
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite_0.2s] dark:bg-neutral-200"></span>
                            <span class="size-2.5 bg-gray-800 rounded-full animate-[typing_1s_ease-in-out_infinite_0.4s] dark:bg-neutral-200"></span>
                          </span>
                          <p class="mt-3 text-sm text-gray-500 dark:text-neutral-500">
                            This is a placeholder loader.<br>This conent is empty.
                          </p>
                        </div>
                        <!-- End Loading Indicator -->
                      </div>
                      <!-- End Tab -->
                    </div>
                    <!-- End Content -->
                  </div>
                  <!-- End Grid -->
                </div>
                <!-- End Container -->
              </div>
              <!-- End Dropdown Menu -->
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
                <div class="hidden absolute inset-y-0 end-12 flex items-center pointer-events-none z-10 pe-1">
                  <button type="button" class="inline-flex shrink-0 justify-center items-center size-6 rounded-full text-gray-500 hover:text-emerald-600 focus:outline-hidden focus:text-emerald-600 dark:text-neutral-500 dark:hover:text-emerald-500 dark:focus:text-emerald-500" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <circle cx="12" cy="12" r="10" />
                      <path d="m15 9-6 6" />
                      <path d="m9 9 6 6" />
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
          <div class="hidden absolute inset-y-0 end-12 flex items-center pointer-events-none z-10 pe-1">
            <button type="button" class="inline-flex shrink-0 justify-center items-center size-6 rounded-full text-gray-500 hover:text-emerald-600 focus:outline-hidden focus:text-emerald-600 dark:text-neutral-500 dark:hover:text-emerald-500 dark:focus:text-emerald-500" aria-label="Close">
              <span class="sr-only">Close</span>
              <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10" />
                <path d="m15 9-6 6" />
                <path d="m9 9 6 6" />
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
            <div class="hs-carousel-slide">
              <!-- Category Card -->
              <a class="block flex items-center bg-white border border-gray-200 hover:border-gray-300 rounded-xl focus:outline-hidden focus:border-gray-300 dark:bg-neutral-900 dark:border-neutral-700 dark:hover:border-neutral-600 dark:focus:border-neutral-600" href="../../pro/shop-marketplace/listing.html">
                <div class="relative shrink-0 w-20 sm:w-28 h-20">
                  <img class="size-full absolute inset-0 object-cover object-center rounded-s-xl" src="{{ asset('assets/img/category/running.jpg') }}" alt="Product Image">
                </div>
                <div class="grow p-3">
                  <span class="block font-medium text-sm text-gray-800 dark:text-neutral-200">
                    Running
                  </span>
                </div>
              </a>
              <!-- End Category Card -->
            </div>

            <div class="hs-carousel-slide">
              <!-- Category Card -->
              <a class="block flex items-center bg-white border border-gray-200 hover:border-gray-300 rounded-xl focus:outline-hidden focus:border-gray-300 dark:bg-neutral-900 dark:border-neutral-700 dark:hover:border-neutral-600 dark:focus:border-neutral-600" href="../../pro/shop-marketplace/listing.html">
                <div class="relative shrink-0 w-20 sm:w-28 h-20">
                  <img class="size-full absolute inset-0 object-cover object-center rounded-s-xl" src="{{ asset('assets/img/category/soccer.jpg') }}" alt="Product Image">
                </div>
                <div class="grow p-3">
                  <span class="block font-medium text-sm text-gray-800 dark:text-neutral-200">
                    Soccer
                  </span>
                </div>
              </a>
              <!-- End Category Card -->
            </div>

            <div class="hs-carousel-slide">
              <!-- Category Card -->
              <a class="block flex items-center bg-white border border-gray-200 hover:border-gray-300 rounded-xl focus:outline-hidden focus:border-gray-300 dark:bg-neutral-900 dark:border-neutral-700 dark:hover:border-neutral-600 dark:focus:border-neutral-600" href="../../pro/shop-marketplace/listing.html">
                <div class="relative shrink-0 w-20 sm:w-28 h-20">
                  <img class="size-full absolute inset-0 object-cover object-center rounded-s-xl" src="{{ asset('assets/img/category/badminton.jpg') }}" alt="Product Image">
                </div>
                <div class="grow p-3">
                  <span class="block font-medium text-sm text-gray-800 dark:text-neutral-200">
                    Badminton
                  </span>
                </div>
              </a>
              <!-- End Category Card -->
            </div>

            <div class="hs-carousel-slide">
              <!-- Category Card -->
              <a class="block flex items-center bg-white border border-gray-200 hover:border-gray-300 rounded-xl focus:outline-hidden focus:border-gray-300 dark:bg-neutral-900 dark:border-neutral-700 dark:hover:border-neutral-600 dark:focus:border-neutral-600" href="../../pro/shop-marketplace/listing.html">
                <div class="relative shrink-0 w-20 sm:w-28 h-20">
                  <img class="size-full absolute inset-0 object-cover object-center rounded-s-xl" src="{{ asset('assets/img/category/sneakers.jpg') }}" alt="Product Image">
                </div>
                <div class="grow p-3">
                  <span class="block font-medium text-sm text-gray-800 dark:text-neutral-200">
                    Sneakers
                  </span>
                </div>
              </a>
              <!-- End Category Card -->
            </div>

            <div class="hs-carousel-slide">
              <!-- Category Card -->
              <a class="block flex items-center bg-white border border-gray-200 hover:border-gray-300 rounded-xl focus:outline-hidden focus:border-gray-300 dark:bg-neutral-900 dark:border-neutral-700 dark:hover:border-neutral-600 dark:focus:border-neutral-600" href="../../pro/shop-marketplace/listing.html">
                <div class="relative shrink-0 w-20 sm:w-28 h-20">
                  <img class="size-full absolute inset-0 object-cover object-center rounded-s-xl" src="{{ asset('assets/img/category/basketball.jpg') }}" alt="Product Image">
                </div>
                <div class="grow p-3">
                  <span class="block font-medium text-sm text-gray-800 dark:text-neutral-200">
                    Basketball
                  </span>
                </div>
              </a>
              <!-- End Category Card -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Carousel -->
      </div>
    </div>
    <!-- End Featured -->

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

    <!-- Clients -->
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
  <!-- Clipboard -->
  <script src="{{ asset('assets/vendor/clipboard/dist/clipboard.min.js') }}"></script>
  <script src="{{ asset('assets/js/hs-copy-clipboard-helper.js') }}"></script>

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
