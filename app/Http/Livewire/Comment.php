<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Comment extends Component
{
    public $comment; //form comment input
    public $comment_user = auth()->user()->id;

    public function validateComment(){

    }
    public function render()
    {
        return view('livewire.comment')->with(auth()->user());
    }
}
