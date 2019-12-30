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

        protected $fillable = [
            'user_name',
            'user_icon_url',
        ];

        protected $visible = [
            'user_id',
            'user_name',
            'user_icon_url',
        ];

    }
