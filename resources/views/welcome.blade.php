<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Amazon Learn</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   <link rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />

    {{-- Toastr --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
  </head>

  <body>
    

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg  navbar-light fixed-top p-0" style="background: linear-gradient(to bottom right, #2EAF7D,#3FD0C9);">
      <a
        href="{{ route('welcome') }}"
        class="navbar-brand d-flex align-items-center px-4 px-lg-5"
      >
        <h2 class="m-0 text-light">
          <i class="fas fa-users-class"></i>Amazon Learn
        </h2>
      </a>
      <div class="dropdown d-none d-sm-inline-block">
        <button
          type="button"
          class="btn header-item"
          data-bs-toggle="dropdown"
          aria-haspopup="true"
          aria-expanded="false"
        >
          <img
            id="header-lang-img"
            src="assets/images/flags/us.jpg"
            alt="Header Language"
            height="16"
          />
        </button>
        <div class="dropdown-menu dropdown-menu-end">
          <!-- item-->
          <a
            href="javascript:void(0);"
            class="dropdown-item notify-item language"
            data-lang="en"
          >
            <img
              src="assets/images/flags/us.jpg"
              alt="user-image"
              class="me-1"
              height="12"
            />
            <span class="align-middle">English</span>
          </a>
          <!-- item-->
          <a
            href="javascript:void(0);"
            class="dropdown-item notify-item language"
            data-lang="sp"
          >
            <img
              src="assets/images/flags/spain.jpg"
              alt="user-image"
              class="me-1"
              height="12"
            />
            <span class="align-middle">Spanish</span>
          </a>

          <!-- item-->
          <a
            href="javascript:void(0);"
            class="dropdown-item notify-item language"
            data-lang="gr"
          >
            <img
              src="assets/images/flags/germany.jpg"
              alt="user-image"
              class="me-1"
              height="12"
            />
            <span class="align-middle">German</span>
          </a>

          <!-- item-->
          <a
            href="javascript:void(0);"
            class="dropdown-item notify-item language"
            data-lang="it"
          >
            <img
              src="assets/images/flags/italy.jpg"
              alt="user-image"
              class="me-1"
              height="12"
            />
            <span class="align-middle">Italian</span>
          </a>

          <!-- item-->
          <a
            href="javascript:void(0);"
            class="dropdown-item notify-item language"
            data-lang="ru"
          >
            <img
              src="assets/images/flags/russia.jpg"
              alt="user-image"
              class="me-1"
              height="12"
            />
            <span class="align-middle">Russian</span>
          </a>
        </div>
      </div>
      <button
        type="button"
        class="navbar-toggler me-4"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0  ">
          <a href="#welcome" class="nav-item nav-link text-light"
            >Home</a
          >
          <a href="#about" class="nav-item nav-link text-light">About</a>
          <a href="#packages" class="nav-item nav-link text-light">Packages</a>
            <a href="#testimonials" class="nav-item nav-link text-light">Testimonials</a>
          @if (Route::has('login'))
                {{-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> --}}
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="btn btn-success py-4 px-lg-3 d-none d-lg-block"
                            >LOGIN<i class="fa fa-arrow-right ms-3"></i
                          ></a>
                        {{-- @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif --}}
                    @endauth
                {{-- </div> --}}
            @endif
        </div>
      </div>
    </nav>
    <!-- Navbar End -->
    <!-- Consultation Start -->

    <section id="welcome">
      <div class="container-xxl py-5"  >
        <div class="container-xxl py-5 mt-5">
          <div class="container">
            <div class="row g-5" style="margin-top: -80px;  ">
              <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <!--h5 class="text-start text-success pe-3 ">
                  Welcome to Amazon Learn!
                </h5-->
                <h4 class="mb-4   mt-5">Unlock Your Potential with <br>Online Learning.</h4>
                <p class="mb-4">
                  Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                  Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit.
                </p>
                <div class="row gy-2 gx-4 mb-4">
                  <div class="col-sm-6">
                    <p class="mb-0">
                      <i class="fa fa-arrow-right text-success me-2"></i>Skilled
                      Instructors
                    </p>
                  </div>
                  <div class="col-sm-6">
                    <p class="mb-0">
                      <i class="fa fa-arrow-right text-success me-2"></i>Online
                      Classes
                    </p>
                  </div>
                  <div class="col-sm-6">
                    <p class="mb-0">
                      <i class="fa fa-arrow-right text-success me-2"></i
                      >International 
                    </p>
                  </div>
                  <div class="col-sm-6">
                    <p class="mb-0">
                      <i class="fa fa-arrow-right text-success me-2"></i>Skilled
                      Instructors
                    </p>
                  </div>
                  <div class="col-sm-12 mt-5">
                    <div>
                      <button
                        type="button"
                        class="btn btn-success " 
                        data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasEnd"
                        aria-controls="offcanvasEnd"
                      >
                        Consult Now
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="col-lg-6 wow fadeInUp p-4"
                data-wow-delay="0.1s"
                style="min-height: 400px"
              >
              <div class="position-relative h-100">
              <img
                class="img-fluid position-absolute w-100 h-80"
                src="img/class.jpg"
                alt=""
                style="object-fit: cover"
              />
            </div>
                <div class="offcanvas offcanvas-end" tabindex="-1"
                id="offcanvasEnd" aria-labelledby="offcanvasEndLabel" >
                <div class="offcanvas-header">
                  <h5 id="offcanvasEndLabel" class="offcanvas-title">
                    Consult Now
                  </h5>
                  <button
                    type="button"
                    class="btn-close text-reset"
                    data-bs-dismiss="offcanvas"
                    aria-label="Close"
                  ></button>
                </div>
                <div class="offcanvas-body my-auto mx-0">
                  <form method="POST" action="{{ route('consult') }}">
                    @csrf
                    <div class="position-relative h-100">
                          <x-validation-errors class="mb-4" />
                          <div class="needs-validation" >
                            <div class="row">
                              <div class="col-md-12">
                                <div class="mb-2">
                                  <label
                                    class="form-label"
                                    for="validationCustom03"
                                    >First Name</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control text-success fw-bold text-uppercase"
                                    id="validationCustom03" 
                                    required=""
                                    style="background-color: #f8f9fa"
                                    name="firstName"
                                  />
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="mb-2">
                                  <label
                                    class="form-label"
                                    for="validationCustom04"
                                    style="background-color: #f8f9fa"
                                    >Middle Name</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control text-success fw-bold text-uppercase"
                                    id="validationCustom04" 
                                    required=""
                                    style="background-color: #f8f9fa"
                                    name="middleName"
                                  />
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="mb-2">
                                  <label
                                    class="form-label"
                                    for="lastName"
                                    >Last Name</label
                                  >
                                  <input
                                    type="text"
                                    class="form-control text-success fw-bold text-uppercase"
                                    id="lastName"
                                    required=""
                                    style="background-color: #f8f9fa"
                                    name="lastName"
                                  />
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="mb-2">
                                  <label
                                    class="form-label"
                                    for="validationCustom06"
                                    >E-mail Address</label
                                  >
                                  <input
                                    type="email"
                                    class="form-control text-success"
                                    id="validationCustom06"
                                    required=""
                                    style="background-color: #f8f9fa"
                                    name="email"
                                  />
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="mb-2">
                                  <label
                                    class="form-label"
                                    for="validationCustom05"
                                    >Country</label
                                  >
                                  <select id="country" name="country" class="form-select">
                                    <option>select country</option> 
                                    <option value="Spain">Spain</option>
                                    <option value="United States">United States</option>
                                  
                                </select>
                                </div>
                              </div>
                               <div class="col-md-12">
                                  <div class="mb-2">
                    <label class="form-label" for="basic-icon-default-company"
                      >ID</label
                    >
                    <div class="input-group input-group-merge">
                      <select class="form-select" name="vType">
                        <option value="na" =""></option>
                        <option value="Hangouts">Hangouts</option>
                        <option value="Skype">Skype</option>
                        <option value="Viber">Viber</option>

                      </select>
                      <input
                        type="text"
                        class="form-control form-control-sm"
                        name="vid"
                      />
                     
                    </div>
                  </div>
                              </div>
                               
                               <div class="col-md-6 col-xs-6">
                                <div class="mb-2">
                                  <label
                                    class="form-label"
                                    for="validationCustom05"
                                    >Date for Consultation</label
                                  >
                                  <input
                                    type="date"  
                                    class="form-control  "
                                    id="validationCustom05"
                                    required=""
                                    style="background-color: #f8f9fa"
                                    name="cons_date"
                                  />
                                </div>
                              </div>
                               <div class="col-md-6 col-xs-6">
                                <div class="mb-2">
                                  <label
                                    class="form-label"
                                    for="validationCustom05"
                                    >Time for Consultation</label
                                  >
                                  <input
                                    type="time"  
                                    class="form-control  "
                                    id="validationCustom05"
                                    required=""
                                    style="background-color: #f8f9fa"
                                    name="cons_time"
                                  />
                                </div>
                              </div>
                            </div>
                            
                            
                            
                          </div>
                    </div>
                  <button
                    class="btn btn-success mb-2 d-grid w-100"
                  >
                    Submit Consultation
                  </button>
                  <button
                    type="button"
                    class="btn btn-label-secondary d-grid w-100"
                    data-bs-dismiss="offcanvas"
                  >
                    Cancel
                  </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Consultation End -->

    <!-- About Start -->
    <section id="about">
   <div class="container-xxl py-5" >
        <div class="container-xxl py-5 mt-5">
      <div class="container">
        <div class="row g-5">
          <div
            class="col-lg-6 wow fadeInUp"
            data-wow-delay="0.1s"
            style="min-height: 400px"
          >
            <div class="position-relative h-100">
              <img
                class="img-fluid position-absolute w-100 h-100"
                src="img/about.jpg"
                alt=""
                style="object-fit: cover"
              />
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
            <h6 class="bg-white text-start text-success pe-3">About Us</h6>
            <h1 class="mb-4">Welcome to eLingoa</h1>
            <p class="mb-4">
              Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
              diam amet diam et eos. Clita erat ipsum et lorem et sit.
            </p>
            <div class="row gy-2 gx-4 mb-4">
              <div class="col-sm-6">
                <p class="mb-0">
                  <i class="fa fa-arrow-right text-success me-2"></i>Skilled
                  Instructors
                </p>
              </div>
              <div class="col-sm-6">
                <p class="mb-0">
                  <i class="fa fa-arrow-right text-success me-2"></i>Online
                  Classes
                </p>
              </div>
              <div class="col-sm-6">
                <p class="mb-0">
                  <i class="fa fa-arrow-right text-success me-2"></i
                  >International Certificate
                </p>
              </div>
              <div class="col-sm-6">
                <p class="mb-0">
                  <i class="fa fa-arrow-right text-success me-2"></i>Skilled
                  Instructors
                </p>
              </div>
              <div class="col-sm-6">
                <p class="mb-0">
                  <i class="fa fa-arrow-right text-success me-2"></i>Online
                  Classes
                </p>
              </div>
              <div class="col-sm-6">
                <p class="mb-0">
                  <i class="fa fa-arrow-right text-success me-2"></i
                  >International Certificate
                </p>
              </div>
            </div>
            <a class="btn btn-success py-3 px-5 mt-2" href="">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
    </section>
    <!-- About End -->
    <section id="packages"> 
    <!-- Courses Start -->
    <div class="container-xxl py-5" style="background-color: #ececec">
        <div class="container-xxl py-5 mt-3">
      <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
          <h6 class="text-center text-success px-3">Packages</h6>
          <h1 class="mb-5">Packages Offered</h1>
        </div>
        <div class="row g-4 justify-content-center">
          
          <div class="col-lg-4 mb-5">
            <div class="card border-0 bg-light shadow-sm pb-2">
              <img class="card-img-top mb-2" src="img/course-3.jpg" alt="">
              <div class="card-body text-center">
                <h4 class="card-title">English Class</h4>
                <p class="card-text">
                  Justo ea diam stet diam ipsum no sit, ipsum vero et et diam
                  ipsum duo et no et, ipsum ipsum erat duo amet clita duo
                </p>
              </div>
              <div class="card-footer bg-transparent py-4 px-5">
               
                
                
                <div class="row">
                  <div class="col-6 py-1 text-right border-right">
                    <strong>Price</strong>
                  </div>
                  <div class="col-6 py-1">&#8369; 350.00</div>
                </div>
              </div>
              <a href="" class="btn btn-success px-4 mx-auto mb-4">Join Now</a>
            </div>
          </div>
          <div class="col-lg-4 mb-5">
            <div class="card border-0 bg-light shadow-sm pb-2">
              <img class="card-img-top mb-2" src="img/course-2.jpg" alt="">
              <div class="card-body text-center">
                <h4 class="card-title">Language Learning</h4>
                <p class="card-text">
                  Justo ea diam stet diam ipsum no sit, ipsum vero et et diam
                  ipsum duo et no et, ipsum ipsum erat duo amet clita duo
                </p>
              </div>
              <div class="card-footer bg-transparent py-4 px-5">
                
               
               
                <div class="row">
                  <div class="col-6 py-1 text-right border-right">
                    <strong>Price</strong>
                  </div>
                  <div class="col-6 py-1">&#8369; 350.00</div>
                </div>
              </div>
              <a href="" class="btn btn-success px-4 mx-auto mb-4">Join Now</a>
            </div>
          </div>
          <div class="col-lg-4 mb-5">
            <div class="card border-0 bg-light shadow-sm pb-2">
              <img class="card-img-top mb-2" src="img/course-1.jpg" alt="">
              <div class="card-body text-center">
                <h4 class="card-title">Basic English</h4>
                <p class="card-text">
                  Justo ea diam stet diam ipsum no sit, ipsum vero et et diam
                  ipsum duo et no et, ipsum ipsum erat duo amet clita duo
                </p>
              </div>
              <div class="card-footer bg-transparent py-4 px-5">
               
              
                 
                <div class="row">
                  <div class="col-6 py-1 text-right border-right">
                    <strong>Price</strong>
                  </div>
                  <div class="col-6 py-1">&#8369; 350.00</div>
                </div>
              </div>
              <a href="" class="btn btn-success px-4 mx-auto mb-4">Join Now</a>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
    </section>
    <!-- Courses End -->


        <!-- Testimonial Start -->
        <section id="testimonials">
    <div class="container-xxl py-5" >
        <div class="container-xxl py-5 mt-3">
        <div class="container">
            <div class="text-center">
                <h6 class="  bg-white text-center text-success px-3">Testimonials</h6>
                <h1 class="mb-5">Our Students Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Student 1</h5>
                    <p>Student</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Student 2</h5>
                    <p>Student</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Student 3</h5>
                    <p>Student</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-4.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Student 4</h5>
                    <p>Student</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
    </section>
    <!-- Testimonial End -->
      
    

    <!-- Footer Start -->
    <div
      class="container-fluid bg-success text-light footer pt-3 mt-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-4 col-md-4">
            <h4 class="text-white mb-3">Logo</h4>
            <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
          </div>
          <div class="col-lg-4 col-md-4">
            <h4 class="text-white mb-3">Links</h4> 
             <p class="mb-2"><a href="#" class="link-light">Light link</a></p>
             <p class="mb-2"><a href="#" class="link-light">Light link</a></p>
             <p class="mb-2"><a href="#" class="link-light">Light link</a></p>
             
          </div>
            <div class="col-lg-4 col-md-4">
            <h4 class="text-white mb-3">Social Media</h4>
            <p class="mb-2">
              <i class="bx bxl-facebook me-3"></i>Facebook
            </p>
            <p class="mb-2">
              <i class='bx bxl-instagram me-3'></i>Instagram
            </p>
            <p class="mb-2">
             <i class='bx bxl-linkedin me-3'></i>LinkedIn
            </p>
          </div>

        
           
        </div>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-success btn-lg-square back-to-top"
      ><i class="bi bi-arrow-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

    <script type="text/javascript">
        toastr.options.timeOut = 10000;
        @if (Session::has('errors'))
            toastr.error("Unable to process your consultation. Please try again.");
        @elseif(Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
        @endif
    </script>
  </body>
</html>
