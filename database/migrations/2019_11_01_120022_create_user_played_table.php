<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateUserPlayedTable extends Migration {

        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up() {
            Schema::create('user_played', function (Blueprint $table) {
                $table->bigIncrements('id');

                $table->bigInteger('user_id')->unsigned();
                $table->foreign('user_id')->references('user_id')->on('users');
                $table->bigInteger('game_id')->unsigned();
                $table->foreign('game_id')->references('game_id')->on('games');
                $table->unique(['user_id', 'game_id']);
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down() {
            Schema::dropIfExists('user_played');
        }

    }
