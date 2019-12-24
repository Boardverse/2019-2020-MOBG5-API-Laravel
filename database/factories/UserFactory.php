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
            return [
                'name'              => $faker->name,
                'email'             => $faker->unique()->safeEmail,
                'email_verified_at' => now(),
                'password'          => Hash::make($faker->unique()->password),
                'remember_token'    => Str::random(10),
            ];
        });
