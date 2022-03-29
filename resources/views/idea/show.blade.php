<x-app-layout>
<div>
    <a href="{{ $backUrl }}" class="flex items-center font-semibold hover:underline">
        <svg  class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
        </svg>
    <span class="ml-2">All Ideas</span>
    </a>

</div>

<livewire:idea-show :idea="$idea" :votesCount="$votesCount"/>

<livewire:idea-comments :idea="$idea" />

<x-notification-success />

{{-- @prepend('modals')  NON FUNZIONA--}}
    <x-modals-container :idea="$idea" />
{{-- @endprepend --}}





</x-app-layout>
 