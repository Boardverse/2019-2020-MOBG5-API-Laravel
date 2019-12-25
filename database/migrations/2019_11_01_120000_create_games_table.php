<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateGamesTable extends Migration {

        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up() {
            Schema::create('games', function (Blueprint $table) {
                $table->bigIncrements('game_id');

                $table->string('game_thumbnail_url')->nullable();
                $table->bigInteger('game_publishing_date')->nullable()->unsigned();
                $table->bigInteger('game_min_player')->nullable()->unsigned();
                $table->bigInteger('game_recommended_player')->nullable()->unsigned();
                $table->bigInteger('game_max_player')->nullable()->unsigned();
                $table->bigInteger('game_min_duration')->nullable()->unsigned();
                $table->bigInteger('game_average_duration')->nullable()->unsigned();
                $table->bigInteger('game_max_duration')->nullable()->unsigned();
                $table->bigInteger('game_min_age')->nullable()->unsigned();
                $table->bigInteger('game_recommended_age')->nullable()->unsigned();
                $table->bigInteger('game_max_age')->nullable()->unsigned();
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down() {
            Schema::dropIfExists('games');
        }

    }
