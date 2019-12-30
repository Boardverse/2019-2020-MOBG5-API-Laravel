<?php

    use App\Game;
    use App\User;
    use App\UserGamesList;
    use Faker\Generator as Faker;
    use Illuminate\Database\Eloquent\Factory;

    /**
     * @var Factory $factory
     */
    $factory->define(UserGamesList::class,
        function(Faker $faker) {
            return [
                'user_id' => User::all()->random()->user_id,
                'game_id' => Game::all()->random()->game_id,
                'game_added_timestamp' => time() * 1000,
            ];
            /*
             * May throw an exception if tuple already exists
             */
        });
