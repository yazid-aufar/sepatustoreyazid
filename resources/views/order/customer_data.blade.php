<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shipping Address | SepatuStore</title>
    <link rel="stylesheet" href="{{ asset('assets/css/main.min.css') }}?v=3.0.1">
</head>
<body class="bg-gray-100 dark:bg-neutral-900">
    <main class="max-w-3xl mx-auto py-10 px-4 sm:px-6">
        <a href="{{ route('front.booking') }}" class="inline-block mb-5 text-sm text-emerald-600 hover:text-emerald-700">
            Back to booking
        </a>

        <form action="{{ route('front.save_customer_data') }}" method="POST" class="bg-white border border-stone-200 rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
            @csrf

            <div class="p-5 space-y-5">
                <h1 class="text-xl font-semibold text-stone-800 dark:text-neutral-200">Customer Details</h1>

                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-stone-800 dark:text-neutral-200">Complete Name</label>
                    <input
                        id="name"
                        type="text"
                        name="name"
                        value="{{ old('name', $data['orderData']['name'] ?? '') }}"
                        autocomplete="name"
                        maxlength="255"
                        required
                        class="py-2 px-3 block w-full border-stone-200 rounded-lg text-sm focus:border-green-600 focus:ring-green-600 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200"
                    >
                    @error('name')
                        <p class="mt-1.5 text-xs text-red-600" role="alert">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-stone-800 dark:text-neutral-200">Email Address</label>
                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email', $data['orderData']['email'] ?? '') }}"
                        autocomplete="email"
                        maxlength="255"
                        required
                        class="py-2 px-3 block w-full border-stone-200 rounded-lg text-sm focus:border-green-600 focus:ring-green-600 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200"
                    >
                    @error('email')
                        <p class="mt-1.5 text-xs text-red-600" role="alert">{{ $message }}</p>
                    @enderror
                </div>

                <h2 class="text-lg font-semibold text-stone-800 dark:text-neutral-200">Shipping Address</h2>

                <div>
                    <label for="address" class="block mb-2 text-sm font-medium text-stone-800 dark:text-neutral-200">Full Address</label>
                    <textarea
                        id="address"
                        name="address"
                        rows="4"
                        autocomplete="street-address"
                        required
                        class="py-2 px-3 block w-full border-stone-200 rounded-lg text-sm focus:border-green-600 focus:ring-green-600 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200"
                    >{{ old('address', $data['orderData']['address'] ?? '') }}</textarea>
                    @error('address')
                        <p class="mt-1.5 text-xs text-red-600" role="alert">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="phone" class="block mb-2 text-sm font-medium text-stone-800 dark:text-neutral-200">Phone Number</label>
                    <input
                        id="phone"
                        type="tel"
                        name="phone"
                        value="{{ old('phone', $data['orderData']['phone'] ?? '') }}"
                        autocomplete="tel"
                        maxlength="255"
                        required
                        class="py-2 px-3 block w-full border-stone-200 rounded-lg text-sm focus:border-green-600 focus:ring-green-600 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200"
                    >
                    @error('phone')
                        <p class="mt-1.5 text-xs text-red-600" role="alert">{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <div>
                        <label for="city" class="block mb-2 text-sm font-medium text-stone-800 dark:text-neutral-200">City</label>
                        <input
                            id="city"
                            type="text"
                            name="city"
                            value="{{ old('city', $data['orderData']['city'] ?? '') }}"
                            autocomplete="address-level2"
                            maxlength="255"
                            required
                            class="py-2 px-3 block w-full border-stone-200 rounded-lg text-sm focus:border-green-600 focus:ring-green-600 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200"
                        >
                        @error('city')
                            <p class="mt-1.5 text-xs text-red-600" role="alert">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="post_code" class="block mb-2 text-sm font-medium text-stone-800 dark:text-neutral-200">Post Code</label>
                        <input
                            id="post_code"
                            type="text"
                            name="post_code"
                            value="{{ old('post_code', $data['orderData']['post_code'] ?? '') }}"
                            autocomplete="postal-code"
                            maxlength="255"
                            required
                            class="py-2 px-3 block w-full border-stone-200 rounded-lg text-sm focus:border-green-600 focus:ring-green-600 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200"
                        >
                        @error('post_code')
                            <p class="mt-1.5 text-xs text-red-600" role="alert">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="py-3 px-4 inline-flex justify-center items-center w-full text-sm font-medium rounded-lg bg-emerald-600 text-white hover:bg-emerald-700">
                    Continue to payment
                </button>
            </div>
        </form>
    </main>
</body>
</html>
