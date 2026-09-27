<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Portfolio</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css"
    />
</head>

<body class="bg-black text-white">

<header class="px-6 py-5">
    <nav class="max-w-6xl mx-auto">

        <div class="bg-purple-950/80 border border-purple-900/60 rounded-2xl px-6 py-4 flex items-center justify-between backdrop-blur-md">

            {{-- Logo --}}
            <a
                href="/"
                class="text-xl font-bold tracking-wide hover:text-pink-300 transition"
            >
                YourName<span class="text-pink-300">.</span>
            </a>

            {{-- Navigation --}}
            <div class="hidden md:flex items-center gap-8 text-sm text-gray-300">

                <a
                    href="#about"
                    class="hover:text-pink-300 transition"
                >
                    About
                </a>

                <a
                    href="#projects"
                    class="hover:text-pink-300 transition"
                >
                    Projects
                </a>

                <a
                    href="#skills"
                    class="hover:text-pink-300 transition"
                >
                    Skills
                </a>

                <a
                    href="#contact"
                    class="hover:text-pink-300 transition"
                >
                    Contact
                </a>

            </div>

            {{-- Header buttons --}}
            <div class="hidden sm:flex items-center gap-3">

                @auth
                    @if (auth()->user()->role === 'admin')
                        <a
                            href="{{ route('admin.projects.index') }}"
                            class="px-5 py-2.5 border border-purple-700 text-white text-sm font-semibold rounded-full hover:bg-purple-900 hover:scale-105 transition"
                        >
                            Admin
                        </a>
                    @endif
                @endauth

                <a
                    href="#contact"
                    class="px-5 py-2.5 bg-pink-300 text-black text-sm font-semibold rounded-full hover:bg-pink-200 hover:scale-105 transition"
                >
                    Let's talk
                </a>

</div>

        </div>

    </nav>
</header>

    <main>

        <section id="about" class="px-6 pt-20 pb-28">
    <div class="max-w-6xl mx-auto">

        <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">

            {{-- Text --}}
            <div>

                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-purple-950 border border-purple-800 text-pink-300 text-sm mb-6">
                    <span class="w-2 h-2 rounded-full bg-pink-300"></span>
                    Available for new projects
                </div>

                <p class="text-pink-300 text-lg mb-3">
                    Hello, I'm
                </p>

                <h2 class="text-5xl md:text-6xl xl:text-7xl font-bold leading-tight">
                    Your Name
                </h2>

                <p class="mt-6 text-xl text-gray-300 leading-relaxed max-w-xl">
                    I create modern websites and web applications
                    with a focus on clean design, smooth experiences
                    and solid development.
                </p>

                <div class="flex flex-wrap gap-4 mt-8">

                    <a
                        href="#projects"
                        class="px-6 py-3 bg-pink-300 text-black font-semibold rounded-full hover:bg-pink-200 hover:scale-105 transition"
                    >
                        View my work
                    </a>

                    <a
                        href="#contact"
                        class="px-6 py-3 border border-purple-700 text-white font-semibold rounded-full hover:bg-purple-900 hover:scale-105 transition"
                    >
                        Contact me
                    </a>

                </div>

            </div>

            {{-- Image --}}
            <div class="relative">

                <div class="absolute -inset-4 bg-purple-900/30 rounded-[2rem] blur-2xl"></div>

                <div class="relative aspect-[4/5] max-w-md mx-auto overflow-hidden rounded-[2rem] border border-purple-800 bg-purple-950">

                    <div class="h-full flex items-center justify-center text-gray-500">
                        Your photo here
                    </div>

                </div>

            </div>

        </div>

    </div>
