@extends('layouts.app')

@section('title', 'Resume')

@section('content')
<div class="py-20 px-4">
    <div class="max-w-5xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Resume</h1>
            <p class="text-xl text-gray-400">My professional journey and skills</p>
            <div class="mt-6">
                <button class="btn-primary" onclick="window.print()">
                    Download PDF
                </button>
            </div>
        </div>

        <!-- Summary -->
        <section class="mb-16">
            <div class="bg-gray-900 rounded-lg p-8 border border-gray-800">
                <h2 class="text-2xl font-bold mb-4">Professional Summary</h2>
                <p class="text-gray-400 leading-relaxed">
                    Passionate Full Stack Developer with extensive experience in building scalable web applications.
                    Specialized in modern web technologies including Laravel, React, Vue.js, and cloud infrastructure.
                    Strong advocate for clean code, testing, and continuous learning.
                </p>
            </div>
        </section>

        <!-- Skills -->
        <section class="mb-16">
            <h2 class="text-2xl font-bold mb-8">Technical Skills</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Frontend -->
                <div class="bg-gray-900 rounded-lg p-6 border border-gray-800">
                    <h3 class="text-xl font-semibold mb-4 text-blue-400">Frontend Development</h3>
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between mb-2">
                                <span>HTML/CSS/JavaScript</span>
                                <span class="text-gray-400">Expert</span>
                            </div>
                            <div class="h-2 bg-gray-800 rounded-full overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-blue-500 to-purple-500" style="width: 95%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-2">
                                <span>React/Vue.js</span>
                                <span class="text-gray-400">Advanced</span>
                            </div>
                            <div class="h-2 bg-gray-800 rounded-full overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-blue-500 to-purple-500" style="width: 85%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-2">
                                <span>TailwindCSS</span>
                                <span class="text-gray-400">Expert</span>
                            </div>
                            <div class="h-2 bg-gray-800 rounded-full overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-blue-500 to-purple-500" style="width: 90%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Backend -->
                <div class="bg-gray-900 rounded-lg p-6 border border-gray-800">
                    <h3 class="text-xl font-semibold mb-4 text-green-400">Backend Development</h3>
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between mb-2">
                                <span>PHP/Laravel</span>
                                <span class="text-gray-400">Expert</span>
                            </div>
                            <div class="h-2 bg-gray-800 rounded-full overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-green-500 to-teal-500" style="width: 95%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-2">
                                <span>Node.js</span>
                                <span class="text-gray-400">Advanced</span>
                            </div>
                            <div class="h-2 bg-gray-800 rounded-full overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-green-500 to-teal-500" style="width: 80%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between mb-2">
                                <span>MySQL/PostgreSQL</span>
                                <span class="text-gray-400">Advanced</span>
                            </div>
                            <div class="h-2 bg-gray-800 rounded-full overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-green-500 to-teal-500" style="width: 85%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- DevOps -->
                <div class="bg-gray-900 rounded-lg p-6 border border-gray-800">
                    <h3 class="text-xl font-semibold mb-4 text-purple-400">DevOps & Tools</h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-2 bg-gray-800 rounded-lg text-sm">Docker</span>
                        <span class="px-3 py-2 bg-gray-800 rounded-lg text-sm">Git</span>
                        <span class="px-3 py-2 bg-gray-800 rounded-lg text-sm">CI/CD</span>
                        <span class="px-3 py-2 bg-gray-800 rounded-lg text-sm">AWS</span>
                        <span class="px-3 py-2 bg-gray-800 rounded-lg text-sm">Linux</span>
                        <span class="px-3 py-2 bg-gray-800 rounded-lg text-sm">Nginx</span>
                    </div>
                </div>

                <!-- Other -->
                <div class="bg-gray-900 rounded-lg p-6 border border-gray-800">
                    <h3 class="text-xl font-semibold mb-4 text-orange-400">Other Skills</h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-2 bg-gray-800 rounded-lg text-sm">RESTful APIs</span>
                        <span class="px-3 py-2 bg-gray-800 rounded-lg text-sm">GraphQL</span>
                        <span class="px-3 py-2 bg-gray-800 rounded-lg text-sm">WebSockets</span>
                        <span class="px-3 py-2 bg-gray-800 rounded-lg text-sm">Testing</span>
                        <span class="px-3 py-2 bg-gray-800 rounded-lg text-sm">Agile</span>
                        <span class="px-3 py-2 bg-gray-800 rounded-lg text-sm">UI/UX</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Experience -->
        <section class="mb-16">
            <h2 class="text-2xl font-bold mb-8">Work Experience</h2>

            <div class="space-y-8">
                <!-- Experience Item -->
                <div class="bg-gray-900 rounded-lg p-6 border border-gray-800 border-l-4 border-l-blue-500">
                    <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-4">
                        <div>
                            <h3 class="text-xl font-semibold">Senior Full Stack Developer</h3>
                            <p class="text-blue-400">Tech Company Inc.</p>
                        </div>
                        <span class="text-gray-400 mt-2 md:mt-0">2022 - Present</span>
                    </div>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-start">
                            <span class="text-blue-400 mr-2">•</span>
                            Led development of multiple enterprise-level web applications
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-400 mr-2">•</span>
                            Implemented CI/CD pipelines reducing deployment time by 60%
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-400 mr-2">•</span>
                            Mentored junior developers and conducted code reviews
                        </li>
                    </ul>
                </div>

                <div class="bg-gray-900 rounded-lg p-6 border border-gray-800 border-l-4 border-l-purple-500">
                    <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-4">
                        <div>
                            <h3 class="text-xl font-semibold">Full Stack Developer</h3>
                            <p class="text-purple-400">Startup XYZ</p>
                        </div>
                        <span class="text-gray-400 mt-2 md:mt-0">2020 - 2022</span>
                    </div>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-start">
                            <span class="text-purple-400 mr-2">•</span>
                            Built and maintained scalable web applications using Laravel and Vue.js
                        </li>
                        <li class="flex items-start">
                            <span class="text-purple-400 mr-2">•</span>
                            Optimized database queries improving response times by 40%
                        </li>
                        <li class="flex items-start">
                            <span class="text-purple-400 mr-2">•</span>
                            Collaborated with design team to implement pixel-perfect UIs
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Education -->
        <section class="mb-16">
            <h2 class="text-2xl font-bold mb-8">Education</h2>

            <div class="bg-gray-900 rounded-lg p-6 border border-gray-800">
                <div class="flex flex-col md:flex-row md:justify-between md:items-start">
                    <div>
                        <h3 class="text-xl font-semibold">Bachelor of Science in Computer Science</h3>
                        <p class="text-blue-400">University Name</p>
                    </div>
                    <span class="text-gray-400 mt-2 md:mt-0">2016 - 2020</span>
                </div>
            </div>
        </section>

        <!-- Certifications -->
        <section>
            <h2 class="text-2xl font-bold mb-8">Certifications</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-gray-900 rounded-lg p-6 border border-gray-800">
                    <h3 class="font-semibold mb-2">AWS Certified Developer</h3>
                    <p class="text-gray-400 text-sm">Amazon Web Services - 2023</p>
                </div>
                <div class="bg-gray-900 rounded-lg p-6 border border-gray-800">
                    <h3 class="font-semibold mb-2">Laravel Certified</h3>
                    <p class="text-gray-400 text-sm">Laravel - 2022</p>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection