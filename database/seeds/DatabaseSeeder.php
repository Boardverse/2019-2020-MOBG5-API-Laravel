<?php

    use Illuminate\Database\Seeder;

    class DatabaseSeeder extends Seeder {

        /**
         * Seed the application's database.
         *
         * @return void
         */
        public function run() {
            $this->call(LanguagesTableSeeder::class);

            $this->call(UsersTableSeeder::class);
                $this->call(UserAchievementsTableSeeder::class);
                    $this->call(UserAchievementsListTableSeeder::class);


            $this->call(GamesTableSeeder::class);

                $this->call(GameAuthorsTableSeeder::class);
                    $this->call(GameAuthorsListTableSeeder::class);

                $this->call(GameAwardsTableSeeder::class);
                    $this->call(GameAwardsListTableSeeder::class);

                $this->call(GameCategoriesTableSeeder::class);
                    $this->call(GameCategoriesListTableSeeder::class);

                $this->call(GameDescriptionsTableSeeder::class);

                $this->call(GameLanguagesListTableSeeder::class);

                $this->call(GameNamesTableSeeder::class);

                $this->call(GamePicturesTableSeeder::class);

                $this->call(GamePublishersTableSeeder::class);
                    $this->call(GamePublishersListTableSeeder::class);

                $this->call(GameScoresTableSeeder::class);

                $this->call(GameTypesTableSeeder::class);
                    $this->call(GameTypesListTableSeeder::class);

            $this->call(UserGamesListTableSeeder::class);
        }
    }
