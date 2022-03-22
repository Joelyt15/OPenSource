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
        <h3 class="m-3"> <b>Open Source Licenses by Category</b> </h3>

        <h5 class="m-3"> <b>License Index</b> </h5>

        <ul class="" style="font-size: 13px; padding-left:40px;">
            
            <li style="list-style-type: square;"><a href="https://opensource.org/approval" target="blank">License Approval Process</a></li>
            <li style="list-style-type: square;"><a href="https://opensource.org/licenses" target="blank">License Information</a></li>
            <li style="list-style-type: square;">Origins and definitions of categories from the License Proliferation Committee report</li>

        </ul>

        <p class="mt-2" style="color:black; font-size:13px; padding-left:20px;">
            In the lists below, a parenthesized expression following a license name is its SPDX short identifier, if one exists, except for two items in the first list (GNU General Public License and GNU Lesser General Public License). For these, the parenthesized expressions ("GPL" and "LGPL" respectively) are the common non-version-specific names of these licenses today (note also that the full name of the first version (2.0) of the LGPL is the GNU Library General Public License). There is no non-version-specific SPDX short identifier for the GPL and LGPL.
        </p>
        
        <h3 class="m-3"> <b>Licenses that are "popular and widely-used or with strong communities"</b> </h3>

        <p class="mt-2" style="color:black; font-size:13px; padding-left:20px;">
            The below list is based on publicly available statistics obtained at the time of the Report of License Proliferation Committee.
        </p>

        <ul style="padding-left:40px; font-size:13px; color:black;">

            <li style="list-style-type: square;"><a href="https://opensource.org/licenses/Apache-2.0" target="blank">Apache License 2.0 (Apache-2.0)</a></li>
            <li style="list-style-type: square;"><a href="https://opensource.org/licenses/BSD-3-Clause" target="blank">3-clause BSD license (BSD-3-Clause)</a></li>
            <li style="list-style-type: square;"><a href="https://opensource.org/licenses/BSD-2-Clause" target="blank">2-clause BSD license (BSD-2-Clause)</a></li>
            <li style="list-style-type: square;"><a href="https://opensource.org/licenses/gpl-license" target="blank">GNU General Public License (GPL)</a></li>
            <li style="list-style-type: square;"><a href="https://opensource.org/licenses/lgpl-license" target="blank">GNU Lesser General Public License (LGPL)</a></li>
            <li style="list-style-type: square;"><a href="https://opensource.org/licenses/MIT" target="blank">MIT license (MIT)</a></li>
            <li style="list-style-type: square;"><a href="https://opensource.org/licenses/MPL-2.0" target="blank">Mozilla Public License 2.0 (MPL-2.0)</a></li>
            <li style="list-style-type: square;"><a href="https://opensource.org/licenses/CDDL-1.0" target="blank">Common Development and Distribution License 1.0 (CDDL-1.0)</a></li>
            <li style="list-style-type: square;"><a href="https://opensource.org/licenses/EPL-2.0" target="blank">Eclipse Public License 2.0 (EPL-2.0)</a></li>

        </ul>

        <h3 class="m-3"> <b>International licenses</b> </h3>

        <ul style="padding-left:40px; font-size:13px; color:black;">

            <li style="list-style-type: square;"><a href="https://opensource.org/licenses/CECILL-2.1" target="blank">CeCILL License 2.1</a></li>
            <li style="list-style-type: square;"><a href="https://opensource.org/licenses/EUPL-1.1" target="blank">European Union Public License (EUPL-1.2)</a></li>
            <li style="list-style-type: square;"><a href="https://opensource.org/licenses/LiLiQ-P-1.1" target="blank">Licence Libre du Québec – Permissive (LiLiQ-P) version 1.1 (LiLiQ-P-1.1)</a></li>
            <li style="list-style-type: square;"><a href="https://opensource.org/licenses/LiLiQ-R-1.1" target="blank">Licence Libre du Québec – Réciprocité (LiLiQ-R) version 1.1 (LiLiQ-R-1.1)</a></li>
            <li style="list-style-type: square;"><a href="https://opensource.org/licenses/LiLiQ-Rplus-1.1" target="blank">Licence Libre du Québec – Réciprocité forte (LiLiQ-R+) version 1.1 (LiLiQ-Rplus-1.1)</a></li>
            <li style="list-style-type: square;"><a href="https://opensource.org/licenses/MulanPSL-2.0" target="blank">Mulan Permissive Software License v2 (MulanPSL - 2.0)</a></li>

        </ul>    

        <h3 class="m-3"> <b>International licenses</b> </h3>

        <p class="mt-2" style="color:black; font-size:13px; padding-left:20px;">
            Self-defining category. No one should use these licenses going forward, although we assume that licensors may or may not choose to continue to use them.
        </p>

        <ul style="padding-left:40px; font-size:13px; color:black;">

            <li style="list-style-type: square;"><a href="https://opensource.org/licenses/CUA-OPL-1.0" target="blank">CUA Office Public License Version 1.0 (CUA-OPL-1.0)</a></li>
            <li style="list-style-type: square;"><a href="https://opensource.org/licenses/Intel" target="blank">Intel Open Source License (Intel)</a></li>
            <li style="list-style-type: square;"><a href="https://opensource.org/licenses/jabberpl" target="blank">Jabber Open Source License</a></li>
            <li style="list-style-type: square;"><a href="https://opensource.org/licenses/CVW" target="blank">MITRE Collaborative Virtual Workspace License (CVW)</a></li>
            <li style="list-style-type: square;"><a href="https://opensource.org/licenses/SISSL" target="blank">Sun Industry Standards Source License (SISSL)</a></li>

        </ul>    

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