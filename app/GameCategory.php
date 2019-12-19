<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    /**
     * Represents a game's category
     */
    class GameCategory extends Model {

        protected $table = 'game_categories';

        protected $primaryKey = 'id';

        public $incrementing = true;

        public $timestamps = false;

        protected $attributes = [
            'game_category_id' => NULL,
            'language_id' => NULL,

            'game_category_name' => NULL,
        ];

        protected $fillable = [
            'game_category_id',
            'language_id',

            'game_category_name',
        ];

    }
