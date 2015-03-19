<?php

namespace App\Handlers\Events;

use App\Events\ArticleWasCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldBeQueued;

class SendEmailToAdmin {

    /**
     * Create the event handler.
     *
     * @return void
     */
    public function __construct() {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ArticleWasCreated  $event
     * @return void
     */
    public function handle(ArticleWasCreated $event) {
        $post = $event->post;
        \Mail::send('emails.postCreated', ['post' => $post], function($message) {
            $message->to('foo@example.com', 'John Smith')->subject('Post Creado!');
        });
    }

}
