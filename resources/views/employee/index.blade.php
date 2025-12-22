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
                    <a href="upload.html">
                        Resume Analyzer
                    </a>
                </div>
                <div class="p-4">
                    <a href="candidates.html">
                        Candidates
                    </a>
                </div>
                <div class="p-4">
                    <a href="#dashboard">
                        Job Posting
                    </a>
                </div>
            </div>
        </div>

        <!-- Container -->
        <div class="m-6 w-full ">
            <!-- Title -->
            <div class="m-2">
                <h1 class="text-2xl font-semibold">Candidate Management</h1>
                <h3 class="text-lg">Manage and review candidates</h3>
            </div>

            <!-- Grid Content -->
            <div class="grid grid-cols-2 md:grid-cols-4">

                <!-- Option -->
                <div class="bg-white p-4 m-2 space-y-2 rounded-lg shadow-lg col-span-4">
                    <div class="flex items-center space-x-2 text-sm">
                        
                        <!-- Search bar -->
                        <div>
                            <input type="text" 
                            class="p-3 w-150 border border-gray-200 rounded-lg placeholder:font-light"
                            placeholder="Search candidate...">
                        </div>
                        
                        <!-- Filter -->
                        <div class="w-100 grid shrink-0 grid-cols-1 focus-within:relative">
                            <select id="currency" name="currency" aria-label="Currency" class="col-start-1 row-start-1 w-full appearance-none border border-gray-200 rounded-lg bg-white py-2.5 pr-7 pl-3 text-base text-black *:bg-gray-800 placeholder:text-gray-500 sm:text-sm/6">
                              <option>All Scores</option>
                              <option>Excellent (80+)</option>
                              <option>Good (60-79)</option>
                              <option>Average (40-59)</option>
                              <option>Poor (40-)</option>
                            </select>
                            <svg viewBox="0 0 16 16" fill="currentColor" data-slot="icon" aria-hidden="true" class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-400 sm:size-4">
                              <path d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
                            </svg>
                        </div>
                        
                        <!-- Sort -->
                        <div class="w-100 grid shrink-0 grid-cols-1 focus-within:relative">
                            <select id="currency" name="currency" aria-label="Currency" class="col-start-1 row-start-1 w-full appearance-none border border-gray-200 rounded-lg bg-white py-2.5 pr-7 pl-3 text-base text-black *:bg-gray-800 placeholder:text-gray-500 sm:text-sm/6">
                              <option>Sort by Name</option>
                              <option>Sort by Date</option>
                              <option>Sort by Score</option>
                            </select>
                            <svg viewBox="0 0 16 16" fill="currentColor" data-slot="icon" aria-hidden="true" class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-400 sm:size-4">
                              <path d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
                            </svg>
                        </div>
                            
                    </div>
                </div>
                
                @forelse ($employees as $employee)
                <!-- Candidate card -->
                <div class="flex flex-col m-2 p-6 space-y-2 font-light bg-white rounded-xl col-span-2">
                    <!-- 1st Row -->
                    <div class="flex space-x-2 justify-between">
                        <div class="p-3 mr-2 bg-cyan-500 rounded-lg text-white">
                            {{ substr($employee->name, 0, 2) }}
                        </div>
                        <div class="w-full">
                            <div class="font-semibold">
                                {{ $employee->name }}
                            </div>
                            <div class="font-extralight">
                                {{ $employee->age }}
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="p-1 mx-3 text-white text-lg font-bold bg-green-600 rounded-lg">80</div>
                            <a href="#">...</a>
                        </div>
                    </div>
                    <!-- 2nd Row -->
                    <div class="grid grid-cols-2 font-extralight">
                        <div>{{ $employee->email }}</div>
                        <div>{{ $employee->phone_number }}</div>
                        <div>{{ $employee->address }}</div>
                        <div>3 Years Experience</div>
                    </div>
                    
                    <!-- 3th Row -->
                    <div class="">
                        Top Skills
                        <div class="flex m-2 space-x-4 font-extralight">
                            @forelse ($employee->skill as $skill)
                                <div class="px-1 rounded-md border border-gray-300">{{$skill->name}}</div>
                            @empty
                                
                            @endforelse
                            {{-- <div class="px-1 rounded-md border border-gray-300">React</div>
                            <div class="px-1 rounded-md border border-gray-300">Python</div>
                            <div class="px-1 rounded-md border border-gray-300">SQL</div> --}}
                        </div>
                    </div>

                    <!-- 4th Row -->
                    <div class="flex font-extralight w-full justify-center space-x-8">
                        <div><a href="#" class="hover:text-blue-500">View Details</a></div>
                        <div><a href="#" class="hover:text-blue-500">Downloads</a></div>
                        <div><a href="#" class="hover:text-blue-500">Move to Trash</a></div>
                    </div>
                </div>
                @empty
                @endforelse
            </div>

        </div>
        </div>