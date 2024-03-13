<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cyber Security</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
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
                    <a href="{{ url('/aboutus') }}" class="nav-item nav-link">About  Us</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Offering</a>
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
    <div class="container-fluid page-header  wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <!-- <h1 class="display-3 mb-4 animated slideInDown text-white">Cyber Security</h1> -->
            <h1 class="mb-4 animated slideInDown text-white ">Importance of Cyber Security
                Standards for an Organization.  </h1>

        </div>
    </div>
    <!-- Page Header End -->
<!-- vulscan start -->

<section class="training_start  zero_trustbg  mb-5 pt-5 pb-5 ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="vulscan_title text-center  wow fadeInUp">
                    <h1> <strong class="text-dark  wow fadeInUp mt-4 pt-5 text-white"> Cyber</strong class="text-white">Security  </h1>
                        <!-- <p class=" vulscan_title_p  pb-5 wow fadeInUp text-white"> BASIS Digital Security Standing Committee
                            Monthly Seminar Series Presents.</p>  -->

                        </div>
        </div>
        <div class="row g-4 align-items-end mb-4 text-white ">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <img src="{{ asset('frontend/image/cyber_product/security_standerd.jpg')}}" class=" rounded img-fluid homeimage " alt="vpentest">
            </div>
            <div class="col-lg-6 wow fadeInUp Forescout2_right" data-wow-delay="0.3s">
               <h4 class="text-white">What is Cyber Security?  </h4>
                <p class="mb-4 text-white">Cybersecurity, on the other hand, is concerned with protecting digital assets –
                    everything from networks to hardware and information that is processed, stored
                    and transported by internetworked information systems.
                </p>
                <P>Additionally, concepts such as nation-state-sponsored attacks and advanced
                    persistent threats (ATPs) belong almost exclusively to cybersecurity. It is helpful to
                    think to think of Cybersecurity as a component of Information Security.</P>
            </div>
        </div>
    </div>
 </section>
