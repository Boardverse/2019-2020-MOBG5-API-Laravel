<?php

    use App\Game;
    use App\GamePicture;
    use Faker\Generator as Faker;
    use Illuminate\Database\Eloquent\Factory;

    /**
     * @var Factory $factory
     */
    $factory->define(GamePicture::class,
        function(Faker $faker) {
            return [
                'game_id'          => Game::all()->random()->game_id,
                'game_picture_url' => $faker->imageUrl(),
            ];
        });
