<?php

use Livewire\Component;

new class extends Component
{
    // Booking dan Product Summary dipisahkan ke komponen ini.
};
?>

<div class="grid grid-cols-1 lg:grid-cols-6 gap-5">
  <div class="lg:col-span-4 space-y-5">

    <!-- Products Card -->
    <div class="flex flex-col bg-white border border-stone-200 overflow-hidden rounded-xl shadow-2xs dark:bg-neutral-800 dark:border-neutral-700">
      <!-- Header -->
      <div class="py-3 px-5 flex justify-between items-center gap-x-5 border-b border-stone-200 dark:border-neutral-700">
        <h2 class="inline-block font-semibold text-stone-800 dark:text-neutral-200">
          Booking
        </h2>
      </div>
      <!-- End Header -->

      <!-- Body -->
      <div class="p-5 space-y-4">


        <!-- Input -->
        <div>
          <label for="hs-pro-epdnm" class="block mb-2 text-sm font-medium text-stone-800 dark:text-neutral-200">
            Complete Name
            <span class="hs-tooltip inline-block align-middle">

              <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity hidden invisible z-60 max-w-60 py-1 px-2 bg-stone-900 text-xs font-normal text-white rounded-lg shadow-2xs dark:bg-neutral-700" role="tooltip">
                Give your product a short and clear name.
              </span>
            </span>
          </label>
          <input id="hs-pro-daufvd" type="text" class="py-1.5 sm:py-2 px-3 block w-full border-stone-200 rounded-lg sm:text-sm text-stone-800 placeholder:text-stone-500 focus:z-10 focus:border-green-600 focus:ring-green-600 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200 dark:placeholder:text-neutral-500 dark:focus:outline-hidden dark:focus:ring-1 dark:focus:ring-neutral-600" placeholder="Type your complete name" >
        </div>
        <!-- End Input -->

        <!-- Input -->
        <div>
          <label for="hs-pro-epdnm" class="block mb-2 text-sm font-medium text-stone-800 dark:text-neutral-200">
            Email Address
            <span class="hs-tooltip inline-block align-middle">

              <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity hidden invisible z-60 max-w-60 py-1 px-2 bg-stone-900 text-xs font-normal text-white rounded-lg shadow-2xs dark:bg-neutral-700" role="tooltip">
                Give your product a short and clear name.
              </span>
            </span>
          </label>
          <input id="hs-pro-daufvd" type="text" class="py-1.5 sm:py-2 px-3 block w-full border-stone-200 rounded-lg sm:text-sm text-stone-800 placeholder:text-stone-500 focus:z-10 focus:border-green-600 focus:ring-green-600 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200 dark:placeholder:text-neutral-500 dark:focus:outline-hidden dark:focus:ring-1 dark:focus:ring-neutral-600" placeholder="Type your email address" >
        </div>
        <!-- End Input -->







        <!-- Input Grid -->
        <div class="grid sm:grid-cols-2 gap-3 sm:gap-5">
          <!-- Input -->
          <div>
            <label for="quantity-input" class="block mb-2 text-sm font-medium text-stone-800 dark:text-neutral-200">
              Quantity
            </label>

            <div class="py-1.5 px-3 bg-white border border-stone-200 rounded-lg dark:bg-neutral-800 dark:border-neutral-700" data-quantity-control>
              <div class="w-full flex justify-between items-center gap-x-3">
                <input id="quantity-input" class="w-full min-w-12 p-0 bg-transparent border-0 text-stone-800 focus:ring-0 dark:text-white" type="number" min="1" step="1" value="1">
                <div class="flex justify-end items-center gap-x-1.5">
                  <button type="button" aria-label="Decrease quantity" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full border border-stone-200 bg-white text-stone-800 shadow-2xs hover:bg-stone-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-stone-50 dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-quantity-decrement>
                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M5 12h14" />
                    </svg>
                  </button>
                  <button type="button" aria-label="Increase quantity" class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full border border-stone-200 bg-white text-stone-800 shadow-2xs hover:bg-stone-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-stone-50 dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-quantity-increment>
                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M5 12h14" />
                      <path d="M12 5v14" />
                    </svg>
                  </button>
                </div>
              </div>
            </div>


          </div>
          <!-- End Input -->

          <!-- Input -->
          <div>
          <span class="block mb-2 text-sm font-medium text-stone-800 dark:text-neutral-200">
            Promo code
          </span>

          <!-- Container flex dengan jarak (gap) -->
          <div class="flex items-center gap-x-2">
            <!-- Input dengan border tersendiri -->
            <input
              id="promo-code"
              type="text"
              placeholder="Enter promo code"
              class="w-full py-2 px-3 text-sm rounded-lg border border-gray-300 bg-transparent text-stone-800 focus:border-green-500 focus:ring-1 focus:ring-green-500 dark:bg-neutral-700 dark:border-neutral-600 dark:text-white"
            >

            <!-- Tombol terpisah -->
            <button
              type="button"
              class="shrink-0 py-2 px-3 inline-flex items-center gap-x-1.5 text-xs font-medium rounded-lg border border-transparent bg-green-600 text-white hover:bg-green-700 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:ring-2 focus:ring-green-500"
            >
              Redeem
            </button>
          </div>

          <div class="mt-1.5 flex justify-end">
            <p class="inline-flex gap-x-1 text-xs text-stone-500 dark:text-neutral-500">
              <svg class="shrink-0 size-3 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10" />
                <path d="M12 16v-4" />
                <path d="M12 8h.01" />
              </svg>
              Promo code is not valid
            </p>
          </div>
        </div>
          <!-- End Input -->
          <!-- List -->
          <dl class="mt-4 grid grid-cols-12 gap-2 pe-1">
            <dt class="col-span-8 text-sm text-stone-800 dark:text-neutral-200">Subtotal:</dt>
            <dd class="col-span-4 text-end font-semibold text-sm text-stone-800 dark:text-neutral-200">Rp. 1.939.000</dd>
            <dt class="col-span-8 text-sm text-stone-800 dark:text-neutral-200">Discount:</dt>
            <dd class="col-span-4 text-end font-semibold text-sm text-stone-800 dark:text-neutral-200">Rp. 300.000</dd>
            <dt class="col-span-8 text-sm text-stone-800 dark:text-neutral-200">Order total:</dt>
            <dd class="col-span-4 text-end font-semibold text-sm text-stone-800 dark:text-neutral-200">Rp. 1.639.000</dd>
          </dl>
          <!-- End List -->
        </div>
        <!-- End Input Grid -->


      </div>
      <!-- End Body -->
    </div>
    <!-- End Products Card -->

    {{ $slot }}

  </div>
  <!-- End Col -->

  <div class="lg:col-span-2">
    <div class="lg:sticky lg:top-5">
      <!-- Customer Card -->
      <div class="flex mb-5 flex-col bg-white border border-stone-200 shadow-2xs rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
        <!-- Header -->
        <div class="py-3 px-5 border-b border-stone-200 dark:border-neutral-700">
          <h2 class="inline-block font-semibold text-stone-800 dark:text-neutral-200">
            Product Summary
          </h2>
        </div>
        <!-- End Header -->

        <!-- Cart Items List -->
        <div class="space-y-5">

        <!-- Body -->
        <div class="pt-2 pb-4 px-5 flex flex-col justify-between h-full">

          <!-- List -->
          <div class="pt-5 mt-5 border-t border-stone-200 first:pt-0 first:mt-0 first:border-t-0 dark:border-neutral-700">
            <!-- Item -->
            <div class=" flex gap-x-5">
              <div class="relative">
                <img class="shrink-0 w-20 h-28 object-contain rounded-lg dark:bg-neutral-700" src="{{ asset('assets/img/product/NIKE-F34KBNIK5-NIKIO7448400-Navy 01-.webp') }}" alt="Product Image">
              </div>

              <div class="grow flex flex-col">
                <label for="hs-pro-epdsku" class="block mb-2 text-sm font-medium text-stone-800 dark:text-neutral-200 capitalize">
                  air jordan 1 low - obsidian university gold
                </label>


                <ul class="mt-1.5 space-y-1">
                  <li class="text-xs text-gray-500 dark:text-neutral-500">
                    Brand: Nike
                  </li>
                  <li class="text-xs text-gray-500 dark:text-neutral-500">
                    Category: Sneakers
                  </li>
                  <li class="text-xs text-gray-500 dark:text-neutral-500">
                    Size: EU 42
                  </li>
                </ul>
              </div>
            </div>
            <!-- End Item -->
          </div>
          <!-- End List -->



        </div>
        <!-- End Body -->
        </div>
        <!-- End Cart Items List -->
      </div>
      <!-- End Customer Card -->
    </div>
  </div>
  <!-- End Col -->
