<?php

namespace App\Http\Controllers;

use App\ownerpage;
use Illuminate\Http\Request;
use DB;
use Auth;

class OwnerpageProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('ownerpageprofile.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $name = $request->input('name');
        $email = $request->input('email');
        $phone_number = $request->input('phone');
        $NRC = $request->input('nrc');
        $DOB = $request->input('dob');
        $address = $request->input('address');
        $updated_at = date("Y-m-d H:i:s");


        DB::update('update users set name=?,email=?,phone_number=?,NRC=?,Date_of_birth=?,address=? ,updated_at=? where id=?', [$name,$email,$phone_number,$NRC,$DOB,$address,$updated_at,$id]);


        return redirect('ownerpage/dashboard');
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
