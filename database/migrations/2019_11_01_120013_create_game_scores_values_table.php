<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Schema;

    class CreateGameScoresValuesTable extends Migration {

        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up() {
            Schema::create('game_scores_values', function (Blueprint $table) {
                $table->bigIncrements('game_scores_value');
            });

            DB::table('game_scores_values')->insert([
                ['game_scores_value' => 1],
                ['game_scores_value' => 2],
                ['game_scores_value' => 3],
                ['game_scores_value' => 4],
                ['game_scores_value' => 5],
            ]);
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down() {
            Schema::dropIfExists('game_scores_values');
        }

    }
