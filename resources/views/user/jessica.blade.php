<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  
    <title>
       Jessica's Blog
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
            {{-- <li class="scroll-to-section"><a href="{{ url('/') }}">Contact</a></li> --}}
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

  <div style="color:black; font-weight: bold; padding-top:120px;" class="container mb-3">
    <h3>Jessica's Blog</h3>
  </div>

  <div class="container rounded p-3" style="background-color:white; border: 1px solid grey">
    <h3 class="mb-3">
        <b>
            Meet OSI’s 2022 candidates for Board of Directors
        </b>
    </h3>
    <p style="color: black;" class="mb-3">Submitted by Jessica on Mon, 2022-03-07 12:08</p>
    <p style="color: black;" class="mb-4">
        We’re thrilled to announce nine individual and five Affiliate candidates who are up for election. Meet the candidates before voting opens this Friday, March 11th.
    </p>

    <hr>

    <div align="center" class="scroll-to-section m-2">
        <a href="{{ url('candidates') }}">Read More</a> |
        <a href="{{ url('login') }}">Log in </a> or <a href="{{ url('register') }}">Register</a> to post comments.

    </div>
  </div>


  <div class="mt-5">
    <div class="container rounded p-3" style="background-color:white; border: 1px solid grey;">
        <h3 class="mb-3">
            <b>
               <a style="color:darkslategray;" href="">Open Source legal awareness needs to grow</a> 
            </b>
        </h3>
        <p style="color: black;" class="mb-3">Submitted by Jessica on Tue, 2022-02-22 00:00</p>
        <p style="color: black;" class="mb-4">
            Three things hit me from the results of the 2022 State of Open Source survey announced today. 
        </p>
        <p style="color: black;" class="mb-3">
            First is the confirmation that open source is everywhere, powering innovation across all fields. It’s not a surprise, rather the confirmation of trends that we’ve seen for decades. The respondents have indicated that the driver to use open source is innovation, rather than licensing costs. Open source software is used across the board for all kinds of use cases, including a surprisingly high 14% desktop and personal productivity tools.
        </p>
        <hr>
    
        <div align="center" class="scroll-to-section m-2">
            <a href="{{ url('jes') }}">Read More</a> |
            <a href="{{ url('login') }}">Log in </a> or <a href="{{ url('register') }}">Register</a> to post comments.
    
        </div>
      </div>    
  </div>

  <div class="mt-5">
    <div class="container rounded p-3" style="background-color:white; border: 1px solid grey;">
        <h3 class="mb-3">
            <b>
               <a style="color:darkslategray;" href="">Red Hat: Moving from a proprietary to an open source culture</a> 
            </b>
        </h3>
        <p style="color: black;" class="mb-3">Submitted by Jessica on Tue, 2022-02-17 05:30</p>
        <p style="color: black;" class="mb-4">
          Joining and contributing to an open source community is a great way to use your skills in creative ways while getting exposure to interesting projects that will expand your skill set. This video shared one person’s experience transitioning from a proprietary environment to open source.
        </p>
        <hr>
    
        <div align="center" class="scroll-to-section m-2">
            <a href="{{ url('jes') }}">Read More</a> |
            <a href="{{ url('login') }}">Log in </a> or <a href="{{ url('register') }}">Register</a> to post comments.
    
        </div>
      </div>    
  </div>

  <div class="mt-5">
    <div class="container rounded p-3" style="background-color:white; border: 1px solid grey;">
        <h3 class="mb-3">
            <b>
               <a style="color:darkslategray;" href="">Lex Pan Law: Why we support the OSI</a> 
            </b>
        </h3>
        <p style="color: black;" class="mb-3">Submitted by Jessica on Tue, 2022-02-08 05:30</p>
        <p style="color: black;" class="mb-4">
          Lex Pan Law is a full-service technology and intellectual property law firm based in Portland, Oregon. With a deep background in patent law also provides specialized advice to engineering teams and engineering management about the complex intersection between technology and the law. Having a long-standing interest in the intersection of copyright law and technology, the firm has extensive experience and community contacts in the free and open source licensing world. 
        </p>
        <hr>
    
        <div align="center" class="scroll-to-section m-2">
            <a href="{{ url('jes') }}">Read More</a> |
            <a href="{{ url('login') }}">Log in </a> or <a href="{{ url('register') }}">Register</a> to post comments.
    
        </div>
      </div>    
  </div>

  <div class="mt-5">
    <div class="container rounded p-3" style="background-color:white; border: 1px solid grey;">
        <h3 class="mb-3">
            <b>
               <a style="color:darkslategray;" href="">Spotlight on Libre Space Foundation, OSI Associate Member</a> 
            </b>
        </h3>
        <p style="color: black;" class="mb-3">Submitted by Jessica on Thu, 2022-01-27 08:32</p>
        <p style="color: black;" class="mb-4">
          OSI Associate Member Libre Space Foundation (LSF) is a non-profit foundation registered in Greece whose vision is “an Open and Accessible Outer Space for all.” Recently, on behalf of the OpenSatCom.org activity of the European Space Agency, they partnered with Inno3 to investigate open source development models in the satellite communications industry and share their findings in a report. 
        </p>
        <hr>
    
        <div align="center" class="scroll-to-section m-2">
            <a href="{{ url('jes') }}">Read More</a> |
            <a href="{{ url('login') }}">Log in </a> or <a href="{{ url('register') }}">Register</a> to post comments.
    
        </div>
      </div>    
  </div>

  <div class="mt-5">
    <div class="container rounded p-3" style="background-color:white; border: 1px solid grey;">
        <h3 class="mb-3">
            <b>
               <a style="color:darkslategray;" href="">Google Open Source Programs Office: The business impact of open source</a> 
            </b>
        </h3>
        <p style="color: black;" class="mb-3"> Submitted by Jessica on Thu, 2022-01-20 11:45</p>
        <p style="color: black; font-style:italic;" class="mb-4">
          Creative, exciting applications of open source software can be found worldwide, and who better to share the details of new use cases than the practitioners themselves. In this blog series we’ll feature guests who told their open source stories during Practical Open Source Information (POSI) 2021, an online conference hosted by OSI. Check this channel for more practical open source stories. 
        </p>
        <hr>
    
        <div align="center" class="scroll-to-section m-2">
            <a href="{{ url('jes') }}">Read More</a> |
            <a href="{{ url('login') }}">Log in </a> or <a href="{{ url('register') }}">Register</a> to post comments.
    
        </div>
      </div>    
  </div>

  <div class="mt-5">
    <div class="container rounded p-3" style="background-color:white; border: 1px solid grey;">
        <h3 class="mb-3">
            <b>
               <a style="color:darkslategray;" href="">Open@RIT: Helping Students Embrace the Power of Open Source</a> 
            </b>
        </h3>
        <p style="color: black;" class="mb-3">Submitted by Jessica on Wed, 2022-01-12 11:30</p>
        <p style="color: black;" class="mb-4">
          Creative, exciting applications of open source software can be found worldwide, and who better to share the details of new use cases than the practitioners themselves. In this blog series we’ll feature guests who told their open source stories during Practical Open Source Information (POSI) 2021, an online conference hosted by OSI. Five blogs will be featured in this series, so visit the OSI blog frequently to learn from what these open source advocates have to share. 
        </p>

        <hr>
    
        <div align="center" class="scroll-to-section m-2">
            <a href="{{ url('jes') }}">Read More</a> |
            <a href="{{ url('login') }}">Log in </a> or <a href="{{ url('register') }}">Register</a> to post comments.
    
        </div>
      </div>    
  </div>

  <div class="mt-5">
    <div class="container rounded p-3" style="background-color:white; border: 1px solid grey;">
        <h3 class="mb-3">
            <b>
               <a style="color:darkslategray;" href="">ClearlyDefined is clearly making progress</a> 
            </b>
        </h3>
        <p style="color: black;" class="mb-3">Submitted by Jessica on Wed, 2021-12-29 13:41</p>
        <p style="color: black;" class="mb-4">
          ClearlyDefined is a central, curated data store for Open Source Software licenses. 
        </p>
        <hr>
    
        <div align="center" class="scroll-to-section m-2">
            <a href="{{ url('jes') }}">Read More</a> |
            <a href="{{ url('login') }}">Log in </a> or <a href="{{ url('register') }}">Register</a> to post comments.
    
        </div>
      </div>    
  </div>

  <div class="mt-5">
    <div class="container rounded p-3" style="background-color:white; border: 1px solid grey;">
        <h3 class="mb-3">
            <b>
               <a style="color:darkslategray;" href="">CodeSee: Why we support the OSI</a> 
            </b>
        </h3>
        <p style="color: black;" class="mb-3">Submitted by Jessica on Wed, 2021-12-22 09:24</p>
        <p style="color: black;" class="mb-4">
          This month, we’re pleased to spotlight one of our sponsors, CodeSee, and learn why open source is important to their organization.
        </p>
        <hr>
    
        <div align="center" class="scroll-to-section m-2">
            <a href="{{ url('jes') }}">Read More</a> |
            <a href="{{ url('login') }}">Log in </a> or <a href="{{ url('register') }}">Register</a> to post comments.
    
        </div>
      </div>    
  </div>

  <div class="mt-5">
    <div class="container rounded p-3" style="background-color:white; border: 1px solid grey;">
        <h3 class="mb-3">
            <b>
               <a style="color:darkslategray;" href="">A note from the Executive Director: October News & Updates</a> 
            </b>
        </h3>
        <p style="color: black;" class="mb-3"> Submitted by Jessica on Wed, 2021-10-13 00:00</p>
        <p style="color: black;" class="mb-4">
          I consider myself lucky to have witnessed open source changing the world, watching it go from a niche revolutionary idea to owning a place just about everywhere in everyday life.  
        </p>
        <p style="color: black;" class="mb-3">
          It spread because of the principles it embeds: Non discrimination, fairness, collaboration, community and innovation. These principles of open source were written in the Open Source Definition to simplify our way of interacting with the digital world.
        </p>
        <hr>
    
        <div align="center" class="scroll-to-section m-2">
            <a href="{{ url('jes') }}">Read More</a> |
            <a href="{{ url('login') }}">Log in </a> or <a href="{{ url('register') }}">Register</a> to post comments.
    
        </div>
      </div>    
  </div>

  <div class="container mt-3">
    <a class="btn btn-secondary btn-lg" href="{{ url('jessica') }}">1</a> <a class="btn btn-secondary btn-lg" href="{{ url('blog2') }}">2</a>  <a class="btn btn-secondary" href="{{ url('blog2') }}">Next ></a> <a class="btn btn-secondary" href="{{ url('blog2') }}">last >></a>

    <div class="p-3 rounded mt-4" style="background-color: white; border:0.5px solid grey;">

      <div style="margin: 15px;">

        <h4 class="m-3 fw-bold">User Login</h4>

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

  

<hr class="m-5">

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