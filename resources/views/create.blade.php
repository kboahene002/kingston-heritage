<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/finto/default/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Oct 2025 17:11:50 GMT -->
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Essential CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon_finto.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/scrollCue.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <!-- Title & Favicon -->
    <title>Kensington Heritage Bank — Private Offshore & Digital Banking</title>
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
  </head>
  <body>
    <!-- Start Preloader Area -->
    <div class="preloader-area text-center position-fixed top-0 bottom-0 start-0 end-0" id="preloader">
      <div class="loader position-absolute start-0 end-0">
        <div class="wavy position-relative fw-light">
          {{-- <span class="d-inline-block"><img src="assets/images/favicon.png" alt="favicon"></span> --}}
          <span class="d-inline-block">H</span>
          <span class="d-inline-block">E</span>
          <span class="d-inline-block">R</span>
          <span class="d-inline-block">I</span>
          <span class="d-inline-block">T</span>
          <span class="d-inline-block">A</span>
          <span class="d-inline-block">G</span>
          <span class="d-inline-block">E</span>
        </div>
      </div>
    </div>
    <!-- End Preloader Area -->

    <div class="top-header-info">
      <!-- Start Navbar Area -->
      <nav class="navbar main-navbar navbar-expand-lg bg-color-ffffff" id="navbar">
        <div class="container-fluid side-padding position-relative">
          <a class="navbar-brand logo-brand p-0" href="/">
            <img style="width: 100px; height:100px;" src="{{ asset('logo.png') }}" alt="image">
          </a>
          <a class="navbar-toggler" data-bs-toggle="offcanvas" href="#navbarOffcanvas" role="button"
            aria-controls="navbarOffcanvas">
            <span class="burger-menu">
              <span class="top-bar"></span>
              <span class="middle-bar"></span>
              <span class="bottom-bar"></span>
            </span>
          </a>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item dropdown">
                <a class="nav-link " href="#home" role="button" >
                  Home
                </a>

              </li>

              <li class="nav-item dropdown">
                <a class="nav-link " href="#about" role="button" >
                  About
                </a>





              <li class="nav-item dropdown">
                <a class="nav-link" href="#testimonials">
                  Testimonial
                </a>
              </li>
            </ul>
          </div>

          <div class="others-options">
            <ul class="d-flex align-items-center ps-0 mb-0 list-unstyled">

              @if(auth()->check())
                <li>
                <a href="{{ route('logout') }}" class="search-btn login"><i class="ri-account-circle-line"></i> Log out</a>
              </li>
              @else
              <li>
                <a href="{{ route('login') }}" class="search-btn login"><i class="ri-account-circle-line"></i> Log in</a>
              </li>
              @endif
              <li>
                <a href="{{ route('create-account') }}" class="default-btn">Create Account<i class="ri-arrow-right-up-line"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar Area -->
    </div>

    <!-- Start Mobile Navbar Area -->
    <div class="mobile-navbar offcanvas offcanvas-end border-0" data-bs-backdrop="static" tabindex="-1" id="navbarOffcanvas">
      <div class="offcanvas-header">
        <a href="/" class="logo d-inline-block">
          <img src="assets/images/white-logo.png" alt="logo">
        </a>

        <button type="button" class="close-btn bg-transparent position-relative lh-1 p-0 border-0" data-bs-dismiss="offcanvas" aria-label="close">
          <i class="ri-close-fill"></i>
        </button>
      </div>

      <div class="offcanvas-body">
        <ul class="mobile-menu">
          <li class="mobile-menu-list active">
            <a href="#home">
              Home
            </a>

          </li>

          <li class="mobile-menu-list">
            <a href="#about">
              About
            </a>


          </li>



          <li class="mobile-menu-list">
            <a href="#testimonials">
              Testimonial
            </a>


          </li>




        </ul>

        <!-- Others options -->
        <div class="others-options">
          <ul class="d-flex align-items-center ps-0 mb-0 list-unstyled">

            <li>
              <a href="{{ route('login') }}" class="search-btn login"><i class="ri-account-circle-line"></i> Log in</a>
            </li>
            <li>
              <a href="{{ route('create-account') }}" class="default-btn">Create Account<i class="ri-arrow-right-up-line"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- End Mobile Navbar Area -->


    <!-- Search Modal -->
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4    col-md-12" data-cues="slideInLeft" style="margin-top:190px; " data-duration="800">
                      <livewire:create-component />
        </div>
        <div class="col-lg-4"></div>

    </div>

    <!-- End App Area -->

    <!-- Start Footer Area -->
    <div class="footer-area two  bg bg-dark pt-120">
      <div class="container">
        <div class="newsletter pb-120">
          <div class="row align-items-center">
            <div class="col-lg-12 col-md-12">
              <div class="section-heading mb-0">
                <span class="sub-title two bg-color-9edd05 rounded-pill">ABOUT US</span>
                <h4 class="text-white">Kensington Heritage Bank provides the key benefits of offshore banking for expats, including enhanced asset protection, international diversification, and tax efficiency. Kensington Heritage Bank provides the cross-border expertise and strategic guidance necessary to establish and manage offshore banking solutions tailored to your financial objectives.Our specialists deliver personalized advice to help you structure your offshore accounts, remain compliant with UK and international tax obligations, and optimise long-term financial outcomes.
