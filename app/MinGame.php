<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    /**
     * Represents a minimal board game
     */
    class MinGame extends Model {

        protected $table = 'games';

        protected $primaryKey = 'game_id';

        public $incrementing = true;

        public $timestamps = false;

        protected $attributes = [
            'game_name' => NULL,
            'game_thumbnail_url' => NULL,
        ];

        protected $fillable = [
        ];

        protected $appends = [
            'game_name',
            'game_score',
        ];

        protected $visible = [
            'game_id',
            'game_name',
            'game_thumbnail_url',
            'game_score',
        ];

        public function getGameNameAttribute() {
            $name = $this->hasOne('App\GameName', 'game_id', 'game_id')->get()->first();
            return isset($name) ? $name->game_name : NULL;
        }

        public function getGameScoreAttribute() {
            return $this->hasMany('App\GameScore', 'game_id', 'game_id')->average('game_score');
        }

    }
