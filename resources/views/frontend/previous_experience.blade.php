<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Previous Experience</title>
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
        <div class="col-lg-6 col-sm-6 col-12 px-5 text-start">
            <div class="row ">
                <div class="col-lg-6 ">
                    <small class="mdscreen_font"><i class="fa fa-map-marker-alt  me-2"></i> Baltimore, Maryland, USA</small>

                </div>
                <div class="col-lg-6">
                    <small class="ms-4 mdscreen_font"><i class="fa fa-clock  me-2"></i>  9:00 AM – 5:00 PM (EST)</small>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 px-5 text-end">
            <div class="row">
                <div class="col-lg-7 topbanner_margin">
                    <small><i class="fa fa-envelope  me-2 "></i>info@aaconsulting.tech</small>
                </div>
                <div class="col-lg-4">
                      <small class="ms-4"><i class="fa fa-phone-alt  me-2"></i>+1 443 253 0203</small>
                </div>
            </div>

        </div>
    </div>
    <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
        <div class="col-lg-6 col-sm-6 col-12 px-5 text-start">
            <div class="row">
                <div class="col-lg-6 pl-5">
                    <small ><i class="fa fa-map-marker-alt  me-2"></i>Baridhara, Dhaka-1212, Bangladesh </small>

                </div>
                <div class="col-lg-6">
                    <small class="ms-4 mdscreen_font"><i class="fa fa-clock  me-2"></i>10:00 AM – 6:00 PM (BDT) </small>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 px-5 text-end">
        <div class="row">
            <div class="col-lg-8">
                 <small ><i class="fa fa-envelope  me-2"></i>info@aaconsultingtech.com</small>
            </div>
            <div class="col-lg-4">
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
                        <a href="{{ url('/previous-experience') }}" class="dropdown-item active">Previous Experience</a>
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
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 col-sm-6 col-12 px-4 text-start">
                <small class="mdscreen_font"><i class="fa fa-map-marker-alt  me-2"></i> Baltimore, Maryland, USA</small>
                <small class="ms-4 mdscreen_font"><i class="fa fa-clock  me-2"></i>  9:00 AM – 5:00 PM (EST)</small>
            </div>
            <div class="col-lg-6 col-sm-6 px-5 text-end">
                <small><i class="fa fa-envelope  me-2"></i>info@aaconsultingtech.com</small>
                <small class="ms-4"><i class="fa fa-phone-alt  me-2"></i>+1 443 253 0203</small>
            </div>
        </div>
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 col-sm-6 col-12 px-4 text-start">
                <small><i class="fa fa-map-marker-alt  me-2"></i>Baridhara, Dhaka-1212, Bangladesh </small>
                <small class="ms-4 mdscreen_font"><i class="fa fa-clock  me-2"></i>10:00 AM – 6:00 PM (BDT) </small>
            </div>
            <div class="col-lg-6 col-sm-6 px-5 text-end">
                <small><i class="fa fa-envelope  me-2"></i>info@aaconsultingtech.com</small>
                <small class="ms-4"><i class="fa fa-phone-alt  me-2"></i>+88 02 4881 2159</small>
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
                    <a href="{url('/services')}" class="nav-item nav-link">Services</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Solutions</a>
                        <div class="dropdown-menu border-light m-0">

                            <a href="{{ url('/partner') }}" class="dropdown-item">Partners</a>
                            <a href="{{ url('/products') }}" class="dropdown-item">Products</a>
                            <a href="{{ url('/previous-experience') }}" class="dropdown-item active">Previous Experience</a>
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
    <div class="container-fluid page-header  wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 animated slideInDown text-white">Previous Experiences.</h1>
            <p class="priviour_expriencep">With experiences like these, we can assure you that we are knowledgeable and will produce our best work.</p>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Previous Experiences</li>

                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
