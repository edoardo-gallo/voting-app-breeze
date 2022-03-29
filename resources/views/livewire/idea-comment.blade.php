<div class="comment-container relative bg-white rounded-xl flex mt-4"> 
    
    <div class="flex flex-1 px-3 py-5">
        <div class="flex-none">
            <a href="#">
                <img src="{{ $comment->user->getGravatar() }}" alt="avatar" class="w-14 h-14 rounded-xl">
            </a>
        </div>
        <div class="w-full mx-4">
            {{-- <h4 class="text-xl font-semibold">
                <a href="#" class="hover:underlin">a random title</a>
            </h4> --}}
            <div class="w-full text-slate-600">
                {{ $comment->body }}
            </div>
            <div class="flex items-center justify-between mt-6 w-full">
                <div class="flex items-center text-xs text-slate-300 font-semibold space-x-2">
                    <div class="font-bold text-slate-900">{{ $comment->user->name }} </div>
                    <div>&bull;</div>
                    @if ($comment->user->id === $ideaUserId) 
                        <div class="rounded-full border bg-slate-100 px-3 py-1">OP</div>
                        <div>&bull;</div>                        
                    @endif
                    <div>{{ $comment->created_at->diffForHumans() }}</div>
                </div>

                <div x-data="{ isOpen: false}" class="flex items-center space-x-2">
                    <div class="relative">
                        <button 
                            @click="isOpen= !isOpen" 
                            class="relative bg-slate-100 hover:bg-slate-300 rounded-full h-7 px-2 py-2 transition duration-300 ease-in pb-3">
                            <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)">
                            </svg>                        
                        </button>
                        {{-- x-cloak used because when you refresh, the buttons are shown for a fraction of seconds  --}}
                        <ul x-cloak x-show="isOpen" x-transition.origin.top.left.duration.300ms @click.away="isOpen = false" class="absolute w-44 z-10 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                            <li><a href="#" class="hover:bg-slate-100 block px-5 py-3 transition duration-300 ease-in">Mark as spam</a></li>
                            <li><a href="#" class="hover:bg-slate-100 block px-5 py-3 transition duration-300 ease-in">Delete post</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  <!-- end comment container-->
