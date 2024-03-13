<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Product Video</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicon -->
    <link href="{{ asset('frontend/image/logo.jpg')}}" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap"
        rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="{{ asset('frontend/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/customstyle.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/media.css') }}" rel="stylesheet">

</head>
<body>
 <!-- Spinner Start -->
 {{-- <div id="spinner"
 class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
 <div class="spinner-border custom_text_primary" role="status" style="width: 3rem; height: 3rem;"></div>
</div> --}}
<!-- Spinner End -->
  <!-- Navbar Start -->
  <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
        <div class="col-xl-6 col-lg-6 col-sm-6 col-12 px-5 text-start">
            <div class="row ">
                <div class="col-xl-6 col-lg-6 ">
                    <small class="mdscreen_font"><i class="fa fa-map-marker-alt  me-2"></i> Baltimore, Maryland, USA</small>

                </div>
                <div class="col-xl-6 col-lg-6">
                    <small class="ms-4 mdscreen_font"><i class="fa fa-clock  me-2"></i>  9:00 AM – 5:00 PM (EST)</small>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-sm-6 px-5 text-end">
            <div class="row">
                <div class="col-xl-7 col-lg-7 topbanner_margin">
                    <small><i class="fa fa-envelope  me-2 "></i>info@aaconsulting.tech</small>
                </div>
                <div class="col-xl-4 col-lg-4">
                      <small class="ms-4"><i class="fa fa-phone-alt  me-2"></i>+1 443 253 0203</small>
                </div>
            </div>

        </div>
    </div>
    <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
        <div class="col-xl-6 col-lg-6 col-sm-6 col-12 px-5 text-start">
            <div class="row">
                <div class="col-xl-6 col-lg-6 pl-5">
                    <small ><i class="fa fa-map-marker-alt  me-2"></i>Baridhara, Dhaka-1212, Bangladesh </small>

                </div>
                <div class="col-xl-6 col-lg-6">
                    <small class="ms-4 mdscreen_font"><i class="fa fa-clock  me-2"></i>10:00 AM – 6:00 PM (BDT) </small>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-sm-6 px-5 text-end">
        <div class="row">
            <div class="col-xl-8 col-lg-8">
                 <small ><i class="fa fa-envelope  me-2"></i>info@aaconsultingtech.com</small>
            </div>
            <div class="col-xl-4 col-lg-4">
                  <small class="ms-4"><i class="fa fa-phone-alt  me-2"></i>+8802 2266 16261</small>
            </div>
        </div>

        </div>
    </div>
        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn navbar_bg" data-wow-delay="0.1s" >
            <a href="{{ url('/') }}" class="navbar-brand ms-4 ms-lg-0 ">
               <h1 class="display-5  m-0 logoheading custom_text_primary">  <img  src="{{ asset('frontend/image/logo.jpg')}}"  class ="logostyle" alt="logo"> A & A Consulting Limited</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0 ">
                    <a href="{{ url('/') }}" class="nav-item nav-link  btn_navbutton_2">Home</a>
                    <a href="{{ url('/aboutus') }}" class="nav-item nav-link">About  Us</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Offering</a>
                        <div class="dropdown-menu border-light m-0">
                            <a href="{{ url('/cyberSecurity') }}" class="dropdown-item">Cyber Security</a>
                            <a href="{{ url('/cyberStrategy') }}" class="dropdown-item">Cyber Strategy</a>
                            <a href="{{ url('/network-detective') }}" class="dropdown-item">Network Detective</a>
                            <a href="{{ url('/products-video') }}" class="dropdown-item active">Products Video</a>
                            <a href="{{ url('/vulnerability-scanner') }}" class="dropdown-item">VulScan</a>
                            <a href="{{ url('/vpentest') }}" class="dropdown-item">vPENTEST</a>
                        </div>
                    </div>
                    <a href="{{url('/services')}}" class="nav-item nav-link">Services</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Solutions</a>
                        <div class="dropdown-menu border-light m-0">

                            <a href="{{ url('/partner') }}" class="dropdown-item">Partners</a>
                            <a href="{{ url('/products') }}" class="dropdown-item">Products</a>
                            <a href="{{ url('/previous-experience') }}" class="dropdown-item">Previous Experience</a>
                            <a href="{{ url('/seminar') }}" class="dropdown-item">Seminar</a>
                            <a href="{{ url('/training ') }}" class="dropdown-item">Trainings</a>


                        </div>
                    </div>
                    <a href="{{ url('/contact') }}" class="nav-item nav-link">Contact</a>
                </div>
                <div class="d-none d-lg-flex ms-2 navicon">
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="https://m.facebook.com/p/A-A-Consulting-Limited-100063576603891/">
                        <small class="fab fa-facebook-f custom_text_primary"></small>
                    </a>

                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="https://www.linkedin.com/in/shahzeb-husain-609940a">
                        <small class="fab fa-linkedin-in custom_text_primary"></small>
                    </a>
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="">
                        <small class="fab fa-twitter custom_text_primary"></small>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
  <!-- Page Header Start -->
  <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
      <div class="container">
          <!-- <h1 class="display-3 mb-4 animated slideInDown text-white">Cyber Security</h1> -->
          <h1 class="mb-4 animated slideInDown text-white  wow fadeUp"> Get A Bigger View of IT.  </h1>
              <p class="text-white  wow fadeInUp"> Every day IT Departments are finding new uses for Network Detective Pro, and getting more value out of IT.</p>
      </div>
  </div>

