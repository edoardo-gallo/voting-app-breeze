<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2">
                <option value="category one">category one</option>
                <option value="category two">category two</option>
                <option value="category 3">category 3</option>
                <option value="category 4">category 4</option>
            </select>
        </div>
        <div class="w-1/3">
            <select name="other_filters" id="other_filters" class="w-full rounded-xl border-none px-4 py-2">
                <option value="category one">filter one</option>
                <option value="category two">category two</option>
                <option value="category 3">category 3</option>
                <option value="category 4">category 4</option>
            </select>
        </div>
        <div class="w-2/3 relative border-none">
            
            <input type="search" placeholder="find an idea" class="w-full rounded-xl placeholder:text-slate-400 bg-white border-none px-4 py-2 pl-8">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>
    </div> <!-- end filters-->

    <div class="ideas-container space-y-6 my-6">

        <div class="idea-container bg-white hover:shadow-card hover:-translate-y-2 hover:scale-105 transition ease-in duration-300  rounded-xl flex cursor-pointer"> 
            <div class="border-r border-slate-200 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 bg-gray border border-slate-300 hover:border-slate-400 transition duration-300 ease-in border-b-4 pb-3 font-bold text-xs uppercase rounded-xl px-4 py-3">Vote</button>
                </div>
            </div>
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
                            <ul class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                <li><a href="#" class="hover:bg-slate-100 block px-5 py-3 transition duration-300 ease-in">Mark as spam</a></li>
                                <li><a href="#" class="hover:bg-slate-100 block px-5 py-3 transition duration-300 ease-in">Delete post</a></li>
                            </ul>
                          </button>
                      </div>

                    </div>
                </div>
            </div>
        </div> <!-- end idea container-->

        <div class="idea-container bg-white hover:shadow-card hover:-translate-y-2 hover:scale-105 transition duration-200 ease-in rounded-xl flex cursor-pointer">
            <div class="border-r border-slate-200 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 bg-gray border border-slate-300 hover:border-slate-400 transition duration-300 ease-in border-b-4 pb-3 font-bold text-xs uppercase rounded-xl px-4 py-3">Vote</button>
                </div>
            </div>
            <div class="flex px-3 py-5">
                <a href="" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underlin">a random title</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus corporis saepe quam dignissimos itaque ipsa, ipsum soluta illo consequatur temporibus deleniti! Dolores a pariatur iure non, rem aperiam dolor voluptatem!
                    </div>
                    <div class="flex items-center justify-between mt-6">
                      <div class="flex items-enter text-xs text-slate-300 font-semibold space-x-2">
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
                            <ul class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                <li><a href="#" class="hover:bg-slate-100 block px-5 py-3 transition duration-300 ease-in">Mark as spam</a></li>
                                <li><a href="#" class="hover:bg-slate-100 block px-5 py-3 transition duration-300 ease-in">Delete post</a></li>
                            </ul>
                          </button>
                      </div>

                    </div>
                </div>
            </div>
        </div> <!-- end idea container-->
        <div class="idea-container bg-white hover:shadow-card hover:-translate-y-2 hover:scale-105 transition duration-200 ease-in rounded-xl flex cursor-pointer">
            <div class="border-r border-slate-200 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 bg-gray border border-slate-300 hover:border-slate-400 transition duration-300 ease-in border-b-4 pb-3 font-bold text-xs uppercase rounded-xl px-4 py-3">Vote</button>
                </div>
            </div>
            <div class="flex px-3 py-5">
                <a href="" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underlin">a random title</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus corporis saepe quam dignissimos itaque ipsa, ipsum soluta illo consequatur temporibus deleniti! Dolores a pariatur iure non, rem aperiam dolor voluptatem!
                    </div>
                    <div class="flex items-center justify-between mt-6">
                      <div class="flex items-enter text-xs text-slate-300 font-semibold space-x-2">
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
                            <ul class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                <li><a href="#" class="hover:bg-slate-100 block px-5 py-3 transition duration-300 ease-in">Mark as spam</a></li>
                                <li><a href="#" class="hover:bg-slate-100 block px-5 py-3 transition duration-300 ease-in">Delete post</a></li>
                            </ul>
                          </button>
                      </div>

                    </div>
                </div>
            </div>
        </div> <!-- end idea container-->
        <div class="idea-container bg-white hover:shadow-card hover:-translate-y-2 hover:scale-105 transition duration-200 ease-in rounded-xl flex cursor-pointer">
            <div class="border-r border-slate-200 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 bg-gray border border-slate-300 hover:border-slate-400 transition duration-300 ease-in border-b-4 pb-3 font-bold text-xs uppercase rounded-xl px-4 py-3">Vote</button>
                </div>
            </div>
            <div class="flex px-3 py-5">
                <a href="" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underlin">a random title</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus corporis saepe quam dignissimos itaque ipsa, ipsum soluta illo consequatur temporibus deleniti! Dolores a pariatur iure non, rem aperiam dolor voluptatem!
                    </div>
                    <div class="flex items-center justify-between mt-6">
                      <div class="flex items-enter text-xs text-slate-300 font-semibold space-x-2">
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
                            <ul class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                <li><a href="#" class="hover:bg-slate-100 block px-5 py-3 transition duration-300 ease-in">Mark as spam</a></li>
                                <li><a href="#" class="hover:bg-slate-100 block px-5 py-3 transition duration-300 ease-in">Delete post</a></li>
                            </ul>
                          </button>
                      </div>

                    </div>
                </div>
            </div>
        </div> <!-- end idea container-->
        <div class="idea-container bg-white hover:shadow-card hover:-translate-y-2 hover:scale-105 transition duration-200 ease-in rounded-xl flex cursor-pointer">
            <div class="border-r border-slate-200 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 bg-gray border border-slate-300 hover:border-slate-400 transition duration-300 ease-in border-b-4 pb-3 font-bold text-xs uppercase rounded-xl px-4 py-3">Vote</button>
                </div>
            </div>
            <div class="flex px-3 py-5">
                <a href="" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underlin">a random title</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus corporis saepe quam dignissimos itaque ipsa, ipsum soluta illo consequatur temporibus deleniti! Dolores a pariatur iure non, rem aperiam dolor voluptatem!
                    </div>
                    <div class="flex items-center justify-between mt-6">
                      <div class="flex items-enter text-xs text-slate-300 font-semibold space-x-2">
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
                            <ul class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                <li><a href="#" class="hover:bg-slate-100 block px-5 py-3 transition duration-300 ease-in">Mark as spam</a></li>
                                <li><a href="#" class="hover:bg-slate-100 block px-5 py-3 transition duration-300 ease-in">Delete post</a></li>
                            </ul>
                          </button>
                      </div>

                    </div>
                </div>
            </div>
        </div> <!-- end idea container-->
        
    </div><!-- end idea container-->

</x-app-layout>
 