<?php

    use App\GameAwardsList;
    use Illuminate\Database\Seeder;

	class GameAwardsListTableSeeder extends Seeder {

		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run() {
			factory(GameAwardsList::class, 50)->create();
		}
	}
