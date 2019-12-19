<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateGameTypesTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('game_types', function (Blueprint $table) {
                $table->unsignedInteger('id')->primary();

                $table->unsignedInteger('game_type_id');
                $table->string('language_id');
                $table->foreign('language_id')->references('language_id')->on('languages');
                $table->unique(['game_type_id', 'language_id']);

                $table->string('game_type_name');
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('game_types');
        }
    }
