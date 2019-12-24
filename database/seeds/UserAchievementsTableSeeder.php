<?php

    use App\UserAchievement;
    use Illuminate\Database\Seeder;

	class UserAchievementsTableSeeder extends Seeder {

		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run() {
			factory(UserAchievement::class, 50)->create();
		}
	}