<section class="product_videotitle pt-5 pb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="product_title text-center">
                    <h1 class=" pr-4 pb-4  wow fadeInUp ">Solve Your Network Visibility Problems:</h1>
                    <p class=" wow fadeInUp">Each of our products is a stand-alone tool that is sold separately, but tied to the others through a common web-based portal, shared users and sites, and deep workflow integrations that reduce risk and drive improved IT management efficiency.</p>
                </div>
            </div>
        </div>
    </div>
 </section>
<!-- network start -->
    <section class="network department mt-5  mb-5 text-white">
        <div class="container">
            <div class="row g-4 align-items-end mb-4">
                <div class="col-lg-6 col-md-6 wow fadeInUp Forescout2_left" data-wow-delay="0.1s">
                  <a href="https://www.rapidfiretools.com/home-lp/" target="_blank"><img src="{{ asset('frontend/videos/product1.png')}}" alt="product_videoimg" class="img-fluid rounded"></a>
                </div>
                <div class="col-lg-6 col-md-6  wow fadeInUp Forescout2_right" data-wow-delay="0.3s">
                    <p class="d-inline-block border rounded text-primary  py-1 px-3 fw-bold text-uppercase text-white">IT Assessments & Reporting
                    </p>
                    <h1 class="aboutus_titile mb-4 text-white">Discover & Report IT issues Before they become big problems.</h1>
                    <div class="offer_content">
                        <p><i class="fa fa-check  me-3"></i>  ~ Automatically collect data from every device.</p>
                      <p><i class="fa fa-check  me-3"></i> ~  Prioritize remediation based on objective risk scores.</p>
                      <p><i class="fa fa-check  me-3"></i> ~ Generate reports and presentations at the push of a button.</p>
                      <p><i class="fa fa-check  me-3"></i> ~  Trouble-shoot issues faster .</p>

                      </div>
                </div>
            </div>
        </div>
     </section>

     <!-- vulscran start -->
     <section class="network department mt-5  mb-5 text-white">
        <div class="container">
            <div class="row g-4 align-items-end mb-4">
                <div class="col-lg-6 col-md-6 wow fadeInUp Forescout2_right" data-wow-delay="0.3s">
                    <h1 class="aboutus_titile mb-4 text-white">Identify IT vulnerabilities before the hackers do.</h1>
                    <div class="offer_content">
                        <p><i class="fa fa-check  me-3"></i>  ~   Schedule automated scans for ongoing protection.</p>
                      <p><i class="fa fa-check  me-3"></i> ~ Prioritize remediation using severity-based alerts.</p>
                      <p><i class="fa fa-check  me-3"></i> ~Respond faster with built-in technical guidance.</p>
                      <p><i class="fa fa-check  me-3"></i> ~    Reduce risk with every scan .</p>
                      </div>
                </div>
                <div class="col-lg-6 col-md-6 wow fadeInUp Forescout2_left" data-wow-delay="0.1s">
                    <a href="https://www.rapidfiretools.com/home-lp/" target="_blank"><img src="{{ asset('frontend/videos/product2.png')}}" alt="product_videoimg " class="img-fluid rounded"></a>
                  </div>
            </div>
        </div>
     </section>
     <!-- cyber hack start -->
     <section class="network department mt-5  mb-5 text-white">
        <div class="container">
            <div class="row g-4 align-items-end mb-4">
                <div class="col-lg-6 col-md-6 wow fadeInUp Forescout2_left" data-wow-delay="0.1s">
                  <a href="https://www.rapidfiretools.com/home-lp/" target="_blank"><img src="{{ asset('frontend/videos/product3.png')}}" alt="product_videoimg" class="img-fluid rounded"></a>
                </div>
                <div class="col-lg-6 col-md-6 wow fadeInUp Forescout2_right" data-wow-delay="0.3s">
                    <p class="d-inline-block border rounded text-primary  py-1 px-3 fw-bold text-uppercase text-white">Change & Internal Threat Detection
                    </p>
                    <h1 class="aboutus_titile mb-4 text-white">Detect Changes and Anomalous Activity Before They Take You Down.</h1>
                    <div class="offer_content">
                        <p><i class="fa fa-check  me-3"></i>  ~   Catch unauthorized log-in attempts.</p>
                      <p><i class="fa fa-check  me-3"></i> ~  Track suspicious changes to network settings.</p>
                      <p><i class="fa fa-check  me-3"></i> ~ Discover accidental misconfigurations that create risk.</p>
                      <p><i class="fa fa-check  me-3"></i> ~ Identify anomalous user behavior .</p>

                      </div>
                </div>
            </div>
        </div>
     </section>
     <!-- vulscran start -->
     <section class="network department mt-5  mb-5 text-white">
        <div class="container">
            <div class="row g-4 align-items-end mb-4">
                <div class="col-lg-6 col-md-6 wow fadeInUp Forescout2_right" data-wow-delay="0.3s">
                    <!-- <p class="d-inline-block border rounded text-primary  py-1 px-3 fw-bold text-uppercase text-white">IT Assessments & Reporting
                    </p> -->
                    <h1 class="aboutus_titile mb-4 text-white">Stay compliant with any IT security requirement.</h1>
                    <div class="offer_content">
                        <p><i class="fa fa-check  me-3"></i>  ~    Manage and automate compliance for any standard.</p>
                      <p><i class="fa fa-check  me-3"></i> ~  Simplify IT policy manual creation and tracking.</p>
                      <p><i class="fa fa-check  me-3"></i> ~ Identify risk and monitor corrective actions.</p>
                      <p><i class="fa fa-check  me-3"></i> ~   Engage end-users the compliance process .</p>
                      <p><i class="fa fa-check  me-3"></i> ~  Efficiently manage third-party vendor risk .</p>
                      </div>
                </div>
                <div class="col-lg-6 col-md-6 wow fadeInUp Forescout2_left" data-wow-delay="0.1s">
                    <a href="https://www.rapidfiretools.com/home-lp/" target="_blank"><img src="{{ asset('frontend/videos/product5.png')}}" alt="product_videoimg " class="img-fluid rounded"></a>
                  </div>
            </div>
        </div>
     </section>
      <!-- product video  ForescoutStart -->
 <section class="Forescout">
    <div class="container">
        <div class="row g-4 align-items-end mb-4">
            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <p class="d-inline-block border rounded text-primary  py-1 px-3 fw-bold text-uppercase">Forescout
                </p>
                <h1 class="aboutus_titile mb-4">The Power of 100% Device Visibility with Forescout.</h1>
                <p class="mb-4">The first unified device visibility and control platform for IT and OT networks. Gain complete situational awareness of all devices on your network and more effectively orchestrate actions to mitigate cyber and operational risk.
                </p>
            </div>
            <!-- <marquee behavior="scroll" direction="right">Here is some scrolling text... left to right!</marquee> -->
            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="video_widht">
       <iframe  src="https://www.youtube.com/embed/GXPVhhwnqB0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            </div>
        </div>
    </div>
 </section>
