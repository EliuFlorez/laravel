<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Foundation\Bus\DispatchesCommands;
use App\Commands\NotifyMonthlyPosts;

/**
 * Description of MonthlyJob
 *
 * @author jfonseca
 */
class MonthlyJob extends Command {
    
    use DispatchesCommands;

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'monthlyJob';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Enviar correo mensual';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->dispatch(new NotifyMonthlyPosts(3));
    }

}
