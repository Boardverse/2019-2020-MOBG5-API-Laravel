<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateGameAuthorsListTable extends Migration {

        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up() {
            Schema::create('game_authors_list', function (Blueprint $table) {
                $table->bigIncrements('id');

                $table->bigInteger('game_id')->unsigned();
                $table->foreign('game_id')->references('game_id')->on('games');
                $table->bigInteger('game_author_id')->unsigned();
                $table->foreign('game_author_id')->references('game_author_id')->on('game_authors');

                $table->unique(['game_id', 'game_author_id']);
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down() {
            Schema::dropIfExists('game_authors_list');
        }

    }
