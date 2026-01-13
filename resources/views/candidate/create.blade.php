<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
                    <a href="index.html">
                        Dashboard
                    </a>
                </div>
                <div class="p-4 text-white font-bold w-full rounded-lg bg-linear-to-r/srgb from-indigo-500 to-teal-400">
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
            <div class="mb-6">
                <h1 class="text-3xl">Upload</h1>
                <h3 class="text-lg">Manage and review files</h3>
            </div>

            <!-- Container -->
            <div class="flex min-h-screen items-center">
              
              <div class="flex flex-col mx-auto px-4 py-6 min-w-2xl text-white bg-black rounded-xl">
                <h1 class="mb-2 text-2xl font-bold">Tags</h1>
                <h3 class="mb-2 text-lg">press enter or add a coma after each tag</h3>
                
                <form action="{{ route('candidate.store') }}" method="POST" enctype="multipart/form-data">
                  
                  <!-- Tag box -->
                  <div class="tagbox flex flex-wrap mb-4 w-3xl min-h-32 bg-neutral-800 rounded-lg">
                    <!-- Tag Content here -->
                    <input type="text"
                    class="p-2 m-2 outline-none h-fit">
                  </div>
                   
                  <div class="flex justify-between">
                    <div class="flex text-gray-400">
                      <!-- Count -->
                      <div class="count">0</div>
                      <div class="max_tags">/5</div>
                    </div>
                    
                    @csrf
                    <button type="button" class="p-2 bg-blue-500 rounded-xl hover:opacity-90 hover:cursor-pointer">Submit</button>
                  </div>
                  
              </form>
            </div>
              
           </div>
            
        </div>
    </div>
</body>