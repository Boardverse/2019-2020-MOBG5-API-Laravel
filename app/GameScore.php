<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class GameScore extends Model {

        protected $table = 'game_scores';

        protected $primaryKey = 'id';

        public $incrementing = true;

        public $timestamps = false;

        protected $attributes = [
            'game_id' => NULL,
            'user_id' => NULL,

            'game_score' => NULL,
        ];

        protected $hidden = [
            'id',
            'user_id',
        ];

        protected $fillable = [
            'game_id',
            'user_id',

            'game_score',
        ];

    }
