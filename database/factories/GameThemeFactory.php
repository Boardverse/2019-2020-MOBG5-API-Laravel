<?php

    use App\GameTheme;
    use Faker\Generator as Faker;
    use Illuminate\Database\Eloquent\Factory;
    use Illuminate\Support\Facades\DB;

    /**
     * @var Factory $factory
     */
    $factory->define(GameTheme::class,
        function(Faker $faker) {
            return [
                'game_theme_id'   => $faker->randomNumber(),
                'language_id'        => DB::table('languages')->select('language_id')->distinct()->get()->random()->language_id,
                'game_theme_name' => 'Theme ' . $faker->word,
            ];
            /*
             * May throw an exception if tuple already exists
             */
        });
