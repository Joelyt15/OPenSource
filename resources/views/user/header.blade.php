<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row rounded" style="border: 1px solid green">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="#top" class="logo">
              <img src="assets/images/os.png" style="width: 20px; height:20px;" alt="">
               
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="submenu">
                <a href="{{ url('about') }}">About</a>
                <ul>
                  <li class=""><a href="{{ url('board') }}">Board</a></li>
                  <li><a href="{{ url('volunteers') }}">Volunteers & Staff</a></li>
                  <li><a href="{{ url('association') }}">Associations</a></li>
                  <li><a href="{{ url('history') }}">History</a></li>
                  <li><a href="{{ url('trademark') }}">Trademarks & Logo</a></li>
                  <li><a href="{{ url('terms') }}">Terms Of Service</a></li>
              </ul>
              </li>

              <li class="submenu">
                <a href="{{ url('license') }}">Licenses</a>
                <ul>
                  <li><a href="{{ url('definition') }}">Open Source Definition</a></li>
                  <li><a href="{{ url('category') }}">Licenses by Category</a></li>
                  <li><a href="{{ url('name') }}">Licenses by Name</a></li>
                  <li><a href="{{ url('review') }}">Licenses Review Process</a></li>
                </ul>
              </li>
              <li class="submenu">
                <a href="{{ url('community') }}">Community</a>
                <ul>
                  <li><a href="{{ url('individuals') }}">Individuals</a></li>
                  <li><a href="{{ url('sponsor') }}">Sponsors</a></li>
                  <li><a href="{{ url('mailing') }}">Mailing Lists</a></li>
                </ul>
              </li>
              <li class="submenu">
                <a href="{{ url('resources') }}">Resources</a>
                <ul>
                  <li><a href="https://opensource.org/faq" target="blank">FAQ</a></li>
                  <li><a href="{{ url('help') }}">Getting Help</a></li>
                  <li><a href="{{ url('education') }}">Open Source Education</a></li>
                  <li><a href="{{ url('articles') }}">Articles & Books</a></li>
                </ul>
              </li>

              <li class="submenu">
                <a href="{{ url('news') }}">News</a>
                <ul>
                  <li><a href="{{ url('blog') }}">Blog</a></li>
                  <li><a href="{{ url('newsletter') }}">Newsletters</a></li>
                </ul>
              </li>

              <li class="menu">
                <a href="{{ url('join') }}">Join</a>
              </li>

                @if(Route::has('login'))
                    @auth
                    
                        <x-app-layout>

                        </x-app-layout>
                    

                        @else
                    
                        <li class="scroll-to-section"><a href="{{ route('login') }}">Login</a></li>
                        <li class="scroll-to-section"><a href="{{ route('register') }}">Register</a></li>
                    @endauth
                @endif  

              <li class="scroll-to-section"><div class="border-first-button"><a href="#top">⬆</a></div></li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->