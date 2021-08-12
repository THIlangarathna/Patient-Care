<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Patient Care</title>
    <link rel="icon" href="frontend/img/2.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="frontend/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="frontend/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="frontend/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="frontend/css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="frontend/css/flaticon.css">
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="frontend/css/magnific-popup.css">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="frontend/css/nice-select.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="frontend/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="frontend/css/style.css">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="/"> <img src="frontend/img/PatientCare.png" alt="logo" class="w-100"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-center"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/"><h4>Home</h4></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/about"><h4>About</h4></a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#contactus"><h4>Contact</h4></a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <h4>Registered Parties</h4>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="Memdoc"><p align="center"><strong>Doctors</strong></p></a>
                                        <a class="dropdown-item" href="Memhos"><p align="center"><strong>Hospitals</strong></p></a>
                                        <a class="dropdown-item" href="Memlabs"><p align="center"><strong>Laboratories</strong></p></a>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        @if (Route::has('login'))
                    @auth
                        <a class="btn_2 d-none d-lg-block" href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="btn_2 d-none d-lg-block mr-3" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a class="btn_2 d-none d-lg-block" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
            @endif
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-xl-5">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h4><strong>Searching for a solution to keep your medical records systematically?</strong></h4>
                            <h1>Access your Medical records easily </h1>
                            <p>You will have the ability to store your medical documents systematically and you
                                will be able to access those documents from anywhere at anytime.</p>
                            <a href="#" class="btn_2">Register Now</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="banner_img">
                        <img src="frontend/img/banner_img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- about us part start-->
    <section class="about_us">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6 col-lg-6">
                    <div class="about_us_img">
                        <img src="frontend/img/about.png" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="about_us_text">
                        <h2 align="center">About us</h2>
                        <p align="justify">“Patient care” is a platform which helps patients to maintain their medical records.
                             It helps to store medical records and allow to view and update those medical records of a
                            specific a person to authorized parties.
                            This website also will be responsive to Mobile phones.</p>
                        <center><a class="btn_2 " href="#">learn more</a></center>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us part end-->

    <!-- feature_part start-->
    <section class="feature_part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2>Available Fetaures</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-between align-items-center">

                <div class="col-lg-3 col-sm-12">

                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="frontend/img/save.png" alt=""></span>
                            <h4>Store Medical Records</h4>
                            <p align="justify"> Updated medical records
                                and prescriptions will
                                be stored in the database properly.</p>
                        </div>
                    </div>

                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="frontend/img/report.png" alt="" size="100%"></span>
                            <h4>Store Medical Reports</h4>
                            <p align="justify">Updated medical Reports will
                                be stored in the database properly.</p>
                        </div>
                    </div>

                </div>

                <div class="col-lg-3 col-sm-12">

                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="frontend/img/down.png" alt=""></span>
                            <h4>Download Medical Documents</h4>
                            <p align="justify">Patients can download their
                                medical records and reports in <strong>PDF</strong> format.</p>
                        </div>
                    </div>

                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="frontend/img/print.png" alt=""></span>
                            <h4>Get Printouts of Documents</h4>
                            <p align="justify">Patients will be able to get printouts
                                of Medical Documents using the PDF web view </p>
                        </div>
                    </div>

                </div>

                <div class="col-lg-3 col-sm-12">

                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="frontend/img/private.png" alt=""></span>
                            <h4>Private Logs</h4>
                            <p align="justify">Patient will be able to hide the medical records and
                                those documents can be viewed with the permission of the patient.</p>
                        </div>
                    </div>

                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="frontend/img/database.png" alt=""></span>
                            <h4>Safe Storage Facility</h4>
                            <p align="justify">Medical Documents will be saved in the database with cloud hosting and
                                the user will be able to access those documents whenever wherever.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- feature_part end-->

     <!-- our depertment part start-->
     <section class="our_depertment section_padding">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-12">

                    <div class="depertment_content">

                        <div class="row justify-content-center">

                            <div class="col-xl-8">

                                <h2>User Roles</h2>

                                <div class="row">

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="frontend/img/doctor.png" alt="" style="border-radius:50%;"></span>
                                            <h4>Doctors</h4>
                                            <p>Doctors can register to the website but the doctor will be able to login
                                                after the verification process.
                                                And Doctor can update medical records regarding a
                                                patient and also he can view medical documents of a
                                                patient under the permission of the patient.

                                                .</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="frontend/img/patient.png"
                                                    alt=""></span>
                                            <h4>Patients</h4>
                                            <p>Medical Documents will be saved in the database with cloud
                                                hosting and the patient will be able to access those documents
                                                whenever wherever. Patients have the opportunity to download and
                                                take printouts of Medical Documents also.

                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="frontend/img/lab.png"
                                                    alt=""></span>
                                            <h4>Laboratories</h4>
                                            <p>Laborants can register their laboratories to the website but they will be
                                                able to login after the verification process.
                                                And Laborants can update medical reports and prescriptions
                                                and required documents regarding a patient.
                                                </p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="frontend/img/hospital.png"
                                                    alt=""></span>
                                            <h4>Hospitals</h4>
                                            <p>Hospitals can register to the website but the Hospitals will be able
                                                 to login after the verification process.
                                                And Hospitals can update medical reports and prescriptions and
                                                required documents regarding a patient.
                                                </p>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our depertment part end-->

    <!-- footer part start-->
    <footer class="footer-area" id="contactus">
        <div class="footer section" style="padding:5%;">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-2 col-md-4 col-sm-6 single-footer-widget">
                        <a href="#" class="footer_logo"><img src="frontend/img/PatientCare.png" alt="logo" height="60" width="500"></a><br>


                        <div class="social_logo" align="center">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"> <i class="ti-twitter"></i> </a>
                            <a href="#"><i class="ti-instagram"></i></a>
                            <a href="#"><i class="ti-skype"></i></a>
                        </div>

                    </div>

                    <div class="col-xl-2 col-sm-6 col-md-4 single-footer-widget">
                        <h4 align="center">Quick Links</h4>
                        <ul align="center">
                        <li><a href="about">About us</a></li>
                            <li><a href="/">Home</a></li>
                            <li><a href="register">Register</a></li>
                            <li><a href="login">Login</a></li>
                            <li><a href="#">Registered Parties</a></li>
                        </ul>
                    </div>

                    <div class="col-xl-2 col-sm-6 col-md-4 single-footer-widget">
                        <h4 align="center">Our Partners</h4>

                        <ul align="center">

                            <a href="http://www.health.gov.lk/moh_final/english/hospital_government.php?spid=24"><i><img src="frontend/img/ministry.png" height="55" width="40"></i><br></a><p style="text-align:center">Ministry of Health</p> <br>
                            <a href="https://www.srilankamedicalcouncil.org/index.php"><i><img src="frontend/img/slmc.jpg" height="40" width="70"></i><br></a><p style="text-align:center"> Sri Lanka Medical Council</p> <br>
                        </ul>

                    </div>


                    <div class="col-xl-2 col-sm-6 col-md-4 single-footer-widget">
                        <h4 align="center">Contact Us</h4>
                        <ul>
                            <a href="#"><i><img src="frontend/img/phone.png" height="40" width="40"></i></a> +94 11 7279279 <br>
                            <a href="mailto:patientcarelk@gmail.com"><i><img src="frontend/img/email.png" height="40" width="40"></i></a> Email Us <br>
                            <a href="#"><i><img src="frontend/img/fax.png" height="40" width="40"></i></a> +94 11 1473496 <br>
                            <a href="https://goo.gl/maps/ZPE8P5wjRXuKLzu3A"><i><img src="frontend/img/location.png" height="40" width="40"></i></a> Our Location <br>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div class="copyright_part">
            <div class="container">
                <div class="row align-items-center">
                    <p class="footer-text" align="center">

Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | PatientCare</i>

</p>

                </div>
            </div>
        </div>
    </footer>

    <!-- footer part end-->

    <!-- jquery plugins here-->

    <script src="frontend/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="frontend/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="frontend/js/bootstrap.min.js"></script>
    <!-- owl carousel js -->
    <script src="frontend/js/owl.carousel.min.js"></script>
    <script src="frontend/js/jquery.nice-select.min.js"></script>
    <!-- contact js -->
    <script src="frontend/js/jquery.ajaxchimp.min.js"></script>
    <script src="frontend/js/jquery.form.js"></script>
    <script src="frontend/js/jquery.validate.min.js"></script>
    <script src="frontend/js/mail-script.js"></script>
    <script src="frontend/js/contact.js"></script>
    <!-- custom js -->
    <script src="frontend/js/custom.js"></script>
</body>

</html>
