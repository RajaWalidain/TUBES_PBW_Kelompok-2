<x-app-layout title="User Details">
    <x-slot name="heading">{{ $user->name }}</x-slot>
    <div class="container mx-auto p-8">
        <div class="max-w-lg mx-auto bg-white shadow-lg rounded-lg p-6">
            <div class="text-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800">{{ $user->name }}</h2>
                <p class="text-gray-500">{{ $user->email }}</p>
                <p class="text-sm text-gray-400">Registered {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex justify-between items-center mt-6">
                <a href="/users" class="text-blue-500 hover:underline flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    Back
                </a>

                <form action="/users/{{ $user->id }}" method="post" onsubmit="return confirm('Are you sure you want to delete this user?');">
                    @method('DELETE')
                    @csrf
                    <x-button type="submit" class="bg-red-500 text-white hover:bg-red-600">
                        Delete User
                    </x-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
