<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cyber Strategy</title>
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
                    <a href="{{ url('/') }}" class="nav-item nav-link active btn_navbutton_2">Home</a>
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
            <h1 class="mb-4 animated slideInDown text-white ">Building a First-Class
                Cybersecurity Strategy.  </h1>

        </div>
    </div>
    <!-- Page Header End -->
<!-- vulscan start -->
<section class="vulscan ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="vulscan_title text-center  wow fadeInUp">
                    <h1> <strong class="text-dark  wow fadeInDown mt-4"> Cybersecurity</strong>Strategy  </h1>
                        <p class=" vulscan_title_p  pt-4 pb-5 wow fadeInUp">  Constructing a Cybersecurity Triangle.</p>
                        <p class="vpentest_p  wow fadeInDown"> A comprehensive cybersecurity plan can be visualized
                            as an equilateral triangle. Just like the equilateral triangle
                            is constructed of three sides identical in length, each of
                            the three walls of the security triangle represent equally
                            important pieces of the puzzle. Much like eating a wellbalanced diet requires incorporating items from all areas
                            of the food pyramid, building a robust cybersecurity
                            strategy requires implementing products from each
                            of the three sides of the security triangle. Adding
                            multiple products from one side and none from another
                            will result in gaps within your security approach
                        </p>
                        <P class="wow fadeInUp">At the bottom of the security triangle is the human
                            firewall. End users stand between your endpoints
                            and the adversaries trying to access them. They are
                            the gateway into your organization. Strong security
                            strategies must incorporate information security
                            training for all users. However, even the most cybersavvy users aren’t immune to human error and can
                            fall victim to phishing attacks. That is why a robust
                            security plan can’t rely on user training alone.</P>
                            <a href="securityStanding.html" target="_blank" class="hover3  mt-5 homebutton btn btn_primary animated slideInDown wow fadeUp btn_primary" data-wow-delay="0.1s"> Learn More</a>
                </div>
        </div>
    </div>
</div>
</section>
<section class="training_start  department mt-5 mb-5  wow fadeInUp">
    <div class="container">
        <div class="row g-4 align-items-end mb-4 text-white ">
            <div class="col-lg-6 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.1s">
                <img src="{{ asset('frontend/image/cyber_product/cyber_security.png')}}" class="img-fluid" alt="vpentest">
            </div>
            <div class="col-lg-6 wow fadeInUp Forescout2_right" data-wow-delay="0.3s">
                <!-- <p class="d-inline-block border rounded text-primary  py-1 px-3 fw-bold text-uppercase text-white">NEXT GENERATION
                    PENETRATION TESTING</p> -->
                <p class="mb-4 text-white">On the right side of the security triangle sit the control tools.
                    These are the Zero Trust tools that provide proactive protection.
                    Based on the rules you set, tools on this side of the triangle stop
                    unwanted behavior instead of relying on machine intelligence
                    to recognize and react to it. Firewalls control access to your
                    network. Application Allowlisting dictates which applications
                    can run in your environment. Ringfencing™ restricts what those
                    permitted applications can access and interact with once they
                    are running. Privileged access management (PAM) regulates the
                    use of admin privileges. While proactive control tools provide
                    effective protection, a robust cybersecurity approach will never
                    solely rely on controls from a single side of the security triangle.
                </p>
            </div>
           <h1  class="text-white text-center mt-5 pt-5  wow fadeInUp">Take Control </h1>
           <p class="text-center  wow fadeInUp">When selecting the ThreatLocker® Endpoint Protection Platform
            to cover the control side of the triangle, you’re choosing
            a powerful front line of defense. Administered correctly,
            ThreatLocker® stops known and unknown threats, taking care
            of the heavy lifting. This leaves the tools on the detection and
            human sides of the triangle to serve as a backup defense.
            ThreatLocker® pairs well with the built-in Windows
            antivirus, subscription antiviruses, NextGen AVs, or EDRs/
            XDRs/MDRs. Select your desired detection product
            based on your organization’s needs and budget. This
            detection technology won’t see much action with
            ThreatLocker® at the forefront of your defense.
            By implementing the ThreatLocker® Endpoint Protection
            Platform for control, a detection tool to serve as backup, and
            security training to help prevent human errors, you can provide
            first-class protection for your organization’s environment. </p>
        </div>
    </div>
 </section>

