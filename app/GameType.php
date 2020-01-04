<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    /**
     * Represents a game's type
     */
    class GameType extends Model {

        protected $table = 'game_types';

        protected $primaryKey = 'id';

        public $incrementing = true;

        public $timestamps = false;

        protected $attributes = [
            'game_type_id' => NULL,
            'language_id' => NULL,

            'game_type_name' => NULL,
        ];

        protected $hidden = [
            'id',
            'language_id',
        ];

        protected $fillable = [
            'game_type_id',
            'language_id',

            'game_type_name',
        ];

        public function getGamesAttribute() {
            return $this->hasMany('App\GameTypesList', 'game_type_id', 'game_type_id')->get()->map(function($item) { return $item->game; });
        }

    }
