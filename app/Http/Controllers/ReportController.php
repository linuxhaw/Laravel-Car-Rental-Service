<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use PDF;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     * 
     * 
     */

    public function pdfPreview($type = null)
    {
        if($type == null || $type == 0){
            $registrations = DB::select('SELECT r.*,u.name AS user_name,c.name AS car_name
            FROM 
            car_rent AS r 
            JOIN users AS u
            ON r.user_id = u.id
            JOIN cars AS c
            ON r.car_id = c.car_id
            WHERE r.status =0');
            }
        else{
            $registrations = DB::select('SELECT r.*,u.name AS user_name,c.name AS car_name
            FROM 
            car_rent AS r 
            JOIN users AS u
            ON r.user_id = u.id
            JOIN cars AS c
            ON r.car_id = c.car_id
            WHERE r.status =' .$type);

        }
              
    //   $users = User::orderBy('id','asc')->get();
    // $users = User::all();
      $view = \View::make('report.pdf_content', ['registrations'=>$registrations]);
      $html_content = $view->render();
      PDF::SetTitle("List of users");
      PDF::AddPage();

    // writeHTML($html, $ln=true, $fill=false, $reseth=false, $cell=false, $align='')
    // writeHTMLCell($w, $h, $x, $y, $html='', $border=0, $ln=0, $fill=0, $reseth=true, $align='', $autopadding=true)
    
      PDF::writeHTML($html_content, true, false, true, false, '');
      // D is the change of these two functions. Including D parameter will avoid 
      // loading PDF in browser and allows downloading directly
      PDF::Output('userlist.pdf', 'D');

    }

    public function index()
    {
        if (Auth::check()) {
            $status = 1;
            $rent = DB::select('SELECT r.*,u.name AS user_name,c.name AS car_name
                                FROM 
                                car_rent AS r 
                                JOIN users AS u
                                ON r.user_id = u.id
                                JOIN cars AS c
                                ON r.car_id = c.car_id
                                WHERE r.status =' .$status);
            
            
        return view('report.index')
        ->with('car_rent', $rent);
    }
    else{
        return redirect()->route('login');
    }
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
