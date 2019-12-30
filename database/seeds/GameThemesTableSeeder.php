<?php

    use App\GameTheme;
    use Illuminate\Database\Seeder;

	class GameThemesTableSeeder extends Seeder {

		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run() {
			factory(GameTheme::class, 100)->create();
		}
	}
