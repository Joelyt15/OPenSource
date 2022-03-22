<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        User | Volunteers & Staff
    </title>

    @include('user.css')

    <style>
        label{
            display: inline-block;
        }

        img{

            width: 100px;
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
        <h3 class="m-1 fw-bold">Volunteers & Staff</h3>
        <div style="padding: 20px;">

            <p style="color:black; font-size: 13px;">
                The Open Source Initiative (OSI) exists and succeeds because of the commitments and contributions of our community. We would like to thank all of those who have stepped forward to support our work in promoting and protecting open source software, development and communities.
            </p>

            <p style="color:black; font-size:13px;">
                OSI non-discrimination policy: The Open Source Initiative does not promote or discriminate against any person, population group, or organization with regard to categories protected by applicable United States law, as well as other categories identified by the OSI in alignment with our own Human Resources policies. These include, but are not limited to race, color, ancestry, religion, sex, sexual orientation, gender expression, physical appearance, citizenship, marital status, language, education background, national origin, age, disability, and veteran status. We also consider qualified applicants regardless of criminal histories, consistent with legal requirements. If you have a disability or special need that requires accommodation, please let us know.
            </p>
            
            <p>
                [<a href="https://wiki.opensource.org/bin/Operations/OSI+Staff/Non-discriminationPolicy">Comment/Improve</a>]
            </p>

            <h4 class="mt-3 fw-bold">Staff</h4>

            <p class="mt-2" style="color: black; font-size:13px;"><b style="font-size:17px;">Steffano Maffulli</b>, Executive Director</p>

            <p style="color: black; font-size:13px;">
                <img src="" alt="Steffano"> Stefano joined OSI in 2021. More about him in the announcement of his appointment.
            </p>

            <p class="mt-5" style="color: black; font-size:14px;"> <b style="font-size:17px;">Phyllis Dobbs</b>, Controller
            </p>

            <p class="mt-2" style="color: black; font-size:13px;">
                <img class="rounded m-1" src="assets/images/Dobbs.png" style="float: left; vspace='5' hspace='8' " alt="Dobbs" width="10%">Phyllis Dobbs joined OSI as part-time Controller in December 2017. Phyllis is currently part-time Controller for Python Software Foundation, as well as a part-time accounting/finance consultant for the Lake Forest Symphony, the Lake County Chamber of Commerce, and the Alliance for Human Services. Previously, Phyllis was CFO of Shimer College and Controller for McGraw-Hill Higher Education. Phyllis has an MBA from Duke University and a B.S. in Accounting from Clemson University. In addition, Phyllis is Trustee at Cook Memorial Public Library, President of a condo association, volunteers annually with the IRS/AARP tax program, and is a clarinetist in the Libertvyille Village Band.
            </p>

            <p class="mt-5" style="color: black; font-size:14px;"> <b style="font-size:17px;">Jessica Lavarone</b>, Community and Marketing Manager
            </p>

            <p class="mt-2" style="color: black; font-size:13px;">
                <img class="rounded m-1" src="assets/images/Jessica.png" style="float: left; vspace='5' hspace='8' " alt="jessica" width="10%">Jessica Iavarone joined on as Operations Assistant and was hired full time in 2022 to manage community relations and the outreach efforts of OSI. Jessica graduated in 2017 from the University at Albany with a BA in Communications and Marketing. Jessica also worked as Social Media Coordinator for the Northeast Kidney Foundation.
            </p>

            <p class="mt-5" style="color: black; font-size:14px;"> <b style="font-size:17px;">Simon Phipps</b>, Standards and Policy Director
            </p>

            <p class="mt-2" style="color: black; font-size:13px;">
                <img class="rounded m-1" src="assets/images/simon.png" style="float: left; vspace='5' hspace='8' " alt="simon" width="10%">Simon Phipps first joined OSI in 2008 as a Board observer and has been a board director, board president, and board secretary at various times since, until early 2020 when he switched to his current role. With a degree in electronic engineering that led to a focus first on compiler design and then workstations and networking, he has had C-level roles with responsibility for software community matters at IBM, Sun Microsystems and Forgerock. As Sun's chief open source officer he ran one of the first fully staffed OSPOs and oversaw the release of Sun's whole software portfolio under open source licenses, notably including the Java platform. He has been involved in de jure standards since 1991 at multiple SDOs.  He consults, writes and speaks widely on software freedom issues.
            </p>

            <p class="mt-5" style="color: black; font-size:14px;"> <b style="font-size:17px;">Betsy Waliszewski</b>, Director of Sustainability
            </p>

            <p class="mt-2" style="color: black; font-size:13px;">
                <img class="rounded m-1" src="assets/images/Betsy.jpg" style="float: left; vspace='5' hspace='8' " alt="simon" width="10%"> Betsy started her career in tech in 1997 as a marketing manager at Infortrend Technology, a manufacturer of High Performance Enterprise-Class Digital Storage Solutions. In 1999, she moved on to O’Reilly Media, where she held the position of Product Manager, Senior Marketing Manager, and Partner Manager for the next 16 years.
                At this point, she felt it was time to give back to the open source community that had been so welcoming to her by transitioning to The Python Software Foundation (PSF), a non-profit membership organization, where she spent the next 6 years as Sponsorship Coordinator and Administrator. <br>
                In May of 2021, she returned to the broader open source community by joining the Open Source Initiative as the Director of Sustainability. She is conducting research and market segmentation, creating sales, drawing connections, identifying opportunities and gaps as well as developing and overseeing OSI annual fundraising initiatives and programs.
            </p>

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