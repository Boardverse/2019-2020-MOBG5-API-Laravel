<?php

    use App\Language;
    use Faker\Generator as Faker;
    use Illuminate\Database\Eloquent\Factory;

    /**
     * @var Factory $factory
     */
    $factory->define(Language::class,
        function(Faker $faker) {

            $lang = $faker->unique()->lexify('??');

            return [
                'language_id' => $lang,
                'in_language_id' => Language::all()->count() > 0 ? Language::all()->random()->language_id : 'fr',
                'language_name' => $lang . $faker->lexify(str_repeat('?', rand(1, 9))),
            ];
            /*
             * May throw an exception if tuple already exists
             */
        });
