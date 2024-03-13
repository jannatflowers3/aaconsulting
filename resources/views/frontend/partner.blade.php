<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Partner</title>
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
  <div id="spinner"
  class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
  <div class="spinner-border custom_text_primary" role="status" style="width: 3rem; height: 3rem;"></div>
</div>
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
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Offering</a>
                        <div class="dropdown-menu border-light m-0">
                            <a href="{{ url('/cyberSecurity') }}" class="dropdown-item">Cyber Security</a>
                            <a href="{{ url('/cyberStrategy') }}" class="dropdown-item">Cyber Strategy</a>
                            <a href="{{ url('/network-detective') }}" class="dropdown-item">Network Detective</a>
                            <a href="{{ url('/products-video') }}" class="dropdown-item">Products Video</a>
                            <a href="{{ url('/vulnerability-scanner') }}" class="dropdown-item">VulScan</a>
                            <a href="{{ url('/vpentest') }}" class="dropdown-item">vPENTEST</a>
                        </div>
                    </div>
                    <a   href="{{ url('/services') }}" class="nav-item nav-link">Services</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Solutions</a>
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
        <h1 class="display-3 mb-4 animated slideInDown text-white">Our Partners</h1>
        <p class="text-white wow fadeInUp">With partners like these, we can assure you the best quality of work and service.</p>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Partners.</li>
            </ol>
        </nav>
    </div>
</div>
<!-- partners start -->
<section class=" finacial mt-5 department mb-5">
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-lg-10">
          <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
          <p class="d-inline-block border rounded custom_text_primary fw-bold  px-5 py-5 pt-3 pb-3 mb-5 fedaral_title  services_title custom_border">Meet Our Partners</p>
      </div>
      </div>
    </div>
    <div class="row justify-content-center " >
      <div class="col-lg-2 col-4 wow fadeInUp" >
      <div class="parters_img">
        <a href="https://www.broadcom.com/" target="_blank"><img src="{{ asset('frontend/image/partners/broadcom-240x120.png')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg"></a>
          </div>
    </div>
    <div class="col-lg-2 col-4 wow fadeInUp">
        <div class="parters_img">
          <a href="https://www.cisco.com/" target="_blank"><img src="{{ asset('frontend/image/partners/cisco-240x105.png')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg"></a>
        </div>
      </div>
      <div class="col-lg-2 col-4 wow fadeInUp">
        <div class="parters_img">
          <a href="https://www.cyberark.com/" target="_blank"><img src="{{ asset('frontend/image/partners/cyberark.webp')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg"></a>
        </div>
      </div>
      <div class="col-lg-2 col-4 wow fadeInUp">
        <div class="parters_img">
          <a href="https://dataparkbd.com/" target="_blank">
            <img src="{{ asset('frontend/image/partners/datapark.png')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg"></a>
          </div>
      </div>
      <div class="col-lg-2 col-4 wow fadeInUp">
        <div class="parters_img">
          <a href="https://www.dell.com/en-us/" target="_blank"><img src="{{ asset('frontend/image/partners/dell-emc-240x237.jpg')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg"></a>
        </div>
      </div>
      <div class="col-lg-2 col-4 wow fadeInUp">
        <div class="parters_img">
          <a href="https://www.docusign.com/" target="_blank"><img src="{{ asset('frontend/image/partners/docusign-240x135.png')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg"></a>
        </div>
      </div>
<div class="row justify-content-center mt-5 mb-5">
    <div class="col-lg-2 col-4 wow fadeInUp">
        <div class="parters_img">
          <a href="https://www.dropbox.com/?_hp=c" target="_blank"><img src="{{ asset('frontend/image/partners/dropbox-240x135.jpg')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg"></a>
        </div>
      </div>

      <div class="col-lg-2 col-4 wow fadeInUp">
        <div class="parters_img">
          <a href="https://www.dynatrace.com/" target="_blank"><img src="{{ asset('frontend/image/partners/dynatrace-240x67.png')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg"></a>
        </div>
      </div>
      <div class="col-lg-2 col-4 wow fadeInUp">
        <div class="parters_img">
          <a href="https://www.forescout.com/" target="_blank"><img src="{{ asset('frontend/image/partners/forescout-240x126.jpg')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg"></a>
        </div>
      </div>
      <div class="col-lg-2 col-4 wow fadeInUp">
        <div class="parters_img">
          <a href="https://www.fortinet.com/" target="_blank"><img src="{{ asset('frontend/image/partners/fortinet-240x135.png')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg"></a>
        </div>
      </div>
      <div class="col-lg-2 col-4 wow fadeInUp">
        <div class="parters_img">
          <a href="https://about.google/intl/en_us/products/?tip=food-ordering" target="_blank"><img src="{{ asset('frontend/image/partners/google-240x134.png')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg"></a>
        </div>
      </div>
      <div class="col-lg-2 col-4 wow fadeInUp">
        <div class="parters_img">
          <a href="https://www.hpe.com/us/en/home.html" target="_blank"><img src="{{ asset('frontend/image/partners/hewlett-packard.svg')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg"></a>
        </div>
      </div>
