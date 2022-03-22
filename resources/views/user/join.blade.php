<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        
        User | OSI Membership

    </title>

    @include('user.css')


    <style>
      label
      {
        display: inline-block;
      }
      p{
          color: black;
          font-size:14px;
      }
      h3{
          font-weight:bold;
      }
      /* a{
          color: green;
      } */
    </style>

  </head>

<body style="background-color:#ddd;">

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

  <div class="container" style="padding-top:150px;">

        <div class="rounded" style="background-color: white; padding:25px; ">
            <h3 class="mb-3">OSI Membership</h3>
 
            <p class="mb-3" style="color: green; font-size:16px; font-style:italic;" class="mt-2">
                <b>
                The Open Source Initiative (OSI) is a member-driven community, and as such we offer a variety of opportunities for individuals, open source projects & foundations, public sector organizations, institutions of higher education, and businesses to join and contribute to our mission.
                </b>
            </p>

            <p class="m-1">
            | <a href="{{ url('join') }}">Individual Membership</a> | | <a href="{{ url('join') }}"> Affiliate Memberships</a> | | <a href="{{ url('join') }}"> Corporate Sponsorships</a> | | <a href="{{ url('join') }}">How We Support Open Source</a> | | <a href="{{ url('join') }}">How Membership Supports Open Source</a> |
            </p>

            <img class="mt-3" src="assets/images/membersShadow.png" alt="members">

            <p class="mt-3">
                The OSI serves as an international nexus of trust, protecting and promoting open source software as well as the communities that develop and depend on it. Since 1998, the OSI has brought together open source developers, organizers, contributors, advocates, and businesses around the common goal of creation through collaboration.
            </p>

            <p class="mt-3 fw-bolder">
                Our membership program is dedicated to furthering this vision.
            </p>

            <p class="mt-3 fw-bolder">
                Why join the OSI…
            </p>

            <p class="mt-1">
                Membership provides several benefits to any person or group who’d like to support and give back to the open source software movement.
            </p>

            <h5 class="mt-3 fw-bolder">
                For Individual Members
            </h5>

            <p class="mt-1 p-2">
                As well as standard member benefits such as free and discounted books, magazines, conference registration fees, and other training materials, as a member-driven organization OSI individual members can vote for OSI board directors and even run for a seat.
            </p>

            <p class="mt-1 p-2">
                In addition to governance, individual members are invited to participate directly in the growth of open source software by creating or joining OSI-sponsored working groups and incubator projects in various areas of open source advocacy and adoption. These working groups and projects serve as resources for the entire open source community.
            </p>

            <p class="mt-1 p-2">
                The OSI also regularly provides small grants to OSI members and working group participants to attend local conferences to represent your project and the OSI, with the goal of educating others about open source software. This is a great way to not only attend a conference of interest, but to also meet peers working on related projects, software, and technologies from across the community. The OSI has sent representatives to events focusing on open source community management, open source in education, open source legal issues, open source in supercomputing, and more.
            </p>

            <h3 class="mb-3">How does OSI promote open source?</h3>

            <p class="mb-3" style="color: green; font-size:16px; font-style:italic;" class="mt-2">
                <b>
                    Being an OSI member is a great way to get directly involved in open source community development and advocacy. Don't think of this as helping just one open source project—think about helping all open source projects!
                </b>
            </p>

            <p class="mt-1 p-2">
                While the member benefits and opportunity to create community help to attract open source advocates to join the OSI, as a public benefit organization, we maintain an active constituency—a vibrant community that recognizes the OSI's role and value in the sector, creates trust throughout the open source community, credibility among professional organizations and business, and standing among policymakers. The OSI is often contacted by individuals, projects, businesses, and even governments to provide opinions on, and best practices for, a variety of issues related to open source licensing, development, and community building, from business and community development to current and proposed law.
            </p>

            <p class="mt-1 p-2">
                The OSI has submitted amici curiae ("friend of the court" briefs) to the U.S. Supreme Court, consulted with industries in the adoption/development/release of open source software, weighed in on government policy, and served as an intermediary among community members to resolve open source related issues.
            </p>

            <h3 class="mb-3">Why does OSI need your support?</h3>

            <p class="mb-3" style="color: green; font-size:16px; font-style:italic;" class="mt-2">
                <b>
                    Only with a strong and active member base can we continue in our role as the internationally recognized nexus of trust, the foundation for, and authority in open source software. In brief, the Open Source Initiative needs your support to support open source.
                </b>
            </p>

            <p class="mt-1 p-2">
                Our membership uses and contributes to open source software like, Debian, Drupal, Eclipse, FreeBSD, Joomla, KDE, LibreOffice, Linux, Plone, Python, TYPO3, WordPress.
            </p> 

            <p class="mt-1 p-2">
                Our membership promotes and participates in initiatives like Apereo Foundation, Creative Commons, DemocracyLab, The Document Foundation, Friends of OpenDocument, LinuxFest, The Mozilla Foundation, OpenHatch, Wikimedia, Wikiotics.
            </p> 

            <p class="mt-1 p-2">
                Our membership is global, representing over 50 countries and international organizations like Association Francophone des Utilisateurs de Logiciels Libres, Associazione LibreItalia, Centro Nacional de Referencia de Aplicación de las Tecnologías de la Información y la Comunicación, The New Zealand Open Source Society , Open Source Sweden, Puerto Rico Python Interest Group, SOUJava.
            </p> 

            <p class="mt-1 p-2">
                If this sounds like you or your organization, we invite you to join today.
            </p>
            
            <p class="mt-1 p-2">
                If you’re not involved with any of these projects, but you use open source software, love it, and want to give back to the community, we’d be honored to help you accomplish that goal through our work and your membership.
            </p> 

            <img class="mb-5" src="assets/images/multi.png" alt="multi">

            <hr>

        </div>
      
  </div>

  <div class="container mt-5">

    <div class="p-3 rounded" style="background-color: white; ">

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