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
                $table->unsignedInteger('game_id')->primary();

                $table->string('game_thumbnail_url')->nullable();
                $table->unsignedInteger('game_publishing_date')->nullable();
                $table->unsignedInteger('game_min_player')->nullable();
                $table->unsignedInteger('game_recommended_player')->nullable();
                $table->unsignedInteger('game_max_player')->nullable();
                $table->unsignedInteger('game_min_duration')->nullable();
                $table->unsignedInteger('game_average_duration')->nullable();
                $table->unsignedInteger('game_max_duration')->nullable();
                $table->unsignedInteger('game_min_age')->nullable();
                $table->unsignedInteger('game_recommended_age')->nullable();
                $table->unsignedInteger('game_max_age')->nullable();
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
