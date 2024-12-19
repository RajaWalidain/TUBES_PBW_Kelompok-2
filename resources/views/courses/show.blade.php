<x-app-layout title="{{ $course->title }}">
    <div class="container mx-auto py-8 mt-16">
        <h1 class="text-3xl font-bold mb-6">{{ $course->title }}</h1>

        <div class="flex flex-col md:flex-row gap-6">
            <div class="flex-shrink-0">
                <img src="{{ asset($course->image) }}" alt="Course Image" class="w-64 h-64 object-cover rounded-xl">
            </div>
            <div>
                <p class="text-gray-700 text-lg mb-4">{{ $course->description }}</p>
                <p class="text-gray-600 mb-2"><strong>Author:</strong> {{ $course->author }}</p>
                <div class="flex justify-center md:justify-start items-center gap-4 mt-6">
                    <a href="{{ route('courses.payment', $course->id) }}"
                        class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-4 rounded-full">
                        Rp{{ number_format($course->price, 0, ',', '.') }} (Akses Kelas Selamanya)
                    </a>
                    <a href="{{ route('courses.index') }}"
                        class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold py-3 px-4 rounded-full">
                        Lihat Kelas Lainnya
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
