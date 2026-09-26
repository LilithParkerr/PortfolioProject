<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $project->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6">

                    <h1 class="text-3xl font-bold">
                        {{ $project->title }}
                    </h1>

                    <p class="text-sm text-gray-500 mt-2">
                        {{ $project->category->name }}
                    </p>

                    <p class="mt-6 text-gray-700">
                        {{ $project->description }}
                    </p>
                    @if ($project->images->isNotEmpty())
                        <div class="mt-6 space-y-4">
                    @foreach ($project->images as $image)
                    <img
                        src="{{ asset('storage/' . $image->image_path) }}"
                        alt="{{ $project->title }}"
                        class="w-full rounded-lg"
                    >
                    @endforeach
                </div>
                @endif

                    <div class="mt-6">
                        <a href="{{ route('admin.projects.index') }}"
                            class="inline-block px-4 py-2 bg-gray-200 rounded-lg hover:bg-gray-300 transition">
                            ← Back to Projects
                        </a>
                    </div>

            </div>
        </div>

    </div>
</div>

</x-app-layout>