<?php

    use App\GameScore;
    use Illuminate\Database\Seeder;

	class GameScoresTableSeeder extends Seeder {

		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run() {
			factory(GameScore::class, 50)->create();
		}
	}
