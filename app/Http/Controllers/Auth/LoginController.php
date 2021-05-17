<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;

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
    // protected $redirectTo = RouteServiceProvider::HOME;

    // public function redirectTo() {
    //     $role = Auth::user()->role; 
    //     switch ($role) {
    //       case 'admin':
    //         return '/admin/list-mentor';
    //         break;
    //       default:
    //         return '/home'; 
    //       break;
    //     }
    //   }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
    //     // Check status
        if (($request->user_type != $user->role && $user->role != 'admin') || ($user->role == 'mentor' && $user->verification_status != 'Verified')) {
            $this->logout($request);
        }
        else{
          switch ($user->role){
            case 'admin':
              return redirect('/admin/list-mentor');
              break;
            case 'mentor':
              return redirect('/mentor/list-mentee');
              break;
            default:
              return redirect('/home'); 
            break;
          }
        }
    }

    protected function loggedOut(Request $request)
    {
        return redirect('/login');
    }
}
