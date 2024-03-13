<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Training</title>
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
    <link href="{{ asset('frontend/css/design.css') }}" rel="stylesheet">
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
                    <a href="{{url('/services')}}" class="nav-item nav-link">Services</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Solutions</a>
                        <div class="dropdown-menu border-light m-0">

                            <a href="{{ url('/partner') }}" class="dropdown-item">Partners</a>
                            <a href="{{ url('/products') }}" class="dropdown-item">Products</a>
                            <a href="{{ url('/previous-experience') }}" class="dropdown-item">Previous Experience</a>
                            <a href="{{ url('/seminar') }}" class="dropdown-item">Seminar</a>
                            <a href="{{ url('/training ') }}" class="dropdown-item active">Trainings</a>


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
        <h1 class="display-3 mb-4 animated slideInDown text-white">Trainings</h1>
        <p class="text-white mb-5 wow fadeInUp">Check back time to time to receive the latest updates</p>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Trainings</li>
            </ol>
        </nav>
    </div>
</div>
    <!-- training Start -->
<section>
    <div class="container">
<div class="row justify-content-center mt-5">
    <div class="col-lg-8">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block  rounded service_title fw-bold">Our Trainings</p>
        </div>
    </div>
</div>
    </div>
</section>
<!-- basis training -->
<section class="training_start mt-5 mb-5">
    <div class="container">
        <div class="row g-4 align-items-end mb-4 mt-5">
            <div class="col-lg-6 wow fadeInUp " data-wow-delay="0.3s">
                <p class="d-inline-block border rounded text-primary  py-1 px-3 fw-bold text-uppercase"> Cyber Training.
                </p>
                <h1 class="aboutus_titile mb-4">BASIS has organized a Cyber  trains an organization's employees on how to protect the organization.
                </h1>
                <p>Cyber ​​security trains an organization's employees on how to protect the organization. In addition, the panelists provided ideas on how an organization can gain informational and financial benefits through cyber technology. Representatives of 30 companies attended the seminar.
                </p>
                <p> Digital Security Standing Committee was held at BASIS Auditorium.  <strong class="text-dark"> Shahzeb Ibn Hussain, Managing Director of Data Park BD Limited,</strong>  read the main article in the seminar. Apart from this, BugsBD Limited Managing Director Delwar Alam gave a speech.</p>
            </div>
            <!-- <marquee behavior="scroll" direction="right">Here is some scrolling text... left to right!</marquee> -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/vmt7OIoiAcc"  class="rounded border"  title="YouTube video player" frameborder="0" allow="accelerometer; ; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
 </section>
 <!-- basis 3 start -->
<!-- training start -->
<section class="trainingimg pt-5 pb-5">
    <div class="container">
        <div class="row mt-5 mb-5 justify-content-center">
            <div class="col-lg-8">
                <div class="traning_title ">
                    <h2 class="text-center text-white wow fadeInUp"> Training on "Endpoint Security"</h2>
                    <p class="text-white  pt-3 pb-3 wow fadeInUp ">
                      A significant number of BASIS member companies were also present at the seminar. Participants actively participated in the question-answer session and clarified their concerns.
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-4 wow fadeInUp">
                <img src="{{ asset('frontend/image/training/traning1.jpg')}}" class="traning_image img-fluid" alt="the back of random person">
          </div>
           <div class="col-lg-4 col-4 wow fadeInUp">
            <img src="{{ asset('frontend/image/training/training2.jpg')}}" class="traning_image img-fluid" alt="an eagle">

           </div>
           <div class="col-lg-4 col-4 wow fadeInUp">
            <img src="{{ asset('frontend/image/training/training3.jpg')}}"  class="traning_image img-fluid" alt="a cup of something to drink, probably some tea" >
           </div>
        </div>
        <!-- cyber security traingin start -->
        <div class="row mt-5 mb-5 justify-content-center">
            <div class="col-lg-8">
                <div class="traning_title ">
                    <h2 class="text-center text-white wow fadeInUp"> Training on "Cyber Security"</h2>
                    <p class="text-white  pt-3 pb-3 wow fadeInUp ">
                        Cyber security is the practice of defending computers, servers, mobile devices, electronic systems, networks, and data from malicious attacks. It's also known as information technology security or electronic information security.
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-4">
                <img src="{{ asset('frontend/image/training/cybersecurity.jpg')}}" class="traning_image img-fluid" alt="the back of random person">
          </div>
           <div class="col-lg-4 col-4">
            <img src="{{ asset('frontend/image/training/cybersecurity2.jpg')}}" class="traning_image img-fluid" alt="an eagle">

           </div>
           <div class="col-lg-4 col-4">
            <img src="{{ asset('frontend/image/training/cybersecurity3.jpg')}}"  class="traning_image img-fluid" alt="a cup of something to drink, probably some tea" >
           </div>
        </div>
    </div>
</section>
 <section class="training_start  department mt-5 mb-5">
    <div class="container">
        <div class="row g-4 align-items-end mb-4 ">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/vmt7OIoiAcc"  class="rounded" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="col-lg-6 wow fadeInUp Forescout2_right" data-wow-delay="0.3s">
                <p class="d-inline-block border rounded text-primary  py-1 px-3 fw-bold text-uppercase text-white wow fadeInUp">IT Security Training
                </p>
                <h1 class="aboutus_titile mb-4 text-white wow fadeInUp">A session to learn how to secure the Enterprise System.</h1>
                <p class="mb-4 text-white">Cybersecurity is a growing concern in today's digital world. Protecting company’s data and sensitive information has never been more important. Data breaches and cyber-attacks are on the rise, costing individuals and businesses millions of dollars every year. Don't wait until it's too late. Invest in your cybersecurity knowledge and skills today.
                </p>
            </div>
        </div>
    </div>
 </section>
