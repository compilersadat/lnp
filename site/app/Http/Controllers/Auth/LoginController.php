<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use App\User;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToProvider($service)
        {
            return Socialite::driver($service)->redirect();
        }

        public function callback($service){
            try {
                $user = Socialite::driver($service)->user();
            } catch (\Exception $e) {
                return redirect('/login');
            }
            $existingUser = User::where('email', $user->email)->first();
            if($existingUser){
                // log them in
                auth()->login($existingUser, true);
            } else {
                // create a new user
                $newUser                  = new User;
                $newUser->name            = $user->name;
                $newUser->email           = $user->email;
                $newUser->save();
                auth()->login($newUser, true);
            }
            return redirect()->to('/home');
        }

        public function fcallback(){
            $user = Socialite::driver('facebook')->user();
            dump($user) or die();
        }
}
