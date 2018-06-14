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
            Orders
        </p>
        <p class="menuOrders">
            <span class="requestedc"><a href="{{route('post.index')}}"><b>Requested</b></a></span>
            <span class="in_transitec"><a href="{{route('getpost',['status'=>'intransite'])}}"><b>In Transite</b></a></span>
            <span class="recievedc"><a href="{{route('getpost',['status'=>'received'])}}"><b>Received</b></a></span>
            <!-- <span id="inactive"><b>inactive</b></span> -->
        </p>
    </div>
    </div>
    @php
      $style=''
    @endphp
    @if (isset($status) && $status=='requested')
      <?php $style="display:unset" ?>;
    @endif
    <div class="clear container" >
      @foreach($orders as $order)
        <span style="{{$style}}" class="requested_box">
          <div class="marginauto border padding1per backgrounwhite clear">
          @if(isset($order->bids($order->id)[0]->bids_count) && $order->bids($order->id)[0]->bids_count > 0)
            <b><span class="textpurple">{{$order->bids($order->id)[0]->bids_count}} People requested </span></a>on your Post
            <span class="right boldName grayee" style="line-height:normal"><a href="{{route('showRequests',$order->id)}}"><button data-id="{{$order->id}}"  id="showRequests" class="btn btn-md bg-colored white"> See all Requests</button></a></span>
          @endif
        </div>
        <div >
          <div class="fullWidth review" >
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
              {{$order->bids($order->id)[0]->bids_count}}  Requested<br/>
                <b class="grayee">Item price ${{$order->item_price}}</b>
              </p>
            </div>
          </div>
        </div>
      </span>
      @endforeach
      @php
        $style='';
      @endphp
      @if (isset($status) && $status=='intransite')
        <?php $style="display:unset"?>
      @endif
      <div class="in_transite_box" style="{{$style}}">
          @foreach($orders as $order)
            @if(isset($order->bids($order->id)[0]->bids_count) && $order->bids($order->id)[0]->bids_count > 0)
              <b class="container"><span class="textpurple capitalize">{{$order->getuser($order->bids($order->id)[0]->user_id)->firstname}} requested </span></a>on your Post
                <span class="right boldName grayee" style="line-height:normal"><a href="{{route('chat.show',$order->user_id)}}"><button class="btn btn-sm bg-colored white" style="line-height:normal">Contact to {{$order->user->firstname}}</button></a></span>
              </b>
              @endif
            <div class="fullWidth review" >
              <div class="left" style="width: 25%">
                <img src="{{asset('uploads/postImages/'.$order->image_1)}}" width="100%">
              </div>
              <div class="left" style="width: 75%">
                <div class="right">
                  <a type="button" href="{{route('setPoststatus',['id'=>$order->id,'status'=>'received'])}}" style="background-color:#9e3e9e;color:white !important" class="btn btn-default btn-sm">
                    <span class="glyphicon glyphicon-edit"></span> Received
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
                <b class="grayee">Bidding Amount ${{$order->bids($order->id)[0]->amount}} </b><br/>
                  <b class="grayee">item price ${{$order->item_price}}</b>
                </p>
              </div>
            </div>
        @endforeach
      </div>
      @php
        $style='';
      @endphp

      @if( isset($status) && $status=='received' )
        <?php $style="display:unset;"; ?>
      @endif
        <div class="recieved_box" style="{{$style}}">
        @foreach ($orders as $order)
        <div class="fullWidth review" >
          @if ($order->traveler_status=='pending')
            <div class="row" style="margin:10px 0">
              <div class="col-md-12" style="text-align:center;background-color:purple;color:white;">
                <label for="">Post has been Received but still panding from Traveler's  Side</label>
              </div>
            </div>
          @endif
          <div class="left" style="width: 25%">
          <img src="{{asset('uploads/postImages/'.$order->image_1)}}" width="100%">
          </div>

          <div class="left" style="width: 75%">
          <div class="right">
          <label for="" style="background-color:#9e3e9e;color:white" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-edit"></span> Received
          </label>
          </div>
          <h3 class="paddingLef3per" style="margin-top:0">
            {{$order->title}}
          </h3>
          <div class="fullWidth marginLef backgrounpurple borderRad10px">
            <p class="white paddingLef3per">Deliver to: <b>{{$order->to_loc}} {{$order->to_city}},{{$order->to_country}}</b>
            <br/>Deliver from: <b>{{$order->from_loc}} {{$order->from_city}},{{$order->from_country}}</b></p>
          </div>
          <p class="marginLef fullWidth">
            <b class="grayee">Bidding Amount: ${{$order->bidding_amount}}</b><br/>
            <b class="grayee">Item price ${{$order->item_price}}</b>
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
