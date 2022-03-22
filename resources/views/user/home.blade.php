<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>User | Home</title>

    @include('user.css')


    <style>
      label
      {
        display: inline-block;
      }
    </style>

  </head>

<body>

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
            <li class="scroll-to-section"><a href="{{ url('home') }}" class="active">Home</a></li>
            <li class="scroll-to-section"><a href="{{ url('contact') }}">Contact</a></li>
            <li class="scroll-to-section"><a href="{{ route('login') }}">Login</a></li> 
            <li><a href="#"><i class="fa fa-phone"></i>070-875-2860</a></li>
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
        <img src="assets/images/os.png" style="width: 100px; height:100px; position: relative;" alt="Open Source">
        <b>
            Open Source Initiative
        </b> 
    </h1>
    <p style="text-align:center;">Guaranteeing the 'our' in source...</p>

  </div>

  @include('user.header')

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h3 class="mb-3">News</h3>
                    <h4 class="mb-2"><a href="{{ url('candidates') }}">Meet OSI’s 2022 candidates for Board of Directors</a></h4>
                    <p style="color: black; font-size:14px;">We’re thrilled to announce nine individual and five Affiliate candidates who are up for election. Meet the candidates before voting opens this Friday, March 11th.</p>
                  </div>
                  <div class="col-lg-12">
                    <div class="scroll-to-section">
                      <a href="{{ url('candidates') }}">Read More</a> |
                      <a href="{{ url('jessica') }}">Jessica's Blog</a> |
                      <a href="{{ url('login') }}">Log in </a> or <a href="{{ url('register') }}">Register</a> to post comments.

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/slider-dec-v3.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

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
                  <a href="{{ url('stefano') }}">stefano's Blog</a> |
                  <a href="{{ url('login') }}">Log in </a> or <a href="{{ url('register') }}">Register</a> to post comments.

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
                  <a href="{{ url('jessica') }}">Anonymous's Blog</a> |
                  <a href="{{ url('login') }}">Log in </a> or <a href="{{ url('register') }}">Register</a> to post comments.

                </div>
              </div>

        </div>

    </div>

  </div>

  <div class="container mt-5">
        <a class="mt-3" href="{{ url('news') }}">Read more news from the OSI</a>
  </div>

  <div class="container mt-5">

    <div class="p-3 rounded" style="background-color: white; border:0.5px solid grey;">

      <div style="margin: 15px;">

        <h4 class="m-3 fw-bold">User Login</h4>

        <form method="POST" action="{{ url('login') }}">
            @csrf
    
            <div>
                <x-jet-label style="width: 75px;" for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"  />
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


  <div class="container mt-5">

    <div class="p-3 rounded" style="background-color: #999999; border:0.5px solid grey;">

        <h4 class="mb-3" style="color: white;">To promote and protect open source software and communities...</h4>
        <p style="color: white;">
            For over 20 years the Open Source Initiative (OSI) has worked to raise awareness and adoption of open source software, and build bridges between open source communities of practice. As a global non-profit, the OSI champions software freedom in society through education, collaboration, and infrastructure, stewarding the Open Source Definition (OSD), and preventing abuse of the ideals and ethos inherent to the open source movement.
        </p>
        <p style="color: white;">
            Open source software is made by many people and distributed under an OSD-compliant license which grants all the rights to use, study, change, and share the software in modified and unmodified form. Software freedom is essential to enabling community development of open source software.
        </p>

    </div>    
  </div> 

  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>Contact Us</h6>
            <h4>Get In Touch With Us <em>Now</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="{{ url('/message') }}" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-lg-12">
                <div class="contact-dec">
                  <img src="assets/images/contact-dec-v3.png" alt="">
                </div>
              </div>
              <div class="col-lg-5">
                <div id="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2551.4054504223895!2d36.900232640870016!3d-1.3093037202981828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1252a762f0bd%3A0xecdd513f974aa97f!2sTassia%20complex!5e0!3m2!1sen!2ske!4v1647017465429!5m2!1sen!2ske" width="100%" height="636px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
              </div>
              <div class="col-lg-7">
                <div class="fill-form">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="assets/images/phone-icon.png" alt="">
                          <a>0708-752-860</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-5">
                      <div class="info-post">
                        <div class="icon">
                          <img src="assets/images/email-icon.png" alt="">
                          <a href="https://www.gmail.com/" target="blank">joeljim015@gmail.com</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="info-post">
                        <div class="icon">
                          <img src="assets/images/location-icon.png" alt="">
                          <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2551.4054504223895!2d36.900232640870016!3d-1.3093037202981828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1252a762f0bd%3A0xecdd513f974aa97f!2sTassia%20complex!5e0!3m2!1sen!2ske!4v1647017465429!5m2!1sen!2ske" target="blank">123 Fedha</a>
                        </div>
                      </div>
                    </div>
                   
                    @include('user.contact2')

                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2022 Joel. All Rights Reserved. 
          <br>Design: <a href="https://gmail.com" target="blank">Jimmy Joel</a></p>
        </div>
      </div>
    </div>
  </footer>

@include('user.script')
  
</body>
</html>