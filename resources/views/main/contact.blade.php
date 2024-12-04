@extends('layouts.main')

@section('content')
@vite('resources/css/app.css')

<div class="flex flex-col items-center justify-center min-h-screen">
    <!-- Heading -->
    <h1 class="font-bold text-7xl text-center mt-8 mb-12 text-color1">
        CONTACT <span class="ml-2 text-color2">US</span>
    </h1>

    <!-- Form -->
    <form action="" method="POST" class="w-full max-w-3xl p-8 rounded-lg shadow-lg">
        @csrf
        <!-- Input Fields -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
            <div>
                <label for="name" class="block text-white font-medium mb-2">Name</label>
                <input type="text" id="name" name="name" required
                    class="w-full p-3 border border-gray-600 bg-gray-800 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-color1">
            </div>
            <div>
                <label for="email" class="block text-white font-medium mb-2">Email</label>
                <input type="email" id="email" name="email" required
                    class="w-full p-3 border border-gray-600 bg-gray-800 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-color1">
            </div>
            <div>
                <label for="phone" class="block text-white font-medium mb-2">Phone</label>
                <input type="tel" id="phone" name="phone" required
                    class="w-full p-3 border border-gray-600 bg-gray-800 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-color1">
            </div>
        </div>
        <!-- Textarea -->
        <div class="mt-6">
            <label for="message" class="block text-white font-medium mb-2">Message</label>
            <textarea id="message" name="message" rows="5" required
                class="w-full p-3 border border-gray-600 bg-gray-800 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-color1"></textarea>
        </div>
        <!-- Submit Button -->
        <div class="text-center mt-8">
            <button type="submit"
                class="bg-color1 hover:bg-red-600 text-white font-bold py-3 px-8 rounded-xl shadow-md transition duration-300">
                Send Form
            </button>
        </div>
    </form>
</div>
@endsection
