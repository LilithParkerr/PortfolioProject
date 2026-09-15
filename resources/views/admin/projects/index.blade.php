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
                                    <h2 class="font-bold text-lg">
                                        {{ $project->title }}
                                    </h2>

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