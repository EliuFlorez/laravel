<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use App\Services\Posts\PostModel;

class ArticleWasCreated extends Event {

    use SerializesModels;
    
    public $post;
    
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(PostModel $post) {
        $this->post = $post;
    }

}
