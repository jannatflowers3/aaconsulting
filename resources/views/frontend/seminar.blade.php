<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Seminar</title>
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
                            <a href="{{ url('/seminar') }}" class="dropdown-item active">Seminar</a>
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
        <h1 class="display-3 mb-4 animated slideInDown text-white">Seminar</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Seminar</li>
            </ol>
        </nav>
    </div>
</div>
<!-- seminar2 start -->
     <section class="training_start department mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mx-auto wow fadeInUp " data-wow-delay="0.1s" style="max-width: 600px;">
                        <h4 class="d-inline-block  rounded service_title fw-semi-bold seminarh5 text-white border-white">Importance of public awareness in cyber security</h4>
                        <!-- <p class="display-5 mb-5 service_title2 text-white">Seminar on Cybersecurity posture and policy guidelines in Bangladesh</p> -->
                    </div>
                </div>
            </div>
            <div class="row g-4 align-items-end mb-4 mt-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FAnAConsultingLtd%2Fvideos%2F2203729326685416%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>

                      </div>
                <div class="col-lg-6 wow fadeInUp  Forescout2_right" data-wow-delay="0.3s">
                    <p class="d-inline-block border rounded text-white py-1 px-3 fw-bold text-uppercase"> Seminar on Cybersecurity
                    </p>
                    <h1 class="aboutus_titile mb-4 text-white">Seminar on Cybersecurity posture and policy guidelines in Bangladesh.
                    </h1>
                    <p class="text-white">The term ‘Cybersecurity posture and policy guidelines’ is considered a ‘living document’, and it is mainly the practice of protecting systems, networks, and programs from digital attacks. Bangladesh’s cyber security policies became well known internationally in 2016 when the country’s central bank was the subject of one of the largest digital bank heists to date, where about US$101 million was stolen from the Bangladesh Bank’s account with the New York Federal Reserve Bank by hackers (The Daily Star, 2016).
                    <a href="https://dataparkbd.com/events/" class="txt-bold pl-3">read more</a>
                    </p>

                </div>
            </div>
        </div>
     </section>
     <section class="network department mt-5  mb-5 text-white">
        <div class="container">
            <div class="row g-4 align-items-end">
                <div class="col-lg-6 wow fadeInUp seminar_content " data-wow-delay="0.3s">
                    <p class="d-inline-block border rounded text-primary  py-1 px-3 fw-bold text-uppercase text-white">Cyber Security Trends and Career
                    </p>
                    <h1 class="aboutus_titile mb-4 text-white">Discussion on how to Improve Cyber Security Posture for your Organization by Making them more Efficient, Resilient and Secure & Discussion on Career in Cyber Security.</h1>
                    If you are interested in attending this seminar, please complete the registration form
                    <div class="seminar_regi seminar_rgi2">
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSfxH8-bK5knTUzshpG8wt2iOOKXUG9q4hsM5nHY6XZ-HFlPQQ/viewform?fbclid=IwAR0oLAvuBeN3M_S8FowNwX9PhxSv7wPZsrZCNzoCHvMaMBqIYpxNAY6D9-I&pli=1" target="_blank">
                            Registration Now</a>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp Forescout2_left seminarimg" data-wow-delay="0.1s">
                  <img src="{{ asset('frontend/image/seminar/5.jpg')}}" alt="product_videoimg" class="img-fluid rounded">
                  </div>
            </div>
        </div>
     </section>
     <section class="network department mt-5  mb-5 text-white">
        <div class="container">
            <div class="row g-4 align-items-end">
                <div class="col-lg-6 wow fadeInUp Forescout2_left seminarimg" data-wow-delay="0.1s">
                  <img src="{{ asset('frontend/image/seminar/3.jpg')}}" alt="product_videoimg" class="img-fluid rounded">
                  </div>
                  <div class="col-lg-6 wow fadeInUp  " data-wow-delay="0.3s">
                    <p class="d-inline-block border rounded text-primary  py-1 px-3 fw-bold text-uppercase text-white">ENTERPRISE SYSTEM
                    </p>
                    <h1 class="aboutus_titile mb-4 text-white">A Session to to learn how to secure the enterprise system.</h1>
                    <P>Enterprise cybersecurity protects company applications, data, and infrastructure from online threats. It protects local networks, cloud assets, and remote devices and aims to bolster enterprise security by countering hackers. By doing so, it minimizes the risk of data breaches.</P>
                    <!-- <div class="seminar_regi">
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSfxH8-bK5knTUzshpG8wt2iOOKXUG9q4hsM5nHY6XZ-HFlPQQ/viewform?fbclid=IwAR0oLAvuBeN3M_S8FowNwX9PhxSv7wPZsrZCNzoCHvMaMBqIYpxNAY6D9-I&pli=1" target="_blank">
                            Registration Now</a>
                    </div> -->
                </div>
            </div>
        </div>
     </section>
     <!-- endpoint start -->
     <section class="network department mt-5  mb-5 text-white">
        <div class="container">
            <div class="row g-4 align-items-end">
                <div class="col-lg-6 wow fadeInUp seminar_content " data-wow-delay="0.3s">
                    <p class="d-inline-block border rounded text-primary  py-1 px-3 fw-bold text-uppercase text-white">Endpoint Security
                    </p>
                    <h1 class="aboutus_titile mb-4 text-white">BASIS Standing Committee on Digital Security is going to organize an Awareness Seminar on “𝗘𝗻𝗱𝗽𝗼𝗶𝗻𝘁 𝗦𝗲𝗰𝘂𝗿𝗶𝘁𝘆” .</h1>
                    <p>An Awareness Seminar on "Endpoint Security" organized on Thursday, November 24, 2022 at BASIS.
                       <strong class="txt-bold"> Mr. Shahzeb Husain </strong> was the key speaker of this seminar. Along with that, Ms. Rezwana Khan, representative from advisory standing committee moderated the seminar. A significant number of BASIS member companies were also present at the seminar. Participants actively participated in the question-answer session and clarified their concerns.</p>
                       If you are interested in attending this seminar, please complete this EOI form
                       <div class="seminar_regi seminar_rgi2">

                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSekOfJtotKRwSsQ-0eSPs9MRnOamc6xlz-EYC0rY0KM9t6YGg/viewform" target="_blank">
                            Registration Now</a>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp Forescout2_left seminarimg" data-wow-delay="0.1s">
                  <img src="{{ asset('frontend/image/seminar/1.jpg')}}" alt="product_videoimg" class="img-fluid rounded">
                  </div>
            </div>
        </div>
     </section>
  <!-- email security start -->
  <section class="network department mt-5  mb-5 text-white">
    <div class="container">
        <div class="row g-4 align-items-end">
            <div class="col-lg-6 wow fadeInUp seminar_content " data-wow-delay="0.3s">
                <p class="d-inline-block border rounded text-primary  py-1 px-3 fw-bold text-uppercase text-white">Email Security
                </p>
                <h1 class="aboutus_titile mb-4 text-white"> Email Security and Social Media Awarness.</h1>
             <p>on July 28, 2022, a seminar on Email Security and Social Media Awarness was held at BASIS Auditorium. The seminar was started by BASIS Director Mr. Mostafizur Rahman Sohail, moderated by Mr.<strong class="txt-bold">Shahzeb Ibn Hossain </strong>  and Mr. Nurul Islam Chowdhury and Mr. Tanveer Hasan Joha were present as distinguished speakers. About 50 company representatives were present in the seminar.
            </p>
            </div>
            <div class="col-lg-6 wow fadeInUp Forescout2_left seminarimg" data-wow-delay="0.1s">
              <img src="{{ asset('frontend/image/seminar/2.jpg')}}" alt="product_videoimg" class="img-fluid rounded">
              </div>
        </div>
    </div>
 </section>
 <section class="network department mt-5  mb-5 text-white">
    <div class="container">
        <div class="row g-4 align-items-end">
            <div class="col-lg-6 wow fadeInUp Forescout2_left seminarimg" data-wow-delay="0.1s">
              <img src="{{ asset('frontend/image/seminar/4.jpg')}}" alt="product_videoimg" class="img-fluid rounded">
              </div>
              <div class="col-lg-6 wow fadeInUp seminar_content " data-wow-delay="0.3s">
                <p class="d-inline-block border rounded text-primary  py-1 px-3 fw-bold text-uppercase text-white">Endpoint Security
                </p>
                <h1 class="aboutus_titile mb-4 text-white"> An Awareness Seminar on "Endpoint Security".</h1>
             <p>An Awareness Seminar on "Endpoint Security" organized on Thursday, November 24, 2022 at BASIS. <strong class="txt-bold">Shahzeb Husain </strong> was the key speaker of this seminar. Along with that, Ms. Rezwana Khan, representative from advisory standing committee moderated the seminar. A significant number of BASIS member companies were also present at the seminar. Participants actively participated in the question-answer session and clarified their concerns.</p>
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
