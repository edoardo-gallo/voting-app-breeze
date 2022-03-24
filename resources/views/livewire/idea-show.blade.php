<div class="idea-and-buttons container">

    <div class="idea-container bg-white rounded-xl flex mt-4"> 
        
        <div class="flex flex-1 px-3 py-5">
            <div class="flex-none">
                <a href="#">
                    <img src="{{ $idea->user->getGravatar() }}" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
            </div>
            <div class="w-full mx-4">
                <h4 class="text-xl font-semibold">
                    {{ $idea->title }}
                </h4>
                <div class="w-full text-gray-600 mt-3 line-clamp-3">
                    {{ $idea->description}}
                </div>
                <div class="flex items-center justify-between mt-6">
                <div class="flex items-enter text-xs text-slate-300 font-semibold space-x-2">
                    <div class="font-bold text-slate-900">{{ $idea->user->name}} </div>
                    <div>&bull;</div>
                    <div>{{ $idea->created_at->diffForHumans()}}</div>
                    <div>&bull;</div>
                    <div>{{$idea->category->name}}</div>
                    <div class="text-slate-500">comments 3</div>
                </div>

                <div x-data="{ isOpen: false}" class="flex items-center space-x-2">
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

                </div>
            </div>
        </div>
    </div>  <!-- end idea container-->

    <div class="buttons-container flex items-center justify-between mt-6">

        <div class="flex items-center space-x-4 ml-6">

            <div 
                x-data="{ isOpen: false}"
                class="relative">
                <button 
                        type="button" 
                        @click="isOpen= !isOpen"
                        class="flex items-center justify-center h-11 w-32 text-sm text-white bg-blue font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duation-150 ease-in px-6 py-3">
                    Reply
                </button>

                <div 
                    x-cloak 
                    x-show="isOpen" 
                    x-transition.origin.top.left.duration.300ms 
                    @click.away="isOpen = false" 
                    class="absolute z-10 w-104 text-left font-semibold text-sm bg-white shadow-dialog rounded-xl mt-2">
                    <form action="" class="space-y-4 px-4 py-6">
                        <div>
                            <textarea name="post_comment" id="post_comment" cols="30" rows="4" class="w-full text-sm bg-slate-100 rounded-xl placeholder-slate-900 border-none px-4 py-2" placeholder="go ahead and don't be shy"></textarea>
                        </div>

                        <div class="flex items-center space-x-3">
                            <button type="button" class="flex items-center justify-center h-11 w-1/2 text-sm text-white bg-blue font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duation-150 ease-in px-6 py-3">
                                Post comment
                            </button>
                            <button type="button" class="flex items-center justify-center w-32 h-11 text-xs bg-slate-200 font-semibold rounded-xl border border-slate-200 hover:border-slate-400 transition duation-150 ease-in px-6 py-3">
                                <svg class="text-slate-600 w-4 trasform -rotate-45" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                </svg>
                                <span class="ml-1">Attach</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            @auth
                @if (auth()->user()->isAdmin())
                    <livewire:set-status :idea="$idea" />
                @endif
            @endauth
            
        </div>

        <div class="flex items-center space-x-4">
            <div class="bg-white font-semibold text-center rounded-xl px-3 py-2">
                <div class="text-xl leading-snug @if($hasVoted) text-blue @endif">{{ $votesCount }}</div>
                <div class="text-slate-400 text-xs leading-none">Votes</div>
            </div>
            @if ($hasVoted)
                <button 
                        wire:click.prevent="vote"
                        type="button" 
                        class="bg-blue text-white items-center justify-center w-32 h-11 text-xs font-semibold uppercase rounded-xl border border-blue hover:bg-blue-hover transition duation-150 ease-in px-6 py-3">
                    <span>Voted</span>
                    
                </button>
            @else
                <button 
                        wire:click.prevent="vote"
                        type="button" 
                        class=" items-center justify-center w-32 h-11 text-xs bg-slate-200 font-semibold uppercase rounded-xl border border-slate-200 hover:border-slate-400 transition duation-150 ease-in px-6 py-3">
                    <span>Vote</span>
                    
                </button>
            @endif
            
        </div>
    </div> <!-- end buttons container-->
</div> <!-- end ideas and buttons container-->