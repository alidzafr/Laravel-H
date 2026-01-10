<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    {{-- <script src="script.js" defer></script> --}}
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

          <!-- Form -->
          <form action="{{ route('candidate.store') }}" method="post">
            
            <div class="flex min-h-screen items-center">
              <div class="flex flex-col mx-auto px-4 py-6 min-w-2xl text-white bg-black rounded-xl">
                
                <h1 class="mb-2 text-2xl font-bold">Tags</h1>
                <h3 class="mb-2 text-lg">press enter or add a coma after each tag</h3>
  
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
                  <button class="p-2 bg-blue-500 rounded-xl">submit</button>
                </div>
  
              </div>
            </div>

          </form>
          {{-- <form action="{{ route('resume.store') }}" method="POST">
            <div class="p-4 space-y-12 bg-blue-900 rounded-xl">

              <div class="border-b border-white/10 pb-12">
                <h2 class="text-base/7 font-semibold text-white">Personal Information</h2>
                <p class="mt-1 text-sm/6 text-gray-400">Use a permanent address where you can receive mail.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                  <div class="sm:col-span-3">
                    <label for="full-name" class="block text-sm/6 font-medium text-white">Full name</label>
                    <div class="mt-2">
                      <input 
                      name="full-name" 
                      value="{{ $employee['name'] }}"
                      id="full-name" type="text" autocomplete="given-name" 
                      class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
                    </div>
                  </div>

                  <div class="sm:col-span-4">
                    <label for="email" class="block text-sm/6 font-medium text-white">Email address</label>
                    <div class="mt-2">
                      <input 
                      name="email"
                      value="{{ $employee['email'] }}"
                      id="email" type="email" autocomplete="email" 
                      class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
                    </div>
                  </div>

                  <!-- <div class="sm:col-span-3">
                    <label for="country" class="block text-sm/6 font-medium text-white">Country</label>
                    <div class="mt-2 grid grid-cols-1">
                      <select id="country" name="country" autocomplete="country-name" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white/5 py-1.5 pr-8 pl-3 text-base text-white outline-1 -outline-offset-1 outline-white/10 *:bg-gray-800 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6">
                        <option>United States</option>
                        <option>Canada</option>
                        <option>Mexico</option>
                      </select>
                      <svg viewBox="0 0 16 16" fill="currentColor" data-slot="icon" aria-hidden="true" class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-400 sm:size-4">
                        <path d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
                      </svg>
                    </div>
                  </div> -->

                  <div class="col-span-full">
                    <label for="phone-number" class="block text-sm/6 font-medium text-white">phone number</label>
                    <div class="mt-2">
                      <input 
                      name="phone-number"
                      value="{{ $employee['phone_number'] }}" 
                      id="phone-number" type="text" autocomplete="phone-number" 
                      class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
                    </div>
                  </div>

                  <div class="col-span-full">
                    <label for="address" class="block text-sm/6 font-medium text-white">Street address</label>
                    <div class="mt-2">
                      <input 
                      name="address"
                      value="{{ $employee['address'] }}" 
                      id="address" 
                      type="text" name="address" autocomplete="address" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
                    </div>
                  </div>

                  @foreach ($employee->skills as $skill)
                      <div class="py-1 px-2 bg-blue-800 text-white rounded-xl">{{ $skill->name_skill }}</div>
                  @endforeach

                  <div class="sm:col-span-2 sm:col-start-1">
                    <label for="city" class="block text-sm/6 font-medium text-white">City</label>
                    <div class="mt-2">
                      <input id="city" type="text" name="city" autocomplete="address-level2" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
                    </div>
                  </div>

                  <div class="sm:col-span-2">
                    <label for="region" class="block text-sm/6 font-medium text-white">State / Province</label>
                    <div class="mt-2">
                      <input id="region" type="text" name="region" autocomplete="address-level1" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
                    </div>
                  </div>

                  <div class="sm:col-span-2">
                    <label for="postal-code" class="block text-sm/6 font-medium text-white">ZIP / Postal code</label>
                    <div class="mt-2">
                      <input id="postal-code" type="text" name="postal-code" autocomplete="postal-code" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
                    </div>
                  </div>
                </div>
              </div>

              <div class="border-b border-white/10 pb-12">
                <h2 class="text-base/7 font-semibold text-white">Notifications</h2>
                <p class="mt-1 text-sm/6 text-gray-400">We'll always let you know about important changes, but you pick what else you want to hear about.</p>

                <!-- <div class="mt-10 space-y-10">
                  <fieldset>
                    <legend class="text-sm/6 font-semibold text-white">By email</legend>
                    <div class="mt-6 space-y-6">
                      <div class="flex gap-3">
                        <div class="flex h-6 shrink-0 items-center">
                          <div class="group grid size-4 grid-cols-1">
                            <input id="comments" type="checkbox" name="comments" checked aria-describedby="comments-description" class="col-start-1 row-start-1 appearance-none rounded-sm border border-white/10 bg-white/5 checked:border-indigo-500 checked:bg-indigo-500 indeterminate:border-indigo-500 indeterminate:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500 disabled:border-white/5 disabled:bg-white/10 disabled:checked:bg-white/10 forced-colors:appearance-auto" />
                            <svg viewBox="0 0 14 14" fill="none" class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-white/25">
                              <path d="M3 8L6 11L11 3.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="opacity-0 group-has-checked:opacity-100" />
                              <path d="M3 7H11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="opacity-0 group-has-indeterminate:opacity-100" />
                            </svg>
                          </div>
                        </div>
                        <div class="text-sm/6">
                          <label for="comments" class="font-medium text-white">Comments</label>
                          <p id="comments-description" class="text-gray-400">Get notified when someones posts a comment on a posting.</p>
                        </div>
                      </div>
                      <div class="flex gap-3">
                        <div class="flex h-6 shrink-0 items-center">
                          <div class="group grid size-4 grid-cols-1">
                            <input id="candidates" type="checkbox" name="candidates" aria-describedby="candidates-description" class="col-start-1 row-start-1 appearance-none rounded-sm border border-white/10 bg-white/5 checked:border-indigo-500 checked:bg-indigo-500 indeterminate:border-indigo-500 indeterminate:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500 disabled:border-white/5 disabled:bg-white/10 disabled:checked:bg-white/10 forced-colors:appearance-auto" />
                            <svg viewBox="0 0 14 14" fill="none" class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-white/25">
                              <path d="M3 8L6 11L11 3.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="opacity-0 group-has-checked:opacity-100" />
                              <path d="M3 7H11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="opacity-0 group-has-indeterminate:opacity-100" />
                            </svg>
                          </div>
                        </div>
                        <div class="text-sm/6">
                          <label for="candidates" class="font-medium text-white">Candidates</label>
                          <p id="candidates-description" class="text-gray-400">Get notified when a candidate applies for a job.</p>
                        </div>
                      </div>
                      <div class="flex gap-3">
                        <div class="flex h-6 shrink-0 items-center">
                          <div class="group grid size-4 grid-cols-1">
                            <input id="offers" type="checkbox" name="offers" aria-describedby="offers-description" class="col-start-1 row-start-1 appearance-none rounded-sm border border-white/10 bg-white/5 checked:border-indigo-500 checked:bg-indigo-500 indeterminate:border-indigo-500 indeterminate:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500 disabled:border-white/5 disabled:bg-white/10 disabled:checked:bg-white/10 forced-colors:appearance-auto" />
                            <svg viewBox="0 0 14 14" fill="none" class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-white/25">
                              <path d="M3 8L6 11L11 3.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="opacity-0 group-has-checked:opacity-100" />
                              <path d="M3 7H11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="opacity-0 group-has-indeterminate:opacity-100" />
                            </svg>
                          </div>
                        </div>
                        <div class="text-sm/6">
                          <label for="offers" class="font-medium text-white">Offers</label>
                          <p id="offers-description" class="text-gray-400">Get notified when a candidate accepts or rejects an offer.</p>
                        </div>
                      </div>
                    </div>
                  </fieldset>

                  <fieldset>
                    <legend class="text-sm/6 font-semibold text-white">Push notifications</legend>
                    <p class="mt-1 text-sm/6 text-gray-400">These are delivered via SMS to your mobile phone.</p>
                    <div class="mt-6 space-y-6">
                      <div class="flex items-center gap-x-3">
                        <input id="push-everything" type="radio" name="push-notifications" checked class="relative size-4 appearance-none rounded-full border border-white/10 bg-white/5 before:absolute before:inset-1 before:rounded-full before:bg-white not-checked:before:hidden checked:border-indigo-500 checked:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500 disabled:border-white/5 disabled:bg-white/10 disabled:before:bg-white/20 forced-colors:appearance-auto forced-colors:before:hidden" />
                        <label for="push-everything" class="block text-sm/6 font-medium text-white">Everything</label>
                      </div>
                      <div class="flex items-center gap-x-3">
                        <input id="push-email" type="radio" name="push-notifications" class="relative size-4 appearance-none rounded-full border border-white/10 bg-white/5 before:absolute before:inset-1 before:rounded-full before:bg-white not-checked:before:hidden checked:border-indigo-500 checked:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500 disabled:border-white/5 disabled:bg-white/10 disabled:before:bg-white/20 forced-colors:appearance-auto forced-colors:before:hidden" />
                        <label for="push-email" class="block text-sm/6 font-medium text-white">Same as email</label>
                      </div>
                      <div class="flex items-center gap-x-3">
                        <input id="push-nothing" type="radio" name="push-notifications" class="relative size-4 appearance-none rounded-full border border-white/10 bg-white/5 before:absolute before:inset-1 before:rounded-full before:bg-white not-checked:before:hidden checked:border-indigo-500 checked:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500 disabled:border-white/5 disabled:bg-white/10 disabled:before:bg-white/20 forced-colors:appearance-auto forced-colors:before:hidden" />
                        <label for="push-nothing" class="block text-sm/6 font-medium text-white">No push notifications</label>
                      </div>
                    </div>
                  </fieldset>
                </div> -->
              </div>
              <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" class="text-sm/6 font-semibold text-white">Cancel</button>
                <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500 hover:bg-white/20">Save</button>
              </div>
            </div>

          </form> --}}

          {{-- @php
            var_dump($employee);
          @endphp --}}
        </div>
    </div>
</body>