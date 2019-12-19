<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Language extends Model {

        protected $table = 'languages';

        protected $primaryKey = 'id';

        public $incrementing = true;

        public $timestamps = false;

        protected $attributes = [
            'language_id' => NULL,
            'in_language_id' => NULL,

            'language_name' => NULL,
        ];

        protected $fillable = [
            'language_id',
            'in_language_id',

            'language_name',
        ];
    }
