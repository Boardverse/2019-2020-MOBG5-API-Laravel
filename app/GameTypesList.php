<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class GameTypesList extends Model {

        protected $table = 'game_types_list';

        protected $primaryKey = 'id';

        public $incrementing = true;

        public $timestamps = false;

        protected $attributes = [
            'game_id' => NULL,
            'game_type_id' => NULL,
        ];

        protected $fillable = [
            'game_id',
            'game_type_id',
        ];

        protected $visible = [
            'game_type_name',
            'game_type_id',
        ];

        protected $appends = [
            'game_type_name',
        ];

        public function getGameTYpeNameAttribute() {
            return $this->hasOne('App\GameType', 'game_type_id', 'game_type_id')->get()->first()->game_type_name;
        }
    }
