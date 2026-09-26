<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Project') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6">

                    <h1 class="text-2xl font-bold mb-6">
                        Edit Project
                    </h1>

                    <form
                        method="POST"
                        action="{{ route('admin.projects.update', $project) }}"
                        enctype="multipart/form-data"
                    >
                        @csrf
                        @method('PUT')

                        {{-- Title --}}
                        <div class="mb-4">
                            <label class="block font-medium mb-1">
                                Title
                            </label>

                            <input
                                type="text"
                                name="title"
                                value="{{ old('title', $project->title) }}"
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
                                value="{{ old('slug', $project->slug) }}"
                                class="w-full rounded-lg border-gray-300"
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
                                @foreach ($categories as $category)
                                    <option
                                        value="{{ $category->id }}"
                                        @selected($project->category_id == $category->id)
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
                            >{{ old('description', $project->description) }}</textarea>

                            @error('description')
                                <p class="text-red-600 text-sm mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
            

                {{-- Add Images --}}
        <div class="mb-6">
            <label class="block font-medium mb-1">
                Add Images
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
                                Save Changes
                            </button>

                        </div>

                    </form>
            {{-- Existing Images --}}
            <div class="mb-6">
                <label class="block font-medium mb-2">
                    Current Images
                </label>

                @if ($project->images->isNotEmpty())
                    <div class="grid grid-cols-2 gap-4">
                        @foreach ($project->images as $image)
                            <div>
                                <img
                                    src="{{ asset('storage/' . $image->image_path) }}"
                                    alt="{{ $project->title }}"
                                    class="w-full h-40 object-cover rounded-lg"
                                >

                                <form
                                    method="POST"
                                    action="{{ route('admin.project-images.destroy', $image) }}"
                                    class="mt-2"
                                >
                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="px-3 py-1 bg-red-600 text-white rounded-lg hover:bg-red-700 transition"
                                    >
                                        Delete Image
                                    </button>
                                </form>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-sm text-gray-500">
                     This project has no images yet.
                    </p>
                @endif
            </div>
        </div>
    </div>


        </div>
    </div>

</x-app-layout>