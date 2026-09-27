<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $project->title }} — Portfolio</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black text-white">

    <div class="min-h-screen">

        <main class="px-6 py-16">

            <div class="max-w-6xl mx-auto">

                <a
                    href="{{ url('/') }}"
                    class="inline-flex items-center text-sm text-gray-400 hover:text-pink-300 transition mb-8"
                >
                    ← Back to portfolio
                </a>

                <div class="mb-10">

                    <p class="text-pink-300 text-sm font-semibold mb-3">
                        {{ $project->category->name }}
                    </p>

                    <h1 class="text-4xl md:text-6xl font-bold">
                        {{ $project->title }}
                    </h1>

                    <p class="mt-6 text-lg text-gray-400 max-w-3xl leading-relaxed">
                        {{ $project->description }}
                    </p>

                </div>

                @if ($project->images->isNotEmpty())

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        @foreach ($project->images as $image)

                            <div class="overflow-hidden rounded-3xl border border-purple-900/60 bg-purple-950/40">

                                <img
                                    src="{{ asset('storage/' . $image->image_path) }}"
                                    alt="{{ $project->title }}"
                                    class="w-full h-auto object-cover"
                                >

                            </div>

                        @endforeach

                    </div>

                @else

                    <div class="rounded-3xl border border-purple-900/60 bg-purple-950/40 p-12 text-center text-gray-500">
                        No images have been added to this project yet.
                    </div>

                @endif

                <div class="mt-10">

                    <a
                        href="{{ url('/') }}"
                        class="inline-block px-6 py-3 bg-pink-300 text-black font-semibold rounded-full hover:bg-pink-200 hover:scale-105 transition"
                    >
                        ← Back to portfolio
                    </a>

                </div>

            </div>

        </main>

    </div>

</body>

</html>