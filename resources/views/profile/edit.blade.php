@extends('layouts.app')
@section('Pagetitle')
  Edit Profile
@endsection
@section ('styleTags')
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
@endsection
@section('style')
  .selectCountry , .selectCity, .tselectCity,.tselectCountry{
    width:100% !important;
  }
@endsection

@section('content')

<div class="width30 marginauto profile animate-left border backgrounwhite">
    <form class="" action="{{route('profile.update',Auth::user()->id)}}" method="post" enctype="multipart/form-data" style="width: 100%;margin: auto;">
      {{method_field('PATCH')}}
      {{ csrf_field() }}
        <div id="firstDiv" class="" style="">
        	<center><img src="{{asset('uploads/userProfile/'.$user->dp)}}" class="thumbnail circle" width="150px" alt="profile-pic">
        		<h3>Update Your info</h3>
        		<span class="grayee">You can affect how likely people are to find your profile.</span>

          </center>
          <div class="form-group">
            <label for="dp" class="btn form-control" style="background-color:#9c57b8;color:white">Upload Your Dp</label>
            <input type="file" onchange="readURL(this);" id="dp" name="dp" style="display:none" value="">
          </div>
          <div class=" card" style="margin-top: 7%;">
            <div class="form-group">
              <input type="text" class="form-control" name="firstname" placeholder="First Name" value="{{$user->firstname}}">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="lastname" placeholder="Last Name" value="{{$user->lastname}}">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="email" placeholder="Email Address" value="{{$user->email}}">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="phone" placeholder="Phone" value="{{$user->phone}}">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="address" placeholder="Address" value="{{$user->address}}">
            </div>
          </div>
        <div class="">
          <input name="submit" type="submit" class="form-control btn " style="background-color:#9c57b8;color:white" value="Update">
        </div>
      </div>
    </form>
</div>
@endsection
@section('script')
function readURL(input) {
    if (input.files && input.files[0]) {//Check if input has files.
      var reader = new FileReader(); //Initialize FileReader.
      reader.onload = function (e) {
      $('img.thumbnail').attr('src', e.target.result);
        {{-- $(".thumbnail").resizable({ aspectRatio: true, maxHeight: 300 }); --}}
      };
      console.log(input);
      reader.readAsDataURL(input.files[0]);
      }
      else {
        $('.thumbnail').attr('src', "#");
      }
  }
@endsection
