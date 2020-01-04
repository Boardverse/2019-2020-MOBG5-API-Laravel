<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    /**
     * Represents a game's theme
     */
    class GameTheme extends Model {

        protected $table = 'game_themes';

        protected $primaryKey = 'id';

        public $incrementing = true;

        public $timestamps = false;

        protected $attributes = [
            'game_theme_id' => NULL,
            'language_id' => NULL,

            'game_theme_name' => NULL,
        ];

        protected $hidden = [
            'id',
            'language_id',
        ];

        protected $fillable = [
            'game_theme_id',
            'language_id',

            'game_theme_name',
        ];

        public function getGamesAttribute() {
            return $this->hasMany('App\GameThemesList', 'game_theme_id', 'game_theme_id')->get()->map(function($item) { return $item->game; });
        }

    }
