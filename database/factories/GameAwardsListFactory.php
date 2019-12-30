<?php

    use App\Game;
    use App\GameAward;
    use App\GameAwardsList;
    use Faker\Generator as Faker;
    use Illuminate\Database\Eloquent\Factory;

    /**
     * @var Factory $factory
     */
    $factory->define(GameAwardsList::class,
        function(Faker $faker) {
            return [
                'game_award_id' => GameAward::all()->random()->game_award_id,
                'game_id'       => Game::all()->random()->game_id,
                'game_award_year'          => $faker->year,
            ];
            /*
             * May throw an exception if tuple already exists
             */
        });
