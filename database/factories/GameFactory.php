<?php

    use App\Game;
    use Faker\Generator as Faker;
    use Illuminate\Database\Eloquent\Factory;

    /**
     * @var Factory $factory
     */
    $factory->define(Game::class,
        function(Faker $faker) {

            $game_min_player = rand(1, 5);
            $game_recommended_player = rand($game_min_player, $game_min_player + 5);
            $game_max_player = rand($game_recommended_player, $game_recommended_player + 5);
            $game_min_duration = round(rand(10, 45) / 5) * 5;
            $game_average_duration = round(rand($game_min_duration, $game_min_duration + 30) / 5) * 5;
            $game_max_duration = round(rand($game_average_duration, $game_average_duration + 30) / 5) * 5;
            $game_min_age = rand(5, 18);
            $game_recommended_age = rand($game_min_age, 40);
            $game_max_age = rand($game_recommended_age, 70);

            return [
                'game_thumbnail_url'      => $faker->url,
                'game_publishing_date'    => $faker->year,
                'game_min_player'         => $game_min_player,
                'game_recommended_player' => $game_recommended_player,
                'game_max_player'         => $game_max_player,
                'game_min_duration'       => $game_min_duration,
                'game_average_duration'   => $game_average_duration,
                'game_max_duration'       => $game_max_duration,
                'game_min_age'            => $game_min_age,
                'game_recommended_age'    => $game_recommended_age,
                'game_max_age'            => $game_max_age,
            ];
        });
