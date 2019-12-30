<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    /**
     * Represents a game's description
     */
    class GameDescription extends Model {

        protected $table = 'game_descriptions';

        protected $primaryKey = 'id';

        public $incrementing = true;

        public $timestamps = false;

        protected $attributes = [
            'game_id' => NULL,
            'language_id' => NULL,

            'game_description' => NULL,
        ];

        protected $fillable = [
            'game_id',
            'language_id',

            'game_description',
        ];

        protected $visible = [
            'game_description',
        ];

    }
