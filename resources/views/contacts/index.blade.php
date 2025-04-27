@extends('layouts.app')

@section('content')
<div class="container py-10 mx-auto mt-8">
    <h1 class="text-3xl font-semibold text-center mb-8 text-white">Kontaktujte nás</h1>

    <!-- Zobrazení úspěšné zprávy -->
    @if(session('success'))
        <div class="bg-green-500 text-white p-4 rounded-lg mb-6">
            {{ session('success') }}
        </div>
    @endif

    <!-- Kontaktní formulář -->
    <form action="{{ route('contact.send') }}" method="POST" class="max-w-md mx-auto bg-white shadow-md rounded-lg p-6">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Jméno</label>
            <input type="text" id="name" name="name" class="border border-gray-300 rounded-md w-full p-2" required>
            @error('name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">E-mail</label>
            <input type="email" id="email" name="email" class="border border-gray-300 rounded-md w-full p-2" required>
            @error('email')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="message" class="block text-sm font-medium text-gray-700">Zpráva</label>
            <textarea id="message" name="message" rows="4" class="border border-gray-300 rounded-md w-full p-2" required></textarea>
            @error('message')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="bg-blue-500 text-white rounded-md px-4 py-2 hover:bg-blue-600 transition duration-200 w-full">
            Odeslat
        </button>
    </form>
</div>
@endsection
