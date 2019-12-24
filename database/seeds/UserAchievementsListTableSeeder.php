<?php

    use App\UserAchievementsList;
    use Illuminate\Database\Seeder;

	class UserAchievementsListTableSeeder extends Seeder {

		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run() {
			factory(UserAchievementsList::class, 50)->create();
		}
	}
