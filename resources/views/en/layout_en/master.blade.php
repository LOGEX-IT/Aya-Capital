

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AYA CAPITAL</title>
    <!-- Bootstrap CSS -->
 <!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="{{asset('public/template/css/bootstrap.css')}}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&subset=devanagari,latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/template/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/template/fonts/IcoMoon/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('public/template/fonts/linearicon/style.css')}}">
    <!-- Mobile Menu -->
    <link type="text/css" rel="stylesheet" href="{{asset('public/template/css/jquery.mmenu.all.css')}}" />
    <!-- OWL CAROUSEL
      ================================================== --> 
    <link rel="stylesheet" href="{{asset('public/template/css/owl.carousel.css')}}">
    <!-- SELECTBOX
      ================================================== -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/template/css/fancySelect.css')}}" media="screen" />
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/template/revolution/css/settings.css')}}">
    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/template/revolution/css/layers.css')}}">
    <!-- REVOLUTION NAVIGATION STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/template/revolution/css/navigation.css')}}">
    <!-- Main Style -->
    <link rel="stylesheet" href="{{asset('public/template/style.css')}}">
    
    <!-- Favicons
      ================================================== -->
    <link rel="shortcut icon" href="{{asset('public/template/images/ayalogo.png')}}">


  </head>
  <body class="royal_loader">
    <!-- royal_loader -->
    <div id="page">
      <!-- Mobile Menu -->
    <nav id="menu" style="background-color: silver;">
        <ul style="background-color: green;">
          <li class="active">
            <a href="{{URL::to('/')}}">Home</a>
            
          </li>
          <li><a href="#">About</a>
            <ul style="background-color: green;">

              <li><a href="{{URL::to('/en/about-us')}}" ><span>About us</span></a>
                <li><a href="{{URL::to('/equipe')}}" ><span>Our team</span></a>
               <!--  <ul >
                  <li><a href="company_history.html" ><span>Company History V1</span></a></li>
                  <li><a href="company_history_2.html" ><span>Company History V2</span></a></li>
                </ul> -->
              </li>
              <li><a href="#" ><span>References and Partners</span></a>
              </li>
              <li><a href="{{URL::to('/contact')}}" ><span>Contact Us</span></a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">Services </a>

             <ul style="background-color: green;">

              <li><a href="#" ><span>Structuring and fundraising</span></a>
                <ul style="background-color: green;">
                  <li><a href="{{URL::to('corporate-finance-projet')}}" ><span>Corporate finance & Finance project</span></a></li>
                  <li><a href="{{URL::to('trade-finance')}}" ><span>Trade finance</span></a></li>
                </ul>
              </li>
              <li><a href="{{URL::to('strategie')}}" ><span>Strategy</span></a>
              </li>
              <li><a href="{{URL::to('/contact')}}" ><span>Disposals and Acquisitions</span></a>
                <ul style="background-color: green;">
                  <li><a href="{{URL::to('acquisition')}}" ><span>Acquisitions</span></a></li>
                  <li><a href="{{URL::to('cession')}}" ><span>Disposals</span></a></li>
                </ul>
              </li>
              <li><a href="{{URL::to('service-corpatif')}}" ><span>Corporate services</span></a>
              </li>
            </ul>
            
          </li>
          <li>
            <a href="#">Investment Funds</a>

          <ul style="background-color: green;">

              <li><a href="#" ><span>AYA FUND</span></a>
                <ul style="background-color: green;">
                  <li><a href="{{URL::to('mission')}}" ><span>Mission</span></a></li>
                  <li><a href="{{URL::to('fonctionnement')}}" ><span>Operation</span></a></li>
                  <li><a href="{{URL::to('nos-donateurs')}}" ><span>Donors</span></a></li>
                  <li><a href="{{URL::to('projets-soutenus')}}" ><span>Supported projects</span></a></li>
                </ul>
              </li>

              <li><a href="{{URL::to('aya-impact')}}" ><span>Impact</span></a>
              </li>
              <li><a href="{{URL::to('gouvernance')}}" ><span>Governance</span></a>
              </li>
              <li><a href="#" ><span>Become a donor</span></a>
              </li>
              <li><a href="{{URL::to('administration-de-fonds')}}" ><span>Fund administration</span></a>
              </li>
            </ul>
            
          </li>
          <li>
            <a href="{{URL::to('/investir/1')}}">Invest </a>
          </li>
          <li>
            <a href="{{URL::to('formation-et-coaching')}}">Training and Coaching </a>
          </li>

          <li>
            <a href="{{URL::to('/contact')}}">Contact </a>
            
          </li>
        
       
        </ul>
    </nav>
      <!-- /Mobile Menu -->
      <header class="header-h2">
        <div class="topbar tb-dark tb-md">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="topbar-home2">
                <div class="tb-contact tb-iconbox">
                  <ul>
                    <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span><i><b>AYA CAPITAL</b></i> <b>Bamako, District Baco Djicoroni ACI Near INTEC, Mali</b></span></a></li>
                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span><i>Email</i> <b>contact@aya-capital.com</b></span></a></li>
                    <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span><b>Mali: (+223)61879090/74665579</b><br><b>Togo:(+228)97709494</b></span></a></li>
                  </ul>
                </div>
                <script>
                    function myFunction(){
                      var url = document.getElementById("dynamic_select").value;
                      if (url) { // require a URL
                         window.location = url; // redirect
                     }
                         return false;                
                }
               </script>
                <div class="tb-social-lan language">
                  <select class="lang" id="dynamic_select" onchange="myFunction()">
                    <option data-class="usa" value="https://aya-capital.com/en">English</option>
                    <option data-class="fr" value="https://aya-capital.com/">French</option>
                  </select>
                  <ul>
                    <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="google plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /topbar -->
        <div class="nav-warp nav-warp-h2">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="navi-warp-home-2">
                <a href="{{URL::to('/')}}" class="logo">
                  <div class="imglogo">
                  <img src="{{asset('public/template/images/ayalogo.png')}}" style=" margin-top: 0px; width: 50px;" class="img-responsive">
                  </div>
                </a>
                <nav>
                  <ul class="navi-level-1 active-subcolor">
                    <li class="@yield('homeactive')">
                      <a href="{{URL::to('/en')}}">Home</a>
                    </li>
                    <li><a href="{{URL::to('/en/about-us')}}">About</a>
                      <ul class="navi-level-2">
                        <li><a href="{{URL::to('/en/about-us')}}" ><span>About us</span></a>
                        </li>
                        <li><a href="{{URL::to('/equipe')}}" ><span>Our team</span></a>
                        </li>
                        <li><a href="#" ><span>References and Partners</span></a>
                        </li>
                        <li><a href="{{URL::to('contact')}}" ><span>Contact Us</span></a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="services.html">Services</a>
                      <ul class="navi-level-2">
                        <li ><a  href="#">Structuring and fundraising</a>
                          <ul class="navi-level-3">
                            <li><a href="{{URL::to('corporate-finance-projet')}}" ><span>Corporate finance & Finance project</span></a></li>
                            <li><a href="{{URL::to('trade-finance')}}" ><span>Trade finance</span></a></li>
                          </ul>
                        </li>
                        <li ><a  href="{{URL::to('strategie')}}">Strategy</a></li>
                        <li ><a  href="{{URL::to('apropos')}}">Disposals and Acquisitions </a>
                          <ul class="navi-level-3">
                            <li><a href="{{URL::to('acquisition')}}" ><span>Acquisitions</span></a></li>
                            <li><a href="{{URL::to('cession')}}" ><span>Disposals</span></a></li>
                          </ul>
                        </li>
                        <li ><a  href="{{URL::to('service-corpatif')}}">Corporate services</a></li>
                        

                      </ul>
                    </li>
                    <li>
                      <a href="#">Investment Funds</a>
                      <ul class="navi-level-2">
                        <li><a href="#">AYA FUND</a>
                          <ul class="navi-level-3">
                            <li><a href="{{URL::to('mission')}}" ><span>Mission</span></a></li>
                            <li><a href="{{URL::to('fonctionnement')}}" ><span>Operation</span></a></li>
                            <li><a href="{{URL::to('nos-donateurs')}}" ><span>Donors</span></a></li>
                            <li><a href="{{URL::to('projets-soutenus')}}" ><span>Supported projects</span></a></li>
                          </ul>
                        </li>
                        <li><a href="{{URL::to('aya-impact')}}">Impact</a>
                        </li>
                        <li><a href="{{URL::to('gouvernance')}}">Governance
                           </a>
                        </li>
                        <li><a href="#">Become a donor</a>
                        </li>
                        <li><a href="{{URL::to('administration-de-fonds')}}" ><span>Fund administration</span></a></li>
                      </ul>
                    </li>
                     <li>
                      <a href="{{URL::to('/investir/1')}}">Invest</a>
                     </li>
                    <li>
                      <a href="{{URL::to('formation-et-coaching')}}">Training and Coaching</a>
                    </li>
                    
                   
                    <li class="@yield('contactive')"><a  href="{{URL::to('/contact')}}">Contact</a></li>
                  </ul>
                </nav>
                <a href="#menu" class="btn-menu-mobile"><i class="fa fa-bars" aria-hidden="true"></i></a>
                <ul class="subnavi">
                  <!-- <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li> -->
                  <li>
                   <!--  <a class="btn-search-navi" href="#/"><i class="fa fa-search" aria-hidden="true"></i></a> -->
                    <div class="search-popup">
                      <form class="form-search-navi">
                        <div class="input-group">
                          <input class="form-control" placeholder="Search Here" type="text">
                        </div>
                        <!-- /input-group -->
                      </form>
                    </div>
                  </li>
                </ul>
                
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /nav -->
      </header>
      <!-- /End Header 1 Warp -->

      @yield('content')


       <!-- Footer -->
      <footer class="f-bg-dark">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-6">
              <div class="widget widget-footer widget-footer-icon-link">
                <div class="title-block title-on-dark title-xs">
                  <h4>The head office</h4>
                  <span class="bottom-title"></span>
                </div>

                <ul class="icon-link-list-icon">
                  <li><i class="fa fa-map-marker" aria-hidden="true"></i>AYA CAPITAL<br>Bamako, District Baco Djicoroni ACI Near INTEC, Mali</li>
                  <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:admin@amwal.com">contact@aya-capital.com</a></li>
                  <li><i class="fa fa-headphones" aria-hidden="true"></i> <a href="#">contact@aya-capital.com</a></li>
                  <li><i class="fa fa-phone" aria-hidden="true"></i><a href="#"> Mali (+223) 61879090</a></li>
                  <li><i class="fa fa-mobile" aria-hidden="true"></i><a href="#"> Mali(+223)74665579 </a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="widget widget-footer widget-footer-hours">
                <div class="title-block title-on-dark title-xs">
                  <h4>Business hours</h4>
                  <span class="bottom-title"></span>
                </div>
                <p>Please contact us for any request.</p>
                <dl class="dl-horizontal dl-working-hours">
                  <dt>Monday - Friday  </dt>
                  <dd>8:00 A.M - 5:00 P.M</dd>
                </dl>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="widget widget-footer widget-footer-list-news">
                <div class="title-block title-on-dark title-xs">
                  <h4>Company links</h4>
                  <span class="bottom-title"></span>
                </div>
                <ul class="footer-list-news">
                  <li>
                    <a href="#"><img src="{{asset('public/template/images/ayalogo.jpeg')}}" width="70" class="img-responsive" alt="Image"></a>
                    <a href="#"></a>
                    <small class="time">-</small>
                  </li>
                  <li>
                    <a href="#"><img src="{{asset('public/template/images/ayalogo.jpeg')}}" width="70" class="img-responsive" alt="Image"></a>
                    <a href="#"></a>
                    <small class="time">-</small>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="widget widget-footer widget-footer-subcri">
                <div class="title-block title-on-dark title-xs">
                  <h4>Newsletter</h4>
                  <span class="bottom-title"></span>
                </div>
                <p>Subscribe to our newsletter for the latest updates on our company</p>
                <form class="form-subcri-footer">
                  <div class="form-group">
                    <input type="email" class="form-control"   placeholder="Email Address">
                  </div>
                  <button type="submit" class="btn-subcri-footer">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </footer> 
      <!-- /Footer -->

      <section class="no-padding cr-h1">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="copyright-warp cr-1">
                <div class="copyright-list-link">
                  <ul>
                  <!--   <li><a href="{{URL::to('/')}}">Accueil   </a></li>
                    <li><a href="#">A propos de AYA CAPITAL  </a></li>
                    <li><a href="#">Services   </a></li>
 -->                    <p>Developped by <span>LOGEX</span></p>
                  </ul>
                </div>
                <div class="copyright-text">
                  <p>Copyright © 2021 <span>AYA CAPITAL</span> All rights reserved</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /copyright -->
      
    </div>
    <!-- /page -->
    <a id="to-the-top" class="fixbtt bg-hover-theme"><i class="fa fa-chevron-up"></i></a> 
    <style type="text/css">
    @media only screen and (min-width: 200px) and (max-width: 767px)  {
        .imglogo{
margin-top: -7px;
width: 40px;       
}
    }

    </style>
    <!-- Back To Top -->
    <!-- Switcher -->
    <!-- End Switcher -->
    <!-- SCRIPT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js" integrity="sha512-DUC8yqWf7ez3JD1jszxCWSVB0DMP78eOyBpMa5aJki1bIRARykviOuImIczkxlj1KhVSyS16w2FSQetkD4UU2w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src="{{asset('public/template/js/vendor/bootstrap.js')}}"></script>

              <script>
                    function myFunction(){
                      var url = document.getElementById("dynamic_select").value;
                      if (url) { // require a URL
                         window.location = url; // redirect
                     }
                         return false;                
                }
              </script>
   
    <!-- Sticky -->
    <script src="{{asset('public/template/js/plugins/jquery.sticky-kit.min.js')}}"></script>
    <!-- <script src="js/plugins/sticky.js"></script> -->
    <!-- Mobile Menu
      ================================================== -->
    <script type="text/javascript" src="{{asset('public/template/js/plugins/jquery.mmenu.all.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/template/js/plugins/mobilemenu.js')}}"></script>
    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="{{asset('public/template/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/template/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript" src="{{asset('public/template/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/template/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/template/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/template/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/template/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/template/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/template/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/template/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/template/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script src="{{asset('public/template/js/plugins/slider-home-2.js')}}"></script>
    <!-- Initializing Owl Carousel
      ================================================== -->
    <script src="{{asset('public/template/js/plugins/owl.carousel.js')}}"></script>
    <script src="{{asset('public/template/js/plugins/owl.js')}}"></script>
    <!-- PreLoad
      ================================================== --> 
    <script type="text/javascript" src="{{asset('public/template/js/plugins/royal_preloader.js')}}"></script>
    <!-- Parallax -->
    <script src="{{asset('public/template/js/plugins/jquery.parallax-1.1.3.js')}}"></script>
    <!-- <script src="js/plugins/parallax.js"></script> -->
    <!-- Fancy Select -->
    <script src="{{asset('public/template/js/plugins/fancySelect.js')}}"></script>
    <script src="{{asset('public/template/js/plugins/lang-select.js')}}"></script>
    <script src="{{asset('public/template/js/plugins/cb-select.js')}}"></script>
    <!-- Initializing Counter Up
      ================================================== -->
    <script src="{{asset('public/template/js/plugins/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('public/template/js/plugins/counterup.js')}}"></script>
    <!-- Global Js
      ================================================== --> 
    <script src="{{asset('public/template/js/plugins/template.js')}}"></script>
    <!-- Demo Switcher
      ================================================== -->

  </body>
</html>
