<?php

    namespace App\Http\Middleware;

    use App\User;
    use Closure;
    use Illuminate\Support\Facades\Cookie;

    class Login {

        public function handle($request, Closure $next, $guard = NULL) {

            if(!self::getUser()) {
                return response()->json([
                    'errors' => [
                        [
                            'status' => '401',
                            'code' => 'Unauthorized',
                            'title' => 'You need to be logged in in order to do that.',
                        ],
                    ],
                ]);
            }

            return $next($request);
        }

        public static function getUser(): ?User {
            return User::where('token', Cookie::get('token'))->get()->first();
        }
    }
