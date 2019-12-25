<?php

    use App\User;
    use App\UserAchievement;
    use App\UserAchievementsList;
    use Faker\Generator as Faker;
    use Illuminate\Database\Eloquent\Factory;

    /**
     * @var Factory $factory
     */
    $factory->define(UserAchievementsList::class,
        function(Faker $faker) {
            return [
                'user_id'                    => User::all()->random()->id,
                'user_achievement_id'        => UserAchievement::all()->random()->user_achievement_id,
                'user_achievement_timestamp' => time() * 1000,
            ];
            /*
             * May throw an exception if tuple already exists
             */
        });
