<?php

    use App\GamePublishersList;
    use Illuminate\Database\Seeder;

	class GamePublishersListTableSeeder extends Seeder {

		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run() {
			factory(GamePublishersList::class, 50)->create();
		}
	}
