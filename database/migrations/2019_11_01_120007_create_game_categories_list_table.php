
<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateGameCategoriesListTable extends Migration {

        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up() {
            Schema::create('game_categories_list', function (Blueprint $table) {
                $table->bigIncrements('id');

                $table->bigInteger('game_id')->unsigned();
                $table->foreign('game_id')->references('game_id')->on('games');
                $table->bigInteger('game_category_id')->unsigned();
                $table->foreign('game_category_id')->references('game_category_id')->on('game_categories');

                $table->unique(['game_id', 'game_category_id']);
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down() {
            Schema::dropIfExists('game_categories_list');
        }

    }
