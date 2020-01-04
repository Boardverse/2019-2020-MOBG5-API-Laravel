<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class GamePublisher extends Model {

        protected $table = 'game_publishers';

        protected $primaryKey = 'game_publisher_id';

        public $incrementing = true;

        public $timestamps = false;

        protected $attributes = [
            'game_publisher_id' => NULL,
            'game_publisher_name' => NULL,
        ];

        protected $fillable = [
            'game_publisher_id',
            'game_publisher_name',
        ];

        public function getGamesAttribute() {
            return $this->hasMany('App\GamePublishersList', 'game_publisher_id', 'game_publisher_id')->get()->map(function($item) { return $item->game; });
        }
    }
