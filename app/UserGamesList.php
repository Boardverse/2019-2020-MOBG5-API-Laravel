<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class UserGamesList extends Model {

        protected $table = 'user_games_list';

        protected $primaryKey = 'id';

        public $incrementing = true;

        public $timestamps = false;

        protected $attributes = [
            'user_id' => NULL,
            'game_id' => NULL,

            'game_added_timestamp' => NULL,
        ];

        protected $fillable = [
            'user_id',
            'game_id',

            'game_added_timestamp',
        ];

        public function getGameAttribute() {
            return $this->hasOne('App\Game', 'game_id', 'game_id')->get()->first()->minGame;
        }

        public function getUserAttribute() {
            return $this->hasOne('App\User', 'id', 'user_id');
        }

    }
