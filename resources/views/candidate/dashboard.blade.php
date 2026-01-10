<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/script.js'])
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.46.0/dist/apexcharts.min.js"></script>
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
                    
                    <div class="mx-auto max-w-sm w-full bg-neutral-primary-soft border border-default rounded-base shadow-xs p-4 md:p-6">
                    <div class="flex justify-between pb-4 mb-4 border-b border-light">
                        <div class="flex items-center">
                        <div class="w-12 h-12 bg-neutral-primary-medium border border-default-medium flex items-center justify-center rounded-full me-3">
                            <svg class="w-7 h-7 text-body" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M4.5 17H4a1 1 0 0 1-1-1 3 3 0 0 1 3-3h1m0-3.05A2.5 2.5 0 1 1 9 5.5M19.5 17h.5a1 1 0 0 0 1-1 3 3 0 0 0-3-3h-1m0-3.05a2.5 2.5 0 1 0-2-4.45m.5 13.5h-7a1 1 0 0 1-1-1 3 3 0 0 1 3-3h3a3 3 0 0 1 3 3 1 1 0 0 1-1 1Zm-1-9.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z"/></svg>
                        </div>
                        <div>
                            <h5 class="text-2xl font-semibold text-heading">3.4k</h5>
                            <p class="text-sm text-body">Leads generated per week</p>
                        </div>
                        </div>
                        <div>
                        <span class="inline-flex items-center bg-success-soft border border-success-subtle text-fg-success-strong text-xs font-medium px-1.5 py-0.5 rounded">
                            <svg class="w-4 h-4 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v13m0-13 4 4m-4-4-4 4"/></svg>
                            42.5%
                        </span>
                        </div>
                    </div>

                    <div class="grid grid-cols-2">
                        <dl class="flex items-center">
                            <dt class="text-body text-sm font-normal me-1">Money spent:</dt>
                            <dd class="text-heading text-sm font-semibold">$3,232</dd>
                        </dl>
                        <dl class="flex items-center justify-end">
                            <dt class="text-body text-sm font-normal me-1">Conversion:</dt>
                            <dd class="text-heading text-sm font-semibold">1.2%</dd>
                        </dl>
                    </div>
                    <div id="column-chart"></div>
                    <div class="grid grid-cols-1 items-center border-light border-t justify-between">
                        <div class="flex justify-between items-center pt-4 md:pt-6">
                        <!-- Button -->
                        <button id="dropdownLastDaysButton" data-dropdown-toggle="LastDaysdropdown" data-dropdown-placement="bottom" class="text-sm font-medium text-body hover:text-heading text-center inline-flex items-center" type="button">
                            Last 7 days
                            <svg class="w-4 h-4 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/></svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="LastDaysdropdown" class="z-10 hidden bg-neutral-primary-medium border border-default-medium rounded-base shadow-lg w-44">
                            <ul class="p-2 text-sm text-body font-medium" aria-labelledby="dropdownLastDaysButton">
                                <li>
                                <a href="#" class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded">Yesterday</a>
                                </li>
                                <li>
                                <a href="#" class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded">Today</a>
                                </li>
                                <li>
                                <a href="#" class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded">Last 7 days</a>
                                </li>
                                <li>
                                <a href="#" class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded">Last 30 days</a>
                                </li>
                                <li>
                                <a href="#" class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded">Last 90 days</a>
                                </li>
                            </ul>
                        </div>
                        <a href="#" class="inline-flex items-center text-fg-brand bg-transparent box-border border border-transparent hover:bg-neutral-secondary-medium focus:ring-4 focus:ring-neutral-tertiary font-medium leading-5 rounded-base text-sm px-3 py-2 focus:outline-none">
                            Leads Report
                            <svg class="w-4 h-4 ms-1.5 -me-0.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/></svg>
                        </a>
                        </div>
                    </div>
                    </div>

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