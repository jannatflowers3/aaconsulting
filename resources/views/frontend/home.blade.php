<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>A & A Consulting Limited</title>
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
    <!-- Icon Font  awesome Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="{{ asset('frontend/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/customstyle.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/design.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/media.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="" role="status"></div>
    </div>
    <!-- Spinner End -->
    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class=" row gx-0 align-items-center d-none d-lg-flex mr-auto">
            <div class="col-xl-6 col-lg-6 col-md-4 ">
                <small class="mdscreen_font"><i class="fa fa-map-marker-alt  me-2"></i> Baltimore, Maryland, USA</small>
                <small class="ms-4 mdscreen_font"><i class="fa fa-clock  me-2"></i>  9:00 AM – 5:00 PM (EST)</small>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-8">
                <small><i class="fa fa-envelope  me-2 "></i>info@aaconsulting.tech</small>
                <small class="ms-4"><i class="fa fa-phone-alt  me-2"></i>+1 443 253 0203</small>
            </div>
        </div>
        <div class=" row gx-0 align-items-center d-none d-lg-flex">

            <div class="col-xl-6 col-lg-6 col-md-4 ">
                <small ><i class="fa fa-map-marker-alt  me-2"></i>Baridhara, Dhaka-1212, Bangladesh </small>
                <small class="ms-4 mdscreen_font"><i class="fa fa-clock  me-2"></i>10:00 AM – 6:00 PM (BDT) </small>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-8 ">
                <small ><i class="fa fa-envelope  me-2"></i>info@aaconsultingtech.com</small>
                <small class="ms-4"><i class="fa fa-phone-alt  me-2"></i>+8802 2266 16261</small>
            </div>
        </div>


        {{-- <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 px-5 text-start">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 pl-5">
                        <small ><i class="fa fa-map-marker-alt  me-2"></i>Baridhara, Dhaka-1212, Bangladesh </small>

                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <small class="ms-4 mdscreen_font"><i class="fa fa-clock  me-2"></i>10:00 AM – 6:00 PM (BDT) </small>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 px-5 text-end">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-6">
                     <small ><i class="fa fa-envelope  me-2"></i>info@aaconsultingtech.com</small>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                      <small class="ms-4"><i class="fa fa-phone-alt  me-2"></i>+8802 2266 16261</small>
                </div>
            </div>

            </div>
        </div> --}}
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
                    <a href="{{ url('/') }}" class="nav-item nav-link active btn_navbutton_2">Home</a>
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
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('frontend/image/banner.jpg')}}" alt="frontend/image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row ">
                                <div class="col-lg-8  col-md-10 col-sm-12">
                                    <p
                                        class="d-inline-block border border-white rounded margin_left_home mt-5 fw-bold p-2 animated slideInDown">
                                        <a href="" class="typewrite text-white" data-period="2000" data-type='[ "Welcome to  A  &  A Consulting Limited", "Welcome to  A & A Consulting Limited","Welcome to  A & A Consulting Limited","Welcome to  A & A Consulting Limited" ]'>
                                            <span class="wrap"></span>
                                          </a>
                                        </p>
                                         <h1 class="display-1  animated slideInDown carasol_heading">Learn from the Past,  </h1>
                                         <h1 class="display-1  animated slideInDown carasol_heading">Plan for the Future, </h1>
                                         <h1 class="display-1 mb-4  animated slideInDown carasol_heading">Holding at a Higher Standard. </h1>
                                    <a href="about.html" target="_blank" class=" button_margin p-4 mt-5 mb-5 btn btn_primary animated slideInDown wow fadeUp btn_primary" data-wow-delay="0.1s"> Learn More</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->
