<?php

    use App\GameCategoriesList;
    use Illuminate\Database\Seeder;

	class GameCategoriesListTableSeeder extends Seeder {

		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run() {
			factory(GameCategoriesList::class, 50)->create();
		}
	}
