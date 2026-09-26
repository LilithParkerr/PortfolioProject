<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Projects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="flex items-center justify-between mb-6">
                        <h1 class="text-2xl font-bold">
                            Projects
                        </h1>

                        <a
                            href="{{ route('admin.projects.create') }}"
                            class="px-4 py-2 bg-purple-700 text-white rounded-lg hover:bg-purple-800 transition"
                        >
                            + New Project
                        </a>
                    </div>

                    @if ($projects->isEmpty())
                        <p class="text-gray-600">
                            No projects yet. Let's create your first one!
                        </p>
                    @else
                <div class="space-y-4">
                @foreach ($projects as $project)
                    <div class="border rounded-lg p-4">

                        @if ($project->images->isNotEmpty())
                            <img
                                src="{{ asset('storage/' . $project->images->first()->image_path) }}"
                                alt="{{ $project->title }}"
                                class="w-full h-48 object-cover rounded-lg mb-4"
                            >
                        @endif

            <a href="{{ route('admin.projects.show', $project) }}"
                class="font-bold text-lg hover:underline">
                    {{ $project->title }}
            </a>

            <a
                href="{{ route('admin.projects.edit', $project) }}"
                class="inline-block mt-2 px-3 py-1 bg-purple-700 text-white rounded-lg hover:bg-purple-800 transition">
                Edit
            </a>

            <p class="text-sm text-gray-500">
                {{ $project->category->name }}
            </p>

            <p class="mt-2 text-gray-700">
                {{ $project->description }}
            </p>

        </div>
    @endforeach
</div>
                    @endif

                </div>
            </div>

        </div>
    </div>
</x-app-layout>