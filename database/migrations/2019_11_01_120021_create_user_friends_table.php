<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateUserFriendsTable extends Migration {

        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up() {
            Schema::create('user_friends', function (Blueprint $table) {
                $table->bigIncrements('id');

                $table->bigInteger('user_id')->unsigned();
                $table->foreign('user_id')->references('user_id')->on('users');
                $table->bigInteger('friend_id')->unsigned();
                $table->foreign('friend_id')->references('user_id')->on('users');

                $table->unique(['friend_id', 'user_id']);
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down() {
            Schema::dropIfExists('user_friends');
        }

    }
