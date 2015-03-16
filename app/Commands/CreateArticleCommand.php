<?php

namespace App\Commands;

use App\Commands\Command;
use Illuminate\Contracts\Bus\SelfHandling;
use App\Services\Posts\PostModel;

class CreateArticleCommand extends Command implements SelfHandling {

    private $title;
    private $body;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($title, $body) {
        $this->title = $title;
        $this->body = $body;
    }

    /**
     * Execute the command.
     *
     * @return void
     */
    public function handle() {
        return PostModel::create([
                    'title' => $$this->title,
                    'body' => $this->body
        ]);
    }

}
