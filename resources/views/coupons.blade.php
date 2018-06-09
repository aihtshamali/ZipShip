@extends('layouts.app')
@section('content')
<div class="container profile animate-left">
    
          <form class="" action="" method="post" enctype="multipart/form-data" style="width: 75%;margin: auto">
            <div id="firstDiv" style="">
            <div class="card row">
              <label for="product_image" class="d-b btn btn--bb-outline pos-r px30 mt20 h50 bdr5 as-s">
                <h3 class="left">Coupons</h3>
                <span class="right"><i class="fas fa-tags textpurple" style="font-size: 30px;"></i></span>
              </label>
            </div>
            <div class="row card">
              <span class="grayee" style="padding: 10px 0px 10px 0px">Add new coupon</span>
              <div class="form-group">
                <input type="text" name="title" placeholder="Enter new coupon code" class="form-control" value="">
              </div>
            </div>
            </div>
            <div class="row">
              <input name="" class="form-control btn " style="background-color:#9c57b8;color:white" value="Add coupon">
            </div>
          </div>
        </form>
</div>
@endsection