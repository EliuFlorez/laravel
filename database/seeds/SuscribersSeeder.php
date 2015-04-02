<?php

use Illuminate\Database\Seeder;
use App\Services\Suscribers\Models\Suscribers;

/**
 * Description of SuscribersSeeder
 *
 * @author jfonseca
 */
class SuscribersSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Suscribers::create([
            'email' => 'jose@ditecnologia.com'
        ]);
    }
}
