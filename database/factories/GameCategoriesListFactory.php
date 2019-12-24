<?php

    use App\Game;
    use App\GameCategoriesList;
    use Faker\Generator as Faker;
    use Illuminate\Database\Eloquent\Factory;
    use Illuminate\Support\Facades\DB;

    /**
     * @var Factory $factory
     */
    $factory->define(GameCategoriesList::class,
        function(Faker $faker) {
            return [
                'game_id'          => Game::all()->random()->game_id,
                'game_category_id' => DB::table('game_categories')->select('game_category_id')->distinct()->get()->random(),
            ];
            /*
             * May throw an exception if tuple already exists
             */
        });
