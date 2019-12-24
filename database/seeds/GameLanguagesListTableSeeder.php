<?php

    use App\GameLanguagesList;
    use Illuminate\Database\Seeder;

	class GameLanguagesListTableSeeder extends Seeder {

		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run() {
			factory(GameLanguagesList::class, 50)->create();
		}
	}
