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

        protected $with = [
            'game_author_name',
        ];

        protected $visible = [
            'game_author_name',
        ];

        public function game_author_name() {
            return $this->hasOne('App\GameAuthor', 'game_author_id', 'game_author_id');
        }

    }
