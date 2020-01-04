<?php

    use App\User;
    use Faker\Generator as Faker;
    use Illuminate\Database\Eloquent\Factory;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Str;

    /**
     * @var Factory $factory
     */
    $factory->define(User::class,
        function(Faker $faker) {
            $timestamp = rand(0, time() * 1000);
            return [
                'user_name'              => $faker->name,
                'user_icon_url'          => $faker->imageUrl(),
                'user_email'             => $faker->unique()->safeEmail,
                'user_password'          => hash('sha256', $faker->unique()->password . $timestamp),
                'token'                  => random_bytes(32),
                'joined_timestamp'       => $timestamp,
            ];
        });
