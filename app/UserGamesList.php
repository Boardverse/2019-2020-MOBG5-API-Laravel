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

            'user_game_added_timestamp' => NULL,
        ];

        protected $fillable = [
            'user_id',
            'game_id',

            'user_game_added_timestamp',
        ];

        protected $with = [
            'games',
        ];

        protected $visible = [
            'games',
        ];

        public function games() {
            return $this->hasMany('App\Game', 'game_id', 'game_id');
        }

    }
