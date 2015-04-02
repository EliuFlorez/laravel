<?php

use Illuminate\Database\Seeder;
use App\Services\Posts\PostModel;
/**
 * Description of PostSeeder
 *
 * @author jfonseca
 */
class PostSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $faker->addProvider(new Faker\Provider\Lorem($faker));
        for($i = 0; $i <= 30; $i++){
            PostModel::create([
                'title' => $faker->sentence(5),
                'body' => $faker->text(),
                'published_at' => $faker->date()
            ]);
        }
        for($i = 0; $i <= 30; $i++){
            PostModel::create([
                'title' => $faker->sentence(5),
                'body' => $faker->text(),
                'published_at' => $faker->dateTimeThisMonth()->format('Y-m-d')
            ]);
        }
    }

}
