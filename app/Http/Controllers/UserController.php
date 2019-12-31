<?php
    namespace App\Http\Controllers;

    use App\Game;
    use App\User;
    use App\UserCollection;
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

        public function played(User $user) {
            return response()->json([
                'data' => $user->played,
            ]);
        }

        public function wishlist(User $user) {
            return response()->json([
                'data' => $user->wishlist,
            ]);
        }

        public function achievements(User $user) {
            return response()->json([
                'data' => $user->achievements,
            ]);
        }

        public function activity(User $user) {
            return response()->json([
                'data' => $user->activity,
            ]);
        }

    }
