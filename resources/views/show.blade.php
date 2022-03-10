<x-app-layout>
<div>
    <a href="/" class="flex items-center font-semibold hover:underline">
        <svg  class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
        </svg>
    <span class="ml-2">All Ideas</span>
    </a>

</div>

<div class="idea-container bg-white rounded-xl flex mt-4"> 
    
    <div class="flex flex-1 px-3 py-5">
        <div class="flex-none">
            <a href="#">
                <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
            </a>
        </div>
        <div class="mx-4">
            <h4 class="text-xl font-semibold">
                <a href="#" class="hover:underlin">a random title</a>
            </h4>
            <div class="w-full text-gray-600 mt-3 line-clamp-3">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus corporis saepe quam dignissimos itaque ipsa, ipsum soluta illo consequatur temporibus deleniti! Dolores a pariatur iure non, rem aperiam dolor voluptatem!
            </div>
            <div class="flex items-center justify-between mt-6">
              <div class="flex items-enter text-xs text-slate-300 font-semibold space-x-2">
                <div class="font-bold text-slate-900">John Doe</div>
                <div>&bull;</div>
                <div>10 hourse ago</div>
                <div>&bull;</div>
                <div>category 1</div>
                <div class="text-slate-500">comments 3</div>
              </div>

              <div class="flex items-center space-x-2">
                  <div class="bg-slate-200 text-xs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">Open</div>
                  <button class="relative bg-slate-100 hover:bg-slate-300 rounded-full h-7 px-2 py-2 transition duration-300 ease-in pb-3">
                    <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)">
                    </svg>
                    
                  </button>
              </div>

            </div>
        </div>
    </div>
</div>  <!-- end idea container-->
<div class="buttons-container flex items-center justify-between mt-6">

    <div class="flex items-center space-x-4 ml-6">

        <button type="button" class="flex items-center justify-center h-11 w-32 text-xs text-white bg-blue font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duation-150 ease-in px-6 py-3">
                                
            <span class="ml-1">Reply</span>
        </button>
    
        <button type="button" class="flex items-center justify-center w-36 h-11 text-xs bg-slate-200 font-semibold rounded-xl border border-slate-200 hover:border-slate-400 transition duation-150 ease-in px-6 py-3">
            <span>Set Status</span>
            <svg  class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </button>
    </div>

    <div class="flex items-center space-x-4">
        <div class="bg-white font-semibold text-center rounded-xl px-3 py-2">
            <div class="text-xl leading-snug">12</div>
            <div class="text-slate-400 text-xs leading-none">Votes</div>
        </div>
    
        <button type="button" class=" items-center justify-center w-32 h-11 text-xs bg-slate-200 font-semibold uppercase rounded-xl border border-slate-200 hover:border-slate-400 transition duation-150 ease-in px-6 py-3">
            <span>Vote</span>
            
        </button>
    </div>
</div> <!-- end buttons container-->

<div class="relative comments-container space-y-6 ml-22 my-8 mt-1 pt-4">

    <div class="comment-container relative bg-white rounded-xl flex mt-4"> 
    
        <div class="flex flex-1 px-3 py-5">
            <div class="flex-none">
                <a href="#">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
            </div>
            <div class="mx-4">
                {{-- <h4 class="text-xl font-semibold">
                    <a href="#" class="hover:underlin">a random title</a>
                </h4> --}}
                <div class="w-full text-gray-600 mt-3">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus corporis saepe quam dignissimos itaque ipsa, ipsum soluta illo consequatur temporibus deleniti! Dolores a pariatur iure non, rem aperiam dolor voluptatem!
                </div>
                <div class="flex items-center justify-between mt-6">
                  <div class="flex items-enter text-xs text-slate-300 font-semibold space-x-2">
                    <div class="font-bold text-slate-900">John Doe</div>
                    <div>&bull;</div>
                    <div>10 hourse ago</div>
                  </div>
    
                  <div class="flex items-center space-x-2">
                      <div class="bg-slate-200 text-xs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">Open</div>
                      <button class="relative bg-slate-100 hover:bg-slate-300 rounded-full h-7 px-2 py-2 transition duration-300 ease-in pb-3">
                        <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)">
                        </svg>
                        
                      </button>
                  </div>
    
                </div>
            </div>
        </div>
    </div>  <!-- end comment container-->

    <div class="is-admin comment-container relative bg-white rounded-xl flex mt-4"> 
    
        <div class="flex flex-1 px-3 py-5">
            <div class="flex-none">
                <a href="#">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="text-center uppercase text-blue text-xs font-bold mt-1">Admin</div>
            </div>
            <div class="mx-4">
                <h4 class="text-xl font-semibold">
                    <a href="#" class="hover:underlin">a random title</a>
                </h4>
                <div class="w-full text-gray-600 mt-3">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus corporis saepe quam dignissimos itaque ipsa, ipsum soluta illo consequatur temporibus deleniti! Dolores a pariatur iure non, rem aperiam dolor voluptatem!
                </div>
                <div class="flex items-center justify-between mt-6">
                  <div class="flex items-enter text-xs text-slate-300 font-semibold space-x-2">
                    <div class="font-bold text-blue">Andre</div>
                    <div>&bull;</div>
                    <div>10 hourse ago</div>
                  </div>
    
                  <div class="flex items-center space-x-2">
                      <div class="bg-slate-200 text-xs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">Open</div>
                      <button class="relative bg-slate-100 hover:bg-slate-300 rounded-full h-7 px-2 py-2 transition duration-300 ease-in pb-3">
                        <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)">
                        </svg>
                        
                      </button>
                  </div>
    
                </div>
            </div>
        </div>
    </div>  <!-- end comment container-->

    <div class="comment-container relative bg-white rounded-xl flex mt-4"> 
    
        <div class="flex flex-1 px-3 py-5">
            <div class="flex-none">
                <a href="#">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
            </div>
            <div class="mx-4">
                {{-- <h4 class="text-xl font-semibold">
                    <a href="#" class="hover:underlin">a random title</a>
                </h4> --}}
                <div class="w-full text-gray-600 mt-3">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus corporis saepe quam dignissimos itaque ipsa, ipsum soluta illo consequatur temporibus deleniti! Dolores a pariatur iure non, rem aperiam dolor voluptatem!
                </div>
                <div class="flex items-center justify-between mt-6">
                  <div class="flex items-enter text-xs text-slate-300 font-semibold space-x-2">
                    <div class="font-bold text-slate-900">John Doe</div>
                    <div>&bull;</div>
                    <div>10 hourse ago</div>
                  </div>
    
                  <div class="flex items-center space-x-2">
                      <div class="bg-slate-200 text-xs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">Open</div>
                      <button class="relative bg-slate-100 hover:bg-slate-300 rounded-full h-7 px-2 py-2 transition duration-300 ease-in pb-3">
                        <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)">
                        </svg>
                        
                      </button>
                  </div>
    
                </div>
            </div>
        </div>
    </div>  <!-- end comment container-->

</div> <!-- end comments container-->
</x-app-layout>
 