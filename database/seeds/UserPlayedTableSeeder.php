<?php

    use App\UserPlayed;
    use Illuminate\Database\Seeder;

	class UserPlayedTableSeeder extends Seeder {

		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run() {
			factory(UserPlayed::class, 50)->create();
		}
	}
