<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateLanguagesTable extends Migration {

        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up() {
            Schema::create('languages', function (Blueprint $table) {
                $table->bigIncrements('id');

                $table->string('language_id');
                $table->string('in_language_id');
                $table->unique(['language_id', 'in_language_id']);
                // $table->foreign('in_language_id')->references('language_id')->on('languages');
                $table->string('language_name');

            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down() {
            Schema::dropIfExists('languages');
        }

    }
