<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <title>Home</title>
  </head>
  <body>
    <!-- Nav Container -->
    <div class="mx-auto px-4 font-poppins whitespace-normal border-b border-zinc-200">
      <div class="flex justify-between">
        
      <!-- Left Nav -->
        <div class="flex items-center space-x-10">
          <a href="#" class="font-bold my-3 text-xl text-cyan-400">Laravel</a>
           <div class="hidden space-x-8 text-gray-600 text-nowrap md:flex">
             <a href="#">Manage Category</a>
             <a href="#">Manage Product</a>
             <a href="#">Orders List</a>
           </div>
        </div>
        <!-- Right Nav -->
        <div class="hidden items-center space-x-5 md:flex">
          <a href="#" class="px-4 py-2 my-2 font-bold text-cyan-400 border-2 border-cyan-400 rounded-lg">Login</a>
          <a href="#" class="px-4 py-2 my-2 font-bold text-white bg-cyan-400 rounded-lg">Sign Up</a>
        </div>
      </div>
    </div>

    <!-- Container -->
    <section id="content">
      <div class="flex justify-center items-center w-screen h-screen bg-zinc-50 ">
        <!-- Card Container -->
        <div class="relative flex flex-col m-6 space-y-10 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0 md:m-0">
          <!-- Left Side -->
          <div class="p-6 md:p-20">
            <!-- Top -->
            <h2 class="mb-5 text-4xl font-bold">Log In</h2>
            <p class="max-w-sm mb-10 font-light text-gray-600">
              Log in to your account to Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
            <div class="flex flex-col space-y-2">
              <input 
              type="text" 
              class="p-3 border border-gray-200 rounded-md placeholder:font-light"
              placeholder="Enter your email address">

              <input 
              type="password" 
              class="p-3 border border-gray-200 rounded-md placeholder:font-light"
              placeholder="Enter password">

            </div>
            
            <!-- Bottom -->
            <div class="flex flex-col items-center justify-between mt-6 space-y-6 md:flex-row md:space-y-0">
              <a href="#" class="text-cyan-700">Forgot Password</a>
              <button class="w-full md:w-auto flex justify-center items-center px-9 py-3 space-x-4 font-sans font-bold text-white rounded-md shadow-lg bg-cyan-400 shadow-cyan-100 hover:bg-opacity-90 shadow-sm hover:shadow-lg border transition hover:-translate-y-0.5 duration-150">
                <span>Next</span>
              </button>
            </div>
          </div>
          
          <!-- Right Side -->
          <img src="{{ asset('images/image.jpg')}}" alt="" class="w-[350px] hidden md:block" />


        </div>
      </div>
    </section>
    
  </body>
</html>