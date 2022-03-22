<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        User | Board
    </title>

    @include('user.css')

    <style>
        label{
            display: inline-block;
        }

        table, th, td {
            border: 1px solid #ddd;
            border-collapse: collapse;
            font-size: 13px;
            text-align: center;
            padding-top: 15px;
            padding-bottom: 15px;
            padding-left: 15px;
            padding-right: 15px;
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



  <div style="padding-top:200px;" class="container mb-1">
    <div class="rounded" style="background-color:white; padding:20px;">
        <h3 class="mb-2"> <b>OSI Board of Directors</b> </h3>

        <div style="padding: 10px;">

        <p class="p-2" style="color: black; font-size:15px;">
            The Open Source Initiative (OSI) is managed by a member-elected board of directors that is the ultimate authority responsible for the organization as a California public benefit corporation, with 501(c)3 tax-exempt status.
        </p>
        </div>

        <div class="container" style="color:black; padding:15px;">

            <h4 class="fw-bold mb-2">Current composition</h4>

            <p style="color: black">The ten person OSI board is composed of:</p>

            <ul class="container m-3">
                <li style="list-style-type: square; font-size:14px;">
                    <a>Four directors elected by OSI Individual Members for two-years terms.</a>
                </li>
                <li style="list-style-type: square; font-size:14px;">
                    <a>Four directors elected by OSI Affiliate Members  for three-years terms.</a>
                </li>
                <li style="list-style-type: square; font-size:14px;">
                    <a>Two directors are appointed for two-years terms by the board itself.</a>
                </li>
            </ul>

            <p style="color: black;">All directors can serve up to a maximum of 6 consecutive years. Before they can run again they must be off the board for 1 year.</p>

            <p style="color: black;">The results of elections for both individual and affiliate member board seats are advisory with the OSI Board making the formal appointments to open seats based on the community's votes.</p>

            <div class="container m-3">
                
                <table style="width:100%; padding:30px;" summary="">
                        <tr>
                            <th>Name</th>
                            <th>Role</th>
                            <th>First Elected</th>
                            <th>Current Term Start Date</th>
                            <th>Current Term End Date</th>
                            <th>Seated By</th>
                        </tr>
                        <tr>
                            <td>Maracke, Catharina	</td>
                            <td>Chair</td>
                            <td>August 23, 2021</td>
                            <td>August 23, 2021</td>
                            <td>March 31, 2023</td>
                            <td>Individuals</td>
                        </tr>
                        <tr>
                            <td>Thierry Carrez</td>
                            <td>Vice Chair</td>
                            <td>August 23, 2021</td>
                            <td>August 23, 2021</td>
                            <td>March 31, 2024</td>
                            <td>Affiliates</td>
                        </tr>
                        <tr>
                            <td>Byrd-Sanicki, Megan</td>
                            <td>Director</td>
                            <td>April 1, 2020</td>
                            <td>April 1, 2020</td>
                            <td>March 31, 2022</td>
                            <td>Individuals</td>
                        </tr>
                        <tr>
                            <td>Colannino, Justin</td>
                            <td>Director</td>
                            <td>January 21, 2022</td>
                            <td>January 21, 2022</td>
                            <td>January 20, 2024</td>
                            <td>OSI Board</td>
                        </tr>
                        <tr>
                            <td>Chestek, Pamela</td>
                            <td>Director</td>
                            <td>April 1, 2019</td>
                            <td>April 1, 2019</td>
                            <td>March 31, 2022</td>
                            <td>Affiliates</td>
                        </tr>
                        <tr>
                            <td>Dang, Hong Phuc</td>
                            <td>Director</td>
                            <td>April 1, 2019</td>
                            <td>August 23, 2021</td>
                            <td>March 31, 2024</td>
                            <td>Affiliates</td>
                        </tr>
                        <tr>
                            <td>Aeva Black</td>
                            <td>Assistant Secretary</td>
                            <td>August 23, 2021</td>
                            <td>August 23, 2021</td>
                            <td>March 31, 2023</td>
                            <td>Individuals</td>
                        </tr>
                        <tr>
                            <td>Hinds, Tracy</td>
                            <td>Treasurer / CFO</td>
                            <td>October 11, 2019</td>
                            <td>October 11, 2019</td>
                            <td>October 31, 2021</td>
                            <td>OSI Board</td>
                        </tr>
                        <tr>
                            <td>Simmons, Joshua</td>
                            <td>Director</td>
                            <td>April 1, 2016</td>
                            <td>April 1, 2020</td>
                            <td>March 31, 2022</td>
                            <td>Individuals</td>
                        </tr>
                        <tr>
                            <td>Vignoli, Italo</td>
                            <td>Director</td>
                            <td>April 1, 2020</td>
                            <td>April 1, 2020</td>
                            <td>March 31, 2023</td>
                            <td>Affiliates</td>
                        </tr>
                </table>

            </div>

            <div class="mt-5">

                <h3 class="mb-3">Responsibilities of OSI Board Directors</h3>

                <p style="color: black; font-size:14px;">The board's responsibilities include oversight of the organization, supporting the executive director and staff. The board approves the budget, sets strategic direction and defines goals in line with the mission.</p>

                <p style="color: black; font-size:14px;">OSI Directors are expected to work actively and pro-actively as a member of the board, OSI and open source community. It is understood directors are volunteers, and each will be engaged in professional and personal responsibilities outside OSI. For different reasons, related to work, college/university, family, etc. there will be periods of time where a director will be busy and/or can not commit to the demands of the board or community, either as much as one would like or as much as is needed. However, this should be the exception, not the rule.</p>

                <p style="color: black; font-size:13px;">Each board member is expected to sign the <a href="{{ url('board-member-agreement') }}"> Board member agreement.</a></p>
            </div>

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