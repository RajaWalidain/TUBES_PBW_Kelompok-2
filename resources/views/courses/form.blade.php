<x-app-layout>
    @slot('title', 'Edit a course')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $page_meta['title'] }}
        </h2>
    </x-slot>

        <x-container>
            <div class="py-10 text-gray-900">
                <x-card class="max-w">
                    <x-card.header>
                        <x-card.title>
                            {{ $page_meta['title'] }}
                        </x-card.title>
                        <x-card.description>
                            {{ $page_meta['description'] }}
                        </x-card.description>
                    </x-card.header>
                    <x-card.content>
                        <form action="{{ $page_meta['url'] }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                            @method($page_meta['method'])
                            @csrf
                            <div>
                                <x-input-label for="image" class="sr-only" :value="__('Image')" />
                                <input id="image" name="image" type="file" />
                                <x-input-error :messages="$errors->get('image')" required />
                            </div>
                            <div>
                                <x-input-label for="title" :value="__('Title')" />
                                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title', $course->title)" required />
                                <x-input-error :messages="$errors->get('title')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="description" :value="__('Description')" />
                                <x-textarea id="description" class="block mt-1 w-full" type="text" name="description" required> {{ old('description', $course->description) }}</x-textarea>
                                <x-input-error :messages="$errors->get('description')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="author" :value="__('Author')" />
                                <x-textarea id="author" class="block mt-1 w-full" type="text" name="author" required> {{ old('author', $course->author) }}</x-textarea>
                                <x-input-error :messages="$errors->get('author')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="price" :value="__('Price')" />
                                <x-textarea id="price" class="block mt-1 w-full" type="number" name="price" required> {{ old('price', $course->price) }}</x-textarea>
                                <x-input-error :messages="$errors->get('price')" class="mt-2" />
                            </div>
                            <x-primary-button>
                                Save
                            </x-primary-button>
                        </form>
                    </x-card.content>
                </x-card>
            </div>
        </x-container>
</x-app-layout>
