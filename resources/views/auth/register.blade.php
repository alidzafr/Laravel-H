<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <title>Home</title>
  </head>
  <body>
    <!-- Container -->
    <section id="content">
      <div class="flex justify-center items-center w-screen h-screen bg-zinc-50 ">
        <!-- Card Container -->
        <div class="relative flex flex-col m-6 space-y-10 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0 md:m-0">
          <!-- Left Side -->
          <div class="p-6 md:p-20">

            <form action="{{ route('register') }}" method="POST">
              @csrf
              <!-- Top -->
              <h2 class="mb-5 text-4xl font-bold">Sign Up</h2>
              <p class="max-w-sm mb-10 font-light text-gray-600">
                Create new account
              </p>
              <div class="flex flex-col space-y-2">
                <input 
                type="text"
                name="name"
                value="{{ old('name') }}"
                required
                class="p-3 border border-gray-200 rounded-md placeholder:font-light"
                placeholder="Enter your name">
                
                <input 
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
                class="p-3 border border-gray-200 rounded-md placeholder:font-light"
                placeholder="Enter your email address">
  
                <input 
                type="password" 
                name="password"
                required
                class="p-3 border border-gray-200 rounded-md placeholder:font-light"
                placeholder="Enter password">
  
                <input 
                type="password" 
                name="password_confirmation"
                required
                class="p-3 border border-gray-200 rounded-md placeholder:font-light"
                placeholder="Confirm password">
              </div>
              
              {{-- Validation Errors --}}
              @if ($errors->any())
              <ul class="px-4 py-2 my-2 bg-red-100">
                @foreach ($errors->all() as $error)
                <li class="my-2 text-red-500">{{ $error }}</li>
                @endforeach
              </ul>
              @endif
              
              <!-- Bottom -->
              <button 
              type="submit" 
              class="w-full md:w-auto flex justify-center mx-auto px-9 py-3 my-6 font-sans font-bold text-white rounded-md shadow-lg bg-cyan-400 shadow-cyan-100 hover:bg-opacity-90 shadow-sm hover:shadow-lg border transition hover:-translate-y-0.5 duration-150">
                <span>Create new account</span>
              </button>
              
            </form>

            <div class="flex flex-col items-center justify-between border-t border-gray-300 mt-6 space-y-6 space-x-4 md:flex-row md:space-y-0">
              <p class="text-gray-600">Already have account?</p>
              <a 
              href="{{ route('login.show') }}" 
              class="w-full md:w-auto flex justify-center mx-auto px-9 py-3 my-6 font-sans font-bold text-white rounded-md shadow-lg bg-cyan-400 shadow-cyan-100 hover:bg-opacity-90 shadow-sm hover:shadow-lg border transition hover:-translate-y-0.5 duration-150">
                <span>Login</span>
              </a>
            </div>
          </div>
          
          <!-- Right Side -->
          <img src="{{ asset('images/image.jpg')}}" alt="" class="w-[350px] hidden md:block" />


        </div>
      </div>
    </section>
    
    
  </body>
</html>