@extends('layouts.app')

@section('content')
    <div class="hero bg-cover bg-center h-screen relative" style="background-image: url('/path/to/your/image.jpg');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="flex items-center justify-center h-full">
            <h1 class="text-white text-5xl font-bold">Vítejte na naší stránce!</h1>
        </div>
    </div>

    <div class="py-10 text-center">
        <h2 class="text-2xl font-semibold">Proč nakupovat u nás?</h2>
        <p class="mt-4">Nabízíme nejlepší produkty za nejlepší ceny!</p>
    </div>

    <div class="py-10">
        <h2 class="text-2xl font-semibold text-center">Kontaktní formulář</h2>
        <form class="max-w-md mx-auto mt-4" action="#" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block">Jméno</label>
                <input type="text" id="name" name="name" class="border rounded-md w-full p-2" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block">E-mail</label>
                <input type="email" id="email" name="email" class="border rounded-md w-full p-2" required>
            </div>
            <div class="mb-4">
                <label for="message" class="block">Zpráva</label>
                <textarea id="message" name="message" class="border rounded-md w-full p-2" required></textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white rounded-md px-4 py-2">Odeslat</button>
        </form>
    </div>
@endsection
