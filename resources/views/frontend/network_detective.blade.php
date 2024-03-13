<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Network Detective</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
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
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <!-- <h1 class="display-3 mb-4 animated slideInDown text-white">Cyber Security</h1> -->
            <h1 class="mb-4 animated slideInDown text-white  wow fadeUp"> Get A Bigger View of IT.  </h1>
                <p class="text-white  wow fadeInUp"> Every day IT Departments are finding new uses for Network Detective Pro, and getting more value out of IT.</p>
        </div>
    </div>
    <!-- Page Header End -->

<section class="vulscan">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="vulscan_title text-center  wow fadeIn">
                    <h1> <strong class="text-dark   wow fadeUp"> Network</strong> Assessment  </h1>
                        <p class=" vulscan_title_p  wow fadeInUp">  Network Assessment FOR IT DEPARTMENTS</p>
                        <p class="wow fadeInUp">
                            Network Detective Pro is the industry-leading IT assessment tool used by thousands of IT professionals to gain greater visibility into all parts of their IT environment:
                        </p>
                </div>
            </div>
    </div>
    <!-- 2nd row start -->
    <div class="row pt-5 pb-5">
        <div class="col-lg-6 ">
            <img src="{{ asset('frontend/image/cyber_product/2.jpg')}}" class="  wow fadeInUp img-fluid network_detect rounded " alt="cyber_img">
             <h3 class=" wow fadeInUp pt-5 ">
                Network Detective Pro helps MSPs make more money by demonstrating the value of your services to new and existing clients.
             </h3>
             <li class="wow ">Wow prospects with jaw-dropping risk reports</li>
             <li>Discover the chaos before you commit to a new engagement.</li>
             <li>Find new billable users and assets added to any network.</li>
             <li>Identify equipment that needs paid upgrades.</li>
             <li>Show your clients why you’re worth every penny you charge.</li>
        </div>
        <div class="col-lg-6 wow fadeInUp">

            <img src="{{ asset('frontend/image/cyber_product/4.jpg')}}" class=" wow fadeInUp rounded img-fluid network_detect " alt="cyber_img">
            <h3 class=" wow fadeInUp pt-5 ">
                Network Detective Pro gives you the enhanced network visibility you need to discover, resolve and report on every issue and risk.
             </h3>
             <li>Get greater control over your IT environment ​.</li>
             <li>Trouble-shoot issues faster.</li>
             <li>Keep focused on most important risks & issues.</li>
             <li>Get expert guidance when and where you need it.</li>
             <li>Generate the reports you need with the click of a mouse button.</li>
        </div>
    </div>
</div>
</section>
<!-- network detactive end -->
<section class="vulscan_2nd department ">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12">
                <div class="vulscan_title text-center">
                    <h2 class="text-white pt-3 pb-4  wow fadeInUp"> Feast or Famine: The Data Dilemma For Every IT Professional .</h2>
                        <p class="  text-white  wow fadeInUp">
                           Whether you manage your own IT environment or do it for others, you need to solve the data dilemma:</p>
                        </div>
                        <div class="network_title  wow fadeInUp">
                            <li class="text-white">Too little information and you’ll miss critical risks and defects that can take you down.</li>
                            <li class="text-white">Too much information and you’ll drown in a torrent of meaningless data that burns resources without solving anything.</li>
                   <p class="text-white pt-4">
                     Network Detective Pro’s unique architecture automates data collection through a variety of built-in tools – non-intrusive network data collectors, lightweight discovery agents, cloud data — and does the heavy lifting to turn disorganized data into meaningful – and actionable – output.</p>

                        </div>
            </div>
    </div>
