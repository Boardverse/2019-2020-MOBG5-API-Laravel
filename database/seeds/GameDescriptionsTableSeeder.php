<?php

    use App\GameDescription;
    use Illuminate\Database\Seeder;

	class GameDescriptionsTableSeeder extends Seeder {

		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run() {
			factory(GameDescription::class, 50)->create();
		}
	}
