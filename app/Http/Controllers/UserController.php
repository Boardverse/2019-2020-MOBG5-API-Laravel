<?php
    namespace App\Http\Controllers;

    use App\Game;
    use App\Http\Middleware\Login;
    use App\User;

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

        // TODO
        public function friendsLoving() {
            $user = Login::getUser();
            return response()->json([
                'data' => $user->friendsLoving,
            ]);
        }

        // TODO
        public function friendsPlaying() {

        }

        // TODO
        public function addCollection() {

        }

        // TODO
        public function removeCollection(Game $game) {

        }

        // TODO
        public function addPlayed(Game $game) {

        }

        // TODO
        public function removePlayed(Game $game) {

        }

        // TODO
        public function addWishlist(Game $game) {

        }

        // TODO
        public function removeWishlist(Game $game) {

        }

        // TODO
        public function rate(Game $game) {

        }

    }
