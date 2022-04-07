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
                    @admin
                        @if ($idea->spam_count > 0)
                            <div class="text-red mb-3">Spam Reports: {{ $idea->spam_count }}</div>                       
                        @endif                
                    @endadmin
                    {{ $idea->description}}
                </div>
                <div class="flex items-center justify-between mt-6">
                <div class="flex items-enter text-xs text-slate-300 font-semibold space-x-2">
                    <div class="font-bold text-slate-900">{{ $idea->user->name}} </div>
                    <div>&bull;</div>
                    <div>{{ $idea->created_at->diffForHumans()}}</div>
                    <div>&bull;</div>
                    <div>{{$idea->category->name}}</div>
                    <div class="text-slate-500">{{ $idea->comments()->count() }} comments</div>
                </div>

                <div x-data="{ isOpen: false}" class="flex items-center space-x-2">
                    <div class="{{$idea->getStatusClasses() }} text-white text-xs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">{{ $idea->status->name}} </div>
                    @auth
                    <div class="relative">
                        <button 
                            @click="isOpen= !isOpen" 
                            class="relative bg-slate-100 hover:bg-slate-300 rounded-full h-7 px-2 py-2 transition duration-300 ease-in pb-3">
                            <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)">
                            </svg>                        
                        </button>
                        {{-- x-cloak used because when you refresh, the buttons are shown for a fraction of seconds  --}}
                        <ul 
                            x-cloak 
                            x-show="isOpen" 
                            x-transition.origin.top.left.duration.300ms 
                            @click.away="isOpen = false" 
                            class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                            @can('update', $idea)
                            <li>
                                <a 
                                    @click.prevent="
                                        isOpen = false  
                                        $dispatch('custom-show-edit-modal')
                                    "
                                    href="#"
                                    class="hover:bg-slate-100 block px-5 py-3 transition duration-300 ease-in"
                                >
                                Edit Idea
                                </a>
                            </li>
                            @endcan
                            @can('delete', $idea)                                 
                            <li>
                                <a
                                    @click.prevent="
                                        isOpen = false 
                                        $dispatch('custom-show-delete-modal')
                                    "
                                    href="#" 
                                    class="hover:bg-slate-100 block px-5 py-3 transition duration-300 ease-in"
                                >
                                Delete Idea
                                </a>
                            </li>
                            @endcan
                            <li>
                                <a
                                    @click.prevent="
                                        isOpen = false 
                                        $dispatch('custom-show-spam-modal')
                                    "
                                    href="#" 
                                    class="hover:bg-slate-100 block px-5 py-3 transition duration-300 ease-in"
                                >
                                Mark as Spam
                                </a>
                            </li>
                            @admin
                            <li>
                                <a
                                    @click.prevent="
                                        isOpen = false 
                                        $dispatch('custom-show-not-spam-modal')
                                    "
                                    href="#" 
                                    class="hover:bg-slate-100 block px-5 py-3 transition duration-300 ease-in"
                                >
                                Not Spam
                                </a>
                            </li>
                            @endadmin
                        </ul>
                    </div>
                    @endauth
                </div>

                </div>
            </div>
        </div>
    </div>  <!-- end idea container-->

    <div class="buttons-container flex items-center justify-between mt-6">

        <div class="flex items-center space-x-4 ml-6">

            <livewire:add-comment :idea="$idea" />
            @admin
                <livewire:set-status :idea="$idea" />  
            @endadmin                
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