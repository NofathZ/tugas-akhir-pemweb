<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Teaches;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $message = array(
            'required' => 'The :attribute field is required.',
            'email.email' => 'Please enter a valid email',
            'password.min:8' => 'You must enter a password that contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters!'
        );

        return Validator::make($data, $message, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'string']
        ] );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        if ($data['role'] == 'mentor'){
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'phone_number' => $data['phone_number'],
                'price' => $data['price'],
                'role' => $data['role'],
                'req_files' => $data['req_files'],
                'description' => $data['description'],
                'verification_status' => 'Unverified'
                ]);
            if(request()->hasFile('image')){
                $extension = request()->file('image')->extension();
                $filename = $user->role .'-'. $user->id . $extension;
                request()->file('image')->storeAs('avatars', $user->id . '/' . $filename, '');
                $user->update(['image' => $filename]);
            } 
            if(request()->hasFile('req_files')){
                $extension = request()->file('req_files')->extension();
                $filename = 'registration-'. $user->role .'-'. $user->id . $extension;
                request()->file('req_files')->storeAs('registrations', $user->id . '/' . $filename, '');
                $user->update(['req_files' => $filename]);
            } 
            foreach($data['subjects'] as $subject){
                $teaches = Teaches::create([
                    'id_mentor' => $user->id,
                    'id_course' => $subject
                ]);
            }
                $user->assignRole('mentor');
        }
        elseif($data['role'] == 'mentee'){
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'phone_number' => $data['phone_number'],
                'role' => $data['role'],
                'money' => 0
                ]);
            if(request()->hasFile('image')){
                $extension = request()->file('image')->extension();
                $filename = $user->role .'-'. $user->id . $extension;
                request()->file('image')->storeAs('avatars', $user->id . '/' . $filename, '');
                $user->update(['image' => $filename]);
            } 
            $user->assignRole('mentee');
        }
        return $user;
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        event(new Registered($user = $this->create($request->all())));
        // $this->guard()->login($user);
        return $this->registered($request, $user)
                            ?: redirect($this->redirectPath());
    }
}
