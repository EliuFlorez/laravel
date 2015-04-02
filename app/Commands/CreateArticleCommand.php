<?php

namespace App\Commands;

use App\Commands\Command;
use Illuminate\Contracts\Bus\SelfHandling;
use App\Services\Posts\PostsService;
use App\Events\ArticleWasCreated;

class CreateArticleCommand extends Command implements SelfHandling {

    private $title;
    private $body;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($title, $body)
    {
        $this->title = $title;
        $this->body = $body;
    }

    /**
     * Execute the command.
     *
     * @return void
     */
    public function handle(PostsService $service)
    {
        $post = $service->createPost([
            'title' => $this->title,
            'body' => $this->body
        ]);
        return event(new ArticleWasCreated($post));
    }

}
