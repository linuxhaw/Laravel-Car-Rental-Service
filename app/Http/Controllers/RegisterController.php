<?php

namespace App\Http\Controllers;

use App\register;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\users as users;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::check()) {
            return view("register.create");
        }
        else{
            return redirect()->route('login');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        
$this->validate($request,[

    'name' => 'required',

    'email' => 'required|email|max:255|unique:users',

    'phone_no' => 'required|integer|min:6',

    'password' => ['required'],
            
    'confirmpassword' => ['same:password'],



]);
    
        $name = $request['name'];
        $email = $request['email'];
        $role = $request['role'];
        $phone_number = $request['phone_no'];
        $password = $request['password'];
        $confirmpassword = $request['confirmpassword'];
        

        
        
        
$users = new register;
$users->name = $name;
$users->email = $email;
$users->role_id = $role;
$users->phone_number = $phone_number;
$users->password = bcrypt($password);
$users->password= bcrypt($confirmpassword);

        


$users->save();
// return view("register.create");
return redirect()->back()->withSuccess('Registration created successfully !');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
