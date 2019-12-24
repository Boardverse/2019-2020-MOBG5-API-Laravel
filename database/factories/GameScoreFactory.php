<?php

    use App\Game;
    use App\GameScore;
    use App\User;
    use Faker\Generator as Faker;
    use Illuminate\Database\Eloquent\Factory;

    /**
     * @var Factory $factory
     */
    $factory->define(GameScore::class,
        function(Faker $faker) {
            return [
                'game_id' => Game::all()->random()->game_id,
                'user_id' => User::all()->random()->id,
                'score'   => rand(1, 5),
            ];
            /*
             * May throw an exception if tuple already exists
             */
        });
