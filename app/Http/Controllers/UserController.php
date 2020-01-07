<?php
    namespace App\Http\Controllers;

    use App\Game;
    use App\Http\Middleware\Login;
    use App\User;
    use Illuminate\Http\Request;

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

        public function login(Request $request) {
            $user = User::where('user_name', $request->input('name'))->get()->first();
            if($user && $user->user_password == hash('sha256', $request->input('password') . $user->joined_timestamp)) {
                $token = bin2hex(random_bytes(32));
                $user->token = $token;
                return response()->json([
                    'data' => 'ok',
                ])->cookie('token', $token, 60 * 24 * 30);
            } else {
                return response()->json([
                    'errors' => [
                        'status' => '403',
                        'title' => 'Forbidden',
                        'detail' => 'Credentials don\'t match.',
                    ],
                ]);
            }
        }

        public function register(Request $request) {
            if(!$request->has('name')) {
                return response()->json([
                    'errors' => [
                        'status' => '400',
                        'title' => 'Bad Request',
                        'detail' => 'Name missing.',
                    ],
                ]);
            }
            if(!$request->has('password')) {
                return response()->json([
                    'errors' => [
                        'status' => '400',
                        'title' => 'Bad Request',
                        'detail' => 'Password missing.',
                    ],
                ]);
            }
            if(!$request->has('password-repeat')) {
                return response()->json([
                    'errors' => [
                        'status' => '400',
                        'title' => 'Bad Request',
                        'detail' => 'Passwords don\'t match.',
                    ],
                ]);
            }
            if(User::where('user_name', $request->input('name'))->count() > 0) {
                return response()->json([
                    'errors' => [
                        'status' => '403',
                        'title' => 'Forbidden',
                        'detail' => 'User with this name already exists',
                    ],
                ]);
            }
            $user = new User([

            ]);
            $user->save();

            $token = bin2hex(random_bytes(32));
            $user->token = $token;
            return response()->json([
                'data' => 'ok',
            ])->cookie('token', $token, 60 * 24 * 30);
        }

        public function user() {
            return response()->json([
                'data' => Login::getUser(),
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
