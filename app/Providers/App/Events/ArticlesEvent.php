<?php

namespace App\Providers\App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ArticlesEvent
{
    use InteractsWithSockets, SerializesModels;
    public $article;
    public $action;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(\App\Article $article, $action = 'created')
    {
       $this->article = $artilce;
       $this->action = $action; 
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