<!-- product video End -->
 <!-- product video  ForescoutStart -->
 <section class="Forescout2 department mt-5  mb-5 text-white">
    <div class="container">
        <div class="row g-4 align-items-end mb-4">
            <div class="col-lg-6 wow fadeInUp Forescout2_left" data-wow-delay="0.1s">
                <div class="video_widht">
                <iframe  src="https://www.youtube.com/embed/SaoFsb0mAbQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
               </div>
               </div>
            <div class="col-lg-6  wow fadeInUp Forescout2_right" data-wow-delay="0.3s">
                </p>
                <h1 class="aboutus_titile mb-4 text-white">Identify and Act Faster to Mitigate Risk.</h1>
                <p class="mb-4">Identify all connected devices, compliance gaps and risks on your network faster. Act confidently and quickly to mitigate exposures across your extended enterprise. Harness the power of crowdsourcing and community-built apps to connect easily with the Forescout platform and reduce mean time to resolution. Deploy in the public cloud – faster. Leverage the largest device cloud knowledge base for classification with 11M+ enterprise devices. Welcome to Forescout 8.2.
                </p>
            </div>
        </div>
    </div>
 </section>
<!-- product video End -->
 <!-- ibm video  ForescoutStart -->
 <section class="ibm">
    <div class="container">
        <div class="row g-4 align-items-end mb-4">
            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <p class="d-inline-block border rounded text-primary  py-1 px-3 fw-bold text-uppercase">IBM QRadar
                </p>
                <h1 class="aboutus_titile mb-4">IBM Security QRadar Suite.</h1>
                <p class="mb-4">IBM Security® QRadar® Suite is a modernized threat detection and response solution designed to unify the security analyst experience and accelerate their speed across the full incident lifecycle. The portfolio is embedded with enterprise-grade AI and automation to dramatically increase analyst productivity, helping resource-strained security teams work more effectively across core technologies. It offers integrated products for endpoint security (EDR, XDR, MDR), log management, SIEM and SOAR—all with a common user interface, shared insights and connected workflows.
                </p>
            </div>
            <!-- <marquee behavior="scroll" direction="right">Here is some scrolling text... left to right!</marquee> -->
            <div class="col-lg-6 col-md-6  wow fadeInUp" data-wow-delay="0.1s">
               <div class="video_widht">
                <iframe src="https://www.youtube.com/embed/eHIDpHNSBzw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

               </div>
            </div>
        </div>
    </div>
 </section>
