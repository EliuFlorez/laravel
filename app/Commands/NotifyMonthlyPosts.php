<?php

namespace App\Commands;

use App\Commands\Command;
use Illuminate\Contracts\Bus\SelfHandling;
use App\Services\Posts\PostsService;
use App\Services\Suscribers\Models\Suscribers;
use App\Events\MonthlyJobWasRunned;

class NotifyMonthlyPosts extends Command implements SelfHandling {

    private $month;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($month)
    {
        $this->month = $month;
    }

    /**
     * Execute the command.
     *  1. Consulte articulos de un mes especifico
     *  2. a cada suscriptor enviar un correo con los titulos de esos artiulos
     * @return void
     */
    public function handle(PostsService $service)
    {
        $posts = $service->getMonthlyPosts($this->month);
        $suscribers = Suscribers::all();
        $suscribers->each(function($suscriber) use($posts) {
            \Mail::send('emails.newsletter', ['posts' => $posts], function($message) use ($suscriber) {
                $message->to($suscriber->email)->subject('Monthly Newsletter');
            });
        });
        return event(new MonthlyJobWasRunned($this->month, $posts));
    }

}
