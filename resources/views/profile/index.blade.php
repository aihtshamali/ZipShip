@extends('layouts.app')
@section('content')
<div class="container profile animate-left backgrounwhite border">
    <div>
        <div class="left halfWidth">
        <p class="boldName">
          {{$user->firstname}} {{$user->lastname}}
        </p>
        <p class="grayee">
            Joined in {{date('M , Y',strtotime($user->created_at))}}<br/>
            <br/>Rating <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
        </p>
    </div>
    <a href="#!">
        <div class="left halfWidth">
            <img src="{{asset('uploads/userprofile/'.$user->dp)}}" width="150px" class="right circle">
        </div>
    </a>
    </div>
    <div class="clear borderRad10px backgrounpurple">
        <span class="pointer">verified info</span>
        {{-- Total numbers of Orders --}}
        <!-- <span>varify email</span> -->
        <!-- <span>phone number</span> -->
    </div>
    <center>
      <h2>{{$user->address}}</h2>
    </center>
    <a href="{{route('profile.edit',Auth::user()->id)}}">
      <div class="left button borderRad10px border backgrounpurple white width20" style="padding:1% !important;"><center>Edit Profile</center></div>
    </a>
    <a href="#">
      <div  class="myBtn right button borderRad10px border backgrounpurple white width20" style="padding:1% !important;"><center class="capitalize">change pasword</center></div>
    </a>
    <!-- The Modal -->
      <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content container width30">
          <span class="close" style="padding-bottom: 10%;">&times;</span>
          <form class="" method="POST" action="{{route('updatePassword')}}">
            <div class="form-group">
                <center><h4 style="margin-top: 0px !important;">Change Password</h4></center>
            <label class="grayee capitalize" style="font-size: 17px;">current password</label>
              <input type="text" name="" step="0.1" placeholder="Current Password" class="form-control" value="" required>
            </div>
            <div class="form-group">
            <label class="grayee capitalize" style="font-size: 17px;">New password</label>
            <input type="text" name="" step="0.1" placeholder="New Password" class="form-control" value="" required>
            </div>
            <div class="form-group">
            <label class="grayee capitalize" style="font-size: 17px;">Confirm password</label>
            <input type="text" name="" step="0.1" placeholder="Confirm Password" class="form-control" value="" required>
            </div>
            <div class="form-group">
                <span class="right onhoveroshadow"><input type="submit" name="bid" class="btn bg-colored white" value="Update"></span>
            </div>
        </form>
        </div>

      </div>
    <!-- <div class="clear review marginTopTen"> -->
    </div>
</div>
@endsection
