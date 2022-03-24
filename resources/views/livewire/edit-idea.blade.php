<div
    x-cloak
    x-data="{ isOpen: false }"
    x-show="isOpen"
    x-init="
        window.livewire.on('ideaWasUpdated', () => {
            isOpen = false
        })
    "
    @keydown.escape.window="isOpen = false" {{-- to close the modal with 'esc'--}}
    @custom-show-edit-modal.window="isOpen = true"
    class="fixed z-10 inset-0 overflow-y-auto" 
    aria-labelledby="modal-title" 
    role="dialog" 
    aria-modal="true"
>
    <div class="flex items-end justify-center min-h-screen">
      <!--
        Background overlay, show/hide based on modal state.
  
        Entering: "ease-out duration-300"
          From: "opacity-0"
          To: "opacity-100"
        Leaving: "ease-in duration-200"
          From: "opacity-100"
          To: "opacity-0"
      -->
    <div 
        x-show="isOpen"
        x-transition.opacity
        class="fixed inset-0 bg-slate-300 bg-opacity-75 transition-opacity" 
        aria-hidden="true"
    >
    </div>
  
      <!-- This element is to trick the browser into centering the modal contents. -->
      {{-- <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span> --}}
  
      <!--
        Modal panel, show/hide based on modal state.
  
        Entering: "ease-out duration-300"
          From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
          To: "opacity-100 translate-y-0 sm:scale-100"
        Leaving: "ease-in duration-200"
          From: "opacity-100 translate-y-0 sm:scale-100"
          To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
      -->
    <div
        x-show="isOpen"
        x-transition.origin.bottom.duration.400ms 
        class="modal relative bg-white rounded-tl-xl rounded-tr-xl overflow-hidden transform transition-all py-4 sm:max-w-lg sm:w-full">
        <div class="absolute top-0 right-0 pt-4 pr-4">
            <button 
                @click="isOpen = false"
                class="rounded-xl text-slate-400 hover:bg-slate-200 hover:text-slate-500 py-1 px-1">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
            <h3 class="text-center text-lg font-medium text-slate-900">Edit Idea</h3>
            <p class="text-xs text-center text-slate-500 mt-4">You have one hour to edit your Idea</p>
            <form wire:submit.prevent="updateIdea" action="" method="post" class="space-y-4 px-4 py-6">
                <div>
                    <input wire:model.defer="title" type="text" class="w-full bg-slate-100 border-none text-sm rounded-xl placeholder-slate-900 px-4 py-2" placeholder="Your Idea" required>
                    @error('title')
                        <p class="text-red text-xs mt-1">{{ $message }}</p>            
                    @enderror
                </div>
                <div>
                    <select wire:model.defer="category"  name="category_add" id="category_add" class="w-full text-sm bg-slate-100 rounded-xl border-none px-4 py-2">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach                    
                            
                    </select>
                </div>
                @error('category')
                        <p class="text-red text-xs mt-1">{{ $message }}</p>            
                @enderror
                <div>
                    <textarea wire:model.defer="description"  name="idea" id="idea" cols="30" rows="4" class="w-full bg-slate-100 rounded-xl placeholder-slate-900 text-sm px-4 py-2 border-none" placeholder="Describie your Idea" required></textarea>
                    @error('description')
                        <p class="text-red text-xs mt-1">{{ $message }}</p>            
                    @enderror
                </div>
                <div class="flex items-center justify-between space-x-3">
                    <button type="button" class="flex items-center justify-center w-1/2 h-11 text-xs bg-slate-200 font-semibold rounded-xl border border-slate-200 hover:border-slate-400 transition duation-150 ease-in px-6 py-3">
                        <svg class="text-slate-600 w-4 trasform -rotate-45" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                        </svg>
                        <span class="ml-1">Attach</span>
                    </button>
                    <button type="submit" class="flex items-center justify-center w-1/2 h-11 text-xs text-white bg-blue font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duation-150 ease-in px-6 py-3">
                        
                        <span class="ml-1">Update</span>
                    </button>
                </div>
                
            </form>
        </div>
        
      </div>
    </div>
</div>