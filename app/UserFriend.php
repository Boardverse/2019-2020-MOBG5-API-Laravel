<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class UserFriend extends Model {

        protected $table = 'user_friends';

        protected $primaryKey = 'id';

        public $incrementing = true;

        public $timestamps = false;

        protected $attributes = [
            'user_id' => NULL,
            'friend_id' => NULL,
        ];

        protected $fillable = [
            'user_id',
            'friend_id',
        ];

        public function getFriendAttribute() {
            return $this->hasOne('App\User', 'user_id', 'friend_id')->get()->first()->minUser;
        }
    }
