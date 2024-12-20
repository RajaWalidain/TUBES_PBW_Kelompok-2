<x-app-layout title="{{ $course->title }}">
    <div class="container mx-auto py-12 mt-16 max-w-4xl">
        <!-- Course Form Section -->
        <div class="bg-white shadow-md rounded-lg p-8">
            <!-- Title -->
            <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">{{ $course->title }}</h1>

            <!-- Image and Form -->
            <div class="flex flex-col md:flex-row items-center md:items-start gap-6">
                <!-- Image -->
                <div class="flex-shrink-0">
                    <img src="{{ asset($course->image) }}" alt="Course Image" class="w-48 h-48 object-cover rounded-lg border border-gray-300">
                </div>

                <!-- Content -->
                <div class="flex-1">
                    <p class="text-gray-700 text-sm mb-4 leading-relaxed">{{ $course->description }}</p>
                    <p class="text-gray-600 text-sm mb-4"><strong>Author:</strong> {{ $course->author }}</p>
                    <p class="text-gray-800 font-bold text-lg mb-6">Harga: Rp{{ number_format($course->price, 0, ',', '.') }}</p>

                    <!-- Buttons -->
                    <div class="flex flex-col md:flex-row gap-4">

                        <!-- Back to Courses Button -->
                        <a href="{{ route('courses.index') }}"
                            class="inline-block bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold py-3 px-6 rounded-lg shadow-lg transform hover:scale-105 transition">
                            <i class="fas fa-arrow-left mr-2"></i>
                            Lihat Kelas Lainnya
                        </a>

                        <!-- Payment Button -->
                        <a href="{{ route('courses.payment', $course->id) }}"
                            class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-4 rounded-lg text-center">
                            <i class="fas fa-shopping-cart mr-2"></i>
                            Beli Sekarang
                        </a>

                        <!-- Delete Button (Admin Only) -->
                        @if(auth()->user()->hasRole('admin'))
                            <form action="{{ route('courses.destroy', $course->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus course ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="inline-block bg-red-500 hover:bg-red-600 text-white font-bold py-3 px-6 rounded-lg shadow-lg transform hover:scale-105 transition">
                                    <i class="fas fa-trash-alt mr-2"></i>
                                    Hapus Course
                                </button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