</section>

        <section id="projects" class="px-6 py-24">
            <div class="max-w-6xl mx-auto">

            <p class="text-pink-300 mb-2">
                My work
            </p>

            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 mb-10">

                <div>
                    <h2 class="text-4xl md:text-5xl font-bold">
                        Projects
                    </h2>

                    <p class="text-gray-400 mt-3 max-w-xl">
                        A selection of things I've built, designed and experimented with.
                    </p>
                </div>

                {{-- Category filters --}}
                <div class="flex flex-wrap gap-2">

                    <button
                        type="button"
                        class="project-filter active px-4 py-2 rounded-full bg-pink-300 text-black text-sm font-semibold transition hover:scale-105"
                        data-category="all"
                    >
                        All
                    </button>

                    <button
                        type="button"
                        class="project-filter px-4 py-2 rounded-full border border-purple-800 text-gray-300 text-sm font-semibold transition hover:bg-purple-900 hover:text-white"
                        data-category="laravel"
                    >
                        Laravel
                    </button>

                    <button
                        type="button"
                        class="project-filter px-4 py-2 rounded-full border border-purple-800 text-gray-300 text-sm font-semibold transition hover:bg-purple-900 hover:text-white"
                        data-category="styling"
                    >
                        Styling
                    </button>

                    <button
                        type="button"
                        class="project-filter px-4 py-2 rounded-full border border-purple-800 text-gray-300 text-sm font-semibold transition hover:bg-purple-900 hover:text-white"
                        data-category="personal"
                    >
                        Personal
                    </button>

                </div>

            </div>

            @if ($projects->isNotEmpty())
                <div class="flex justify-end gap-3 mb-5">

                <button
                    type="button"
                    id="projects-prev"
                    class="w-11 h-11 rounded-full border border-purple-800 text-white hover:bg-pink-300 hover:text-black hover:border-pink-300 transition"
                    aria-label="Previous projects"
                >
                    ←
                </button>

                <button
                    type="button"
                    id="projects-next"
                    class="w-11 h-11 rounded-full border border-purple-800 text-white hover:bg-pink-300 hover:text-black hover:border-pink-300 transition"
                    aria-label="Next projects"
                    >
                        →
                </button>

                </div>
                <div
                    id="projects-carousel"
                    class="flex gap-6 overflow-x-auto pb-6 snap-x snap-mandatory scroll-smooth"
                >

                    @foreach ($projects as $project)

                    <a
                        href="{{ route('projects.show', $project->slug) }}"
                        class="project-card group w-[360px] flex-shrink-0 snap-start"
                        data-category="{{ $project->category->slug }}"
                    >

                    <div class="h-[560px] overflow-hidden rounded-3xl border border-purple-900/60 bg-purple-950/40 transition duration-300 group-hover:border-pink-300/60 group-hover:-translate-y-1 flex flex-col">

                        {{-- Project image --}}
                        <div class="h-[260px] flex-shrink-0 overflow-hidden bg-purple-950">

                            @if ($project->images->isNotEmpty())

                                <img
                                    src="{{ asset('storage/' . $project->images->first()->image_path) }}"
                                    alt="{{ $project->title }}"
                                    class="w-full h-full object-cover transition duration-500 group-hover:scale-105"
                                >

                            @else

                                <div class="w-full h-full flex items-center justify-center text-gray-500">
                                    No image
                                </div>

                            @endif

                        </div>

                        {{-- Project information --}}
                        <div class="p-6 flex flex-col flex-1">

                            <p class="text-sm text-pink-300 mb-2">
                                {{ $project->category->name }}
                            </p>

                            <h3 class="text-2xl font-semibold line-clamp-2">
                                {{ $project->title }}
                            </h3>

                            <p class="text-gray-400 mt-3 line-clamp-4">
                                {{ $project->description }}
                            </p>

                            <div class="mt-auto text-sm font-semibold text-pink-300">
                            View project →
                            </div>

                        </div>

                    </div>

                </a>

                    @endforeach

            </div>

            @else

                <div class="rounded-3xl border border-purple-900/60 bg-purple-950/30 p-8 text-gray-400">
                    No projects have been added yet.
                </div>

            @endif

            </div>
        </section>


        <section id="skills" class="px-6 py-24">

    <div class="max-w-6xl mx-auto">

        <p class="text-pink-300 mb-2">
            What I work with
        </p>

        <h2 class="text-4xl md:text-5xl font-bold">
            Skills
        </h2>

        <p class="text-gray-400 mt-3 max-w-xl">
            Technologies and tools I use to build modern websites and applications.
        </p>

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 mt-12">

            <div class="skill-card">
                <i class="devicon-php-plain text-5xl"></i>
                <p>PHP</p>
            </div>

            <div class="skill-card">
                <i class="devicon-laravel-original text-5xl"></i>
                <p>Laravel</p>
            </div>

            <div class="skill-card">
                <i class="devicon-html5-plain text-5xl"></i>
                <p>HTML</p>
            </div>

            <div class="skill-card">
                <i class="devicon-css3-plain text-5xl"></i>
                <p>CSS</p>
            </div>

            <div class="skill-card">
                <i class="devicon-javascript-plain text-5xl"></i>
                <p>JavaScript</p>
            </div>

            <div class="skill-card">
                <i class="devicon-tailwindcss-plain text-5xl"></i>
                <p>Tailwind CSS</p>
            </div>

            <div class="skill-card">
                <i class="devicon-mysql-plain text-5xl"></i>
                <p>MySQL</p>
            </div>

            <div class="skill-card">
                <i class="devicon-git-plain text-5xl"></i>
                <p>Git</p>
            </div>

        </div>

    </div>