<!-- aviation slider -->
<div class="aviation mt-5 pt-5 mb-5">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
            <p class="d-inline-block border rounded custom_text_primary fw-bold  px-5 py-5 pt-3 pb-3 mb-5 services_title custom_border">Aviation</p>
        </div>
       </div>
       </div>
    <div class="row">
        <div class="col-lg-2 col-4 wow fadeInUp">
          <img src="{{ asset('frontend/image/priviour_exprienec/american-airlines-510x189.png')}}" onclick="openModal();currentSlide(1)" class="hover-shadow cursor img-fluid">
        </div>
        <div class="col-lg-2 col-4 wow fadeInUp">
          <img src="{{ asset('frontend/image/priviour_exprienec/bwi-510x255.png')}}"  onclick="openModal();currentSlide(2)" class="hover-shadow cursor img-fluid">
        </div>
        <div class="col-lg-3 col-4 wow fadeInUp">
          <img src="{{ asset('frontend/image/priviour_exprienec/delta-2700x459.jpg')}}"  onclick="openModal();currentSlide(3)" class="hover-shadow cursor img-fluid">
        </div>
        <div class="col-lg-2 col-4 wow fadeInUp">
          <img src="{{ asset('frontend/image/priviour_exprienec/northwest-airlines-259x194.png')}}"  onclick="openModal();currentSlide(4)" class="hover-shadow cursor img-fluid">
        </div>
        <div class="col-lg-3 col-6 wow fadeInUp">
            <img src="{{ asset('frontend/image/priviour_exprienec/aviation.png')}}"  onclick="openModal();currentSlide(4)" class="hover-shadow cursor img-fluid">
          </div>
      </div>

</div>
<!-- 2nd row -->
<div class="department">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
                <p class="d-inline-block border rounded custom_text_primary fw-bold  department_title  px-5 py-5 pt-3 pb-3 mb-5 services_title custom_border">Departmental Stores</p>
            </div>
           </div>
           </div>
        <div class="row justify-content-center">
            <div class="col-lg-2 col-4 wow fadeInUp">
              <img src="{{ asset('frontend/image/priviour_exprienec/depa.png')}}" class="hover-shadow cursor img-fluid fedaral_img ">
            </div>
            <div class="col-lg-2 col-4 wow fadeInUp">
              <img src="{{ asset('frontend/image/priviour_exprienec/depa2.png')}}" class="hover-shadow cursor img-fluid fedaral_img">
            </div>
            <div class="col-lg-2 col-4 wow fadeInUp">
              <img src="{{ asset('frontend/image/priviour_exprienec/depa3.png')}}"  class="hover-shadow cursor img-fluid fedaral_img finalcial_bg">
            </div>
            <div class="col-lg-2 col-4 wow fadeInUp">
              <img src="{{ asset('frontend/image/priviour_exprienec/depa4.png')}}" class="hover-shadow cursor img-fluid fedaral_img">
            </div>
            <div class="col-lg-2 col-4 wow fadeInUp">
                <img src="{{ asset('frontend/image/priviour_exprienec/depa5.png')}}" class="hover-shadow cursor img-fluid fedaral_img">
              </div>
          </div>
    </div>
