<?php
    namespace App\Http\Controllers;

    use App\Game;
    use App\User;
    use App\UserGamesList;
    use Illuminate\Support\Facades\DB;

    class UserController extends Controller {

        public function index() {
            return response()->json([
                'data' => User::all(),
            ]);
        }

        public function show(User $user) {
            return response()->json([
                'data' => $user,
            ]);
        }

        public function friends(User $user) {
            return response()->json([
                'data' => $user->friends,
            ]);
        }

        public function collection(User $user) {
            return response()->json([
                'data' => $user->collection,
            ]);
        }

        public function reviews(User $user) {
            return response()->json([
                'data' => $user->reviews,
            ]);
        }

    }
