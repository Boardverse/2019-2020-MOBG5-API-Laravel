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

        protected $visible = [
            'game_publisher_name',
        ];
    }
