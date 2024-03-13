<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>About Us</title>
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
                    <a href="{{ url('/aboutus') }}" class="nav-item active nav-link">About  Us</a>
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
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown text-white">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- About Start -->
    <div class="about_us">
        <div class="container">
            <div class="row g-4 align-items-end mb-4">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <p class="d-inline-block border rounded text-primary  py-1 px-3 fw-bold text-uppercase">About Our Company</p>
                    <h1 class="aboutus_titile mb-4">A & A Consulting Limited is a full-service information technology company</h1>
                    <p class="mb-4">A & A Consulting Limited is a full-service information technology company/firm that has local offices in Baltimore (Maryland, USA), Dhaka (Bangladesh), and the Dubai (United Arab Emirates). A & A concentrates on Application Development, End to End Cyber Security, Hospital Information Management System (HIMS), Infrastructure and Storage, Architecture, Consulting, Implementation, Products, Services, and I/T Related Training.
                        A & A is a customer oriented IT company who not sell end to end IT products and services but will stay with you as long as you need assistance after acquiring IT Products and Services from us. Our IT Staff have combined twenty (20) plus years experience working and providing solutions for some re-known establishments around the world. Our staff consists of experienced Architects, Developers, Engineers, Project Managers, and Technicians, who has been working in the industry over two decades.
                        A & A provides strategic planning, technology integration system engineering, project management, and complete life-cycle support.
                    </p>
                </div>
                <!-- <marquee behavior="scroll" direction="right">Here is some scrolling text... left to right!</marquee> -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded" src="{{ asset('frontend/image/infrasture.jpg')}}">
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- experts area Start -->
    <section>
        <div class="area_expert pt-5 pb-5  wow fadeIn" data-wow-delay="0.1s" >
            <div class="container">
               <div class="row justify-content-center">
                <div class="col-lg-10 ">
                    <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
                        <p class="d-inline-block  rounded custom_text_primary experties_heading">Areas of Expertise</p>
                        <h1 class="expert_area_title py-3 mb-5">A & A Consulting Limited started its mission to provide the best   of the breed solutions to our  clients with our experienced team of analysts, architects, developers, and engineers. We look at our client's needs and help them to find the right solution for their business.
                        </h1>
                    </div>
                </div>
               </div>
               <!-- 2nd row start -->
               <div class="row ">
                <div class="col-lg-3 col-6">
                    <div class="card mycarad  wow fadeInUp" >
                        <div class="experties_card text-center                                                                                                          ">
                            <i class="fa-solid fa-pen-nib " ></i>
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">Application and Software Development</h5>
                          <p class="card-text">Software engineers apply engineering principles to build software and systems to solve problems..    <a href="service.html" class="">Read More...</a></p>
                        </div>
                      </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="card mycarad wow fadeInUp" >
                        <div class="experties_card text-center                                                                                                          ">
                            <i class="fa-solid fa-calendar-days"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Application and Data Security</h5>
                            <p class="card-text">Data security is the practice of protecting digital information from unauthorized access, corruption its entire lifecycle.
                                <a href="service.html" class="">Read More...</a>
                            </p>
                        </div>
                      </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="card mycarad wow fadeInUp" >
                        <div class="experties_card text-center                                                                                                          ">
                            <i class="fa-solid fa-file"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Business Continuity and Recovery Services</h5>
                            <p class="card-text">Business continuity is a business's level of readiness to maintain critical functions after an emergency.......
                                <a href="service.html" class="">Read More...</a>
                            </p>
                        </div>
                      </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="card mycarad wow fadeInUp" >
                        <div class="experties_card text-center                                                                                                          ">
                            <i class="fa-solid fa-bomb"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Cloud Solutions</h5>
                            <p class="card-text">Cloud Solutions is a Strategic Help service specializing in cloud strategies, planning, migrations, and on-going support.........
                                ........
                                <a href="service.html" class="">Read More...</a>
                            </p>
                        </div>
                      </div>
                </div>
            </div>
            <!-- row end -->
             <!-- 2nd row start -->
             <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="card mycarad wow fadeInUp" >
                        <div class="experties_card text-center                                                                                                          ">
                            <i class="fa-solid fa-pen-nib"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Cyber Secuirty and Privacy</h5>
                          <p class="card-text">Cybersecurity and Privacy Awareness ... As services are becoming highly integrated and interconnected, vulnerabilities created by data exchanges are more common, ...
                                <a href="service.html" class="">Read More...</a>
                            </p>
                        </div>
                      </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="card mycarad wow fadeInUp" >
                        <div class="experties_card text-center                                                                                                          ">
                            <i class="fa-solid fa-calendar-days"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">   Data Center Management</h5>
                          <p class="card-text">Data Center Management Software That's Easy to Use and Integrates with What You Have. Automate and Simplify Data Center Management with the World's Best DCIM Software....
                                <a href="service.html" class="">Read More...</a>
                            </p>
                        </div>
                      </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="card mycarad wow fadeInUp" >
                        <div class="experties_card text-center                                                                                                          ">
                            <i class="fa-solid fa-cloud-arrow-up"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">   Disaster Recovery</h5>
                          <p class="card-text">Disaster recovery is the process by which an organization anticipates and addresses technology-related disasters. IT systems in any company can go down unexpectedly due to........
                                <a href="service.html" class="">Read More...</a>
                            </p>
                        </div>
                      </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="card mycarad wow fadeInUp" >
                        <div class="experties_card text-center                                                                                                          ">
                            <i class="fa-solid fa-layer-group"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">   Email Security</h5>
                          <p class="card-text">Email security is the practice of protecting email accounts and communications from unauthorized access, loss, or compromise. Organizations can enhance their email security.....
                                <a href="service.html" class="">Read More...</a>
                            </p>
                        </div>
                      </div>
                </div>
            </div>
            <!-- 2nd row end -->
              <!-- 3rd row start -->
              <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="card mycarad wow fadeInUp" >
                        <div class="experties_card text-center                                                                                                          ">
                            <i class="fa-brands fa-windows"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Enterprise Process and Content Management</h5>
                          <p class="card-text">Enterprise content management is a set of defined processes, strategies and tools that allows a business to effectively obtain, organize, store and deliver  ...
                                <a href="service.html" class="">Read More...</a>
                            </p>
                        </div>
                      </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="card mycarad wow fadeInUp" >
                        <div class="experties_card text-center                                                                                                          ">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">   Hospital Information Management System (HIMS) Capability</h5>
                          <p class="card-text">Hospital Information Management System (HIMS) by Hidden Brains introduces accuracy and precision in .......
                                <a href="service.html" class="">Read More...</a>
                            </p>
                        </div>
                      </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="card mycarad wow fadeInUp" >
                        <div class="experties_card text-center                                                                                                          ">
                            <i class="fa-solid fa-city"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"> IT Strategic Planning</h5>
                          <p class="card-text">IT strategic planning is the game plan of how your organization will reach its objectives and ensures all decisions have a guiding north star. While the process an organization ..........
                                <a href="service.html" class="">Read More...</a>
                            </p>
                        </div>
                      </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="card mycarad wow fadeInUp" >
                        <div class="experties_card text-center                                                                                                          ">
                            <i class="fa-solid fa-landmark"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"> Managed Services</h5>
                          <p class="card-text">Managed services is the practice of outsourcing the responsibility for maintaining, and anticipating need for, a range of processes and functions, ostensibly for the purpose of improved   ....
                                <a href="service.html" class="">Read More...</a>
                            </p>
                        </div>
                      </div>
                </div>
            </div>
            <!-- 3rd row end -->
             <!-- 4th row start -->
             <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="card mycarad wow fadeInUp" >
                        <div class="experties_card text-center                                                                                                          ">
                            <i class="fa-solid fa-network-wired"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Security Operation Center (SOC)</h5>
                          <p class="card-text">Security Operation Center (SOC) is a centralized function within an organization employing people, processes, and technology to continuously  ......
                                <a href="service.html" class="">Read More...</a>
                            </p>
                        </div>
                      </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="card mycarad wow fadeInUp" >
                        <div class="experties_card text-center                                                                                                          ">
                            <i class="fa-solid fa-mountain-sun"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">   Staff Augmentation</h5>
                          <p class="card-text">Staff augmentation is a type of outsourcing service, where a software company provides their engineers in the form of external hire, usually on a Time & Materials contract basis. .......
                                <a href="service.html" class="">Read More...</a>
                            </p>
                        </div>
                      </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="card mycarad wow fadeInUp" >
                        <div class="experties_card text-center                                                                                                          ">
                            <i class="fa-solid fa-school"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"> System and Storage Management</h5>
                          <p class="card-text">Storage management refers to the software and processes that improve the performance of data storage resources. It may include network virtualization..........
                                <a href="service.html" class="">Read More...</a>
                            </p>
                        </div>
                      </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="card mycarad wow fadeInUp" >
                        <div class="experties_card text-center                                                                                                          ">
                            <i class="fa-solid fa-network-wired"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"> Virtualization   </h5>
                          <p class="card-text">Virtualization is technology that you can use to create virtual representations of servers, storage, networks, and other physical machines. Virtual software mimics the functions of.....
                                <a href="service.html" class="">Read More...</a>
                            </p>
                        </div>
                      </div>
                </div>
            </div>
            <!-- 4th row end -->
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
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>
    <!-- JavaScript Libraries -->
    <script src="{{ asset('frontend/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/counterup/counterup.min.js') }}"></script>
    <!-- Template Javascript -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>
