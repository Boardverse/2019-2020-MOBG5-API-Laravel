<?php

    namespace App;

    use App\Http\Middleware\Login;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Facades\DB;
    use function foo\func;

    /**
     * Represents a board game
     */
    class Game extends Model {

        protected $table = 'games';

        protected $primaryKey = 'game_id';

        public $incrementing = true;

        public $timestamps = false;

        protected $attributes = [
            'game_thumbnail_url' => NULL,
            'game_publishing_date' => NULL,
            'game_min_player' => NULL,
            'game_recommended_player' => NULL,
            'game_max_player' => NULL,
            'game_min_duration' => NULL,
            'game_average_duration' => NULL,
            'game_max_duration' => NULL,
            'game_min_age' => NULL,
            'game_recommended_age' => NULL,
            'game_max_age' => NULL,
        ];

        protected $fillable = [
            'game_thumbnail_url',
            'game_publishing_date',
            'game_min_player',
            'game_recommended_player',
            'game_max_player',
            'game_min_duration',
            'game_average_duration',
            'game_max_duration',
            'game_min_age',
            'game_recommended_age',
            'game_max_age',
        ];

        protected $appends = [
            'game_name',
            'game_types',
            'game_themes',
            'game_description',
            'game_score',
            'game_pictures',
            'game_publishers',
            'game_authors',
            'game_languages',
            'game_awards',
        ];

        public function getGameNameAttribute() {
            $name = $this->hasOne('App\GameName', 'game_id', 'game_id')->get()->first();
            return isset($name) ? $name->game_name : NULL;
        }

        public function getGameTypesAttribute() {
            return $this->hasMany('App\GameTypesList', 'game_id', 'game_id')->get();
        }

        public function getGameThemesAttribute() {
            return $this->hasMany('App\GameThemesList', 'game_id', 'game_id')->get();
        }

        public function getGameDescriptionAttribute() {
            $description = $this->hasOne('App\GameDescription', 'game_id', 'game_id')->get()->first();
            return isset($description) ? $description->game_description : NULL;
        }

        public function getGameScoreAttribute() {
            return $this->hasMany('App\GameScore', 'game_id', 'game_id')->average('game_score');
        }

        public function getGamePicturesAttribute() {
            return $this->hasMany('App\GamePicture', 'game_id', 'game_id')->get()->map(function($item) { return $item->game_picture_url; });
        }

        public function getGamePublishersAttribute() {
            return $this->hasMany('App\GamePublishersList', 'game_id', 'game_id')->get();
        }

        public function getGameAuthorsAttribute() {
            return $this->hasMany('App\GameAuthorsList', 'game_id', 'game_id')->get()->map(function($item) { return $item->game_author; });
        }

        public function getGameAwardsAttribute() {
            return $this->hasMany('App\GameAwardsList', 'game_id', 'game_id')->get();
        }

        public function getGameLanguagesAttribute() {
            return $this->hasMany('App\GameLanguagesList', 'game_id', 'game_id')->get();
        }

        public function minGame() {
            return $this->hasOne('App\MinGame', 'game_id', 'game_id');
        }

        public function getScoresAttribute() {
            return DB::table('game_scores')
                ->rightJoin('game_scores_values', function($join) {
                    $join->on('game_scores_value', '=', 'game_score')->where('game_id', '=', $this->game_id);
                })
                ->groupBy('game_scores_value')
                ->orderBy('game_scores_value', 'asc')
                ->select(DB::raw('game_scores_value as game_score_value'), DB::raw('count(game_score) as game_score_count'))
                ->get();
        }

        public function getAlsoPlayingAttribute() {
            return Game::whereIn('game_id', array_column(
                DB::query()
                    ->select('game_id')
                    ->fromSub(function($subquery) {
                        $subquery->from('user_collection')
                            ->select('user_id')
                            ->where('game_id', '=', $this->game_id);
                    }, 'u')
                    ->join('user_collection', 'user_collection.user_id', '=', 'u.user_id')
                    ->where('game_id', '!=', $this->game_id)
                    ->get()
                    ->toArray(),
                    'game_id')
                )
                ->get()
                ->map(function($item) {
                    return $item->minGame;
                });
        }

        // TODO
        public function getSimilarAttribute() {
            return [];
        }

        public function getSamePublisherAttribute() {
            return $this->hasMany('App\GamePublishersList', 'game_id', 'game_id')->get()->random()->publisher->games;
        }

        public function getSameThemeAttribute() {
            return array_unique(array_merge($this->hasMany('App\GameThemesList', 'game_id', 'game_id')->get()->map(function($item) { return $item->theme->games; })->toArray()), SORT_REGULAR);
        }

        public function getSameTypeAttribute() {
            return array_unique(array_merge($this->hasMany('App\GameTypesList', 'game_id', 'game_id')->get()->map(function($item) { return $item->type->games; })->toArray()), SORT_REGULAR);
        }

        public function getFriendsOwningAttribute() {
            return Login::getUser()->hasMany('App\UserFriend', 'user_id', 'user_id')->join('user_collection', 'user_id', '=', 'user_id')->get();
            return $this->hasMany('App\UserFriend', 'user_id', 'user_id')->join('user_collection', 'user_id', 'user_id')->where('game_id', $this->game_id)->get();
        }

    }
