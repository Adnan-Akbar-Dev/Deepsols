
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- IE compatibility -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ledetox is a personal responsive portfolio template based on bootstrap v3.3.6">
    <meta name="author" content="ledetox">

    <title>deepsols | Portfolio</title>

    <!-- Favicons Links -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('files/img/favicons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('files/img/favicons/favicon-32x32.png')}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{asset('files/img/favicons/favicon-16x16.png')}}" sizes="16x16">
    <link rel="manifest" href="{{asset('files/img/favicons/manifest.json')}}">
    <link rel="mask-icon" href="{{asset('files/img/favicons/safari-pinned-tab.svg')}}" color="#f7465b">
    <link rel="shortcut icon" href="{{asset('files/img/favicons/favicon.ico')}}">
    <meta name="msapplication-config" content="img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#0c7cd5">

    <!-- Bootstrap css file -->
    <link rel="stylesheet" href="{{asset('files/css/bootstrap.min.css')}}">
    <!-- Fontawesome library css file -->
    <link rel="stylesheet" href="{{asset('files/css/font-awesome.min.css')}}">
    <!-- Animate css file -->
    <link rel="stylesheet" href="{{asset('files/css/animate.css')}}">
    <!-- Slick Slider css file -->
    <link rel="stylesheet" href="{{asset('files/css/slick.css')}}">
    <!-- Custom styles css file -->
    <link rel="stylesheet" href="{{asset('files/css/style.css')}}">
    <!-- Color styles css file -->
    <link rel="stylesheet" href="{{asset('files/css/colors/color-1.css')}}">


    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.js"></script>
    <![endif]-->

</head>
<body id="top-page" data-spy="scroll" data-target=".navbar-fixed-top" data-offset="70">

<!-- Start Loading Page -->
<div class="loading">
    <div class="loading-wrapper">
        <div class="loader"></div>
        <h4>deepsols Loading</h4>
    </div>
</div>
<!-- End Loading Page -->


<!-- Start Color-Box Switcher -->
<div class="color-switcher closed text-center">
    <h6>Color Switcher</h6>
    <div class="switcher-btn">
        <i class="fa fa-gear fa-spin"></i>
    </div>
    <div class="colors">
        <p class="para">Choose your favourite color</p>
        <hr>
        <ul class="list-unstyled"> <!-- Colors boxes -->
            <li class="color-slot" data-background="#f7465b"
                data-target="https://www.ledetoxhouse.com/public/css/colors/color-1.css"></li>
            <li class="color-slot" data-background="#874fe8"
                data-target="https://www.ledetoxhouse.com/public/css/colors/color-2.css"></li>
            <li class="color-slot" data-background="#B39964"
                data-target="https://www.ledetoxhouse.com/public/css/colors/color-3.css"></li>
            <li class="color-slot" data-background="#00b85b"
                data-target="https://www.ledetoxhouse.com/public/css/colors/color-4.css"></li>
            <li class="color-slot" data-background="#0C7CD5"
                data-target="https://www.ledetoxhouse.com/public/css/colors/color-5.css"></li>
            <li class="color-slot" data-background="#f9ca3b"
                data-target="https://www.ledetoxhouse.com/public/css/colors/color-6.css"></li>
            <li class="color-slot" data-background="#f27768"
                data-target="https://www.ledetoxhouse.com/public/css/colors/color-7.css"></li>
            <li class="color-slot" data-background="#38C8BD"
                data-target="https://www.ledetoxhouse.com/public/css/colors/color-8.css"></li>
            <li class="color-slot" data-background="#ff5552"
                data-target="https://www.ledetoxhouse.com/public/css/colors/color-9.css"></li>
            <li class="color-slot" data-background="#30e0e0"
                data-target="https://www.ledetoxhouse.com/public/css/colors/color-10.css"></li>
            <li class="color-slot" data-background="#F27935"
                data-target="https://www.ledetoxhouse.com/public/css/colors/color-11.css"></li>
            <li class="color-slot" data-background="#913d88"
                data-target="https://www.ledetoxhouse.com/public/css/colors/color-12.css"></li>
            <li class="color-slot" data-background="#fdb511"
                data-target="https://www.ledetoxhouse.com/public/css/colors/color-13.css"></li>
            <li class="color-slot" data-background="#E44832"
                data-target="https://www.ledetoxhouse.com/public/css/colors/color-14.css"></li>
            <li class="color-slot" data-background="#5dca7d"
                data-target="https://www.ledetoxhouse.com/public/css/colors/color-15.css"></li>
            <li class="color-slot" data-background="#F4B350"
                data-target="https://www.ledetoxhouse.com/public/css/colors/color-16.css"></li>
        </ul>
    </div>
    <p class="para">Choose map style</p>
    <hr>
    <ul class="map-styles">
        <li><a href="index-static.html">light map</a></li>
        <li><a href="index-static-dark-map.html">dark map</a></li>
    </ul>
</div>
<!-- End Color-Box Switcher -->

<!-- start Home Section -->
<div id="home" class="parallax main">
    <!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <!-- Start container -->
    <div class="container">
        <!-- Logo and toggle  -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collaps" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Start Logo -->
            <a class="scroll-link navbar-brand" href="#top-page">deep <span class="colored-brand">sols</span></a>
            <!-- End Logo -->
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collaps">
            <ul class="nav navbar-nav navbar-right">
                <li class="active">
                    <a class="scroll-link" href="#top-page">Home</a>
                </li>
                <li>
                    <a class="scroll-link" href="#about">About Me</a>
                </li>
                <li>
                    <a class="scroll-link" href="#programs">Programs</a>
                </li>
                <li>
                    <a class="scroll-link" href="#cosultation">Consultation</a>
                </li>
                <li>
                    <a class="scroll-link" href="#blogs">News</a>
                </li>

                <li>
                    <a class="scroll-link" href="#faqs">FAQs</a>
                </li>
                <li>
                    <a class="scroll-link" href="#testimonials">Testimonials</a>
                </li>
                <li>
                    <a class="scroll-link" href="#contact">Contact</a>
                </li>
            </ul>
        </div>   <!-- /.navbar-collapse -->
    </div>   <!-- End container -->
</nav>
<!-- End Navigation -->
    <!-- Start Content -->
    <div class="hero-content-wrapper overlay">
        <div class="hero-content text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1>Deepsols</h1>
                        <p>Development<span class="dot"></span>Maintenance<span class="dot"></span>Laravel</p>
                        <a href="#portfolio" class="scroll-link btn btn-custom reverse light">My Works</a>
                        <a href="#contact" class="scroll-link btn btn-custom">Hire Me</a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Content -->
    <a href="#about" class="go-down scroll-link">
        <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
    </a>
</div>
<!-- End Home Section -->

<!-- Start About Me Section -->
<section id="about" class="section">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="profile-intro text-center">
                    <div class="profile-img-wrapper wow fadeInUp" data-wow-duration="1s" data-wow-offset="200">
                        <img class="img-responsive img-circle" src="https://www.ledetoxhouse.com/public/img/pic3.jpg" alt="Kiran Zafar profile">
                    </div>
                    <h2>Kiran Zafar</h2>
                    <div class="separator centered"></div>
                    <p class="title">Nutritionist</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- My Personal Info -->
            <div class="profile text-center col-sm-5 col-sm-push-7">
                <div class="wow fadeInRight" data-wow-duration="1s" data-wow-offset="200">
                    <h4>Personal Info</h4>
                    <div class="separator centered"></div>
                    <p class="para"><span class="highlight">My Name:</span>Kiran Zafar</p>
                    <p class="para"><span class="highlight">Nationality:</span> Egyptian</p>
                    <p class="para"><span class="highlight">Date Of Birth:</span> 06-09-1991</p>
                    <p class="para"><span class="highlight">E-mail:</span> <a href="mailto:admin@ledetoxhouse.com">admin@ledetoxhouse.com</a>
                    </p>
                    <p class="para"><span class="highlight">Website:</span> <a href="#">www.Johndoe.com</a></p>
                    <p class="para"><span class="highlight">My Phone:</span> <a href="tel:00201120211112">+20 11 202 111
                            12</a></p>
                    <p class="para"><span class="highlight">My Hobbies:</span> Football, Movies, Video Games</p>
                </div>
            </div>
            <div class="info-tabs col-sm-7 col-sm-pull-5 wow fadeInLeft" data-wow-duration="1s" data-wow-offset="200">
                <!-- Tabs Nav -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#about-me-panel" aria-controls="about-me-panel" role="tab" data-toggle="tab">About
                            Me</a>
                    </li>
                    <li role="presentation">
                        <a href="#why-me-panel" aria-controls="why-me-panel" role="tab" data-toggle="tab">Why Me</a>
                    </li>
                    <li role="presentation">
                        <a href="#my-vision-panel" aria-controls="my-vision-panel" role="tab" data-toggle="tab">My
                            Vision</a>
                    </li>
                </ul>
                <!-- Tabs Panel -->
                <div class="tab-content">
                    <!-- About Me Panel -->
                    <div role="tabpanel" class="tab-pane fade in active" id="about-me-panel">
                        <h4>About Me</h4>
                        <div class="separator"></div>
                        <p class="para"><span>Hello, <br> Iam KIRAN ZAFAR, Nutritionist Planner with 3 years of experience rapidiously results.</span>
                        </p>
                        <p class="para">whereas multidisciplinary intellectual capital. Distinctively synergize
                            market-driven innovation and prospective channels. Dramatically drive an expanded array of
                            expertise with distinctive technology. Completely cultivate standardized manufactured.</p>
                    </div>
                    <!-- Why Me Panel -->
                    <div role="tabpanel" class="tab-pane fade" id="why-me-panel">
                        <h4>Why to choose me</h4>
                        <div class="separator"></div>
                        <p class="para">Assertively target cooperative experiences whereas tactical total linkage.
                            Intrinsicly transition end-to-end synergy via low-risk high-yield internal or "organic"
                            sources. Assertively synergize dynamic scenarios through user friendly services. Seamlessly
                            communicate.</p>
                        <p class="para">Competently exploit just in time synergy and competitive human capital.
                            Efficiently maintain functionalized "outside the box" thinking for cooperative channels.
                            Energistically.</p>
                    </div>
                    <!-- My Vision Panel -->
                    <div role="tabpanel" class="tab-pane fade" id="my-vision-panel">
                        <h4>Here is My Vision</h4>
                        <div class="separator"></div>
                        <p class="para">Seamlessly administrate team building opportunities after sustainable portals.
                            Phosfluorescently incentivize cost effective action items without innovative meta-services.
                            Globally monetize backward-compatible portals and performance based bandwidth. Distinctively
                            underwhelm cost effective.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Me Section -->

<!-- Start Services Section -->
<section id="programs" class="section text-center">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-intro">
                    <h2>Meet My Fitness Program</h2>
                    <div class="separator centered"></div>
                    <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                        took a galley of type and scrambled it to make a type specimen book</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Service No. ( 1 ) -->
            <div class="service col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-offset="200">
                <img class="img-responsive" src="https://www.ledetoxhouse.com/public/img/pic1.jpeg" alt="" style="margin-bottom: 15px;">
            </div>
            <!-- Service No. ( 2 ) -->
            <div class="service col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-offset="200">
                <img class="img-responsive" src="https://www.ledetoxhouse.com/public/img/pic3.jpg" alt="" style="margin-bottom: 15px;">
            </div>
            <!-- Service No. ( 3 ) -->
            <div class="service col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-offset="200">
                <img class="img-responsive" src="https://www.ledetoxhouse.com/public/img/pic2.jpg" alt="" style="margin-bottom: 15px;">
            </div>
        </div>
    </div>
</section>
<!-- End Services Section -->

<!-- Start consultation Section -->
<section id="cosultation" class="section">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-intro text-center wow fadeInUp" data-wow-duration="1s" data-wow-offset="200">
                    <h2>Consultation</h2>
                    <div class="separator centered"></div>
                    <p class="para">Dramatically repurpose low-risk high-yield ideas without robust customer service.
                        Intrinsicly build fully tested total linkage without scalable.</p>
                </div>
            </div>
        </div>
        <!-- Step 2 -->
        <div class="row process-step">
            <div class="col-sm-7 col-sm-push-5">
                <div class="process-text wow fadeInRight" data-wow-duration="1s" data-wow-offset="200">
                    <p class="para">Completely transition enterprise imperatives and virtual methods of empowerment.
                        Authoritatively drive ethical catalysts for change for impactful schemas. Assertively evisculate
                        an expanded array of internal or "organic" sources before.</p>
                    <ul>
                        <h5><li>Lorem Ipsum is simply dummy text of the printing and typesetting industry</li></h5>
                        <h5><li>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</li></h5>
                        <h5> <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li></h5>
                    </ul>
                </div>
            </div>
            <div class="col-sm-5 col-sm-pull-7">
                <div class="process-img wow fadeInLeft" data-wow-duration="1s" data-wow-offset="200">
                    <img src="https://www.ledetoxhouse.com/public/img/pic4.jpg" alt="Designing" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End consultation Section -->

<!-- Start Blogs Section -->
<section id="blogs" class="section text-center">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-intro">
                    <h2>News</h2>
                    <div class="separator centered"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Service No. ( 1 ) -->
            <div class="service col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-offset="200" style="margin-bottom: 15px;">
                <img class="img-responsive" src="https://www.ledetoxhouse.com/public/img/pic5.jpg" alt="" >
                <h5 class="title pt-1" style="padding-top: 15px;">
                    <a href="#">How to take measurements at home?</a>
                </h5>
                <span class="text-muted">June 24, 2021</span>
            </div>
            <!-- Service No. ( 2 ) -->
            <div class="service col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-offset="200" style="margin-bottom: 15px;">
                <img class="img-responsive" src="https://www.ledetoxhouse.com/public/img/pic6.jpg" alt="" >
                <h5 class="title" style="padding-top: 15px;">
                    <a href="#">Gut Health And Its Effect On Our Bodies</a>
                </h5>
                <span class="text-muted" >June 24, 2021</span>
            </div>

            <!-- Service No. ( 3 ) -->
            <div class="service col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-offset="200">
                <img class="img-responsive" src="https://www.ledetoxhouse.com/public/img/pic7.jpg" alt="">
                <h5 class="title pt-1" style="padding-top: 15px;">
                    <a href="#">Healthy Ways To Gain Weight</a>
                </h5>
                <span class="text-muted">June 24, 2021</span>
            </div>
        </div>
    </div>
</section>
<!-- End Blogs Section -->

<!-- Start Why Choose Us Section -->
<section id="faqs" class="section">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-intro text-center wow fadeInUp" data-wow-duration="1s" data-wow-offset="200">
                    <h2>FAQs</h2>
                    <div class="separator centered"></div>
                </div>
            </div>
        </div>
        <!-- Step 2 -->
        <div class="row process-step">
            <div class="col-sm-7 col-sm-push-5">
                <div class="process-text wow fadeInRight" data-wow-duration="1s" data-wow-offset="200">
                    <p class="para">Completely transition enterprise imperatives and virtual methods of empowerment.
                        Authoritatively drive ethical catalysts for change for impactful schemas. Assertively evisculate
                        an expanded array of internal or "organic" sources before.</p>
                    <ul>
                        <h5><li>Lorem Ipsum is simply dummy text of the printing and typesetting industry</li></h5>
                        <h5><li>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</li></h5>
                       <h5> <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li></h5>
                    </ul>
                </div>
            </div>
            <div class="col-sm-5 col-sm-pull-7">
                <div class="process-img wow fadeInLeft" data-wow-duration="1s" data-wow-offset="200">
                    <img src="https://www.ledetoxhouse.com/public/img/pic9.jpg" alt="Designing" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Start Testimonials Section -->
<section id="testimonials" class="section text-center parallax">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-intro">
                    <h2>What my Lovely clients say</h2>
                    <div class="separator centered"></div>
                    <p class="para">Synergistically create extensive intellectual capital rather than clicks-and-mortar
                        materials.</p>
                </div>
            </div>
        </div>
        <!-- Start Carousel -->
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <!-- Items Wrapper -->
            <div class="carousel-inner" role="listbox">
                <!-- Client NO. 1 -->
                <div class="item row active">
                    <div class="client-details">
                        <img class="img-circle img-responsive" src="https://www.ledetoxhouse.com/public/img/pic8.jpg" alt="Client 1" >
                        <h4>Ahmed Beheiry</h4>
                    </div>
                    <p class="testimonial-text para col-sm-8 col-sm-offset-2 col-xs-12">Completely evisculate
                        client-based models before compelling data. Competently myocardinate cooperative best practices
                        via out-of-the-box convergence. Objectively empower synergistic materials via client-centered
                        action items. Compellingly empower flexible.</p>
                </div>
                <!-- Client NO. 2 -->
                <div class="item row">
                    <div class="client-details">
                        <img class="img-circle img-responsive" src="https://www.ledetoxhouse.com/public/img/pic6.jpg" alt="Client 2" >
                        <h4>Sarah Ali</h4>
                    </div>
                    <p class="testimonial-text para col-sm-8 col-sm-offset-2 col-xs-12">Rapidiously target technically
                        sound collaboration and idea-sharing and efficient leadership. Competently utilize real-time
                        systems and maintainable models. Monotonectally create dynamic alignments before intermandated
                        e-business.</p>
                </div>
                <!-- Client NO. 3 -->
                <div class="item row">
                    <div class="client-details">
                        <img class="img-circle img-responsive" src="https://www.ledetoxhouse.com/public/img/pic2.jpg" alt="Client 3" >
                        <h4>Hossam Hassan</h4>
                    </div>
                    <p class="testimonial-text para col-sm-8 col-sm-offset-2 col-xs-12">Proactively visualize granular
                        outsourcing rather than synergistic e-tailers. Efficiently aggregate client-focused outsourcing
                        rather than prospective manufactured products. Distinctively utilize client-focused action items
                        rather than.</p>
                </div>
                <!-- Client NO. 4 -->
                <div class="item row">
                    <div class="client-details">
                        <img class="img-circle img-responsive" src="https://www.ledetoxhouse.com/public/img/pic7.jpg" alt="Client 4" >
                        <h4>Mohammed Diab</h4>
                    </div>
                    <p class="testimonial-text para col-sm-8 col-sm-offset-2 col-xs-12">Proactively predominate fully
                        researched markets and virtual testing procedures. Progressively visualize excellent e-business
                        for accurate benefits. Distinctively e-enable leveraged technology rather than holistic.</p>
                </div>
            </div>
            <!-- Controls -->
            <div class="carousel-controls">
                <a href="#carousel" class="left carousel-control" role="button" data-slide="prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a href="#carousel" class="right carousel-control" role="button" data-slide="next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>  <!-- End Carousel -->
    </div>
</section>
<!-- End Testimonials Section -->

<!-- Start Contact Section -->
<div id="contact" class="section text-center parallax">
    <div class="container">
        <div class="overlay"></div>
        <div class="row">
            <div class="col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-offset="200">
                <div class="section-intro">
                    <h2>Keep in touch</h2>
                    <div class="separator centered"></div>
                    <p class="para">Here you can find me. I'd like to hear from you all. You can hire me, ask me about
                        anything or buy me coffee.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="row">
                    <div class="col-sm-6 col-xs-12 call-info wow fadeInUp" data-wow-duration="1s" data-wow-offset="200">
                        <div class="info-wrapper">
                            <i class="fa fa-home fa-fw"></i>
                            <h4>My Place</h4>
                            <p class="para">1234 st, Darlon city, Egypt <br> 414220</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12 call-info wow fadeInUp" data-wow-duration="1s" data-wow-offset="200">
                        <div class="info-wrapper">
                            <i class="fa fa-phone fa-fw"></i>
                            <h4>Call Me</h4>
                            <p class="para">(+020) 12 221 187 22 <br> (+020) 11 221 187 21</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-xs-12 call-info wow fadeInUp" data-wow-duration="1s" data-wow-offset="200">
                        <div class="info-wrapper">
                            <i class="fa fa-envelope-o fa-fw"></i>
                            <h4>Send Message</h4>
                            <p class="para">info@ledetoxhouse.ca <br> admin@ledetoxhouse.ca</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12 call-info wow fadeInUp" data-wow-duration="1s" data-wow-offset="200">
                        <div class="info-wrapper">
                            <i class="fa fa-clock-o fa-fw"></i>
                            <h4>Work Time</h4>
                            <p class="para">Sat - Thr : 8.00 - 16.00 <br> Friday: Holiday</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1s" data-wow-offset="200">
                <!-- Start Contact Form -->
                <form data-toggle="validator" id="contact-form" role="form">
                    <div class="form-intro">
                        <h4>Leave Me A Message</h4>
                        <div class="separator"></div>
                        <p class="para">You can ask me about anything here, just type your name and e-mail and I'll
                            answer you as soon as possible</p>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <label for="name" class="input-group-addon">
                                <span class="glyphicon glyphicon-user"></span>
                            </label>
                            <input type="text" placeholder="Your Name" class="form-control col-xs-12" id="name"
                                   name="name" data-error="Please enter a correct name." required>
                        </div>
                        <span class="help-block with-errors"></span>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <label for="mail" class="input-group-addon">
                                <span class="glyphicon glyphicon-envelope"></span>
                            </label>
                            <input type="email" placeholder="Your E-mail" class="form-control col-xs-12" id="mail"
                                   name="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                                   data-error="Please enter a correct E-mail." required>
                        </div>
                        <span class="help-block with-errors"></span>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <label for="message" class="input-group-addon">
                                <span class="glyphicon glyphicon-comment"></span>
                            </label>
                            <textarea class="form-control" rows="4" id="message" name="message"
                                      placeholder="Type your message" data-error="Please enter your message"
                                      required></textarea>
                        </div>
                        <span class="help-block with-errors"></span>
                    </div>
                    <div>
                        <button type="submit" id="submit" class="btn btn-custom btn-block">Send Message</button>
                    </div>
                </form>  <!-- End Contact Form -->
                <div class="form-response">&nbsp;</div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 social-wrapper wow fadeInLeft" data-wow-duration="1s" data-wow-offset="100">
                <h4>follow me here :</h4>
                <!-- Follow Me Social Links -->
                <div class="social-links">
                    <a href="#" class="icon fb"></a> <!-- Facebook Link -->
                    <a href="#" class="icon tw"></a> <!-- Twitter Link -->
                    <a href="#" class="icon gh"></a> <!-- Github Link -->
                    <a href="#" class="icon cp"></a> <!-- Codepen Link -->
                    <a href="#" class="icon li"></a> <!-- Linkedin Link -->
                    <a href="#" class="icon dr"></a> <!-- Dribbble Link -->
                    <a href="#" class="icon be"></a> <!-- Behance Link -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact Section -->





<!-- Start Footer Section -->
<footer>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <p class="para">&copy; ledetoxhouse.com All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Section -->

<!-- Start To Top Button -->
<div id="toTop">
    <div class="top-button">
        <i class="fa fa-angle-up"></i>
    </div>
</div>
<!-- End To Top Button -->

<!-- jQuery JS file -->
<script src="{{asset('files/js/jquery-1.12.1.min.js')}}"></script>
<!-- Bootstrap JS file -->
<script src="{{asset('files/js/bootstrap.min.js')}}"></script>
<!-- jQuery easing file -->
<script src="{{asset('files/js/jquery.easing.1.3.js')}}"></script>
<!-- Parallax JS file -->
<script src="{{asset('files/js/jquery.parallax-1.1.3.js')}}"></script>
<!-- Smoothscroll JS file -->
<script src="{{asset('files/js/smoothscroll.js')}}"></script>
<!-- appear JS file -->
<script src="{{asset('files/js/jquery.appear.js')}}"></script>
<!-- Count-to JS file -->
<script src="{{asset('files/js/jquery.countTo.js')}}"></script>
<!-- EasyPieChart JS file -->
<script src="{{asset('files/js/jquery.easypiechart.min.js')}}"></script>
<!-- Mixitup JS file -->
<script src="{{asset('files/js/jquery.mixitup.min.js')}}"></script>
<!-- Slick Slider JS file -->
<script src="{{asset('files/js/slick.min.js')}}"></script>
<!-- Typed JS file -->
<script src="{{asset('files/js/typed.min.js')}}"></script>
<!-- Bootstrap form validator JS file -->
<script src="{{asset('files/js/validator.min.js')}}"></script>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<!-- Map JS file -->
<script src="{{asset('files/js/gmaps.min.js')}}"></script>
<!-- Light Map Js file -->
<script class="map-script" src="{{asset('files/js/light-map.js')}}"></script>
<!-- Custom JS file -->
<script src="{{asset('files/js/scripts.js')}}"></script>
<!-- Wow.js file -->
<script src="{{asset('files/js/wow.min.js')}}"></script>
</body>
</html>
