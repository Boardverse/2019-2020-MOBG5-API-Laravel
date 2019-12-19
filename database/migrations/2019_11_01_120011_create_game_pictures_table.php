<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateGamePicturesTable extends Migration {

        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up() {
            Schema::create('game_pictures', function (Blueprint $table) {
                $table->unsignedInteger('id')->primary();

                $table->unsignedInteger('game_id');
                $table->foreign('game_id')->references('game_id')->on('games');
                $table->string('game_picture_url');

                $table->unique(['game_id', 'game_picture_url']);
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down() {
            Schema::dropIfExists('game_pictures');
        }

    }
