<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Portfolio</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
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

            {{-- Contact button --}}
            <a
                href="#contact"
                class="hidden sm:inline-block px-5 py-2.5 bg-pink-300 text-black text-sm font-semibold rounded-full hover:bg-pink-200 hover:scale-105 transition"
            >
                Let's talk
            </a>

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

                <h2 class="text-4xl font-bold">
                    Projects
                </h2>

            </div>
        </section>

    </main>

</body>
</html>