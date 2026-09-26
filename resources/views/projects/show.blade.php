<x-app-layout>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm sm:rounded-lg overflow-hidden">

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
                        <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6">
                            @foreach ($project->images as $image)
                                <img
                                    src="{{ asset('storage/' . $image->image_path) }}"
                                    alt="{{ $project->title }}"
                                    class="w-full rounded-xl object-cover"
                                >
                            @endforeach
                        </div>
                    @endif

                    <div class="mt-8">
                        <a
                            href="{{ url('/') }}"
                            class="inline-block px-4 py-2 bg-purple-700 text-white rounded-lg hover:bg-purple-800 transition"
                        >
                            ← Back to Portfolio
                        </a>
                    </div>

                </div>

            </div>

        </div>
    </div>

</x-app-layout>