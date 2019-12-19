<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    /**
     * Represents the author of a game
     */
    class GameAuthor extends Model {

        protected $table = 'game_authors';

        protected $primaryKey = 'game_author_id';

        public $incrementing = true;

        public $timestamps = false;

        protected $attributes = [
            'game_author_name' => NULL,
        ];

        protected $fillable = [
            'game_author_name',
        ];

    }
