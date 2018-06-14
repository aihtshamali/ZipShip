<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Flight;
use Session;
use Auth;
class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flights=Flight::where('user_id',Auth::id())
                ->whereDate('date','>=',date('Y-m-d'))
                ->get();
        return view('flights.index',['flights'=>$flights]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('flights.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $flight=new Flight();
        $flight->source_country=$request->from_country;
        $flight->source_city=$request->from_city;
        $flight->destination_city=$request->to_city;
        $flight->destination_country=$request->to_country;
        $flight->date=$request->date;
        $flight->user()->associate(Auth::user());
        $flight->save();
        Session::flash('message', 'Inserted Successfully!');
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('flight.index');
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
