<div>
    <div class="filters flex flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-6">
        <div class="w-full md:w-1/3">
            <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2">
                <option value="category one">category one</option>
                <option value="category two">category two</option>
                <option value="category 3">category 3</option>
                <option value="category 4">category 4</option>
            </select>
        </div>
        <div class="w-full md:w-1/3">
            <select name="other_filters" id="other_filters" class="w-full rounded-xl border-none px-4 py-2">
                <option value="category one">filter one</option>
                <option value="category two">category two</option>
                <option value="category 3">category 3</option>
                <option value="category 4">category 4</option>
            </select>
        </div>
        <div class="w-full md:w-2/3 relative border-none">
            
            <input type="search" placeholder="find an idea" class="w-full rounded-xl placeholder:text-slate-400 bg-white border-none px-4 py-2 pl-8">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>
    </div> <!-- end filters-->


    <div class="ideas-container space-y-6 my-6">
        @foreach ($ideas as $idea)

        {{-- @click="const target = $event.target.tagName.toLowerCase() --- we get just the name of the component(Ex. 'div', 'button', ..)
                    const ignore = ['button', 'svg', 'path', 'a']

                                                                        --- we get the element that we click on
                                                                            const target = $event.target

                    
                    if(! ignore.includes(target)) {                    --- se i tag da ignorare non includono il target
                                                                        --- wherever you click in the idea container open the idea page
                        $event.target.closest('.idea-container').querySelector('.idea-link').click()
        }
        " --}}

            <livewire:idea-index 
                :key="$idea->id" {{--needed when you loop over a component for some reason --}}
                :idea="$idea" 
                :votesCount="$idea->votes_count"/>

        @endforeach
        
    </div><!-- end ideas container-->

    <div class="my-8 ">
        {{ $ideas->links()}}
    </div>
</div>