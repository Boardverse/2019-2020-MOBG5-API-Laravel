<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class MinUser extends Model {
        protected $table = 'users';

        protected $primaryKey = 'user_id';

        public $incrementing = true;

        public $timestamps = false;

        protected $attributes = [
            'user_name' => NULL,
            'user_icon_url' => NULL,
        ];

        protected $hidden = [
            'user_email',
            'user_email_verified_at',
            'user_password',
            'remember_token',
        ];

        protected $fillable = [
            'user_name',
            'user_icon_url',
        ];

    }