<!-- industry solves -->
<section class="training_start  department mt-5 mb-5 pb-5">
    <div class="container">
        <div class="row justify-content-center text-white ">
          <div class="col-lg-10">
            <h1  class="text-white text-center pt-5 wow fadeInUp pb-5">BASIS Standing Committee on Digital Security
                Monthly Seminar Series .</h1>
            <div class="row g-4 mt-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class=" dedicted_part pentest_dedicat datatheft wow fadeInUp">
                        <div class="d-flex">
                            <div class="ps-3 wow fadeInUp">
                                    <li> Cybersecurity Impact and Challenge</li>
                                    <li> Email Security and Social Media Awareness </li>
                                    <li> Digital Security Act </li>
                                    <li>Endpoint Security </li>
                                   <li>Importance of Cyber Security Standards for an
                                    Organization</li>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="dedicted_part pentest_dedicat datatheft">
                        <div class="d-flex">
                            <div class="ps-3">
                                <li>  ISMS Awareness for General Employee </li>
                                    <li> Identity & Access Management </li>
                                    <li> Zero Trust </li>
                                    <li> Data Security </li>
                                   <li>IT Security for Software Development</li>
                                   <li>Business Continuity and Recovery Services (BCRS) </li>
                                   <li> Network Security</li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- organization need information security start -->
            <div class="row g-4 mt-5">
               <h1 class="text-white pt-5 pb-2 wow fadeInUp">Why Organization Need Information Security ?</h1>
                    <div class="zero_trust text-white wow fadeInUp">
                        <li>To run well run machine</li>
                        <li> Organization need to Establish Security Requirements or Guideline? </li>
                        <li> Assessing Organization Current Security Risks </li>
                        <li>Selecting Best Security Privacy Controls fit for your Organization </li>
                       <li>Set a Goal or a Starting Point for Information Security…</li>
                       <li>Developing Security Guidelines Based on your Business.…</li>
                    </div>
            </div>
          </div>
        </div>
    </div>
 </section>
 <!-- types of information Technology -->
 <section class="malware mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="text-center mt-5 mb-5 wow fadeInDown">Key Types of Information Technology Security </h1>
            <p class="text-center mb-5 wow fadeInUp">Although IT security and information security sound similar, they do refer to different types of security. Information security refers to the processes and tools designed to protect sensitive business information from invasion, whereas IT security refers to securing digital data, through computer network security
            .</p>
            <div class="col-lg-6 col-md-6 wow fadeInUp pt-5" data-wow-delay="0.1s">
                <img src="{{ asset('frontend/image/cyber_product/types_infomationtech.png')}}" class=" rounded img-fluid homeimage " alt="vpentest">
            </div>
            <div class="col-lg-6 col-md-6 wow fadeInUp">
                 <p>  <strong class="text-dark">Network security : </strong> Network security is used to prevent unauthorized or malicious users from getting inside your network.</p>
                 <p><strong class="text-dark">Internet security :</strong>Internet security involves the protection of information that is sent and received in browsers, as well as network security involving web-based applications.</p>
                   <p> <strong class="text-dark">Endpoint security :</strong>Endpoint security provides protection at the device level. Devices that may be secured by endpoint security include cell phones, tablets, laptops, and desktop computers.</p>
                   <p> <strong class="text-dark"> Cloud security :  </strong>Cloud security can help secure the usage of software-as-a-service (SaaS) applications and the public cloud.</p></li>
                   <p><strong class="text-dark"> Application security : </strong> With application security, applications are specifically coded at the time of their creation to be as secure as possible, to help ensure they are not vulnerable to attacks.</p>
                </div>

        </div>
    </div>
 </section>
 <!-- GRC START -->
 <section class="training_start  department  mb-5 pt-5 pb-5 ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="vulscan_title text-center  wow fadeInUp">
                    <h1 class="text-center text-white mt-5 mb-5">Governance, Risk & Compliance    </h1>
                    <p class="text-center text-white mb-5">Governance, Risk, and Compliance (GRC) is a structured way to align IT with business goals while managing risks and meeting all industry and government regulations. It includes tools and processes to unify an organization  and risk management with its technological innovation and adoption. Companies use GRC to achieve organizational goals reliably, remove uncertainty, and meet compliance requirements.</p>
                        </div>
        </div>
        <div class="row g-4 align-items-end mb-4 text-white ">
            <div class="col-lg-6 wow fadeInUp Forescout2_right" data-wow-delay="0.3s">
               <h3 class="text-white">Compliance, Governance, Security and Privacy Standards.</h3>
                <p class="mb-4 text-white"> <strong> Information Security Guidelines:</strong>
                    • CoBit - (Control Objectives for Information and
                    Related Technologies)
                    • CMMC - (Cybersecurity Maturity Model Certification)
                    • FISMA - (Federal Information Security Management
                    Act)
                    • ISACA - (Information Systems Audit and Control
                    Association)
                    • ITIL - (Information Technology Infrastructure Library)
                </p>
            </div>



            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <img src="{{ asset('frontend/image/cyber_product/grc.png')}}" class=" rounded img-fluid homeimage " alt="vpentest">
            </div>
            <div class="row g-4 mt-5 justify-content-center">
                <h1 class="text-white pt-5 pb-2 wow fadeInUp">Information Security Standards for  Bangladesh ICT Industry  ?</h1>
               <div class="col-lg-10 col-md-8">
               <div class="col-lg-10 wow fadeIn" data-wow-delay="0.5s">
                <div class="dedicted_part pentest_dedicat datatheft">
                    <div class="d-flex">
                        <div class="ps-3">
                            <li> Bangladesh Bank ICT Security Guidelines</li>
                            <li> Bangladesh Digital Security Act 2018 </li>
                            <li>  ISO 2700X - (International Standard Organization) </li>
                            <li>PCI –DSS – (Payment Card Industry – Data Security Standard)   </li>
                        </div>
                    </div>
                </div>
            </div>
             </div>
        </div>
    </div>
 </section>
 <!-- information security -->
