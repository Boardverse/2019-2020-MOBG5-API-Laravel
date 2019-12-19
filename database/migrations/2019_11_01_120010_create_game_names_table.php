<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateGameNamesTable extends Migration {

        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up() {
            Schema::create('game_names', function (Blueprint $table) {
                $table->unsignedInteger('id')->primary();

                $table->unsignedInteger('game_id');
                $table->foreign('game_id')->references('game_id')->on('games');
                $table->string('language_id');
                $table->foreign('language_id')->references('language_id')->on('languages');
                $table->string('game_name');

                $table->unique(['game_id', 'language_id']);
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down() {
            Schema::dropIfExists('game_names');
        }

    }
