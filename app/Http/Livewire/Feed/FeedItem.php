<?php

namespace App\Http\Livewire\Feed;

use Livewire\Component;

class FeedItem extends Component
{

    public $post;
    public function render()
    {
        return view('livewire.feed.feed-item');
    }
}
