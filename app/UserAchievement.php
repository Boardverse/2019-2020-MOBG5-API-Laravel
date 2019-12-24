<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class UserAchievement extends Model {

        protected $table = 'user_achievements';

        protected $primaryKey = 'id';

        public $incrementing = true;

        public $timestamps = false;

        protected $attributes = [
            'user_achievement_id' => NULL,
            'language_id' => NULL,

            'user_achievement_name' => NULL,
            'user_achievement_description' => NULL,
        ];

        protected $fillable = [
            'user_achievement_id',
            'language_id',

			'user_achievement_name',
			'user_achievement_description'
        ];

    }
