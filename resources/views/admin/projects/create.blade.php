
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Project') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6">

                    <h1 class="text-2xl font-bold mb-6">
                        Create a New Project
                    </h1>

                    <form
                        method="POST"
                        action="{{ route('admin.projects.store') }}"
                        enctype="multipart/form-data"
                    >
                        @csrf

                        {{-- Title --}}
                        <div class="mb-4">
                            <label class="block font-medium mb-1">
                                Title
                            </label>

                            <input
                                type="text"
                                name="title"
                                value="{{ old('title') }}"
                                class="w-full rounded-lg border-gray-300"
                                required
                            >

                            @error('title')
                                <p class="text-red-600 text-sm mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- Slug --}}
                        <div class="mb-4">
                            <label class="block font-medium mb-1">
                                Slug
                            </label>

                            <input
                                type="text"
                                name="slug"
                                value="{{ old('slug') }}"
                                class="w-full rounded-lg border-gray-300"
                                placeholder="my-awesome-project"
                                required
                            >

                            @error('slug')
                                <p class="text-red-600 text-sm mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- Category --}}
                        <div class="mb-4">
                            <label class="block font-medium mb-1">
                                Category
                            </label>

                            <select
                                name="category_id"
                                class="w-full rounded-lg border-gray-300"
                                required
                            >
                                <option value="">Choose a category</option>

                                @foreach ($categories as $category)
                                    <option
                                        value="{{ $category->id }}"
                                        @selected(old('category_id') == $category->id)
                                    >
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>

                            @error('category_id')
                                <p class="text-red-600 text-sm mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- Project Images --}}
                        <div class="mb-6">
                            <label class="block font-medium mb-1">
                                Project Images
                            </label>

                            <input
                                type="file"
                                name="images[]"
                                multiple
                                accept="image/*"
                                class="w-full rounded-lg border-gray-300"
                            >

                            <p class="text-sm text-gray-500 mt-1">
                                You can select multiple images.
                            </p>

                            @error('images')
                                <p class="text-red-600 text-sm mt-1">
                                    {{ $message }}
                                </p>
                            @enderror

                            @error('images.*')
                                <p class="text-red-600 text-sm mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- Description --}}
                        <div class="mb-6">
                            <label class="block font-medium mb-1">
                                Description
                            </label>

                            <textarea
                                name="description"
                                rows="6"
                                class="w-full rounded-lg border-gray-300"
                                required
                            >{{ old('description') }}</textarea>

                            @error('description')
                                <p class="text-red-600 text-sm mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- Buttons --}}
                        <div class="flex gap-3">

                            <a
                                href="{{ route('admin.projects.index') }}"
                                class="px-4 py-2 bg-gray-200 rounded-lg hover:bg-gray-300 transition"
                            >
                                Cancel
                            </a>

                            <button
                                type="submit"
                                class="px-4 py-2 bg-purple-700 text-white rounded-lg hover:bg-purple-800 transition"
                            >
                                Create Project
                            </button>

                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</x-app-layout>
