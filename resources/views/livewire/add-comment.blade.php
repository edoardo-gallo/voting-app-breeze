<div 
    x-data="{ isOpen: false}"
    x-init="
        Livewire.on('commentWasAdded', () => {
            isOpen = false 
        })
        
        Livewire.hook('message.processed', (message, component) => {
            {{-- if (message.updateQueue[0].method === 'goToPage'|| message.updateQueue[0].method === 'nextPage' || message.updateQueue[0].method === 'previousPage') --}}
            if (['gotoPage', 'previousPage', 'nextPage'].includes(message.updateQueue[0].method)) {
                const firstComment = document.querySelector('.comment-container:first-child')
                firstComment.scrollIntoView({ behavior: 'smooth'})
            }
            if (message.updateQueue[0].payload.event === 'commentWasAdded' && message.component.fingerprint.name === 'idea-comments') {
                const lastComment = document.querySelector('.comment-container:last-child')
                lastComment.scrollIntoView({ behavior: 'smooth'})
                lastComment.classList.add('bg-green-100')
                setTimeout(() => {
                    lastComment.classList.remove('bg-green-100')
                }, 4000)
            }  
        })
    "
    class="relative">
    <button 
            type="button" 
            @click="
                isOpen= !isOpen
                if(isOpen) {
                    $nextTick(() => $refs.comment.focus())
                }
            "
            class="flex items-center justify-center h-11 w-32 text-sm text-white bg-blue font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duation-150 ease-in px-6 py-3">
        Reply
    </button>

    <div 
        x-cloak 
        x-show="isOpen" 
        x-transition.origin.top.left.duration.300ms 
        @click.away="isOpen = false" 
        class="absolute z-10 w-104 text-left font-semibold text-sm bg-white shadow-dialog rounded-xl mt-2">
        @auth         
        
        <form wire:submit.prevent="addComment" action="" class="space-y-4 px-4 py-6">
            <div>
                <textarea wire:model="comment" x-ref="comment" name="post_comment" id="post_comment" cols="30" rows="4" class="w-full text-sm bg-slate-100 rounded-xl placeholder-slate-900 border-none px-4 py-2" placeholder="go ahead and don't be shy" required></textarea>

                @error('comment')
                    <p class="text-red text-xs mt-1">{{ $message }}</p>            
                @enderror
            </div>

            <div class="flex items-center space-x-3">
                <button type="submit" class="flex items-center justify-center h-11 w-1/2 text-sm text-white bg-blue font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duation-150 ease-in px-6 py-3">
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
        @else
        <div class="px-4 py-6">
            <p class="font-normal flex justify-center">Please login or create an account to post a comment</p>
            <div class="flex items-center space-x-3 mt-8">
                <a 
                    href="{{ route('login') }}" 
                    class="w-1/2 flex justify-center text-xs text-white bg-blue font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duation-150 ease-in px-6 py-3">Login</a>
                <a 
                    href="{{ route('register') }}" 
                    class="flex justify-center w-1/2 text-xs bg-slate-200 font-semibold rounded-xl border border-slate-200 hover:border-slate-400 transition duation-150 ease-in px-6 py-3">Sign up</a>
            </div>
        </div>
        @endauth
    </div>
</div>