<!-- what is vulscan -->
<section class=" cybersecurity mt-5 pt-5 pb-5 zero_trustbg"  >
    <div class="container">
        <div class="row justify-content-center  ">
            <div class="col-lg-9">
                <h1 class="pt-5 text-white text-center pb-4 wow fadeInUp">Introducing Zero Trust</h2>
                    <h5 class="text-white fadeInUp text-center pb-4 wow fadeInUp">A & A Consulting is introducing Zero Trust Endpoint Protection Solution. Our solution modules will help you to protect your Endpoints from </h5>
                    <div class="zero_trust text-white wow fadeInUp">
                     <li>Remote Access Attacks  </li>
                    <li>Malware Prevention </li>
                    <li>Data Theft Prevention  </li>
                    <li>Information Technology Disputes  </li>
                    </div>

            </div>
            <div class="col-lg-12 mt-5">
                <div class=" pb-5 text-center">
                    <p class=" vulscan_title_p text-white wow fadeInUp"> As part of an ongoing effort to ensure all systems are
                            secure, we are now adding a Zero Trust approach
                            to your security stack. As attackers become more
                            sophisticated, so do the complexities in stopping
                            software-based threats. The techniques and solutions
                            we are implementing are regularly adopted by large
                            governments and other enterprise organizations. As
                            your managed service provider, we understand the
                            use of a higher grade of security is fundamental in
                            protecting you from the latest threats.</p>
                </div>
                <h1 class="text-white wow fadeInUp">What is Zero Trust?</h1>
                <p class="text-white wow fadeInUp">Zero Trust is a security framework which states that
                    organizations should not trust any entity inside or
                    outside of their perimeter at any time. It is necessary
                    in today’s environment to provide the visibility and
                    IT controls needed to secure, manage and monitor
                    every device, user, app and network being used to
                    access business data</p>
                    <h1 class="text-white wow fadeInUp">What Does This Mean for You?</h1>
                    <p class="text-white pb-4 wow fadeInUp">As of today, ThreatLocker® will be running on
                        your PCs, and blocking any unapproved software,
                        including ransomware, viruses, and other malicious
                        software.
                        Should you run any applications that are not
                        approved, you will receive a notification prompting
                        you to request access or ignore if it’s not needed for
                        your day-to-day business functions.
                        Selecting the “Request Access” button will notify us.
                        We will review the request and ensure the application
                        is not malicious in nature and approve if appropriate.
                        As such, it is vital to let us know in advance if you
                        need any new software installed by entering a ticket
                        with the service desk</p>
                     <div class="row justify-content-center">
                        <h2 class="text-white text-center pt-4 pb-4 wow fadeInUp">ThreatLocker® Helps With:</h2>
                        <div class="col-lg-6 text-center wow fadeInUp">
                            <div class="threatlock text-white">
                                <li>Layered Security</li>
                                <li>Ransomware</li>
                                <li>Prevention</li>
                            </div>
                        </div>
                        <div class="col-lg-6 text-white wow fadeInUp">
                            <li>Compliance</li>
                            <li>Internal Disputes</li>
                            <li>Storage Control</li>
                            <li>Data Privacy</li>
                        </div>
                     </div>
            </div>

        </div>
    </div>
