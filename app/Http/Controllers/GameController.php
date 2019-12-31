<?php
	namespace App\Http\Controllers;

    use App\Game;
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

        public function scores(Game $game) {
		    /*
		    $answer = [];
		    foreach($game->scores as $score) {
		        $answer[$score->score] = $score->count;
            }
		    */
            return response()->json([
                'data' => $game->scores,
            ]);
        }


        public function similar(Game $game) {
		    return response()->json([
		        'data' => $game->similar,
            ]);
        }

        public function samePublisher(Game $game) {
		    return response()->json([
		        'data' => $game->samePublisher,
            ]);
        }

        // TODO
        public function alsoPlaying(Game $game) {
		    return response()->json([
		        'data' => [],
            ]);
        }

        // TODO
        public function friendsOwning(Game $game) {
		    return response()->json([
		        'data' => [],
            ]);
        }

        public function sameType(Game $game) {
		    return response()->json([
		        'data' => $game->sameType,
            ]);
        }

        public function sameTheme(Game $game) {
		    return response()->json([
		        'data' => $game->sameTheme,
            ]);
        }


	}
