<?php

use App\Models\Shoe;
use App\Services\OrderService;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Locked;
use Livewire\Component;

new class extends Component
{
    #[Locked]
    public Shoe $shoe;

    #[Locked]
    public array $orderData = [];

    public string $name = '';

    public string $email = '';

    // Input kosong ditangani oleh validasi, bukan pemaksaan tipe integer.
    public $quantity = 1;

    public string $promoCode = '';

    #[Locked]
    public ?string $promoStatus = null;

    public function mount(Shoe $shoe, array $orderData): void
    {
        $this->shoe = $shoe->loadMissing(['brand', 'category']);
        $this->orderData = $orderData;
        $this->name = (string) ($orderData['name'] ?? '');
        $this->email = (string) ($orderData['email'] ?? '');
        $this->quantity = (int) ($orderData['quantity'] ?? 1);
        $this->promoCode = (string) ($orderData['promo_code'] ?? '');
    }

    protected function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'quantity' => [
                'required',
                'integer',
                'min:1',
                'max:' . (int) $this->shoe->stock,
            ],
            'promoCode' => ['nullable', 'string', 'max:255'],
        ];
    }

    protected function messages(): array
    {
        return [
            'name.required' => 'Nama lengkap wajib diisi.',
            'name.string' => 'Nama lengkap harus berupa teks.',
            'name.max' => 'Nama lengkap maksimal 255 karakter.',
            'email.required' => 'Alamat email wajib diisi.',
            'email.email' => 'Format alamat email tidak valid.',
            'email.max' => 'Alamat email maksimal 255 karakter.',
            'quantity.required' => 'Jumlah pesanan wajib diisi.',
            'quantity.integer' => 'Jumlah pesanan harus berupa bilangan bulat.',
            'quantity.min' => 'Jumlah pesanan minimal 1.',
            'quantity.max' => 'Jumlah pesanan tidak boleh melebihi stok yang tersedia.',
            'promoCode.string' => 'Kode promo harus berupa teks.',
            'promoCode.max' => 'Kode promo maksimal 255 karakter.',
        ];
    }

    public function updatedQuantity(): void
    {
        $this->validateOnly('quantity');
        $this->syncOrderSummary();
    }

    public function decrementQuantity(): void
    {
        $this->validateOnly('quantity');

        if ((int) $this->quantity <= 1) {
            return;
        }

        $this->quantity = (int) $this->quantity - 1;
        $this->syncOrderSummary();
    }

    public function incrementQuantity(): void
    {
        $this->validateOnly('quantity');

        if ((int) $this->quantity >= (int) $this->shoe->stock) {
            return;
        }

        $this->quantity = (int) $this->quantity + 1;
        $this->syncOrderSummary();
    }

    protected function syncOrderSummary(): void
    {
        $data = app(OrderService::class)->saveBookingTransaction([
            'quantity' => (int) $this->quantity,
        ]);

        $this->orderData = $data['orderData'];
        $this->quantity = (int) $this->orderData['quantity'];
    }

    public function updatedPromoCode(): void
    {
        $this->promoStatus = null;
        $this->resetValidation('promoCode');
    }

    public function redeemPromo(OrderService $orderService): void
    {
        $this->promoCode = trim($this->promoCode);
        $this->promoStatus = null;
        $this->resetValidation('promoCode');

        if ($this->promoCode === '') {
            $this->addError(
                'promoCode',
                'Masukkan kode promo terlebih dahulu.'
            );

            return;
        }

        $this->validateOnly('promoCode');
        $this->validateOnly('quantity');

        // Hitung berdasarkan quantity terbaru.
        $this->syncOrderSummary();

        // Service mencari kode promo di database.
        $result = $orderService->applyPromoCode($this->promoCode);

        if (isset($result['error'])) {
            $this->promoStatus = 'not_found';

            $this->addError(
                'promoCode',
                $result['error']
            );

            return;
        }

        // Ambil hasil perhitungan dan data promo yang sudah disimpan.
        $data = $orderService->getOrderDetails();

        $this->orderData = $data['orderData'];
        $this->quantity = (int) $this->orderData['quantity'];
        $this->promoCode = (string) $this->orderData['promo_code'];

        $this->promoStatus = 'found';
    }

    public function submit(OrderService $orderService)
    {
        $this->name = trim($this->name);
        $this->email = trim($this->email);
        $this->shoe->refresh();

        $validated = $this->validate();

        $data = $orderService->saveBookingTransaction([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'quantity' => (int) $validated['quantity'],
        ]);

        $this->orderData = $data['orderData'];
        $this->quantity = (int) $this->orderData['quantity'];

        // Simpan di halaman ini sampai view langkah berikutnya tersedia.
        if (view()->exists('order.customer_data')) {
            return redirect()->route('front.customer_data');
        }
    }

    public function previous()
    {
        return redirect()->route('front.details', $this->shoe->slug);
    }

    #[Computed]
    public function thumbnailUrl(): ?string
    {
        if (blank($this->shoe->thumbnail)) {
            return null;
        }

        $disk = Storage::disk();

        return $disk->providesTemporaryUrls()
            ? $disk->temporaryUrl($this->shoe->thumbnail, now()->addHour())
            : $disk->url($this->shoe->thumbnail);
    }
};
?>

