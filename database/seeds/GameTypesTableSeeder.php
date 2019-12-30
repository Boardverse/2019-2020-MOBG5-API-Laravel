<?php

    use App\GameType;
    use Illuminate\Database\Seeder;

	class GameTypesTableSeeder extends Seeder {

		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run() {
			factory(GameType::class, 100)->create();
		}
	}