</section>


<section id="contact" class="px-6 py-24">

                <div class="max-w-6xl mx-auto">

                    <div class="rounded-[2rem] border border-purple-900/60 bg-purple-950/40 p-8 md:p-12">

                        <div class="max-w-2xl">

                            <p class="text-pink-300 mb-2">
                                Get in touch
                            </p>

                            <h2 class="text-4xl md:text-5xl font-bold">
                                Let's build something together.
                            </h2>

                            <p class="text-gray-400 mt-4 leading-relaxed">
                                Have a project in mind, a question, or just want to say hello?
                                Send me a message and I'll get back to you.
                            </p>

                        </div>
                        


                        @if (session('success'))
                            <div class="mb-6 rounded-2xl border border-green-500/30 bg-green-500/10 px-5 py-4 text-green-300">
                            {{ session('success') }}
                            </div>
                            @endif

                        <form
                            method="POST"
                            action="{{ route('contact.send') }}"
                            class="mt-10 max-w-2xl space-y-6"
                        >
                            @csrf

                            {{-- Name --}}
                            <div>
                                <label
                                    for="name"
                                    class="block text-sm font-medium text-gray-300 mb-2"
                                >
                                    Name
                                </label>

                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    placeholder="Your name"
                                    class="w-full rounded-2xl border border-purple-800 bg-black/40 px-5 py-4 text-white placeholder-gray-500 focus:border-pink-300 focus:ring-pink-300"
                                >
                                @error('name')
                                <p class="text-red-400 text-sm mt-2">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>

                            {{-- Email --}}
                            <div>
                                <label
                                    for="email"
                                    class="block text-sm font-medium text-gray-300 mb-2"
                                >
                                    Email
                                </label>

                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    placeholder="you@example.com"
                                    class="w-full rounded-2xl border border-purple-800 bg-black/40 px-5 py-4 text-white placeholder-gray-500 focus:border-pink-300 focus:ring-pink-300"
                                >
                                @error('email')
                                <p class="text-red-400 text-sm mt-2">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>

                            {{-- Message --}}
                            <div>
                                <label
                                    for="message"
                                    class="block text-sm font-medium text-gray-300 mb-2"
                                >
                                    Message
                                </label>

                                <textarea
                                    id="message"
                                    name="message"
                                    rows="6"
                                    placeholder="Tell me about your project..."
                                    class="w-full rounded-2xl border border-purple-800 bg-black/40 px-5 py-4 text-white placeholder-gray-500 focus:border-pink-300 focus:ring-pink-300 resize-none"
                                ></textarea>
                                @error('message')
                                <p class="text-red-400 text-sm mt-2">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>

                            {{-- Submit --}}
                            <button
                                type="submit"
                                class="px-6 py-3 bg-pink-300 text-black font-semibold rounded-full hover:bg-pink-200 hover:scale-105 transition"
                            >
                                Send message →
                            </button>

                        </form>

                    </div>

                </div>

            </section>




        <footer class="px-6 pb-8">

            <div class="max-w-6xl mx-auto">

                <div class="border-t border-purple-900/60 pt-8 flex flex-col md:flex-row items-center justify-between gap-4">

                    <p class="text-sm text-gray-500">
                        © {{ date('Y') }} Your Name. All rights reserved.
                    </p>

                    <div class="flex items-center gap-6 text-sm text-gray-400">

                        <a href="#about" class="hover:text-pink-300 transition">
                            About
                        </a>

                        <a href="#projects" class="hover:text-pink-300 transition">
                            Projects
                        </a>

                        <a href="#skills" class="hover:text-pink-300 transition">
                            Skills
                        </a>

                        <a href="#contact" class="hover:text-pink-300 transition">
                            Contact
                        </a>

                    </div>

                </div>

            </div>

        </footer>

    </main>

</body>
</html>