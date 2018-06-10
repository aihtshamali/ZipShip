@extends('layouts.app')
@section('content')
<div class="profile animate-left" style="min-height: 500px;">
    <div class="clear container">
        <div id="requested_box">
          <div class="fullWidth review">
            <div class="left" style="width: 25%">
              <img src="{{asset('uploads/postImages/'.$order->image_1)}}" width="100%">
            </div>

            <div class="left" style="width: 75%">
              <div class="right">
                <a type="button" href="{{url('post/'.$order->id.'/edit')}}" style="background-color:#9e3e9e;color:white" class="btn btn-default btn-sm">
                  <span class="glyphicon glyphicon-edit"></span> Edit
                </a>
              </div>
              <h3 class="paddingLef3per" style="margin-top:0">
                {{$order->title}}
              </h3>
              <div class="fullWidth marginLef backgrounpurple borderRad10px">
                <p class="white paddingLef3per">Deliver to: <b>{{$order->to_loc}} {{$order->to_city}},{{$order->to_country}}</b>
                  <br/>Deliver from: <b>{{$order->from_loc}} {{$order->from_city}},{{$order->from_country}}</b></p>
              </div>
              <p class="marginLef fullWidth">
                No Delivery offer yet<br/>
                <b class="grayee">item price ${{$order->item_price}}</b>
              </p>
            </div>
          </div>
        </div>
      <div id="in_transite_box">
        <div class="fullWidth review">
          <center>Orders paid for, receiving soon.</center>
        </div>
      </div>
      <div id="recieved_box">
        <div class="fullWidth review">
          <center>Orders paid for, receiving soon.</center>
        </div></div>

    </div>
</div>
@endsection
