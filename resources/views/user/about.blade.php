<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>
        User | About
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
        <h3 class="mt-3"> <b>About the Open Source Initiative</b> </h3>
        <h6 class="m-3" style="color:lightgreen; font-style:italic; text-align:center;">As steward of the <a href="">Open Source Definition</a> , we set the foundation for the open source software ecosystem.</h6>
        <div>

        <p style="color: black; font-size:13px;">The Open Source Initiative (OSI) is a California public benefit corporation, with 501(c)3 tax-exempt status, founded in 1998.</p>
        <p style="color: black; font-size:13px;">We are also actively involved in Open Source community-building, education, and public advocacy to promote awareness and the importance of non-proprietary software. OSI participates in Open Source conferences and events, to meet with open source developers and users, and to discuss with executives from the public and private sectors about how Open Source technologies, licenses, and models of development can provide economic and strategic advantages.</p>

        <h4 class="mt-3 fw-bold">Vision</h4>

        <p style="color: black; font-size:13px;"> As the leading voice on the policies and principles of open source, the OSI helps build a world where the freedoms and opportunities of open source software can be enjoyed by all. The OSI supports institutions and individuals working together to create communities of practice in which the healthy open source ecosystem thrives. </p>    

        <h4 class="mt-3 fw-bold">Mission</h4>

        <p style="color:black; font-size:13px;">The Open Source Initiative (OSI) is a non-profit corporation with global scope formed to educate about and advocate for the benefits of open source and to build bridges among different constituencies in the open source community.</p>

        <p style="color: black; font-size:13px;">Open source enables a development method for software that harnesses the power of distributed peer review and transparency of process. The promise of open source is higher quality, better reliability, greater flexibility, lower cost, and an end to predatory vendor lock-in.</p>

        <p style="color: black; font-size:13px"> One of our most important activities is as a standards body, maintaining the Open Source Definition for the good of the community. The Open Source Initiative Approved License trademark and program creates a nexus of trust around which developers, users, corporations and governments can organize open source cooperation. </p>

        <h4 class="mt-3 fw-bold">Contact</h4>

        <p style="color: black; font-size:13px;">Please contact the OSI if you are interested in having us help you develop, arrange, or conduct educational conferences, programs, courses of instruction, and/or online educational seminars relating to Open Source (non-proprietary) software.</p>

        <p style="color: black; font-size:13px;"> Our website has <a href="{{ url('login') }}">a contact form that can be used to reach us over the internet</a> , or we can be contacted at our mailing address:</p>

        <p class="m-3" style="color:lightslategray; font-size:13px;">`` Open Source Initiative <br> 8605 Santa Monica Blvd PMB 63639 <br> West Hollywood, CA 90069-4109 <br> United States </p>

        <p style="color: black; font-size:13px;"> The Open Source Initiative's IRS Tax ID Number (TIN) is 91-2037395. </p>

        <p style="color: black; font-size:13px;"> The Open Source Initiative's EU Transparency Register Number 672028337929-77 </p>

        <h4 class="mt-4 fw-bold">Comments</h4>

        <div class="container mt-4 rounded p-3" style="background-color:#e8e8e8; margin:5px; color:black;">

            <p style="color: black; font-size:13px;">Submitted by administrator on Mon, 2007-07-23 08:58 Permalink</p>

            <h5 class="m-2" style="color: black;">Informacje o Open Source Initiative (Polish translation)</h5>

            <p style="color:black; font-size:13px;">This is a Polish translation of "About the Open Source Initiative". Jest to polskie tłumaczenie dokumentu "About the Open Source Initiative". Translated by / tłumaczenia wykonał: T4TW tłumaczenia team.</p>

            <p style="color:black; font-size:13px;">Open Source Initiative (OSI) jest założoną w 1998 roku w Kaliforni korporacją typu non-profit</p>

            <p style="color:black; font-size:13px;">Open Source Initiative (OSI) jest założoną w 1998 roku w Kaliforni korporacją typu non-profit</p>

            <p style="color:black; font-size:13px;">Pracownicy OSI zarządzają Definicją Open Source (OSD) i są uznanym przez społeczność organem zajmującym się rozpatrywaniem i zatwierdzaniem licencji zgodności z OSD.</p>

            <p style="color:black; font-size:13px;">OSI pozostaje aktywnie zaangażowana w budowę społeczności Open Source jak i edukację. Członkowie Zarządu OSI często podróźują po świecie by móc uczestniczyć w wydarzeniach i konferencjach związanych z technologią Open Source, gdzie spotykają się z projektantami i użytkownikami open source. Prowadzą również dyskusje z kierownikami przedsiębiorstw sektora publicznego i prywatnego na temat tego jak technologie Open source, licencje oraz modele rozwoju mogą zapewnić im gospodarczą i strategiczną przewagę.</p>
            
        </div>

        <div class="container mt-4 rounded p-3 col-sm-11" style="background-color:#e8e8e8; margin:5px; color:black;">

            <p style="color: black; font-size:13px;">Submitted by administrator on Tue, 2009-02-10 01:16 Permalink</p>

            <h5 class="m-2" style="color: black;">Σχετικά με την Open Source Initiative (Greek translation)</h5>

            <p style="color:black; font-size:13px;">
                Σχετικά με το Open Source Initiative Η Πρωτοβουλία Ανοιχτού Κώδικα (OSI) είναι μια κοινωφελή εταιρία της Καλιφόρνιας , με 501 (γ) 3 κατάστασης μη κερδοσκοπικού χαρακτήρα, που ιδρύθηκε το 1998. Το OSI είναι οι διαχειριστές του Open Source Definition (OSD) και του αναγνωρισμένου εκ της κοινότητας οργάνου για την εξέταση και την έγκριση των αδειών σαν OSD-conformant. Η OSI δραστηριοποιείται με την ανάπτυξη Open Source κοινοτήτων και την εκπαίδευση. Μέλη του συμβουλίου OSI κάνουν συχνά ταξίδια ανα τον κόσμο για να παρακολουθήσουν Open Source συνέδρια και εκδηλώσεις, να συναντηθούν με open source δημιουργούς και χρήστες, και για να συζητήσουν με στελέχη του δημοσίου και ιδιωτικού τομέα σχετικά με το πώς οι Open Source τεχνολογίες, οι άδειες, και τα μοντέλα ανάπτυξης μπορούν να παρέχουν οικονομικά και στρατηγικά πλεονεκτήματα.
            </p>

        </div>

        <div class="container mt-4 rounded p-3 col-sm-11" style="background-color:#e8e8e8; margin:5px; color:black;">

            <p style="color: black; font-size:13px;">Submitted by administrator on Sun, 2007-07-29 04:58 Permalink</p>

            <h5 class="m-2" style="color: black;">Açık Kaynak İnisiyatifi Hakkında (Turkish Translation)</h5>

            <p style="color:black; font-size:13px;">
                This is a Turkish Translation of "About the Open Source Initiative". Açık Kaynak İnisiyatifi (OSI) 1998'te kurulmuş bir Kaliforniya şirketidir. OSI Açık Kaynak Tanımı'nın (OSD) idarecileri ve lisansları gözden geçirmek ve OSD uyumlu olarak onaylayan topluluk içinde tanınmış bir oluşumdur. OSI açık kaynak topluluklarının oluşturulması ve eğitiminde aktif olarak rol almaktadır. OSI kurul üyeleri açık kaynak konferanslarına katılmak, açık kaynak geliştirici ve kullanıcılarıyla bir araya gelmek ve sektördeki yöneticilerle açık kaynak teknolojilerinin, lisanslarının ve geliştirme modellerinin sağlayacağı ekonomik ve stratejik avantajları tartışmak amacıyla sıkça dünyayı dolaşmaktadırlar.
            </p>
            
        </div>

        <div class="container mt-4 rounded p-3 col-sm-11" style="background-color:#e8e8e8; margin:5px; color:black;">

            <p style="color: black; font-size:13px;">Submitted by administrator on Tue, 2007-08-07 16:19 Permalink</p>

            <h5 class="m-2" style="color: black;">关于 Open Source Initiative (Chinese translation)</h5>

            <p style="color:black; font-size:13px;">
                This is a Chinese Translation of "About the Open Source Initiative" for the Chinese open source community. 这是一份 "About the Open Source Initiative" 的华语版本. Translated by / 翻译: Benedict of MoneyFanClub Open Source Initiative (OSI) 是一间创办于1998年的加利福尼亞501(c)3 公司. OSI 也是負責 Open Source Definition (OSD) 和被相关群体認同及可审查和发出合 OSD 标准執照的公司. OSI 在 Open Source 群体社区及教育方面都非常活跃. OSI 董事及委员经常都到世界各地去参加一些活动和会议, 而且还和 open source 软件的開發商和用户, 以及公共或私人机构的执行员一起讨论有关 Open Source 科技, 執照和开发模式可带来的决策及经济效应.
            </p>
            
        </div>

        <div class="container mt-4 rounded p-3 col-sm-11" style="background-color:#e8e8e8; margin:5px; color:black;">

            <p style="color: black; font-size:13px;">Submitted by administrator on Fri, 2007-09-14 00:42 Permalink</p>

            <h5 class="m-2" style="color: black;">In Turkish Translation of</h5>

            <p style="color:black; font-size:13px;">
                In Turkish Translation of the article there are some problems.It would be like this. "This is a Turkish Translation of "About the Open Source Initiative". Açık Kaynak İnisiyatifi (OSI) 1998'te kurulmuş bir Kaliforniya kuruluşudur. OSI, Açık Kaynak Tanımı'nın (OSD) yöneticileridir ve lisansları gözden geçirmekle beraber OSD standartlarına uyumlu olarak bunları onaylayan topluluk içinde tanınmış bir oluşumdur. OSI açık kaynak topluluklarının oluşturulması ve eğitiminde aktif olarak rol almaktadır. OSI kurul üyeleri açık kaynak konferanslarına katılmak, açık kaynak geliştirici ve kullanıcılarıyla bir araya gelmek ve sektördeki yöneticilerle açık kaynak teknolojilerinin, lisanslarının ve geliştirme modellerinin sağlayacağı ekonomik ve stratejik avantajları tartışmak amacıyla sıkça dünyayı dolaşmaktadırlar." Turkish comment: Bu bağlamda ek olarak kredi kartları hakkında şunu söylemeden geçemeyeceğim.Kredi kartı bilinçli olarak kullanıldığı sürece sizin dostunuz haline gelicektir.Ancak bilinçsiz kullanılırsa, başınıza açacağı sorunlar sizin en büyük düşmanınız olur.Ne varki kredi kartı kullanımı giderek artıyor fakat bu artışla beraber bilinçsiz kullanım da artıyor. Bunun yaratıcağı toplumsal sorunların minumum seviyede olmasını temenni ediyorum. 1st paragraph is true translation of article.. Regards, Kredi
            </p>

        </div>

        <div class="container mt-4 rounded p-3 col-sm-11" style="background-color:#e8e8e8; margin:5px; color:black;">

            <p style="color: black; font-size:13px;"> Submitted by administrator on Wed, 2007-12-19 07:46 Permalink</p>

            <h5 class="m-2" style="color: black;">Информация об "Open Source Initiative" (Русский перевод)</h5>

            <p style="color:black; font-size:13px;">
                This is a Russian translation of "About the Open Source Initiative". Translated by Petr Kirillov with support (mp3 downloads). Open Source Initiative (OSI) это Калифорнийская публичная корпорация, основанная в 1998 году. OSI это компания, управляющая проектом Open Source Definition (OSD), а также общественная организация, которая рецензирует и утверждает лицензии OSD. OSI активно участвует в посторении Open Source сообщества и обучении. Члены OSI Board часто путешествуют по миру чтобы посетить Open Source конференции и события, встретиться с Open Source разработчиками и пользователями, и чтобы обсудить с органами исполнительной власти публичные или приватные вопросы о том, как Open Source технологии, лицензии и модели разработки могут обеспечить экономические и стратегические преимущества.
            </p>

        </div>

        <div class="container mt-4 rounded p-3 col-sm-11" style="background-color:#e8e8e8; margin:5px; color:black;">

            <p style="color: black; font-size:13px;"> Submitted by administrator on Mon, 2008-01-28 09:41 Permalink </p>

            <h5 class="m-2" style="color: black;"> About the Open Source Initiative - (Dutch)Nederlandse vertaling </h5>

            <p style="color:black; font-size:13px;">
                This is a Russian translation of "About the Open Source Initiative". Translated by Petr Kirillov with support (mp3 downloads). Open Source Initiative (OSI) это Калифорнийская публичная корпорация, основанная в 1998 году. OSI это компания, управляющая проектом Open Source Definition (OSD), а также общественная организация, которая рецензирует и утверждает лицензии OSD. OSI активно участвует в посторении Open Source сообщества и обучении. Члены OSI Board часто путешествуют по миру чтобы посетить Open Source конференции и события, встретиться с Open Source разработчиками и пользователями, и чтобы обсудить с органами исполнительной власти публичные или приватные вопросы о том, как Open Source технологии, лицензии и модели разработки могут обеспечить экономические и стратегические преимущества.
            </p>

        </div>

        <div class="container mt-4 rounded p-3 col-sm-11" style="background-color:#e8e8e8; margin:5px; color:black;">

            <p style="color: black; font-size:13px;"> Submitted by administrator on Fri, 2008-06-27 02:58 Permalink </p>

            <h5 class="m-2" style="color: black;"> Swahili translation </h5>

            <p style="color:black; font-size:13px;">
                The Open Source Initiative (OSI) ni kikundi cha kijamii huko California kilichosamehewa kodi kwa kifungu no. 501(c) na kuanzishwa mwaka 1998. OSI inawajibika na Tafsiri ya Open Source (OSD) and kutambuliwa na jamii kama chombo cha kupitia na kupiticha leseni zinazoendana na OSD. OSI inajihusisha na Open Source katika kutengeneza na kufundisha jamii. Wajumbe wa bodi ya OSI husafiri mara kwa mara duniani kote kuhudhuria mikutano na matukio, kuonana na wahandisi wa programu na watumiaji na pia kujadiliana na watendaji wa taasisi za jamii na binafsi kuhusu jisnsi gani technologia za Open Source, leseni, and mifumo ya utengenezaji vyaweza kuleta mafanikio katika uchumi na mipango. == Frank Tilugulilwa
            </p>

        </div>


        <div class="container mt-4 rounded p-3 col-sm-11" style="background-color:#e8e8e8; margin:5px; color:black;">

            <p style="color: black; font-size:13px;"> Submitted by administrator on Wed, 2008-08-20 19:57 Permalink </p>

            <h5 class="m-2" style="color: black;"> Arabic translation of the "About the Open Source Initiative" </h5>

            <p style="color:black; font-size:13px;">
                This is the Arabic translation translated by: Mr. Mohamed Farag http://farag.org مبادرة المصدر المفتوح (OSI) هي جمعية للنفع العام بكاليفورنيا، تتبع الفئة 501 (سي)3 المعفاة من الضرائب، وتأسست في 1998. إن القائمين على مبادرة المصدر المفتوح هم المشرفون على كل ما يتعلق بمعيار المصدر المفتوح (OSD)، وهي الكيان المعتمد من المجتمع المعنيّ لفحص التراخيص، وإجازتها كتراخيص مطابقة لمعيار المصدر المفتوح . تشارك مبادرة المصدر المفتوح بفعالية في بناء وتوعية مجتمع المصدر المفتوح .كثيراًً ما يجوب أعضاء مجلس إدارة مبادرة المصدر المفتوح العالم ليشهدوا مؤتمرات ومناسبات المصدر المفتوح، وليقابلوا مطوري ومستخدمي المصدر المفتوح ، وليتناقشوا مع المسؤولين من القطاعين العام والخاص حول الكيفية التي بها يمكن لتقنيات، وتراخيص، ونماذج تطوير المصدر المفتوح أن تقدم ميزات اقتصادية واستراتيجية. ______________________________________ N.B.: I tried to use HTML first to make the rtl working, but no hope. If you can, please do it.
            </p>

        </div>

        <div class="container mt-4 rounded p-3 col-sm-11" style="background-color:#e8e8e8; margin:5px; color:black;">

            <p style="color: black; font-size:13px;"> Submitted by administrator on Thu, 2010-03-18 03:00 Permalink </p>

            <h5 class="m-2" style="color: black;"> Опен Сорс* </h5>

            <p style="color:black; font-size:13px;">
                Опен Сорс* Инициатива (ОСИ) е стюард на Опен Сорс Дефиниция (ОСД) и е общество-признато тяло за преглеждане и одобряване на лицензии като ОСД- съответстващи. ОСИ е активно заета в изграждането и обучението на Опен Сорс - общество, както и за широко-обществено застъпване към повишаване на общественото съзнание и важността на не-патентен софтуер. Членовете на Управителния Съвет на ОСИ , често пътуват по света, да присъстват на Опен Сорс конференции и събития, да се срещат с Опен Сорс разработчици и потребители, и да разискват с изпълнителни директори от обществения и частен сектори, как Опен Сорс технологии, лицензии и модели на разработка могат да обезпечат икономически и стратегически предимства. Ако обичате, свържете се ОСИ ,ако сте заинтересувани в нашата помощ , за разработване, уреждане, или провеждане на образователни конференции, програми, инструктиращи курсове, и/или онлайн образователни семинари по отношение на Опен Сорсе (не-патентен) софтуер. *опен сорс (open source) - отворен , достъпен , не-патентен компютърен код Опен Сорс Инициатива пощенски адрес: P.O. Box 410990, #256, San Francisco, CA 94114-0990 United States Данъчен идентификационен номер (TIN) : 91-2037395
            </p>

        </div>

        <div class="container mt-4 rounded p-3 col-sm-11" style="background-color:#e8e8e8; margin:5px; color:black;">

            <p style="color: black; font-size:13px;"> Submitted by administrator on Sun, 2010-04-25 02:43 Permalink </p>

            <h5 class="m-2" style="color: black;"> Turkish Translation - Açık Kaynak Kullanımı </h5>

            <p style="color:black; font-size:13px;">
                Bende Open Source protokollerinin kullanım alanlarının genişlemesinden yanayım. Bu sayede birçok işlemin daha güvenli ve kolayca yapılabileceğine inanıyorum. Özellikle Türkiye de bu konuda birçok eksiklik bulunduğuna inanıyorum. Bende etoplum sitesinde Open source Açık Kaynak Dizin kullanımı hakkında bilgiye yer vermek istiyorum. Bu gibi girişimlerle daha bilinçli internet kullanıcıları meydana gelebilir. Hepinize teşekkürler. Thanks.
            </p>

        </div>

        <div class="mt-5">
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


  <!-- Scripts -->

  @include('user.script')

</body>
</html>