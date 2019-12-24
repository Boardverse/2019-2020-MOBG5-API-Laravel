<?php

    use App\GameAuthor;
    use Faker\Generator as Faker;
    use Illuminate\Database\Eloquent\Factory;

    /**
     * @var Factory $factory
     */
    $factory->define(GameAuthor::class,
        function(Faker $faker) {
            return [
                'game_author_name' => $faker->firstName . ' ' . $faker->lastName,
            ];
        });
