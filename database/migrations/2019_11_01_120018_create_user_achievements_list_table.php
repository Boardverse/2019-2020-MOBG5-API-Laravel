<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateUserAchievementsListTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('user_achievements_list', function (Blueprint $table) {
                $table->bigIncrements('id');

                $table->bigInteger('user_id')->unsigned();
                $table->foreign('user_id')->references('user_id')->on('users');
                $table->bigInteger('user_achievement_id')->unsigned();
                $table->foreign('user_achievement_id')->references('user_achievement_id')->on('user_achievements');
                $table->unique(['user_id', 'user_achievement_id']);

                $table->bigInteger('user_achievement_timestamp')->unsigned();
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('user_achievements_list');
        }
    }
