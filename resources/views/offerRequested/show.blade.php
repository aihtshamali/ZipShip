@extends('layouts.app')
@section('style')
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
.selectCountry , .selectCity{
    width:100% !important;
  }
     .headingcolor{
       background-color:#9c57b8;
       border-right:1px solid white;
       color:white;
       border-radius:5px;
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
       <!-- font-family: Graphik,Helvetica Neue,Arial,sans-serif; -->
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
         -ms-flex-direction: row;
         /* flex-direction: row; */
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
         <!-- font-family: Graphik,Helvetica Neue,Arial,sans-serif; -->
     }
     .ff-ss, body {
         <!-- font-family: sans-serif; -->
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
       -ms-flex-direction: row;
       flex-direction: row;
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
       -ms-flex-direction: row;
       flex-direction: row;
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
<div class="container profile animate-left">
    <div class="marginauto border width70 padding1per backgrounwhite clear">
        <b><span class="textpurple">Save Your money</span> by ordering from Zipship</b>
        <i class="fas fa-gift right textpurple" style="font-size: 25px"></i>
    </div>
    <div class="padding1per"></div>

    @foreach ($bids as $bid)
      <div class="marginauto border width70 padding1per">
          <img src="{{asset('uploads/postImages/'.$bid->post->image_1)}}" class="circle" width="35px" />
          <b class="paddingLef1per"><span class="black capitalize">{{$bid->user->firstname}} {{$bid->user->lastname}}</span><span class="grayee"> requested</span></b>
          <div class="marginper fullwidth marginTopTen" style="min-height: 155px;">
              <div class="backgrounwhite width30 left">
                  <center>
                      <img src="{{asset('uploads/userprofile/'.$bid->user->dp)}}" width="80%"/>
                  </center>
              </div>
              <div class="width68 right padding1per">
                  <h3 class="nopad-nomar">{{$bid->title}}</h3>
                  <hr class="margin10px">
                  <b>Bidding Amount</b><br/>
                  <h1 class="left widthfitcon nopad-nomar">
                     <span class="grayee">from</span><span class="black"> ${{$bid->amount}}</span>
                  </h1>
                  <form class="" action="{{route('order.store')}}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="bid" value="{{$bid->id}}">
                    <input type="hidden" name="user" value="{{$bid->user_id}}">
                    <input type="submit" class="right padding3per pointer border" style="background-color:transparent;color:#800080" value="Accept Offer">
                    </input>
                </form>
              </div>
          </div>
      </div>
  @endforeach
</div>
@endsection
@section('script')

// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
  var btn = document.getElementById("myBtn");
if(btn)
{

// Get the <span> element that closes the modal

var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
    $('input[name="post_id"]').val($(this).data('id'));
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
}

@endsection