<!-- ibm video End -->
 <!-- Footer Start -->
 <div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6 col-6">
                <h4 class="text-white mb-4">Our Office</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>
                    Address : House #: 01 (4th Floor), Road #: 20, Block - J, Baridhara, Dhaka 1212, Bangladesh</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+8801672996464</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@aaconsultingtech.com </p>
            </div>
            <div class="col-lg-3 col-md-6 col-6 ">
                <h4 class="text-white mb-4">Services</h4>
                <a class="btn btn-link"  >Advisory and Consulting</a>
                <a class="btn btn-link"  >Cyber Security </a>
                <a class="btn btn-link"  >Inventory Management</a>
                <a class="btn btn-link" >VPENTEST</a>
                <a class="btn btn-link"  >Hospital  Management </a>
            </div>
            <div class="col-lg-3 col-md-6 col-6">
                <h4 class="text-white mb-4">Quick Links</h4>


                <a class="btn btn-link" href="{{ url('/training') }}" target="_blank">Trainings</a>
                <a class="btn btn-link" href="{{ url('/previous-experience') }}"target="_blank">Previous Experience</a>
                <a class="btn btn-link" href="{{ url('/seminar') }}"target="_blank">Seminar</a>
                <a class="btn btn-link" href="{{ url('/cyberSecurity') }}l"target="_blank">Cyber Security</a>
            </div>
            <div class="col-lg-3 col-md-6 col-6">
                <h4 class="text-white mb-4"> Opening Hour</h4>
                <p>  Saturday To Thuesday
                    10:00 PM to 6:00 PM</p>
                    <div class="d-flex pt-2">

                        <a class="btn btn-square btn-outline-light rounded-circle me-2" target="_blank" href="https://m.facebook.com/p/A-A-Consulting-Limited-100063576603891/"><i
                                class="fab fa-facebook-f"></i></a>

                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href="https://www.linkedin.com/in/shahzeb-husain-609940a"><i
                                class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-square btn-outline-light rounded-circle me-2" href="#"><i
                                    class="fab fa-twitter"></i></a>
                    </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy;  2024 A & A Consulting Limited - All Rights Reserved
                </div>

            </div>
        </div>
    </div>
    <!-- Copyright End -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn_primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>
    <!-- JavaScript Libraries -->
    <script src="{{ asset('frontend/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/wow/wow.min.js') }}"></script>
    <!-- Template Javascript -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>
