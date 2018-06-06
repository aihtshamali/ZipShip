@extends('layouts.app')

@section('script')
  $(document).ready(function() {
    var citylist = $('#citylist');
    var temp=0;
    var citiess = countries.getCities('Pakistan').map(function(){
      var city=countries.getCities('Pakistan')[temp++];
      {{-- console.log(city); --}}
      return [city, city];
    });
    var temp=0;
    $.each(citiess,function(index,value){
      citylist.append($('<option/>').attr('value', this[0]).text(this[1]));
      temp++;
    });
    console.log(citylist);
  });
@endsection

@section('content')
<select  class="selectpicker selectCity" data-show-subtext="true" data-live-search="true" id="citylist" name="from_city">
    <option value="">Select City</option>
</select>
@endsection
@section('scriptTags')
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
@endsection
