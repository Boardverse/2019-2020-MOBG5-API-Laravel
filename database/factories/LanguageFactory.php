<?php

    use App\Language;
    use Faker\Generator as Faker;
    use Illuminate\Database\Eloquent\Factory;

    /**
     * @var Factory $factory
     */
    $factory->define(Language::class,
        function(Faker $faker) {

            $lang = strtolower($faker->lexify(str_repeat('?', random_int(2, 10))));

            return [
                'language_id' => substr($lang, 0, 2),
                'in_language_id' => Language::all()->count() ? Language::all()->random()->language_id : 'fr',
                'language_name' => $lang,
            ];
            /*
             * May throw an exception if tuple already exists
             */
        });
