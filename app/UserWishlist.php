<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class UserWishlist extends Model {

        protected $table = 'user_wishlists';

        protected $primaryKey = 'id';

        public $incrementing = true;

        public $timestamps = false;

        protected $attributes = [
            'game_id' => NULL,
            'user_id' => NULL,
        ];

        protected $fillable = [
            'game_id',
            'user_id',
        ];

        public function getGameAttribute() {
            return $this->hasOne('App\Game', 'game_id', 'game_id')->get()->first()->minGame;
        }

        public function getUserAttribute() {
            return $this->hasOne('App\User', 'id', 'user_id');
        }
    }
