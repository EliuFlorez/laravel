<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;

class MonthlyJobWasRunned extends Event {

    use SerializesModels;
    
    public $posts;
    public $month;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($month, $posts)
    {
        $this->posts = $posts;
        $this->month = $month;
    }

}
