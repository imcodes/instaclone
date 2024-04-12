<?php

namespace App\Http\Livewire\Feed;

use Livewire\Component;

class FeedItem extends Component
{

    public $post;
    public $showingComments = false;

    public $mediaExtensions = [
        'image' => ['jpg','jpeg','gif','webp','png'],
        'video' => ['mp4']
    ];
    public function render()
    {
        return view('livewire.feed.feed-item');
    }
}
