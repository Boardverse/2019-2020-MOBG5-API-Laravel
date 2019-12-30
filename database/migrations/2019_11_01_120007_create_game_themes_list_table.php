
<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateGameThemesListTable extends Migration {

        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up() {
            Schema::create('game_themes_list', function (Blueprint $table) {
                $table->bigIncrements('id');

                $table->bigInteger('game_id')->unsigned();
                $table->foreign('game_id')->references('game_id')->on('games');
                $table->bigInteger('game_theme_id')->unsigned();
                $table->foreign('game_theme_id')->references('game_theme_id')->on('game_themes');

                $table->unique(['game_id', 'game_theme_id']);
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down() {
            Schema::dropIfExists('game_themes_list');
        }

    }
