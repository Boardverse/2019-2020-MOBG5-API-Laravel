<?php

    use App\GameTypesList;
    use Illuminate\Database\Seeder;

	class GameTypesListTableSeeder extends Seeder {

		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run() {
			factory(GameTypesList::class, 50)->create();
		}
	}
