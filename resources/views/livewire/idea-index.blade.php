<div 
    x-data
    @click="const clicked = $event.target
            const target = clicked.tagName.toLowerCase()
            const ignore = ['button', 'svg', 'path', 'a', 'img']
            if(! ignore.includes(target)) {
                clicked.closest('.idea-container').querySelector('.idea-link').click()
            }
        "
    class="idea-container bg-white hover:shadow-card hover:-translate-y-2 hover:scale-103 transition ease-in-out duration-300  rounded-xl flex cursor-pointer"
> 
    <div class="hidden md:block border-r border-slate-200 px-5 py-8">
        @if ($hasVoted)
            <div class="text-center">
                <div class="text-blue font-semibold text-2xl">{{ $votesCount }}</div>
                <div class="text-gray-500 ">votes</div>
            </div>

            <div class="mt-8">
                <button 
                        wire:click.prevent="vote"        
                        class="w-20 text-white bg-blue border border-blue hover:border-blue-hover transition duration-300 ease-in border-b-4 pb-3 font-bold text-xs uppercase rounded-xl px-4 py-3">Voted</button>
            </div>
        @else
            <div class="text-center">
                <div class="font-semibold text-2xl">{{ $votesCount }}</div>
                <div class="text-gray-500 ">votes</div>
            </div>

            <div class="mt-8">
                <button 
                        wire:click.prevent="vote"
                        class="w-20 bg-gray border border-slate-300 hover:border-slate-400 transition duration-300 ease-in border-b-4 pb-3 font-bold text-xs uppercase rounded-xl px-4 py-3">Vote</button>
            </div>
        @endif
    </div>
    <div class="flex flex-col md:flex-row flex-1 px-3 py-5">
        <div class="flex-none mx-4 md:mx-0">
            <a href="#">
                <img src="{{ $idea->user->getGravatar() }}" alt="avatar" class="w-14 h-14 rounded-xl">
            </a>
        </div>
        <div class="w-full flex flex-col justify-between mx-4">
            <h4 class="text-xl font-semibold mt-2 md:mt-0">
                <a href="{{ route('idea.show', $idea) }}" class="idea-link">{{ $idea->title }} </a>
            </h4>
            <div class="w-full text-gray-600 mt-3 line-clamp-3">
                {{ $idea->description }}
            </div>
            <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
            <div class="flex items-enter text-xs text-slate-300 font-semibold space-x-2">
                <div>{{ $idea->created_at->diffForHumans()}}</div>
                <div>&bull;</div>
                <div>{{$idea->category->name}}</div>
                <div class="text-slate-500">comments 3</div>
            </div>

            <div x-data="{ isOpen: false}" class="flex items-center space-x-2 mt-4 md:mt-0">
                <div class="{{$idea->getStatusClasses() }} text-white text-xs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">{{ $idea->status->name}} </div>
                <button 
                        @click="isOpen= !isOpen" 
                        class="relative bg-slate-100 hover:bg-slate-300 rounded-full h-7 px-2 py-2 transition duration-300 ease-in pb-3">
                    <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)">
                    </svg>
                    {{-- x-cloak used because when you refresh, the buttons are shown for a fraction of seconds  --}}
                    <ul x-cloak x-show="isOpen" x-transition.origin.top.left.duration.300ms @click.away="isOpen = false" class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                        <li><a href="#" class="hover:bg-slate-100 block px-5 py-3 transition duration-300 ease-in">Mark as spam</a></li>
                        <li><a href="#" class="hover:bg-slate-100 block px-5 py-3 transition duration-300 ease-in">Delete post</a></li>
                    </ul>
                </button>
            </div>

            <div class="flex items-center md:hidden mt-4 md:mt-0">
                <div class="bgslate-100 text-center rounded-xl h-10 px-4 py-2 pr-8">
                    <div class="texy-sm font-bold leading-none">{{ $votesCount }}</div>
                    <div class="text-xs font-semibold leading-none text-slate-400">Votes</div>
                </div>
                <button class="w-20 bg-gray border border-slate-300 hover:border-slate-400 transition duration-300 ease-in font-bold text-xs uppercase rounded-xl px-4 py-3">
                    Vote
                </button>
            </div>

            </div>
        </div>
    </div>
</div> <!-- end idea container-->