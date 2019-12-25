<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateGameCategoriesTable extends Migration {

        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up() {
            Schema::create('game_categories', function (Blueprint $table) {
                $table->bigIncrements('id');

                $table->bigInteger('game_category_id')->unsigned();
                $table->string('language_id');
                $table->foreign('language_id')->references('language_id')->on('languages');
                $table->string('game_category_name');

                $table->unique(['game_category_id', 'language_id']);
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down() {
            Schema::dropIfExists('game_categories');
        }

    }
