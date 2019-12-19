<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateGameScoresTable extends Migration {

        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up() {
            Schema::create('game_scores', function (Blueprint $table) {
                $table->unsignedInteger('id')->primary();

                $table->unsignedInteger('game_id');
                $table->foreign('game_id')->references('game_id')->on('games');
                $table->bigInteger('user_id')->unsigned();
                $table->foreign('user_id')->references('id')->on('users');
                $table->unsignedInteger('score');

                $table->unique(['game_id', 'user_id']);
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down() {
            Schema::dropIfExists('game_scores');
        }

    }
