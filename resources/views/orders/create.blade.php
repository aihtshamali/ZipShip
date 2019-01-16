@extends('layouts.app')

@section ('styleTags')
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
  <!-- font awesom -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
@endsection
@section('style')
  .selectCountry , .selectCity, .tselectCity,.tselectCountry{
    width:100% !important;
  }
  body{
         color:black;
         {{-- font-family: Graphik,Helvetica Neue,Arial,sans-serif; --}}
     }
     .headingcolor{
       background-color:#9c57b8;
       border-right:1px solid white;
       color:white;
       border-radius:5px;
       min-height: 40px;
     }
     .disnone{display: none;}
     {{-- b{color: #9c57b8;} --}}
     p{color: #777 !important;
     font-size: 14px !important;
     font-weight: 400 !important;}
     p span{font-size: 17px;}
     #Cancel, #CancelTwo{color: #777;font-weight: 600;font-size:17px;padding: 1%;}
     .cursolOnhover:hover{cursor: pointer}
     .label{
       color:unset;
       {{-- font-family: Graphik,Helvetica Neue,Arial,sans-serif; --}}
       font-size: 16px;
       padding:0px !important;
     }
     .icon {
       vertical-align: middle;
       fill: transparent;
       stroke: currentColor;
       stroke-linecap: round;
       stroke-linejoin: round;
       stroke-miterlimit: 10;
     }
     @media screen and (min-width: 980px)
     .btn--bb-outline:focus:not([disabled]), .request-delivery-link--button:focus:not([disabled]), .btn--bb-outline:hover:not([disabled]), .request-delivery-link--button:hover:not([disabled]), .link--w:focus, .link--w:hover, .MD_c-w, .MD_c-w-hf:focus, .MD_c-w-hf:hover {
         color: #fff;
     }

     @media screen and (min-width: 980px)
     .btn--bb-outline:focus:not([disabled]), .request-delivery-link--button:focus:not([disabled]), .btn--bb-outline:hover:not([disabled]), .request-delivery-link--button:hover:not([disabled]), .MD_bdc-dbb, .MD_bdc-dbb-hf:focus, .collections-page__input:focus, .MD_bdc-dbb-hf:hover, .collections-page__input:hover {
         border-color: #3a94ab;
     }
     @media screen and (min-width: 980px)
     .btn--bb-outline:focus:not([disabled]), .request-delivery-link--button:focus:not([disabled]), .btn--bb-outline:hover:not([disabled]), .request-delivery-link--button:hover:not([disabled]), .btn--bb:focus:not([disabled]), .btn--bb:hover:not([disabled]), .MD_bgc-dbb, .MD_bgc-dbb-hf:focus, .MD_bgc-dbb-hf:hover {
         background-color: aqua;
     }
     .btn--bb-outline, .request-delivery-link--button, .btn--bb-outline:focus, .request-delivery-link--button:focus, .btn--bb-outline:hover, .request-delivery-link--button:hover, .c-bb, .request-delivery-link--icon, .c-bb-hf:focus, .request-delivery-link--icon:focus, .c-bb-hf:hover, .request-delivery-link--icon:hover, .link--bb, .link--bb:focus, .link--bb:hover, .markdown a:focus:not([class]), .markdown a:hover:not([class]), .markdown a:not([class]) {
         color: #9c57b8;
     }
     .ai-c, .btn:not(button), .request-delivery-link--button:not(button), .request-delivery-link--button-grey:not(button) {
         -webkit-box-align: center;
         -ms-flex-align: center;
         align-items: center;
     }
     .btn:not(button), .request-delivery-link--button:not(button), .request-delivery-link--button-grey:not(button), .jc-c {
         -webkit-box-pack: center;
         -ms-flex-pack: center;
         justify-content: center;
     }
     .btn:not(button), .request-delivery-link--button:not(button), .request-delivery-link--button-grey:not(button), .fx-r, .fxd-r {
         /* -webkit-box-orient: horizontal; */
         /* -webkit-box-direction: normal; */
         -ms-flex-direction: ;
         /* flex-direction: ; */
     }
     .btn:not(button), .request-delivery-link--button:not(button), .request-delivery-link--button-grey:not(button), .fx-c, .itinerary-preview--detailed, body, #app-root, .fx-cr, .fx-r, .fx-rr {
         display: -webkit-box;
         display: -ms-flexbox;
         display: flex;
     }
     .btn, .request-delivery-link--button, .request-delivery-link--button-grey, .input, .link, .markdown a:not([class]), .trp-ac, .request-delivery-link--icon {
         -webkit-transition-property: color,background-color,border-color;
         transition-property: color,background-color,border-color;
     }
     .btn, .request-delivery-link--button, .request-delivery-link--button-grey, .input, .link, .markdown a:not([class]), .trtf-l {
         -webkit-transition-timing-function: linear;
         transition-timing-function: linear;
     }
     .btn, .request-delivery-link--button, .request-delivery-link--button-grey, .input, .link, .markdown a:not([class]), .trd300ms, .request-delivery-link--icon, .system-message__bg {
         -webkit-transition-duration: .3s;
         transition-duration: .3s;
     }
     .pos-r, .editable-image-list--sticky.editable-image-list {
         position: relative;
     }
     .markdown ol, .markdown ul, .pl30, .px30 {
         padding-left: 30px;
     }
     .pr30, .px30 {
         padding-right: 30px;
     }
     .h50, .itinerary-preview--detailed .itinerary-preview__avatar {
         height: 50px;
     }
     .as-s {
         -ms-flex-item-align: stretch;
         align-self: stretch;
     }
     .d-b, .request-delivery-link--icon .request-delivery-link__icon, .scroll-lock body {
         display: block;
     }
     .btn, .request-delivery-link--button, .request-delivery-link--button-grey, .cur-p, .link, .markdown a:not([class]) {
         cursor: pointer;
     }
     .bdr5, .itinerary-preview--detailed, .request-delivery-link--button, .request-delivery-link--button-grey {
         border-radius: 5px;
     }
     .bds-s, .overlapping-user-avatars__avatar, .overlapping-user-avatars__total, .btn, .request-delivery-link--button, .request-delivery-link--button-grey, .input {
         border-style: solid;
     }
     .bdw1, .request-delivery-link--icon .request-delivery-link__details, .btn, .request-delivery-link--button, .request-delivery-link--button-grey, .input {
         border-width: 1px;
     }
     .bdc-bb, .dots__circle--active, .bdc-bb-hf:focus, .bdc-bb-hf:hover, .btn--bb-outline, .request-delivery-link--button {
         border-color: #9c57b8;
     }
     .bgc-tt, .bgc-tt-hf:focus, .bgc-tt-hf:hover, .btn--bb-outline, .request-delivery-link--button, .btn--fb-outline, .btn--g-outline, .btn--tw-outline {
         background-color: transparent;
     }
     :focus, :hover {
         outline: none;
         -webkit-tap-highlight-color: transparent;
     }
     *, :after, :before {
         -webkit-box-sizing: border-box;
         box-sizing: border-box;
         -ms-text-size-adjust: 100%;
         -webkit-text-size-adjust: 100%;
     }
     user agent stylesheet
     label {
         cursor: default;
     }
     :focus, :hover {
         outline: none;
         -webkit-tap-highlight-color: transparent;
     }
     *, :after, :before {
         -webkit-box-sizing: border-box;
         box-sizing: border-box;
         -ms-text-size-adjust: 100%;
         -webkit-text-size-adjust: 100%;
     }
     :focus, :hover {
         outline: none;
         -webkit-tap-highlight-color: transparent;
     }
     *, :after, :before {
         -webkit-box-sizing: border-box;
         box-sizing: border-box;
         -ms-text-size-adjust: 100%;
         -webkit-text-size-adjust: 100%;
     }
     :focus, :hover {
         outline: none;
         -webkit-tap-highlight-color: transparent;
     }
     *, :after, :before {
         -webkit-box-sizing: border-box;
         box-sizing: border-box;
         -ms-text-size-adjust: 100%;
         -webkit-text-size-adjust: 100%;
     }
     :focus, :hover {
         outline: none;
         -webkit-tap-highlight-color: transparent;
     }
     *, :after, :before {
         -webkit-box-sizing: border-box;
         box-sizing: border-box;
         -ms-text-size-adjust: 100%;
         -webkit-text-size-adjust: 100%;
     }
     :focus, :hover {
         outline: none;
         -webkit-tap-highlight-color: transparent;
     }
     *, :after, :before {
         -webkit-box-sizing: border-box;
         box-sizing: border-box;
         -ms-text-size-adjust: 100%;
         -webkit-text-size-adjust: 100%;
     }
     :focus, :hover {
         outline: none;
         -webkit-tap-highlight-color: transparent;
     }
     *, :after, :before {
         -webkit-box-sizing: border-box;
         box-sizing: border-box;
         -ms-text-size-adjust: 100%;
         -webkit-text-size-adjust: 100%;
     }
     :focus, :hover {
         outline: none;
         -webkit-tap-highlight-color: transparent;
     }
     *, :after, :before {
         -webkit-box-sizing: border-box;
         box-sizing: border-box;
         -ms-text-size-adjust: 100%;
         -webkit-text-size-adjust: 100%;
     }
     .fx-c, .itinerary-preview--detailed, body, #app-root, .fxd-c {
         -webkit-box-orient: vertical;
         -webkit-box-direction: normal;
         -ms-flex-direction: column;
         flex-direction: column;
     }
     :focus, :hover {
         outline: none;
         -webkit-tap-highlight-color: transparent;
     }
     *, :after, :before {
         -webkit-box-sizing: border-box;
         box-sizing: border-box;
         -ms-text-size-adjust: 100%;
         -webkit-text-size-adjust: 100%;
     }
     .fx-c, .itinerary-preview--detailed, body, #app-root, .fxd-c {
         -webkit-box-orient: vertical;
         -webkit-box-direction: normal;
         -ms-flex-direction: column;
         flex-direction: column;
     }
     :focus, :hover {
         outline: none;
         -webkit-tap-highlight-color: transparent;
     }
     *, :after, :before {
         -webkit-box-sizing: border-box;
         box-sizing: border-box;
         -ms-text-size-adjust: 100%;
         -webkit-text-size-adjust: 100%;
     }
     :focus, :hover {
         outline: none;
         -webkit-tap-highlight-color: transparent;
     }
     .lh-t, body {
         line-height: 1.5;
     }
     .-wfsm-sa, body {
         -webkit-font-smoothing: subpixel-antialiased;
     }
     .fw400, .fw-r, body {
         font-weight: 400;
     }
     .ff-ss, body {
         {{-- font-family: Graphik,Helvetica Neue,Arial,sans-serif; --}}
     }
     .ff-ss, body {
         {{-- font-family: sans-serif; --}}
     }
     .fz16, body {
         font-size: 16px;
     }
     .fx-c, .itinerary-preview--detailed, body, #app-root, .fxd-c {
         -webkit-box-orient: vertical;
         -webkit-box-direction: normal;
         -ms-flex-direction: column;
         flex-direction: column;
     }
     .btn--fb-outline, .btn--g, .request-delivery-link--button-grey, .btn--g-outline, .btn--g-outline:focus, .btn--g-outline:hover, .btn--g:focus, .request-delivery-link--button-grey:focus, .btn--g:hover, .request-delivery-link--button-grey:hover, .btn--tw-outline, .c-b, .section--tt .section__title, .section--w .section__title, .section--g3 .section__title, .section--g7 .section__title, .system-message--info, body, .c-b-hf:focus, .c-b-hf:hover, .input--g, .input--g-fail, .input--w, .input--w-fail, .input--w-outline, .link--b, .link--b:focus, .link--b:hover, .markdown h1, .markdown h2, .markdown h3, .markdown h4, .markdown h5, .markdown h6 {
         color: #000;
     }
     .d-n, .public-inquiry-card__outer-picture, .public-inquiry-card__inner-boost-plate, .public-inquiry-card--detailed .public-inquiry-card__inner-boost-plate, .LG_public-inquiry-card--detailed .public-inquiry-card__inner-boost-plate, .button--short.pending .button__content, .request-delivery-link__icon, .testimonials-preview-section__content:after {
       display: none !important;
   }
   :focus, :hover {
       outline: none;
       -webkit-tap-highlight-color: transparent;
   }

     *, :after, :before {
         -webkit-box-sizing: border-box;
         box-sizing: border-box;
         -ms-text-size-adjust: 100%;
         -webkit-text-size-adjust: 100%;
     }

     @media screen and (min-width: 580px)
   .SM_l20 {
       left: 20px;
   }
   .l10 {
       left: 10px;
   }
   .b0, .testimonials-preview-section__content:after {
       bottom: 0;
   }
   .t0 {
       top: 0;
   }
   .pos-a, .testimonials-preview-section__content:after, .scroll-lock .system-messages, .scroll-lock .zendesk__button, .scroll-lock .header__sidebar, .scroll-lock .header__main {
       position: absolute;
   }
   .ai-c, .btn:not(button), .request-delivery-link--button:not(button), .request-delivery-link--button-grey:not(button) {
       -webkit-box-align: center;
       -ms-flex-align: center;
       align-items: center;
   }
   .btn:not(button), .request-delivery-link--button:not(button), .request-delivery-link--button-grey:not(button), .jc-c {
       -webkit-box-pack: center;
       -ms-flex-pack: center;
       justify-content: center;
   }
   .btn:not(button), .request-delivery-link--button:not(button), .request-delivery-link--button-grey:not(button), .fx-r, .fxd-r {
       -webkit-box-orient: horizontal;
       -webkit-box-direction: normal;
       -ms-flex-direction: ;
       flex-direction: ;
   }
   .btn:not(button), .request-delivery-link--button:not(button), .request-delivery-link--button-grey:not(button), .fx-c, .itinerary-preview--detailed, body, #app-root, .fx-cr, .fx-r, .fx-rr {
       display: -webkit-box;
       display: -ms-flexbox;
       display: flex;
   }
   *, :after, :before {
       -webkit-box-sizing: border-box;
       box-sizing: border-box;
       -ms-text-size-adjust: 100%;
       -webkit-text-size-adjust: 100%;
   }
    {{-- user agent stylesheet --}}
   div {
       display: block;
   }
   .btn:not(button), .request-delivery-link--button:not(button), .request-delivery-link--button-grey:not(button), .fx-r, .fxd-r {
       -webkit-box-orient: horizontal;
       -webkit-box-direction: normal;
       -ms-flex-direction: ;
       flex-direction: ;
     }
     .card{
       margin-top:15px;
     }
