<?php

    use App\Game;
    use App\GameAuthor;
    use App\GameAuthorsList;
    use App\GameAward;
    use App\GameName;
    use App\Language;
    use Illuminate\Database\Migrations\Migration;

    class AddLanguagesToLanguagesTable extends Migration {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up() {
            Language::create([
                'language_id' => 'fr',
                'in_language_id' => 'fr',
                'language_name' => 'Français',
            ]);
            Language::create([
                'language_id' => 'en',
                'in_language_id' => 'en',
                'language_name' => 'English',
            ]);
            Language::create([
                'language_id' => 'nl',
                'in_language_id' => 'nl',
                'language_name' => 'Nederlands',
            ]);

            Language::create([
                'language_id' => 'fr',
                'in_language_id' => 'en',
                'language_name' => 'French',
            ]);
            Language::create([
                'language_id' => 'fr',
                'in_language_id' => 'nl',
                'language_name' => 'Frans',
            ]);

            Language::create([
                'language_id' => 'en',
                'in_language_id' => 'fr',
                'language_name' => 'Anglais',
            ]);
            Language::create([
                'language_id' => 'en',
                'in_language_id' => 'nl',
                'language_name' => 'Engels',
            ]);

            Language::create([
                'language_id' => 'nl',
                'in_language_id' => 'fr',
                'language_name' => 'Néerlandais',
            ]);
            Language::create([
                'language_id' => 'nl',
                'in_language_id' => 'en',
                'language_name' => 'Dutch',
            ]);
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down() {
        }

    }
