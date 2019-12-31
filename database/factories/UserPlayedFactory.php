<?php

    use App\Game;
    use App\User;
    use App\UserPlayed;
    use Faker\Generator as Faker;
    use Illuminate\Database\Eloquent\Factory;

    /**
     * @var Factory $factory
     */
    $factory->define(UserPlayed::class,
        function(Faker $faker) {
            return [
                'user_id' => User::all()->random()->user_id,
                'game_id' => Game::all()->random()->game_id,
            ];
            /*
             * May throw an exception if tuple already exists
             */
        });
