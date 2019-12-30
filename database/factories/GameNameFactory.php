<?php

    use App\Game;
    use App\GameName;
    use Faker\Generator as Faker;
    use Illuminate\Database\Eloquent\Factory;
    use Illuminate\Support\Facades\DB;

    /**
     * @var Factory $factory
     */
    $factory->define(GameName::class,
        function(Faker $faker) {
            return [
                'game_id' => Game::all()->unique()->random()->game_id,
                'language_id' => DB::table('languages')->select('language_id')->distinct()->get()->random()->language_id,
                'game_name' => 'Game ' . $faker->words(rand(1, 5), true),
            ];
            /*
             * May throw an exception if tuple already exists
             */
        });