</h4>
              </div>
            </div>

          </div>
        </div>
        <div class="row" data-cues="slideInUp" data-duration="800">
          <div class="col-xl-4 col-md-6">
            <div class="footer-weight part-one">
              <a href="/" class="footer-logo d-block">
                <img src="{{ asset('logo.png') }}" alt="image">
              </a>
              <p class="text-white">Our mission is to deliver privacy, performance and personalized service to ultra-high-net-worth clients. and modern technology and seamless financial services.</p>
              {{-- <ul class="social">
                <li><span>Follow Us:</span></li>
                <li>
                  <a href="https://www.facebook.com/" target="_blank">
                    <i class="ri-facebook-fill"></i>
                  </a>
                </li>
                <li>
                  <a href="https://www.twitter.com/" target="_blank">
                    <i class="ri-twitter-x-line"></i>
                  </a>
                </li>
                <li>
                  <a href="https://www.instagram.com/" target="_blank">
                    <i class="ri-instagram-line"></i>
                  </a>
                </li>
                <li>
                  <a href="https://www.linkedin.com/" target="_blank">
                    <i class="ri-linkedin-fill"></i>
                  </a>
                </li>
              </ul> --}}
            </div>
          </div>
          <div class="col-xl-2 col-md-6">
            {{-- <div class="footer-weight part-two ps-5">
              <h3 class="text-white">Quick Links</h3>

              <ul class="service-link">
                <li>
                  <a href="terms-conditions.html">Terms & Conditions</a>
                </li>
                <li>
                  <a href="blog.html">Blog & News</a>
                </li>
                <li>
                  <a href="services.html">Mobile App</a>
                </li>
                <li>
                  <a href="services.html">Why Choose Us</a>
                </li>
                <li>
                  <a href="pricing.html">Pricing Plan</a>
                </li>
              </ul>
            </div> --}}
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="footer-weight part-three ps-5">
              <h3 class="text-white">Our Services</h3>

              <ul class="service-link">
                <li>
                  <a href="">Mobile Banking</a>
                </li>
                <li>
                  <a href="">Advanced Security</a>
                </li>
                <li>
                  <a href="">Digital Wallet</a>
                </li>
                <li>
                  <a href="">Budgeting Tools</a>
                </li>
                <li>
                  <a href="">Making Transactions</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="footer-weight ps-5">
              <h3 class="text-white">Get In Touch</h3>

              <ul class="get-touch">
                <li>
                  <img src="assets/images/svg/map.svg" alt="image">
                  <span class="text-white"><b>Location:</b></span>
                  <a href="https://www.google.com/maps/search/18+Tanglewood+Lane+Gulfport/@30.4216847,-89.1511032,12z/data=!3m1!4b1?entry=ttu" target="_blank">Offshore Services HQ — (private address provided on request)</a>
                </li>
                <li>
                  <img class="phone" src="assets/images/svg/mail.svg" alt="image">
                  <span class="text-white"><b>Email:</b></span>
                  <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#7018151c1c1f3016191e041f5e131f1d"><span class="__cf_email__" data-cfemail="d4bcb1b8b8bb94b2bdbaa0bbfab7bbb9">support@kensingtonheritage.com</span></a>
                </li>
                <li>
                  <img class="phone" src="assets/images/svg/phone.svg" alt="image">
                  <span class="text-white"><b>Phone:</b></span>
                  <a href="tel:0018085550148">+49 1521 3604403</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Footer Area -->

    <!-- Start Copyright Area -->
    <div class="copyright-area bg-color-0c3a30">
      <div class="container">
        <div class="copyright-border">
          <div class="row g-4 align-items-center">
            <div class="col-lg-12 col-md-12" style="font-size: 12px;">
              <p>© <span >2025 Kensington Heritage Bank. All Rights Reserved. </span><br><span> Digital Infrastructure Powered by Zenith Technologies International.</span><br><span>Licensed and Regulated by the Cayman Islands Monetary Authority (CIMA). Member of the Swiss Bankers Association (SBA). Compliant with the Financial Action Task Force (FATF) Standards.
</span><span>Participant in the Automatic Exchange of Information (AEOI) under OECD CRS. Fully compliant with the U.S. Foreign Account Tax Compliance Act (FATCA).
</span><br><span>Client accounts held in segregated structures. Select jurisdictions offer deposit insurance protections via jurisdictional equivalents of FSCS (UK), Esisuisse (Switzerland), and CDIC (Canada), where applicable.
</span><br><span>Sovereign Atlas Private Bank is a registered financial institution in multiple international financial centers, including the British Virgin Islands, Luxembourg, Zurich, and Singapore.
</span><br><span>For qualified individuals and institutional investors only. This is not an offer or solicitation in any jurisdiction where such offering is not authorized.
</span></p>
            </div>
            {{-- <div class="col-lg-6 col-md-6">
              <ul>
                <li>
                  <a href="privacy-policy.html">Privacy Policy</a>
                </li>
                <li>
                  <a href="terms-conditions.html">Terms & Conditions</a>
                </li>
              </ul>
            </div>
          </div> --}}
        </div>
      </div>
    </div>
    <!-- End Copyright Area -->

    <!-- Go top Btn -->
    <div class="go-top">
      <i class="ri-arrow-up-fill"></i>
    </div>
    <!-- Go top Btn End -->

    <!-- JS Files -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/fslightbox.min.js') }}"></script>
    <script src="{{ asset("assets/js/smooth-scroll.js") }}"></script>
    <script src="{{ asset('assets/js/scrollCue.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
  </body>

<!-- Mirrored from templates.hibootstrap.com/finto/default/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Oct 2025 17:11:56 GMT -->
</html>
