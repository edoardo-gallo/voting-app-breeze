<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use App\Models\Idea;
use Livewire\Component;

class IdeaComment extends Component
{

    public Comment $comment;
    public $ideaUserId;

    public function render()
    {
        return view('livewire.idea-comment');
    }
}
