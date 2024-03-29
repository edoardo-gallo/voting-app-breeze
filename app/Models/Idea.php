<?php

namespace App\Models;

use App\Exceptions\DuplicateVoteException;
use App\Exceptions\VoteNotFoundException;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Idea extends Model
{
    use HasFactory, Sluggable ;

    protected $guarded= [];
    protected $perPage = 8;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
    
    public function votes()
    {
        return $this->belongsToMany(User::class, 'votes');
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function isVotedByUser(?User $user)
    {

        if(!$user) {
            return false;
        }

        return Vote::where('user_id', $user->id)
            ->where('idea_id', $this->id)
            ->exists();
    }

    public function vote(User $user)
    {
        if($this->isVotedByUser($user)){
            throw new DuplicateVoteException;
        } else {
            Vote::create([
                'idea_id' =>  $this->id,
                'user_id' => $user->id, 
            ]);
        }

        
    }
    
    public function removeVote(User $user)
    {
        $voteToDelete = Vote::where('idea_id', $this->id)
        ->where('user_id', $user->id)
        ->first();

        if($voteToDelete){
            $voteToDelete->delete();
        } else {
            throw new VoteNotFoundException;
        }
    }

    // not good having to deal with styles in the data layer
    public function getStatusClasses()
    {

        $allStatuses = [
            'Open' => 'bg-slate-200 text-black',
            'Considering' => 'bg-purple text-white',
            'In Progress' => 'bg-yellow text-white',
            'Implemented' => 'bg-green text-white',
            'Closed' => 'bg-red text-white'
        ];

        return $allStatuses[$this->status->name];
    }
    
}
