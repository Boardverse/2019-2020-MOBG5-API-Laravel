<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateUserAchievementsTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('user_achievements', function (Blueprint $table) {
                $table->unsignedInteger('id')->primary();

                $table->unsignedInteger('user_achievement_id');
                $table->string('language_id');
                $table->foreign('language_id')->references('language_id')->on('languages');
                $table->unique(['user_achievement_id', 'language_id']);

                $table->string('user_achievement_name');
                $table->string('user_achievement_description');
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('user_achievements');
        }
    }
