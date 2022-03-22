<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        User | The Open Source Definition
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
        <h3 class="m-3"> <b>The Open Source Definition</b> </h3>

        <h3 class="m-3"> <b>Introduction</b> </h3>


        <p class="m-3" style="color: black; font-size:14px;">
            Open source doesn't just mean access to the source code. The distribution terms of open-source software must comply with the following criteria:
        </p>

        <h3 class="m-3"> <b>1. Free Redistribution</b> </h3>
        
        <p class="m-3" style="color: black; font-size:13px;">
            The license shall not restrict any party from selling or giving away the software as a component of an aggregate software distribution containing programs from several different sources. The license shall not require a royalty or other fee for such sale.
        </p>

        <h3 class="m-3"> <b>2. Source Code</b> </h3>
        
        <p class="m-3" style="color: black; font-size:13px;">
            The program must include source code, and must allow distribution in source code as well as compiled form. Where some form of a product is not distributed with source code, there must be a well-publicized means of obtaining the source code for no more than a reasonable reproduction cost, preferably downloading via the Internet without charge. The source code must be the preferred form in which a programmer would modify the program. Deliberately obfuscated source code is not allowed. Intermediate forms such as the output of a preprocessor or translator are not allowed.
        </p>

        <h3 class="m-3"> <b>3. Derived Works</b> </h3>
        
        <p class="m-3" style="color: black; font-size:13px;">
            The license must allow modifications and derived works, and must allow them to be distributed under the same terms as the license of the original software.
        </p>

        <h3 class="m-3"> <b>4. Integrity of The Author's Source Code</b> </h3>
        
        <p class="m-3" style="color: black; font-size:13px;">
            The license may restrict source-code from being distributed in modified form only if the license allows the distribution of "patch files" with the source code for the purpose of modifying the program at build time. The license must explicitly permit distribution of software built from modified source code. The license may require derived works to carry a different name or version number from the original software.
        </p>

        <h3 class="m-3"> <b>5. No Discrimination Against Persons or Groups</b> </h3>
        
        <p class="m-3" style="color: black; font-size:13px;">
            The license must not discriminate against any person or group of persons.
        </p>

        <h3 class="m-3"> <b>6. No Discrimination Against Fields of Endeavor</b> </h3>
        
        <p class="m-3" style="color: black; font-size:13px;">
            The license must not restrict anyone from making use of the program in a specific field of endeavor. For example, it may not restrict the program from being used in a business, or from being used for genetic research.
        </p>

        <h3 class="m-3"> <b>7. Distribution of License</b> </h3>
        
        <p class="m-3" style="color: black; font-size:13px;">
            The rights attached to the program must apply to all to whom the program is redistributed without the need for execution of an additional license by those parties.
        </p>

        <h3 class="m-3"> <b>8. License Must Not Be Specific to a Product</b> </h3>
        
        <p class="m-3" style="color: black; font-size:13px;">
            The rights attached to the program must not depend on the program's being part of a particular software distribution. If the program is extracted from that distribution and used or distributed within the terms of the program's license, all parties to whom the program is redistributed should have the same rights as those that are granted in conjunction with the original software distribution.
        </p>

        <h3 class="m-3"> <b>9. License Must Not Restrict Other Software</b> </h3>
        
        <p class="m-3" style="color: black; font-size:13px;">
            The license must not place restrictions on other software that is distributed along with the licensed software. For example, the license must not insist that all other programs distributed on the same medium must be open-source software.
        </p>

        <h3 class="m-3"> <b>10. License Must Be Technology-Neutral</b> </h3>
        
        <p class="m-3" style="color: black; font-size:13px;">
            No provision of the license may be predicated on any individual technology or style of interface.
        </p>

        <hr>

        <p class="mt-5 m-3" style="color: black; font-size:13px;">
            The Open Source Definition was originally derived from the <a href="https://www.debian.org/social_contract#guidelines" target="blank">Debian Free Software Guidelines </a>
        </p>

        <p class="mt-3 m-3" style="color: black; font-size:13px;">
            Version 1.9, last modified, 2007-03-22
        </p>

        <p class="mt-3 m-3" style="color: black; font-size:13px;">
            Here's the historical "<a href="https://opensource.org/osd-annotated" target="blank">Annotated OSD</a>" from the early 2000's.
        </p>

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
          <p>Copyright © Joel. All Rights Reserved. 
          <br>Design: <a href="https://gmail.com" target="blank">Jimmy Joel</a></p>
        </div>
      </div>
    </div>
  </footer>


  @include('user.script')

</body>
</html>