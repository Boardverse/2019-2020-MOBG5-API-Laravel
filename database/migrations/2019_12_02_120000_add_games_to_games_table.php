<?php

    use App\Game;
    use App\GameAuthor;
    use App\GameAuthorsList;
    use App\GameAward;
    use App\GameAwardsList;
    use App\GameDescription;
    use App\GameLanguagesList;
    use App\GameName;
    use App\GamePicture;
    use App\GamePublisher;
    use App\GamePublishersList;
    use App\GameTheme;
    use App\GameThemesList;
    use App\GameType;
    use App\GameTypesList;
    use App\Language;
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Support\Facades\DB;

    class AddGamesToGamesTable extends Migration {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up() {
            $game_id = Game::create([
                'game_thumbnail_url' => 'https://cf.geekdo-images.com/itemrep/img/-34rq3lVq_zTP9_pzUnZ0pfQFXE=/fit-in/246x300/pic3763073.jpg',
                'game_publishing_date' => 1237939200000,
                'game_min_player' => 2,
                'game_recommended_player' => NULL,
                'game_max_player' => 5,
                'game_min_duration' => 30,
                'game_average_duration' => NULL,
                'game_max_duration' => 45,
                'game_min_age' => 8,
                'game_recommended_age' => NULL,
                'game_max_age' => NULL,
            ]);
            $authors = [
                'Bruno Cathala',
                'Ludovic Maublanc',
            ];
            foreach($authors as $author) {
                $author_id = GameAuthor::firstOrCreate(['game_author_name' => $author], ['game_author_name' => $author]);
                $author_id->save();
                GameAuthorsList::create([
                    'game_id' => $game_id->game_id,
                    'game_author_id' => $author_id->game_author_id,
                ]);
            }
            $awards = [
                ['name' => 'Lys Grand Public Winner', 'year' => 2010],
                ['name' => 'Lys Grand Public Finalist', 'year' => 2010],
                ['name' => 'Golden Geek Best Party Board Game Nominee', 'year' => 2010],
                ['name' => 'Boardgames Australia Awards Best International Game Winner', 'year' => 2010],
                ['name' => 'Tric Trac Nominee', 'year' => 2009],
                ['name' => 'Juego del Año Finalist', 'year' => 2009],
                ['name' => 'Golden Geek Best Party Board Game Nominee', 'year' => 2009],
            ];
            foreach($awards as $award) {
                $award = (object) $award;
                $award_id = GameAward::firstOrCreate(['game_award_name' => $award->name], ['game_award_name' => $award->name]);
                $award_id->save();
                GameAwardsList::create([
                    'game_award_id' => $award_id->game_award_id,
                    'game_id' => $game_id->game_id,
                    'game_award_year' => $award->year,
                ]);
            }
            GameDescription::create([
                'game_id' => $game_id->game_id,
                'language_id' => 'fr',
                'game_description' => 'Quelque part dans l\'ouest sauvage américain... Une mine d’or, des terrains particulièrement propices à l\'élevage du bétail, il n\'en fallait pas plus pour attirer des aventuriers de tous poils. Une petite ville s\'est vite constituée à proximité de ces lieux attractifs. Mais qui va être suffisamment malin pour en prendre le contrôle ? Étranger, si tu n’es pas un pied-tendre, tente ta chance ou passe ton chemin !',
            ]);
            $names = [
                ['code' => 'de', 'name' => 'Allemand', 'title' => 'Dice Town'],
                ['code' => 'en', 'name' => 'Anglais', 'title' => 'Dice Town'],
                ['code' => 'fr', 'name' => 'Français', 'title' => 'Dice Town'],
                ['code' => 'nl', 'name' => 'Néerlandais', 'title' => 'Dice Town'],
                ['code' => 'cz', 'name' => 'Tchèque', 'title' => 'Dice Town'],
                ['code' => 'it', 'name' => 'Italien', 'title' => 'Dice Town'],
                ['code' => 'sp', 'name' => 'Espagnol', 'title' => 'Dice Town'],
                ['code' => 'gr', 'name' => 'Grec', 'title' => 'Dice Town'],
            ];
            foreach($names as $name) {
                $name = (object) $name;
                $lang_id = Language::firstOrCreate(['language_id' => $name->code], ['language_id' => $name->code, 'in_language_id' => 'fr', 'language_name' => $name->name]);
                $lang_id->save();
                GameLanguagesList::create([
                    'game_id' => $game_id->game_id,
                    'language_id' => $lang_id->language_id,
                ]);
                GameName::create([
                   'game_id' => $game_id->game_id,
                   'language_id' => $lang_id->language_id,
                   'game_name' => $name->title,
                ]);
            }
            $game_pictures = [
                'https://cf.geekdo-images.com/imagepage/img/3YVEhGepJ3JAqOoxAMpSwNDbCyM=/fit-in/900x600/filters:no_upscale()/pic453451.jpg',
                'https://cf.geekdo-images.com/imagepage/img/-0uiYat0TTVNYNY_WILDBlU10g0=/fit-in/900x600/filters:no_upscale()/pic447918.jpg',
                'https://cf.geekdo-images.com/imagepage/img/NI3C4jk8rgeojLFlvjBG0tYu8E8=/fit-in/900x600/filters:no_upscale()/pic544558.jpg',
                'https://cf.geekdo-images.com/imagepage/img/SMmTXTQXmeXDsK1jz3Hqsj1rVEM=/fit-in/900x600/filters:no_upscale()/pic494227.jpg',
            ];
            foreach($game_pictures as $picture) {
                GamePicture::create([
                    'game_id' => $game_id->game_id,
                    'game_picture_url' => $picture,
                ]);
            }
            $publishers = [
                'Matagot',
                'Asmodee',
                'Asterion Press',
                'Board Game Box',
                'Giochix.it',
                'Kaissa Chess & Games',
                'REXhry',
                'Surfin\' Meeple China',
            ];
            foreach($publishers as $publisher) {
                $publisher_id = GamePublisher::firstOrCreate(['game_publisher_name' => $publisher], ['game_publisher_name' => $publisher]);
                $publisher_id->save();
                GamePublishersList::create([
                    'game_id' => $game_id->game_id,
                    'game_publisher_id' => $publisher_id->game_publisher_id,
                ]);
            }
            $themes = [
                ['code' => 'fr', 'theme' => 'Far West'],
            ];
            foreach($themes as $theme) {
                $theme = (object) $theme;
                $theme_id = GameTheme::firstOrCreate(['language_id' => $theme->code, 'game_theme_name' => $theme->theme], ['game_theme_id' => GameTheme::max('game_theme_id') + 1,'language_id' => $theme->code, 'game_theme_name' => $theme->theme]);
                $theme_id->save();
                GameThemesList::create([
                    'game_id' => $game_id->game_id,
                    'game_theme_id' => $theme_id->game_theme_id,
                ]);
            }
            $types = [
                ['code' => 'fr', 'type' => 'Dé'],
                ['code' => 'fr', 'type' => 'Chance'],
                ['code' => 'fr', 'type' => 'Hasard'],
            ];
            foreach($types as $type) {
                $type = (object) $type;
                $type_id = GameType::firstOrCreate(['language_id' => $type->code, 'game_type_name' => $type->type], ['game_type_id' => GameType::max('game_type_id') + 1,'language_id' => $type->code, 'game_type_name' => $type->type]);
                $type_id->save();
                GameTypesList::create([
                    'game_id' => $game_id->game_id,
                    'game_type_id' => $type_id->game_type_id,
                ]);
            }
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down() {
        }

    }
