<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seraphim Ruben Udjung - Web Developer Portfolio</title>
    
    <link rel="icon" type="image/png" href="{{ asset('images/icon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/icon.png') }}">

    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-900 text-white">

    <header class="bg-gray-900/80 backdrop-blur-sm fixed top-0 left-0 right-0 z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-xl sm:text-2xl font-bold text-indigo-400">Seraphim Ruben Udjung</a>
            
            <nav class="hidden md:flex space-x-8">
                <a href="#about" class="hover:text-indigo-400 transition">About</a>
                <a href="#skills" class="hover:text-indigo-400 transition">Skills</a>
                <a href="#projects" class="hover:text-indigo-400 transition">Projects</a>
                <a href="#contact" class="hover:text-indigo-400 transition">Contact</a>
            </nav>

            <button id="menu-btn" class="md:hidden block text-white focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 8h7" />
                </svg>
            </button>
        </div>

        <div id="mobile-menu" class="hidden md:hidden">
            <a href="#about" class="block py-2 px-6 text-sm hover:bg-gray-800 transition">About</a>
            <a href="#skills" class="block py-2 px-6 text-sm hover:bg-gray-800 transition">Skills</a>
            <a href="#projects" class="block py-2 px-6 text-sm hover:bg-gray-800 transition">Projects</a>
            <a href="#contact" class="block py-2 px-6 text-sm hover:bg-gray-800 transition">Contact</a>
        </div>
    </header>

    <main class="container mx-auto px-6 pt-24">
        
        <section class="min-h-[70vh] flex items-center">
            <div class="flex flex-col md:flex-row items-center w-full text-center md:text-left">
                <img src="{{ asset('images/profile.JPG') }}" alt="A picture of Ruben" class="rounded-full w-36 h-36 sm:w-48 sm:h-48 object-cover mb-8 md:mb-0 md:mr-12 border-4 border-gray-700 shadow-lg flex-shrink-0">
                
                <div>
                    <h1 class="text-4xl sm:text-5xl md:text-7xl font-bold leading-tight">
                        Hi, I'm <span class="text-indigo-400">Ruben</span>
                    </h1>
                    <p class="text-xl sm:text-2xl md:text-3xl mt-4 text-gray-300">Entrepreneurial Software Developer & Computer Science Student</p>
                    <p class="mt-6 max-w-2xl text-gray-400 mx-auto md:mx-0">
                        I combine my passion for entrepreneurship and technology to build innovative web solutions that solve real-world problems.
                    </p>
                    <a href="#projects" class="inline-block bg-indigo-500 hover:bg-indigo-600 text-white font-semibold px-8 py-3 rounded-lg mt-8 transition">
                        View My Work
                    </a>
                </div>
            </div>
        </section>

        <section id="about" class="py-20">
            <h2 class="text-3xl sm:text-4xl font-bold text-center mb-12">About Me</h2>
            <div class="max-w-3xl mx-auto text-left text-gray-300 leading-relaxed">
               <ul class="space-y-4">
                    <li class="flex items-start">
                        <span class="text-indigo-400 mr-3 mt-1">&#10148;</span>
                        <span>
                            <strong>Computer Science Student (5th Semester) at BINUS University</strong> with a core passion for the intersection of business strategy and software development.
                        </span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-indigo-400 mr-3 mt-1">&#10148;</span>
                        <span>
                            Driven to transform <strong>innovative ideas into tangible, high-impact digital products</strong> that provide genuine value and solve real-world problems.
                        </span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-indigo-400 mr-3 mt-1">&#10148;</span>
                        <span>
                            Experienced in academic research, including <strong>Natural Language Processing</strong> and financial forecasting with models like <strong>NeuralProphet</strong>.
                        </span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-indigo-400 mr-3 mt-1">&#10148;</span>
                        <span>
                            Actively apply an <strong>entrepreneurial mindset</strong> in student organizations like <strong>BPreneur</strong> and <strong>TFISC</strong>, tackling challenges that demand both technical and business acumen.
                        </span>
                    </li>
                </ul>
            </div>
        </section>
        
        <section id="skills" class="py-20">
            <h2 class="text-3xl sm:text-4xl font-bold text-center mb-12">My Tech Stack</h2>
            <div class="flex flex-wrap justify-center gap-4">
                <span class="bg-gray-700 text-indigo-300 font-medium px-4 py-2 rounded-full">Python</span>
                <span class="bg-gray-700 text-indigo-300 font-medium px-4 py-2 rounded-full">Next.js</span>
                <span class="bg-gray-700 text-indigo-300 font-medium px-4 py-2 rounded-full">JavaScript</span>
                <span class="bg-gray-700 text-indigo-300 font-medium px-4 py-2 rounded-full">React.js</span>
                <span class="bg-gray-700 text-indigo-300 font-medium px-4 py-2 rounded-full">MySQL</span>
                <span class="bg-gray-700 text-indigo-300 font-medium px-4 py-2 rounded-full">PHP</span>
                <span class="bg-gray-700 text-indigo-300 font-medium px-4 py-2 rounded-full">Laravel</span>
                <span class="bg-gray-700 text-indigo-300 font-medium px-4 py-2 rounded-full">Tailwind CSS</span>
                <span class="bg-gray-700 text-indigo-300 font-medium px-4 py-2 rounded-full">Git & GitHub</span>
                <span class="bg-gray-700 text-indigo-300 font-medium px-4 py-2 rounded-full">API Development</span>
            </div>
        </section>

        <section id="projects" class="py-20">
            <h2 class="text-3xl sm:text-4xl font-bold text-center mb-12">Projects</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <div class="bg-gray-800 rounded-lg overflow-hidden transform hover:-translate-y-2 transition duration-300 shadow-lg">
                    <img src="{{asset('images/project 1.png')}}"> 
                    <div class="p-6 text-center">
                        <h3 class="text-xl sm:text-2xl font-bold mb-2">CulinAIre: Intelligent Recipe Classification & Labeling System</h3>
                        <p class="text-gray-400 mb-4">
                            This project is a machine learning–powered pipeline that automatically classifies and labels recipes based on ingredients and cooking instructions.
                        </p>
                        <a href="https://github.com/daemon-10k/CulinAIre" target="_blank" class="text-indigo-400 hover:underline">View Project &rarr;</a>
                    </div>
                </div>

                <div class="bg-gray-800 rounded-lg overflow-hidden transform hover:-translate-y-2 transition duration-300 shadow-lg">
                    <img src="{{asset('images/project 2.png')}}">
                    <div class="p-6 text-center">
                        <h3 class="text-xl sm:text-2xl font-bold mb-2">Axiom</h3>
                        <p class="text-gray-400 mb-4">
                            A predictive engine that leverages NeuralProphet, a PyTorch-based time-series forecasting model, to predict the future performance of stocks listed on the Indonesia Stock Exchange (IDX). 
                        </p>
                        <a href="https://github.com/daemon-10k/Axiom" target="_blank" class="text-indigo-400 hover:underline">View Project &rarr;</a>
                    </div>
                </div>

                <div class="bg-gray-800 rounded-lg overflow-hidden transform hover:-translate-y-2 transition duration-300 shadow-lg">
                    <img src="{{asset('images/project 3.png')}}">
                    <div class="p-6 text-center">
                        <h3 class="text-xl sm:text-2xl font-bold mb-2">MemorEase</h3>
                        <p class="text-gray-400 mb-4">
                            MemorEase is a desktop-based flashcard learning application built for multiple users, designed to run offline with a local database.
                        </p>
                        <a href="https://github.com/daemon-10k/SRS_Flashcard" target="_blank" class="text-indigo-400 hover:underline">View Project &rarr;</a>
                    </div>
                </div>

            </div>
        </section>

        <section id="contact" class="py-20 text-center">
            <h2 class="text-3xl sm:text-4xl font-bold mb-4">Get In Touch</h2>
            <p class="text-gray-400 max-w-xl mx-auto mb-8">
                I'm currently open to new opportunities. Feel free to reach out to me via email or connect with me on social media.
            </p>
            <a href="mailto:ibreaktheinternet@gmail.com" class="bg-indigo-500 hover:bg-indigo-600 text-white font-semibold px-8 py-3 rounded-lg transition">
                Say Hello
            </a>
        </section>

    </main>

    <footer class="border-t border-gray-800 mt-12">
        <div class="container mx-auto px-6 py-6 flex flex-col md:flex-row justify-between items-center text-gray-500 text-center">
            <p class="text-sm">&copy; 2025 Seraphim Ruben Udjung. All Rights Reserved.</p>
            <div class="flex space-x-6 mt-4 md:mt-0">
                <a href="https://github.com/daemon-10k" target="_blank" class="hover:text-white transition text-sm">GitHub</a>
                <a href="https://www.linkedin.com/in/seraphim-ruben-udjung-483b8a246/" target="_blank" class="hover:text-white transition text-sm">LinkedIn</a>
            </div>
        </div>
    </footer>

    <script>
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuLinks = mobileMenu.querySelectorAll('a');

        // Toggle mobile menu visibility
        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Close mobile menu when a link is clicked
        menuLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });
    </script>
</body>
</html>