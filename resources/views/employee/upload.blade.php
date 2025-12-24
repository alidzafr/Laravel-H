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
                <div class="p-4">
                    <a href="{{ route('employee.dashboard') }}">
                        Dashboard
                    </a>
                </div>
                <div class="p-4 text-white font-bold w-full rounded-lg bg-linear-to-r/srgb from-indigo-500 to-teal-400">
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
        <div class="m-6 w-full ">
            <!-- Title -->
            <div class="mb-6">
                <h1 class="text-3xl">Upload</h1>
                <h3 class="text-lg">Manage and review files</h3>
            </div>

            <div class="flex items-center justify-center w-full">
                <label for="dropzone-file" class="flex flex-col mx-2 items-center justify-center w-full h-80 bg-gray-100 border border-dashed border-default-strong rounded-xl cursor-pointer hover:bg-neutral-tertiary-medium">
                    <div class="flex flex-col items-center justify-center text-body pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h3a3 3 0 0 0 0-6h-.025a5.56 5.56 0 0 0 .025-.5A5.5 5.5 0 0 0 7.207 9.021C7.137 9.017 7.071 9 7 9a4 4 0 1 0 0 8h2.167M12 19v-9m0 0-2 2m2-2 2 2"/></svg>
                        <p class="mb-4 text-xl"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                        <p class="mb-4 text-xl">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                        <div class="flex py-3 px-5 items-center bg-gray-200 rounded-xl transition hover:-translate-y-1.5 hover:shadow-md hover:shadow-gray-300 duration-150">
                            <svg class="w-4 h-4 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/></svg>
                            Browse file
                        </div>
                    </div>
                    <input id="dropzone-file" type="file" class="hidden" />
                </label>
            </div> 

            <div class="my-40 flex flex-col items-center justify-center w-full">
                <div class="px-4 p-3 text-3xl bg-white rounded-lg items-center justify-center">
                    <i class="bi bi-file-earmark"></i>
                </div>
                <p class="my-4 text-xl font-bold">No Resumes Uploaded</p>
                <h2 class="text-lg">load your first resume to get started with AI-powered analysis.</h2>
            </div>

        </div>
    </div>
</body>