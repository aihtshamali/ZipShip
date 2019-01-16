@extends('layouts.app')
@section('style')
  #app{background: #fff;}
  .in_transite_box , .requested_box , .recieved_box{
    display:none;
  }
@endsection
@section('content')
<div class="profile animate-left" style="min-height: 500px;">
    <div class="container">
        <div class="left fullWidth">
        <p class="boldName">
          My Orders
        </p>
        <p class="menuOrders">
            <span class="in_transitec"><a href="{{route('order.index')}}"><b>In Transite</b></a></span>
            <span class="recievedc"><a href="{{route('getorderbyStatus',['status'=>'delivered'])}}"><b>Delivered</b></a></span>
            <!-- <span id="inactive"><b>inactive</b></span> -->
        </p>
    </div>
    </div>

    <div class="clear container" >
      @php
        $style='';
      @endphp
      @if (isset($status) && $status=='intransite')
        <?php $style="display:unset"?>
      @endif
      <div class="in_transite_box" style="{{$style}}">
          @foreach($orders as $order)
            <div class="fullWidth review" >
              <div class="left" style="width: 25%">
                <img src="{{asset('uploads/postImages/'.$order->bid->post->image_1)}}" width="100%">
              </div>
              <div class="left" style="width: 75%">
                <div class="right">
                  <a type="button" href="{{route('setOrderstatus',['id'=>$order->id,'status'=>'delivered'])}}" style="background-color:#9e3e9e;color:white !important" class="btn btn-default btn-sm">
                    <span class="glyphicon glyphicon-edit"></span> Mark as Delivered
                  </a>
                </div>
                <h3 class="paddingLef3per" style="margin-top:0">
                  {{$order->bid->post->title}}
                </h3>
                <b><span class="grayee capitalize" style="margin-left:25px">where to buy </span><span class="textpurple pointer"><a target="_blank" href="{{$order->bid->post->item_url}}">{{$order->bid->post->item_url}}</a></span></b>
                   {{-- <hr class="margin10px"> --}}
                <div class="fullWidth marginLef backgrounpurple borderRad10px">
                  <p class="white paddingLef3per">Deliver to: <b>{{$order->bid->post->to_loc}} {{$order->bid->post->to_city}},{{$order->bid->post->to_country}}</b>
                    <br/>Deliver from: <b>{{$order->bid->post->from_loc}} {{$order->bid->post->from_city}},{{$order->bid->post->from_country}}</b></p>

                </div>
                <p class="marginLef fullWidth">
                <b class="grayee">Bidding Amount ${{$order->bidding_amount}} </b><br/>
                  <b class="grayee">item price ${{$order->bid->post->item_price}}</b>
                </p>
              </div>
            </div>
        @endforeach
      </div>
      @php
        $style='';
      @endphp

      @if( isset($status) && $status=='delivered' )
        <?php $style="display:unset;"; ?>
      @endif
        <div class="recieved_box" style="{{$style}}">
        @foreach ($orders as $order)
        <div class="fullWidth review" >
          @if ($order->status=='intransite')
            <div class="row" style="margin:10px 0">
              <div class="col-md-12" style="text-align:center;background-color:purple;color:white;">
                <label for="">Order has been marked as Delivered but still Pending from User's Side</label>
              </div>
            </div>
          @endif
          <div class="left" style="width: 25%">
          <img src="{{asset('uploads/postImages/'.$order->bid->post->image_1)}}" width="100%">
          </div>

          <div class="left" style="width: 75%">
          <div class="right">
          <label for="" style="background-color:#9e3e9e;color:white" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-edit"></span> Delivered
          </label>
          </div>
          <h3 class="paddingLef3per" style="margin-top:0">
            {{$order->bid->post->title}}
          </h3>
          <div class="fullWidth marginLef backgrounpurple borderRad10px">
            <p class="white paddingLef3per">Deliver to: <b>{{$order->bid->post->to_loc}} {{$order->bid->post->to_city}},{{$order->bid->post->to_country}}</b>
            <br/>Deliver from: <b>{{$order->bid->post->from_loc}} {{$order->bid->post->from_city}},{{$order->bid->post->from_country}}</b></p>
          </div>
          <p class="marginLef fullWidth">
            <b class="grayee">Bidding Amount: ${{$order->bidding_amount}}</b><br/>
            <b class="grayee">Item price ${{$order->bid->post->item_price}}</b>
          </p>
          <p class="pull-right" style="position:relative;bottom:0">
            <b class="grayee">Delivered on: {{$order->updated_at}}</b>
          </p>
          </div>
        </div>
      @endforeach
      </div>
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
  {{-- $(document).ready(function(){
    $(".requestedc > b").css("color", "#800080");
    $(".requestedc > b").css("border-bottom", "1px solid #800080");
    $(".requestedc").click(function(){
        $("#requested_box").show(700);
        $(".requestedc > b").css("color", "#800080");
        $(".requestedc > b").css("border-bottom", "1px solid #800080");
        $("#in_transite_box").hide();
        $("#recieved_box").hide();
        $("#inactive_box").hide();
        $(".in_transite > b").css("color", "#777");
        $(".in_transite > b").css("border-bottom", "none");
        $(".recieved > b").css("color", "#777");
        $(".recieved > b").css("border-bottom", "none");
        $(".inactive > b").css("color", "#777");
        $(".inactive > b").css("border-bottom", "none");
    });
    $(".in_transitec").click(function(){
        $("#requested_box").hide();
        $("#in_transite_box").show(700);
        $(".in_transitec > b").css("color", "#800080");
        $(".in_transitec > b").css("border-bottom", "1px solid #800080");
        $("#recieved_box").hide();
        $("#inactive_box").hide();
        $(".requestedc > b").css("color", "#777");
        $(".requestedc > b").css("border-bottom", "none");
        $(".recievedc > b").css("color", "#777");
        $(".recievedc > b").css("border-bottom", "none");
        $(".inactivec > b").css("color", "#777");
        $(".inactivec > b").css("border-bottom", "none");

    });
    $(".recievedc").click(function(){
        $("#requested_box").hide();
        $("#in_transite_box").hide();
        $("#recieved_box").show(700);
        $(".recievedc > b").css("color", "#800080");
        $(".recievedc > b").css("border-bottom", "1px solid #800080");
        $(".inactive_box").hide();
        $(".requestedc > b").css("color", "#777");
        $(".requestedc > b").css("border-bottom", "none");
        $(".in_transitec > b").css("color", "#777");
        $(".in_transitec > b").css("border-bottom", "none");
        $(".inactivec > b").css("color", "#777");
        $(".inactivec > b").css("border-bottom", "none");
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
  }); --}}
@endsection
