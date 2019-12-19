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

        protected $with = [
            'game_publisher_name',
        ];

        protected $visible = [
            'game_publisher_name',
        ];

        public function game_publisher_name() {
            return $this->hasOne('App\GamePublisher', 'game_publisher_id', 'game_publisher_id');
        }
    }
