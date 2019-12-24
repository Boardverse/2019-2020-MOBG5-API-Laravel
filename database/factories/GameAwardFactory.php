<?php

    use App\GameAward;
    use Faker\Generator as Faker;
    use Illuminate\Database\Eloquent\Factory;

    /**
     * @var Factory $factory
     */
    $factory->define(GameAward::class,
        function(Faker $faker) {
            return [
                'game_author_name' => $faker->firstName . ' ' . $faker->lastName,
            ];
        });
