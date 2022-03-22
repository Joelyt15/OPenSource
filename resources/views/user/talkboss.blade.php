<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        User | How to talk to your boss about open source
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
        <h3 class="m-3"> <b>How to talk to your boss about open source</b> </h3>

        <p class="p-2" style="color: black; font-size:14px;">
            Submitted by Anonymous (not verified) on Tue, 2022-03-01 05:30
        </p>

        <p class="p-2 fw-bold" style="color: black; font-size:14px; font-style:italic;">
            Creative, exciting applications of open source software can be found worldwide, and who better to share the details of new use cases than the practitioners themselves. In this blog series we’ll feature guests who told their open source stories during Practical Open Source Information (POSI) 2021, an online conference hosted by OSI.
        </p>

        <p class="p-2" style="color: black; font-size:13px;">
            In her presentation at POSI 2021, Deborah Bryant, OSI Board Director, recalled that she was first introduced to open source when she ran a commercial ISP earlier in her career. It was there that a 19-year-old developer excitedly told her about Linux and got her permission to work on the open source project and become a contributor. Later, she moved on to serve as the Deputy CIO for the State of Oregon where she was tasked with explaining complex and expensive technical projects to the legislature. She shares a story of the House of Representatives receiving a bill requiring the state of Oregon to consider open source products in software bids. The bill didn’t pass but she learned a lot about open source in the government sector from that experience.
        </p>

        <p class="p-2" style="color: black; font-size:13px;">
            After her time working for the State of Oregon, she moved onto Open Source Lab at the University of Oregon. Today she does a lot of open source advocacy and work, on several boards including DemocracyLab, the Open Source Elections Technology Foundation, the Eclipse Foundation, and as leader of Red Hat’s Open Source Programs Office, and now in her final year on the board of the OSI.
        </p>

        <p class="p-2" style="color: black; font-size:13px;">
            Deborah introduces us to a heuristic way of thinking known as Systems Thinking. The idea is that every technology project has three components: technical, financial, and political. All of these components should be considered when briginging an open source initiative to the table.
        </p>

        <p class="p-2" style="color: black; font-size:13px;">
            Deborah offers a lot of resources, a couple of which are Teaching Open Source (TOS) and Professor’s Open Source Summer Experience (POSSE). More can be seen in the video.
        </p>

        <p class="p-2" style="color: black; font-size:13px;">
            If you’re interested in watching the full video, which includes some interesting examples of open source projects in all these areas as well as conversation starters, you can watch it below:
        </p>

        <img src="assets/images/debrah.png" alt="opensource">

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