@extends('layouts.app')
@section('style')
  @media screen and (min-width: 580px)
.SM_fz-xl {
    font-size: 1.875rem;
}

@media screen and (min-width: 580px)
.SM_fz-xl {
    font-size: x-large;
}
.fw600, .fw-sb {
    font-weight: 600;
}
.fz-l, .markdown h3 {
    font-size: 1.375rem;
}
.fz-l, .markdown h3 {
    font-size: large;
}
@media screen and (min-width: 580px)
.SM_c-b, .SM_c-b-hf:focus, .SM_c-b-hf:hover {
    color: #000;
}
#app{background: #fff;}
.navbar-static-top{margin-bottom:0px !important;}
@endsection
@section('content')
<div class="fullwidth backgrounwhite profile animate-left paddingtop1_5per paddingbottom1_5per border">
    <div class="container">
        <div class="left width40">
        <p class="boldName">
            Deliveries
        </p>
    </div>
    <div class="right width40">
      <a href="{{ route('flight.create') }}"><div class="right button borderRad10px white backgrounpurple" style="width:60%;">
        <i class="fa fa-code-branch"></i><b class="white noborder">Add Trip</b></div></a>
    </div>
    </div>
  </div>
    <div class="clear review container ">
      <h1 style="margin-top:0">Upcoming Trips</h1>
      <center>
        @foreach ($flights as $flight)
          <a href="{{route('makeOffer.index')}}">
            <div class="row">
              <div class="col-md-4">
                <img src="{{asset('uploads/postImages/BY7dcEwqgtUHRfj8TaFSrAWX4rp3uoMJoUe0DCOY.png')}}" class="thumbnail" alt="">
              </div>
              <div class="col-md-5">
                <div class="fz-l c-w fw-sb SM_fz-xl SM_c-b"><span>{{$flight->source_city}} , {{$flight->source_country}} - {{$flight->destination_city}} , {{$flight->destination_country}}</span></div>
                <div class="fz14 c-w SM_fz-xl SM_c-g44 SM_ord2"><span>{{date('M d, Y ',strtotime($flight->date))}}</span></div>
              </div>
            </div>
          </a>
        @endforeach
      </center>
    </div>
</div>
@endsection
