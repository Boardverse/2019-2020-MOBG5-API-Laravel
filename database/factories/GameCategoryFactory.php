<?php

    use App\GameCategory;
    use Faker\Generator as Faker;
    use Illuminate\Database\Eloquent\Factory;
    use Illuminate\Support\Facades\DB;

    /**
     * @var Factory $factory
     */
    $factory->define(GameCategory::class,
        function(Faker $faker) {
            return [
                'game_category_id'   => $faker->randomNumber(),
                'language_id'        => DB::table('languages')->select('language_id')->distinct()->get()->random()->language_id,
                'game_category_name' => $faker->word,
            ];
            /*
             * May throw an exception if tuple already exists
             */
        });
