<x-app-layout title="Course">
    <x-slot name='heading'>Course</x-slot>

    <div class="container mx-auto p-8 mt-16">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">Courses</h1>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 sm:grid-cols-2 gap-6">
            @foreach($courses as $course)
                <div class="block bg-white shadow-md rounded-lg overflow-hidden transform transition hover:-translate-y-1 hover:shadow-lg hover:border-blue-500 border-2 border-transparent">
                    <a href="{{ route('courses.show', $course->id) }}" class="block">
                        <img src="{{ $course->image }}" alt="Course Image" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h2 class="text-xl font-semibold text-gray-800">{{ $course->title }}</h2>
                            <p class="text-gray-600 text-sm mt-2">{{ $course->description }}</p>
                            <div class="flex items-center justify-between mt-4">
                                <div class="flex items-center">
                                    <p class="ml-2 text-gray-700 text-sm">{{ $course->author }}</p>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <span class="text-blue-500 font-bold text-lg">Rp{{ number_format($course->price, 0, ',', '.') }}</span>
                                    @auth
                                        @if($course->user_id === auth()->user()->id)
                                            <a href="{{ route('courses.edit', $course) }}"
                                                class="text-sm bg-red-500 text-white px-2 py-1 rounded-md hover:bg-red-600 transition ml-4">
                                                Edit
                                            </a>
                                        @endif
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