</div>
<div class="education pt-5 pb-5 ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
                <p class="d-inline-block border rounded custom_text_primary fw-bold    px-5 py-5 pt-3 pb-3 mb-5 services_title custom_border">Educational Institutions</p>
            </div>
           </div>
           </div>
        <div class="row justify-content-center">
            <div class="col-lg-2 col-4 wow fadeInUp">
              <img src="{{ asset('frontend/image/priviour_exprienec/edu.png')}}"  class="hover-shadow cursor img-fluid fedaral_img">
            </div>
            <div class="col-lg-2 col-4 wow fadeInUp">
              <img src="{{ asset('frontend/image/priviour_exprienec/edu2.png')}}"  class="hover-shadow cursor img-fluid fedaral_img">
            </div>
            <div class="col-lg-2 col-4 wow fadeInUp">
              <img src="{{ asset('frontend/image/priviour_exprienec/edu3.jpg')}}" class="hover-shadow cursor img-fluid fedaral_img">
            </div>
            <div class="col-lg-2 col-4 wow fadeInUp">
              <img src="{{ asset('frontend/image/priviour_exprienec/edu4.jpeg')}}"  class="hover-shadow cursor img-fluid fedaral_img">
            </div>
            <div class="col-lg-2 col-4 wow fadeInUp">
                <img src="{{ asset('frontend/image/priviour_exprienec/edu5.jpg')}}" class="hover-shadow cursor img-fluid">
              </div>
              <div class="col-lg-2 col-4 wow fadeInUp">
                <img src="{{ asset('frontend/image/priviour_exprienec/edu6.jpg')}}"  class="hover-shadow cursor img-fluid">
              </div>
          </div>
            </div>
          </div>
    </div>
</div>
</div>
<section class="fedaral department ">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
        <p class="d-inline-block border rounded fedaral_title fw-bold  px-5 py-5 pt-3 pb-3 mb-5 services_title custom_border">Federal Government</p>
    </div>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-lg-2 col-4 wow fadeInUp">
      <img src="{{ asset('frontend/image/priviour_exprienec/feda.png')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg">
    </div>
    <div class="col-lg-2 col-4 wow fadeInUp">
      <img src="{{ asset('frontend/image/priviour_exprienec/feda2.png')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg">
    </div>
    <div class="col-lg-2 col-4 wow fadeInUp">
      <img src="{{ asset('frontend/image/priviour_exprienec/feda3.png')}}" alt="fedaral" class="img-fluid fedaral_img">
    </div>
    <div class="col-lg-2 col-4 wow fadeInUp">
      <img src="{{ asset('frontend/image/priviour_exprienec/feda4.png')}}" alt="fedaral" class="img-fluid fedaral_img">
    </div>
    <div class="col-lg-2 col-4 wow fadeInUp">
      <img src="{{ asset('frontend/image/priviour_exprienec/feda5.png')}}" alt="fedaral" class="img-fluid fedaral_img">
    </div>
    <div class="col-lg-2 col-4 wow fadeInUp">
      <img src="{{ asset('frontend/image/priviour_exprienec/feda6.jpeg')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg">
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-lg-2 col-4 fedaral_img wow fadeInUp">
      <img src="{{ asset('frontend/image/priviour_exprienec/feda7.png')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg">
    </div>
    <div class="col-lg-2 col-4 wow fadeInUp">
      <img src="{{ asset('frontend/image/priviour_exprienec/feda8.gif')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg">
    </div>
    <div class="col-lg-2 col-4 wow fadeInUp">
      <img src="{{ asset('frontend/image/priviour_exprienec/feda9.jpeg')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg">
    </div>
    <div class="col-lg-2 col-4 wow fadeInUp">
      <img src="{{ asset('frontend/image/priviour_exprienec/feda10.jpg')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg">
    </div>
    <div class="col-lg-2 col-4 col-4 wow fadeInUp">
      <img src="{{ asset('frontend/image/priviour_exprienec/feda11.png')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg">
    </div>
    <div class="col-lg-2 col-4 wow fadeInUp">
      <img src="{{ asset('frontend/image/priviour_exprienec/feda12.jpg')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg">
    </div>
  </div>
  </div>
</section>

