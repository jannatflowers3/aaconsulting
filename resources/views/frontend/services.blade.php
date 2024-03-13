<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Services</title>
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
                <a href="{{ url('/aboutus') }}" class="nav-item nav-link ">About  Us</a>
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
                <a   href="{{ url('/services') }}" class="nav-item nav-link active">Services</a>
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
        <h1 class="display-3 mb-4 animated slideInDown text-white wow fadeInUp">Services</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item wow fadeInUp" ><a href="index.html">Home</a></li>
                <li class="breadcrumb-item text-white active wow fadeInUp" aria-current="page">Services</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->
    <!-- Service Start -->
    <div class="container-xxl service py-5 mt-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
                <p class="d-inline-block  rounded service_title fw-semi-bold">Our Services</p>
                <h1 class="display-5 mb-5 service_title2 wow fadeInUp">Incredible Financial Services For Business</h1>
            </div>
            <div class="row g-4 wow fadeInUp mt-5" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav nav-pills d-flex justify-content-between serivces_bg me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start border mb-4 active"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <h5 class="m-0"><i class="fa fa-bars custom_text_primary me-3"></i>Advisory and Consulting</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start border mb-4"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <h5 class="m-0"><i class="fa fa-bars custom_text_primary me-3"></i>Cyber Security and Privacy</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start border servicbutton_bg mb-4"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <h5 class="m-0"><i class="fa fa-bars custom_text_primary me-3 "></i>Hospital Information Management System</h5>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100 border rounded  ">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row justify-content-center g-4">
                                <div class="col-md-8">
                                    <h3 class="mb-4">A & A Consulting Limited  Advisory and Consulting.</h3>
                                    <h6 class="mb-4">A & A Enterprise Limited brings you experience in finance, health care, insurance, mortgage, federal, state, and local government as well as working with international clients.</h6>
                                    <p class="mb-4">We would like to work with you as your trusted advisor as well as teaming up with you to provide the best of the breed industry solutions. We offer you independent vendor analysis based on your requirements.

                                    </p>
                                    <p><i class="fa fa-check custom_text_primary me-3"></i> Cloud Consulting and Transformation</p>
                                    <p><i class="fa fa-check custom_text_primary me-3"></i>Business Information Security Office (BISO)</p>
                                    <p><i class="fa fa-check custom_text_primary me-3"></i>Chief Information Officer (CIO)</p>
                                    <!-- <a href="about.html" class="btn btn_primary py-3 px-5 mt-3">About Us</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4 justify-content-center">
                                <div class="col-md-8">
                                    <h3 class="mb-4">we have fifty years of experience in security and privacy</h3>
                                    <h6 class="mb-4">In addition, our consultants and engineers bring experience in industry privacy standards & compliance regulation that will fit with your environment.</h6>
                                    <p class="mb-4">Overall, we have fifty years of experience in security and privacy. Our architects and consultants can help you design, implement, and protect your environment starting from application, data, desktop, server, identity, and network.

                                    </p>
                                    <p><i class="fa fa-check custom_text_primary me-3"></i> Early threat detection</p>
                                    <p><i class="fa fa-check custom_text_primary me-3"></i>Forensic analysis</p>
                                    <p><i class="fa fa-check custom_text_primary me-3"></i>Reduce fraud and malware</p>
                                    <!-- <a href="about.html" class="btn btn_primary py-3 px-5 mt-3">About Us</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row justify-content-center g-4">
                                <div class="col-md-8">
                                    <h3 class="mb-4">A & A Consulting Limited  HIMS is a recognized software .</h3>
                                    <h6 class="mb-4">HIMS is a recognized software that specializes in delivering total health care solutions.</h6>
                                    <p class="mb-4">hospitals, day clinics, nursing homes, diagnostic centers, and pharmacies. It is also a comprehensive solution that addresses all the major functional areas designed to automate all the hospital management tasks and activities that are needed to maintain a hospital.
                                    </p>
                                    <p><i class="fa fa-check custom_text_primary me-3"></i>Blood bank</p>
                                    <p><i class="fa fa-check custom_text_primary me-3"></i>Patient billing</p>
                                    <p><i class="fa fa-check custom_text_primary me-3"></i>Pharmacy</p>
                                    <!-- <a href="" class="btn btn_primary py-3 px-5 mt-3">Read More</a> -->
                                </div>
                            </div>
                            </div>
                        </div>

                    </div>
                </div>
          </div>
        </div>
    </div>
    <!-- Service End -->
