<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        User | Agreement
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
        <h3 class="m-3 fw-bold"> <b>Board member agreement</b> </h3>

        <div class="m-3">

            <p style="color: black; font-size:13px;">As a member of the Board of Directors of the Open Source Initiative (OSI), I agree to meet the following expectations regarding my duties and responsibilities.</p>

            <h4 class="mt-3 fw-bold">Our Commitments to each other:</h4>

            <p class="mt-2" style="color: black; font-size:13px;">
                This Board agreement is intended to establish clear and specific shared expectations so that each member and the Board collectively can recognize and respond to issues and concerns predictably and consistently, foster a culture of honesty, transparency and mutual accountability, and promote fair and accurate disclosure and financial reporting and deter wrongdoing. This agreement is not intended to override any applicable laws or any obligations pursuant to OSI’s Bylaws, Conflicts of Interest Policy, Code of Conduct, and Governance Guidelines or any other applicable policies.
            </p>

            <p class="mt-2" style="color: black; font-size:13px;">
                The goal is to ensure that Board Members strive to foster OSI’s Mission, Core Values and Commitments in an ethical and consistent manner. While the commitments in this agreement focus primarily on the spaces where we participate in official work (OSI Wiki, OSI list groups, IRC, meetings, conferences), it is important to recognize that the public behavior of members, including outside OSI-organized spaces, also reflects on the OSI.
            </p>

            <h4 class="mt-3 fw-bold">What’s expected of each Board member:</h4>

            <ul class="m-3" style="font-size:13px;">
                <li style="list-style-type: square;">Attend and participate in Board meetings and other forms of communication for ongoing discussions related to the OSI </li>
                <li style="list-style-type: square;">Provide financial oversight for planning, budgeting, and reporting to regularly review fiscal health of OSI</li>
                <li style="list-style-type: square;">Support the Executive Director by managing expectations consistent with OSI’s strategic priorities as well as ensuring adequate resources are available for staff to implement strategy and goals</li>
                <li style="list-style-type: square;">Own vision and mission by working with the Executive Director to drive strategic direction and define goals in line with the mission.  Approve and review a budget that helps ensure that OSI has the financial and other resources to support the vision and mission. </li>
                <li style="list-style-type: square;">Be ambassadors for OSI -  Representation includes attending open source events on behalf of the OSI, as well as contributing to the OSI's communications efforts through online presence, or participating in community open source discussions while upholding the model of director behavior in this Board Member Agreement</li>
                <li style="list-style-type: square;">Be aware of and comply with the US laws and regulations that apply to OSI as a 501(c)(3) and not act outside of the scope of the OSI’s legal requirements</li>
                <li style="list-style-type: square;">Be aware of and comply with the OSI Conflict of Interest Policy and Code of Conduct</li>
                <li style="list-style-type: square;">Be aware of and comply with privacy and disclosure rules and guidelines for OSI</li>
                <li style="list-style-type: square;">Agree to operate in the best interest of the nonprofit, including disclosure of potential or actual conflicts of interest and not using this position to further personal interest</li>
                <li style="list-style-type: square;">Contribute to promotional and fundraising activities to empower the executive director and staff</li>
                <li style="list-style-type: square;">Contribute to the annual performance review for the Executive Director</li>
                <li style="list-style-type: square;">Communication with staff and volunteers goes through the Executive Director or with their active consent. </li>

            </ul>

            <h4 class="mt-3 fw-bold">What Board Members Can Expect From Each Other</h4>

            <ul class="m-3" style="font-size:13px;">
                <li style="list-style-type: square;">Foster collaborative discussion and listen to understand. Critique ideas rather than people, discuss concerns about individuals with them directly first whenever possible</li>
                <li style="list-style-type: square;">Disagree during Board deliberation but support publicly all Board decisions, especially  those that do not have unanimous consent</li>
                <li style="list-style-type: square;">Participate in board discussion by exploring issues in the context of the goals and mission of the organization.</li>
                <li style="list-style-type: square;">Expect and encourage Board directors and staff to respond in a straightforward and thorough fashion to questions they need answered so that directors can carry out their fiscal, legal, and other responsibilities to the organization.</li>
                <li style="list-style-type: square;">Aim to remediate quickly, honestly and thoroughly when you realize you made a mistake. Members are human, and they will make mistakes. However they should act swiftly and fully to acknowledge mistakes and correct them</li>
            </ul>  
            
            <h4 class="mt-3 fw-bold">What the Board can Expect from OSI Staff</h4>

            <ul class="m-3" style="font-size:13px;">
                <li style="list-style-type: square;">Information provided by deadlines in order for Board directors to make timely decisions in the best interest of OSI</li>
                <li style="list-style-type: square;">Training, presentations, and scripts provided to support ambassador work</li>
                <li style="list-style-type: square;">Well communicated and organized board meetings including calendar invites, agendas, and board packets. </li>
                <li style="list-style-type: square;">The organization will maintain Directors and Officers insurance for legal liability, and the Executive Director will maintain financial, personnel, and other management systems and procedures expected of U.S.-based non-profit organizations. </li>
            </ul> 
            
            <p style="color: black;">
                Signed by:
            </p>

            <p class="mt-3" style="color: black;">
                Board Director &nbsp;&nbsp;&nbsp;  Print Name____________________________________  Date__________ 
            </p>  
            
            <p class="mt-3" style="color: black;">
                Board Chair &nbsp;&nbsp;&nbsp;  Print Name____________________________________  Date__________ 
            </p>  
            
            <p class="mt-3" style="color: black;">
                Board Of OSI &nbsp;&nbsp;&nbsp;  Print Name____________________________________  Date__________ 
            </p>    
            
            
            
        </div>
        
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