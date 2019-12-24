<?php

    use App\GameCategory;
    use Illuminate\Database\Seeder;

	class GameCategoriesTableSeeder extends Seeder {

		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run() {
			factory(GameCategory::class, 50)->create();
		}
	}
