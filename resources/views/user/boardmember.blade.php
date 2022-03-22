<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        User | Meet OSI's new board member, chair and vice chair
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
        <h3 class="m-3"> <b>Meet OSI’s new board member, Chair and Vice Chair</b> </h3>

        <p class="p-2" style="color: black; font-size:14px;">
            Submitted by Anonymous (not verified) on Thu, 2022-03-03 05:30
        </p>

        <p class="p-2" style="color: black; font-size:14px;">
            The Open Source Initiative (OSI) is managed by a Board of Directors that is elected and appointed by OSI Individual members, Affiliate members, and by the board itself. We would like to welcome a new Director and a change of roles for Chair and Vice Chair.
        </p>

        <p class="p-2" style="color: black; font-size:14px;">
            Joining the board as a Director is Justin Colannino, who was appointed by the board in January. Justin joins us with a decade of experience representing clients at the intersection of free and open source software communities and for-profit enterprises. He is Director of Developer Policy and Counsel for GitHub where he advocates for developers' ability to innovate, collaborate, and have equal opportunity. Justin also serves as Assistant General Counsel, Open Source and Standards for Microsoft where he is part of a small team that oversees legal processes to enable open source engagement at massive scale, as well as maintaining an active pro-bono practice for free and open source software communities.
        </p>

        <p class="p-2" style="color: black; font-size:14px;">
            Catharina Maracke was elected Chair during February’s board meeting. Catharina is a lawyer with over 15 years of experience in public licensing models. She started her legal career as an associate at Sherman & Sterling and served as Director for Creative Commons International overseeing and stewarding the Creative Commons global licensing suite. She also served on the WEF Global Agenda Council on the Intellectual Property system and on the board for the Open Education Consortium. Over the past years, Catharina has focused on Open Source compliance and governance questions and helped to initiate the OpenChain project. Catharina has also founded the Software Compliance Academy to support clients in their Open Source journey and has written and taught extensively on IT policy and standardization questions and especially the intersection between Open Source software and standards. Catharina previously served as Assistant Treasurer for OSI.
        </p>

        <p class="p-2" style="color: black; font-size:14px;">
            Thierry Carrez was elected Vice Chair during the same board meeting. Thierry has a long history with the Open Infrastructure Foundation (OpenInfra) where he was most recently named General Manager. There he leads operations, covering engineering, product, community and marketing functions. Thierry has 16 years of experience as a free and open source software project management specialist, participating as a developer, technical lead and project manager to various projects throughout his career. He previously served as Secretary for OSI.
        </p>

        <p class="p-2" style="color: black; font-size:14px;">
            Catharina and Thierry will transition to the new roles with the support of former Chair and Vice Chair Josh Simmons and Megan Byrd-Sanicki.
        </p>

        <p class="p-2" style="color: black; font-size:14px;">
            As Executive Director of OSI, I am proud to work alongside these engaged and uniquely capable board members to uphold the Open Source Definition and manage the oversight of the budget, set strategic direction, and define goals that are in line with the mission of OSI.
        </p>

        <img src="assets/images/WebsiteGraph.png" alt="opensource">

        <hr>

        <div class="col-lg-12 mt-4 p-2">
            <div class="scroll-to-section">
              <a href="{{ url('boardmember') }}">Read More</a> |
              <a href="{{ url('register') }}">Anonymous's Blog</a> |
              <a href="{{ url('login') }}">Log in </a> or <a href="{{ url('register') }}">Register</a> to post comments.

            </div>
        </div>   


        <hr class="mt-3">

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