<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    /**
     * Represents a game's award
     */
    class GameAward extends Model {

        protected $table = 'game_awards';

        protected $primaryKey = 'game_award_id';

        public $incrementing = true;

        public $timestamps = false;

        protected $attributes = [
            'game_award_id' => NULL,
            'game_award_name' => NULL,
        ];

        protected $fillable = [
            'game_award_id',
            'game_award_name',
        ];

    }
