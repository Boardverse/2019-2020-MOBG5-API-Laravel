<?php

    use App\Game;
    use Illuminate\Database\Seeder;

	class GamesTableSeeder extends Seeder {

		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run() {
			factory(Game::class, 100)->create();
		}
	}
