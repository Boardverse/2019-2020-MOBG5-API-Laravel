<?php

    use App\GameThemesList;
    use Illuminate\Database\Seeder;

	class GameThemesListTableSeeder extends Seeder {

		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run() {
			factory(GameThemesList::class, 50)->create();
		}
	}
