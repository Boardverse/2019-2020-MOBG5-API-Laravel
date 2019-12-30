<?php

    use App\Game;
    use App\User;
    use App\UserGamesList;
    use App\UserWishlist;
    use Faker\Generator as Faker;
    use Illuminate\Database\Eloquent\Factory;

    /**
     * @var Factory $factory
     */
    $factory->define(UserWishlist::class,
        function(Faker $faker) {
            $user_id = User::all()->random()->user_id;
            $games_owned = UserGamesList::where('user_id', $user_id)->get()->map(function($item) { return $item->game_id; })->toArray();
            return [
                'game_id' => Game::whereNotIn('game_id', $games_owned)->get()->random()->game_id,
                'user_id' => $user_id,
            ];
            /*
             * May throw an exception if tuple already exists
             */
        });
