<?php
	namespace App\Http\Controllers;

    use App\Game;
    use App\UserGamesList;
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
		            UserGamesList::where('game_added_timestamp', '>=', $lastWeek)
                    ->groupBy('user_games_list.game_id')
                    ->select('user_games_list.game_id', DB::raw('count(*) as c'))
                    ->orderBy('c', 'desc')
                    ->limit(20)
                    ->get()
                    ->map(function($item) { return $item->game->minGame; }),
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

	}
