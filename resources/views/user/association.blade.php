<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        User | Associations
    </title>

    @include('user.css')

    <style>
        label{
            display: inline-block;
        }

        img{

            width: 150px;
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
        <h3 class="m-1 fw-bold">Associations</h3>
        <div style="padding: 20px;">

            <p style="color:black; font-size: 13px;">
              The Open Source Initiative, in order to advance our mission to promote and protect open source software, development and communities, champion software freedom in society through education, collaboration, and infrastructure, steward the Open Source Definition (OSD), and prevent abuse of the ideals and ethos inherent to the open source movement, engages in and with a variety of organizations in various roles and capacities. Those organizations are listed here.
            </p>

            <div class="container mt-3 rounded" style="border: 1px solid #ddd">

              <div style="padding: 15px;">

                <p style="color: black; font-size:13px;">
                  <img class="m-1" src="assets/images/Counsul.png" style="float: left; vspace='5' hspace='8' " alt="counsul">
                  The <a href="http://consulproject.org/" target="blank">CONSUL Foundation</a> supports the CONSUL platform, a complete tool enabeling citizen participation for open, transparent, and democratic government.
                </p>

                <p class="mt-4" style="color: black; font-size:13px;">
                  <img class="m-1" src="assets/images/EUTransReg.png" style="float:left; vspace='5' hspace='8' " alt="counsul">
                  The <a href="https://ec.europa.eu/transparencyregister/public/homePage.do?redir=false&amp;locale=en" target="blank">European Union Transparency Register</a>: Citizens can, and indeed should, The transparency register has been set up to answer core questions such as what interests are being pursued, by whom and with what budgets. The system is operated jointly by the European Parliament and the European Commission. (OSI EU Transparency Register number 672028337929-77)
                </p>

                <p class="mt-4" style="color: black; font-size:13px;">
                  <img class="m-1" src="assets/images/ETSIMemberLogo_0.png" style="float: left; vspace='5' hspace='8' " alt="counsul">
                  The <a href="https://www.etsi.org/" target="blank">ETSI</a> is the recognized regional standards body European Standards Organization (ESO), dealing with telecommunications, broadcasting, and other electronic communications networks and services.
                </p>

                <p class="mt-4" style="color: black; font-size:13px;">
                  <img class="m-1" src="assets/images/Logo_KDE_e.V.png" style="float: left; vspace='5' hspace='8' " alt="counsul">
                  The <a href="https://ev.kde.org/advisoryboard.php" target="blank"> KDE e.V. Advisory Board </a> provides a space for organizations to support KDE e.V. by giving feedback on KDE's activities and decisions. Furthermore, it is a channel to facilitate communication between KDE and the organizations on the Advisory Board.
                </p>

                <p class="mt-4" style="color: black; font-size:13px;">
                  <img class="m-1" src="assets/images/NYCONLogo.png" style="float: left; vspace='5' hspace='8' " alt="counsul">
                  The <a href="https://www.nycon.org/" target="blank"> New York Council of Nonprofits </a> (NYCON) works together with our members, other nonprofits, funders and stakeholders to enrich communities by building the capacity of nonprofits through services and advocacy. We believe our mission is most effectively fulfilled through a commitment to diversity and inclusiveness as a core value and practice.
                </p>

                <p class="mt-4" style="color: black; font-size:13px;">
                  <img class="m-1" src="assets/images/OW2_Logo.png" style="float: left; vspace='5' hspace='8' " alt="counsul">
                  <a href="https://www.ow2.org/" target="blank"> OW2 </a> is a global open source software community, working to promote the development of middleware, generic business applications, cloud computing platforms and foster a vibrant community and business ecosystem.
              </div>

            </div>

            <hr class="mt-5"> 

        </div>

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