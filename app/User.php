<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Notifications\Notifiable;

    class User extends Model {
        use Notifiable;

        protected $table = 'users';

        protected $primaryKey = 'user_id';

        public $incrementing = true;

        public $timestamps = false;

        protected $attributes = [
            'user_name' => NULL,
            'user_icon_url' => NULL,
            'user_email' => NULL,
            'user_password' => NULL,
            'joined_timestamp' => NULL,
        ];

        protected $fillable = [
            'user_name',
            'user_icon_url',
            'user_email',
            'user_password',
            'token',
            'joined_timestamp',
        ];

        protected $hidden = [
            'user_email',
            'user_password',
            'token',
            'joined_timestamp',
        ];

        protected $appends = [
            'games_owned',
            'games_reviewed',
            'games_wishlisted',
            'games_played',
        ];

        public function getGamesOwnedAttribute() {
            return $this->hasMany('App\UserCollection', 'user_id', 'user_id')->count();
        }

        public function getGamesReviewedAttribute() {
            return $this->hasMany('App\GameScore', 'user_id', 'user_id')->count();
        }

        public function getGamesWishlistedAttribute() {
            return $this->hasMany('App\UserWishlist', 'user_id', 'user_id')->count();
        }

        public function getGamesPlayedAttribute() {
            return $this->hasMany('App\UserPlayed', 'user_id', 'user_id')->count();
        }

        public function minUser() {
            return $this->hasOne('App\MinUser', 'user_id', 'user_id');
        }

        public function getFriendsAttribute() {
            return $this->hasMany('App\UserFriend', 'user_id', 'user_id')->get()->map(function($item) { return $item->friend; });
        }

        public function getCollectionAttribute() {
            return $this->hasMany('App\UserCollection', 'user_id', 'user_id')->get()->map(function($item) { return $item->game; });
        }

        public function getReviewsAttribute() {
            return $this->hasMany('App\GameScore', 'user_id', 'user_id')->get();
        }

        public function getReviewedAttribute() {
            return $this->hasMany('App\GameScore', 'user_id', 'user_id')->get()->map(function($item) { return $item->game; });
        }

        public function getPlayedAttribute() {
            return $this->hasMany('App\UserPlayed', 'user_id', 'user_id')->get()->map(function($item) { return $item->game; });
        }

        public function getWishlistAttribute() {
            return $this->hasMany('App\UserWishlist', 'user_id', 'user_id')->get()->map(function($item) { return $item->game; });
        }

        public function getAchievementsAttribute() {
            return $this->hasMany('App\UserAchievementsList', 'user_id', 'user_id')->get();
        }

        // TODO
        public function getActivityAttribute() {
            return [];
        }

        public function getFriendsLovingAttribute() {
            return $this->hasMany('App\UserFriend', 'user_id', 'user_id')->get()->map(function($item) { return $item->firend->loving; });
        }

    }
