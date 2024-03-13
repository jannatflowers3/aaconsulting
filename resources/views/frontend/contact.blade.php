<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contact</title>
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
   <!-- fontawesome -->
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
                    <div class="col-xl-7 col-lg-6 pl-5">
                        <small><i class="fa fa-envelope "></i>info@aaconsulting.tech</small>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                          <small class="ms-4"><i class="fa fa-phone-alt"></i>+1 443 253 0203</small>
                    </div>
                </div>

            </div>
        </div>
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-xl-6 col-lg-6 col-sm-6 col-12 px-5 text-start">
                <div class="row">
                    <div class="col-xl-6 col-lg-8">
                        <small ><i class="fa fa-map-marker-alt  me-2"></i>Baridhara, Dhaka-1212, Bangladesh </small>

                    </div>
                    <div class="col-xl-6 col-lg-4">
                        <small class="ms-4 mdscreen_font"><i class="fa fa-clock "></i>10:00 AM – 6:00 PM (BDT) </small>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-sm-6 px-5 text-end">
            <div class="row">
                <div class="col-xl-8 col-lg-6">
                     <small ><i class="fa fa-envelope "></i>info@aaconsultingtech.com</small>
                </div>
                <div class="col-xl-4 col-lg-6">
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
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Solutions</a>
                        <div class="dropdown-menu border-light m-0">

                            <a href="{{ url('/partner') }}" class="dropdown-item">Partners</a>
                            <a href="{{ url('/products') }}" class="dropdown-item">Products</a>
                            <a href="{{ url('/previous-experience') }}" class="dropdown-item">Previous Experience</a>
                            <a href="{{ url('/seminar') }}" class="dropdown-item">Seminar</a>
                            <a href="{{ url('/training ') }}" class="dropdown-item">Trainings</a>


                        </div>
                    </div>
                    <a href="{{ url('/contact') }}" class="nav-item active nav-link">Contact</a>
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
        <h1 class="display-3 mb-4 animated slideInDown text-white">Contact Us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Contact </li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->
<!-- contact info start -->

<section class="bangladesh contact_bd text-white">
    <div class="container">
        <div class="row  justify-content-center">
            <div class="col-lg-6">
                <div class="contact_title text-center">
                    <h1 class="text-white text-center wow fadeInDown">Contact ( Bangladesh)</h1>
                   </div>
               </div>
        </div>
        <div class="row">
            <div class="col-lg-7 justify-content-center">
              <div class="contact_image bangladeshimage wow fadeInDown mt-5">
                <img src="{{ asset('frontend/image/bangladesh.jpg')}} " alt="bangladeshimg" class="img-fluid">
              </div>
            </div>
            <div class="col-lg-4">
                <div class="bangladesh_contactinfo ">
                 <div class="contatinfo contactphone text-center">
                     <i class="fa-solid fa-location-dot text-white"></i>
                     <h3 class="text-white wow fadeInDown">Address:</h3>
                     <h6 class="text-white wow fadeInUp">House-01 (4th Floor), Road-20, Block-J,
                         Baridhara, Dhaka, 1212, Bangladesh</h6>
                 </div>
                 <div class="contactphn contactphone text-center">
                     <i class="fa-solid fa-phone text-white"></i>
                     <h3 class="text-white wow fadeInDown"> Phone (Bangladesh):</h3>
                   <h6 class="text-white wow fadeInUp">+880 2 488 12159</h6>
                 </div>
                 <div class="contactmail contactphn  contactphone text-center">
                     <i class="fa-solid fa-envelope text-white wow fadeInDown"></i>
                     <h3 class="text-white wow fadeInUp">  E-mail:</h3>
                     <h5 class="txt-bold text-dark text-white wow fadeInDown">info@aaconsultingtech.com
                     sales@aaconsultingtech.com</h5>
                 </div>
                </div>
             </div>
           </div>

           <div class="row  justify-content-center">
            <div class="col-lg-6">
                <div class="contact_title text-center">
                    <h1 class="text-white text-center wow fadeInDown">Contact (United States)</h1>
                   </div>
               </div>
        </div>
       <div class="row justify-content-center">
        <div class="col-lg-4">
           <div class="allcontact_info ">
            <div class="contatinfo contactphone text-center">
                <i class="fa-solid fa-location-dot text-white wow fadeInDown"></i>
                <h3 class="text-white wow fadeInDown">Address:</h3>
                <h6 class="text-white wow fadeInUp">6235 Sutton Court, Elkridge, Maryland 21075, USA</h6>
            </div>
            <div class="contactphn contactphone text-center">
                <i class="fa-solid fa-phone text-white wow fadeInDown"></i>
                <h3 class="text-white wow fadeInDown">Phone (United States):</h3>
              <h6 class="text-white wow fadeInDown">+1 443 253 0203</h6>
            </div>
            <div class="contactmail contactphn  contactphone text-center">
                <i class="fa-solid fa-envelope text-white wow fadeInDown"></i>
                <h3 class="text-white wow fadeInUp">  E-mail:</h3>
                <h5 class="txt-bold text-white wow fadeInDown">info@aaconsulting.tech
                sales@aaconsulting.tech</h5>
            </div>
           </div>
        </div>
        <div class="offset-lg-1 col-lg-6  justify-content-center">
          <div class="contact_image wow fadeInDown">
            <img src="{{ asset('frontend/image/USA.jpg')}}" alt="bangladeshimg" class="img-fluid">
          </div>
        </div>
       </div>
    </div>
</section>

<section class="contact_bd border-top pb-5 ">
    <div class="container">
        <!-- contact form start -->
        <div class="row justify-content-center pt-5 mb-5 ">
                <div class="col-lg-9 col-md-10 col-12 wow fadeIn text-center" data-wow-delay="0.1s">
                     <p class="d-inline-block border rounded  fw-semi-bold contact_form text-center text-white ">Get in Touch with us</p>
                    <h5 class="display-6 mb-4 text-white">If You Have Any Query, Please Contact Us</h5>
                    <p class="mb-4 text-white text-capitalize ">please provide us more details, and we can try to assist you further.</p>
                    <form action="/contact/create" method="post">
                    @csrf
                        <div class="row g-3">
                        @if(session('message'))
                                    <div class="alert alert-{{ session('status') }} alert-dismissible fade show mt-3" role="alert">
                                        <strong>{{ session('message') }}</strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif
                                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control  @error('name') is-invalid @enderror " name="name" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control  @error('email') is-invalid @enderror required" id="email" name="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control  @error('number') is-invalid @enderror" id="number" name="number"placeholder="Your Number">
                                    <label for="number"> Phone Number</label>
                                    @error('number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control  @error('subject') is-invalid @enderror" id="subject" name="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                    @error('subject')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control  @error('message') is-invalid @enderror required" placeholder="Leave a message here" id="message" name="message"
                                        style="height: 100px"></textarea>
                                    <label for="message">Your Message</label>
                                    @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>



    </div>
</section>
<section>
    <div class="googlemaps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.545778439042!2d90.42208827426049!3d23.7991838869038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c77acf9ed7bb%3A0x4e3d5a6f8740637c!2sA%20%26%20A%20Consulting%20Limited!5e0!3m2!1sen!2sbd!4v1689064618485!5m2!1sen!2sbd" width="100%" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
   <!-- Footer Start -->
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
