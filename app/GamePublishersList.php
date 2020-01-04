<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class GamePublishersList extends Model {

        protected $table = 'game_publishers_list';

        protected $primaryKey = 'id';

        public $incrementing = true;

        public $timestamps = false;

        protected $attributes = [
            'game_id' => NULL,
            'game_publisher_id' => NULL,
        ];

        protected $fillable = [
            'game_id',
            'game_publisher_id',
        ];

        protected $hidden = [
            'id',
            'game_id',
        ];

        protected $appends = [
            'game_publisher_name',
        ];

        public function getPublisherAttribute() {
            return $this->hasOne('App\GamePublisher', 'game_publisher_id', 'game_publisher_id')->get()->first();
        }

        public function getGamePublisherNameAttribute() {
            return $this->hasOne('App\GamePublisher', 'game_publisher_id', 'game_publisher_id')->get()->first()->game_publisher_name;
        }

        public function getGameAttribute() {
            return $this->hasOne('App\Game', 'game_id', 'game_id')->get()->first()->minGame;
        }

    }
