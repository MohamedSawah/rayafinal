<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Country;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users=User::paginate(50);
        return view('admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Countries=Country::all();
        return view('admin.users.create',compact('Countries'));
   
    }

    /**
     * Store a newly created resource in storage.
     * 
     *@param  \App\User  $user
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,User $user)
    {
        //'firstName', 'lastName', 'mobile1',
        // 'mobile2', 'email', 'password',
        // 'landline', 'city1', 'address2','address',
        // 'city2', 'country_id',
        request()->validate([
            'firstName' => 'required|string|max:255',            
            'lastName' => 'required|string|max:255',
            'mobile1' => 'required|string|max:255',
            'mobile2' => 'nullable|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
            'landline' => 'nullable',
            'address' => 'required|string|max:255',
            'city1' => 'required|string|max:255',
            'address2' => 'nullable|string|max:255',
            'city2' => 'nullable|string|max:255',
            'country_id' => 'required',
            
            
            
        ]);
        $user=new User;
        // $building->postcode = $request->postcode ;
        $user->firstName=$request->firstName;
        $user->lastName=$request->lastName;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->mobile1=$request->mobile1;
        $user->mobile2=$request->mobile2;
        $user->landline=$request->landline;
        $user->address=$request->address;
        $user->city1=$request->city1;
        $user->address2=$request->address2;
        $user->city2=$request->city2;
        $user->country_id=$request->country_id;
        $user->status=$request->status;
        $user-> save();
        //$user->country_id()->sync($request->country_id);
        return redirect()->route('users.index')
        ->with('success','user Add successfully');
   
        //  User::create($request->all());
        //  return back();
        //   return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $Countries = Country::all();
        return view('admin.users.edit', compact('user','Countries'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *  @param \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public static function update(Request $request,User $user)
    {
     
        request()->validate([
            'firstName' => 'required|string|max:255',            
            'lastName' => 'required|string|max:255',
            'mobile1' => 'required|string|max:255',
            'mobile2' => 'nullable|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
            'landline' => 'nullable',
            'address' => 'required|string|max:255',
            'city1' => 'required|string|max:255',
            'address2' => 'nullable|string|max:255',
            'city2' => 'nullable|string|max:255',
            'country_id' => 'required',
        ]);
       
        $user->update([
            'firstName' => $request->input('firstName'),
            'lastName' => $request->input('lastName'),
            'mobile1' => $request->input('mobile1'),
            'password' => Hash::make($request->input('password')),
            'mobile2' => $request->input('mobile2'),
            'email' =>$request->input('email') ,
            'landline' => $request->input('landline'),
            'address' =>$request->input('address') ,
            'city1' => $request->input('city1'),
            'address2' => $request->input('address2'),
            'city2' => $request->input('city2'),
            'country_id' => $request->input('country_id'),
            'status' => $request->input('status'),

        ]);
        return redirect()->route('users.index')
        ->with('success','user Updated successfully');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
      $user->delete();
      return redirect()->route('users.index')
      ->with('success','user Deleted successfully');
 
    }
}
