<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class UserAchievementsList extends Model {

        protected $table = 'user_achievements_list';

        protected $primaryKey = 'id';

        public $incrementing = true;

        public $timestamps = false;

        protected $attributes = [
            'user_id' => NULL,
            'user_achievement_id' => NULL,
            'user_achievement_timestamp' => NULL,
        ];

        protected $fillable = [
            'user_id',
            'user_achievement_id',
            'user_achievement_timestamp',
        ];

        protected $visible = [
            'user_achievement_id',
            'user_achievement_timestamp',
            'user_achievement_name',
            'user_achievement_description',
        ];

        protected $appends = [
            'user_achievement_name',
            'user_achievement_description',
        ];

        public function getUserAchievementNameAttribute() {
            return $this->hasOne('App\UserAchievement', 'user_achievement_id', 'user_achievement_id')->get()->first()->user_achievement_name;
        }

        public function getUserAchievementDescriptionAttribute() {
            return $this->hasOne('App\UserAchievement', 'user_achievement_id', 'user_achievement_id')->get()->first()->user_achievement_description;
        }

    }
