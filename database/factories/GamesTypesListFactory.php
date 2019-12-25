<?php

    use App\Game;
    use App\GameTypesList;
    use Faker\Generator as Faker;
    use Illuminate\Database\Eloquent\Factory;
    use Illuminate\Support\Facades\DB;

    /**
     * @var Factory $factory
     */
    $factory->define(GameTypesList::class,
        function(Faker $faker) {
            return [
                'game_id'      => Game::all()->random()->game_id,
                'game_type_id' => DB::table('game_types')->select('game_type_id')->distinct()->get()->random()->game_type_id,
            ];
            /*
             * May throw an exception if tuple already exists
             */
        });
