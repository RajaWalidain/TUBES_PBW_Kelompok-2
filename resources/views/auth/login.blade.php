<x-app-layout title="Login">
    <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="px-5">
            <h2 class="font-bold text-xl mb-5">Selamat Datang Kembali!</h2>
            <label for="email"></label>
            <input class="block border px-4 py-2 rounded-lg border block mt-1 mb-5" type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Email">
            @error('email')
            <p class="text-red-500 text-sm mt-1">
                {{$message}}
            </p>
            @enderror
            <label for="password"></label>
            <input class="block border px-4 py-2 rounded-lg border block mt-1" type="password" name="password" id="password" placeholder="password">
            @error('password')
            <p class="text-red-500 text-sm mt-1">
                {{$message}}
            </p>
            @enderror

            <x-button class="bg-blue-500 hover:bg-blue-600 mt-5">
            Login
            </x-button>
        </div>
    </form>
</x-app-layout>
