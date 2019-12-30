<?php

    use App\Game;
    use App\GameThemesList;
    use Faker\Generator as Faker;
    use Illuminate\Database\Eloquent\Factory;
    use Illuminate\Support\Facades\DB;

    /**
     * @var Factory $factory
     */
    $factory->define(GameThemesList::class,
        function(Faker $faker) {
            return [
                'game_id'          => Game::all()->random()->game_id,
                'game_theme_id' => DB::table('game_themes')->select('game_theme_id')->distinct()->get()->random()->game_theme_id,
            ];
            /*
             * May throw an exception if tuple already exists
             */
        });
