<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <!-- Container -->
     <div class="flex min-h-screen items-center">

        <div class="flex flex-col mx-auto px-4 py-6 min-w-2xl text-white bg-black rounded-xl">
            <h1 class="mb-2 text-2xl font-bold">Tags</h1>
            <h3 class="mb-2 text-lg">press enter or add a coma after each tag</h3>
            
            <form action="{{ route('candidate.store') }}" method="post">
                <!-- Tag box -->
                <div class="mb-4 bg-neutral-800 rounded-lg">
                  <input
                  name="city" 
                  type="text"
                  class="p-2 m-2 outline-none">
                </div>
            
              
                <!-- Tag box -->
                <div class="tagbox flex flex-wrap mb-4 w-3xl min-h-32 bg-neutral-800 rounded-lg">
                    <!-- Tag Content here -->
                    <input 
                    id="skillinput"
                    type="text"
                    class="p-2 m-2 outline-none h-fit">

                    <input 
                    type="hidden"
                    id="hiddenData"
                    name="skills">
                </div>

                
                <div class="flex justify-between">
                    <div class="flex text-gray-400">
                        <!-- Count -->
                        <div class="count">0</div>
                        <div class="max_tags">/5</div>
                    </div>
                    
                    @csrf
                    <button type="submit" 
                    class="p-2 bg-blue-500 rounded-xl hover:opacity-90 hover:cursor-pointer">Submit</button>
                </div>
            </form>

        </div>

    </div>
</body>
</html>