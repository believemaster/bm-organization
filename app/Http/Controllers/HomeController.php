<?php

namespace App\Http\Controllers;

use App\User;
use GuzzleHttp\Client;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect('https://news.believemaster.com');
    }

    public function about()
    {
        return view('about');
    }

    public function howto()
    {
        return view('howto');
    }

    // Trying Passport O Auth from BM News
    // public function getToken(Request $request)
    // {
    //     $request->session()->put('state', $state = Str::random(40));

    //     $query = http_build_query([
    //         'client_id' => '5',
    //         'redirect_uri' => 'http://127.0.0.1:8000/auth/callback',
    //         'response_type' => 'code',
    //         'scope' => '*',
    //         'state' => $state,
    //     ]);

    //     return redirect('http://127.0.0.1:8000/oauth/authorize?' . $query);
    // }

    // public function callback(Request $request)
    // {
    //     $state = $request->session()->pull('state');

    //     throw_unless(
    //         strlen($state) > 0 && $state === $request->state,
    //         InvalidArgumentException::class
    //     );

    //     $http = new \GuzzleHttp\Client;

    //     $response = $http->post('http://127.0.0.1:8000/oauth/token', [
    //         'form_params' => [
    //             'grant_type' => 'authorization_code',
    //             'client_id' => '5',
    //             'client_secret' => 'UcERZ8JE4R42XlLWgkONFIXYkCKeD1qnM9oImwZP',
    //             'redirect_uri' => 'http://127.0.0.1:8000/auth/callback',
    //             'code' => $request->code,
    //         ],
    //     ]);

    //     return view('questions.index', $response);

    //     // $user = new User;
    //     // $user->name = $response->name;
    //     // $user->email = $response->email;
    //     // $user->password = $response->password;
    //     // $user->save();

    //     // return redirect()->to('/');

    //     // return json_decode((string) $response->getBody(), true);
    // }
}
