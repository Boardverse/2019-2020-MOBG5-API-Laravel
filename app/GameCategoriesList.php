<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class GameCategoriesList extends Model {

        protected $table = 'game_categories_list';

        protected $primaryKey = 'id';

        public $incrementing = true;

        public $timestamps = false;

        protected $attributes = [
            'game_id' => NULL,
            'game_category_id' => NULL,
        ];

        protected $fillable = [
            'game_id',
            'game_category_id',
        ];

        protected $with = [
            'game_category_name',
        ];

        protected $visible = [
            'game_category_name',
        ];

        public function game_category_name() {
            return $this->hasOne('App\GameCategory', 'game_category_id', 'game_category_id');
        }

    }