</div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-2 col-4 wow fadeInUp">
            <div class="parters_img">
              <a href="https://www.holmsecurity.com/" target="_blank"><img src="{{ asset('frontend/image/partners/holm-security-240x137.jpeg')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg"></a>
            </div>
          </div>
          <div class="col-lg-2 col-3 wow fadeInUp">
            <div class="parters_img">
              <a href="https://www.ibm.com/us-en" target="_blank"><img src="{{ asset('frontend/image/partners/ibm-240x96.png')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg"></a>
            </div>
          </div>
          <div class="col-lg-2 col-3 wow fadeInUp">
            <div class="parters_img">
              <a href="https://www.ibm.com/watson" target="_blank"><img src="{{ asset('frontend/image/partners/ibm-watson-240x180.png')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg"></a>
            </div>
          </div>
          <div class="col-lg-2 col-3 wow fadeInUp">
            <div class="parters_img">
              <a href="https://www.lenovo.com/" target="_blank"><img src="{{ asset('frontend/image/partners/lenovo-240x80.png')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg"></a>
            </div>
          </div>
          <div class="col-lg-2 col-3 wow fadeInUp">
            <div class="parters_img">
              <a href="https://www.microfocus.com/en-us/home" target="_blank"><img src="{{ asset('frontend/image/partners/microfocus-240x120.png')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg"></a>
            </div>
          </div>
          <div class="col-lg-2 col-3 wow fadeInUp">
            <div class="parters_img">
              <a href="https://www.microsoft.com/en-us/" target="_blank"><img src="{{ asset('frontend/image/partners/microsoft-240x135.jpg')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg"></a>
            </div>
          </div>
    </div>
    <div class="row justify-content-center mt-5 mb-5">
        <div class="col-lg-2 col-4 wow fadeInUp">
            <div class="parters_img">
              <a href="https://www.nutanix.com/" target="_blank"><img src="{{ asset('frontend/image/partners/nutanix-1-240x126.png')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg"></a>
            </div>
          </div>
          <div class="col-lg-2 col-4 wow fadeInUp">
            <div class="parters_img">
              <a href="https://prodigillc.com/" target="_blank"><img src="{{ asset('frontend/image/partners/prodigi-240x67.png')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg"></a>
            </div>
          </div>
          <div class="col-lg-2 col-4 wow fadeInUp">
            <div class="parters_img">
              <a href="https://www.proofpoint.com/us" target="_blank"><img src="{{ asset('frontend/image/partners/proofpoint-240x83.jpg')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg"></a>
            </div>
          </div>
          <div class="col-lg-2 col-4 wow fadeInUp">
            <div class="parters_img">
              <a href="https://www.qualys.com/" target="_blank"><img src="{{ asset('frontend/image/partners/qualys-240x206.png')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg"></a>
            </div>
          </div>
          <div class="col-lg-2 col-4 wow fadeInUp">
            <div class="parters_img">
              <a href="http://www.raptasoft.com/" target="_blank"><img src="{{ asset('frontend/image/partners/raptas-240x116.png')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg"></a>
            </div>
          </div>
          <div class="col-lg-6 col-4 wow fadeInUp">
            <div class="parters_img">
              <a href="https://www.redhat.com/en" target="_blank"><img src="{{ asset('frontend/image/partners/redhat.webp')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg"></a>
            </div>
          </div>
    </div>
    <div class="row justify-content-center mt-5 mb-5">
        <div class="col-lg-2 col-4 wow fadeInUp">
            <div class="parters_img">
              <a href="https://rocket-technology.com/home" target="_blank"><img src="{{ asset('frontend/image/partners/rocket-technologuy-191x75.png')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg"></a>
            </div>
          </div>
          <div class="col-lg-2 col-4 wow fadeInUp">
            <div class="parters_img">
              <a href="https://www.rsa.com/" target="_blank"><img src="{{ asset('frontend/image/partners/rsa-240x87.png')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg"></a>
            </div>
          </div>
          <div class="col-lg-2 col-4 wow fadeInUp">
            <div class="parters_img">
              <a href="https://sysdevltd.com/" target="_blank"><img src="{{ asset('frontend/image/partners/sdl-240x119.png')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg"></a>
            </div>
          </div>
          <div class="col-lg-2 col-4 wow fadeInUp">
            <div class="parters_img">
              <a href="https://securityfirstcorp.com/" target="_blank"><img src="{{ asset('frontend/image/partners/securityfirst-240x120.png')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg"></a>
            </div>
          </div>
          <div class="col-lg-2 col-4 wow fadeInUp">
            <div class="parters_img">
              <a href="https://www.splunk.com/" target="_blank"><img src="{{ asset('frontend/image/partners/splunk-240x240.png')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg"></a>
            </div>
          </div>
          <div class="col-lg-2 col-4 wow fadeInUp">
            <div class="parters_img">
              <a href="https://www.spscommerce.com/" target="_blank"><img src="{{ asset('frontend/image/partners/sps-80x76.png')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg"></a>
            </div>
          </div>
    </div>
    <div class="row  mb-5">
        <div class="col-lg-2 col-4 wow fadeInUp">
            <div class="parters_img">
              <a href="https://stealthbits.com/" target="_blank"><img src="{{ asset('frontend/image/partners/stealthbits-240x72.png')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg"></a>
            </div>
          </div>
          <div class="col-lg-2 col-4 wow fadeInUp">
            <div class="parters_img">
              <a href="#" target="_blank"><img src="{{ asset('frontend/image/partners/symantec.gif')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg"></a>
            </div>
          </div>
          <div class="col-lg-2 col-4 wow fadeInUp">
            <div class="parters_img">
              <a href="https://www.tenable.com/" target="_blank"><img src="{{ asset('frontend/image/partners/tenable-835x396.jpg')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg"></a>
            </div>
          </div>
          <div class="col-lg-2 col-4 wow fadeInUp">
            <div class="parters_img">
              <a href="https://www.veeam.com/" target="_blank"><img src="{{ asset('frontend/image/partners/veeam.webp')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg"></a>
            </div>
          </div>
          <div class="col-lg-2 col-4 wow fadeInUp">
            <div class="parters_img">
              <a href="https://velometric.com/" target="_blank"><img src="{{ asset('frontend/image/partners/velometric-155x73.png')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg"></a>
            </div>
          </div>
    </div>
    </div>
  </section>
   <!-- Footer Start -->
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