<!-- associated start -->
<section class="mt-5 mb-5">
    <div class="container">
        <div class="row">
            <h1 class="associated_heading  wow fadeInUp"> We are associated with :</h1>
                    <div class=" col-lg-4  col-md-4 col-sm-5 col-4 wow fadeInUp associate_homeimg" data-wow-delay="0.1s">
                        <img class="img-fluid rounded " src="{{ asset('frontend/image/associated1.png')}}" alt="associatedimg" class="">
                     </div>
                     <div class=" col-lg-4 col-md-4 col-sm-4 col-4 wow fadeInUp ml-2 mr-2 associate_homeimg associate_hoverimg" data-wow-delay="0.1s">
                        <img class="img-fluid rounded" src="{{ asset('frontend/image/associated3.png')}}" alt="associatedimg" >
                     </div>
                     <div class=" col-lg-4 col-md-4 col-sm-4 col-4 wow fadeInUp associate_homeimg" data-wow-delay="0.1s">
                        <img class="img-fluid rounded" src="{{ asset('frontend/image/wosb-logo.webp')}}" alt="associatedimg">
                     </div>
                </div>
        </div>
    </div>
</section>
<!-- associated end -->
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 align-items-end mb-4">
                <div class=" col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded homeimage" src="{{ asset('frontend/image/aboutme.jpg')}}">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <p class="d-inline-block border rounded custom_text_primary fw-bold py-1 px-3">About Us</p>
                    <h1 class="display-5 mb-4">We want you to feel comfortable with our work .</h1>
                    <p class="mb-4">We want you to feel comfortable with oufadeInr work and our mission. Find out more of what we are all about.
                    </p>
                    <div class="border rounded p-4">
                        <nav>
                            <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                <button class="nav-link fw-bold active" id="nav-story-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-story" type="button" role="tab" aria-controls="nav-story"
                                    aria-selected="true">Story
                                </button>
                                <button class="nav-link fw-bold" id="nav-mission-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-mission" type="button" role="tab" aria-controls="nav-mission"
                                    aria-selected="false">Mission</button>
                                <button class="nav-link fw-bold" id="nav-vision-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-vision" type="button" role="tab" aria-controls="nav-vision"
                                    aria-selected="false">Vision</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-story" role="tabpanel"
                                aria-labelledby="nav-story-tab">
                                <p>A & A Consulting Limited is a full-service Information Technology company/firm that has local offices in Baltimore (Maryland, USA), Dhaka (Bangladesh), and the Dubai (United Arab Emirates). A & A Consulting concentrates and specialized on Application Development, End to End Cyber Security Solutions, Hospital Information Management System (HIMS), Infrastructure and Storage, Architecture, Consulting, Implementation, Products, Services, and I/T Related Training, Small and Medium Business Management Inventory ERP Solution, Web Site Development</p>
                            </div>
                            <div class="tab-pane fade" id="nav-mission" role="tabpanel"
                                aria-labelledby="nav-mission-tab">
                                <p>A & A is a customer oriented IT company who not sell end to end IT products and services but will stay with you as long as you need assistance after acquiring IT Products and Services from us. Our IT Staff have combined twenty (20) plus years experience working and providing solutions for some re-known establishments around the world. Our staff consists of experienced Architects, Developers, Engineers, Project Managers, and Technicians, who has been working in the industry over two decades.</p>

                            </div>
                            <div class="tab-pane fade" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">
                                <p>A & A provides strategic planning, technology integration system engineering, project management, and complete life-cycle support.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border  rounded p-5 mt-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class=" dedicted_part">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle custom_bg_primary">
                                    <i class="fa fa-times text-white"></i>
                                </div>
                                <div class="ps-3">
                                    <h4>More Experiences</h4>
                                    <span>To ensure that you are receiving the best in the business.</span>
                                </div>
                                <div class="border-end d-none d-lg-block"></div>
                            </div>
                            <div class="border-bottom mt-4 d-block d-lg-none"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.3s">
                        <div class="dedicted_part">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle custom_bg_primary">
                                    <i class="fa fa-users text-white"></i>
                                </div>
                                <div class="ps-3">
                                    <h4>Dedicated Team</h4>
                                    <span>We have partnered with numerous corporations.</span>
                                </div>
                                <div class="border-end d-none d-lg-block"></div>
                            </div>
                            <div class="border-bottom mt-4 d-block d-lg-none"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 wow fadeIn" data-wow-delay="0.5s">
                        <div class="dedicted_part">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle custom_bg_primary">
                                    <i class="fa fa-phone text-white"></i>
                                </div>
                                <div class="ps-3">
                                    <h4>24/7 Available</h4>
                                    <span>Find out if we have what you are looking for.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- Facts Start -->
    <div class="container-fluid facts my-5 py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-sm-3 col-lg-3 col-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-users fa-3x text-white mb-3  wow fadeInUp media_homeicon"></i>
                    <h1 class="display-4 text-white media_font" data-toggle="counter-up">54</h1>
                    <span class="  wow fadeInUp fs-5 text-white media_span ">Happy Clients</span>
                    <hr class="bg-white w-25 mx-auto mb-0">
                </div>
                <div class="col-sm-3 col-lg-3 col-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-check fa-3x text-white mb-3  wow fadeInUp media_homeicon"></i>
                    <h1 class="display-4 text-white media_font" data-toggle="counter-up">12</h1>
                    <span class="  wow fadeInUp fs-5 text-white media_span ">Projects Completed</span>
                    <hr class="bg-white w-25 mx-auto mb-0">
                </div>
                <div class="col-sm-3 col-lg-3 col-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-users-cog fa-3x text-white mb-3  wow fadeInUp media_homeicon"></i>
                    <h1 class="display-4 text-white media_font" data-toggle="counter-up">14</h1>
                    <span class="  wow fadeInUpfs-5 text-white media_span">Dedicated Staff</span>
                    <hr class="bg-white w-25 mx-auto mb-0">
                </div>
                <div class="col-sm-3 col-lg-3 col-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-award fa-3x text-white mb-3  wow fadeInUp media_homeicon"></i>
                    <h1 class="display-4 text-white media_font" data-toggle="counter-up">8</h1>
                    <span class=" wow fadeInUp fs-5 text-white media_span">Awards Achieved</span>
                    <hr class="bg-white w-25 mx-auto mb-0">
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->
    <!-- Features Start -->
    <div class="container-xxl feature py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="d-inline-block border rounded custom_text_primary fw-bold py-1 px-3">Why Choosing Us!</p>
                    <h1 class="display-5 mb-4">Few Reasons Why People Choosing Us!</h1>
                    <p class="mb-4">
                        A & A Consulting Limited started its mission to provide the best   of the breed solutions to our  clients with our experienced team of analysts, architects, developers, and engineers. We look at our client's needs and help them to find the right solution for their business.
                    </p>
                    <a class="btn btn_primary homebutton hover3" href="service.html" target="_blank">Explore More</a>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4 align-items-center">
                        <div class="col-md-6">
                            <div class="row g-4">
                                <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="feature-box  custom_border rounded p-4">
                                        <i class="fa fa-check fa-3x custom_text_primary mb-3"></i>
                                        <h4 class="mb-3">Fast Executions</h4>
                                        <p class="mb-3"> Find out if we have what you are looking for.</p>
                                        <a class="fw-bold" href="service.html" target="_blank">Read More <i
                                          class="fa fa-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="feature-box  custom_border rounded p-4">
                                        <i class="fa fa-check fa-3x custom_text_primary mb-3"></i>
                                        <h4 class="mb-3">Guide & Support</h4>
                                        <p class="mb-3">We have partnered with numerous corporations. With these partners, you will gain confidence in us.
                                            justo erat amet</p>
                                        <a class="fw-bold" href="service.html" target="_blank">Read More <i
                                                class="fa fa-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.7s">
                            <div class="feature-box custom_border  rounded p-4">
                                <i class="fa fa-check fa-3x custom_text_primary mb-3"></i>
                                <h4 class="mb-3">Previous Experiences</h4>
                                <p class="mb-3">With experiences like these, we can assure you that we are knowledgeable and will produce our best work.
                                    erat amet</p>
                                <a class="fw-bold " href="service.html" target="_blank">Read More <i class="fa fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->
    <!-- ervice Start -->
    <div class="container-xxl service py-5">
        <div class="container">
           <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" >
                    <p class="d-inline-block border rounded services_title fw-bold  hover3  homebutton custom_border">Our Services</p>
                    <h1 class="servies_heading mb-5 pt-5 pb-5">
                         A & A Enterprise Limited Brings You Awesome Financial ,State, Local Government Services For Business.
                        </h1>
                </div>
            </div>
           </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav nav-pills  d-flex justify-content-between w-100 h-100 me-4">
                        <button class="nav-link bg_primary_hover w-100 d-flex align-items-center text-start border p-4 mb-4 active"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <h5 class="m-0"><i class="fa fa-bars custom_text_primary me-3"></i>Advisory and Consulting</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <h5 class="m-0"><i class="fa fa-bars custom_text_primary me-3"></i>Cyber Security and Privacy</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <h5 class="m-0"><i class="fa fa-bars custom_text_primary me-3"></i>Infrastructure</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-0"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <h5 class="m-0"><i class="fa fa-bars custom_text_primary me-3"></i>Hospital Information Management System</h5>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" >
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100 traning_image" src="{{ asset('frontend/image/services1.jpg')}}"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-4"> Areas of Expertise</h3>
                                    <p class="mb-4">A & A Consulting Limited started its mission to provide the best   of the breed solutions to our  clients with our experienced team of analysts, architects, developers, and engineers. We look at our client's needs and help them to find the right solution for their business.

                                    </p>
                                    <p><i class="fa fa-check custom_text_primary me-3"></i>Application and Software Development</p>
                                    <p><i class="fa fa-check custom_text_primary me-3"></i>Data Protection</p>
                                    <p><i class="fa fa-check custom_text_primary me-3"></i>Cloud Offerings</p>
                                    <a href="service.html" target="_blank" class="btn btn_primary py-3 px-5 mt-3">Endpoint Management</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100 traning_image" src="{{ asset('frontend/image/cyber_security.jpg')}}"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-4">10 Years Of Experience In Cyber Security </h3>
                                    <p class="mb-4">With experiences like these, we can assure you that we are knowledgeable and will produce our best work.</p>
                                    <p><i class="fa fa-check custom_text_primary me-3"></i>Security Communications and Operations Management</p>
                                    <p><i class="fa fa-check custom_text_primary me-3"></i>Security Access Control and Cryptology</p>
                                    <p><i class="fa fa-check custom_text_primary me-3"></i>Security Incident, Continuity and Security Privacy</p>
                                    <a href="service.html" target="_blank" class="btn btn_primary py-3 px-5 mt-3">Cyber Security and Privacy</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100 traning_image" src="{{ asset('frontend/image/infrasture.jpg')}}"
                                            alt="services">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-4">4 Years Of Experience In Financial Support</h3>
                                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
                                        diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit
                                        clita duo justo erat amet.</p>
                                        <p><i class="fa fa-check custom_text_primary me-3"></i>Educational Institutions</p>
                                        <p><i class="fa fa-check custom_text_primary me-3"></i>Federal Government</p>
                                        <p><i class="fa fa-check custom_text_primary me-3"></i>Financial Institutions</p>
                                    <a href="service.html" target="_blank" class="btn btn_primary py-3 px-5 mt-3">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100 traning_image" src="{{ asset('frontend/image/hospitalmanagement.jpg')}}"
                                           alt="services_area">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-4">2 Years Of Experience In Hospital Information Management System</h3>
                                    <p class="mb-4">Recent Engagements:
                                        ~ Implemented our solution in ten hospitals in Bangladesh, Gambia, and most recently in Japan and Nepal.</p>
                                    <p><i class="fa fa-check custom_text_primary me-3"></i>ICU, HD, individual category setup</p>
                                    <p><i class="fa fa-check custom_text_primary me-3"></i>Bed/room/ward assignment</p>
                                    <p><i class="fa fa-check custom_text_primary me-3"></i>Blood bank</p>
                                    <a href="service.html" target="_blank" class="btn btn_primary py-3 px-5 mt-3">Pharmacy</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
    <!-- Projects Start -->
    <div class="container-xxl py-5 mt-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
                <p class="d-inline-block border mb-5 rounded custom_text_primary fw-bold hover3  homebutton services_title custom_border">Our Application Software</p>
                <!-- <h1 class="display-5 mb-5">OUR PRODUCT </h1> -->
            </div>
            <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.3s">
                <div class="project-item pe-5 pb-5">
                    <div class="project-img mb-3">
                        <img class="img-fluid rounded" src="{{ asset('frontend/image/project1.jpg')}}" alt="project1">
                        <a href="https://dataparkbd.com/" target="_blank"><i class="fa fa-link fa-3x custom_text_primary"></i></a>
                    </div>
                    <div class="project-title">
                        <h4 class="mb-0">Dataparkbd</h4>
                    </div>
                </div>
                <div class="project-item pe-5 pb-5">
                    <div class="project-img mb-3">
                        <img class="img-fluid rounded" src="{{ asset('frontend/image/project2.jpg')}}" alt="project2">
                        <a href="https://sprezzaturabd.com/" target="_blank"><i class="fa fa-link fa-3x custom_text_primary"></i></a>
                    </div>
                    <div class="project-title">
                        <h4 class="mb-0">Sprezzaturabd</h4>
                    </div>
                </div>
                <div class="project-item pe-5 pb-5">
                    <div class="project-img mb-3">
                        <img class="img-fluid rounded" src="{{ asset('frontend/image/aaconsulting.png')}}" alt="project4">
                        <a href="http://aaconsultingtech.com/" target="_blank"><i class="fa fa-link fa-3x custom_text_primary"></i></a>
                    </div>
                    <div class="project-title">
                        <h4 class="mb-0">A @ A Consulting </h4>
                    </div>
                </div>
                <div class="project-item pe-5 pb-5">
                    <div class="project-img mb-3">
                        <img class="img-fluid rounded" src="{{ asset('frontend/image/Project3.jpg')}}" alt="project1">
                        <a href="https://bonikbook.com/inventory/" target="_blank"><i class="fa fa-link fa-3x custom_text_primary"></i></a>
                    </div>
                    <div class="project-title">
                        <h4 class="mb-0">BonikBook</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="{{ asset('frontend/image/Project3.jpg')}}"></iframe>
      </div> --}}
     <!-- Testimonial Start -->
     <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Testimonial</p>
                <h1 class="display-5 mb-5">What Our Clients Say!</h1>
            </div>

                <div class="testimonial-item wow fadeInUp">
                    <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                        <div class="btn-square bg-white border rounded-circle">
                            <i class="fa fa-quote-right fa-2x text-primary"></i>
                        </div>
                        Whether you already have a website or are just starting to build your online presence, you can make a Business Profile that impresses customers and helps you stand out from the competition.
                    </div>
                    {{-- <img class="rounded-circle mb-3" src="{{ asset('frontend/image/testimonial1.jpeg')}}" alt=""> --}}
                    <h4>Mirza Faisal Ahmed</h4>
                    <span>Founder & CEO</span>
                </div>


        </div>
    </div>
    <!-- Testimonial End -->
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
    <script src="{{ asset('frontend/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/counterup/counterup.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script>
var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
    </script>
</body>
</html>