</div>

<script>
  $wire.$el.querySelectorAll('[data-quantity-control]').forEach((control) => {
    const input = control.querySelector('input[type="number"]');
    const decrementButton = control.querySelector('[data-quantity-decrement]');
    const incrementButton = control.querySelector('[data-quantity-increment]');

    if (!input || !decrementButton || !incrementButton) return;

    const min = Number.isFinite(Number(input.min)) ? Number(input.min) : 1;
    const max = input.max === '' ? Number.POSITIVE_INFINITY : Number(input.max);
    const normalize = (value) => {
      const quantity = Number.isFinite(value) ? Math.floor(value) : min;
      return Math.min(max, Math.max(min, quantity));
    };

    const updateButtons = () => {
      decrementButton.disabled = Number(input.value) <= min;
      incrementButton.disabled = Number(input.value) >= max;
    };

    const setQuantity = (value) => {
      const normalizedValue = normalize(value);
      const changed = input.value !== String(normalizedValue);
      input.value = String(normalizedValue);
      updateButtons();

      if (changed) {
        input.dispatchEvent(new Event('input', { bubbles: true }));
        input.dispatchEvent(new Event('change', { bubbles: true }));
      }
    };

    decrementButton.addEventListener('click', () => {
      setQuantity(Number(input.value) - 1);
    });
    incrementButton.addEventListener('click', () => {
      setQuantity(Number(input.value) + 1);
    });
    input.addEventListener('change', () => setQuantity(Number(input.value)));

    setQuantity(Number(input.value));
  });
</script>
