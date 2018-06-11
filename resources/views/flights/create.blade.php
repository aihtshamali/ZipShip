@extends('layouts.app')
@section ('styleTags')
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
@endsection
@section('style')
  .selectCountry , .selectCity, .tselectCity,.tselectCountry{
    width:100% !important;  }

    #app{background: #fff;}
@endsection

@section('content')

<div class="container profile animate-left">
    <form class="border padding2per width40 marginauto" action="{{route('flight.store')}}" method="post" enctype="multipart/form-data" style="">
      {{ csrf_field() }}
        <div id="firstDiv" style="">
        	<center><i class="fa fa-code-branch textpurple" style="font-size: 50px;"></i>
        		<h3>Add New Trip</h3>
        		<span class="grayee">With a trip added, you can make multiple offers and make more money.</span>
          </center>
          <div class=" card" style="margin-top: 7%;">
            <label for=""> Source </label>
            <div class="form-group">
              <select  class="selectpicker selectCountry" style="width:100%;" data-show-subtext="true" data-live-search="true" id="countrylist" name="from_country">
                <option value="">Select Country</option>
              </select>
            </div>
            <div class="form-group CitySelect">
              <select  class="selectpicker selectCity" data-show-subtext="true" data-live-search="true" id="citylist" name="from_city">
                <option value="" hidden>Select City</option>
              </select>
            </div>
            <label for=""> Destination </label>
            <div class="form-group">
              <select  class="selectpicker tselectCountry" style="width:100%;" data-show-subtext="true" data-live-search="true" id="tcountrylist" name="to_country">
                <option value="">Select Country</option>
              </select>
            </div>
            <div class="form-group tCitySelect">
              <select  class="selectpicker tselectCity" data-show-subtext="true" data-live-search="true" id="tcitylist" name="to_city">
                <option value="">Select City</option>
              </select>
            </div>
            <div class="form-group">
              <input type="date" name="date" placeholder="date" class="form-control" value="">
          </div>
        </div>
        <div class="">
          <input name="submit" type="submit" class="form-control btn " style="background-color:#9c57b8;color:white" value="Add">
        </div>
      </div>
    </form>
</div>
@endsection
@section('script')
  {{-- adding Countries to SELECT   --}}
  {{-- Source of Item --}}
  var temp=0;
  var countriess = countries.getCountries().map(function(){
    var country=this['countries'].getCountries()[temp++];
  return [country, country];
  });
    var countrylist = $('.selectCountry');
    $.each(countriess,function(index,value){
        countrylist.append($('<option/>').attr('value', this[0]).text(this[1]));
  });
   $('.selectCountry').on('change',function(){

     {{-- console.log(countries.getCities($('.selectCountry').val())); --}}
     var temp=0;
     var citiess = countries.getCities($('.selectCountry').val()).map(function(){
      var city=countries.getCities($('.selectCountry').val())[temp++];
      return [city, city];
    });

    var cityl = $('.CitySelect');
    $('select.selectCity,div.selectCity').remove();
    cityl.append('<select  class="selectpicker selectCity" data-show-subtext="true" data-live-search="true" id="citylist" name="from_city"><option value="">Select City</option></select>')
    var citylist=$('#citylist');
    $.each(citiess,function(index,value){
        citylist.append($('<option/>').attr('value', this[0]).text(this[1]));

    });
    citylist.selectpicker('render');
  });
  {{-- Destination of item --}}
  {{-- var temp=0;
  var countriess = countries.getCountries().map(function(){
    var country=this['countries'].getCountries()[temp++];
  return [country, country];
  }); --}}
    var countrylist = $('.tselectCountry');
    $.each(countriess,function(index,value){
        countrylist.append($('<option/>').attr('value', this[0]).text(this[1]));
  });
   $('.tselectCountry').on('change',function(){

     {{-- console.log(countries.getCities($('.selectCountry').val())); --}}
     var temp=0;
     var citiess = countries.getCities($('.tselectCountry').val()).map(function(){
      var city=countries.getCities($('.tselectCountry').val())[temp++];
      return [city, city];
    });

    var cityl = $('.tCitySelect');
    $('select.tselectCity,div.tselectCity').remove();
    cityl.append('<select  class="selectpicker tselectCity" data-show-subtext="true" data-live-search="true" id="tcitylist" name="to_city"><option value="">Select City</option></select>')
    var citylist=$('#tcitylist');
    $.each(citiess,function(index,value){
        citylist.append($('<option/>').attr('value', this[0]).text(this[1]));

    });
    citylist.selectpicker('render');
  });
@endsection
@section('scriptTags')
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
@endsection
