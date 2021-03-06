<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        User | Resources
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
        <h3 class="m-3"> <b>Resources</b> </h3>

        <p class="p-2" style="color: black; font-size:15px;">
            Questions, answers, mailing lists, live chat and more: Whether you're an open source advocate who wants to spread the word about the benefits of open source, a software developer looking for tips or tools, an entrepreneur with a start-up or business leader transforming your company, we have resources to help.
        </p>

        <div class="row p-5">

            <div class="col-sm-4">
                <h3 style="font-weight: bolder;" align="center">FAQ</h3>

                <p class="p-2 mt-2" style="color: black; font-size:15px; text-align:center;">
                    You're not the first to come to us looking for answers.
                    <a href="https://opensource.org/faq" target="blank"> Look over the most common questions we get...</a>
                    maybe your answer is there.
                </p>

                <h3 style="font-weight: bolder;" align="center">Documentation</h3>

                <p class="p-2 mt-2" style="color: black; font-size:15px; text-align:center;">
                    Almost
                    <a href="http://wiki.opensource.org/" target="blank"> everything is on our wiki </a>,
                    including work from various teams. A lot of information can be obtained there.
                </p>

            </div>

            <div class="col-sm-4">
                <h3 style="font-weight: bolder;" align="center">Ask the OSI</h3>

                <p class="p-2 mt-2" style="color: black; font-size:15px; text-align:center;">
                    Have a question about The Open Source Initiative?    <br>
                    <a href="https://opensource.org/contact" target="blank"> Get an answer here! </a>
                </p>

                <h3 class="mt-4" style="font-weight: bolder;" align="center">Mailing Lists</h3>

                <p class="p-2 mt-2" style="color: black; font-size:15px; text-align:center;">
                    We have many
                    <a href="http://wiki.opensource.org/" target="blank"> global and regional mailing lists </a>,
                    for announcements, discussion, licensing and other topics. You can also read mailing lists on the web via
                    <a href="https://lists.opensource.org/cgi-bin/mailman/listinfo" target="blank">Mailman</a>.
                </p>

            </div>

            <div class="col-sm-4">
                <h3 style="font-weight: bolder;" align="center">IRC (Live Chat)</h3>

                <p class="p-2 mt-2" style="color: black; font-size:15px; text-align:center;">
                    Join us on
                    <a href="https://web.libera.chat/" target="blank">  IRC at Libera Chat. </a>
                    The #osi channel is for user support and general discussion.
                </p>

                <h3 class="mt-4" style="font-weight: bolder;" align="center">Get Social</h3>

                <p class="p-2 mt-2" style="color: black; font-size:15px; text-align:center;">
                    You can find us on
                    <a href="https://github.com/OpenSourceOrg" target="blank">GitHub</a>,
                    <a href="https://www.linkedin.com/company/open-source-initiative-osi-"> LinkedIn</a>,
                    <a href="https://www.reddit.com/r/opensource/">Reddit</a>,
                    <a href="https://twitter.com/OpenSourceOrg">Twitter</a>.
                </p>
            
            </div>

        </div>
      
        <hr class="mb-5">

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
          <p>Copyright ?? Joel. All Rights Reserved. 
          <br>Design: <a href="https://gmail.com" target="blank">Jimmy Joel</a></p>
        </div>
      </div>
    </div>
  </footer>


  @include('user.script')

</body>
</html>