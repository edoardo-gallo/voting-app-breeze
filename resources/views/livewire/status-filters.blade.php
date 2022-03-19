<nav class="hidden md:flex items-center justify-between text-slate-400 text-xs">
    <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
        <li><a 
                wire:click.prevent="setStatus('All')" 
                href="#" 
                class="transition duration-150 ease-in border-b-4 pb-3 hover:border-blue hover:text-slate-800 @if ($status === 'All') border-blue text-slate-900 @endif">
                All ideas
            </a>
        </li>
        <li><a 
                wire:click.prevent="setStatus('Considering')" 
                href="#" 
                class="transition duration-150 ease-in border-b-4 pb-3 hover:border-blue hover:text-slate-800 @if ($status === 'Considering') border-blue text-slate-900 @endif">
                Considering
            </a>
        </li>
        <li><a 
                wire:click.prevent="setStatus('In Progress')"
                href="#" 
                class="transition duration-150 ease-in border-b-4 pb-3 hover:border-blue hover:text-slate-800 @if ($status === 'In Progress') border-blue text-slate-900 @endif">
                In Progress
            </a>
        </li>
    </ul>
    <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
        <li><a 
                wire:click.prevent="setStatus('Implemented')"
                href="#" 
                class="transition duration-150 ease-in border-b-4 pb-3 hover:border-blue hover:text-slate-800 @if ($status === 'Implemented') border-blue text-slate-900 @endif">
                Implemented
            </a>
        </li>
        <li><a 
                wire:click.prevent="setStatus('Closed')"
                href="#" 
                class="transition duration-150 ease-in border-b-4 pb-3 hover:border-blue hover:text-slate-800 @if ($status === 'Closed') border-blue text-slate-900 @endif">
                Closed
            </a>
        </li>
    </ul>
</nav>