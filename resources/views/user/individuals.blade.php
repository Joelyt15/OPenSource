<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        User | Become an OSI Individual Member
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
        <h3 class="m-3"> <b>Become an OSI Individual Member</b> </h3>

        <h5 class="m-3"> <b>What is OSI Individual Membership?</b> </h5>


        <p class="p-2 m-2" style="color: black; font-size:14px;">
            OSI Individual Members are people who support the mission of the OSI, which is to educate about and advocate for the benefits of open source and to build bridges among different constituencies in the open source community. 
            <a href="http://opensource.org/members/join" target="blank">You can join online</a>
        </p>

        <h5 class="m-3"> <b>Why Individual Membership?</b> </h5>

        <p class="p-2 m-2" style="color: black; font-size:14px;">
            The OSI is moving its governance from a model of volunteer and self-appointed directors to one driven by members. Our high-level objectives in doing so are to provide a broad meeting place for everyone who shares an interest in open source software, with the continuing aim of strengthening the OSI so that it can more effectively fulfill its goals over the long term. These goals include safely maintaining the Open Source Definition, managing the approval of open source licenses, and publicly supporting the widespread adoption and use of open source software. We believe that having a large global membership base is an excellent way to achieve those goals, and that our Individual Members will be able to advocate for open source in their communities and organizations. Individual Members, combined with OSI Affiliate organizations, can help make the OSI the strongest voice for open source around the world.
        </p>

        <h6 class="m-3"> <b>What are the Benefits to Membership?</b> </h6>

        <p class="p-2 m-2" style="color: black; font-size:14px;">
            Becoming an OSI Individual Member provides several benefits. Please check the list of benefits here:
        </p>

        <a class="m-4" style="font-size:14px;" href="https://opensource.org/benefits">List of Individual Member Benefits</a>

        <h4 class="m-3"> <b>Who can join?</b> </h4>

        <p class="p-2 m-2" style="color: black; font-size:14px;">
            Anyone can join. Because the OSI is based in the US, we cannot accept contributions from certain countries where economic embargoes are in place. If you are in such a country, please contact us so that we can provide you with a complimentary membership.
        </p>

        <h4 class="m-3"> <b>Why should we join?</b> </h4>

        <p class="p-2 m-2" style="color: black; font-size:14px;">
            The OSI is at a transformative stage in its history. In addition to your financial support of OSI, you can help to define the ways for the OSI to achieve its mission. You can publicize your membership, add it to your resumé, and encourage others to join and support the OSI.
        </p>

        <h4 class="m-3"> <b>What is the commitment?</b> </h4>

        <p class="p-2 m-2" style="color: black; font-size:14px;">
            Individual Membership does not involve any formal commitment to participate in the activities of the OSI. However, there are many things that Members can do to help advance the goals of the OSI:
        </p>

        <ul class="mt-2" style="font-size:13px; padding-left:40px;">

            <li style="list-style-type: square;">Express public support for open source and for the OSI.</li>
            <li style="list-style-type: square;">If time permits, serve on one or more OSI Working Groups or Committees, which carry out the activities of the OSI.</li>
            <li style="list-style-type: square;">Where possible, make annual contributions towards the running of OSI.</li>
            <li style="list-style-type: square;">Help mobilize awareness of issues around the world that affect open source software.</li>

        </ul>

        <h4 class="m-3"> <b>What are the membership fees?</b> </h4>

        <p class="p-2 m-2" style="color: black; font-size:14px;">
            Individual Memberships are $40 per year. You may set up your account to be automatically billed each year. We also offer free memberships for students and discounted memberships for those that might find the $40 annual commitment too much a burden. You may use our
            <a href="{{ url('contact') }}">contact form</a>
            to request a student or discounted membership. Be sure to select "Memberships" from the options in the "Category" menu.
        </p>

        <h4 class="m-3"> <b>What do the membership fees support?</b> </h4>

        <p class="p-2 m-2" style="color: black; font-size:14px;">
            While the OSI has managed to be effective with only limited resources, we have become very aware in recent years of how much potential there is to be more effective with greater resources. Because this membership program is part of a governance transformation as well as a fundraising campaign, the current Board does not wish to predetermine future decisions. However, we expect that the need we currently see for dedicated, long-term advocacy and organizing (e.g., through permanent staff, fellowship positions, or something similar) will be recognized by the membership and by future boards, and that the money raised through membership fees will help make such sustained efforts possible.
        </p>

        <h4 class="m-3"> <b>How do I sign up?</b> </h4>

        <p class="p-2 m-2" style="color: black; font-size:14px;">
            Thanks for asking! Please go to the
            <a href="http://www.opensource.org/join">signup page</a>
            to join.
        </p>

        <h4 class="m-3"> <b>Is there a press release?</b> </h4>

        <p class="p-2 m-2 mb-5" style="color: black; font-size:14px;">
            Yes, there is —
            <a href="http://opensource.org/members/1207-release"> issued on July 18, 2012 at OSCON in Portland, OR</a>.
            to join.
        </p>

        <hr class="mb-4">

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