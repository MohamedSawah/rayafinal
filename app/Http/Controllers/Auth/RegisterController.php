<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Country;
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
    // protected $redirectTo = '/home';
    protected function authenticated($request,$user)
    {
     if($user->isStatue(1)){
         return redirect('/admin');
        }
      else{
 
         return redirect('/');
      }
   
    }
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
  * Show the application registration form.
  *
  * @return \Illuminate\Http\Response
  */
  public function showRegistrationForm()
    {
      $Countries = Country::all();
     // $selectedCountries = Country::first()->country_id;
       return view('auth.register', compact('Countries'));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        // SELECT `id`, `firstName`, `lastName`, `email`, `password`,
        //  `mobile1`, `mobile2`, `landline`, `city1`, `address2`, 
        // `city2`, `status`, `remember_token`, `country_id`, `created_at`, `updated_at` FROM `users` WHERE 1
        return Validator::make($data, [
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'mobile1' => 'required|string|max:255',
            'mobile2' => 'nullable|string|max:255',
            'landline' => 'nullable|string|max:255',
            'address' => 'required|string|max:255',
            'city1' => 'required|string|max:255',
            'address2' => 'nullable|string|max:255',
            'city2' => 'nullable|string|max:255',
            'country_id' => 'required|numeric|max:255',

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
        return User::create([
            'firstName' => $data['firstName'],
            'lastName' => $data['lastName'],
            'mobile1' => $data['mobile1'],
            'mobile2' => $data['mobile2'],
            'landline' => $data['landline'],
            'city1' => $data['city1'],
            'address' => $data['address'],
            'address2' => $data['address2'],
            'city2' => $data['city2'],
            'country_id' => $data['country_id'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
