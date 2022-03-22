<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>User | Home</title>

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

    <h2 class="fw-bold">Newsletter</h2>
    
    <p class="mt-3">
        Archive of newsletters sent via email
    </p>

  </div>

    <div class="container mt-4">

        <div class="rounded" style="background-color: white; padding:25px; ">
            <h3 class="mb-3">Open Source responds to the Russia-Ukraine war: First thoughts from the Executive Director</h3>

            <p class="mt-2">
                Submitted by Jessica on Wed, 2022-03-09 20:13
            </p>

            <p class="mt-2">
                The reaction from the open source community to the Russian aggression in Ukraine has been swift and varied. Many companies have blocked sales and distributions of their software in Russia and Belarus. This is a good thing: Civil society has many non-violent ways at its disposal to resolve conflicts and it’s important to explore all possible avenues.
            </p>

            <hr>

            <div class="col-lg-12 mt-3">
                <div class="scroll-to-section">
                  <a href="{{ url('boardmember') }}">Read More</a> |
                  <a href="{{ url('jessica') }}">Jessica's Blog</a> |
                  <a href="{{ url('login') }}">Log in </a> or <a href="{{ url('register') }}">Register</a> to post comments.

                </div>
            </div>

        </div>

        <div class="rounded mt-5" style="background-color: white; padding:25px; ">
            <h3 class="mb-3">Open source legal awareness needs to grow</h3>

            <p class="mt-2">
                Submitted by Jessica on Tue, 2022-02-22 00:00
            </p>

            <p class="mt-2">
                Three things hit me from the results of the 2022 State of Open Source survey announced today.
            </p>

            <p class="mt-2">
                First is the confirmation that open source is everywhere, powering innovation across all fields. It’s not a surprise, rather the confirmation of trends that we’ve seen for decades. The respondents have indicated that the driver to use open source is innovation, rather than licensing costs. Open source software is used across the board for all kinds of use cases, including a surprisingly high 14% desktop and personal productivity tools.
            </p>

            <hr>

            <div class="col-lg-12 mt-3">
                <div class="scroll-to-section">
                  <a href="{{ url('boardmember') }}">Read More</a> |
                  <a href="{{ url('jessica') }}">Jessica's Blog</a> |
                  <a href="{{ url('login') }}">Log in </a> or <a href="{{ url('register') }}">Register</a> to post comments.

                </div>
            </div>

        </div>

        <div class="rounded mt-5" style="background-color: white; padding:25px; ">
            <h3 class="mb-3">The price for software security and maintainer burnout / OSI News & Updates</h3>

            <p class="mt-2">
                Submitted by stefano on Thu, 2022-01-20 07:40
            </p>

            <p class="mt-2">
                The price for software security and maintainer burnout
            </p>

            <p class="mt-2">
                2022 started reminding us that software security is a problem not only for open source packages. At the same time, “how to remunerate open source maintainers?” is a question with impossibly numerous answers: we need focus to find different solutions for different problems.
            </p>

            <hr>

            <div class="col-lg-12 mt-3">
                <div class="scroll-to-section">
                  <a href="{{ url('boardmember') }}">Read More</a> |
                  <a href="{{ url('stefano') }}">Stefano's Blog</a> |
                  <a href="{{ url('login') }}">Log in </a> or <a href="{{ url('register') }}">Register</a> to post comments.

                </div>
            </div>

        </div>

        <div class="rounded mt-5" style="background-color: white; padding:25px; ">
            <h3 class="mb-3">December 2021 Newsletter</h3>

            <p class="mt-2">
                Submitted by Anonymous (not verified) on Wed, 2021-12-15 00:00
            </p>

            <h3 class="mt-3">The intriguing implications of SFC v Vizio</h3>
           
            <hr>

            <div class="col-lg-12 mt-3">
                <div class="scroll-to-section">
                  <a href="{{ url('boardmember') }}">Read More</a> |
                  <a href="{{ url('register') }}">Anonymous's Blog</a> |
                  <a href="{{ url('login') }}">Log in </a> or <a href="{{ url('register') }}">Register</a> to post comments.

                </div>
            </div>

        </div>

        <div class="rounded mt-5" style="background-color: white; padding:25px; ">
            <h3 class="mb-3">A note from the Executive Director: October News & Updates</h3>

            <p class="mt-2">
                Submitted by Jessica on Wed, 2021-10-13 00:00
            </p>

            <p class="mt-2">
                I consider myself lucky to have witnessed open source changing the world, watching it go from a niche revolutionary idea to owning a place just about everywhere in everyday life.
            </p>

            <p class="mt-2">
                It spread because of the principles it embeds: Non discrimination, fairness, collaboration, community and innovation. These principles of open source were written in the Open Source Definition to simplify our way of interacting with the digital world.
            </p>

            <hr>

            <div class="col-lg-12 mt-3">
                <div class="scroll-to-section">
                  <a href="{{ url('boardmember') }}">Read More</a> |
                  <a href="{{ url('jessica') }}">Jessica's Blog</a> |
                  <a href="{{ url('login') }}">Log in </a> or <a href="{{ url('register') }}">Register</a> to post comments.

                </div>
            </div>

        </div>

        <div class="rounded mt-5" style="background-color: white; padding:25px; ">
            <h3 class="mb-3">Summer 2021 Newsletter</h3>

            <p class="mt-2">
                Submitted by Jessica on Sun, 2021-06-13 00:00
            </p>

            <p class="mt-2">
                Welcome to the Open Source Initiative's quarterly newsletter. We hope the information shared in each edition provides you with interesting insights into our initiatives and activities. We also hope to include updates regarding our members and affiliates, as well as the broader open source software community. If you have any ideas for what we cover, or content to include, please feel free to let us know at contact@lists.opensource.org.
            </p>

            <hr class="mt-5">

            <div class="col-lg-12 mt-3">
                <div class="scroll-to-section">
                  <a href="{{ url('boardmember') }}">Read More</a> |
                  <a href="{{ url('jessica') }}">Jessica's Blog</a> |
                  <a href="{{ url('login') }}">Log in </a> or <a href="{{ url('register') }}">Register</a> to post comments.

                </div>
            </div>

        </div>

        <div class="rounded mt-5" style="background-color: white; padding:25px; ">
            <h3 class="mb-3">OSI End of Year Newsletter</h3>

            <p class="mt-2">
                Submitted by Jessica on Mon, 2021-01-11 17:00
            </p>

            <p class="mt-2">
                Welcome to the Open Source Initiative's quarterly newsletter. This particular newsletter will recap the end of 2020 for both the OSI and our Affiliate Members. We hope the information shared in each edition provides you with interesting insights into our initiatives and activities. We also hope to include updates regarding our members and affiliates, as well as the broader open source software community. If you have any ideas for what we cover, or content to include, please feel free to let us know at contact@lists.opensource.org.
            </p>

            <hr class="mt-5">

            <div class="col-lg-12 mt-3">
                <div class="scroll-to-section">
                  <a href="{{ url('boardmember') }}">Read More</a> |
                  <a href="{{ url('jessica') }}">Jessica's Blog</a> |
                  <a href="{{ url('login') }}">Log in </a> or <a href="{{ url('register') }}">Register</a> to post comments.

                </div>
            </div>

        </div>

        <div class="rounded mt-5" style="background-color: white; padding:25px; ">
            <h3 class="mb-3">OSI Spring 2020 Newsletter</h3>

            <p class="mt-2">
                Submitted by Jessica on Wed, 2020-07-01 00:00
            </p>

            <p class="mt-2">
                Welcome to the Open Source Initiative's quarterly newsletter. We hope the information shared in each edition provides you with interesting insights into our initiatives and activities. We also hope to include updates regarding our members and affiliates, as well as the broader open source software community. If you have any ideas for what we cover, or content to include, please feel free to let us know at contact@lists.opensource.org.
            </p>

            <hr class="mt-5">

            <div class="col-lg-12 mt-3">
                <div class="scroll-to-section">
                  <a href="{{ url('boardmember') }}">Read More</a> |
                  <a href="{{ url('jessica') }}">Jessica's Blog</a> |
                  <a href="{{ url('login') }}">Log in </a> or <a href="{{ url('register') }}">Register</a> to post comments.

                </div>
            </div>

        </div>

        <div class="rounded mt-5" style="background-color: white; padding:25px; ">
            <h3 class="mb-3">OSI Winter 2020 Newsletter</h3>

            <p class="mt-2">
                Submitted by Jessica on Wed, 2020-04-01 00:00
            </p>

            <p class="mt-2">
                Welcome to the Open Source Initiative's quarterly newsletter. We hope the information shared in each edition provides you with interesting insights into our initiatives and activities. We also hope to include updates regarding our members and affiliates, as well as the broader open source software community. If you have any ideas for what we cover, or content to include, please feel free to let us know at contact@lists.opensource.org.
            </p>

            <hr class="mt-5">

            <div class="col-lg-12 mt-3">
                <div class="scroll-to-section">
                  <a href="{{ url('boardmember') }}">Read More</a> |
                  <a href="{{ url('jessica') }}">Jessica's Blog</a> |
                  <a href="{{ url('login') }}">Log in </a> or <a href="{{ url('register') }}">Register</a> to post comments.

                </div>
            </div>

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