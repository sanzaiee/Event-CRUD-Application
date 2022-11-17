<?php

namespace App\Helpers;

use App\Models\Event\Event;

class SiteHelper
{
    protected $event;
    public function __construct(Event $event)
    {
        $this->event = $event;
    }
    public function searchType()
    {
        return [
            'finished-events' => 'Finished Events',
            'upcoming-events' => 'Upcoming Events',
            'events-within-7-days' => 'Events within 7 days',
            'finished-events-of-the-last-7-days' => 'Finished events of the last 7 days',
        ];
    }

    public function eventCount()
    {
        return $this->event->count();
    }
}
