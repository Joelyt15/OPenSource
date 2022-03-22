<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        User | Mailing Lists
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
        <h3 class="m-3"> <b>Mailing Lists</b> </h3>

        <p class="p-2" style="color: black; font-size:15px;">
            As a distributed organization, the Open Source Initiative uses mailing lists as virtual committees. These are where larger Open Source community works with the OSI's Board of Directors in fulfilling our mission to "educate and advocate" for Open Source.
        </p>

        <p class="p-2" style="color: black; font-size:15px; font-weight:bolder;">
            Our mailing lists are public forums, and our mailing list archives are public.
        </p>

        <p class="p-2 mt-3" style="color: black; font-size:15px;">
            The following mailing lists are open to anyone who cares about the world of Open Source, as long as you respect the charters and observe our Code of Conduct. In addition, you will want to understand the OSI's policy regarding public forums, which includes all our mailing lists, discussion forums, wikis, issue reporting systems, etc.
        </p>

        <h3 class="m-3"> <b>OSI Members</b> </h3>

        <p class="p-2 m-3" style="color: black; font-size:15px;">
            <a href="">OSI Members</a> <br>
            (<a href="https://lists.opensource.org/pipermail/members_lists.opensource.org//" target="blank">Archives</a>) (<a href="https://lists.opensource.org/mailman/listinfo/members_lists.opensource.org" target="blank">Subscribe</a>) (<a href="https://lists.opensource.org/mailman/listinfo/members_lists.opensource.org" target="blank">Unsubscribe</a>)
        </p>

        <p class="p-2 mt-3" style="color: black; font-size:15px;">
            Code of Conduct: <a href="https://opensource.org/codeofconduct" target="blank">Mailing List Code of Conduct</a> ;
        </p>

        <p class="p-2" style="color: black; font-size:15px; font-weight:bolder;">
            Charter: Members-only discussions.
        </p>

        <p class="p-2" style="color: black; font-size:15px;">
            Charter: Reviewing submitted licenses for OSD Compliance and Proliferation concerns (as described in the Approval Process), in order to provide community recommendations to the OSI Board.
        </p>

        <h3 class="m-3"> <b>License Discuss</b> </h3>

        <p class="p-2 mt-3" style="color: black; font-size:15px;">
            <a href="" target="blank">License Discuss List</a>; <br>
            (<a href="https://lists.opensource.org/pipermail/license-discuss_lists.opensource.org/" target="blank">Archives</a>) (<a href="https://lists.opensource.org/mailman/listinfo/license-discuss_lists.opensource.org" target="blank">Subscribe</a>) (<a href="https://lists.opensource.org/mailman/listinfo/license-discuss_lists.opensource.org" target="blank">Unsubscribe</a>)
        </p>

        <p class="p-2 mt-3" style="color: black; font-size:15px;">
            Code of Conduct: <a href="https://opensource.org/codeofconduct/licensing" target="blank">Licensing-Discuss Code of Conduct</a> ;
        </p>

        <p class="p-2" style="color: black; font-size:15px;">
            Charter: Discuss and answer important questions about Open Source licensing, in order to collect community wisdom for the <a href="https://opensource.org/faq" target="blank">FAQ</a>.
        </p>

        <hr>

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