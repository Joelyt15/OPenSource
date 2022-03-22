<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        User | Open Source Education
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
        <h3 class="m-3"> <b>Open Source Education</b> </h3>

        <p class="p-2 m-3" style="color: black; font-size:13px;">
            The Open Source Initiative (OSI) actively promotes open source software by educating developers, decision-makers, and users about the advantages of open source software and collaboration techniques. OSI's members are active in the core open source development communities as well as in government, academic, and industry circles, helping to educate people about open source. As part of its mandate on education, OSI members deliver presentations about open source technologies, collaboration techniques, and community building at conferences and seminars across the world. OSI Board members and individual members have also conducted workshops as well as short and long courses on open source concepts, techniques, and technologies.
        </p>

        <h3 class="m-3"> <b>Courses and Seminars</b> </h3>

        <p class="p-2 m-3" style="color: black; font-size:13px;">
            <a href="https://opensource.org/ostm" target="blank">Open Source Technology Management: </a>
            The OSI has partnered with Brandeis University’s Graduate Professional Studies division (GPS) to provide online educational opportunities in Open Source Technology Management. As more companies leverage open source software to reduce costs, decrease time to deployment, and foster innovation, the organizations that have realized success as open source consumers are now extending their participation within open source communities as collaborators and contributors. This shift can create new challenges to traditional business processes and models, requiring dedicated policies, programs, and personnel to ensure that the investments in open source projects produce the desired benefits while still aligning with the values of the open source communities. The Brandeis GPS-OSI partnership will help address the growing demand for expertise within organizations seeking to authentically collaborate with and productively manage open source resources.
        </p>

        <h3 class="m-3"> <b>Community Activities</b> </h3>

        <p class="p-2 m-3" style="color: black; font-size:13px;">
            <a href="https://wiki.opensource.org/bin/Working+Groups+%26+Incubator+Projects/FLOSS+Desktop+Refurbishment+and+Distribution/" target="blank" >FLOSS Desktops for Kids:</a>
            In line with the "Maker" movement and supporting STEM (Science Technology Engineering & Math), this project helps schools and school children learn about and use open source software. This incubator project provides resources and mentors to help school districts, teachers and kids learn about computer hardware, networks and software through hands-on activities that re-builds computers. Using surplus and discarded school computers, kids break-down and repair computer hardware components, install open source software including Linux operating systems, Libre Office, GIMP, etc. The project teaches kids about computers and computing by doing. Once completed, the kids can take their computers home, "for keeps."
        </p>

        <p class="p-2 m-3" style="color: black; font-size:13px;">
            <a href="http://foss2serve.org/index.php/POSSE" target="blank" >Professors' Open Source Software Experience (POSSE)</a>
            POSSEs provide professional development for instructors interested in student participation in Humanitarian Free and Open Source Software. POSSE began as an outreach effort by Red Hat, Inc. to the higher education community. The goal was to help instructors learn about free and open source software (FOSS) so that they could incorporate FOSS into their courses.
        </p>

        <p class="p-2 m-3" style="color: black; font-size:13px;">
            <a href="http://teachingopensource.org/" target="blank" >Teaching Open Source:</a>
            Open source software development is growing in importance therefore it is critical that the technical leaders of tomorrow — software developers, computer scientists, system administrators, analysts, and build engineers — understand open source tools, culture, and concepts. TeachingOpenSource is dedicated to bridging the gap between traditional computing curricula and student work in open source communities. This is a community where professors, institutions, communities, and companies can come together and make the teaching of open source a global success.
        </p>

        <h3 class="m-3"> <b>Documentation</b> </h3>

        <p class="p-2 m-3" style="color: black; font-size:13px;">
            <a href="https://opensource.google.com/docs/" target="blank" >Docs at opensource.google.com:</a>
            In the spirit of openness, OSI sponsor Google has published their internal documentation for how they do open source. Google invites anyone to take a look behind the scenes at how they use, release, and support open source projects and communities
        </p>

        <p class="p-2 m-3" style="color: black; font-size:13px;">
            <a href="https://opensource.guide/" target="blank" >Github Open Source Guides:</a>
            Created and curated by OSI sponsor GitHub, along with input from outside community reviewers, to aggregate resources for individuals, communities, and companies who want to learn how to run and contribute to an open source project: not what GitHub (or any other individual or entity) thinks is best. Examples and quotations from others are emphasized to illustrate points.
        </p>

        <p class="p-2 m-3" style="color: black; font-size:13px;">
            <a href="https://opensource.guide/" target="blank" >TODO Group Guides: </a>
            Open Source Guides developed by OSI Affiliate Members TODO Group and The Linux Foundation with the larger open source community. These guides collect best practices from the leading companies engaged in open source development, and aim to help organizations successfully implement and run an open source program office. These guides are expected to be living documents that evolve via community contributions.
        </p>

        <h3 class="m-3"> <b>Presentations</b> </h3>

        <p class="p-2 m-3" style="color: black; font-size:13px;">
            2019 <br>
            2018 <br>
            2017
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