<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        User | Terms Of Service
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
        <h3 class="m-3"> <b>Terms of Service</b> </h3>

        <ul class="mt-2" style="color: blackl font-size:14px; padding-left:40px;">

            <li style="list-style-type: number;"> ACCEPTANCE OF TERMS
                <p style="color: black; font-size:13px;">
                    The Open Source Initiative ("OSI") provides the information on this Web site as provided in these Terms of Service ("TOS"). OSI may update the TOS at any time and without prior notice by posting a new version at http://www.opensource.org. The information on this site and your use of it is subject to the most recent version of the TOS posted.
                </p>
            </li>

            <li style="list-style-type: number;"> DESCRIPTION OF SERVICE
                <p style="color: black; font-size:13px;">
                    OSI provides you with access to discussion lists, forums, licenses and a variety of other services. ("OSI Service"). Unless explicitly stated otherwise, any new features that augment or enhance the current OSI Service shall be subject to the TOS.
                </p>
            </li>

            <li style="list-style-type: number;"> ACCEPTANCE OF TERMS
                <p style="color: black; font-size:13px;">
                    The Open Source Initiative ("OSI") provides the information on this Web site as provided in these Terms of Service ("TOS"). OSI may update the TOS at any time and without prior notice by posting a new version at http://www.opensource.org. The information on this site and your use of it is subject to the most recent version of the TOS posted.
                </p>
            </li>

            <li style="list-style-type: number;"> YOUR REGISTRATION OBLIGATIONS
                <p style="color: black; font-size:13px;">
                    In consideration of your use of the OSI Service, you represent that you are of legal age to form a binding contract and are not a person barred from receiving services under the laws of the United States or other applicable jurisdiction. You also agree to:
                </p>
                <ul class="m-3">

                    <li class="mb-2" style="list-style-type: number; font-size:12px;">
                        provide true, accurate, current and complete information about yourself as prompted by the OSI Service's registration form (the "Registration Data") and
                    </li>

                    <li style="list-style-type: number; font-size:12px;">
                        maintain and promptly update the Registration Data to keep it true, accurate, current and complete. If you provide any information that is untrue, inaccurate, not current or incomplete, or OSI has reasonable grounds to suspect that such information is untrue, inaccurate, not current or incomplete, OSI has the right to suspend or terminate your account and refuse any and all current or future use of the OSI Services (or any portion thereof).
                    </li>

                </ul>
            </li>

            <li style="list-style-type: number;">
                OSI PRIVACY POLICY
                <p style="color:black; font-size:13px;">
                    Registration Data and certain other information about you is subject to our Privacy Policy.
                </p>
            </li>

            <li style="list-style-type: number;">
                CONDUCT
                <p style="color:black; font-size:13px;">
                    You understand that all information, data, text, software, graphics or other materials ("Content"), whether publicly posted or privately transmitted, are the sole responsibility of the person from whom such Content originated. This means that you, and not OSI, are entirely responsible for all Content that you upload, post, email, transmit or otherwise make available via the OSI Service. OSI does not control the Content posted via the OSI Service and, as such, does not guarantee the accuracy, integrity or quality of such Content. Under no circumstances will OSI be liable in any way for any Content, including, but not limited to, any errors or omissions in any Content, or any loss or damage of any kind incurred as a result of the use of any Content posted, emailed, transmitted or otherwise made available via the OSI Service. You agree to not use the OSI Service to:
                </p>

                <ul class="m-3">

                    <li class="mb-2" style="list-style-type: number; font-size:12px;">
                        upload, post, email, transmit or otherwise make available any Content that is unlawful, harmful, threatening, abusive, harassing, tortuous, defamatory, vulgar, obscene, libelous, invasive of another's privacy, hateful, or racially, ethnically or otherwise objectionable or harm minors;
                    </li>

                    <li style="list-style-type: number; font-size:12px;">
                        impersonate any person or entity or falsely state or otherwise misrepresent your affiliation with a person or entity;
                    </li>

                    <li style="list-style-type: number; font-size:12px;">
                        forge headers or otherwise manipulate identifiers in order to disguise the origin of any Content transmitted through the OSI Service;
                    </li>

                    <li style="list-style-type: number; font-size:12px;">
                        upload, post, email, transmit or otherwise make available any Content that you do not have a right to make available under any law or under contractual or other relationships;
                    </li>

                    <li style="list-style-type: number; font-size:12px;">
                        upload, post, email, transmit or otherwise make available any Content that infringes any patent, trademark, trade secret, copyright or other proprietary rights of any party;
                    </li>

                    <li style="list-style-type: number; font-size:12px;">
                        upload, post, email, transmit or otherwise make available any unsolicited or unauthorized advertising, promotional materials, "junk mail," "spam," or any other form of solicitation;
                    </li>

                    <li style="list-style-type: number; font-size:12px;">
                        upload, post, email, transmit or otherwise make available any material that contains software viruses or any other computer code, files or programs designed to interrupt, destroy or limit the functionality of any computer software or hardware or telecommunications equipment;
                    </li>

                    <li style="list-style-type: number; font-size:12px;">
                        disrupt the normal flow of dialogue, or otherwise act in a manner that negatively affects other users' ability to engage in discussions or exchanges;
                    </li>

                    <li style="list-style-type: number; font-size:12px;">
                        intentionally or unintentionally violate any applicable local, state, national or international law,
                    </li>

                    <li style="list-style-type: number; font-size:12px;">
                        stalk" or otherwise harass another; and/or
                    </li>

                    <li style="list-style-type: number; font-size:12px;">
                        collect or store personal data about other users in connection with the prohibited conduct and activities set forth in paragraphs above. You acknowledge that OSI may or may not pre-screen Content, but that OSI and its designees shall have the right (but not the obligation) in their sole discretion to pre-screen, refuse, move, or remove any Content that is available via the OSI Service and which violates the TOS. You agree that you must evaluate, and bear all risks associated with, the use of any Content, including any reliance on the accuracy, completeness, or usefulness of such Content. You acknowledge, consent and agree that OSI may access, preserve and disclose your account information and Content if required to do so by law or in a good faith belief that such access preservation or disclosure is reasonably necessary to:
                    </li>

                    <ul class="m-3">

                        <li style="list-style-type: number; font-size:12px; ">
                            comply with legal process;
                        </li>

                        <li style="list-style-type: number; font-size:12px; ">
                            enforce the TOS;
                        </li>

                        <li style="list-style-type: number; font-size:12px; ">
                            respond to claims that any Content violates the rights of third parties;
                        </li>

                        <li style="list-style-type: number; font-size:12px; ">
                            respond to your requests for customer service; or (e) protect the rights, property or personal safety of OSI its users and the public.
                        </li>

                    </ul>


                </ul>

            </li>

            <li style="list-style-type: number;">
                CONTENT MADE AVAILABLE FOR INCLUSION ON THE OSI SERVICE
                <p style="color:black; font-size:13px;">
                    OSI does not claim ownership of Content you submit or make available for inclusion via the OSI Service. However, with respect to Content you submit or make available for inclusion on the publicly available OSI Service, you irrevocably grant OSI the perpetual, worldwide, royalty-free and non-exclusive license, with the right to sublicense through multiple tiers of sublicensees, to use, distribute, reproduce, modify, adapt, publicly perform and publicly display such Content, in whole or in part, on the OSI Service or other publications by OSI in any media whether now existing or which come into the existence into the future and to provide that information under the license set forth on the initial page of the http://www.opensource.org/ Web site. And for Content you submit for private discussions, you grant OSI the worldwide, royalty-free and non-exclusive license to use, distribute, reproduce, modify, adapt, publicly perform and publicly display such Content on the associated private discussion group.
                </p>

                <ul class="container" style="font-size:14px;">
                    <li style="list-style-type: square;">
                        Photo Credits
                    </li>
                    <li style="list-style-type: square;">
                        Home Page
                    </li>
                </ul>

            </li>

            <li style="list-style-type: number;">
                INDEMNITY
                <p style="color:black; font-size:13px;">
                    You agree to indemnify and hold OSI and its subsidiaries, affiliates, officers, agents, employees, partners and licensors harmless from any claim or demand, including but not limited to reasonable attorneys' fees, made by any third party due to or arising out of Content you submit, post, transmit or otherwise make available through the Service, your use of the OSI Service, your connection to the Service, your violation of the TOS, or your violation of any rights of another.
                </p>
            </li>  
            
            <li style="list-style-type: number;">
                MODIFICATIONS TO OSI SERVICE
                <p style="color:black; font-size:13px;">
                    You acknowledge that OSI may establish general practices and limits concerning use of the OSI Service, including without limitation the maximum number of days that email messages, message board postings or other uploaded Content will be retained by the OSI Service.. You further acknowledge that OSI reserves the right to modify these general practices and limits from time to time. OSI reserves the right at any time and from time to time to modify or discontinue, temporarily or permanently, the OSI Service (or any part thereof) with or without notice. You agree that OSI shall not be liable to you or to any third party for any modification, suspension or discontinuance of the OSI Servic
                </p>
            </li> 

            <li style="list-style-type: number;">
                TERMINATION
                <p style="color:black; font-size:13px;">
                    You agree that OSI may terminate your access to the OSI Service for violations of the TOS and/or requests by authorized law enforcement or other government agencies.
                </p>
            </li> 

            <li style="list-style-type: number;">
                LINKS
                <p style="color:black; font-size:13px;">
                    The OSI Service may provide, or third parties may provide, links to other World Wide Web sites or resources. Because OSI has no control over such sites and resources, you acknowledge and agree that OSI is not responsible for the availability of such external sites or resources, and does not endorse and is not responsible or liable for any Content, advertising, products or other materials on or available from such sites or resources. You further acknowledge and agree that OSI shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such Content, goods or services available on or through any such site or resource.
                </p>
            </li>

            <li style="list-style-type: number;">
                DISCLAIMER OF WARRANTIES
                <p style="color:black; font-size:13px;">
                    You expressly understand and agree that: Your use of the OSI service is at your sole risk. OSI service is provided on an "as is" and "as available" basis. OSI and its subsidiaries, affiliates, officers, employees and licensors expressly disclaim all warranties of any kind, whether express or implied, including, but not limited to the implied warranties of merchantability, fitness for a particular purpose and non-infringement. OSI and its subsidiaries, affiliates, officers, employees and licensors make no warranty
                </p>
            </li>

            <li style="list-style-type: number;">
                GENERAL INFORMATION
                <p style="color:black; font-size:13px;">
                    Entire Agreement. The TOS constitutes the entire agreement between you and OSI and governs your use of the OSI Service, superseding any prior agreements between you and OSI with respect to the OSI Service.. Choice of Law and Forum. The TOS and the relationship between you and OSI shall be governed by the laws of the State of California without regard to its conflict of law provisions. You and OSI agree to submit to the personal and exclusive jurisdiction of the courts located within the county of Santa Clara, California. Waiver and Severability of Terms. The failure of OSI to exercise or enforce any right or provision of the TOS shall not constitute a waiver of such right or provision. If any provision of the TOS is found by a court of competent jurisdiction to be invalid, the parties nevertheless agree that the court should endeavor to give effect to the parties' intentions as reflected in the provision, and the other provisions of the TOS remain in full force and effect.
                </p>
            </li>

        </ul>
    
        <hr class="mt-3 mb-5">

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