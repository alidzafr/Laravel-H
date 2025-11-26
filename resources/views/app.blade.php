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
          <a href="#" class="font-bold my-4 text-xl text-cyan-400">Laravel</a>
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
      <!-- Card Container -->
      <div class="flex justify-center items-center">
        <div class="overflow-auto mx-5 shadow-2xl rounded-2xl">
          <!-- large Table content -->
          <div class="hidden md:block">
            <table>
              <thead class="bg-gray-50 border-b-2 border-gray-300">
                <tr>
                  <th class="p-3 text-sm font-semibold tracking-wide text-left">ID</th>
                  <th class="p-3 text-sm font-semibold tracking-wide text-left">Status</th>
                  <th class="p-3 text-sm font-semibold tracking-wide text-left">Date</th>
                  <th class="p-3 text-sm font-semibold tracking-wide text-left">Name</th>
                  <th class="p-3 text-sm font-semibold tracking-wide text-left">Total</th>
                </tr>
              </thead>
              <tbody>
                <tr class="bg-gray-100">
                  <td class="p-3 text-sm"><a href="#">10001</a>
                  </td>
                  <td class="p-3">
                    <span class="p-2 text-sm bg-green-200 rounded-xl">
                      Delivered
                    </span>
                  </td>
                  <td class="p-3 text-sm">11/05/2024
                  </td>
                  <td class="p-3 text-sm whitespace-nowrap">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, ullam!
                  </td>
                  <td class="w-25 p-3 text-sm">$500
                  </td>
                </tr>
                <tr class="bg-white">
                  <td class="p-3 text-sm"><a href="#">10001</a>
                  </td>
                  <td class="p-3">
                    <span class="p-2 text-sm bg-green-200 rounded-xl">
                      Delivered
                    </span>
                  </td>
                  <td class="p-3 text-sm">11/05/2024
                  </td>
                  <td class="p-3 text-sm whitespace-nowrap">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, ullam!
                  </td>
                  <td class="w-25 p-3 text-sm">$500
                  </td>
                </tr>
                <tr class="bg-gray-100">
                  <td class="p-3 text-sm"><a href="#">10001</a>
                  </td>
                  <td class="p-3">
                    <span class="p-2 text-sm bg-green-200 rounded-xl">
                      Delivered
                    </span>
                  </td>
                  <td class="p-3 text-sm">11/05/2024
                  </td>
                  <td class="p-3 text-sm whitespace-nowrap">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, ullam!
                  </td>
                  <td class="w-25 p-3 text-sm">$500
                  </td>
                </tr>
  
              </tbody>
            </table>
          </div>
          
        </div>
      </div>
      
     <!-- Mobile content -->
     <div class="grid grid-cols-1 sm:grid-cols-2 md:hidden">
       
      <div class="bg-white p-4 m-2 space-y-2 rounded-lg shadow-lg">
        <div class="flex items-center space-x-2 text-sm">
          <div>
            <a href="#" class="text-blue-500 font-bold hover:underline">#1000</a>
          </div>
          <div class="text-gray-500">11/05/2025</div>
          <div>
            <span class="p-1.5 text-xs font-medium uppercase bg-green-200 rounded-lg">Delivered</span>
          </div>
        </div>
        <div>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam, sequi!
        </div>
        <div class="text-sm font-medium text-black">
          $200
        </div>
      </div>
       
      <div class="bg-white p-4 m-2 space-y-2 rounded-lg shadow-lg">
        <div class="flex items-center space-x-2 text-sm">
          <div>
            <a href="#" class="text-blue-500 font-bold hover:underline">#1000</a>
          </div>
          <div class="text-gray-500">11/05/2025</div>
          <div>
            <span class="p-1.5 text-xs font-medium uppercase bg-green-200 rounded-lg">Delivered</span>
          </div>
        </div>
        <div>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam, sequi!
        </div>
        <div class="text-sm font-medium text-black">
          $200
        </div>
      </div>
       
      <div class="bg-white p-4 m-2 space-y-2 rounded-lg shadow-lg">
        <div class="flex items-center space-x-2 text-sm">
          <div>
            <a href="#" class="text-blue-500 font-bold hover:underline">#1000</a>
          </div>
          <div class="text-gray-500">11/05/2025</div>
          <div>
            <span class="p-1.5 text-xs font-medium uppercase bg-green-200 rounded-lg">Delivered</span>
          </div>
        </div>
        <div>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam, sequi!
        </div>
        <div class="text-sm font-medium text-black">
          $200
        </div>
      </div>

     </div>
    </section>
    
  </body>
</html>