<?php

namespace App\Http\Controllers;

use App\Car;
use carseeder;
use Illuminate\Http\Request;

use DB;

use Auth;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Storage;
    use Illuminate\Support\Facades\Input;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $delete_status = 1;
        $id = Auth::user()->id;
        $cars = DB::select('select * from cars WHERE delete_status= 1  AND owner_id=' . $id);
        return view('car.index')
            ->with('cars', $cars);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {



        if (Auth::check()) {
            return view('car.create');
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
        $request_all = $request->all();
        $this->validate($request, [

            'brand' => 'required',
            'name' => 'required',
            'type' => 'required',
            'price' => 'required|integer|max:2147483647',
            'car_no' => 'required',
            'status' => 'required',
            'img1' => 'required',
            'img2' => 'required',
            'img3' => 'required',
        ]);

        $owner_id = $request->input('owner_id');
        $brand = $request->input('brand');
        $name = $request->input('name');
        $type = $request->input('type');
        $price = $request->input('price');
        $car_no = $request->input('car_no');
        $status = $request->input('status');
        $img1 = $request->file('img1');
        $img2 = $request->file('img2');
        $img3 = $request->file('img3');




        $cars = new Car;
        $cars->owner_id = $owner_id;
        $cars->brand = $brand;
        $cars->name = $name;
        $cars->type = $type;
        $cars->price = $price;
        $cars->car_no = $car_no;
        $cars->status = $status;
        $cars->image1 = $img1->getClientOriginalName();
        $cars->image2 = $img2->getClientOriginalName();
        $cars->image3 = $img3->getClientOriginalName();


        if ($request->hasFile('img1')) {


            $destinationPath = 'images';
            $img1->move($destinationPath, $img1->getClientOriginalName());
            $img2->move($destinationPath, $img2->getClientOriginalName());
            $img3->move($destinationPath, $img3->getClientOriginalName());



            $cars->save();
            return redirect()->route('car_list');
        };
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        if (Auth::check()) {

            $cars = DB::select('SELECT c.*,u.name AS user_name
                            FROM 
                            cars AS c
                            JOIN users AS u
                            ON c.owner_id = u.id
                            WHERE delete_status=1');


            return view('car.listing')
                ->with('cars', $cars);
        } else {
            return redirect()->route('login');
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        $cars = DB::select('select * from cars WHERE car_id = ?', [$id]);
        return view('car.edit', ['cars' => $cars]);
    }

    public function edit2($id)
    {


        $cars = DB::select('select * from cars WHERE car_id = ?', [$id]);
        return view('car2.edit2', ['cars' => $cars]);
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
        $cars = Car::all();
        $request_all = $request->all();
        
        $this->validate($request, [

            'brand' => 'required',
            'name' => 'required',
            'type' => 'required',
            'price' => 'required|integer|max:2147483647',
            'car_no' => 'required',
            'status' => 'required',


        ]);


        $owner_id = $request->input('owner_id');
        $brand = $request->input('brand');
        $name = $request->input('name');
        $type = $request->input('type');
        $price = $request->input('price');
        $car_no = $request->input('car_no');
        $status = $request->input('status');
        
        
        $destinationPath = 'images';
        
        // $cars = Car::find($id);
        $cars = Car::where('car_id', $id)->first();
        $cars->owner_id = $owner_id;
        $cars->brand = $brand;
        $cars->name = $name;
        $cars->type = $type;
        $cars->price = $price;
        $cars->car_no = $car_no;
        $cars->status = $status;

        if (Input::hasFile('img1')){
            $img1 = $request->file('img1');
            $img1->move($destinationPath, $img1->getClientOriginalName());
            $cars->image1 = $img1->getClientOriginalName();

        }

        if (Input::hasFile('img2')) {
        
            $img2 = $request->file('img2');        
            $img2->move($destinationPath, $img2->getClientOriginalName());
            $cars->image2 = $img2->getClientOriginalName();

        }

        if (Input::hasFile('img3')) {
            $img3 = $request->file('img3');
            $img3->move($destinationPath, $img3->getClientOriginalName());
            $cars->image3 = $img3->getClientOriginalName();

        }
        if($cars->save()){
       
            return redirect()->back()->withSuccess('Success, Updated successfully !')
                ->with('car_list', $cars);
        }
        else {
            // return redirect()->route('car_list');
            return redirect()->back()->withSuccess('Error, Error in car update !')
                ->with('car_list', $cars);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_status = 0;
        $updated_at = date("Y-m-d H:i:s");
        DB::update('update cars set delete_status = ?, updated_at = ? where car_id = ?', [$delete_status, $updated_at, $id]);

        return redirect()->back()->withSuccess('Success, car deleted successfully !');
    }
}
