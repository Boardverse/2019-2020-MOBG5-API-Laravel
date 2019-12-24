<?php

    use App\GamePublisher;
    use Faker\Generator as Faker;
    use Illuminate\Database\Eloquent\Factory;

    /**
     * @var Factory $factory
     */
    $factory->define(GamePublisher::class,
        function(Faker $faker) {
            return [
                'game_publisher_name' => $faker->company,
            ];
        });
