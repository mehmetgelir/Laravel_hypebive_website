<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>Hypebive COMPANY</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>

<!--================Header Menu Area =================-->
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="/Home"><img src="img/logo1.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav justify-content-center">
                        <li class="nav-item"><a class="nav-link" href="/Home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/Games">Games</a></li>
                        <li class="nav-item"><a class="nav-link" href="/Contact">Contact</a>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item"><a href="/Games" class="primary_btn">Games</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--================Header Menu Area =================-->

<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="banner_content text-center">
                <div class="page_link">
                    <a href="index.html">Home</a>
                    <a href="contact.html">CONTACT</a>
                </div>
                <h2>CONTACT US</h2>

            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Contact Area =================-->
<section class="contact_area section_gap">
    <div class="container">
        <div class="d-none d-sm-block mb-5 pb-4">
            <div id="map" style="height: 480px;"></div>
            <script>
                function initMap() {
                    var uluru = {
                        lat: 30.363,
                        lng: 35.044
                    };
                    var grayStyles = [{
                        featureType: "all",
                        stylers: [{
                            saturation: -90
                        },
                            {
                                lightness: 50
                            }
                        ]
                    },
                        {
                            elementType: 'labels.text.fill',
                            stylers: [{
                                color: '#ccdee9'
                            }]
                        }
                    ];
                    var map = new google.maps.Map(document.getElementById('map'), {
                        center: {
                            lat: 39.906057,
                            lng: 30.039825
                        },
                        zoom: 9,
                        styles: grayStyles,
                        scrollwheel: false
                    });
                }
            </script>
            <script
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap">
            </script>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="contact_info">
                    <div class="info_item">
                        <i class="lnr lnr-home"></i>
                        <h6>Bozüyük, Bilecik</h6>
                        <p>Yediler mh.</p>
                    </div>
                    <div class="info_item">
                        <i class="lnr lnr-phone-handset"></i>
                        <h6><a href="#">+90 (553) 722 1599</a></h6>
                        <p>Mon to Fri 9am to 6 pm</p>
                    </div>
                    <div class="info_item">
                        <i class="lnr lnr-envelope"></i>
                        <h6><a href="#">contact@hypebive.com</a></h6>
                        <p>Send us your query anytime!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <form class="row contact_form" action="/contact_process" method="post" id="contactForm" novalidate="novalidate">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                        </div>
                    </div>
                    @csrf
                    <div class="col-md-12 text-right">
                        <button type="submit" value="submit" class="primary_btn">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--================Contact Area =================-->

<!--================Footer Area =================-->
<footer class="footer_area section_gap_top">
    <div class="container">
        <div class="row footer_inner">
            <div class="col-lg-3 col-sm-6">
                <aside class="f_widget ab_widget">
                    <div class="f_title">
                        <h4>About Farfly</h4>
                    </div>
                    <ul>
                        <li><a href="#"></a>For Business</a></li><a href="#">
                            <li><a href="#"></a>Premium Plans
                        </a></li>
                        <li><a href="#"></a>Reviews</a></li>
                        <li><a href="#"></a>How it Works</a></li>
                        <li><a href="#"></a>Farfly Blog</a></li>
                    </ul>
                </aside>
            </div>
            <div class="col-lg-3 col-sm-6">
                <aside class="f_widget ab_widget">
                    <div class="f_title">
                        <h4>Company</h4>
                    </div>
                    <ul>
                        <li><a href="#"></a>Product Tour</a></li><a href="#">
                            <li><a href="#"></a>Pricing
                        </a></li>
                        <li><a href="#"></a>Founding Members</a></li>
                        <li><a href="#"></a>Case Studies</a></li>
                        <li><a href="#"></a>Product Updates</a></li>
                    </ul>
                </aside>
            </div>
            <div class="col-lg-3 col-sm-6">
                <aside class="f_widget ab_widget">
                    <div class="f_title">
                        <h4>Support</h4>
                    </div>
                    <ul>
                        <li><a href="#"></a>Documentation</a></li><a href="#">
                            <li><a href="#"></a>Data Securiry
                        </a></li>
                        <li><a href="#"></a>Site Performance</a></li>
                        <li><a href="#"></a>Action Plan</a></li>
                        <li><a href="#"></a>Resources</a></li>
                    </ul>
                </aside>
            </div>
            <div class="col-lg-3 col-sm-6">
                <aside class="f_widget ab_widget">
                    <div class="f_title">
                        <h4>Legal</h4>
                    </div>
                    <ul>
                        <li><a href="#"></a>Terms and conditions</a></li><a href="#">
                            <li><a href="#"></a>Privacy Policy
                        </a></li>
                        <li><a href="#"></a>Cookie Information</a></li>
                        <li><a href="#"></a>Opt - Out</a></li>
                    </ul>
                </aside>
            </div>
        </div>
        <div class="row single-footer-widget">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="copy_right_text">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="social_widget">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-behance"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--================End Footer Area =================-->

<!--================Contact Success and Error message Area =================-->
<div id="success" class="modal modal-message fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-close"></i>
                </button>
                <h2>Thank you</h2>
                <p>Your message is successfully sent...</p>
            </div>
        </div>
    </div>
</div>

<!-- Modals error -->

<div id="error" class="modal modal-message fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-close"></i>
                </button>
                <h2>Sorry !</h2>
                <p> Something went wrong </p>
            </div>
        </div>
    </div>
</div>
<!--================End Contact Success and Error message Area =================-->




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/popper.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/stellar.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('vendors/isotope/isotope-min.js')}}"></script>
<script src="{{asset('vendors/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('js/mail-script.js')}}"></script>
<script src="{{asset('vendors/counter-up/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('vendors/counter-up/jquery.counterup.min.js')}}"></script>
<!-- contact js -->
<script src="{{asset('js/jquery.form.js')}}"></script>
<script src="{{asset('js/jquery.validate.min.js')}}"></script>
<script src="{{asset('js/contact.js')}}"></script>
<!--gmaps Js-->
<script src="{{asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE')}}"></script>
<script src="{{asset('js/gmaps.min.js')}}"></script>
<script src="{{asset('js/theme.js')}}"></script>
</body>
</html>
