<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Post;
use App\Flight;
use DB;
use stdClass;
use App\Bid;
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
      $orders=DB::select(DB::raw("SELECT flights.*,posts.*,users.firstname,users.lastname,users.dp  FROM `posts` left join users on posts.user_id=users.id left join flights on flights.source_country=posts.from_country AND flights.destination_country=posts.to_country and flights.source_city = posts.from_city where (flights.date >= posts.deliver_before or posts.deliver_before is NULL or posts.deliver_before='' ) and posts.user_id!=".Auth::id()));
      // $bids=Bid::select('bids.*','flights.*','flights.user_id as    flights_user_id')->leftJoin('flights','flights.user_id','=','bids.user_id')->get();
      // $orders = new \Illuminate\Support\Collection($orders);

                    // dd("SELECT flights.*,posts.*  FROM `posts` left join flights on flights.source_country=posts.from_country AND flights.destination_country=posts.to_country and flights.source_city = posts.from_city where flights.date >= posts.deliver_before and posts.user_id!=".Auth::id());
      return view('makeOffer.index',['orders'=>$orders,'flights'=>$flights]);

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
        $order=Post::where('id',$id)->where('user_id','!=',Auth::id())->first();
        $flights=Flight::where('user_id',Auth::user()->id)->get();
        // dd($order->id);
        return view('makeOffer.show',['order'=>$order,'flights'=>$flights]);
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