article
{
    {{-- width: 80%; --}}
    margin:auto;
    {{-- margin-top:10px; --}}
}
.thumbnail{

    height: 100px;
    margin: 10px;
    float: left;
}
#clear{
   display:none;
}
#result {
    border: 4px dotted #cccccc;
    display: none;
    float: right;
    margin:5px auto;
    width: 473px;
}
@endsection
@section('content')
  <div class="container">
      <div class="" >
        <div class="border width50 backgrounwhite marginauto padding1per" >
            <div class="">
              <h1><b>Get your item in 3 easy steps<b></h1>
            </div>
            <div class="">
              <div class="pointer col-md-4 col-xs-4 headingcolor showFirstDiv">
                <h5>Tell us about your item</h5>
              </div>
              <div class="pointer col-md-4 col-xs-4 headingcolor showSecondDiv ">
                <h5>Tell us where it’s going</h5>
              </div>
              <div class="pointer col-md-4 col-xs-4 headingcolor showThirdDiv">
                <h5>Checkout & delivery</h5>
              </div>
            </div>
            <form class="postForm" action="{{route('post.store')}}"  method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div id="firstDiv" style="">
              <div class="card ">
                <article>
                  <div class="label">
                    <label for="" style="font-weight:normal !important;"><b>Item Image (please provide at least one) <b></label>
                  </div>
                  <label for="product_image" class="d-b btn btn--bb-outline pos-r px30 mt20 h50 bdr5 as-s">
                    <input type="file" id="product_image" multiple name="product_image[]" class="d-n" accept="image/*">
                    <div class="fx-r ai-c jc-c pos-a t0 l10 b0 w25 SM_l20" style="display:inline;padding-top:2.5%">
                      <!-- <svg width="26" height="20" vector-effect="non-scaling-stroke" class="icon camera-icon" viewBox="0 0 27 21">
                        <path d="M25.5 5v13c0 .8-.7 1.5-1.5 1.5H2c-.8 0-1.5-.7-1.5-1.5V5c0-.8.7-1.5 1.5-1.5h5c.3 0 .5-.1.6-.4l1.1-1.9C9 .7 9.5.5 10 .5h5.6c.5 0 1 .3 1.3.7L18 3.1c.1.2.4.4.6.4H24c.8 0 1.5.7 1.5 1.5z" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></path>
                        <circle cx="13" cy="10.9" r="5.5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></circle>
                      </svg> -->
                      <i class="fas fa-camera" style="font-size: 23px;"></i>
                    </div>
                    <span>Upload image</span>
                  </label>
                </div>
                <output id="result"></output>
              </article>
              <div class=" card">
                <label for="" class="label">Item Name</label>
                <div class="form-group">
                  <input type="text" name="title" placeholder="Enter Item Name" class="form-control" value="" >
                </div>
              </div>
              <div class=" card">
                <label for="" class="label">Description</label>
                <div class="form-group">
                  <input type="text" name="description" placeholder="Enter Item Description" class="form-control" value="" >
                </div>
              </div>
              <div class=" card">
                <label for="" class="label">Item URL</label>
                <div class="form-group">
                  <input type="text" name="item_url" placeholder="Enter Item Description" class="form-control" value="" >
                </div>
              </div>
              <div class=" card">
                <label for="" class="label">Item Price (USD)</label>
                <div class="form-group">
                  <input type="text" name="item_price" placeholder="Enter price in $" class="form-control" value="" >
                </div>
              </div>
              <div class=" card">
                <label for="" class="label">Traveler's Reward (USD)</label>
                <div class="form-group">
                  <input type="text" name="reward" placeholder="Enter price in $" class="form-control" value="" >
                </div>
              </div>
              <div class=" card">
                <label for="" class="label">Quantity</label>
                <div class="form-group">
                  <input type="number" name="quantity" placeholder="Enter quantity" class="form-control" value="" >
                </div>
              </div>
              <div class="">
                <input id="" name="" class="form-control btn showSecondDiv" type="button" style="background-color:#9c57b8;color:white" value="Next">
              </div>
          </div>
              <div id="SecondDiv" class="disnone">
              <div class=" card">
                <label for="" class="label">Where is your item going?</label>
                <p>
                    Tell us which city to bring your item to. You’ll coordinate the exact delivery location and address with the traveler who brings you your item, so you only need to tell us the city & country right now.
                </p>
                <div class="form-group">
                  <select  class="selectpicker selectCountry" style="width:100%;" data-show-subtext="true" data-live-search="true" id="countrylist" name="from_country">
                    <option value="">Select Country</option>
                  </select>
                </div>
                <div class="form-group CitySelect">
                  <select  class="form-control selectCity" data-show-subtext="true" data-live-search="true" id="citylist" name="from_city">
                    <option value="">Select City</option>
                  </select>
                </div>

                <div class="form-group">
                  <input type="text" name="from_loc" placeholder="Source Adrress (Optional) " class="form-control" value="">
                </div>
                <label for="" class="label">Your Address?</label>
                <div class="form-group">
                  <select  class="selectpicker tselectCountry" style="width:100%;" data-show-subtext="true" data-live-search="true" id="tcountrylist" name="to_country">
                    <option value="">Select Country</option>
                  </select>
                </div>
                <div class="form-group tCitySelect">
                  <select  class="form-control tselectCity" data-show-subtext="true" data-live-search="true" id="tcitylist" name="to_city">
                    <option value="">Select City</option>
                  </select>
                </div>
                <div class="form-group">
                  <input type="text" name="to_loc" placeholder="Destination Address (Optional)" class="form-control" value="">
                </div>
                <div class="form-group">
                  <b class="headngOne cursolOnhover">
                      Specify your preferred delivery date
                  </b>
                  <p class="headngOne cursolOnhover">If you want your item to arrive by a specific date, please tell us.</p>
                  <div id="decOne" class="disnone">
                      <b>Delivery before</b>
                      <p>If you want your item to arrive by a specific date, please tell us.</p>
                      <input id="date" name="Deliver_before" type="date" class="form-control" style="color: #777" />
                      <p id="Cancel" class="cursolOnhover">Cancel</p>
                  </div>
                </div>
                <div class="form-group">
                  <b class="headngTwo cursolOnhover">
                      Add a note for your traveler
                  </b>
                  <div id="decTwo" class="disnone">
                      <p>Include a note to your traveler</p>
                      <input id="date" type="text" name="comment" class="form-control" style="color: #777" />
                      <p id="CancelTwo" class="cursolOnhover">Cancel</p>
                  </div>
                </div>
              <div class="">
                <input id="" name="" class="form-control btn showThirdDiv " type="button" style="background-color:#9c57b8;color:white" value="Next">
              </div>
              </div>
              </div>
              <div id="ThirdDiv" class="disnone">
                <div class=" card">
                <label for="" class="label">Almost there! Now, review your details.</label><br/>
                <div style="min-height: 150px">
                  <img src="#" width="30%" class="lastdiv_img" style="clear: both;float: left;" />
                  <div style="width: 67%;float:left;padding: 0px 0px 0px 10px">
                      <h4 class="lastdiv_title">Title</h4>
                      <div style="padding: 10px;width: 100%;">
                        <p><span>From:</span> <b class="lastdiv_from">country</b><br/>
                          <span>To:</span> <b class="lastdiv_to">City</b><br/>
                          <span>Deliver before:</span> <b class="lastdiv_before">mm/dd/yyyy</b>
                        </p>
                      </div>
                  </div>
                </div>
                <p>Below is the approximate price summary for your order delivery</p>
                <span style="float: left;color: #777">Item Price</span>
                <span style="float: right;color: #777" class="lastdiv_price">$6</span>
                <span style="clear:both;float: left;color: #777" >Reward</span>
                <span style="float: right;color: #777" class="lastdiv_tax">$12</span>
                <br/><br/><span style="color: #777;font-weight: 200;">This is the delivery cost which includes paying the traveler for shopping and delivering your order</span></p>
                <div class="form-group">
                <b><span style="float: left;color: #777">Estimated Total</span>
                <span style="float: right;color: #777" class="total">$18</span></b>
                </div>
                <div class="form-group">
                  <p style="text-align:justify;"><br/>This is the estimated total amount you’ll pay once you receive your item. When you and your traveler confirm order and delivery details, we’ll send you the updated total price. You will be asked to enter your credit card details as payment; however, this amount will not be transferred to your traveler until you confirm that you received your item.</p>
                </div>
                <hr/>
                <div class="form-group">
                  <p>By publishing my order, I agree to ZipShip’s <span>terms and conditions.</span></p>
                </div>
                <div class="">
                  <input type="submit" name="" class="form-control btn " style="background-color:#9c57b8;color:white" value="submit">
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
@endsection
@section('script')
  $(document).ready(function(){

    $("input[type=submit]").click(function(e) {
      e.preventDefault();
      if ($("input:invalid").length) {
        toastr.error('Please Fill out the  fields.', ' Fields');
      } else {
        $('.postForm').submit();
      }
    });
      $(".showThirdDiv").click(function(){
      $("#firstDiv").hide();
      $("#SecondDiv").hide();
      $("#ThirdDiv").show();
      $('.lastdiv_title').text($('input[name="title"]').val());
      $('.lastdiv_before').text($('input[name="Deliver_before"]').val());
      $('.lastdiv_price').text("$"+$('input[name="item_price"]').val());
      {{-- Total --}}
      {{-- $('.lastdiv_price').text("$"+explode($('lastdiv_tax').val(),'$')); --}}
      $('.lastdiv_img').attr('src',$('img.thumbnail').first().attr('src'));
      {{-- Source --}}
      var fcity=$('select[name="from_city"]').val();
      var fcountry=$('select[name="from_country"]').val();
      var faddress=$('input[name="from_loc"]').val();
      var from='';
      if(faddress){
        from=from+faddress;
        console.log(from);
        $('.lastdiv_from').text(from);

      }
      if(fcity){
        from=from+" "+fcity;
        console.log(from);
        $('.lastdiv_from').text(from);

      }
      if(fcountry){
        from=from+" ,"+fcountry;
        console.log(from);
        $('.lastdiv_from').text(from);
      }
      {{-- Destination --}}
      $('.lastdiv_from').text($('select[name="from_country"]').val());
      var tcity=$('input[name="to_city"]').val();
      var tcountry=$('input[name="to_country"]').val();
      var taddress=$('input[name="to_loc"]').val();
      var to='';
      if(taddress){
        to=to+taddress;
      }
      if(tcity){
        to=to+" "+tcity;
      }
      if(tcountry){
        to=to+" ,"+tcountry;
      }
      $('.lastdiv_to').text(to);
    });
    {{-- END Destination  --}}
    $(".showFirstDiv").click(function(){

      $("#firstDiv").show();
      $("#SecondDiv").hide();
      $("#ThirdDiv").hide();
    });
    $(".showSecondDiv").click(function(){

      $("#firstDiv").hide();
      $("#SecondDiv").show();
      $("#ThirdDiv").hide();
    });
    $(".headngOne").click(function(){
      $("#decOne").show();
      $(".headngOne").hide();
    });
    $("#Cancel").click(function(){
      $("#decOne").hide();
      $(".headngOne").show();
    });
    $(".headngTwo").click(function(){
      $("#decTwo").show();
      $(".headngTwo").hide();
    });
    $("#CancelTwo").click(function(){
      $("#decTwo").hide();
      $(".headngTwo").show();
    });
    window.onload = function(){
    //Check File API support
    if(window.File && window.FileList && window.FileReader)
    {
        $('#files').on("change", function(event) {
            var files = event.target.files; //FileList object
            var output = document.getElementById("result");
            for(var i = 0; i< files.length; i++)
            {
                var file = files[i];
                //Only pics
                // if(!file.type.match('image'))
                if(file.type.match('image.*')){
                    if(this.files[0].size < 2097152){
                  // continue;
                    var picReader = new FileReader();
                    picReader.addEventListener("load",function(event){
                        var picFile = event.target;
                        var div = document.createElement("div");
                        div.innerHTML = "<img class='thumbnail' src='" + picFile.result + "'" +
                                "title='preview image'/>";
                        output.insertBefore(div,null);
                    });
                    //Read the image
                    $('#clear, #result').show();
                    picReader.readAsDataURL(file);
                    }else{
                        alert("Image Size is too big. Minimum size is 2MB.");
                        $(this).val("");
                    }
                }else{
                alert("You can only upload image file.");
                $(this).val("");
            }
            }

        });
    }
    else
    {
        console.log("Your bser does not support File API");
    }
}

   $('#files').on("click", function() {
        $('.thumbnail').parent().remove();
        $('result').hide();
        $(this).val("");
    });

    $('#clear').on("click", function() {
        $('.thumbnail').parent().remove();
        $('#result').hide();
        $('#files').val("");
        $(this).hide();
    });

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


      //Check File API support
      if(window.File && window.FileList && window.FileReader)
      {
          $('#product_image').on("change", function(event) {
              var files = event.target.files; //FileList object
              var output = document.getElementById("result");
              var $fileUpload = $("input[type='file']");
              if (parseInt($fileUpload.get(0).files.length)>3){
                alert("You can only upload a maximum of 3 files");
                $(this).val('');
                return;
              }
              for(var i = 0; i< files.length; i++)
              {
                  var file = files[i];
                  //Only pics
                  // if(!file.type.match('image'))
                  if(file.type.match('image.*')){
                      if(this.files[0].size < 2097152){
                    // continue;
                      var picReader = new FileReader();
                      picReader.addEventListener("load",function(event){
                          var picFile = event.target;
                          var div = document.createElement("div");
                          div.innerHTML = "<img class='thumbnail' src='" + picFile.result + "'" +
                                  "title='preview image'/>";
                          output.insertBefore(div,null);
                      });
                      //Read the image
                      $('#clear, #result').show();
                      picReader.readAsDataURL(file);
                      }else{
                          alert("Image Size is too big. Minimum size is 2MB.");
                          $(this).val("");
                      }
                  }else{
                  alert("You can only upload image file.");
                  $(this).val("");
              }
              }

          });
      }
      else
      {
          console.log("Your bser does not support File API");
      }
  });

     $('#product_image').on("click", function() {
          $('.thumbnail').parent().remove();
          $('result').hide();
          $(this).val("");
      });

      $('#clear').on("click", function() {
          $('.thumbnail').parent().remove();
          $('#result').hide();
          $('#files').val("");
          $(this).hide();
      });


@endsection
@section('scriptTags')
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
@endsection
