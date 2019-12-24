<?php

    use App\Game;
    use App\GameDescription;
    use Faker\Generator as Faker;
    use Illuminate\Database\Eloquent\Factory;
    use Illuminate\Support\Facades\DB;

    /**
     * @var Factory $factory
     */
    $factory->define(GameDescription::class,
        function(Faker $faker) {
            return [
                'game_id'          => Game::all()->unique()->random()->game_id,
                'language_id'      => DB::table('languages')->select('language_id')->distinct()->get()->random(),
                'game_description' => $faker->paragraph,
            ];
            /*
             * May throw an exception if tuple already exists
             */
        });
