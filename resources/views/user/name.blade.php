<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        User | Licenses by Name
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
        <h3 class="m-3"> <b>Licenses by Name</b> </h3>

        <p class="mt-2" style="color:black; font-size:14px; padding-left:20px;">
            The following licenses have been approved by the OSI. The parenthesized expression following a license name is its SPDX short identifier (if one exists).
        </p>

        <ul style="padding-left:40px; font-size:13px; color:black;">

            <li style="list-style-type: square;"><a href="https://opensource.org/licenses/0BSD" target="blank">0-clause BSD License (0BSD)</a></li>
            <li style="list-style-type: square;"><a href="https://opensource.org/licenses/BSD-1-Clause" target="blank">1-clause BSD License (BSD-1-Clause)</a></li>
            <li style="list-style-type: square;"><a href="https://opensource.org/licenses/BSD-2-Clause" target="blank">2-clause BSD License (BSD-2-Clause)</a></li>
            <li style="list-style-type: square;"><a href="https://opensource.org/licenses/alphabetical" target="blank">3-clause BSD License (BSD-3-Clause)</a></li>
            <li style="list-style-type: square;"><a href="Academic Free License 3.0 (AFL-3.0)" target="blank">Academic Free License 3.0 (AFL-3.0)</a></li>
            <li style="list-style-type: square;"><a href="https://opensource.org/licenses/APL-1.0" target="blank">Adaptive Public License (APL-1.0)</a></li>
            <li style="list-style-type: square;"><a href="https://opensource.org/licenses/Apache-1.1" target="blank">Apache Software License 1.1 (Apache-1.1)</a>(superseded)</li>
            <li style="list-style-type: square;"><a href="https://opensource.org/licenses/Apache-2.0" target="blank">Apache License 2.0 (Apache-2.0)</a></li>
            <li style="list-style-type: square;"><a href="https://opensource.org/licenses/APSL-2.0" target="blank">Apple Public Source License (APSL-2.0)</a></li>
            <li style="list-style-type: square;"><a href="https://opensource.org/licenses/Artistic-1.0" target="blank">Artistic license 1.0 (Artistic-1.0)</a>(superseded)</li>
            <li style="list-style-type: square;"><a href="https://opensource.org/licenses/Artistic-2.0" target="blank">Artistic License 2.0 (Artistic-2.0)</a></li>
            <li style="list-style-type: square;"><a href="https://opensource.org/licenses/AAL" target="blank">Attribution Assurance License (AAL)</a></li>
            <li style="list-style-type: square;"><a href="https://opensource.org/licenses/BSL-1.0" target="blank">Boost Software License (BSL-1.0)</a></li>
            <li style="list-style-type: square;"> BSD License: See 

                <ul style="padding-left:40px;">
                    <li style="list-style-type: square;"><a href="https://opensource.org/licenses/BSD-3-Clause" target="blank">3-clause BSD License</a></li>
                    <li style="list-style-type: square;"><a href="https://opensource.org/licenses/BSD-2-Clause" target="blank">2-clause BSD License</a></li>
                    <li style="list-style-type: square;"><a href="https://opensource.org/licenses/BSD-1-Clause" target="blank">1-clause BSD License</a></li>
                    <li style="list-style-type: square;"><a href="https://opensource.org/licenses/0BSD" target="blank">0-clause BSD license</a></li>
                    <li style="list-style-type: square;"><a href="https://opensource.org/licenses/0BSD" target="blank">BSD-3-Clause-LBNL</a></li>
                </ul>

            </li>

            <li style="list-style-type: square;"><a href="https://opensource.org/licenses/BSDplusPatent" target="blank">BSD+Patent (BSD-2-Clause-Patent)</a></li>
            <li style="list-style-type: square;"><a href="https://opensource.org/CERN-OHL-P" target="blank">CERN Open Hardware Licence Version 2 - Permissive</a></li>
        </ul>

        <h3 class="m-3"> <b>Comments</b> </h3>

        <div class="container m-3 rounded" style="background-color:#ddd; width:90%; padding:20px; ">

            <p style="color: black; font-size:13px;">Submitted by administrator on Tue, 2008-07-29 13:28  <a href="https://opensource.org/comment/633#comment-633" target="blank">Permalink</a> </p>

            <h3 class="mt-3"><b>OSS List Names (Java, Eclipse, PHP, etc)</b></h3>

            <p class="mt-2" style="color: black; font-size:13px;"> Looking for the list of unique Open Source Software names (like Java, Eclipse, PHP, MySQL), not Open Source Software License Types(like Sun Public License, Common Public License, etc). Does OSI maintain such list or is there another organization or web source that maintains such list of actual Open Source Software names? </p>


        </div>

        <div class="container m-5 rounded" style="background-color:#ddd; width:80%;">

            <p style="color: black; font-size:13px;">Submitted by nelson on Fri, 2009-07-17 12:48 <a href="https://opensource.org/comment/1105#comment-1105" target="blank">Permalink</a> </p>

            <h3 class="mt-4"><b>Probably best to search on</b></h3>

            <p class="mt-2" style="color: black; font-size:13px;">Probably best to search on freshmeat.net or just google for the name you want to use.</p>


        </div>

        <hr class="mb-5 mt-5">

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