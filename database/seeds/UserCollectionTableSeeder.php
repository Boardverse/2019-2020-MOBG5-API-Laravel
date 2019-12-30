<?php

    use App\UserCollection;
    use Illuminate\Database\Seeder;

	class UserCollectionTableSeeder extends Seeder {

		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run() {
			factory(UserCollection::class, 50)->create();
		}
	}
