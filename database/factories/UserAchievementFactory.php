<?php

    use App\UserAchievement;
    use Faker\Generator as Faker;
    use Illuminate\Database\Eloquent\Factory;
    use Illuminate\Support\Facades\DB;

    /**
     * @var Factory $factory
     */
    $factory->define(UserAchievement::class,
        function(Faker $faker) {
            return [
                'user_achievement_id'          => $faker->randomNumber(),
                'language_id'                  => DB::table('languages')->select('language_id')->distinct()->get()->random()->language_id,
                'user_achievement_name'        => $faker->word,
                'user_achievement_description' => $faker->sentence,
            ];
            /*
             * May throw an exception if tuple already exists
             */
        });
