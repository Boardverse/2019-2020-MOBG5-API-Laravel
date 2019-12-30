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
    }
