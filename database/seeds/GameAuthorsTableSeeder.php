<?php

    use App\GameAuthor;
    use Illuminate\Database\Seeder;

	class GameAuthorsTableSeeder extends Seeder {

		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run() {
			factory(GameAuthor::class, 100)->create();
		}
	}
