<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    /**
     * Represents a game's name
     */
    class GameName extends Model {

        protected $table = 'game_names';

        protected $primaryKey = 'id';

        public $incrementing = true;

        public $timestamps = false;

        protected $attributes = [
            'game_id' => NULL,
            'language_id' => NULL,

            'game_name' => NULL,
        ];

        protected $fillable = [
            'game_id',
            'language_id',

            'game_name',
		];

    }
