<?php

namespace App\Http\Livewire;

use App\Models\Idea;
use Livewire\Component;
use Illuminate\Http\Response;

class MarkIdeaAsSpam extends Component
{
    public $idea;
    
    public function mount(Idea $idea)
    {
        $this->idea = $idea;
    }

    public function markIdea()
    {
        if(! auth()->check()) {
            abort(Response::HTTP_FORBIDDEN);
        }
        
        $this->idea->spam_count++;
        $this->idea->save();

        $this->emit('ideaMarkedAsSpam', 'Marked Idea as Spam');
    }

    public function render()
    {
        return view('livewire.mark-idea-as-spam');
    }
}
