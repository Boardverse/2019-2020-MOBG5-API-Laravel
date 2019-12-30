<?php

    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB;

    class DatabaseSeeder extends Seeder {

        /**
         * Seed the application's database.
         *
         * @return void
         * @throws Exception
         */
        public function run() {
            $classes = [
                LanguagesTableSeeder::class,

                GamesTableSeeder::class,

                GameAuthorsTableSeeder::class,
                GameAuthorsListTableSeeder::class,

                GameAwardsTableSeeder::class,
                GameAwardsListTableSeeder::class,

                GameThemesTableSeeder::class,
                GameThemesListTableSeeder::class,

                GameDescriptionsTableSeeder::class,

                GameNamesTableSeeder::class,

                GamePicturesTableSeeder::class,

                GamePublishersTableSeeder::class,
                GamePublishersListTableSeeder::class,

                GameTypesTableSeeder::class,
                GameTypesListTableSeeder::class,

                GameLanguagesListTableSeeder::class,

                UsersTableSeeder::class,

                GameScoresTableSeeder::class,

                UserAchievementsTableSeeder::class,
                UserAchievementsListTableSeeder::class,

                UserCollectionTableSeeder::class,

                UserWishlistsTableSeeder::class,

                UserFriendsTableSeeder::class,
            ];

            foreach($classes as $class) {
                DB::beginTransaction();
                $i = 0;
                while(true){
                    try {
                        $this->call($class);
                        DB::commit();
                        break;
                    } catch(Exception $e) {
                        DB::rollBack();
                        $i++;
                        if($i > 5) {
                            throw $e;
                        }
                        sleep(1);
                        continue;
                    }
                }
            }

        }
    }
