<?php

    use App\GamePublisher;
    use Illuminate\Database\Seeder;

	class GamePublishersTableSeeder extends Seeder {

		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run() {
			factory(GamePublisher::class, 50)->create();
		}
	}
