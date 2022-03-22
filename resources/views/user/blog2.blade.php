<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>
        Jessica's Blog | 2
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
            {{-- <li class="scroll-to-section"><a href="{{ url('/') }}">Contact</a></li> --}}
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

    

  <div style="color:black; font-weight: bold; padding-top:120px;" class="container mb-3">
    <h3>Jessica's Blog</h3>
  </div>

  <div class="container rounded p-3" style="background-color:white; border: 1px solid grey">
    <h3 class="mb-3">
        <b>
            Updates from OSI Affiliate members (Sept. 2021)
        </b>
    </h3>
    <p style="color: black;" class="mb-3">Submitted by Jessica on Sun, 2021-09-26 18:59</p>
    <p style="color: black;" class="mb-4">
        Below are updates, news and event information from some of our Affiliate Members.
    </p>

    <p style="text-decoration: underline;">
        OpenProject
    </p>

    <p style="font-style: italic;">
        Free and open source project management software.
    </p>

    <hr>

    <div align="center" class="scroll-to-section m-2">
        <a href="{{ url('candidates') }}">Read More</a> |
        <a href="{{ url('login') }}">Log in </a> or <a href="{{ url('register') }}">Register</a> to post comments.

    </div>
  </div>


  <div class="mt-5">
    <div class="container rounded p-3" style="background-color:white; border: 1px solid grey;">
        <h3 class="mb-3">
            <b>
               <a style="color:darkslategray;" href="">Summer 2021 Newsletter</a> 
            </b>
        </h3>
        <p style="color: black;" class="mb-3"> Submitted by Jessica on Sun, 2021-06-13 00:00</p>
        <p style="color: black;" class="mb-4">
            Welcome to the Open Source Initiative's quarterly newsletter. We hope the information shared in each edition provides you with interesting insights into our initiatives and activities. We also hope to include updates regarding our members and affiliates, as well as the broader open source software community. If you have any ideas for what we cover, or content to include, please feel free to let us know at <a href=> contact@lists.opensource.org. </a>
        </p>
        <hr>
    
        <div align="center" class="scroll-to-section m-2">
            <a href="{{ url('jes') }}">Read More</a> |
            <a href="{{ url('login') }}">Log in </a> or <a href="{{ url('register') }}">Register</a> to post comments.
    
        </div>
      </div>    
  </div>

  <div class="mt-5">
    <div class="container rounded p-3" style="background-color:white; border: 1px solid grey;">
        <h3 class="mb-3">
            <b>
               <a style="color:darkslategray;" href="">OSI End of Year Newsletter</a> 
            </b>
        </h3>
        <p style="color: black;" class="mb-3">Submitted by Jessica on Mon, 2021-01-11 17:00</p>
        <p style="color: black;" class="mb-4">
            Welcome to the Open Source Initiative's quarterly newsletter. This particular newsletter will recap the end of 2020 for both the OSI and our Affiliate Members. We hope the information shared in each edition provides you with interesting insights into our initiatives and activities. We also hope to include updates regarding our members and affiliates, as well as the broader open source software community. If you have any ideas for what we cover, or content to include, please feel free to let us know at <a href="">contact@lists.opensource.org.</a>
        </p>
        <hr>
    
        <div align="center" class="scroll-to-section m-2">
            <a href="{{ url('jes') }}">Read More</a> |
            <a href="{{ url('login') }}">Log in </a> or <a href="{{ url('register') }}">Register</a> to post comments.
    
        </div>
      </div>    
  </div>

  <div class="mt-5">
    <div class="container rounded p-3" style="background-color:white; border: 1px solid grey;">
        <h3 class="mb-3">
            <b>
               <a style="color:darkslategray;" href="">OSI Spring 2020 Newsletter</a> 
            </b>
        </h3>
        <p style="color: black;" class="mb-3">Submitted by Jessica on Wed, 2020-07-01 00:00</p>
        <p style="color: black;" class="mb-4">
            Welcome to the Open Source Initiative's quarterly newsletter. We hope the information shared in each edition provides you with interesting insights into our initiatives and activities. We also hope to include updates regarding our members and affiliates, as well as the broader open source software community. If you have any ideas for what we cover, or content to include, please feel free to let us know at <a href="">contact@lists.opensource.org.</a>  
        </p>
        <hr>
    
        <div align="center" class="scroll-to-section m-2">
            <a href="{{ url('jes') }}">Read More</a> |
            <a href="{{ url('login') }}">Log in </a> or <a href="{{ url('register') }}">Register</a> to post comments.
    
        </div>
      </div>    
  </div>

  <div class="mt-5">
    <div class="container rounded p-3" style="background-color:white; border: 1px solid grey;">
        <h3 class="mb-3">
            <b>
               <a style="color:darkslategray;" href="">OSI Winter 2020 Newsletter</a> 
            </b>
        </h3>
        <p style="color: black;" class="mb-3">Submitted by Jessica on Wed, 2020-04-01 00:00</p>
        <p style="color: black;" class="mb-4">
            Welcome to the Open Source Initiative's quarterly newsletter. We hope the information shared in each edition provides you with interesting insights into our initiatives and activities. We also hope to include updates regarding our members and affiliates, as well as the broader open source software community. If you have any ideas for what we cover, or content to include, please feel free to let us know at <a href="">contact@lists.opensource.org.</a>  
        </p>

        <hr>
    
        <div align="center" class="scroll-to-section m-2">
            <a href="{{ url('jes') }}">Read More</a> |
            <a href="{{ url('login') }}">Log in </a> or <a href="{{ url('register') }}">Register</a> to post comments.
    
        </div>
      </div>    
  </div>

  <div class="container mt-3">
    <a class="btn btn-secondary btn-lg" href="{{ url('jessica') }}">1</a> <a class="btn btn-secondary btn-lg" href="{{ url('blog2') }}">2</a> <a class="btn btn-secondary" href="{{ url('jessica') }}"><< first</a> <a class="btn btn-secondary" href="{{ url('jessica') }}">< Previous</a>
  </div>

  <div class="container p-3 rounded mt-4" style="background-color: white; border:0.5px solid grey;">

    <div style="margin: 15px;">

      <h4 class="m-3 fw-bold">User Login</h4>

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

<hr class="m-5">

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