<x-app-layout title="{{ $page_meta['title'] }}">
    <x-slot name="heading">{{ $page_meta['title'] }}</x-slot>
    <div class="container mx-auto p-8">
        <div class="max-w-lg mx-auto bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-xl font-bold text-gray-800 text-center mb-6">{{ $page_meta['title'] }}</h2>
            <form action="{{ $page_meta['url'] }}" method="post" novalidate class="space-y-6">
                @method($page_meta['method'])
                @csrf

                <!-- Name Input -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input
                        class="block w-full border px-4 py-2 rounded-lg border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none mt-1"
                        type="text"
                        name="name"
                        id="name"
                        value="{{ old('name', $user->name) }}"
                        placeholder="Enter username">
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Email Input -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input
                        class="block w-full border px-4 py-2 rounded-lg border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none mt-1"
                        type="email"
                        name="email"
                        id="email"
                        value="{{ old('email', $user->email) }}"
                        placeholder="Enter email address">
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Password Input -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input
                        class="block w-full border px-4 py-2 rounded-lg border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none mt-1"
                        type="password"
                        name="password"
                        id="password"
                        placeholder="New password">
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <!-- Submit Button -->
                <div class="flex justify-between items-center">
                    <!-- Back Button -->
                    <a href="/users" class="text-blue-500 hover:underline flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                        Back
                    </a>

                    <!-- Save Button -->
                    <x-button class="bg-blue-500 text-white hover:bg-blue-600">
                        {{ $page_meta['submit_text'] }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
