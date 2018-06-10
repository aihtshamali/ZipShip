<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bid;
use Auth;
use Session;
class BidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bids=Bid::where('user_id',Auth::id())->orderBy('post_id')->get();
        return view('bids.index',['bids'=>$bids]);
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
        $bid=new Bid();
        $bid->post()->associate($request->post_id);
        $bid->user()->associate(Auth::user());
        $bid->flight()->associate($request->flight_id);
        $bid->amount=$request->bidding_amount;
        $bid->save();
        Session::flash('message', 'Inserted Successfully!');
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('bids.index');
        // dd($bid);
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
        $bid=Bid::findOrFail($id);
        return view('bids',['bid'=>$bid]);
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
      $bid=Bid::findOrFail($id);
      $bid->post()->associate($request->post_id);
      $bid->user()->associate(Auth::user());
      $bid->flight()->associate($request->flight_id);
      $bid->amount=$request->bidding_amount;
      $bid->save();
      Session::flash('message', 'Updated Successfully!');
      Session::flash('alert-class', 'alert-success');
      return redirect()->route('bids.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Bid::destroy($id);
    }
}