<!-- we offer start -->
<section class="offer department">
    <div class="container">
       <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" >
            <h1 class="display-5   services_offer">What We Have to Offer.</h1>
        </div>
        </div>
       </div>
        <div class="row">
            <div class="col-lg-6 wow fadeInUp"  data-wow-delay="0.1s">
                <div class="accordion" id="accordionExample wow fadeInUp" >
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button offer_accordian " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Application and Software Development
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <h5><strong>This service includes the following:</strong></h5>
                          <div class="offer_content">
                            <p><i class="fa fa-check custom_text_primary me-3"></i>  ~ Basic information about the Software Development Lifecycle (SDLC)</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i> ~ Identify basic processes and a basic vocabulary regarding SDLC</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i> ~ Identify sources for additional information</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i> ~ ~ Develop requirements</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i> ~ Implement new code or changes</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i> ~ Test system functionality</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i>  ~ Deploy new functionality</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i>   ~  ~ Waterfall (sequential).</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i>    ~ Waterfall (sequential).</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i>   ~   ~ Iterative (cyclical).</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i>   ~ ~ Testing traceability matrix.</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i>   ~ Test scripts.</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i>   ~ Regression, user acceptance, and integration testing.</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i>    This service is complete, consistent, prioritized, structured, and traceable.</p>

                          </div>
                         <div class="offer_content">
                            <h5><strong>Recent Engagements:</strong></h5>
                            <p>~ Developed hospital information management software and implemented them in ten hospitals in Bangladesh, Gambia, Japan, and Nepal</p>
                            <p> ~ Developed integrated access management software with smart card, retina scan, and finger printing technology to monitor access to a facility</p>

                         </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item pb-5">
                      <h2 class="accordion-header" id="headingtwo">
                        <button class="accordion-button offer_accordian " type="button" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-expanded="true" aria-controls="collapseOne">
                            Cyber Security
                        </button>
                      </h2>
                      <div id="collapsetwo" class="accordion-collapse collapse show" aria-labelledby="headingtwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <h5><strong>With the cyber security service, we can do the following:</strong></h5>
                          <div class="offer_content">
                            <p><i class="fa fa-check custom_text_primary me-3"></i>   ~ Early threat detection.</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i>~ Forensic analysis.</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i> ~ End to end cyber security solutions (Architecture, Planning, Implementation, and Training).</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i>~ Reduce fraud and malware</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i> ~ Identify and Access Management.</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i>  ~ Discover and harden valuable assets.</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i> ~ Develop more secure applications.</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i>   ~ Protect infrastructure against cyber attacks</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i>     ~ Guard against targeted cyber threats.</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i>  ~ Consulting on privacy, security, and compliance based on the client's requirements</p>
                         </div>
                         <div class="offer_content pb-5">
                            <h5><strong>Recent Engagements::</strong></h5>
                            <p class="pb-4">~ At a large insurance company, we identified vulnerabilities and threats, including risk assessment and ranked their severity. This resulted in A & A providing the insurance company with an analysis of the findings that consisted of detailed recommendations for remediation.</p>
                         </div>
                        </div>
                      </div>
                    </div>

                  </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-6 rounded wow fadeInUp" data-wow-delay="0.1s">
                <div class="accordion accordion-flush rounded" id="three">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed offer_accordian offer_accordian2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                          Hospital Information Management System
                        </button>
                      </h2>
                      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#three">
                        <div  class="accordion-body">  <h5><strong>Also known as HIMS; helps with...</strong></h5>
                          <div class="offer_content">
                            <p><i class="fa fa-check custom_text_primary me-3"></i>  ~ Bed/room/ward assignment.</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i> ~ Blood bank.</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i> ~ Employee designation and information with password setup.</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i>~ Hospital services setup based on the business model.</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i> ~ HR payroll.</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i> ~ ICU, HD, etc. individual category setup.</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i> ~ Develop more secure applications.</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i> ~ Identify treatment based on a patient's illness.</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i>  ~ IPD/OPD- patient registrations.</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i>   ~ Manage hospital departments.</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i>   ~ PACS/imaging.</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i>  ~ Pathology laboratory requirement.</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i>    ~ Patient billing.</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i>   ~ Pharmacy.</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i>   ~ Physician category by designation and/or other criteria.</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i> ~ Supplier and vendor listing.</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i> ~ Transportation (ambulance).</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i>  ~ Unit measurement setup.</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i>  ~ User access control.</p>
                          <div class="offer_content">
                            <h5><strong>
                              Recent Engagements:</strong></h5>
                            <p >~ Implemented our solution in ten hospitals in Bangladesh, Gambia, and most recently in Japan and Nepal.</p>
                         </div>
                        </div>
                         </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed offer_accordian offer_accordian2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                          Security Operation Center
                        </button>
                      </h2>
                      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#three">
                        <div class="accordion-body"><h5><strong> Abbreviated as SOC, the Security Operation Center can do the following:</strong></h5>
                          <div class="offer_content">
                            <p><i class="fa fa-check custom_text_primary me-3"></i>  ~ Early cyber threat detection and forensic analysis.</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i>~ Reduce fraud and malware.</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i> ~ Identify and access management.</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i>~ Discover and harden valuable assets.</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i> ~ Masking.</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i> ~ Consulting on privacy, security, and compliance.</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i> ~ Develop more secure applications.</p>

                          </div>
                          <div class="offer_content">
                            <h5><strong> Recent Engagements:</strong></h5>
                            <p >  ~ At our NOC, our security analysts identified the vulnerabilities and cyber threats which included risk assessment and severity of the cyber threats. We provided a weekly analysis of the findings along with detailed recommendations for remediation to our clients..</p>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed offer_accordian offer_accordian2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                          SOCS, CERTS, CRIST
                        </button>
                      </h2>
                      <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#three">
                        <div class="accordion-body">
                          <div class="offer_content">
                            <h5><strong> Security Operations Center (SOC):</strong></h5>
                            <p >  - a centralized unit that deals with security issues on an organizational and technical level.</p>
                            </div>
                            <div class="offer_content">
                              <h5><strong> Cybersecurity SOC (CSOC):</strong></h5>
                              <p > - consolidates under one organization (incident monitoring, detection, response, coordination, computer network defense tools engineering, operation and maintenance).</p>
                              </div>
                              <div class="offer_content">
                                <h5><strong> Computer Emergency Response Team (CERT):</strong></h5>
                                <p > - expert groups that handle computer security incidents; may evolve into a CSOC
                                  ~ also known as computer emergency readiness team and computer security incident response team (CSIRT).</p>
                                </div>
                                <div class="offer_content">
                                  <h5><strong>CSIRT:</strong></h5>
                                  <p > - most technically accurate term that is used in reference to the team of personnel assembled to find and respond to intrusions.</p>
                                  </div>

                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flushfour">
                        <button class="accordion-button collapsed offer_accordian offer_accordian2" type="button" data-bs-toggle="collapse" data-bs-target="#flush_four" aria-expanded="false" aria-controls="flush-collapseThree">
                          Staff Augmentation
                        </button>
                      </h2>
                      <div id="flush_four" class="accordion-collapse collapse" aria-labelledby="flushfour" data-bs-parent="#three">
                        <div class="accordion-body"> <h5><strong>The Staff Augmentation service can provide the following:</strong></h5>
                          <div class="offer_content">
                            <p><i class="fa fa-check custom_text_primary me-3"></i>  ~ Initial requirements gathered based on an audit requirement.</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i>~ Architecture, design, and analysis for enterprise management, security, and storage management projects.</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i> ~ Administrative and engineering support services.</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i>~ Application design and development.</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i> ~ Program and project management.</p>

                          </div>
                          <div class="offer_content">
                            <h5><strong> Recent Engagements:</strong></h5>
                            <p >  ~ For one of the insurance companies, A & A provided an IT architect to design and develop day-to-day adminstration for their identity and access management environment..</p>
                            <p > ~ For a financial institution, an A & A endpoint management engineer was able to maintain, monitor, and apply patch for the client's multi-vendor operating system environment. The duties in this engagement included daily support of applications and administration of the server infrastructure.</p>
                            </div>


                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush_five">
                        <button class="accordion-button collapsed offer_accordian offer_accordian2" type="button" data-bs-toggle="collapse" data-bs-target="#flushfive">
                          Auditing and Compliance
                        </button>
                      </h2>
                      <div id="flushfive" class="accordion-collapse collapse " aria-labelledby="flush_five">
                        <div class="accordion-body"><h5><strong> The Auditing and Compliance service can provide the following:</strong></h5>
                          <div class="offer_content">
                            <p><i class="fa fa-check custom_text_primary me-3"></i> ~ CCPA.</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i>~ DOD 8500.x (Cat I, II, and III)</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i>~ FISMA</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i>~ ~ GDPR</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i>~ HIPAA</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i>~ NIST 800 X</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i>~  PCI-DSS</p>
                          <div class="offer_content">
                            <h5><strong>Recent Engagements:</strong></h5>
                            <p >~ At a large metropolitan hospital, we identified vulnerabilities and threats which included risk assessment and ranked their severity. We then provided an analysis of the findings along with detailed recommendations for remediation.</p>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                        <button class="accordion-button collapsed offer_accordian offer_accordian2" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                          Security and Privacy
                        </button>
                      </h2>
                      <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                        <div class="accordion-body">
                          <!-- <strong>  Recent Engagements:</strong>  -->
                          <h5><strong>Also known as HIMS; helps with...</strong></h5>
                          ~ For a large insurance company client, we conducted an assessment based on the DOD 8500.X, PCI and NIST 800-53
                          ~ For a foreign government agency client, we conducted an assessment based on the South African King's Law
                          ~ For a multiple tourism industry and large restaurant chain client, we conducted an assessment based on the GDPR and PCI.
                          <div class="offer_content">
                            <p >A & A Enterprise Limited can help you maintain the compliance of your environment based on the current Industry Compliance and Standards. We can evaluate your current audit report against industry standard regulations.
                              We have expertise and familiarity in the following: CIS, CCPA, CMS, DOD 8500.X, DISA, FIPS 140-2 and 199, GDPR, HIPPA, ISO 2700X, ITIL, NIST 800-53 and 800-171, OWASP Top 10, PCI, SAS 70, South African King's Law, and SOX.</p>
                         </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                        <button class="accordion-button collapsed offer_accordian offer_accordian2" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                          Disaster Recovery Services
                        </button>
                      </h2>
                      <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse " aria-labelledby="panelsStayOpen-headingThree">
                        <div class="accordion-body"><h5><strong> Also known as DR Services, Disaster Recovery Services can provide the following:</strong></h5>
                          <div class="offer_content">
                            <p><i class="fa fa-check custom_text_primary me-3"></i> ~ Architect and create planning for your data center.</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i>~ Business impact and risk analysis.</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i> ~ Implementation and recovery strategy.</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i>~ Support and build DR plans.</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i> ~ Test and Validate DR plans</p>
                          </div>
                          <div class="offer_content">
                            <h5><strong>Recent Engagements:</strong></h5>
                            <p >~ We have created disaster recovery plans and tested them for airlines, insurance companies, IT firms, and financial institutions.</p>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="panel_four">
                        <button class="accordion-button collapsed offer_accordian offer_accordian2" type="button" data-bs-toggle="collapse" data-bs-target="#data_four">
                          Data Center Management
                        </button>
                      </h2>
                      <div id="data_four" class="accordion-collapse collapse " aria-labelledby="panel_four">
                        <div class="accordion-body"><h5><strong> The Data Center Management service can provide the following::</strong></h5>
                          <div class="offer_content">
                            <p><i class="fa fa-check custom_text_primary me-3"></i> ~ Forensic analysis.</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i> ~ Reduce fraud and malware.</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i>~ Identify and access management.</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i>  ~ Discover and harden valuable assets.</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i> ~ Protect infrastructure(s) against attacks.</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i> ~ Guard against targeted threats.</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i>~ Consulting on privacy, security, and compliance.</p>
                          </div>
                          <div class="offer_content">
                            <h5><strong>Recent Engagements:</strong></h5>
                            <p >~ At a large metropolitan hospital, we identified vulnerabilities and threats which included risk assessment and ranked their severity. We then provided an analysis of the findings along with detailed recommendations for remediation.</p>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="panel_five">
                        <button class="accordion-button collapsed offer_accordian offer_accordian2" type="button" data-bs-toggle="collapse" data-bs-target="#panelfive">
                          Assessments
                        </button>
                      </h2>
                      <div id="panelfive" class="accordion-collapse collapse " aria-labelledby="panel_five">
                        <div class="accordion-body"><h5><strong> The Assessment Service can provide the following:</strong></h5>
                          <div class="offer_content">
                            <p><i class="fa fa-check custom_text_primary me-3"></i> ~ Enterprise Risk Assessment via ISO, OWASP Top 10, PCI, and NIST 800-171.</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i>~ Identity and Access Management.</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i>~ Infrastructure Security</p>
                            <p><i class="fa fa-check custom_text_primary me-3"></i>  ~ Third Party Assessment </p>
                          <div class="offer_content">
                            <h5><strong>Recent Engagements:</strong></h5>
                            <p >~ At a large metropolitan hospital, we identified vulnerabilities and threats which included risk assessment and ranked their severity. We then provided an analysis of the findings along with detailed recommendations for remediation.</p>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="panel_six">
                      <button class="accordion-button collapsed offer_accordian offer_accordian2" type="button" data-bs-toggle="collapse" data-bs-target="#panelsix">
                        Architecture
                      </button>
                    </h2>
                    <div id="panelsix" class="accordion-collapse collapse " aria-labelledby="panel_six">
                      <div class="accordion-body"><h5><strong> The Architecture service can provide the following:</strong></h5>
                        <div class="offer_content">
                          <p><i class="fa fa-check custom_text_primary me-3"></i> ~ Enterprise Architecture.</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i>~ Security Architecture.</p>
                          <p><i class="fa fa-check custom_text_primary me-3"></i>~ Storage.</p>
                        <div class="offer_content">
                          <h5><strong>Recent Engagements:</strong></h5>
                          <p >~ At a large metropolitan hospital, we identified vulnerabilities and threats which included risk assessment and ranked their severity. We then provided an analysis of the findings along with detailed recommendations for remediation.</p>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- offer services start -->
