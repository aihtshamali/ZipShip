<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Post;
use App\Flight;
use DB;

class MakeOfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $flights=Flight::where('user_id',Auth::user()->id)->get();
      // $orders=Post::select('posts.id as post_id', 'flights.id as flight_id','flights.date' ,'flights.*','posts.*')
      //               ->leftJoin("flights",function($join){
      //                   $join->on("flights.source_country","=","posts.from_country");
      //                   $join->on('destination_country','=','posts.to_country');
      //                   $join->on('source_city','=','posts.from_city');
      //                   $join->on('destination_city','=','posts.to_city');
      //                   // $join->on('posts.deliver_before','<=', 'date');
      //               })
      //               ->whereDate('deliver_before','<', 'date')
      //               ->get();
      $orders=DB::select(DB::raw("SELECT flights.*,posts.* FROM `posts` left join flights on flights.source_country=posts.from_country AND flights.destination_country=posts.to_country and flights.source_city = posts.from_city where flights.date >= posts.deliver_before"));
      // $orders = new \Illuminate\Support\Collection($orders);

                    // dd($orders);
      return view('orders.index',['orders'=>$orders,'flights'=>$flights]);

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
