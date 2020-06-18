<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use Hash;
use Str;
use App\User;
use Auth;
use Exception;

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

    public function googleLogin()
    {
        // Sends the Users Request
        return Socialite::driver('google')->redirect();
    }

    public function googleLoginRedirect()
    {
        // Redirect the Users To Web
        try {


            $googleUser = Socialite::driver('google')->stateless()->user();
            $existUser = User::where('email', $googleUser->email)->first();


            if ($existUser) {
                Auth::loginUsingId($existUser->id);
            } else {
                $user = new User;
                $user->name = $googleUser->name;
                $user->email = $googleUser->email;
                $user->email_verified_google = $googleUser->id;
                $user->password = md5(rand(1, 10000));
                $user->save();
                Auth::loginUsingId($user->id);
            }
            return redirect()->to('/');
        } catch (Exception $e) {
            return 'error';
        }
    }

    public function facebookLogin()
    {
        // Sends the Users Request
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookLoginRedirect()
    {
        // Redirect the Users To Web
        try {


            $facebookUser = Socialite::driver('facebook')->stateless()->user();
            $existUser = User::where('email', $facebookUser->email)->first();


            if ($existUser) {
                Auth::loginUsingId($existUser->id);
            } else {
                $user = new User;
                $user->name = $facebookUser->name;
                $user->email = $facebookUser->email;
                $user->email_verified_facebook = $facebookUser->id;
                $user->password = md5(rand(1, 10000));
                $user->save();
                Auth::loginUsingId($user->id);
            }
            return redirect()->to('/');
        } catch (Exception $e) {
            return 'error';
        }
    }
}
