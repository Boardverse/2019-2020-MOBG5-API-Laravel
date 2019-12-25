<?php

    use App\GameType;
    use Faker\Generator as Faker;
    use Illuminate\Database\Eloquent\Factory;
    use Illuminate\Support\Facades\DB;

    /**
     * @var Factory $factory
     */
    $factory->define(GameType::class,
        function(Faker $faker) {
            return [
                'game_type_id'   => $faker->randomNumber(),
                'language_id'    => DB::table('languages')->select('language_id')->distinct()->get()->random()->language_id,
                'game_type_name' => $faker->word,
            ];
            /*
             * May throw an exception if tuple already exists
             */
        });
