<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        User | Trademarks of OSI
    </title>

    @include('user.css')

    <style>
        label{
            display: inline-block;
        }
    </style>

  </head>

<body style="background-color:#d9d9d9;">

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- Pre-header Starts -->
  <div class="pre-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8 col-7">
          <ul class="info">
            <li class="scroll-to-section"><a href="{{ url('/') }}" class="active">Home</a></li>
            <li class="scroll-to-section"><a href="{{ url('contact') }}">Contact</a></li>
            <li class="scroll-to-section"><a href="{{ url('login') }}">Login</a></li> 
            <li><a href=""><i class="fa fa-phone"></i>070-875-2860</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-sm-4 col-5">
          <ul class="social-media">
            <li><a href="https://www.facebook.com/" target="blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://www.instagram.com/" target="blank"><i class="fa fa-instagram"></i></a></li>
            <li><a href="https://www.twitter.com/" target="blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://www.linkedin.com/" target="blank"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Pre-header End -->

  <div class="container m-3">

    <h1 class="mb-2" style="text-align: center; font-style:bolder;">
        {{-- <img src="assets/images/os.png" style="width: 100px; height:100px;" alt="Open Source"> --}}
        <b>
            Open Source Initiative
        </b> 
    </h1>
    <p style="text-align:center;">Guaranteeing the 'our' in source...</p>

  </div>


    @include('user.header')



  <div style="padding-top:150px;" class="container mb-3">
    <div class="rounded" style="background-color:white; padding:20px;">
        <h3 class="m-3"> <b>OSI Corporate Sponsors</b> </h3>

        <p class="p-2" style="color: black; font-size:14px;">
            The Open Source Initiative (OSI) has trademarks and logos which can be used in accordance with OSI's policy for trademark and logo usage. The OSI trademark and logo usage guidelines are listed below.
        </p>

        <p class="p-2" style="color: black; font-size:14px;">
            Interested in sponsoring, or partnering with, the OSI? Please see our 2022 Sponsorship Prospectus. Please contact the OSI to find out more about how your company can promote open source development, communities and software.
        </p>

        <div style="color: green;">

            <h4 class="p-2">Anchor</h4>
            <hr size="5px;">
            <img class="m-3 mx-auto d-block" style="height: 50%; width:50%;" src="assets/images/Google.png" alt="google">

            <h4 class="p-2 mt-3">Premier</h4>
            <hr size="5px;">
            <img class="m-3 " style="height:20%; width:30%;" src="assets/images/BBGEngineering_black.png" alt="google">
            <img class="m-3" style="height:20%; width:30%;" src="assets/images/Indeed_Logo_RGB_1.png" alt="indeed">
            <img class="m-3" style="height:20%; width:30%;" src="assets/images/redhat.png" alt="redhat">


            <h4 class="p-2 mt-3">Maintainer</h4>
            <hr size="5px;">
            <img class="m-3 " style="height:20%; width:30%;" src="assets/images/Logo_Black.png" alt="camunda">
            <img class="m-3" style="height:20%; width:30%;" src="assets/images/comcast.png" alt="comcast">
            <img class="m-3" style="height:20%; width:30%;" src="assets/images/GitHub_Logo.png" alt="github">
            <img class="m-3" style="height:20%; width:30%;" src="assets/images/MSLogo.png" alt="microsoft">
            <img class="m-3" style="height:20%; width:30%;" src="assets/images/twitter_reupload_cropped.png" alt="twitter">

            <h4 class="p-2 mt-3">Supporter</h4>
            <hr size="5px;">
            <img class="m-3 " style="height:20%; width:30%;" src="assets/images/eyeo_eyeo_logo_black_web.png" alt="eye">
            <img class="m-3" style="height:20%; width:30%;" src="assets/images/with_black_text.png" alt="harness">
            <img class="m-3" style="height:20%; width:30%;" src="assets/images/OpenLogicPerforce.png" alt="openlogic">


            <h4 class="p-2 mt-3">Community</h4>
            <hr size="5px;">
            <img class="m-3 " style="height:10%; width:20%;" src="assets/images/logo_new_tagline_black.png" alt="anvil">
            <img class="m-3" style="height:10%; width:20%;" src="assets/images/candidhost_logo.png" alt="candid">
            <img class="m-3" style="height:10%; width:20%;" src="assets/images/candid_software.png" alt="candid">
            <img class="m-3" style="height:10%; width:20%;" src="assets/images/Derwen_logo.png" alt="derwen">
            <img class="m-3" style="height:10%; width:20%;" src="assets/images/devrella_logo_150px.png" alt="devrella">
            <img class="m-3" style="height:10%; width:20%;" src="assets/images/DO_Logo.png" alt="digitalocean">
            <img class="m-3" style="height:10%; width:20%;" src="assets/images/DrivenCoffeeRoasters.png" alt="driven">
            <img class="m-3" style="height:10%; width:20%;" src="assets/images/FME_logos_post_vector_03.jpg" alt="electro">
            <img class="m-3" style="height:10%; width:20%;" src="assets/images/LoadView_logo.png" alt="loadview">
            <img class="m-3" style="height:10%; width:20%;" src="assets/images/samo_logo_miro_kredit_03.png" alt="miro">
            <img class="m-3" style="height:10%; width:20%;" src="assets/images/wsm_logo.png" alt="word">
            <img class="m-3" style="height:10%; width:20%;" src="assets/images/xwiki.png" alt="wiki">

        </div>

        <p class="p-2" style="color: black; font-size:14px;">
            While the OSI is very grateful for their support, the OSI does not endorse these or any other companies.
        </p>

        <p class="p-2" style="color: black; font-size:14px;">
            The Open Source Initiative (OSI) is a California 501(c)3 non-profit raising awareness and adoption of open source software (OSS) through advocacy, education and building bridges between communities. Interested in sponsoring, or partnering with, the OSI? Please see our
            <a href="https://opensource.org/files/OSI%202021%20Sponsorship%20Prospectus_0.pdf" target="blank">2021 Sponsorship Prospectus</a>.
            Please contact the OSI to find out more about how your company can promote open source development, communities and software.
        </p>


        <hr>

        <div class="m-3">
            <h3 class="fw-bold">User Login</h3>
        </div>

        <div style="margin: 15px;">
            <form method="POST" action="{{ route('login') }}">
                @csrf
    
                <div>
                    <x-jet-label style="width: 75px;" for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" />
                </div>
    
                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                </div>
    
                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>
    
                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }} |
                        </a>
                    @endif

                    <a href="{{ route('register') }}">Create New Account</a> |
    
                    <x-jet-button class="ml-4 btn btn-dark">
                        {{ __('Log in') }}
                    </x-jet-button>
                </div>
            </form>
        </div>


        </div>
    </div>
  </div>


<hr class="m-5">


<div style="background-color:black;" class="mt-4 rounded  ">

<div align="center" style="padding: 30px; color:white; ">

<h4 class="mb-3">To promote and protect open source software and communities...</h4>

<p class="mb-2" style="font-size:14px;">
  For over 20 years the Open Source Initiative (OSI) has worked to raise awareness and adoption of open source software, and build bridges between open source communities of practice. As a global non-profit, the OSI champions software freedom in society through education, collaboration, and infrastructure, stewarding the Open Source Definition (OSD), and preventing abuse of the ideals and ethos inherent to the open source movement.
</p>

<p style="font-size:14px;">
  Open source software is made by many people and distributed under an OSD-compliant license which grants all the rights to use, study, change, and share the software in modified and unmodified form. Software freedom is essential to enabling community development of open source software.
</p>

</div>

</div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © Joel. All Rights Reserved. 
          <br>Design: <a href="https://gmail.com" target="blank">Jimmy Joel</a></p>
        </div>
      </div>
    </div>
  </footer>


  @include('user.script')

</body>
</html>