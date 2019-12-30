<?php

    use App\User;
    use App\UserFriend;
    use App\UserGamesList;
    use Faker\Generator as Faker;
    use Illuminate\Database\Eloquent\Factory;

    /**
     * @var Factory $factory
     */
    $factory->define(UserFriend::class,
        function(Faker $faker) {
            $user_id = User::all()->random()->user_id;
            return [
                'user_id' => $user_id,
                'friend_id' => User::all()->whereNotIn('user_id', [$user_id])->random()->user_id,
            ];
            /*
             * May throw an exception if tuple already exists
             */
        });
