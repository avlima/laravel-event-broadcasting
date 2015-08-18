<?php

namespace App\Events;

use App\Item;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ItemCreated extends Event implements ShouldBroadcast
{
    use SerializesModels;

    public $id;

    /**
     * Create a new event instance.
     *
     * @param Item $item
     */
    public function __construct(Item $item)
    {
        $this->id = $item->id;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return ['itemAction'];
    }
}