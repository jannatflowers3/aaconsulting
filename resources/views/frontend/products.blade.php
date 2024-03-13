<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Product</title>
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
    <script src="https://kit.fontawesome.com/230a51e61c.js" crossorigin="anonymous"></script>
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
   <div class="spinner-border custom_text_primary" role="status"></div>
</div>
<!-- Spinner End -->
  <!-- Navbar Start -->
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
                    <a href="{{url('/services')}}" class="nav-item nav-link">Services</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Solutions</a>
                        <div class="dropdown-menu border-light m-0">

                            <a href="{{ url('/partner') }}" class="dropdown-item">Partners</a>
                            <a href="{{ url('/products') }}" class="dropdown-item active">Products</a>
                            <a href="{{ url('/previous-experience') }}" class="dropdown-item">Previous Experience</a>
                            <a href="{{ url('/seminar') }}" class="dropdown-item  ">Seminar</a>
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
            <h1 class="display-3 mb-4 animated slideInDown text-white">Our Products</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Products</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- experts area Start -->
    <section class="product  department ">

            <div class="container">
               <div class="row justify-content-center">
                <div class="col-lg-10 col-6 wow fadeInUp">
                    <div class="text-center mx-auto wow fadeInUp mb-5" data-wow-delay="0.1s">
                        <p class="d-inline-block  rounded product_title custom_text_primary experties_heading">Our Feature Products</p>
                    </div>
                </div>
               </div>
               <!-- 2nd row start -->
               <div class="row">
                <div class="col-lg-3 col-6 wow fadeInUp">
                    <div class="card mycarad myproduct" >
                        <div class="experties_card text-center                                                                                                          ">
                            <!-- <i class="fa-solid fa-bomb"></i> -->
                            <img src="{{ asset('frontend/image/product/1.png')}}" alt="product1" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Application and Software Development</h5>
                            <p class="card-text">Application and Software Development will analyze a client's needs and develop software based on........
                                <!-- <a href="service.html" class="">Read More...</a> -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="product1">
                                      <button class="accordion-button collapsed product2 " type="button" data-bs-toggle="collapse" data-bs-target="#product_five">
                                        Read More
                                      </button>
                                    </h2>
                                    <div id="product_five" class="accordion-collapse collapse " aria-labelledby="product1">
                                      <div class="accordion-body">
                                          <div class="offer_content">
                                          <p class="text-dark">those needs through custom software development, custom ERP solution, digital signage, and hospital information management system.</p>
                                          </div>
                                    </div>
                                  </div>
                                </div>
                            </p>
                        </div>
                      </div>
                </div>
                <div class="col-lg-3 col-6 wow fadeInUp">
                    <div class="card mycarad myproduct" >
                        <div class="experties_card text-center                                                                                                          ">
                            <!-- <i class="fa-solid fa-bomb"></i> -->
                            <img src="{{ asset('frontend/image/product/2.png')}}" alt="product1" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Backup Recovery</h5>
                            <p class="card-text">Also known as storage management, backup recovery protects an organization's data against hardware failure......
                                <!-- <a href="service.html" class="">Read More...</a> -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="product22">
                                      <button class="accordion-button collapsed product2 " type="button" data-bs-toggle="collapse" data-bs-target="#product_2">
                                        Read More
                                      </button>
                                    </h2>
                                    <div id="product_2" class="accordion-collapse collapse " aria-labelledby="product22">
                                      <div class="accordion-body">
                                          <div class="offer_content">
                                          <p class="text-dark">and other errors by storing backup and archive copies of data in offline storage. It can protect devices from laptops to mainframe..</p>
                                          </div>
                                    </div>
                                  </div>
                                </div>
                            </p>
                        </div>
                      </div>
                </div>
                <div class="col-lg-3 col-6 wow fadeInUp">
                    <div class="card mycarad myproduct" >
                        <div class="experties_card text-center                                                                                                          ">
                            <!-- <i class="fa-solid fa-bomb"></i> -->
                            <img src="{{ asset('frontend/image/product/3.jfif')}}" alt="product1" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Business Continuity and Recovery Services</h5>
                            <p class="card-text">Business Continuity and Recovery Services (BCRS) counteracts interruptions to business activities and....
                                <!-- <a href="service.html" class="">Read More...</a> -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="product3">
                                      <button class="accordion-button collapsed product2 " type="button" data-bs-toggle="collapse" data-bs-target="#product_3">
                                        Read More
                                      </button>
                                    </h2>
                                    <div id="product_3" class="accordion-collapse collapse " aria-labelledby="product3">
                                      <div class="accordion-body">
                                          <div class="offer_content">
                                          <p class="text-dark">to protect critical business processes from the effects of major failures of information systes or disasters and to ensure their timely resumption. This product is used for architecting, consulting, and BCRS plan.</p>
                                          </div>
                                    </div>
                                  </div>
                                </div>
                            </p>
                        </div>
                      </div>
                </div>
                <div class="col-lg-3 col-6 wow fadeInUp">
                    <div class="card mycarad myproduct" >
                        <div class="experties_card text-center                                                                                                          ">
                            <!-- <i class="fa-solid fa-bomb"></i> -->
                            <img src="{{ asset('frontend/image/product/4.jpg')}}" alt="product1" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Cloud Solutions</h5>
                            <p class="card-text">Cloud Offerings allows organizations to reduce overall IT costs in numerous ways and to attain maximum value.....
                                <!-- <a href="service.html" class="">Read More...</a> -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="product4">
                                      <button class="accordion-button collapsed product2 " type="button" data-bs-toggle="collapse" data-bs-target="#product_4">
                                        Read More
                                      </button>
                                    </h2>
                                    <div id="product_4" class="accordion-collapse collapse " aria-labelledby="product4">
                                      <div class="accordion-body">
                                          <div class="offer_content">
                                          <p class="text-dark">from the offering, Cloud Offerings are offered via Amazon, Google, and Microsoft Solutions.</p>
                                          </div>
                                    </div>
                                  </div>
                                </div>
                            </p>
                        </div>
                      </div>
                </div>
            </div>
            <!-- row end -->
            <div class="row">
                <div class="col-lg-3 col-6 wow fadeInUp">
                    <div class="card mycarad myproduct" >
                        <div class="experties_card text-center                                                                                                          ">
                            <!-- <i class="fa-solid fa-bomb"></i> -->
                            <img src="{{ asset('frontend/image/product/5.jpg')}}" alt="product1" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Data Protection</h5>
                            <p class="card-text">Data Protection secures important and personal information from being compromised. ...
                                <!-- <a href="service.html" class="">Read More...</a> -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="product5">
                                      <button class="accordion-button collapsed product2 " type="button" data-bs-toggle="collapse" data-bs-target="#product_5">
                                        Read More
                                      </button>
                                    </h2>
                                    <div id="product_5" class="accordion-collapse collapse " aria-labelledby="product5">
                                      <div class="accordion-body">
                                          <div class="offer_content">
                                          <p class="text-dark">Data Protection secures important and personal information from being compromised..</p>
                                          </div>
                                    </div>
                                  </div>
                                </div>
                            </p>
                        </div>
                      </div>
                </div>
                <div class="col-lg-3 col-6 wow fadeInUp">
                    <div class="card mycarad myproduct" >
                        <div class="experties_card text-center                                                                                                          ">
                            <!-- <i class="fa-solid fa-bomb"></i> -->
                            <img src="{{ asset('frontend/image/product/6.jpg')}}" alt="product1" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Development Operations</h5>
                            <p class="card-text">Development Operations, or DevOps is a method which integrates software development and IT...
                                <!-- <a href="service.html" class="">Read More...</a> -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="product6">
                                      <button class="accordion-button collapsed product2 " type="button" data-bs-toggle="collapse" data-bs-target="#product_6">
                                        Read More
                                      </button>
                                    </h2>
                                    <div id="product_6" class="accordion-collapse collapse " aria-labelledby="product6">
                                      <div class="accordion-body">
                                          <div class="offer_content">
                                          <p class="text-dark">operations. The mission and hope is to consolidate the systems development lifecycle and deliver via software..</p>
                                          </div>
                                    </div>
                                  </div>
                                </div>
                            </p>
                        </div>
                      </div>
                </div>
                <div class="col-lg-3 col-6 wow fadeInUp">
                    <div class="card mycarad myproduct" >
                        <div class="experties_card text-center                                                                                                          ">
                            <!-- <i class="fa-solid fa-bomb"></i> -->
                            <img src="{{ asset('frontend/image/product/7.png')}}" alt="product1" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Digital Payment System</h5>
                            <p class="card-text">Digital Payment System is a way that allows online transactions to occur. Through Masria Digital Payments ,.
                                <!-- <a href="service.html" class="">Read More...</a> -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="product7">
                                      <button class="accordion-button collapsed product2 " type="button" data-bs-toggle="collapse" data-bs-target="#product_7">
                                        Read More
                                      </button>
                                    </h2>
                                    <div id="product_7" class="accordion-collapse collapse " aria-labelledby="product7">
                                      <div class="accordion-body">
                                          <div class="offer_content">
                                          <p class="text-dark">(MDP) personalized cards (credit, debit, or prepaid), are issued securely and with ease. In addition, with Value Added Services such as 3D secure, advanced fraud management, API banking, installments, and loyalty, the client or customer can be assured that they are protected when conducting online transactions..</p>
                                          </div>
                                    </div>
                                  </div>
                                </div>
                            </p>
                        </div>
                      </div>
                </div>
                <div class="col-lg-3 col-6 wow fadeInUp">
                    <div class="card mycarad myproduct" >
                        <div class="experties_card text-center                                                                                                          ">
                            <!-- <i class="fa-solid fa-bomb"></i> -->
                            <img src="{{ asset('frontend/image/product/5.jpg')}}" alt="product1" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Endpoint Management</h5>
                            <p class="card-text">Endpoint Management provides various software tools that combines into one management system in one location...
                                <!-- <a href="service.html" class="">Read More...</a> -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="product8">
                                      <button class="accordion-button collapsed product2 " type="button" data-bs-toggle="collapse" data-bs-target="#product_8">
                                        Read More
                                      </button>
                                    </h2>
                                    <div id="product_8" class="accordion-collapse collapse " aria-labelledby="product8">
                                      <div class="accordion-body">
                                          <div class="offer_content">
                                          <p class="text-dark">Endpoint Management provides various software tools that combines into one management system in one location..</p>
                                          </div>
                                    </div>
                                  </div>
                                </div>
                            </p>
                        </div>
                      </div>
                </div>
            </div>
           <!-- 3rd row start   -->
           <div class="row">
            <div class="col-lg-3 col-6 wow fadeInUp">
                <div class="card mycarad myproduct" >
                    <div class="experties_card text-center                                                                                                          ">
                        <!-- <i class="fa-solid fa-bomb"></i> -->
                        <img src="{{ asset('frontend/image/product/9.jpg')}}" alt="product1" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Fiber Optics</h5>
                        <p class="card-text">Fiber Optics is commonly used for long-distance and high performance data networking. Currently,
                            <!-- <a href="service.html" class="">Read More...</a> -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="product9">
                                  <button class="accordion-button collapsed product2 " type="button" data-bs-toggle="collapse" data-bs-target="#product_9">
                                    Read More
                                  </button>
                                </h2>
                                <div id="product_9" class="accordion-collapse collapse " aria-labelledby="product9">
                                  <div class="accordion-body">
                                      <div class="offer_content">
                                      <p class="text-dark">this Fiber Optics product option offers single mode optical patch cords and pigtails, and fixed attenuators...</p>
                                      </div>
                                </div>
                              </div>
                            </div>
                        </p>
                    </div>
                  </div>
            </div>
            <div class="col-lg-3 col-6 wow fadeInUp">
                <div class="card mycarad myproduct" >
                    <div class="experties_card text-center                                                                                                          ">
                        <!-- <i class="fa-solid fa-bomb"></i> -->
                        <img src="{{ asset('frontend/image/product/10.jpg')}}" alt="product1" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Identity and Access Management</h5>
                        <p class="card-text">Also known as identity management, identity and access management
                            <!-- <a href="service.html" class="">Read More...</a> -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="product10">
                                  <button class="accordion-button collapsed product2 " type="button" data-bs-toggle="collapse" data-bs-target="#product_10">
                                    Read More
                                  </button>
                                </h2>
                                <div id="product_10" class="accordion-collapse collapse " aria-labelledby="product10">
                                  <div class="accordion-body">
                                      <div class="offer_content">
                                      <p class="text-dark">is a set of policies and technologies put in place to make sure that the peoples of a corporation have access to the technologies and network they need...</p>
                                      </div>
                                </div>
                              </div>
                            </div>
                        </p>
                    </div>
                  </div>
            </div>
            <div class="col-lg-3 col-6 wow fadeInUp">
                <div class="card mycarad myproduct" >
                    <div class="experties_card text-center                                                                                                          ">
                        <!-- <i class="fa-solid fa-bomb"></i> -->
                        <img src="{{ asset('frontend/image/product/11.png')}}" alt="product1" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Infrastructure </h5>
                        <p class="card-text">Infrastructure is the foundation of IT usually seen through physical  .
                            <!-- <a href="service.html" class="">Read More...</a> -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="product11">
                                  <button class="accordion-button collapsed product2 " type="button" data-bs-toggle="collapse" data-bs-target="#product_11">
                                    Read More
                                  </button>
                                </h2>
                                <div id="product_11" class="accordion-collapse collapse " aria-labelledby="product11">
                                  <div class="accordion-body">
                                      <div class="offer_content">
                                      <p class="text-dark">pieces as well as software and network components Infrastructure is the foundation of IT usually seen through physical pieces as well as software and network components...</p>
                                      </div>
                                </div>
                              </div>
                            </div>
                        </p>
                    </div>
                  </div>
            </div>
            <div class="col-lg-3 col-6 wow fadeInUp">
                <div class="card mycarad myproduct" >
                    <div class="experties_card text-center                                                                                                          ">
                        <!-- <i class="fa-solid fa-bomb"></i> -->
                        <img src="{{ asset('frontend/image/product/12.jpg')}}" alt="product1" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Internet of Things</h5>
                        <p class="card-text">Internet of Things, also known as IoT, allows everyday machines and devices to transmit and receive..
                            <!-- <a href="service.html" class="">Read More...</a> -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="product12">
                                  <button class="accordion-button collapsed product2 " type="button" data-bs-toggle="collapse" data-bs-target="#product_12">
                                    Read More
                                  </button>
                                </h2>
                                <div id="product_12" class="accordion-collapse collapse " aria-labelledby="product12">
                                  <div class="accordion-body">
                                      <div class="offer_content">
                                      <p class="text-dark"> data through an embedded connection via the Internet. Internet of Things consists of products such as intelligent parking, revenue system, smart meter, and monitoring of IoT devices...</p>
                                      </div>
                                </div>
                              </div>
                            </div>
                        </p>
                    </div>
                  </div>
            </div>
        </div>
        <!-- 4rd row start -->
        <div class="row">
            <div class="col-lg-3 col-6 wow fadeInUp">
                <div class="card mycarad myproduct" >
                    <div class="experties_card text-center                                                                                                          ">
                        <!-- <i class="fa-solid fa-bomb"></i> -->
                        <img src="{{ asset('frontend/image/product/13.jpg')}}" alt="product1" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Multi Factor Authentification</h5>
                        <p class="card-text">Multi Factor Authentication is a system set place that grants a person access </p>
                            <!-- <a href="service.html" class="">Read More...</a> -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="product13">
                                  <button class="accordion-button collapsed product2 " type="button" data-bs-toggle="collapse" data-bs-target="#product_13">
                                    Read More
                                  </button>
                                </h2>
                                <div id="product_13" class="accordion-collapse collapse " aria-labelledby="product13">
                                  <div class="accordion-body">
                                      <div class="offer_content">
                                      <p class="text-dark">to an account when successfully completing two or more steps...</p>
                                      </div>
                                </div>
                              </div>
                            </div>
                        </p>
                    </div>
                  </div>
            </div>
            <div class="col-lg-3 col-6 wow fadeInUp">
                <div class="card mycarad myproduct" >
                    <div class="experties_card text-center                                                                                                          ">
                        <!-- <i class="fa-solid fa-bomb"></i> -->
                        <img src="{{ asset('frontend/image/product/14.jpg')}}" alt="product1" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Network Security</h5>
                        <p class="card-text">Network Security refers to the numerous rules and policies set in place that helps prevent data .
                            <!-- <a href="service.html" class="">Read More...</a> -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="product14">
                                  <button class="accordion-button collapsed product2 " type="button" data-bs-toggle="collapse" data-bs-target="#product_14">
                                    Read More
                                  </button>
                                </h2>
                                <div id="product_14" class="accordion-collapse collapse " aria-labelledby="product14">
                                  <div class="accordion-body">
                                      <div class="offer_content">
                                      <p class="text-dark">breaches of confidential information and protects computer networks through software and hardware. Products such as security information even management (SIEM) and network access control (NAC) assist in these attempts...</p>
                                      </div>
                                </div>
                              </div>
                            </div>
                        </p>
                    </div>
                  </div>
            </div>
            <div class="col-lg-3 col-6 wow fadeInUp">
                <div class="card mycarad myproduct" >
                    <div class="experties_card text-center                                                                                                          ">
                        <!-- <i class="fa-solid fa-bomb"></i> -->
                        <img src="{{ asset('frontend/image/product/11.png')}}" alt="product1" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Payment Processing </h5>
                        <p class="card-text">Payment processing can be used with various types of cards- ...
                            <!-- <a href="service.html" class="">Read More...</a> -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="product15">
                                  <button class="accordion-button collapsed product2 " type="button" data-bs-toggle="collapse" data-bs-target="#product_15">
                                    Read More
                                  </button>
                                </h2>
                                <div id="product_15" class="accordion-collapse collapse " aria-labelledby="product15">
                                  <div class="accordion-body">
                                      <div class="offer_content">
                                      <p class="text-dark">credit, debit, and prepaid. Credit can be conventional, islamic, or corporate. Debit can interface with industry leading core banking platforms as well as quickly integrate with other core banking through the Innovate Integration Gateway. Prepaid cards can have single currency or multi-currency, customized payroll, salary, incentive purchases, gift in-campus, and closed loop solutions...</p>
                                      </div>
                                </div>
                              </div>
                            </div>
                        </p>
                    </div>
                  </div>
            </div>
            <div class="col-lg-3 col-6 wow fadeInUp">
                <div class="card mycarad myproduct" >
                    <div class="experties_card text-center                                                                                                          ">
                        <!-- <i class="fa-solid fa-bomb"></i> -->
                        <img src="{{ asset('frontend/image/product/16.jpg')}}" alt="product1" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Storage</h5>
                        <p class="card-text">Storage helps retain data temporarily or permanently on a computer.
                            <!-- <a href="service.html" class="">Read More...</a> -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="product16">
                                  <button class="accordion-button collapsed product2 " type="button" data-bs-toggle="collapse" data-bs-target="#product_16">
                                    Read More
                                  </button>
                                </h2>
                                <div id="product_16" class="accordion-collapse collapse " aria-labelledby="product16">
                                  <div class="accordion-body">
                                      <div class="offer_content">
                                      <p class="text-dark"> Storage helps retain data temporarily or permanently on a computer...</p>
                                      </div>
                                </div>
                              </div>
                            </div>
                        </p>
                    </div>
                  </div>
            </div>
        </div>
        </div>
    </section>
<!-- expertices area end -->
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
