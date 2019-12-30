<?php

    use App\UserWishlist;
    use Illuminate\Database\Seeder;

	class UserWishlistsTableSeeder extends Seeder {

		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run() {
			factory(UserWishlist::class, 50)->create();
		}
	}
