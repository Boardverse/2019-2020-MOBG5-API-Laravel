<?php

	namespace App\Http\Controllers;

    use App\Game;
    use App\GamePublisher;
    use App\GamePublishersList;
    use App\GameTheme;
    use App\GameType;
    use App\UserCollection;
    use Illuminate\Support\Facades\DB;

    class GameController extends Controller {

		public function index() {
			return response()->json([
				'data' => Game::all()->map(function($item) { return $item->minGame; }),
			]);
		}

		public function show(Game $game) {
		    return response()->json([
		        'data' => $game,
            ]);
        }


        public function new() {
		    $lastWeek = ((time() - (7 * 24 *  60 * 60)) * 1000);
		    return response()->json([
		        'data' =>
		            Game::orderBy('game_publishing_date', 'desc')
                    ->limit(20)
                    ->get()
                    ->map(function($item) { return $item->minGame; }),
            ]);
        }

        public function popular() {
		    $lastWeek = ((time() - (7 * 24 *  60 * 60)) * 1000);
		    return response()->json([
		        'data' =>
		            UserCollection::where('game_added_timestamp', '>=', $lastWeek)
                    ->groupBy('user_collection.game_id')
                    ->select('user_collection.game_id', DB::raw('count(*) as c'))
                    ->orderBy('c', 'desc')
                    ->limit(20)
                    ->get()
                    ->map(function($item) { return $item->game; }),
            ]);
        }

        public function randomPublisher() {
            $publisher = GamePublisher::all()->firstWhere('game_publisher_id', DB::table('game_publishers_list')->groupBy('game_publisher_id')->get()->random()->game_publisher_id);
            return response()->json([
                'data' => (object) [
                    'publisher' => $publisher,
                    'games' => $publisher->games,
                ],
            ]);
        }

        public function randomTheme() {
            $theme = GameTheme::all()->firstWhere('game_theme_id', DB::table('game_themes_list')->groupBy('game_theme_id')->get()->random()->game_theme_id);
            return response()->json([
                'data' => (object) [
                    'theme' => $theme,
                    'games' => $theme->games,
                ],
            ]);
        }

        public function randomType() {
            $type = GameType::all()->firstWhere('game_type_id', DB::table('game_types_list')->groupBy('game_type_id')->get()->random()->game_type_id);
            return response()->json([
                'data' => (object) [
                    'type' => $type,
                    'games' => $type->games,
                ],
            ]);
        }


        public function alsoPlaying(Game $game) {
            return response()->json([
                'data' => $game->alsoPlaying,
            ]);
        }

        public function publishers(Game $game) {
            return response()->json([
                'data' => GamePublishersList::where('game_id', $game->game_id)->get()->map(function(GamePublishersList $item) { return $item->publisher; }),
            ]);
        }

        public function samePublisher(Game $game) {
            return response()->json([
                'data' => $game->samePublisher,
            ]);
        }

        public function sameTheme(Game $game) {
            return response()->json([
                'data' => $game->sameTheme,
            ]);
        }

        public function sameType(Game $game) {
            return response()->json([
                'data' => $game->sameType,
            ]);
        }

        public function scores(Game $game) {
            return response()->json([
                'data' => $game->scores,
            ]);
        }

        public function similar(Game $game) {
		    return response()->json([
		        'data' => $game->similar,
            ]);
        }


        // TODO
        public function friendsOwning(Game $game) {
		    return response()->json([
		        'data' => [],
            ]);
        }

        // TODO
        public function friendsLoving() {

        }

	}