<section class=" cybersecurity mt-5 pt-5 pb-5 cyberStandingbg"  >
    <div class="container">
        <div class="row justify-content-center  ">
            <div class="col-lg-9">
                <h1 class="pt-5 text-white text-center pb-4 wow fadeInUp">What is the Information Security?</h2>
                    <h5 class="text-white fadeInUp text-center pb-4 wow fadeInUp">Information security deals with information, regardless of its
                        format – it encompasses paper documents, digital and intellectual
                        property in people’s minds, and verbal or visual communications.
                         </h5>
                         <h4 class="text-white pt-5 pb-2 wow fadeInUp">Information Security Standards for   Bangladesh ICT Industry</h4>
                    <div class="zero_trust text-white wow fadeInUp">
                     <li>Bangladesh Bank ICT Security Guidelines  </li>
                    <li>Bangladesh Digital Security Act 2018</li>
                    <li>ISO 2700X - (International Standard Organization) </li>
                    <li>   PCI –DSS – (Payment Card Industry – Data Security Standard) </li>
                    </div>
                    <div class="information_technology text-white mt-5 wow fadeInUp">
                        <h1 class="text-white ">Information Technology Information Security Policy  </h1>
                    <li>Information Security Policy Document  </li>
                    <li> Review of the Information Security Policy</li>
                    </div>


            </div>
        </div>
    </div>
</section>

 <section class="malware">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10   wow fadeInUp">
                <h1 class="text-center mt-5 mb-5 ">Information Technology Compliance with  Legal Requirements </h1>
                <li>Identification of Applicable Legislation</li>
                <li>Intellectual Property Rights (IPR)</li>
                <li>Protection of Organizational Records</li>
                <li> Data Protection and Privacy of Personal Information </li>
                <li>Prevention of misuse of Information Processing Facilities </li>
                <li>Regulation of Cryptographic Controls  </li>
                </div>

        </div>
    </div>
 </section>
<!-- compliance security start -->
<section class="cybersecurity  cyberStandingbg mt-5 mb-5 pb-5">
    <div class="container">
          <!-- Compliance with Security Policies and Standards -->
          <div class="row  justify-content-center text-center">
            <h1 class="text-white pt-5 pb-2 wow fadeInUp text-center">Compliance with Security Policies and Standards?</h1>
                 <div class="zero_trust text-white wow fadeInUp ">
                     <li>  Technical Compliance Checking </li>
                                 <li>  Information Systems Audit Considerations </li>
                                 <li> Information Systems Audit Controls </li>
                                 <li>  Protection of Information Systems Audit Tools </li>
                 </div>
              </div>
            <div class="row g-4 mt-5">
                <h1 class="text-white text-center pt-5 wow fadeInUp">Organization of Information Security   </h1>
                <p class="text-center text-white pb-5 wow fadeInUp">Information security management is the process of protecting an organization's data and assets against potential threats. One of the primary goals of these processes is to protect data confidentiality, integrity, and availability</p>

                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <h2 class="text-white">INTERNAL ORGANIZATION</h2>
                    <div class=" dedicted_part pentest_dedicat datatheft wow fadeInUp">
                        <div class="d-flex">
                            <div class="ps-3 wow fadeInUp">
                                    <li>  Management Commitment to Information Security</li>
                                    <li> Information Security Co-ordination </li>
                                    <li> Allocation of information security responsibilities </li>
                                    <li>Authorization process for information processing facilities</li>
                                   <li>Contact with authorities </li>
                                   <li> Contact with special interest groups </li>
                                   <li>  Independent review of information security </li>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h2 class="text-white">EXTERNAL PARTIES</h2>
                    <div class="dedicted_part pentest_dedicat datatheft wow fadeInUp">
                        <div class="d-flex">
                            <div class="ps-3">
                                <li>  Identification of Risks Related to Internal and External Parties</li>
                                    <li>  Addressing Security when Dealing with Customers </li>
                                    <li> Addressing Security in Third Party Agreements </li>
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
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+88 02 4881 2159</p>
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
                &copy; <a class="" href="#">  2024 A & A Consulting Limited - All Rights Reserved</a>
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
    <!-- Template Javascript -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>
