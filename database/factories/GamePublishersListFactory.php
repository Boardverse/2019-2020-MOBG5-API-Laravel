<?php

    use App\Game;
    use App\GamePublisher;
    use App\GamePublishersList;
    use Faker\Generator as Faker;
    use Illuminate\Database\Eloquent\Factory;

    /**
     * @var Factory $factory
     */
    $factory->define(GamePublishersList::class,
        function(Faker $faker) {
            return [
                'game_id'           => Game::all()->random()->game_id,
                'game_publisher_id' => GamePublisher::all()->random()->game_publisher_id,
            ];
            /*
             * May throw an exception if tuple already exists
             */
        });
