<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class GamePicture extends Model {

        protected $table = 'game_pictures';

        protected $primaryKey = 'id';

        public $incrementing = true;

        public $timestamps = false;

        protected $attributes = [
            'game_id' => NULL,
            'game_picture_url' => NULL,
        ];

        protected $fillable = [
            'game_id',
            'game_picture_url',
        ];

        protected $visible = [
            'game_picture_url',
        ];
    }
