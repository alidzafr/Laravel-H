<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body>
    <!-- Container -->
    <div class="flex bg-gray-300 min-h-screen">
         <!-- Left Menu -->
        <div class="hidden flex-col w-80 bg-gray-100 shadow-lg min-h-screen md:flex">
            <!-- Logo -->
            <div class="py-4 px-6">
                <h1 class="text-2xl font-bold text-gray-700">CV Finder</h1>
                <h1 class="text-sm font-light">Recruitment Tools</h1>
            </div>
            <!-- Navigation Menu -->
            <div class="my-8 px-4 space-y-2">
                <div class="p-4 text-white font-bold w-full rounded-lg bg-linear-to-r/srgb from-indigo-500 to-teal-400">
                    <a href="index.html">
                        Dashboard
                    </a>
                </div>
                <div class="p-4">
                    <a href="{{ route('employee.analyzer') }}">
                        Resume Analyzer
                    </a>
                </div>
                <div class="p-4">
                    <a href="{{ route('employee.index')}}">
                        Candidates
                    </a>
                </div>
                <div class="p-4">
                    <a href="#">
                        Job Posting
                    </a>
                </div>
            </div>
        </div>

        <!-- Container -->
        <div class="m-6 w-full">
            <!-- Title -->
            <div class="mb-6">
                <h1 class="text-3xl">Resume Analyzer</h1>
                <h3 class="text-lg">cruitment insights and candidate analysis.</h3>
            </div>

            <!-- Grid Content -->
            <div class="grid grid-cols-2 md:grid-cols-4">
                <div class="bg-gray-100 p-4 m-2 space-y-2 rounded-xl shadow-lg hover:scale-105 duration-150">
                    <div class="flex items-center space-x-2 text-sm">
                        <div class="px-3 py-2 my-2 text-2xl text-white rounded-xl shadow-md bg-linear-to-r from-cyan-500 to-blue-500">
                            <i class="bi bi-file-text"></i>
                        </div>
                    </div>
                    <div class="text-4xl font-semibold text-black">
                        2
                    </div>
                    <div>
                        Total Resume
                    </div>
                </div>
                
                <div class="bg-gray-100 p-4 m-2 space-y-2 rounded-lg shadow-lg hover:scale-105 duration-150">
                    <div class="flex items-center space-x-2 text-sm">
                        <div class="px-3 py-2 my-2 text-2xl text-white rounded-xl shadow-md bg-linear-to-r from-sky-500 to-indigo-500">
                            <i class="bi bi-person"></i>
                        </div>
                    </div>
                    <div class="text-4xl font-semibold text-black">
                        2
                    </div>
                    <div>
                        Analyzed Candidates
                    </div>
                </div>
                
                <div class="bg-gray-100 p-4 m-2 space-y-2 rounded-lg shadow-lg hover:scale-105 duration-150">
                    <div class="flex items-center space-x-2 text-sm">
                        <div class="px-3 py-2 my-2 text-2xl text-white rounded-xl shadow-md bg-linear-to-r from-purple-500 to-pink-500">
                            <i class="bi bi-star"></i>
                        </div>
                    </div>
                    <div class="text-4xl font-semibold text-black">
                        80
                    </div>
                    <div>
                        Avg. Match Score
                    </div>
                </div>
                
                <div class="bg-gray-100 p-4 m-2 space-y-2 rounded-lg shadow-lg hover:scale-105 duration-150">
                    <div class="flex items-center space-x-2 text-sm">
                        <div class="px-3 py-2 my-2 text-2xl text-white rounded-xl shadow-md bg-linear-to-r from-violet-500 to-fuchsia-500">
                            <i class="bi bi-clock"></i>
                        </div>
                    </div>
                    <div class="text-4xl font-semibold text-black">
                        10
                    </div>
                    <div>
                        Avg. Processing Time
                    </div>
                </div>

                <div class="bg-gray-100 p-4 m-2 col-span-2 rounded-lg shadow-lg">
                    Mountly Detected
                </div>

                <div class="bg-gray-100 p-4 m-2 col-span-2 rounded-lg shadow-lg">
                    Top Skills Detected
                </div>

                <div class="bg-gray-100 p-4 m-2 col-span-2 rounded-lg shadow-lg">
                    <div class="flex justify-between">
                        <h1>Processing Queue</h1>
                        <h3 class="text-sm">0 active</h3>
                    </div>
                    <div class="flex flex-col my-15 items-center">
                        <div class="mb-3 text-4xl">
                            <i class="bi bi-clock"></i>
                        </div>
                        <h1>No resume process.</h1>
                    </div>
                </div>
                
                <div class="bg-gray-100 p-4 m-2 col-span-2 rounded-lg shadow-lg">
                    <div class="flex p-2 justify-between">
                        Recent Resumes
                    </div>
                    {{-- Resume list --}}
                    
                    <div class="flex p-2 space-x-3 items-center rounded-xl border border-gray-100 hover:border-gray-400">
                        <div class="px-4 py-3 bg-cyan-100 rounded-xl">
                            JS
                        </div>
                        <div class="w-full">
                            <h2>
                                Jaden Smith
                            </h2>
                            <h3 class="text-sm">
                                1/12/2024
                            </h3>
                        </div>
                        <div class="flex justify-end w-full space-x-4">
                            <div class="hidden lg:flex lg:space-x-2">
                                <i class="bi bi-star"></i>
                                <h3>
                                    92 %
                                </h3>
                            </div>
                            <div class="px-2 py-1 text-xs text-green-800 bg-green-300 rounded-lg">
                                Completed
                            </div>
                            <i class="bi bi-eye"></i>
                            <i class="bi bi-download"></i>
                        </div>
                    </div>
                    
                    <div class="flex p-2 space-x-3 items-center rounded-xl border border-gray-100 hover:border-gray-400">
                        <div class="px-4 py-3 bg-cyan-100 rounded-xl">
                            JS
                        </div>
                        <div class="w-full">
                            <h2>
                                Jaden Smith
                            </h2>
                            <h3 class="text-sm">
                                1/12/2024
                            </h3>
                        </div>
                        <div class="flex justify-end w-full space-x-4">
                            <div class="hidden lg:flex lg:space-x-2">
                                <i class="bi bi-star"></i>
                                <h3>
                                    92 %
                                </h3>
                            </div>
                            <div class="px-2 py-1 text-xs text-green-800 bg-green-300 rounded-lg">
                                Completed
                            </div>
                            <i class="bi bi-eye"></i>
                            <i class="bi bi-download"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-100 p-4 m-2 col-span-4 rounded-lg shadow-lg">
                    Score Distribution
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>