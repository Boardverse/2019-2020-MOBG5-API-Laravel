<?php

    use App\UserFriend;
    use App\UserWishlist;
    use Illuminate\Database\Seeder;

    class UserFriendsTableSeeder extends Seeder {

        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run() {
            factory(UserFriend::class, 50)->create();
        }
    }
