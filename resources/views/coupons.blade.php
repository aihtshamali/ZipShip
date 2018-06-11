@extends('layouts.app')
@section('style')
        #app{background-color: #fff !important;}
        .form-control{padding: 23px 12px;}
@endsection
@section('content')
<div class="container profile animate-left">

          <form class="" action="" method="post" enctype="multipart/form-data" style="width: 75%;margin: auto">
            <div id="firstDiv" style="">
            <div class="card row border">
              <label for="" class="fullwidth">
                <h3 class="left">Coupons</h3>
                <span class="right"><i class="fas fa-tags textpurple" style="font-size: 30px;padding-top: 50%"></i></span>
              </label>
            </div>
            <div class="row card border padding2per" style="border-bottom: none;padding-bottom: 0px !important;">
              <b class="grayee">Add new coupon</b><br/>
              <div class="padding1per"></div>
              <div class="form-group">
                <input type="text" name="title" placeholder="Enter new coupon code" class="form-control" value="">
              </div>
            </div>
            </div>
            <div class="row padding2per border" style="padding-top: 0px !important;border-top: none;">
              <input name="" class="form-control btn " style="background-color:#9c57b8;color:white" value="Add coupon">
            </div>
          </div>
        </form>
</div>
@endsection