<div class="grid grid-cols-1 lg:grid-cols-6 gap-5">
  <div class="lg:col-span-4 space-y-5">

    <!-- Products Card -->
    <div class="flex flex-col mb-5  bg-white border border-stone-200 overflow-hidden rounded-xl shadow-2xs dark:bg-neutral-800 dark:border-neutral-700">
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
          <label for="order-name" class="block mb-2 text-sm font-medium text-stone-800 dark:text-neutral-200">
            Complete Name
            <span class="hs-tooltip inline-block align-middle">

              <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity hidden invisible z-60 max-w-60 py-1 px-2 bg-stone-900 text-xs font-normal text-white rounded-lg shadow-2xs dark:bg-neutral-700" role="tooltip">
                Give your product a short and clear name.
              </span>
            </span>
          </label>
          <input id="order-name" type="text" wire:model="name" wire:keydown.enter.prevent="submit" autocomplete="name" class="py-1.5 sm:py-2 px-3 block w-full border-stone-200 rounded-lg sm:text-sm text-stone-800 placeholder:text-stone-500 focus:z-10 focus:border-green-600 focus:ring-green-600 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200 dark:placeholder:text-neutral-500 dark:focus:outline-hidden dark:focus:ring-1 dark:focus:ring-neutral-600" placeholder="Type your complete name" >
          @error('name')
            <p class="mt-1.5 text-xs text-red-600 dark:text-red-400" role="alert">{{ $message }}</p>
          @enderror
        </div>
        <!-- End Input -->

        <!-- Input -->
        <div>
          <label for="order-email" class="block mb-2 text-sm font-medium text-stone-800 dark:text-neutral-200">
            Email Address
            <span class="hs-tooltip inline-block align-middle">

              <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity hidden invisible z-60 max-w-60 py-1 px-2 bg-stone-900 text-xs font-normal text-white rounded-lg shadow-2xs dark:bg-neutral-700" role="tooltip">
                Give your product a short and clear name.
              </span>
            </span>
          </label>
          <input id="order-email" type="email" wire:model="email" wire:keydown.enter.prevent="submit" autocomplete="email" class="py-1.5 sm:py-2 px-3 block w-full border-stone-200 rounded-lg sm:text-sm text-stone-800 placeholder:text-stone-500 focus:z-10 focus:border-green-600 focus:ring-green-600 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200 dark:placeholder:text-neutral-500 dark:focus:outline-hidden dark:focus:ring-1 dark:focus:ring-neutral-600" placeholder="Type your email address" >
          @error('email')
            <p class="mt-1.5 text-xs text-red-600 dark:text-red-400" role="alert">{{ $message }}</p>
          @enderror
        </div>
        <!-- End Input -->







        <!-- Input Grid -->
        <div class="grid sm:grid-cols-2 gap-3 sm:gap-5">
          <!-- Input -->
          <div>
            <label for="quantity-input" class="block mb-2 text-sm font-medium text-stone-800 dark:text-neutral-200">
              Quantity
            </label>

            <div class="py-1.5 px-3 bg-white border border-stone-200 rounded-lg dark:bg-neutral-800 dark:border-neutral-700">
              <div class="w-full flex justify-between items-center gap-x-3">
                <input id="quantity-input" class="w-full min-w-12 p-0 bg-transparent border-0 text-stone-800 focus:ring-0 dark:text-white" type="number" min="1" max="{{ $shoe->stock }}" step="1" wire:model.live.debounce.500ms="quantity" wire:keydown.enter.prevent="submit">
                <div class="flex justify-end items-center gap-x-1.5">
                  <button type="button" aria-label="Decrease quantity" wire:click="decrementQuantity" wire:loading.attr="disabled" @disabled((int) $quantity <= 1) class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full border border-stone-200 bg-white text-stone-800 shadow-2xs hover:bg-stone-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-stone-50 dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M5 12h14" />
                    </svg>
                  </button>
                  <button type="button" aria-label="Increase quantity" wire:click="incrementQuantity" wire:loading.attr="disabled" @disabled((int) $quantity >= (int) $shoe->stock) class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full border border-stone-200 bg-white text-stone-800 shadow-2xs hover:bg-stone-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-stone-50 dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M5 12h14" />
                      <path d="M12 5v14" />
                    </svg>
                  </button>
                </div>
              </div>
            </div>
            @error('quantity')
              <p class="mt-1.5 text-xs text-red-600 dark:text-red-400" role="alert">{{ $message }}</p>
            @enderror

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
              wire:model.live.debounce.500ms="promoCode"
              wire:keydown.enter.prevent="redeemPromo"
              placeholder="Enter promo code"
              class="w-full py-2 px-3 text-sm rounded-lg border border-gray-300 bg-transparent text-stone-800 focus:border-green-500 focus:ring-1 focus:ring-green-500 dark:bg-neutral-700 dark:border-neutral-600 dark:text-white"
            >

            <!-- Tombol terpisah -->
            <button
              type="button"
              wire:click="redeemPromo"
              wire:loading.attr="disabled"
              class="shrink-0 py-2 px-3 inline-flex items-center gap-x-1.5 text-xs font-medium rounded-lg border border-transparent bg-green-600 text-white hover:bg-green-700 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:ring-2 focus:ring-green-500"
            >
              Redeem
            </button>
          </div>

          @php
            $promoError = $errors->first('promoCode');
            $promoMessage = $promoError ?: match ($promoStatus) {
                'found' => 'Kode promo ditemukan.',
                'not_found' => 'Kode promo tidak ditemukan.',
                'pending' => 'Pengecekan kode promo belum diaktifkan.',
                default => 'Promo code is not valid',
            };
          @endphp
          <div class="mt-1.5 flex justify-end" aria-live="polite">
            <p class="inline-flex gap-x-1 text-xs text-stone-500 dark:text-neutral-500"
              @style([
                'visibility: hidden' => $promoError === '' && $promoStatus === null,
                'color: #dc2626' => $promoError !== '' || $promoStatus === 'not_found',
                'color: #16a34a' => $promoError === '' && $promoStatus === 'found',
              ])
            >
              <svg class="shrink-0 size-3 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10" />
                <path d="M12 16v-4" />
                <path d="M12 8h.01" />
              </svg>
              {{ $promoMessage }}
            </p>
          </div>
        </div>
          <!-- End Input -->
          <!-- List -->
          <dl class="mt-4 grid grid-cols-12 gap-2 pe-1">
            <dt class="col-span-8 text-sm text-stone-800 dark:text-neutral-200">Subtotal:</dt>
            <dd class="col-span-4 text-end font-semibold text-sm text-stone-800 dark:text-neutral-200">Rp. {{ number_format((int) ($orderData['sub_total_amount'] ?? 0), 0, ',', '.') }}</dd>
            <dt class="col-span-8 text-sm text-stone-800 dark:text-neutral-200">Discount:</dt>
            <dd class="col-span-4 text-end font-semibold text-sm text-green-700 dark:text-neutral-200">- Rp. {{ number_format((int) ($orderData['discount_amount'] ?? 0), 0, ',', '.') }}</dd>
            <dt class="col-span-8 text-sm text-stone-800 dark:text-neutral-200">Order total:</dt>
            <dd class="col-span-4 text-end font-semibold text-sm text-stone-800 dark:text-neutral-200">Rp. {{ number_format((int) ($orderData['grand_total_amount'] ?? 0), 0, ',', '.') }}</dd>
          </dl>
          <!-- End List -->
        </div>
        <!-- End Input Grid -->


      </div>
      <!-- End Body -->
      <!-- Footer -->
        <div class="py-2 px-5 border-t border-stone-200 dark:border-neutral-700">
            <div class="flex justify-between items-center gap-x-2">
            <!-- Button -->
            <button type="button" wire:click="previous" class="py-2 px-2.5 inline-flex items-center gap-x-1.5 text-xs rounded-lg border border-transparent bg-white text-stone-800 hover:bg-stone-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-stone-100 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m15 18-6-6 6-6" />
                </svg>
                Prev
            </button>
            <!-- End Button -->

            <div class="flex justify-end">
                <a type="button" href="{{ route('front.customer_data') }}" wire:click.prevent="submit" class="py-1.5 px-3 inline-flex items-center gap-x-1.5 text-sm font-medium rounded-md border border-transparent bg-green-600 text-white hover:bg-green-700 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:ring-2 focus:ring-green-500">
                Continue
                </a>
            </div>
            </div>
        </div>
        <!-- End Footer -->
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
                @if ($this->thumbnailUrl)
                  <img class="shrink-0 w-20 h-28 object-contain rounded-lg dark:bg-neutral-700" src="{{ $this->thumbnailUrl }}" alt="{{ $shoe->name }}">
                @else
                  <div class="shrink-0 w-20 h-28 flex items-center justify-center rounded-lg bg-gray-100 text-xs text-gray-500 dark:bg-neutral-700 dark:text-neutral-400">
                    No image
                  </div>
                @endif
              </div>

              <div class="grow flex flex-col">
                <p class="block mb-2 text-sm font-medium text-stone-800 dark:text-neutral-200 capitalize">
                  {{ $shoe->name }}
                </p>


                <ul class="mt-1.5 space-y-1">
                  <li class="text-xs text-gray-500 dark:text-neutral-500">
                    Brand: {{ $shoe->brand?->name ?? '-' }}
                  </li>
                  <li class="text-xs text-gray-500 dark:text-neutral-500">
                    Category: {{ $shoe->category?->name ?? '-' }}
                  </li>
                  <li class="text-xs text-gray-500 dark:text-neutral-500">
                    Size: {{ $orderData['shoe_size'] ?? '-' }}
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
