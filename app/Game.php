<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    /**
     * Represents a board game
     */
    class Game extends Model {

        protected $table = 'games';

        protected $primaryKey = 'game_id';

        public $incrementing = true;

        public $timestamps = false;

        protected $attributes = [
            'game_thumbnail_url' => NULL,
            'game_publishing_date' => NULL,
            'game_min_player' => NULL,
            'game_recommended_player' => NULL,
            'game_max_player' => NULL,
            'game_min_duration' => NULL,
            'game_average_duration' => NULL,
            'game_max_duration' => NULL,
            'game_min_age' => NULL,
            'game_recommended_age' => NULL,
            'game_max_age' => NULL,
        ];

        protected $fillable = [
            'game_thumbnail_url',
            'game_publishing_date',
            'game_min_player',
            'game_recommended_player',
            'game_max_player',
            'game_min_duration',
            'game_average_duration',
            'game_max_duration',
            'game_min_age',
            'game_recommended_age',
            'game_max_age',
        ];

        protected $with = [
            'game_name',
            'game_types',
            'game_categories',
            'game_description',
            'game_score',
            'game_pictures',
            'game_publishers',
            'game_authors',
            'game_awards',
            'game_languages',
        ];

        public function game_name() {
            return $this->hasOne('App\GameName', 'game_id', 'game_id');
        }

        public function game_types() {
            return $this->hasMany('App\GameTypesList', 'game_id', 'game_id')->with('game_type_name');
        }

        public function game_categories() {
            return $this->hasMany('App\GameCategoriesList', 'game_id', 'game_id');
        }

        public function game_description() {
            return $this->hasOne('App\GameDescription', 'game_id', 'game_id');
        }

        public function game_score() {
            return $this->hasMany('App\GameScore', 'game_id', 'game_id');
        }

        public function game_pictures() {
            return $this->hasMany('App\GamePicture', 'game_id', 'game_id');
        }

        public function game_publishers() {
            return $this->hasMany('App\GamePublishersList', 'game_id', 'game_id');
        }

        public function game_authors() {
            return $this->hasMany('App\GameAuthorsList', 'game_id', 'game_id');
        }

        public function game_awards() {
            return $this->hasMany('App\GameAwardsList', 'game_id', 'game_id');
        }

        public function game_languages() {
            return $this->hasMany('App\GameLanguagesList', 'game_id', 'game_id');
        }

    }