<!-- gaming start -->
<section class=" gaming finacial mt-5 ">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
        <p class="d-inline-block border rounded custom_text_primary fw-bold  px-5 py-5 pt-3 pb-3 mb-5   services_title custom_border">Gaming Industry</p>
    </div>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-lg-2 col-4 wow fadeInUp">
      <img src="{{ asset('frontend/image/priviour_exprienec/gaming1.png')}}" alt="fedaral" class="img-fluid fedaral_img ">
    </div>
    <div class="col-lg-2 col-4 wow fadeInUp">
      <img src="{{ asset('frontend/image/priviour_exprienec/gaming2.png')}}" alt="fedaral" class="img-fluid fedaral_img">
    </div>
    <div class="col-lg-2 col-4 wow fadeInUp">
      <img src="{{ asset('frontend/image/priviour_exprienec/gaming3.png')}}" alt="fedaral" class="img-fluid fedaral_img">
    </div>
    <div class="col-lg-2 col-4 wow fadeInUp">
      <img src="{{ asset('frontend/image/priviour_exprienec/gaming4.png')}}" alt="fedaral" class="img-fluid fedaral_img ">
    </div>
    <div class="col-lg-2 col-4 wow fadeInUp">
      <img src="{{ asset('frontend/image/priviour_exprienec/gaming5.jpg')}}" alt="fedaral" class="img-fluid fedaral_img ">
    </div>
  </div>
  </div>
</section>
<!-- finalcial start -->
<section class=" finacial mt-5 department">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
        <p class="d-inline-block border rounded custom_text_primary fw-bold  px-5 py-5 pt-3 pb-3 mb-5 fedaral_title  services_title custom_border">Financial Institutions</p>
    </div>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-lg-2 col-4 wow fadeInUp">
      <img src="{{ asset('frontend/image/priviour_exprienec/finacial.png')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg">
    </div>
    <div class="col-lg-2 col-4 wow fadeInUp">
      <img src="{{ asset('frontend/image/priviour_exprienec/finacial2.jpg')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg">
    </div>
    <div class="col-lg-2 col-4 wow fadeInUp">
      <img src="{{ asset('frontend/image/priviour_exprienec/finacial3.png')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg">
    </div>
    <div class="col-lg-2 col-4 wow fadeInUp">
      <img src="{{ asset('frontend/image/priviour_exprienec/finacial6.png')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg">
    </div>
    <div class="col-lg-2 col-4 wow fadeInUp">
      <img src="{{ asset('frontend/image/priviour_exprienec/fainancial5.jpg')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg">
    </div>
    <div class="col-lg-2 col-4 wow fadeInUp">
      <img src="{{ asset('frontend/image/priviour_exprienec/ficancial8.png')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg">
    </div>
  </div>
  </div>
</section>
<!-- Hospital Industry start -->
<section class="Hospital  ">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
        <p class="d-inline-block border rounded  fw-bold  px-5 py-5 pt-3 pb-3 mb-5  Hospital_bg  custom_border">Hospitality Industry
        </p>
    </div>
    <div class="hospital text-center wow fadeInUp">
      <img src="{{ asset('frontend/image/priviour_exprienec/hospiotal1.png')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg sports_img">
      <img src="{{ asset('frontend/image/priviour_exprienec/hospital2.png')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg sports_img">
    </div>
    </div>
    <div class="col-lg-4">
      <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
      <p class="d-inline-block border rounded  fw-bold  px-5 py-5 pt-3 pb-3 mb-5 Hospital_bg custom_border"> Sports
      </p>
  </div>
  <div class="sports text-center wow fadeInUp">
    <img src="{{ asset('frontend/image/priviour_exprienec/spots1.jpeg')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg sports_img">
    <img src="{{ asset('frontend/image/priviour_exprienec/sports2.jpeg')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg sports_img">
  </div>
  </div>
  <div class="col-lg-4 wow fadeInUp">
    <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
    <p class="d-inline-block border rounded  fw-bold  px-5 py-5 pt-3 pb-3 mb-5 Hospital_bg custom_border"> Oil and Gas Industry
    </p>
</div>
<div class="sports text-center wow fadeInUp">
  <img src="{{ asset('frontend/image/priviour_exprienec/oil1.png')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg sports_img">

</div>
</div>
  </div>

  </div>
  </section>
