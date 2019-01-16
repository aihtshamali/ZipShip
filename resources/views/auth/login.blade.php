@extends('layouts.loginlayout')

@section('title')
  Login
@endsection

@section('content')
    <!-- CONTENT -->
    <section id="home" class="fullscreen t-center fullwidth cover" data-background="{{asset('images/ContactImages/images/backgrounds/background_05.jpg')}}">
        <!-- Container -->
        <div class="container-xs mxw-350 v-center">
           <div class="t-center white">
               <h1 class="bold-title">Login On ZipShip</h1>
               <h4 class="xxs-mt merriweather italic light">
                   Nice to see you! Please log in with your account.
               </h4>
               <div class="form dark xs-mt normal-title">
                   <form action="{{ route('login') }}" method="post">
                        {{ csrf_field() }}
                       <!-- Email -->
                       <span class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                         <input type="email" name="email" id="email" placeholder="Email" class="classic_form bg-white radius"  value="{{ old('email') }}" autofocus>
                         @if ($errors->has('email'))
                             <span class="help-block">
                                 <strong>{{ $errors->first('email') }}</strong>
                             </span>
                         @endif
                       </span>
                       <!-- Email -->
                       <span class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                           @if ($errors->has('password'))
                               <span class="help-block">
                                   <strong>{{ $errors->first('password') }}</strong>
                               </span>
                           @endif
                           <input type="password" name="password" id="password" placeholder="Password" class="classic_form bg-white radius">
                       </span>
                       <!-- Send Button -->
                       <button type="submit" id="submit" class="bg-colored1 click-effect white bold qdr-hover-6 classic_form uppercase no-border radius">Send</button>
                       <!-- End Send Button -->
                   </form>
               </div>
               <h5>Did you lost your password? <a href="{{ route('password.request') }}" class="underline">Click Here.</a></h5>
               <h5>Don't have an account?  <a href="{{ route('register') }}" class="underline">Create New Account</a></h5>
           </div>
        </div>
        <!-- End Container -->
    </section>
    <!-- END CONTENT -->


    <!-- Quick Contact Form -->
    <div class="quick-contact-form border-colored1">
        <h5 class="uppercase t-center extrabold">Drop us a message</h5>
        <p class="t-center normal">You're in the right place! Just drop us a message. How can we help?</p>
        <!-- Contact Form -->
        <form class="quick_form" name="quick_form" method="post" action="#">
            <!-- Name -->
            <input type="text" name="qname" id="qname" required placeholder="Name" class="no-mt">
            <!-- Email -->
            <input type="email" name="qemail" id="qemail" required placeholder="E-Mail">
            <!-- Message -->
            <textarea name="qmessage" id="qmessage" required placeholder="Message"></textarea>
            <!-- Send Button -->
            <button type="submit" id="qsubmit" class="bg-colored1 white qdr-hover-6 uppercase extrabold">Send</button>
            <!-- End Send Button -->
        </form>
        <!-- End Form -->
        <a href="{{url('contact')}}" target="_blank" class="inline-block colored-hover uppercase extrabold h6 qdr-hover-5">Or see contact page</a>
    </div>
    <!-- Contact us button -->
    <a href="#" class="drop-msg click-effect dark-effect"><i class="fa fa-envelope-o"></i></a>

    <!-- Messages for contact form -->
    <div id="error_message" class="clearfix">
        <i class="fa fa-warning"></i>
        <span>Validation error occured. Please enter the fields and submit it again.</span>
    </div>
    <!-- Submit Message -->
    <div id="submit_message" class="clearfix">
        <i class="fa fa-check"></i>
        <span>Thank You ! Your email has been delivered.</span>
    </div>
@endsection
