<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class GameThemesList extends Model {

        protected $table = 'game_themes_list';

        protected $primaryKey = 'id';

        public $incrementing = true;

        public $timestamps = false;

        protected $attributes = [
            'game_id' => NULL,
            'game_theme_id' => NULL,
        ];

        protected $fillable = [
            'game_id',
            'game_theme_id',
        ];

        protected $visible = [
            'game_theme_name',
            'game_theme_id',
        ];

        protected $appends = [
            'game_theme_name',
        ];

        public function getGameThemeNameAttribute() {
            return $this->hasOne('App\GameTheme', 'game_theme_id', 'game_theme_id')->get()->first()->game_theme_name;
        }

    }