<!-- health start -->
<section class=" health mt-5 department">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
        <p class="d-inline-block border rounded custom_text_primary fw-bold  px-5 py-5 pt-3 pb-3 mb-5 fedaral_title  services_title custom_border">Health Care</p>
    </div>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-lg-2 col-4 wow fadeInUp">
      <img src="{{ asset('frontend/image/priviour_exprienec/health1.png')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg">
    </div>
    <div class="col-lg-2 col-4 wow fadeInUp">
      <img src="{{ asset('frontend/image/priviour_exprienec/health2.png')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg">
    </div>
    <div class="col-lg-2 col-4 wow fadeInUp">
      <img src="{{ asset('frontend/image/priviour_exprienec/health3.png')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg">
    </div>
    <div class="col-lg-2 col-4 wow fadeInUp">
      <img src="{{ asset('frontend/image/priviour_exprienec/health4.webp')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg">
    </div>
    <div class="col-lg-2 col-4 wow fadeInUp">
      <img src="{{ asset('frontend/image/priviour_exprienec/health5.jpeg')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg">
    </div>
    <div class="col-lg-2 col-4 wow fadeInUp">
      <img src="{{ asset('frontend/image/priviour_exprienec/health6.png')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg">
    </div>
  </div>
  </div>
</section>

<!-- transpotation start -->
<section class="transport">
  <div class="container">
      <!-- row start -->
     <div class="row justify-content-center">

      <div class="col-lg-10 col-12">
          <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
          <p class="d-inline-block border rounded custom_text_primary fw-bold  px-5 py-5 pt-3 pb-3 mb-5 services_title custom_border">Transportation</p>
      </div>
      <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.3s">
 <div class="row">
    <div class="col-lg-12">
    <div class="project_img ">
                <img class="img-fluid rounded" src="{{ asset('frontend/image/priviour_exprienec/transport3.gif')}}" alt="project4">
            </div>
            <div class="project_img">
                <img class="img-fluid rounded" src="{{ asset('frontend/image/priviour_exprienec/transport4.gif')}}" alt="project1">
            </div>
            <div class="project_img ">
              <img class="img-fluid rounded" src="{{ asset('frontend/image/priviour_exprienec/transport1.gif')}}" alt="project1">
          </div>
          <div class="project_img">
            <img class="img-fluid rounded" src="{{ asset('frontend/image/priviour_exprienec/transport2.gif')}}" alt="project2">
        </div>
    </div>
 </div>

      </div>
     </div>
  </div>
     <!-- row end -->
</div>
</section>
<!-- insurance start -->
<section class=" finacial mt-5 department">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
        <p class="d-inline-block border rounded custom_text_primary fw-bold  px-5 py-5 pt-3 pb-3 mb-5 fedaral_title  services_title custom_border">Insurance Industry</p>
    </div>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-lg-2 col-4 wow fadeInUp">
      <img src="{{ asset('frontend/image/priviour_exprienec/insu1.png')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg">
    </div>
    <div class="col-lg-2 col-4 wow fadeInUp">
      <img src="{{ asset('frontend/image/priviour_exprienec/insu2.jpg')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg">
    </div>
    <div class="col-lg-2 col-4 wow fadeInUp">
      <img src="{{ asset('frontend/image/priviour_exprienec/insu3.webp')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg">
    </div>
    <div class="col-lg-2 col-4 wow fadeInUp">
      <img src="{{ asset('frontend/image/priviour_exprienec/insu5.gif')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg">
    </div>
    <div class="col-lg-2 col-4 wow fadeInUp">
      <img src="{{ asset('frontend/image/priviour_exprienec/insur4.png')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg">
    </div>
  </div>
  </div>
</section>

