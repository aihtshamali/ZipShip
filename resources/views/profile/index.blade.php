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
      <div class="halfWidth"><div class="left button borderRad10px border backgrounpurple white">Edit Profile</div></div>
    </a>
    <!-- <div class="clear review marginTopTen"> -->
    </div>
</div>
@endsection
