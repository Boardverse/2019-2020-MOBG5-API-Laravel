<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class GameLanguagesList extends Model {

        protected $table = 'game_languages_list';

        protected $primaryKey = 'id';

        public $incrementing = true;

        public $timestamps = false;

        protected $attributes = [
            'game_id' => NULL,
            'language_id' => NULL,
        ];

        protected $fillable = [
            'game_id',
            'language_id',
        ];

        protected $hidden = [
            'game_id',
        ];

        protected $appends = [
            'language_name',
        ];

        public function getLanguageAttribute() {
            return $this->hasOne('App\Language', 'language_id', 'language_id')->get()->first();
        }

        public function getLanguageNameAttribute() {
            return $this->hasOne('App\Language', 'language_id', 'language_id')->get()->first()->language_name;
        }

    }