</section>
<!-- vulscan end -->
<!-- industry solves -->
<section class="training_start  department mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center text-white ">
          <div class="col-lg-10">
            <h1  class="text-white text-center mt-5 pt-5 wow fadeInUp pb-5">Remote Access Attacks Solution . </h1>
            <p class="text-center wow fadeInUp">A & A introducing new offering EDR (Endpoint Detection Response) for remote access to your systems for outside users and partners is a vital solution for your businesses, because it’s also a fertile avenue of attack for cybercriminals. A & A solution sees to it that even authorized visitors to your servers and systems can’t deliberately or unintentionally let malware in your IT Infrastructure. Our solution can help you to:
            </p>
            <div class="row g-4 mt-5">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class=" dedicted_part pentest_dedicat datatheft wow fadeInUp">
                        <div class="d-flex">
                            <div class="ps-3 wow fadeInUp">
                                <h4>Remote Access Attacks Solution :</h4>
                                <span>Eliminate the need to grant blanket access as our solution creates policies 	for organizations or unique users
                                    .</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="dedicted_part pentest_dedicat datatheft">
                        <div class="d-flex">
                            <div class="ps-3 wow fadeInUp">
                                <h4>Control of Unknown Apps:</h4>
                                <span>It can unobtrusively control the applications of trusted visitors to  prevent cybercriminals piggybacking into your applications
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="dedicted_part pentest_dedicat datatheft">
                        <div class="d-flex">
                            <div class="ps-3 wow fadeInUp">
                                <h4>Protect Remote Assets:</h4>
                                <span>Our solution is fully compatible with remote desktops and Citrix servers so employees can work securely from anywhere
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
 </section>
 <section class="malware">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10  wow fadeInUp">
                <h1 class="text-center">Malware Prevention Solution </h1>
                <p class="pt-5 pb-5 text-center">In your organization ransomware and other malicious software can copy or encrypt your files in a few minutes. Our solution uses a more logical approach to stop viruses and malware from affecting your business. Our Application Control uses a combination of Default Deny and Ringfencing™ to protect your business from known and unknown malware threats.
                </p>

                </div>
            <div class="row g-4">
                <div class="col-lg-3 wow fadeInUp " data-wow-delay="0.1s">
                    <div class=" dedicted_part pentest_dedicat datatheft wow fadeInUp">
                        <div class="d-flex">
                            <div class="ps-3 wow fadeInUp">
                                <h4> Zero-Day Attacks:</h4>
                                <span>A & A Solution protects against vulnerabilities that haven’t even been discovered yet.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeInUp " data-wow-delay="0.5s">
                    <div class="dedicted_part pentest_dedicat datatheft">
                        <div class="d-flex">
                            <div class="ps-3 wow fadeInUp">
                                <h4>Macro Viruses:</h4>
                                <span>Malware embedded in trusted programs like Office can't overcome our vendor provide Ringfencing™. </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="dedicted_part pentest_dedicat datatheft">
                        <div class="d-flex">
                            <div class="ps-3 wow fadeInUp">
                              <h4>Fileless Malware:</h4>
                            </h4>
                                <span>	Even malware that hides in memory can’t sneak in; if its code isn’t on the trusted list, it isn’t getting access </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="dedicted_part pentest_dedicat datatheft">
                        <div class="d-flex">
                            <div class="ps-3 ">
                              <h4>Ransomware:</h4>
                            </h4>
                                <span>	Ringfencing™ lets you dictate how apps interact with data; if a program, ANY program, tries to encrypt data it isn’t authorized to, it will be blocked. </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>
 <section class="training_start  department mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center text-white ">
          <div class="col-lg-10">
            <h1  class="text-white text-center mt-5 pt-5 wow fadeInUp pb-5">Data Theft Prevention Solution </h1>
            <p class="text-center wow fadeInUp">It is important to know what is happening on your data storage devices at all times. Without you in the know, you risk these devices being left wide open to a cyber attack. A & A Solution not only lets you track and control external data access (e.g., via the internet) but internal access as well. When your security team has complete visibility over your data storage, they will be able to block data theft before it happens.            </p>

            <div class="row g-4 mt-5">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class=" dedicted_part pentest_dedicat datatheft wow fadeInUp">
                        <div class="d-flex">
                            <div class="ps-3 wow fadeInUp">
                                <h4>Control Physical Copying:</h4>
                                <span>With the right solution it will provide  Storage Control policies in place, a bad actor on your premises with a USB drive won’t be able 				to copy a thing
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="dedicted_part pentest_dedicat datatheft">
                        <div class="d-flex">
                            <div class="ps-3">
                                <h4>Monitor Access:</h4>
                                <span>See who is accessing your files and when with detailed reports	generated in real time by our solution  </p>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="dedicted_part pentest_dedicat datatheft">
                            <div class="ps-3">
                                <h4>Restrict Applications:</h4>
                                <span>Let only trusted apps access your data, as determined by your	custom policies.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          </div>
        </div>
    </div>
 </section>
 <section class="information_tech">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10  wow fadeInUp">
                <h1 class="text-center">Information Technology Disputes                </h1>
                <p class="pt-5 pb-5 text-center">With remote working on the rise, and the need for employees to be able to work anywhere, anytime, the need to track their computer activities is becoming increasingly important. A & A Solution will enable you to have visibility and control over the files and applications users are accessing on a day-to-day basis. With our solution you can.                </p>
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class=" dedicted_part pentest_dedicat datatheft wow fadeInUp">
                            <div class="d-flex">
                                <div class="ps-3 wow fadeInUp">
                                    <h4> Track File Access:</h4>
                                    <span>Get detailed, real-time reports on who accessed data and what	they did with it.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="dedicted_part pentest_dedicat datatheft">
                            <div class="d-flex">
                                <div class="ps-3">
                                    <h4>Track Changes and Deletions:</h4>
                                    <span>Thorough records for any file type let you see the complete history of your data. </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="dedicted_part pentest_dedicat datatheft">
                            <div class="d-flex">
                                <div class="ps-3">
                                    <h4>Block Unauthorized Apps:</h4>
                                    <span>	Our solution cab create custom policies to let you block any 				applications you want, regardless of if they are malware or not

                                    </span>
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
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="{{ asset('frontend/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/wow/wow.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>
