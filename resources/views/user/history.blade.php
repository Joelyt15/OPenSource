<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        User | History
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



  <div style="padding-top:200px;" class="container mb-1">
    <div class="rounded" style="background-color:white; padding:15px;">
        <h3 class="m-1 p-2"> <b>History of the OSI</b> </h3>

        <div style="padding: 5px;">

            <p class="p-2" style="color: black; font-size:13px;">
                Development based on the sharing and collaborative improvement of software source code has a history essentially as long as software development itself. In the late 1990s, interest and participation in this phenomenon increased markedly with mainstream recognition of Linux <a href="http://www.forbes.com/forbes/1998/0810/6203094a_print.html" target="blank">in publications like Forbes</a> and <a href="http://blog.lizardwrangler.com/2008/01/22/january-22-1998-the-beginning-of-mozilla/" target="blank">the release of the Netscape browser’s source code.</a>
            </p>

            <p class="p-2" style="color: black; font-size:13px;">
                OSI was formed in 1998 as an educational, advocacy, and stewardship organization at this important moment in the history of collaborative development.
            </p>

            <h3 class="m-1 p-2"> <b>Coining “Open Source”</b> </h3>

            <p class="p-2" style="color: black; font-size:13px;">
                The “open source” label was created at a strategy session held on February 3rd, 1998 in Palo Alto, California, shortly after the announcement of the release of the Netscape source code. The strategy session grew from a realization that the attention around the Netscape announcement had created an opportunity to educate and advocate for the superiority of an open development process.
            </p>

            <p class="p-2" style="color: black; font-size:13px;">
                The conferees believed the pragmatic, business-case grounds that had motivated Netscape to release their code illustrated a valuable way to engage with potential software users and developers, and convince them to create and improve source code by participating in an engaged community. The conferees also believed that it would be useful to have a single label that identified this approach and distinguished it from the philosophically- and politically-focused label "free software." Brainstorming for this new label eventually converged on the term "open source", originally suggested by Christine Peterson.
            </p>   
            
            <p class="p-2" style="color: black; font-size:13px;">
                Two of those present at the Palo Alto meeting (Eric Raymond and Michael Tiemann) would later serve as presidents of OSI, and other attendees (including Todd Andersen, Jon “maddog” Hall, Larry Augustin, and Sam Ockman) became key early supporters of the organization.
            </p>    

            <p class="p-2" style="color: black; font-size:13px;">
                Adoption of the term was swift, with early support from figures in the community, like Linus Torvalds, and from an April 1998 Free Software Summit attended by many key individuals, including the founding figures of sendmail, Perl, Python, Apache, and representatives from the IETF and Internet Software Consortium.
            </p>    

            <h3 class="m-1 p-2"> <b>Founding The Organization</b> </h3>

            <p class="p-2" style="color: black; font-size:13px;">
                OSI was jointly founded by Eric Raymond and Bruce Perens in late February 1998, with Raymond as its first president, Perens as vice-president, and an initial Board of Directors including Brian Behlendorf, Ian Murdock, Russ Nelson, and Chip Salzenberg.
            </p>  
            
            <p class="p-2" style="color: black; font-size:13px;">
                OSI was conceived as a general educational and advocacy organization to execute the same mission agreed on at the Free Software Summit held in April 1998. At the launch meeting, the original Board accepted this general mission and decided to focus specifically on explaining and protecting the "open source" label. Some early activism was done as well, with <a href="http://web.archive.org/web/19990117101010/http://opensource.org/" target="blank">OSI supporting a petition to encourage the US government to use open source software in Jan. of 1999</a>
            </p>

            <h3 class="m-1 p-2"> <b>Assessing Licenses</b> </h3>

            <p class="p-2" style="color: black; font-size:13px;">
                One of the first tasks undertaken by OSI was to draft the Open Source Definition (OSD), and use it to begin creating a list of OSI-approved licenses.
            </p>   

            <p class="mt-4 p-2" style="color: black; font-size:13px;">
                The Open Source Definition was originally derived from the Debian Free Software Guidelines (DFSG). Bruce Perens had composed the original draft of the DFSG, and it was edited, refined, and approved as formal policy by the Debian developer community in 1997. The Open Source Definition was then created during the launch of the OSI in Feb. 1998 by revising the DFSG and removing Debian-specific references.
            </p>    

            <p class="mt-2 p-2" style="color: black; font-size:13px;">
                By Oct. 1999, OSI had published its first formal list of approved licenses. The OSI license list, updated many times since then, has remained the canonical list of open source licenses and is referred to by many third parties, including governments and standards bodies.
            </p>  
            
            <p class="mt-2 p-2" style="color: black; font-size:13px;">
                In 2004 the OSI added clause 10 to the OSD to deal with some issues surrounding click-wrap licensing. Otherwise the OSD has been stable since its inception, with only minor wording clarifications in other clauses.
            </p>   
            
            <p class="mt-2 p-2" style="color: black; font-size:13px;">
                Also in 2004, due to a marked increase in the number of open source licenses, OSI launched a campaign to reduce the growth in the number of open source licenses. This resulted in the 2006 publication of a License Proliferation report, and recategorization of the license list into groupings of licenses based on usage as well as content. OSI’s report and process helped bring wider awareness to the overall problem of license proliferation and reduce the creation and use of new licenses.
            </p>

            <h3 class="m-1 p-2"> <b>Other Advocacy</b> </h3>

            <p class="p-2" style="color: black; font-size:13px;">
                The original Board's most notable success was to successfully position the OSD as the gold standard of open-source licensing, and the OSI as a standards body trusted both by the developer community and the worlds of business and government. That design was largely achieved by the end of the 1990s, and OSI has since focused on becoming one of the free and open source developer community's two principal advocacy organizations, along with the Free Software Foundation.
            </p>

            <p class="mt-2 p-2" style="color: black; font-size:13px;">
                Much of OSI’s advocacy takes the form of quiet persuasion rather than public activism - offering background to reporters, policy suggestions to politicians, and business cases to executives. OSI’s hard-earned reputation for pragmatism and accessibility has helped it cope with threats to the community's interests before they reached the point of becoming visible crises. For example, along with Creative Commons, Software Freedom Law Center, and others, OSI helped file <a href="http://wiki.creativecommons.org/images/7/7c/Jacobson_v_katzer_cc_brief.pdf" target="blank">an amicus curiae brief supporting Open Source licensing in the important Jacobsen v. Katzer lawsuit</a>. It also worked with the Free Software Foundation <a href="http://opensource.org/node/562" target="blank">convince antitrust entities to require open source-friendly licensing of the CPTN patents</a>.
            </p>   
            
            <p class="mt-2 p-2" style="color: black; font-size:13px;">
                OSI’s advocacy has also taken other forms, such as creating <a href="http://opensource.org/osr" target="blank">the Open Standards Requirements for Software</a> in 2006 and working to push governments to refer to them when doing their own open standards work.
            </p>

            <h3 class="m-1 p-2"> <b>Building The Organization</b> </h3>

            <p class="mt-2 p-2" style="color: black; font-size:13px;">
                The goal of the original Board was to build a sustainable institution to represent the open-source community and exercise stewardship of the Open Source Definition.
                To this end it adopted bylaws (most recently revised in 2011), achieved IRS recognition as a 501(c)3 nonprofit (in 2003), and set out trademark guidelines.
            </p>

            <p class="mt-2 p-2" style="color: black; font-size:13px;">
                Having worked steadily to broaden its base, OSI became a truly international organization in 2005 with the accession of directors from Europe, South America, Japan, and India. It further deepened its ties to the community in 2011 and 2012, by
                <a href="http://www.h-online.com/open/news/item/OSI-open-reformation-begins-in-earnest-1246870.html" target="blank">initiating an affiliates program</a>,  electing directors nominated by those affiliates, and  launching an individual membership program.
            </p>   
            
            <h3 class="m-1 p-2"> <b>The OSI's "Keyhole Logo"</b> </h3>
            
            <p class="mt-2 p-2" style="color:black; font-size:13px;">
                The OSI logo, which combines the "O" of open and a keyhole, for unlocking source code, was created by <a href="http://viebrock.ca/" target="blank">Colin Viebrock</a>
            </p>

            <h3 class="m-1 p-2"> <b>Further Reading on Open Source History</b> </h3>

            <ul style="padding-left:40px; font-size:13px;">
                <li style="list-style-type: square;">Wikipedia’s <a href="https://en.wikipedia.org/wiki/Open_Source_Initiative">Open Source Initiative</a> page.</li>
                <li style="list-style-type: square;">OSI co-founder Eric Raymond’s <a href="http://www.catb.org/esr/writings/homesteading/cathedral-bazaar/" target="blank">Cathedral and the Bazaar</a>. This paper, describing key differences between traditional development models and the decentralized model typical of open source, was published around the time of the Netscape source code release and remains widely read and influential. </li>
                <li style="list-style-type: square;"> Steven Levy’s <a href="https://en.wikipedia.org/wiki/Hackers:_Heroes_of_the_Computer_Revolution" target="blank">Hackers</a> and John Markoff's <a href="https://en.wikipedia.org/wiki/What_the_Dormouse_Said" target="blank">What the Dormouse Said</a>. Both books cover the historical and cultural roots of software development, particularly the early days when status was earned in part by sharing source code. </li>
                <li style="list-style-type: square;"> <a href="http://shop.oreilly.com/product/9781565925823.do" target="blank">Open Sources: Voices from the Open Source Revolution”</a>. Written shortly after the founding of OSI, this book has contributions from many people involved in the early history of open source and related movements. </li>
                <li style="list-style-type: square;"> Linux Weekly News’ <a href="https://lwn.net/op/TimelineIdx.lwn" target="blank">annual timelines</a> starting with <a href="https://lwn.net/1999/features/1998timeline/" target="blank">the first timeline in 1998</a>. LWN was founded in the same year as OSI, and its annual timelines have often mentioned OSI. </li>
                <li style="list-style-type: square;"> Sociologist Christopher Kelty’s Two Bits. <a href="https://twobits.net/download/" target="blank">Available to read online under a Creative Commons license</a>, this book covers the early history of Free and Open Source software from a more academic perspective.</li>
            </ul>

            <p class="mt-2" style="color: black; font-size:12px;">
                <em>Last revised Oct. 2018.</em>
            </p>
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