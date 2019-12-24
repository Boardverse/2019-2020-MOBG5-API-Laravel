<?php

    use App\Game;
    use App\GameAuthor;
    use Faker\Generator as Faker;
    use Illuminate\Database\Eloquent\Factory;

    /**
     * @var Factory $factory
     */
    $factory->define(GameAuthor::class,
        function(Faker $faker) {
            return [
                'game_id'        => Game::all()->random()->game_id,
                'game_author_id' => GameAuthor::all()->random()->game_author_id,
            ];
            /*
             * May throw an exception if tuple already exists
             */
        });
