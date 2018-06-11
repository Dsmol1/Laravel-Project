<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/dishes';

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
      return Validator::make($data, [
          'name' => 'required|string|max:255',
          'surname' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:users',
          'password' => 'required|string|min:6|confirmed',
          'country' => 'required|string|max:255',
          'city' => 'required|string|max:255',
          'address' => 'required|string|max:255',
          'zip_code' => 'required|string|max:10',
          'date_of_birth' => 'required',
          'phone_number' => 'required|string|max:255'
      ]);


    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
      // dd($data);
    return User::create([
       'name' => $data['name'],
       'surname' => $data['surname'],
       'email' => $data['email'],
       'password' => bcrypt($data['password']),
       'country' => $data['country'],
       'city' => $data['city'],
       'address' => $data['address'],
       'date_of_birth' => $data['date_of_birth'],
       'zip_code' => $data['zip_code'],
       'phone_number' => $data['phone_number']
      ]);
    }
}
