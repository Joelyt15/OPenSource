<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        User | Articles & Books
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
        <h3 class="m-3"> <b>Articles & Books</b> </h3>

        <p class="p-2 m-2" style="color: black; font-size:13px;">
            On this page you will find serveral references to articles and books written. or contributed to, by current and former OSI Board Directors on a variety of topics related to open source software, development, and communities. These resources can provide those just discovering open source software, a starting point for exploring the origins, practices, and emerging trends that have helped to create on of the most transformative technology movements in history. For those already versed in open source software, these resources should be able to extend your knowledge, offering insights and perspectives from some of the most influential practictioners, innnovators, and leaders in, not only open source software, but the technologies that are now ubiquitous across all industries.
        </p>


        <p class="p-2 m-2" style="color: black; font-size:13px;">
            1998: " <a href="http://www.catb.org/~esr/writings/cathedral-bazaar/cathedral-bazaar/index.html#catbmain" target="blank">The Cathedral and the Bazaar</a>, "
            by Eric S. Raymond
        </p>

        <p class="p-2 m-2" style="color: black; font-size:13px;">
            1999: " <a href="https://www.oreilly.com/openbook/opensources/book/" target="blank">Open Sources: Voices from the Open Source Revolution</a>, "
            edited by Chris DiBona, with Brian Behlendorf, Bruce Perens, Eric S. Raymond, and Michael Tiemann.
        </p>

        <p class="p-2 m-2" style="color: black; font-size:13px;">
            2000: " <a href="https://archive.org/details/opensources2.000diborich/page/n3" target="blank">Open Sources 2.0 : the continuing evolution</a>, "
            edited by Danese Copper and Chris DiBona, with Matthew N. Asay, Ian Murdock, Russ Nelson, Alolita Sharma, and Bruno Souza.
        </p>


        <p class="p-2 m-2" style="color: black; font-size:13px;">
            2005 (revised 2017): " <a href="https://producingoss.com/" target="blank">Producing Open Source Software: How to Run a Successful Free Software Project</a>, "
            by Karl Fogel.
        </p>

        <p class="p-2 m-3" style="color: black; font-size:13px;">
            2018: "Forge Your Future with Open Source," by VM (Vicky) Brasseur.
        </p>


        <hr class="m-5">

        <p class="p-2 m-3" style="color: black; font-size:14px; font-weight:bold; font-style:italic;">
            Disclaimer: The views and opinions expressed in the publications included here are those of the authors, and do not necessarily reflect the official policies, positions, views or opinions of the OSI, its current or former Board Directors, or its members. In addition, the individuals listed here are included based solely on their current or previous affiliation with the OSI as a Board Director, and such listing should not be considered an endorsement of any kind.
        </p>

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