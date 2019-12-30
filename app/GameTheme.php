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

        protected $fillable = [
            'game_theme_id',
            'language_id',

            'game_theme_name',
        ];

        protected $visible = [
            'game_theme_name',
        ];

    }