<!-- technology start -->
<section class="technology">
  <div class="container">
      <!-- row start -->
     <div class="row justify-content-center">

      <div class="col-lg-12 col-12">
          <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
          <p class="d-inline-block border rounded custom_text_primary fw-bold  px-5 py-5 pt-3 pb-3 mb-5 services_title custom_border">Technology</p>

      </div>
      <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.3s">

            <div class="row justify-content-center">
                <div class="col-lg-4 project_img">
                <img class="img-fluid rounded" src="{{ asset('frontend/image/priviour_exprienec/tech1.png')}}" alt="project2">
                </div>

            <div class="project_img col-lg-4">
                <img class="img-fluid rounded" src="{{ asset('frontend/image/priviour_exprienec/tecj2.jpg')}}" alt="project4">
            </div>
            <div class="project_img col-lg-4">
                <img class="img-fluid rounded" src="{{ asset('frontend/image/priviour_exprienec/tecj3.jpg')}}" alt="project1">
            </div>
            </div>
      </div>
     </div>
  </div>
     <!-- row end -->
</div>
</section>
<!-- state start -->
<section class="fedaral department ">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
        <p class="d-inline-block border rounded fedaral_title fw-bold  px-5 py-5 pt-3 pb-3 mb-5 services_title custom_border">State and Local Government
        </p>
    </div>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-lg-2 col-4 wow fadeInUp">
      <img src="{{ asset('frontend/image/priviour_exprienec/state.png')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg">
    </div>
    <div class="col-lg-2 col-4 wow fadeInUp">
      <img src="{{ asset('frontend/image/priviour_exprienec/state2.jpeg')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg">
    </div>
    <div class="col-lg-2 col-4 wow fadeInUp">
      <img src="{{ asset('frontend/image/priviour_exprienec/state3.jpeg')}}" alt="fedaral" class="img-fluid fedaral_img">
    </div>
    <div class="col-lg-2 col-4 wow fadeInUp">
      <img src="{{ asset('frontend/image/priviour_exprienec/state4.png')}}" alt="fedaral" class="img-fluid fedaral_img">
    </div>
    <div class="col-lg-2 col-4 wow fadeInUp">
      <img src="{{ asset('frontend/image/priviour_exprienec/state5.png')}}" alt="fedaral" class="img-fluid fedaral_img">
    </div>
    <div class="col-lg-2 col-4 wow fadeInUp">
      <img src="{{ asset('frontend/image/priviour_exprienec/state6.jpeg')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg">
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-lg-2 col-4 fedaral_img">
      <img src="{{ asset('frontend/image/priviour_exprienec/state7.png')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg">
    </div>
    <div class="col-lg-2 col-4 wow fadeInUp">
      <img src="{{ asset('frontend/image/priviour_exprienec/state8.png')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg">
    </div>
    <div class="col-lg-2 col-4 wow fadeInUp">
      <img src="{{ asset('frontend/image/priviour_exprienec/state9.jpg')}}" alt="fedaral" class="img-fluid fedaral_img finalcial_bg">
    </div>

  </div>
  </div>
</section>

  <!-- aviation start -->
<section class="Automotive">
  <div class="container">
      <!-- row start -->
     <div class="row justify-content-center">
      <div class="col-lg-10">
          <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
          <p class="d-inline-block border rounded custom_text_primary fw-bold  px-5 py-5 pt-3 pb-3 mb-5 services_title custom_border">Automotive</p>
          </div>
     </div>
     <div class="row justify-content-center">
      <div class="col-lg-3 col-6 wow fadeInUp">
        <div class=" ">
          <img class="img-fluid rounded fedaral_img finalcial_bg" src="{{ asset('frontend/image/priviour_exprienec/automovie1.png')}}" alt="project1">
      </div>
      </div>
      <div class="col-lg-3 col-6 wow fadeInUp">
        <img class="img-fluid rounded fedaral_img finalcial_bg" src="{{ asset('frontend/image/priviour_exprienec/automovie2.jpg')}}" alt="project2">
    </div>
     </div>
  </div>
     <!-- row end -->
</div>
</section>
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
 <!-- JavaScript Libraries -->
 <script src="{{ asset('frontend/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/wow/wow.min.js') }}"></script>
    <!-- Template Javascript -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>
</html>
