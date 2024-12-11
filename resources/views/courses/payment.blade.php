<x-app-layout title="{{ $course->title }} - Payment">
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-6">Payment for "{{ $course->title }}"</h1>

        <div class="flex flex-col md:flex-row gap-6">
            <div class="flex-shrink-0">
                <img src="{{ asset($course->image) }}" alt="Course Image" class="w-64 h-64 object-cover rounded-xl">
            </div>
            <div>
                <p class="text-gray-700 text-lg mb-4">{{ $course->description }}</p>
                <p class="text-gray-600 mb-2"><strong>Author:</strong> {{ $course->author }}</p>
                <p class="text-blue-500 text-xl font-bold">Price: Rp{{ number_format($course->price, 0, ',', '.') }}</p>
                <hr class="my-4">
                <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                    Pay Now
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
