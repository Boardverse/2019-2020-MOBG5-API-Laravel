<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class GameAwardsList extends Model {

        protected $table = 'game_awards_list';

        protected $primaryKey = 'id';

        public $incrementing = true;

        public $timestamps = false;

        protected $attributes = [
            'game_id' => NULL,
            'game_award_id' => NULL,
            'game_award_year' => NULL,
        ];

        protected $fillable = [
            'game_id',
            'game_award_id',
            'game_award_year',
        ];

        protected $hidden = [
            'id',
            'game_id',
            'game_award_id',
        ];

        protected $appends = [
            'game_award_name',
        ];

        public function getGameAwardNameAttribute() {
            return $this->hasOne('App\GameAward', 'game_award_id', 'game_award_id')->get()->first()->game_award_name;
        }

    }