<section class="offer_services">
  <div class="container-xxl service py-5 mt-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block  rounded service_title fw-semi-bold">More Offers...</p>
        </div>
        <div class="row g-4 wow fadeInUp mt-5" data-wow-delay="0.3s">
            <div class="col-lg-4">
                <div class="nav nav-pills d-flex justify-content-between serivces_bg me-4">
                    <button class="nav-link w-100 d-flex align-items-center text-start border mb-4 active"
                        data-bs-toggle="pill" data-bs-target="#bottom_tab1" type="button">
                        <h5 class="m-0"><i class="fa fa-bars custom_text_primary me-3"></i> Business and Technology Advisory</h5>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start border mb-4"
                        data-bs-toggle="pill" data-bs-target="#bottom_tab2" type="button">
                        <h5 class="m-0"><i class="fa fa-bars custom_text_primary me-3"></i>Consulting</h5>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start border servicbutton_bg mb-4"
                        data-bs-toggle="pill" data-bs-target="#bottom_tab3" type="button">
                        <h5 class="m-0"><i class="fa fa-bars custom_text_primary me-3 "></i>Managed Services</h5>
                    </button>
                    <button class="nav-link w-100 d-flex align-items-center text-start border servicbutton_bg mb-4"
                    data-bs-toggle="pill" data-bs-target="#bottom_tab4" type="button">
                    <h5 class="m-0"><i class="fa fa-bars custom_text_primary me-3 "></i> Program Management</h5>
                </button>
                </div>
            </div>
            <div class="col-lg-8  border rounded text-white  more_offer p-4">
                <div class="tab-content w-100">
                    <div class="tab-pane fade show active text-white" id="bottom_tab1">
                        <div class="row justify-content-center g-4">
                          <div class="col-md-8">
                            <h6 class="mb-4 text-white">The Business and Technology Advisory service can provide the following:.</h6>
                            </p>
                            <p><i class="fa fa-check  me-3 "></i> ~ Business Information Security Office (BISO).</p>
                            <p><i class="fa fa-check  me-3"></i>~ Chief Information Security Officer (CISO))</p>
                            <p><i class="fa fa-check me-3"></i>Chief Information Officer (CIO)</p>
                            <p><i class="fa fa-check  me-3"></i>Chief Information Officer (CIO)</p>

                        </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="bottom_tab2">
                        <div class="row g-4 justify-content-center">
                          <div class="row justify-content-center g-4">
                            <div class="col-md-8">
                              <h6 class="mb-4 text-white">The Consulting service can provide the following:</h6>
                              </p>
                              <p><i class="fa fa-check me-3"></i>~ Cloud Consulting and Transformation.</p>
                              <p><i class="fa fa-check  me-3"></i>~ Cyber Security Consulting.</p>
                              <p><i class="fa fa-check me-3"></i> ~ Digital Transformation.</p>
                              <p><i class="fa fa-check me-3"></i>~ End to End IoT Consulting.</p>
                          </div>
                          </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="bottom_tab3">
                      <div class="row justify-content-center g-4">
                        <div class="col-md-8">
                          <h6 class="mb-4 text-white">The Managed Services service can provide the following:</h6>
                          </p>
                          <p><i class="fa fa-check  me-3"></i>~ BCRS .</p>
                          <p><i class="fa fa-check me-3"></i>~ Data Center.</p>
                          <p><i class="fa fa-check  me-3"></i> ~ Endpoint Management.</p>
                      </div>
                    </div>
                    </div>
                    <div class="tab-pane fade" id="bottom_tab4">
                      <div class="row justify-content-center g-4">
                        <div class="col-md-8">
                          <h6 class="mb-4 text-white">The Program Management service can provide the following:</h6>
                          </p>
                          <p><i class="fa fa-check me-3"></i>~ Agile Methodology .</p>
                          <p><i class="fa fa-check me-3"></i>~ Project Management Officer (program manager, project manager, and solution delivery
                            lead).</p>
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
