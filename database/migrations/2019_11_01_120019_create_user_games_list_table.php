<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateUserGamesListTable extends Migration {

        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up() {
            Schema::create('user_games_list', function (Blueprint $table) {
                $table->unsignedInteger('id')->primary();

                $table->bigInteger('user_id')->unsigned();
                $table->foreign('user_id')->references('id')->on('users');
                $table->unsignedInteger('game_id');
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
            Schema::dropIfExists('user_games_list');
        }

    }
