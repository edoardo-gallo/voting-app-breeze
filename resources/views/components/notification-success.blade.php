<div x-data="{ isOpen : false }">
    <button 
        @click="
        isOpen = true
        setTimeout(() => {isOpen = false}, 4000)
        "
    >
    toggle</button>
    <div 
        x-cloak
        x-show="isOpen"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-x-8"
        x-transition:enter-end="opacity-100 translate-x-0"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 translate-x-0"
        x-transition:leave-end="opacity-0 translate-x-8"
        x-init="
            window.livewire.on('ideaWasUpdated', () => {
                isOpen = false 
            })
        "
        @keydown.escape.window="isOpen = false" {{-- to close the modal with 'esc'--}}
        class="flex justify-between fixed top-0 right-0 bg-white border-slate-600 rounded-xl shadow-xl z-10 mx-4 my-8">
        <div class="flex items-center mx-2 my-4">
            <svg class="text-green h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-slate-500 font-semibold  text-base ml-2">Idea was updated successfully</span>
        </div>
        <button @click="isOpen = false" class="rounded-xl text-slate-400 hover:bg-slate-200 hover:text-slate-500 py-1 px-1">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
</div>