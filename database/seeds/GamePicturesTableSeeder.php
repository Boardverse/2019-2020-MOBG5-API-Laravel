<?php

    use App\GamePicture;
    use Illuminate\Database\Seeder;

	class GamePicturesTableSeeder extends Seeder {

		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run() {
			factory(GamePicture::class, 100)->create();
		}
	}
