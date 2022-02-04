<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Book;
use App\Car;
class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


       $cars = DB::select('SELECT * from cars
                                WHERE delete_status=1');

 
        return view('carlisting')
            ->with('cars', $cars);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        // $car = DB::select('SELECT * from cars WHERE car_id=' . $id);
        $car = Car::where('car_id', $id)->first();

        if (Auth::check()) {
            return view('booking')->with('car',$car);
        } else {

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
        
        
        $book = Book::all();
        $request_all = $request->all();
        $this->validate($request, [
            
            'pickup_date' => 'required',            
            
        ]);
        
        
        $user_id = $request->input('user_id');
        $car_id = $request->input('car_id');
        $owner_id = $request->input('owner_id');
        $pickup_date = $request->input('pickup_date');
        $cost = $request->input('cost');
     

        $book = new Book;
        $book->user_id = $user_id;
        $book->car_id = $car_id;
        $book->owner_id = $owner_id;
        $book->pickup_date = $pickup_date;
        $book->price = $cost;
     
        
        $book->save();
        return redirect()->back()->withSuccess('Success, Booking successfully !')
            ->with('car_rent', $book);
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
