<?php
	namespace App\Http\Controllers;

    use App\Game;

    class GameController extends Controller {

		public function index() {
			return response()->json([
				'data' => Game::all(),
			]);
		}

		public function show(Game $game) {
		    return response()->json([
		        'data' => $game,
            ]);
        }

        public function popular() {
		    return response()->json([
		        'data' => NULL,
            ]);
        }

	}
