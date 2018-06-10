@extends('layouts.app')
@section ('styleTags')
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" /> 
  @endsection
@section('style')
  .selectCountry , .selectCity{
    width:100% !important;
  }
  body{
         color:black;
         <!-- font-family: Graphik,Helvetica Neue,Arial,sans-serif; -->
     }
     .headingcolor{
       background-color:#9c57b8;
       border-right:1px solid white;
       color:white;
       border-radius:5px;
     }
     textarea {
    resize: none;
}
     .disnone{display: none;}
     {{-- b{color: #9c57b8;} --}}
     #Cancel, #CancelTwo{color: #777;font-weight: 600;font-size:17px;padding: 1%;}
     .cursolOnhover:hover{cursor: pointer}
     .label{
       color:unset;
       <!-- font-family: Graphik,Helvetica Neue,Arial,sans-serif; -->
       font-size: 16px;
       padding:0px !important;
       padding-top:10px !important;
     }
     .form-group{margin-top:15px !important;}
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
<div class="container animate-left">
    <div class="left small_div padding2per headingAside border">
        <ul class="headingAside">
            <li class="Profile">Profile</li>
            <li class="Account_Details">Account Details</li>
            <li class="phone">phone</li>
            <li class="payment">payment</li>
            <li class="payout_method">payout method</li>
            <li class="Notification">Notification</li>
        </ul>
    </div>
    <div class="left big_div marginLef1 border padding2per">
        <div id="profileBox">
            <h3>Profile</h3>
            <center><img src="images/ContactImages/images/clients/avatar_07.jpg" width="20%" class="circle"></center>
                <form action="" method="post">
                  <label class="d-b btn btn--bb-outline pos-r px30 mt20 h50 bdr5 as-s margintop10 backgrounpurple">
                    <input type="file" id="product_image" class="d-n" accept="image/*">
                    <!-- <div class="fx-r ai-c jc-c pos-a t0 l10 b0 w25 SM_l20" style="display:inline;padding-top:2.5%"> -->
                        <i class="fas fa-camera" style="font-size: 23px;color: #fff"></i>
                    <!-- </div> -->
                    <span class="white noborder">Upload image</span>
                  </label>
                    <hr/>
                    <label for="" class="label">
                    <div class="form-group">
                      <input type="text" name="fname" placeholder="Enter First Name" class="form-control" value="" required>
                    </div>
                    </label>
                    <label for="" class="label">
                    <div class="form-group">
                      <input type="text" name="sname" placeholder="Enter Second Name" class="form-control" value="" required>
                    </div>
                    </label>
                    <label for="" class="label">
                    <div class="form-group">
                      <textarea class="fullimagewidth border borderRad7px nopad-nomar" rows="9"> </textarea>
                    </div>
                    </label>
                    <label for="" class="label">
                    <div class="form-group">
                      <input type="submit" name="submitprofile" class="form-control btn backgrounpurple white" value="Submit">
                    </div>
                    </label>
                </form>
        </div>
    </div>
</div><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
// Profile
// Account_Details
// phone
// payment
// payout_method
// Notification
        $(".Profile").css("color", "#800080");
        $(".Profile").css("border-bottom", "1px solid #800080");
        $(".Profile").click(function()
            {
                $("#profileBox").show(700);
                $(".Profile").css("color", "#800080");
                $(".Profile").css("border-bottom", "1px solid #800080");
                $("#Account_DetailsBox").hide();
                $(".Account_Details").css("color", "#777");
                $(".Account_Details").css("border-bottom", "1px solid #777");
                $("#phoneBox").hide();
                $(".phone > b").css("color", "#777");
                $(".phone > b").css("border-bottom", "1px solid #777");
                $("#paymentBox").hide();
                $(".payment").css("color", "#777");
                $(".payment").css("border-bottom", "1px solid #777");
                $("#payout_methodBox").hide();
                $(".payout_method").css("color", "#777");
                $(".payout_method").css("border-bottom", "1px solid #777");
                $("#NotificationBox").hide();
                $(".Notification").css("color", "#777");
                $(".Notification").css("border-bottom", "1px solid #777");
            });
        $(".Account_Details").click(function()
            {
                $("#profileBox").hide();
                $(".Profile").css("color", "#777");
                $(".Profile").css("border-bottom", "1px solid #777");
                $("#Account_DetailsBox").show(700);
                $(".Account_Details").css("color", "#800080");
                $(".Account_Details").css("border-bottom", "1px solid #800080");
                $("#phoneBox").hide();
                $(".phone").css("color", "#777");
                $(".phone").css("border-bottom", "1px solid #777");
                $("#paymentBox").hide();
                $(".payment").css("color", "#777");
                $(".payment").css("border-bottom", "1px solid #777");
                $("#payout_methodBox").hide();
                $(".payout_method").css("color", "#777");
                $(".payout_method").css("border-bottom", "1px solid #777");
                $("#NotificationBox").hide();
                $(".Notification").css("color", "#777");
                $(".Notification").css("border-bottom", "1px solid #777");
            });
        $(".phone").click(function()
            {
                $("#profileBox").hide();
                $(".Profile").css("color", "#777");
                $(".Profile").css("border-bottom", "1px solid #777");
                $("#Account_DetailsBox").hide();
                $(".Account_Details").css("color", "#777");
                $(".Account_Details").css("border-bottom", "1px solid #777");
                $("#phoneBox").show(700);
                $(".phone").css("color", "#800080");
                $(".phone").css("border-bottom", "1px solid #800080");
                $("#paymentBox").hide();
                $(".payment").css("color", "#777");
                $(".payment").css("border-bottom", "1px solid #777");
                $("#payout_methodBox").hide();
                $(".payout_method").css("color", "#777");
                $(".payout_method").css("border-bottom", "1px solid #777");
                $("#NotificationBox").hide();
                $(".Notification").css("color", "#777");
                $(".Notification").css("border-bottom", "1px solid #777");
            });
        $(".payment").click(function()
            {
                $("#profileBox").hide();
                $(".Profile").css("color", "#777");
                $(".Profile").css("border-bottom", "1px solid #777");
                $("#Account_DetailsBox").hide();
                $(".Account_Details").css("color", "#777");
                $(".Account_Details").css("border-bottom", "1px solid #777");
                $("#phoneBox").hide();
                $(".phone").css("color", "#777");
                $(".phone").css("border-bottom", "1px solid #777");
                $("#paymentBox").show(700);
                $(".payment").css("color", "#800080");
                $(".payment").css("border-bottom", "1px solid #800080");
                $("#payout_methodBox").hide();
                $(".payout_method").css("color", "#777");
                $(".payout_method").css("border-bottom", "1px solid #777");
                $("#NotificationBox").hide();
                $(".Notification").css("color", "#777");
                $(".Notification").css("border-bottom", "1px solid #777");
            });
        $(".payout_method").click(function()
            {
                $("#profileBox").hide();
                $(".Profile").css("color", "#777");
                $(".Profile").css("border-bottom", "1px solid #777");
                $("#Account_DetailsBox").hide();
                $(".Account_Details").css("color", "#777");
                $(".Account_Details").css("border-bottom", "1px solid #777");
                $("#phoneBox").hide();
                $(".phone").css("color", "#777");
                $(".phone").css("border-bottom", "1px solid #777");
                $("#paymentBox").hide();
                $(".payment").css("color", "#777");
                $(".payment").css("border-bottom", "1px solid #777");
                $("#payout_methodBox").show(700);
                $(".payout_method").css("color", "#800080");
                $(".payout_method").css("border-bottom", "1px solid #800080");
                $("#NotificationBox").hide();
                $(".Notification").css("color", "#777");
                $(".Notification").css("border-bottom", "1px solid #777");
            });
        $(".Notification").click(function()
            {
                $("#profileBox").hide();
                $(".Profile").css("color", "#777");
                $(".Profile").css("border-bottom", "1px solid #777");
                $("#Account_DetailsBox").hide();
                $(".Account_Details").css("color", "#777");
                $(".Account_Details").css("border-bottom", "1px solid #777");
                $("#phoneBox").hide();
                $(".phone").css("color", "#777");
                $(".phone").css("border-bottom", "1px solid #777");
                $("#paymentBox").hide();
                $(".payment").css("color", "#777");
                $(".payment").css("border-bottom", "1px solid #777");
                $("#payout_methodBox").hide();
                $(".payout_method").css("color", "#777");
                $(".payout_method").css("border-bottom", "1px solid #777");
                $("#NotificationBox").show(700);
                $(".Notification").css("color", "#800080");
                $(".Notification").css("border-bottom", "1px solid #800080");
            });
        });
    </script>
@endsection