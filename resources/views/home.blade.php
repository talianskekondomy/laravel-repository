@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="relative h-screen flex items-center justify-center">
    <img src="{{ asset('photos/preview.webp') }}" alt="Vítejte" class="absolute inset-0 object-cover w-full h-full z-0">
    <div class="absolute inset-0 bg-gradient-to-b from-black/40 to-transparent z-10"></div>
    <div class="relative z-20 text-center px-6">
        <h1 class="text-white text-3xl md:text-5xl font-semibold font-Ranade leading-tight">
        Objevte kouzlo našich ručně vyráběných vonných svíček</h1>
    </div>
</div>

<!-- Why Choose Us Section -->
<section class="py-16 bg-amber-50">
    <div class="text-center mb-12">
        <h2 class="text-5xl font-semibold text-amber-800">Proč nakupovat u nás?</h2>
        <p class="mt-4 text-lg text-amber-700">Nejvyšší kvalita, ruční výroba a láska v každé svíčce!</p>
    </div>
    <div class="flex flex-col md:flex-row justify-center items-center gap-8 px-6">
        <div class="bg-white shadow-2xl rounded-2xl p-6 flex flex-col items-center text-center max-w-xs">
            <x-heroicon-o-truck class="w-16 h-16 text-orange-400 mb-4" />
            <h3 class="text-xl font-bold text-amber-800">Rychlá Doprava</h3>
            <p class="mt-2 text-amber-700">Objednávky expedujeme do 24 hodin.</p>
        </div>
        <div class="bg-white shadow-2xl rounded-2xl p-6 flex flex-col items-center text-center max-w-xs">
            <x-iconsax-bro-sidebar-right class="w-16 h-16 text-yellow-400 mb-4" />
            <h3 class="text-xl font-bold text-amber-800">Kvalitní Produkty</h3>
            <p class="mt-2 text-amber-700">Přírodní vosky a autentické vůně z celého světa.</p>
        </div>
        <div class="bg-white shadow-2xl rounded-2xl p-6 flex flex-col items-center text-center max-w-xs">
            <x-gmdi-support-agent-o class="w-16 h-16 text-red-400 mb-4" />
            <h3 class="text-xl font-bold text-amber-800">Zákaznická Podpora</h3>
            <p class="mt-2 text-amber-700">Jsme tu pro vás každý den, připraveni poradit.</p>
        </div>
    </div>
</section>

<!-- Livewire Gallery -->
<div class="py-10 bg-white">
    @livewire('gallery')
</div>

<!-- Products Horizontal Scroll Section -->
<section class="py-16 bg-amber-100">
<div class="max-w-7xl mx-auto shadow-2xl rounded-2xl p-8 bg-white">
    <h2 class="text-4xl font-semibold text-center text-amber-800 mb-10">Naše Produkty</h2>
    <div class="overflow-x-auto">
        <div class="flex space-x-6">
            @foreach($products as $product)
            <div class="flex-shrink-0 w-64 bg-white rounded-2xl shadow-lg overflow-hidden transform transition-transform duration-300 hover:scale-105 hover:shadow-2xl">
            <img src="{{ isset($product->images[0]) ? asset('storage/' . $product->images[0]) : asset('photos/default-product.jpg') }}" alt="{{ $product->name }}" class="object-cover w-full h-48">
                <div class="p-4 flex flex-col justify-between h-full">
                    <h3 class="text-xl font-bold text-amber-800">{{ $product->name }}</h3>
                    <p class="mt-2 text-amber-700">{{ $product->description }}</p>
                    <p class="mt-4 font-bold text-orange-500">{{ number_format($product->price, 2) }} Kč</p>
                    <button class="mt-4 bg-orange-400 text-white rounded-lg px-4 py-2 hover:bg-orange-500 transition-all">Koupit</button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
</section>

<!-- Contact Form Section -->
<section class="py-16 bg-amber-50">
    <div class="max-w-xl mx-auto shadow-2xl rounded-2xl bg-white p-8">
        <h2 class="text-5xl font-semibold text-center text-amber-800 mb-8">Kontaktujte nás</h2>
        <form action="#" method="POST">
            @csrf
            <div class="mb-6">
                <label for="name" class="block text-sm font-medium text-amber-800 mb-2">Jméno</label>
                <input type="text" id="name" name="name" class="w-full border border-gray-300 rounded-lg p-3" required>
            </div>
            <div class="mb-6">
                <label for="email" class="block text-sm font-medium text-amber-800 mb-2">E-mail</label>
                <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded-lg p-3" required>
            </div>
            <div class="mb-6">
                <label for="message" class="block text-sm font-medium text-amber-800 mb-2">Zpráva</label>
                <textarea id="message" name="message" rows="5" class="w-full border border-gray-300 rounded-lg p-3" required></textarea>
            </div>
            <button type="submit" class="w-full bg-blue-5s00 text-white rounded-lg py-3 hover:bg-orange-500 transition-all">Odeslat</button>
        </form>
    </div>
</section>
@endsection

@push('scripts')
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@latest/swiper-bundle.min.js"></script>
<script>
const swiper = new Swiper('.mySwiper', {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        640: { slidesPerView: 2 },
        768: { slidesPerView: 3 },
    },
    loop: true,
});
</script>
@endpush
