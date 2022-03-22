<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        User | News
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

        <h3 class="m-2 p-2">News</h3>
       
        <div class="container">

            <div class="p-3 rounded" style="background-color: white; border:0.5px solid grey;">
        
                <h4 class="mb-3"><a href="{{ url('boardmember') }}">Meet OSI’s new board member, Chair and Vice Chair</a></h4>
        
                <div>
                    <p style="color: black; font-size:14px;" class="mb-5">
                        The Open Source Initiative (OSI) is managed by a Board of Directors that is elected and appointed by OSI Individual members, Affiliate members, and by the board itself. We would like to welcome a new Director and a change of roles for Chair and Vice Chair.
                    </p>
        
                    <div class="col-lg-12">
                        <div class="scroll-to-section">
                          <a href="{{ url('boardmember') }}">Read More</a> |
                          <a href="{{ url('register') }}">Anonymous's Blog</a> |
                          <a href="{{ url('login') }}">Log in </a> or <a href="{{ url('register') }}">Register</a> to post comments.
        
                        </div>
                      </div>
        
                </div>
        
            </div>
        
          </div>
        
          <div class="container mt-5">
        
            <div class="p-3 rounded" style="background-color: white; border:0.5px solid grey;">
        
                <h4 class="mb-3"><a href="{{ url('osilinks') }}">OSI links arms with the Open Infrastructure Foundation</a></h4>
        
                <div>
                    <p class="mb-5" style="color: black; font-size:14px;">
                        OSI has chosen to become an associate member of one of our own members, the Open Infrastructure (OpenInfra) Foundation.
                    </p>
        
                    <div class="col-lg-12">
                        <div class="scroll-to-section">
                          <a href="{{ url('osilinks') }}">Read More</a> |
                          <a href="{{ url('stefano') }}">stefano's blog Blog</a> |
                          <a href="{{ url('register') }}">Log in </a> or <a href="{{ url('register') }}">Register</a> to post comments.
        
                        </div>
                      </div>
        
                </div>
        
            </div>
        
          </div>
        
          <div class="container mt-5">
        
            <div class="p-3 rounded" style="background-color: white; border:0.5px solid grey;">
        
                <h4 class="mb-3"><a href="{{ url('talkboss') }}">How to talk to your boss about open source</a></h4>
        
                <div>
                    <p class="mb-5" style="color: black; font-size:14px;">
                        In her presentation at POSI 2021, Deborah Bryant, OSI Board Director, recalled that she was first introduced to open source when she ran a commercial ISP earlier in her career.
                    </p>
        
                    <div class="col-lg-12">
                        <div class="scroll-to-section">
                          <a href="{{ url('talkboss') }}">Read More</a> |
                          <a href="{{ url('register') }}">Anonymous's Blog</a> |
                          <a href="{{ url('login') }}">Log in </a> or <a href="{{ url('register') }}">Register</a> to post comments.
        
                        </div>
                      </div>
        
                </div>
        
            </div>
        
          </div>
        
          <div class="container mt-5">
        
            <div class="p-3 rounded" style="background-color: white; border:0.5px solid grey;">
        
                <h4 class="mb-3"><a href="{{ url('boardmember') }}">Meet OSI’s new board member, Chair and Vice Chair</a></h4>
        
                <div>
                    <p class="mb-5" style="color: black; font-size:14px;">
                        The Open Source Initiative (OSI) is managed by a Board of Directors that is elected and appointed by OSI Individual members, Affiliate members, and by the board itself. We would like to welcome a new Director and a change of roles for Chair and Vice Chair.
                    </p>
        
                    <div class="col-lg-12">
                        <div class="scroll-to-section">
                          <a href="{{ url('boardmember') }}">Read More</a> |
                          <a href="{{ url('register') }}">Anonymous's Blog</a> |
                          <a href="{{ url('login') }}">Log in </a> or <a href="{{ url('register') }}">Register</a> to post comments.
        
                        </div>
                      </div>
        
                </div>
        
            </div>
        
          </div>
        

        <hr class="mt-5">

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