</div>
</section>
<!-- Vulernability Scan start -->
<section>
    <div class="container">
        <div class="row justify-content-center  wow fadeInUp" data-wow-delay="0.1s">
            <h1>Network Assessment</h1>
            <div class="col-lg-6">
                <div class="vulscan_left rounded">
                    <h4 class="vulscan_features text-white  wow fadeInUp"> FEATURES</h4>
                    <li><strong>Non-Instrusive Data Collectors.</strong>
                    <p>Ability to collect data from the systems on a network without any agents or
                        probes. Can be performed from technician laptop, or any windows system on
                        the network. </p></li>
                    <li><strong>Automated/Scheduled Scans and Reporting   .</strong>
                        <p>Scans can be scheduled on a recurring basis so that up to date data is available
                            via the InDoc portal. Reports can also be automatically generated on a recurring
                            schedule and emailed or saved to folder.   </p> </li>
                        <li><strong>Proprietary Data Analyzer.</strong>
                            <p class="pb-4">Detection of the most important IT ussues based on industry best practices.  </p> </li>
                            <li><strong>Configurable Risk Scoring .</strong>
                                <p class="pb-4">Ability to customize which IT issues are reported and how important they are
                                    presented in an assessment. </p> </li>
                             <li><strong>Brandable and Customizable Technical Reports.</strong>
                                    <p class="pb-4">Brand-consistent reports describing endpoint-level IT issues.  </p> </li>
                             <li><strong>High-Level Executive Reports .</strong>
                                        <p class="pb-3">Brand-consistent reports describing business-level IT issues. </p> </li>
                            <li><strong>Network Security Assessments  .</strong>
                                  <p>A top-to-bottom look at a company's IT infrastructure by deploying a data
                                                collector  </p> </li>
                            <li><strong>Azure AD and Infrastructure Assessments .</strong>
                                                <p class="pb-4">A top-to-bottom look at a company's Microsoft IT infrastructure  </p> </li>
                           <li ><strong>Dark Web Compromised Credential Assessment .</strong>
                                                    <p>Ability to detect compromised credentials requiring immediate attention and
                                                        infer immediate remediation</p> </li>
                           <li><strong>Automated Management Plans.</strong>
                                                        <p class="pb-3">Automatically gather data from different networks to understand all
                                                            environment issues by issue score, severity and probability </p> </li>
                          <li><strong>Full Network Documentation.</strong>
                                                            <p class="pb-3">Understand every network-connected asset in a business' environment</p> </li>
                          <li><strong>Layer 2/3 Network Diagrams.</strong>
                                                                <p class="pb-5">List all major network devices and understand how they are connected on a
                                                                    network. </p> </li>
                          <li ><strong>Workflow Integrations with PSA software .</strong>
                                                                        <p>Automatically create support tickets from scan data for your helpdesk team to
                                                                            resolve. </p> </li>

                         <li ><strong>Scalable Multi-tenant Architecture  .</strong>
                                    <p class="pb-3">Exexute IT assessments for any number of sites. </p> </li>
                          <li ><strong>Online Data Explorer Thru Brandable Portal  .</strong>
                                        <p class="pb-4">Web-based access to everything the IT team needs to efficiently service their
                                            clients wheter in the office or off-site. </p> </li>
                                        <li ><strong>Automated Deployment with VSA .</strong>
                                            <p class="pb-4">Automate the deployment of network and local data collectors as part of your
                                                RMM deployment strategy.  </p> </li>
                                            <li ><strong>Exportable reports and documentation to IT Glue  .</strong>
                                                <p>Automate the creation and maintenance of on-premises and cloud data
                                                    documentation. </p> </li>


                </div>
            </div>
            <div class="col-lg-6">
                <div class="vulscan_right rounded">
                    <h4 class="vulscan_features text-white"> BENEFITS</h4>
                    <li><strong>Non-Instrusive Data Collectors.</strong>
                        <p class="pb-3">Data collection can be performed on prospect network without the current IT company finding out.
                            (MSP only benefit.) </p></li>
                        <li><strong>Automated/Scheduled Scans and Reporting   .</strong>
                            <p class="pb-5">Saves the technician time and updated data is available when needed. </p> </li>
                            <li><strong>Proprietary Data Analyzer.</strong>
                                <p>Technicians spend less time reviewing information and gain time to plan IT projects and justify IT
                                    spend to business stakeholders.  </p> </li>
                                <li><strong>Configurable Risk Scoring .</strong>
                                    <p>All IT teams have their own matrix of how to score and prioritize issues for different clients, and
                                        gain back time in customizing this matrix to be reflected at a global or site level
                                        . </p> </li>
                                 <li><strong>Brandable and Customizable Technical Reports.</strong>
                                        <p>Technicians spend less time composing reports and can guarantee presentation consistency.  </p> </li>
                                 <li><strong>High-Level Executive Reports .</strong>
                                            <p>Technicians spend less time translating technical details for non-technical audiences. </p> </li>
                                <li><strong>Network Security Assessments  .</strong>
                                      <p>Technicians spend less time gathering information and gain time to plan IT projects and justify IT
                                        spend to business stakeholders. </p> </li>
                                <li><strong>Azure AD and Infrastructure Assessments .</strong>
                                                    <p>Technicians spend less time gathering information and gain time to plan IT projects and justify IT
                                                        spend to business stakeholders.  </p> </li>
                               <li ><strong>Dark Web Compromised Credential Assessment .</strong>
                                                        <p>Technicians spend less time reviewing information and gain time to plan IT projects and justify IT
                                                            spend to business stakeholders.</p> </li>
                               <li><strong>Automated Management Plans.</strong>
                                                            <p>Reviewing and executing recommendations from automated management plans means less data
                                                                gathering time for the technicians and faster efficiency gains for the business.  </p> </li>
                              <li><strong>Full Network Documentation.</strong>
                                                                <p>Minimize technician time on site visits and physically checking for every asset on a network.</p> </li>
                              <li><strong>Layer 2/3 Network Diagrams.</strong>
                                                                    <p>Network diagrams are an essential part of troubleshooting support requests and automating the
                                                                        maintenance of a site's network diagram means a technician can spend more time helping a
                                                                        business be productive when these scenarios come up. </p> </li>
                              <li ><strong>Workflow Integrations with PSA software .</strong>
                                                                            <p>Technicians spend less time on issue detection and gain time for issue remediation, delivering
                                                                                better productivity to clients. </p> </li>

                             <li ><strong>Scalable Multi-tenant Architecture  .</strong>
                                        <p>One installation for multiple sites saves technicians time in managing disparate installations. </p> </li>
                              <li ><strong>Online Data Explorer Thru Brandable Portal  .</strong>
                                            <p>Technician teams save time by accessing their IT assessment data in a centralized web location
                                                instead of collecting scan data from individual computers and appliancees. </p> </li>
                                            <li ><strong>Automated Deployment with VSA .</strong>
                                                <p>Technicians onboard new customer data collection without incurring a time cost, allowing them to
                                                    immediately reap benefits of data collection for IT assessments.  </p> </li>
                                                <li ><strong>Exportable reports and documentation to IT Glue  .</strong>
                                                    <p>Eliminate the reviewing and updating of stale documentation to enable technicians to run a
                                                        helpdesk more efficiently. </pA> </li>


                </div>
            </div>
        </div>
    </div>
</section>
<!-- access data start -->
<section class="access_data mt-5 pt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 ">
                <div class="overlay pt-5 mt-5">
                    <h1 class="pt-5 text-white text-center pb-4 wow fadeInUp">   Assess Your Data Any Time From Anywhere.   </h2>
                        <p class="text-white text-center pb-3 wow fadeInUp">No matter where you are, or when you need it, you’ll have access to all the most current assessment data via the Network Detective Pro Portal.  The portal is totally flexible to support multiple network environments and locations, and gives you online access to:</p>

                        <!-- <img src="{{ asset('frontend/image/cyber_product/3.jpg')}}" class=" rounded img-fluid homeimage " alt="cyber_img"> -->
                        <li  class="text-white  wow fadeInUp">Administrative / Operational Reports​.</li>
                     <li  class="text-white  wow fadeInUp">End-user Access.</li>
                     <li  class="text-white  wow fadeInUp">Robust Data Explorers.</li>
                     <li  class="text-white  wow fadeInUp">Interactive Raw Data Sets.</li>
                     <li  class="text-white  wow fadeInUp">Drill-down IT Risk Assessment dashboards</li>
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
