<?php
session_start();
$_SESSION['secure_token'] = bin2hex(random_bytes(32));
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Health Care</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="theme-color" content="#eee" />
        <!-- Meta Description -->
        <meta name="description" content="Professional healthcare services with our expert medical team. Book appointments online, explore our health guides and get quality treatment." />

        <!-- Open Graph / Facebook -->
        <meta property="og:title" content="MediCare - Professional Healthcare Services" />
        <meta property="og:description" content="We provide premium healthcare services with modern medical equipment and experienced specialists." />
        <meta property="og:image" content="https://www.yourdomain.com/images/healthcare-og-image.jpg" />
        <meta property="og:url" content="https://www.yourdomain.com" />
        <meta property="og:type" content="website" />

        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="MediCare - Professional Healthcare Services">
        <meta name="twitter:description" content="Premium healthcare services with modern equipment and experienced specialists.">
        <meta name="twitter:image" content="https://www.yourdomain.com/images/healthcare-twitter-image.jpg">
        <!-- favicon -->
         <link rel="icon" type="image/svg+xml" href="./assets/imgs/favicon.svg">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet" />
        <!-- Custom CSS-->
        <link rel="stylesheet" href="./assets/css/style.css" />

    </head>
    <body id="body">
        
        <?php if(isset($_SESSION['error'])) { ?>
            <div id="err-msg" class="text-white p-2">
                <?php 
                    echo $_SESSION['error']; 
                    unset($_SESSION['error']); 
                ?>
            </div>
            <script>
                setTimeout(()=>{
                    const err = document.getElementById('err-msg');
                    if(err){
                        err.style.display = 'none';
                    }
                }, 3000);
            </script>
        <?php } ?>

        <!-- Header Section -->
        <header class="pw-header py-3 sticky-top bg-white shadow-sm">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="d-flex justify-content-between">
                            <a class="logo-container d-flex align-items-center" href="index.php" style="width:150px">
                                <img class="w-100" src="./assets/imgs/logo.png" alt="logo">
                            </a>
                            <nav class="pw-nav d-none d-lg-flex">
                                <ul class="nav nav-underline justify-content-center gap-4 fw-bold" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link w-auto active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                            Home
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link w-auto" id="pills-services-tab" data-bs-toggle="pill" data-bs-target="#pills-services" type="button" role="tab" aria-controls="pills-services" aria-selected="false">
                                            Our Services
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link w-auto" id="pills-about-tab" data-bs-toggle="pill" data-bs-target="#pills-about" type="button" role="tab" aria-controls="pills-about" aria-selected="false">
                                            About Us
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link w-auto" id="pills-team-tab" data-bs-toggle="pill" data-bs-target="#pills-team" type="button" role="tab" aria-controls="pills-team" aria-selected="false">
                                            Our Team
                                        </button>
                                    </li>
                                </ul>
                            </nav>
                            <div class="d-flex gap-1 justify-content-end d-lg-none">
                                <button class="btn-contact btn-sm text-main btn rounded-pill py-sm-2 px-sm-3 fw-bold" data-bs-toggle="modal" data-bs-target="#pwModal">
                                    Contact
                                </button>
                                <div class="d-flex gap-1 align-items-center d-lg-none">
                                    <button class="btn-menu btn-sm text-main btn rounded-pill py-sm-2 px-sm-3 fw-bold dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Menu
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end  p-2" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link w-100 text-start active" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                                Home
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link w-100 text-start" data-bs-toggle="pill" data-bs-target="#pills-services" type="button" role="tab" aria-controls="pills-services" aria-selected="false">
                                                Our Services
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link w-100 text-start" data-bs-toggle="pill" data-bs-target="#pills-about" type="button" role="tab" aria-controls="pills-about" aria-selected="false">
                                                About Us
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link w-100 text-start" data-bs-toggle="pill" data-bs-target="#pills-team" type="button" role="tab" aria-controls="pills-team" aria-selected="false">
                                                Our Team
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <button class="btn-contact text-main btn rounded-pill px-4 fw-bold d-none d-lg-block" data-bs-toggle="modal" data-bs-target="#pwModal">
                                    Contact
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- /Header Section -->

        <!-- Main -->
        <main>
            <section>
                <div class="tab-content" id="pills-tabContent">
                    <!-- Home Tab -->
                   <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="-1">
                        <div id="pwCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-touch="true">
                            <div class="carousel-indicators d-none">
                                <button type="button" data-bs-target="#pwCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#pwCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./assets/imgs/slide-1.jpg" class="d-block w-100" alt="Modern Clinic">
                                    <div class="carousel-caption d-none d-lg-block">
                                        <h1 class="fs-1 text-main fw-normal lh-base m-0 p-0">Comprehensive Healthcare</h1>
                                        <p class="fs-3 text-main">Providing quality medical services with modern facilities and expert doctors.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="./assets/imgs/slide-2.jpg" class="d-block w-100" alt="Patient Care">
                                    <div class="carousel-caption d-none d-lg-block">
                                        <p class="fs-1 text-main">Patient-Centered Approach</p>
                                        <p class="fs-3 text-main">Your health and comfort are our top priorities at every step of your treatment.</p>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev d-none d-lg-flex" type="button" data-bs-target="#pwCarousel" data-bs-slide="prev">
                                <i class="fa-solid fa-chevron-left fa-xl d-flex align-items-center justify-content-center"></i>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next d-none d-lg-flex" type="button" data-bs-target="#pwCarousel" data-bs-slide="next">
                                <i class="fa-solid fa-chevron-right fa-xl d-flex align-items-center justify-content-center"></i>                                
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>

                       <div class="py-5 my-5">
                            <div class="container">
                                <div class="row justify-content-center g-4">

                                    <!-- 24/7 Support -->
                                    <div class="col-11 col-sm-10 col-md-6 col-lg-3">
                                        <div class="cont p-4 text-center h-100">
                                            <div class="icon-cont d-flex justify-content-center align-items-center mx-auto mb-3">
                                                <i class="fa-solid fa-headset"></i>
                                            </div>
                                            <div class="text-center">
                                                <h4 class="pw-sub-title mb-3 fs-4">24/7 Support</h4>
                                                <p class="text-muted mb-0">
                                                    Our medical team is available around the clock to assist you with urgent health concerns.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Online Appointment -->
                                    <div class="col-11 col-sm-10 col-md-6 col-lg-3">
                                        <div class="cont p-4 text-center h-100">
                                            <div class="icon-cont d-flex justify-content-center align-items-center mx-auto mb-3">
                                                <i class="fa-solid fa-calendar-check"></i>
                                            </div>
                                            <div class="text-center">
                                                <h4 class="pw-sub-title mb-3 fs-4">Online Appointment</h4>
                                                <p class="text-muted mb-0">
                                                    Book your appointment online in seconds — no waiting, no hassle.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Expert Doctors -->
                                    <div class="col-11 col-sm-10 col-md-6 col-lg-3">
                                        <div class="cont p-4 text-center h-100">
                                            <div class="icon-cont d-flex justify-content-center align-items-center mx-auto mb-3">
                                                <i class="fa-solid fa-user-doctor"></i>
                                            </div>
                                            <div class="text-center">
                                                <h4 class="pw-sub-title mb-3 fs-4">Expert Doctors</h4>
                                                <p class="text-muted mb-0">
                                                    Our experienced specialists provide personalized care in various medical fields.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Fast Diagnosis -->
                                    <div class="col-11 col-sm-10 col-md-6 col-lg-3">
                                        <div class="cont p-4 text-center h-100">
                                            <div class="icon-cont d-flex justify-content-center align-items-center mx-auto mb-3">
                                                <i class="fa-solid fa-stethoscope"></i>
                                            </div>
                                            <div class="text-center">
                                                <h4 class="pw-sub-title mb-3 fs-4">Fast Diagnosis</h4>
                                                <p class="text-muted mb-0">
                                                    Get quick and accurate diagnosis with our advanced medical systems and expert evaluations.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        
                        <div class="premuium-experience bg-light">
                            <div class="container">
                                <div class="row align-items-center g-lg-5">
                                    <div class="col-lg-6">
                                        <div class="overflow-hidden mb-5 mb-lg-0">
                                          <img src="./assets/imgs/premium-experience.jpg" alt="Premuium Healthcare" class="img-fluid modern-image">
                                        </div>
                                    </div>
                                  
                                    <div class="col-lg-6">
                                        <div class="content">
                                            <h2 class="text-main fw-bold mb-3">Premium Experience</h2>
                                            <p class="demo text-muted">
                                                Discover a new standard in medical care where cutting-edge technology meets compassionate service. 
                                                Our patient-centered approach ensures you receive personalized attention and the highest quality treatment.
                                            </p>
                                          
                                            <div class="features mb-4">
                                                <div class="feature-item d-flex gap-2 mb-3">
                                                    <div class="feature-icon d-flex justify-content-center align-items-center">
                                                        <i class="fas fa-check text-white"></i>
                                                    </div>
                                                    <span class="text-muted">Advanced medical technology</span>
                                                </div>
                                                <div class="feature-item d-flex gap-2 mb-3">
                                                    <div class="feature-icon d-flex justify-content-center align-items-center">
                                                        <i class="fas fa-check text-white"></i>
                                                    </div>
                                                    <span class="text-muted">Expert medical team</span>
                                                </div>
                                                <div class="feature-item d-flex gap-2 mb-3">
                                                    <div class="feature-icon d-flex justify-content-center align-items-center">
                                                        <i class="fas fa-check text-white"></i>
                                                    </div>
                                                    <span class="text-muted">Personalized care plans</span>
                                                </div>
                                            </div>
                                          
                                            <button class="btn-more btn rounded-pill text-white px-4" data-bs-toggle="modal" data-bs-target="#pwModal">
                                                Learn More
                                                <i class="fas fa-arrow-right text-white"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / Home Tab -->


                    <!-- Services Tab -->
                    <div class="tab-pane fade tab-section" id="pills-services" role="tabpanel" aria-labelledby="pills-services-tab" tabindex="-1">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <h2 class="main-title text-main text-center mb-5 position-relative">Our Services</h2>
                                </div>
                                <div class="col-11 col-sm-10 col-md-6 col-lg-4 col-xl-3">
                                    <div class="pw-card mb-4 border-0 overflow-hidden">
                                        <img src="./assets/imgs/medicine.jpg" class="card-img-top" alt="internal">
                                        <div class="pw-card-body text-center p-3">
                                            <h4 class="pw-sub-title fs-4">Internal Medicine</h4>
                                            <p class="pw-card-text">
                                                Diagnosis and treatment of general internal diseases.
                                            </p>
                                            <a href="#" class="btn-card btn text-white mb-3">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-11 col-sm-10 col-md-6 col-lg-4 col-xl-3">
                                    <div class="pw-card mb-4 border-0 overflow-hidden">
                                        <img src="./assets/imgs/cardiology.webp" class="card-img-top" alt="cardiology">
                                        <div class="pw-card-body text-center p-3">
                                            <h4 class="pw-sub-title fs-4">Cardiology</h4>
                                            <p class="pw-card-text">
                                                Diagnosis and treatment of heart and vascular diseases.
                                            </p>
                                            <a href="#" class="btn-card btn text-white mb-3">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-11 col-sm-10 col-md-6 col-lg-4 col-xl-3">
                                    <div class="pw-card mb-4 border-0 overflow-hidden">
                                        <img src="./assets/imgs/pediatrics.jpg" class="card-img-top" alt="pediatrics">
                                        <div class="pw-card-body text-center p-3">
                                            <h4 class="pw-sub-title fs-4">Pediatrics</h4>
                                            <p class="pw-card-text">
                                                Specialized care for child health and diseases.
                                            </p>
                                            <a href="#" class="btn-card btn text-white mb-3">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-11 col-sm-10 col-md-6 col-lg-4 col-xl-3">
                                    <div class="pw-card mb-4 border-0 overflow-hidden">
                                        <img src="./assets/imgs/dermatology.webp" class="card-img-top" alt="dermatology">
                                        <div class="pw-card-body text-center p-3">
                                            <h4 class="pw-sub-title fs-4">Dermatology</h4>
                                            <p class="pw-card-text">
                                                Diagnosis and treatment of skin diseases.
                                            </p>
                                            <a href="#" class="btn-card btn text-white mb-3">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     
                    <!-- /Services Tab -->


                    <!-- About Tab -->
                    <div class="tab-pane fade tab-section" id="pills-about" role="tabpanel" aria-labelledby="pills-about-tab" tabindex="-1">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-12 col-lg-6 order-lg-2">
                                    <div class="about-image position-relative mb-4 mb-lg-0 rounded-4 overflow-hidden">
                                        <img src="./assets/imgs/about.jpg" alt="About Us" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="about-content">
                                       <h2 class="main-title text-main mb-3">About Us</h2>
                                       <p> We are a trusted healthcare provider dedicated to delivering high-quality medical services with compassion and expertise. Our mission is to ensure the well-being of every patient through personalized care.
                                       </p>
                                       <p><i class="fa-regular fa-circle-check fa-lg"></i> Experienced and qualified medical team</p>
                                       <p><i class="fa-regular fa-circle-check fa-lg"></i> Modern facilities and advanced technology</p>
                                       <p><i class="fa-regular fa-circle-check fa-lg"></i> Cutting-edge research and continuous innovation</p>
                                       <p><i class="fa-regular fa-circle-check fa-lg"></i> Patient-centered approach</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /About Tab -->


                    <!-- Team Tab -->
                    <div class="tab-pane fade tab-section" id="pills-team" role="tabpanel" aria-labelledby="pills-team-tab" tabindex="-1">
                        <div class="container">
                            <h2 class="main-title text-main fw-bold text-center mb-5 position-relative">Our Team</h2>
                            <div class="row justify-content-center g-4">

                                <div class="col-11 col-sm-10 col-md-6 col-lg-4 col-xl-3">
                                    <div class="doctor-info bg-white rounded-4 p-4 h-100 text-center">
                                        <img src="./assets/imgs/doctor2.webp" alt="Dr. Sarah Johnson" class="rounded-circle mb-3">
                                        <h4 class="pw-sub-title fw-bold mb-1 fs-4">Dr. Sarah Johnson</h4>
                                        <p class="text-muted mb-2">Cardiologist</p>
                                        <p class="small">Expert in cardiovascular health with 15+ years of experience in advanced treatments and patient care.</p>
                                    </div>
                                </div>

                                <div class="col-11 col-sm-10 col-md-6 col-lg-4 col-xl-3">
                                    <div class="doctor-info bg-white rounded-4 p-4 h-100 text-center">
                                        <img src="./assets/imgs/doctor1.webp" alt="Dr. James Williams" class="rounded-circle mb-3">
                                        <h4 class="pw-sub-title fw-bold mb-1 fs-4">Dr. James Williams</h4>
                                        <p class="text-muted mb-2">Neurologist</p>
                                        <p class="small">Specialist in neurological disorders with over 12 years of experience in patient-focused care.</p>
                                    </div>
                                </div>

                                <div class="col-11 col-sm-10 col-md-6 col-lg-4 col-xl-3">
                                    <div class="doctor-info bg-white rounded-4 p-4 h-100 text-center">
                                        <img src="./assets/imgs/doctor3.webp" alt="Dr. Michael Smith" class="rounded-circle mb-3">
                                        <h4 class="pw-sub-title fw-bold mb-1 fs-4">Dr. Michael Smith</h4>
                                        <p class="text-muted mb-2">Orthopedic Surgeon</p>
                                        <p class="small">Specialist in joint replacement and sports injuries with a patient-first approach.</p>
                                    </div>
                                </div>

                                <div class="col-11 col-sm-10 col-md-6 col-lg-4 col-xl-3">
                                    <div class="doctor-info bg-white rounded-4 p-4 h-100 text-center">
                                        <img src="./assets/imgs/doctor4.webp" alt="Dr. Emily Brown" class="rounded-circle mb-3">
                                        <h4 class="pw-sub-title fw-bold mb-1 fs-4">Dr. Emily Brown</h4>
                                        <p class="text-muted mb-2">Pediatrician</p>
                                        <p class="small">Dedicated to children’s health and wellness, providing compassionate care for families.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / Team Tab -->
                </div>
            </section>
        </main>
        <!-- / Main -->

        <!-- Footer -->
        <footer class="bg-main py-5 text-white text-center text-lg-start">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="logo-container mb-4">
                            <img class="img-fluid" src="./assets/imgs/logo-white.png" alt="white logo">
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="mb-4">
                            <h4 class="fw-bold fs-5"><i class="fas fa-phone"></i> Call :</h4>
                            <a class="text-decoration-none text-white" href="tel:+905310000000">+90 531 000 00 00</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="mb-4">
                            <h4 class="fw-bold fs-5"><i class="fas fa-envelope"></i> Email :</h4>
                            <a class="text-decoration-none text-white" href="mailto:info@yourdomain.com">info@yourdomain.com</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <h4 class="fw-bold fs-5"><i class="fas fa-share"></i> Social :</h4>
                        <div class="d-flex justify-content-center justify-content-xl-start gap-3">
                            <a href="https://facebook.com"><i class="fab fa-facebook fa-xl text-white"></i></a>
                            <a href="https://instagram.com"><i class="fab fa-instagram fa-xl text-white"></i></a>
                            <a href="https://youtube.com"><i class="fab fa-youtube fa-xl text-white"></i></a>
                            <a href="https://linkedin.com"><i class="fab fa-linkedin fa-xl text-white"></i></a>
                            <a href="https://tiktok.com"><i class="fab fa-tiktok fa-xl text-white"></i></a>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <hr class="text-white opacity-0.5">
                    <p>&copy; All Rights Reserved. 2025 - TABBI NEW</p>
                </div>
            </div>
        </footer>
        <!-- / Footer -->


        <!-- Contact Modal -->
        <div class="modal fade" id="pwModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="" id="exampleModalLabel">
                            <img class="w-75" src="./assets/imgs/logo.png" alt="logo">
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center pt-lg-0">
                        <div class="container py-lg-0">
                            <div class="row justify-content-center align-items-center g-4 g-xl-5">
                                <div class="col-12 col-md-10 col-lg-6 order-lg-2">
                                    <h3 class="text-main text-center mb-4">Get in Touch</h3>
                                    <form action="./submit.php" method="post">
                                        <input type="hidden" name ="secure_token" value="<?php echo $_SESSION['secure_token']; ?>" >
                                        <input class="form-control outline-0 shadow-none mb-2" type="text" name="full_name" placeholder="Full Name*" required/>
                                        <input class="form-control outline-0 shadow-none mb-2" type="tel" name="phone" placeholder="Phone Number*" required/>
                                        <input class="form-control outline-0 shadow-none mb-2" type="email" name="email" placeholder="Email*" required/>
                                        <textarea class="form-control outline-0 shadow-none mb-3" rows="4" name="message" placeholder="Message*" required></textarea>
                                        <button type="submit" class="btn-send btn text-white rounded-pill px-4 mx-auto d-block"><i class="fas fa-paper-plane me-2"></i> Send</button>
                                    </form>
                                </div>
                                <div class="col-12 col-md-10 col-lg-6">
                                    <iframe 
                                        class="rounded-3 shadow-sm"
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.705962345678!2d28.971117515091033!3d41.00549517930306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab9cbd8233f13%3A0x400c4341c28f1e0!2sIstanbul!5e0!3m2!1str!2str!4v1692530456789!5m2!1str!2str" 
                                        width="100%" 
                                        height="350px" 
                                        style="border:0;" 
                                        referrerpolicy="no-referrer-when-downgrade">
                                    </iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa-solid fa-arrow-left"></i> back</button></div>
                </div>
            </div>
        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Cutom JS -->
        <script src="./assets/js/script.js"></script>

        
    </body>
</html>