<?php

    use App\UserGamesList;
    use Illuminate\Database\Seeder;

	class UserGamesListTableSeeder extends Seeder {

		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run() {
			factory(UserGamesList::class, 50)->create();
		}
	}
