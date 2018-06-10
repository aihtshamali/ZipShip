<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bid;
class OfferRequestedController extends Controller
{
    public function showOffers($id){
      // dd($id);
      $bids=Bid::where('post_id',$id)->get();
      return view('offerRequested.show',['bids'=>$bids]);
    }
}
