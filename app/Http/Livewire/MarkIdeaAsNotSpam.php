<?php

namespace App\Http\Livewire;

use App\Models\Idea;
use Livewire\Component;
use Illuminate\Http\Response;

class MarkIdeaAsNotSpam extends Component
{
    public $idea;
    
    public function mount(Idea $idea)
    {
        $this->idea = $idea;
    }

    public function markIdeaNotSpam()
    {
        if(! auth()->check() || ! auth()->user()->isAdmin()) {
            abort(Response::HTTP_FORBIDDEN);
        }
        
        $this->idea->spam_count = 0;
        $this->idea->save();

        $this->emit('ideaMarkedAsNotSpam');
    }
    
    public function render()
    {
        return view('livewire.mark-idea-as-not-spam');
    }
}
