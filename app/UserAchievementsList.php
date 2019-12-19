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
        ];

        protected $fillable = [
            'user_id',
            'user_achievement_id',
        ];

        protected $with = [
            'user_achievement_name',
        ];

        protected $visible = [
            'user_achievement_name',
        ];

        public function user_achievement_name() {
            return $this->hasOne('App\UserAchievement', 'user_achievement_id', 'user_achievement_id');
        }
    }
