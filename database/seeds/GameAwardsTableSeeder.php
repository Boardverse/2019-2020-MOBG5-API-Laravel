<?php

    use App\GameAward;
    use Illuminate\Database\Seeder;

	class GameAwardsTableSeeder extends Seeder {

		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run() {
			factory(GameAward::class, 50)->create();
		}
	}
