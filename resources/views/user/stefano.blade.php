<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        User | Stefano's blog
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

    


  <div style="padding-top:200px;" class="container mb-3">
    <div class="rounded" style="background-color:white; padding:20px;">

        <h3 class="m-2 p-2">stefano's blog</h3>
       
        <div class="container">

            <div class="p-3 rounded" style="background-color: white; border:0.5px solid grey;">
        
                <h4 class="mb-3"><a href="{{ url('osilinks') }}">OSI links arms with the Open Infrastructure Foundation</a></h4>
        
                <div>
                    <p style="color: black; font-size:14px;" class="mb-2">
                        OSI links arms with the Open Infrastructure Foundation
                    </p>

                    <p style="color: black; font-size:14px;" class="mb-3">
                        OSI has chosen to become an associate member of one of our own members, the Open Infrastructure (OpenInfra) Foundation.
                    </p>

                    <hr>
        
                    <div class="col-lg-12">
                        <div class="scroll-to-section">
                          <a href="{{ url('osilinks') }}">Read More</a> |
                          <a href="{{ url('register') }}">Anonymous's Blog</a> |
                          <a href="{{ url('login') }}">Log in </a> or <a href="{{ url('register') }}">Register</a> to post comments.
        
                        </div>
                      </div>
        
                </div>
        
            </div>
        
          </div>
        
          <div class="container mt-5">
        
            <div class="p-3 rounded" style="background-color: white; border:0.5px solid grey;">
        
                <h4 class="mb-3"><a href="{{ url('osilinks') }}">The price for software security and maintainer burnout / OSI News & Updates</a></h4>
        
                <div>
                    <p class="mb-2" style="color: black; font-size:14px;">
                        Submitted by stefano on Thu, 2022-01-20 07:40
                    </p>

                    <p class="mb-2" style="color: black; font-size:14px;">
                        The price for software security and maintainer burnout
                    </p>

                    <p class="mb-2" style="color: black; font-size:14px;">
                        2022 started reminding us that software security is a problem not only for open source packages. At the same time, “how to remunerate open source maintainers?” is a question with impossibly numerous answers: we need focus to find different solutions for different problems.
                    </p>

                    <hr>

                    <div class="col-lg-12">
                        <div class="scroll-to-section">
                          <a href="{{ url('osilinks') }}">Read More</a> |
                          <a href="{{ url('stefano') }}">stefano's Blog</a> |
                          <a href="{{ url('login') }}">Log in </a> or <a href="{{ url('register') }}">Register</a> to post comments.
        
                        </div>
                      </div>
        
                </div>
        
            </div>
        
          </div>
        
          <div class="container mt-5">
        
            <div class="p-3 rounded" style="background-color: white; border:0.5px solid grey;">
        
                <h4 class="mb-3"><a href="{{ url('members') }}">Results from the first new members campaign</a></h4>
        
                <div>
                    <p class="mb-2" style="color: black; font-size:14px;">
                        Submitted by stefano on Wed, 2022-01-12 05:30
                    </p>

                    <p class="mb-2" style="color: black; font-size:14px;">
                        We’re welcoming 1,354 new members to the Open Source Initiative. The membership drive we launched at the end of 2021 surpassed our expectations.
                    </p>

                    <hr>
        
                    <div class="col-lg-12">
                        <div class="scroll-to-section">
                          <a href="{{ url('osilinks') }}">Read More</a> |
                          <a href="{{ url('register') }}">Anonymous's Blog</a> |
                          <a href="{{ url('login') }}">Log in </a> or <a href="{{ url('register') }}">Register</a> to post comments.
        
                        </div>
                      </div>
        
                </div>
        
            </div>
        
          </div>
        
          <div class="container mt-5">
        
            <div class="p-3 rounded" style="background-color: white; border:0.5px solid grey;">
        
                <h4 class="mb-3"><a href="{{ url('members') }}">The intriguing implications of SFC v Vizio</a></h4>
        
                <div>
                    <p class="mb-2" style="color: black; font-size:14px;">
                        Submitted by stefano on Wed, 2021-12-08 09:09
                    </p>

                    <p class="mb-2" style="color: black; font-size:14px;">
                        The lawsuit is a milestone moment underscoring the value of open source software to our society: we must vigilantly and proactively protect the rights of the both the user/consumer and those who have contributed code in good faith.
                    </p>

                    <hr>
        
                    <div class="col-lg-12">
                        <div class="scroll-to-section">
                          <a href="{{ url('osilinks') }}">Read More</a> |
                          <a href="{{ url('register') }}">Anonymous's Blog</a> |
                          <a href="{{ url('login') }}">Log in </a> or <a href="{{ url('register') }}">Register</a> to post comments.
        
                        </div>
                      </div>
        
                </div>
        
            </div>
        
          </div>
        

        <hr class="mt-5">

        <div class="m-3 mt-5">
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