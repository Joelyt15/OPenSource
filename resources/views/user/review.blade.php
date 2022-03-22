<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        User | The License Review Process
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
        <h3 class="m-3"> <b>The License Review Process</b> </h3>

        <p class="mt-2" style="color:black; font-size:13px; padding-left:20px;">
            The goal of the OSI License Review Process is to ensure that licenses and software labeled as "open source" conform to existing community norms and expectations. For that reason, all licenses must go through a public review process described below. The OSI Board is happy to consult with entities in advance to help them navigate the process and improve their license, but formal approval requires going through license-review.
        </p>
        
        <h3 class="m-3"> <b>Purpose of the Process</b> </h3>

        <ul style="padding-left:40px; font-size:13px; color:black;">

            <li style="list-style-type: square;">Ensure approved licenses conform to the Open Source Definition and provide software freedom</li>
            <li style="list-style-type: square;">Identify appropriate License Proliferation Category</li>
            <li style="list-style-type: square;">Discourage vanity and duplicative Licenses</li>
            <li style="list-style-type: square;">Ensure a thorough, transparent and timely review (e.g. within 60 days)</li>

        </ul>

        <h3 class="m-3"> <b>How to Submit a Request</b> </h3>

        <ul style="padding-left:40px; font-size:13px; color:black;">

            <li style="list-style-type: number;">Read the Open Source Definition and ensure that your license complies with it</li>
            <li style="list-style-type: number;">Identify the type of submission (Retirement, Legacy Approval or Approval)</li>
            <li style="list-style-type: number;">Ensure you have appropriate standing to submit the type of submission that you have identified</li>
            <li style="list-style-type: number;">Subscribe to license-review (if you aren't already)</li>
            <li style="list-style-type: number;">Submit a formal request to license-review.</li>
            <li style="list-style-type: number;">The request email must include:

                <ul style="padding-left:20px; font-size:13px; color:black;">
                    <li style="list-style-type: number;">the submission type and license name in subject field (to ensure proper tracking)</li>
                    <li style="list-style-type: number;">a plaintext copy of the license</li>
                    <li style="list-style-type: number;">the supporting data listed below (as appropriate for the type of submission)</li>
                    <li style="list-style-type: number;">a link to earlier public discussions (if any)</li>
                </ul>

            </li>

        </ul>    

        <h3 class="m-3"> <b>Submission Types and Supporting Data</b> </h3>

        <p class="mt-2" style="color:black; font-size:25px; padding-left:20px;">
           <b> For Approval </b>
        </p>

        <p class="mt-2" style="color:black; font-size:22px; padding-left:20px;">
            <b> Has appropriate standing: License Steward </b>
         </p>

         <p class="mt-2" style="color:black; font-size:13px; padding-left:20px;">
            Approval of completely new licenses, or licenses previously used by only a single entity
         </p>

        <ul class="mt-4" style="padding-left:40px; font-size:13px; color:black;">

            <li style="list-style-type: square;">Rationale: Clearly state rationale for a new license</li>
            <li style="list-style-type: square;">Distinguish: Compare to and contrast with the most similar OSI-approved license(s)</li>
            <li style="list-style-type: square;">Legal review: Describe any legal review the license has been through, and provide results of any legal analysis if available</li>
            <li style="list-style-type: square;">Proliferation category: Recommend which license proliferation category is appropriate</li>

        </ul> 
        
        <h4 class="m-3 fw-bold">
            For Retirement
        </h4>

        <p class="mt-2" style="color:black; font-size:13px; padding-left:20px;" >
            A request to retire the license. This request can only be made by the license steward. Note that successor licenses must be approved through the new license approval process.
        </p>

        <ul class="mt-4" style="padding-left:40px; font-size:13px; color:black;">

            <li style="list-style-type: square;">Version: Specify exactly which version is being retired</li>
            <li style="list-style-type: square;">Successor: Identify successor license(s), if any.</li>

        </ul>    

        <h3 class="m-3"> <b>Decision Process</b> </h3>

        <p class="mt-2" style="color:black; font-size:13px; padding-left:20px;" >
            A request to retire the license. This request can only be made by the license steward. Note that successor licenses must be approved through the new license approval process.
        </p>

        <p class="mt-2" style="color:black; font-size:13px; padding-left:20px;" >
            "Decision Date" for a license normally means (a) 60 days after a license is initially submitted to the license-review list for review, and (b) 30 days after submission of a revised version of a license that was previously submitted for review. A license is considered to be submitted for review if it follows the process set forth at https://opensource.org/approval. While we will try our best to adhere strictly to this 60/30 day Decision Date definition, circumstances may require us to extend the Decision Date further.
        </p>

        <p class="mt-2" style="color:black; font-size:13px; padding-left:20px;" >
            Community discussion of submitted licenses takes place on the License Review mailing list. The submitter should participate in this discussion by replying to any questions asked or claims made about the license. The License Committee Chair will provide recommendations for decisions to the OSI board (and copy the License Review list).  The License Committee Chair will report the decision to the list. If a license is approved, the OSI website will be updated as appropriate. 
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