<?php

    use App\GameName;
    use Illuminate\Database\Seeder;

	class GameNamesTableSeeder extends Seeder {

		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run() {
			factory(GameName::class, 80)->create();
		}
	}
