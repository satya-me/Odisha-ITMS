<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="India's only fully Integrated Ai Enabled Road Safety Platform. ANPR, RLVD, Speed Monitoring, Vahan Integration, Challan Creation, All in one Platform for road safety monitoring">
    <meta name="author" content="Devcrud">
    <title>Kotai Road Sense | ITMS Solution By Kotai Electronics Pvt. Ltd.</title>

    <!-- font icons -->
    <link rel="stylesheet" href="{{ asset('/') }}/landing/vendors/themify-icons/css/themify-icons.css">

    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ asset('/') }}/landing/vendors/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="{{ asset('/') }}/landing/vendors/owl-carousel/css/owl.theme.default.css">

    <!-- Bootstrap + Ollie main styles -->
    <link rel="stylesheet" href="{{ asset('/') }}/landing/css/ollie.css">
    <style>
        /* CSS for the popup */
        .popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 800px;
            height: 450px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            z-index: 9999;
            display: none;
        }

        .popup iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
    </style>

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <nav id="scrollspy" class="navbar navbar-light bg-light navbar-expand-lg fixed-top" data-spy="affix"
        data-offset-top="20">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="{{ asset('/') }}/landing/imgs/brand.png" alt=""
                    class="brand-img"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item ml-0 ml-lg-4">
                        <a class="nav-link btn btn-primary" href="{{ route('login') }}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <header id="home" class="header">
        <div class="overlay"></div>

        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="container">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 class="carousel-title">We Make<br>Safer Road for everyone</h1>
                            <button class="btn btn-primary btn-rounded" id="openPopup">Read More</button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 class="carousel-title">VIDS<br> Solution For Indian Roads</h1>
                            <button class="btn btn-primary btn-rounded" id="openPopup">Learn More</button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 class="carousel-title">ITMS <br> Solution for Indian Roads</h1>
                            <button class="btn btn-primary btn-rounded" id="openPopup">Learn More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="infos container mb-4 mb-md-2">
            <div class="title">
                <h6 class="subtitle font-weight-normal">Are you looking for</h6>
                <h5>CCTV Camera Ai Solutions</h5>
                <p class="font-small">for Smart City or ITMS Projects?.</p>
            </div>
            <div class="socials text-right">
                <div class="row justify-content-between">
                    <div class="col">
                        <a class="d-block subtitle"><i class="ti-microphone pr-2"></i> (+91) 700-808-2387</a>
                        <a class="d-block subtitle"><i class="ti-email pr-2"></i> sales@kotaielectronics.com</a>
                    </div>
                    <div class="col">
                        <h6 class="subtitle font-weight-normal mb-2">Social Media</h6>
                        <div class="social-links">
                            <a href="https://www.facebook.com/kotai.electronics.pvt.ltd" class="link pr-1"><i
                                    class="ti-facebook"></i></a>
                            <a href="https://www.youtube.com/channel/UCjz-bda-fHRlRzehcAX3khw" class="link pr-1"><i
                                    class="ti-instagram"></i></a>
                            <a href="https://www.linkedin.com/company/kotai-electronics" class="link pr-1"><i
                                    class="ti-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="section" id="about">

        <div class="container">

            <div class="row align-items-center mr-auto">
                <div class="col-md-4">
                    <h6 class="xs-font mb-0">Kotai Electronics Pvt. Ltd.</h6>
                    <h3 class="section-title">About Us</h3>
                    <p>Kotai Electronics Provide wide range of Traffic Safety and Monitoring Solution for ITMS Projects
                        Like, VIDS, Speed Monitoring using Radar and Lidar, No Helmet, Tripple Riding, No Seat Belt,
                        RLVD Solutions, ANPR, Cloudd Challan Software</p>

                    <a href="jhttps://kotaielectronics.com/about/">Read more...</a>
                </div>
                <div class="col-sm-6 col-md-4 ml-auto">
                    <div class="widget">
                        <div class="icon-wrapper">
                            <i class="ti-calendar"></i>
                        </div>
                        <div class="infos-wrapper">
                            <h4 class="text-primary">15+</h4>
                            <p>ITMS Projects Completed</p>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="icon-wrapper">
                            <i class="ti-face-smile"></i>
                        </div>
                        <div class="infos-wrapper">
                            <h4 class="text-primary">725+</h4>
                            <p>Live Camera in actions</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="widget">
                        <div class="icon-wrapper">
                            <i class="ti-star"></i>
                        </div>
                        <div class="infos-wrapper">
                            <h4 class="text-primary">10+</h4>
                            <p>Cities Impacted</p>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="icon-wrapper">
                            <i class="ti-user"></i>
                        </div>
                        <div class="infos-wrapper">
                            <h4 class="text-primary">12+</h4>
                            <p>AI Road Safety Solutions</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <h6 class="xs-font mb-0">Kotai Electronics Pvt. Ltd.</h6>
            <h3 class="section-title mb-4">Market Ready Solutions</h3>

            <div class="row text-center">
                <div class="col-lg-4">
                    <a href="https://kotaielectronics.com/buy-anpr-software/" class="card border-0 text-dark">
                        <img class="card-img-top" src="{{ asset('/') }}/landing/imgs/header.jpg"
                            alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                        <span class="card-body">
                            <h4 class="title mt-4">ANPR Camera & Software</h4>
                            <p class="xs-font">Industry's Highest Accuracy ANPR Software & Camera.</p>
                        </span>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="https://kotaielectronics.com/vehicle-rc-verification-api/"
                        class="card border-0 text-dark">
                        <img class="card-img-top" src="{{ asset('/') }}/landing/imgs/vids system by kotai.jpg"
                            alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                        <span class="card-body">
                            <h4 class="title mt-4">Vids System</h4>
                            <p class="xs-font">Vido Incident Detection, No Helmet, Tripple Riding, No Seatbelt,
                                Stopping, RLVD</p>
                        </span>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="https://kotaielectronics.com/4d-radar-camera-with-anpr/" class="card border-0 text-dark">
                        <img class="card-img-top" src="{{ asset('/') }}/landing/imgs/4d radar speed monitoring.jpg"
                            alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                        <span class="card-body">
                            <h4 class="title mt-4">4D Radar Speed Monitoring</h4>
                            <p class="xs-font">Speed Monitoring & Speed Violation Detection System.</p>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="portfolio">
        <div class="container">
            <h6 class="xs-font mb-0">Kotai Road Sense Poroducts.</h6>
            <h3 class="section-title pb-4">Integrated Vahan and Challan System</h3>
            <p>We offer wide range of ITMS road safety AI Solutions like no helmet detection, tripple riding detection,
                Read Light Violation Detevtion, No Seat Belt, Wrong Way Driving Detection, Over Speeding Detection
                system. All our systems are integrated with Vahan Website to fetch Vehicle information and Challan
                Management system for generating Challans</p>
        </div>

    </section>



    <section class="section bg-overlay">

        <div class="container">
            <div class="infos mb-4 mb-md-2">
                <div class="title">
                    <h6 class="subtitle font-weight-normal">Are you looking for</h6>
                    <h5>ITMS CCTV Ai Solutions</h5>
                    <p class="font-small">for road safety or NHAI Projects?.</p>
                </div>
                <div class="socials">
                    <div class="row justify-content-between">
                        <div class="col">
                            <a class="d-block subtitle"><i class="ti-microphone"></i> (+91) 700-808-2387</a>
                            <a class="d-block subtitle"><i class="ti-email"></i> sales@kotaielectronics.com</a>
                        </div>
                        <div class="col">
                            <h6 class="subtitle font-weight-normal mb-1">Social Media</h6>
                            <div class="social-links">
                                <a href="javascript:void(0)" class="link pr-1"><i class="ti-facebook"></i></a>
                                <a href="javascript:void(0)" class="link pr-1"><i class="ti-twitter-alt"></i></a>
                                <a href="javascript:void(0)" class="link pr-1"><i class="ti-google"></i></a>
                                <a href="javascript:void(0)" class="link pr-1"><i class="ti-pinterest-alt"></i></a>
                                <a href="javascript:void(0)" class="link pr-1"><i class="ti-instagram"></i></a>
                                <a href="javascript:void(0)" class="link pr-1"><i class="ti-rss"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="blog">

        <div class="container mb-3">
            <h6 class="xs-font mb-0">Kotai Electronics Pvt. Ltd.</h6>
            <h3 class="section-title mb-5">Our Blog</h3>

            <div class="blog-wrapper">
                <div class="img-wrapper">
                    <img src="https://kotaielectronics.com/wp-content/uploads/2024/03/maxresdefault.jpg"
                        alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <div class="date-container">
                        <h6 class="day">29</h6>
                        <h6 class="mun">Jun</h6>
                    </div>
                </div>
                <div class="txt-wrapper">
                    <h4 class="blog-title">How Video Incident Detection Systems Are Reshaping Urban Traffic Management.
                    </h4>
                    <p>Urban traffic management is a critical aspect of city infrastructure, affecting everything from
                        daily commutes to emergency response times. As cities continue to grow, so do the challenges of
                        managing traffic effectively. Traditional methods of traffic management are being augmented and
                        enhanced by emerging technologies</p>

                    <a href="https://kotaielectronics.com/video-incident-detection-systems/"
                        class="badge badge-info">Read More..</a>

                    <h6 class="blog-footer">
                        <a href="javascript:void(0)"><i class="ti-user"></i> Admin </a> |
                        <a href="javascript:void(0)"><i class="ti-thumb-up"></i> 213 </a> |
                        <a href="javascript:void(0)"><i class="ti-comments"></i> 123</a>
                    </h6>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="section pb-0">

        <div class="container">
            <h6 class="xs-font mb-0">Culpa perferendis excepturi.</h6>
            <h3 class="section-title mb-5">Contact Us</h3>

            <div class="row align-items-center justify-content-between">
                <div class="col-md-8 col-lg-7">

                    <form class="contact-form">
                        <div class="form-row">
                            <div class="col form-group">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="col form-group">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="5" class="form-control"
                                placeholder="Your Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-block" value="Send Message">
                        </div>
                    </form>
                </div>
                <div class="col-md-4 d-none d-md-block order-1">
                    <ul class="list">
                        <li class="list-head">
                            <h6>CONTACT INFO</h6>
                        </li>
                        <li class="list-body">
                            <p class="py-2">Contact us and we'll get back to you within few mins.</p>
                            <p class="py-2"><i class="ti-location-pin"></i> 1503, 15th Floor, Arch Square X2, Sector
                                V, Kolkata, Wb, India</p>
                            <p class="py-2"><i class="ti-email"></i> sales@kotaielectronics.com</p>
                            <p class="py-2"><i class="ti-microphone"></i> (+91) 700-808-2387</p>

                        </li>
                    </ul>
                </div>
            </div>

            <footer class="footer mt-5 border-top">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-6 text-center text-md-left">
                        <p class="mb-0">Copyright
                            <script>
                                document.write(new Date().getFullYear())
                            </script> &copy; <a target="_blank"
                                href="https://kotaielectronics.com">Kotai Electronics Pvt. Ltd.</a>
                        </p>
                    </div>
                    <div class="col-md-6 text-center text-md-right">
                        <div class="social-links">
                            <a href="https://www.facebook.com/kotai.electronics.pvt.ltd" class="link pr-1"><i
                                    class="ti-facebook"></i></a>
                            <a href="https://www.youtube.com/channel/UCjz-bda-fHRlRzehcAX3khw" class="link pr-1"><i
                                    class="ti-instagram"></i></a>
                            <a href="https://www.linkedin.com/company/kotai-electronics" class="link pr-1"><i
                                    class="ti-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </section>

    <!-- Popup container -->
    <div class="popup" id="popupContainer">
        <!-- YouTube video embed code with autoplay and controls hidden -->
        <iframe width="800" height="450" src="https://www.youtube.com/embed/0Vf4cR6j2BU?autoplay=1&controls=0"
            frameborder="0" allowfullscreen></iframe>
    </div>

    <script>
        // Function to open the popup
        function openPopup() {
            document.getElementById('popupContainer').style.display = 'block';
        }

        // Function to close the popup
        function closePopup() {
            document.getElementById('popupContainer').style.display = 'none';
        }

        // Attach click event listener to the button
        document.getElementById('openPopup').addEventListener('click', function() {
            openPopup();
        });

        // Close the popup when clicking outside of it
        window.addEventListener('click', function(event) {
            if (event.target === document.getElementById('popupContainer')) {
                closePopup();
            }
        });

        // Close the popup when pressing the Escape key
        window.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closePopup();
            }
        });
    </script>



    <!-- core  -->
    <script src="{{ asset('/') }}/landing/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="{{ asset('/') }}/landing/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
    <script src="{{ asset('/') }}/landing/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Owl carousel  -->
    <script src="{{ asset('/') }}/landing/vendors/owl-carousel/js/owl.carousel.js"></script>


    <!-- Ollie js -->
    <script src="{{ asset('/') }}/landing/js/Ollie.js"></script>

</body>

</html>
