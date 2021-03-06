<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateGameAwardsListTable extends Migration {

        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up() {
            Schema::create('game_awards_list', function (Blueprint $table) {
                $table->bigIncrements('id');

                $table->bigInteger('game_award_id')->unsigned();
                $table->foreign('game_award_id')->references('game_award_id')->on('game_awards');
                $table->bigInteger('game_id')->unsigned();
                $table->foreign('game_id')->references('game_id')->on('games');
                $table->bigInteger('game_award_year')->unsigned();

                $table->unique(['game_award_id', 'game_id', 'game_award_year']);
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down() {
            Schema::dropIfExists('game_awards_list');
        }

    }