<!-- seminar list starts  -->
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <h2 class="text-center m-5 border rounded p-5 wow fadeInUp">Security Training</h2>
                <div class="seminer_content wow fadeInUp">
                    <div class="warpper">
                        <input class="radio" id="one" name="group" type="radio" checked>
                        <input class="radio" id="two" name="group" type="radio">
                        <input class="radio" id="three" name="group" type="radio">
                        <input class="radio" id="four" name="group" type="radio">
                        <input class="radio" id="five" name="group" type="radio">
                        <input class="radio" id="six" name="group" type="radio">
                        <div class="tabs">
                        <label class="tab" id="one-tab" for="one">Overview of PCI DSS</label>
                        <label class="tab" id="two-tab" for="two">Overview and Requirements of Cyber Security</label>
                      <label class="tab" id="three-tab" for="three">Asset Management, HR and Environmental Security</label>
                         <label class="tab" id="four-tab" for="four">Security Communications and Operations Management</label>
                        <label class="tab" id="five-tab" for="five">Security Access Control and Cryptology</label>
                        <label class="tab" id="six-tab" for="six">Security Incident, Continuity and Security Privacy</label>

                    </div>
                    <div class="tabs">

                    </div>
                        <div class="panels">
                        <div class="panel" id="one-panel">
                          <div class="panel-title"></div>
                          <h6 class="text-dark txt-bold"> Requirements and Security Assessment include:</h6>
                          <div class="offer_content">
                            <p><i class="fa fa-check custom_text_primary me-3"></i> ~ Building and maintaining a secure network.</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i>~ Protecting cardholder data .</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i> ~ Maintaining a vulnerability management program.</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i>   ~ Implementing strong access control measures</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i>~ Regularly monitoring and testing networ .ks</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i> ~ Maintaining an information security policy .</p>

                          </div>
                        </div>
                        <div class="panel" id="two-panel">
                          <div class="panel-title"></div>
                          <h6 class="text-dark txt-bold"> Cyber Security Based on ISO: </h6>
                          <div class="offer_content">
                            <p><i class="fa fa-check custom_text_primary me-3"></i> ~ Introduction as to what is information security and security in general.</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i>~ Security Policy .</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i>~ Risk Assessment and Treatment </p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i>   ~ Implementing strong access control measures .</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i>~ and more (find out more in the tabs below)</p>
                          </div>
                        </div>
                        <div class="panel" id="three-panel">
                          <div class="panel-title"></div>
                          <h6 class="text-dark txt-bold">  <strong class="txt-bold text-dark">  Management: </strong>responsibility for assets and information classification
                             <p><strong class="txt-bold text-dark"> Human Resources Security: </strong>prior to employment, during employment, and termination or change of employment
                                <strong class="txt-bold text-dark">  Physical and Environmental Security:</strong> secure areas and equipment security.</p>
                            </div>
                        <div class="panel" id="four-panel">
                            <div class="panel-title"></div>
                            <h6 class="text-dark txt-bold"> This consists of: </h6>
                            <div class="offer_content">
                              <p><i class="fa fa-check custom_text_primary me-3"></i>  ~ Operational procedures and responsibilities.</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i>~ Third party service delivery management .</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i>~ System planning and acceptance </p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i>  ~ Protection against malicious ad mobile code.</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i> ~ Back-up</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i>~ Network security management</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i>  ~ Media handling</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i> ~ Exchange of information</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i> ~ Electronic commerce services</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i>   ~ Monitoring.</p>

                        </div>
                        </div>
                          <div class="panel" id="five-panel">
                            <div class="panel-title"></div>
                            <h6 class="text-dark txt-bold"> This consists of: </h6>
                            <div class="offer_content">
                              <p><i class="fa fa-check custom_text_primary me-3"></i>  ~ Business requirement for access control .</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i>~ User access management and responsibilities .</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i>~ Network access control. </p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i>  ~ Operating system access control.</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i> ~ Application and information access control</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i>~ Mobile computing and teleworking</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i>  ~ Security requirements of information systems</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i>  ~ Cryptographic controls.</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i>   ~ Security of system files.</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i>    ~ Security in development and support processes.</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i>    ~ Technical vulnerability management .</p>
                          </div>
                          </div>
                          <div class="panel" id="six-panel">
                            <div class="panel-title"></div>
                            <h6 class="text-dark txt-bold"> This consists of: </h6>
                            <div class="offer_content">
                              <p><i class="fa fa-check custom_text_primary me-3"></i> ~ Information Security Incident Management
                              <br>  ~ Reporting information security events and weaknesses
                                <br>~ Management of information security incidents and improvements.</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i>~ Business Continuity Management
                               <br> ~ Information security aspects of business continuity management .</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i>~ Compliance
                              <br>  ~ Compliance with legal requirements
                              <br>  ~ Compliance with security policies and standards, and technical
                                                            <br>   compliance
                                  ~ Information systems audit considerations </p>

                        </div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
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
    <script src="{{ asset('frontend/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/wow/wow.min.js') }}"></script>
    <!-- Template Javascript -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>




