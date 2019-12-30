<?php

    use App\Game;
    use App\GameScore;
    use App\User;
    use Faker\Generator as Faker;
    use Illuminate\Database\Eloquent\Factory;
    use Illuminate\Support\Facades\DB;

    /**
     * @var Factory $factory
     */
    $factory->define(GameScore::class,
        function(Faker $faker) {
            return [
                'game_id'    => Game::all()->random()->game_id,
                'user_id'    => User::all()->random()->user_id,
                'game_score' => DB::table('game_scores_values')->get()->random()->game_scores_value,
            ];
            /*
             * May throw an exception if tuple already exists
             */
        });
