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
                <h1 class="text-sm font-light">The Next Recruitment Tools</h1>
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
                <div class="bg-gray-100 p-4 m-2 space-y-2 rounded-lg shadow-lg hover:scale-105 duration-150">
                    <div class="flex items-center space-x-2 text-sm">
                        <div>
                            <span class="px-2 py-1 text-xl font-medium bg-cyan-300 rounded-lg">#</span>
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
                        <div>
                            <span class="px-2 py-1 text-xl font-medium bg-cyan-300 rounded-lg">#</span>
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
                        <div>
                            <span class="px-2 py-1 text-xl font-medium bg-cyan-300 rounded-lg">#</span>
                        </div>
                    </div>
                    <div class="text-4xl font-semibold text-black">
                        2
                    </div>
                    <div>
                        Avg. Match Score
                    </div>
                </div>
                
                <div class="bg-gray-100 p-4 m-2 space-y-2 rounded-lg shadow-lg hover:scale-105 duration-150">
                    <div class="flex items-center space-x-2 text-sm">
                        <div>
                            <span class="px-2 py-1 text-xl font-medium bg-cyan-300 rounded-lg">#</span>
                        </div>
                    </div>
                    <div class="text-4xl font-semibold text-black">
                        2
                    </div>
                    <div>
                        Total Resume
                    </div>
                </div>

                <div class="bg-gray-100 p-4 m-2 col-span-2 rounded-lg shadow-lg">
                    Mountly Detected
                </div>

                <div class="bg-gray-100 p-4 m-2 col-span-2 rounded-lg shadow-lg">
                    Top Skills Detected
                </div>

                <div class="bg-gray-100 p-4 m-2 col-span-2 rounded-lg shadow-lg">
                    Processing Que
                </div>
                
                <div class="bg-gray-100 p-4 m-2 col-span-2 rounded-lg shadow-lg">
                    Recent Resumes
                    <div class="p-2">
                        <div>CV Andi</div>
                        <div>CV Andi</div>
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