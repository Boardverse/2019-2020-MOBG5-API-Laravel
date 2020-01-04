<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class GameAuthorsList extends Model {

        protected $table = 'game_authors_list';

        protected $primaryKey = 'id';

        public $incrementing = true;

        public $timestamps = false;

        protected $attributes = [
            'game_id' => NULL,
            'game_author_id' => NULL,
        ];

        protected $fillable = [
            'game_id',
            'game_author_id',
        ];

        protected $hidden = [
            'id',
            'game_id',
        ];

        protected $appends = [
            'game_author',
        ];

        public function getGameAuthorAttribute() {
            return $this->hasOne('App\GameAuthor', 'game_author_id', 'game_author_id')->get()->first();
        }

        public function getGamesAttribute() {
            return $this->hasMany('App\Game', 'game_id', 'game_id')->get();
        }

    }
