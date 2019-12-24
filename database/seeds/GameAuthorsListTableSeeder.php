<?php

    use App\GameAuthorsList;
    use Illuminate\Database\Seeder;

	class GameAuthorsListTableSeeder extends Seeder {

		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run() {
			factory(GameAuthorsList::class, 50)->create();
		}
	}
