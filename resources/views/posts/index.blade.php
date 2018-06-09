@extends('layouts.app')
@section('content')
<div class="profile animate-left" style="min-height: 500px;">
    <div class="container">
        <div class="left fullWidth">
        <p class="boldName">
            Orders
        </p>
        <p class="menuOrders">
            <span id="requested"><b>Requested</b></span>
            <span id="in_transite"><b>In Transite</b></span>
            <span id="recieved"><b>Received</b></span>
            <!-- <span id="inactive"><b>inactive</b></span> -->
        </p>
    </div>
    </div>
    <div class="clear container">
      @foreach($orders as $order)
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
      @endforeach
      <div id="in_transite_box">
        <div class="fullWidth review">
          <center>Orders paid for, receiving soon.</center>
        </div>
      </div>
      <div id="recieved_box">
        <div class="fullWidth review">
          <center>Orders paid for, receiving soon.</center>
        </div></div>
      <!-- <div id="inactive_box">

        <div class="fullWidth review">
          <div class="left" style="width: 25%">
            <img src="images/ContactImages/images/gallery/mosaic_05.jpg" width="100%">
          </div>
          <div class="left" style="width: 75%">
            <h3 class="paddingLef3per">
              Name product<br/>
              here...
            </h3>
            <div class="fullWidth marginLef backgrounpurple borderRad10px">
              <p class="white paddingLef3per">Deliver to: <b>city</b>
                <br/>Deliver from: <b>city</b>
                <br/>Deliver before: <b>Date</b></p>
            </div>
            <p class="marginLef fullWidth">
              <b class="grayee">item price</b><b class="right">$6</b>
            </p>
          </div>
        </div>
      </div> -->
    </div>
</div>
@endsection
@section('script')
  $(document).ready(function(){

    $("#requested > b").css("color", "#800080");
    $("#requested > b").css("border-bottom", "1px solid #800080");
    $("#requested").click(function(){
        $("#requested_box").show(700);
        $("#requested > b").css("color", "#800080");
        $("#requested > b").css("border-bottom", "1px solid #800080");
        $("#in_transite_box").hide();
        $("#recieved_box").hide();
        $("#inactive_box").hide();
        $("#in_transite > b").css("color", "#777");
        $("#in_transite > b").css("border-bottom", "none");
        $("#recieved > b").css("color", "#777");
        $("#recieved > b").css("border-bottom", "none");
        $("#inactive > b").css("color", "#777");
        $("#inactive > b").css("border-bottom", "none");
    });
    $("#in_transite").click(function(){
        $("#requested_box").hide();
        $("#in_transite_box").show(700);
        $("#in_transite > b").css("color", "#800080");
        $("#in_transite > b").css("border-bottom", "1px solid #800080");
        $("#recieved_box").hide();
        $("#inactive_box").hide();
        $("#requested > b").css("color", "#777");
        $("#requested > b").css("border-bottom", "none");
        $("#recieved > b").css("color", "#777");
        $("#recieved > b").css("border-bottom", "none");
        $("#inactive > b").css("color", "#777");
        $("#inactive > b").css("border-bottom", "none");

    });
    $("#recieved").click(function(){
        $("#requested_box").hide();
        $("#in_transite_box").hide();
        $("#recieved_box").show(700);
        $("#recieved > b").css("color", "#800080");
        $("#recieved > b").css("border-bottom", "1px solid #800080");
        $("#inactive_box").hide();
        $("#requested > b").css("color", "#777");
        $("#requested > b").css("border-bottom", "none");
        $("#in_transite > b").css("color", "#777");
        $("#in_transite > b").css("border-bottom", "none");
        $("#inactive > b").css("color", "#777");
        $("#inactive > b").css("border-bottom", "none");
    });
    $("#inactive").click(function(){
        $("#requested_box").hide();
        $("#in_transite_box").hide();
        $("#recieved_box").hide();
        $("#inactive_box").show(700);
        $("#inactive > b").css("color", "#800080");
        $("#inactive > b").css("border-bottom", "1px solid #800080");
        $("#requested > b").css("color", "#777");
        $("#requested > b").css("border-bottom", "none");
        $("#in_transite > b").css("color", "#777");
        $("#in_transite > b").css("border-bottom", "none");
        $("#recieved > b").css("color", "#777");
        $("#recieved > b").css("border-bottom", "none");
    });
  });
@endsection
