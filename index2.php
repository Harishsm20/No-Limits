

<?php
include './db/connection.php';
include './db/main.php';
checkSession();
CheckRole("0-1",$_SESSION['role']);
?>


<!doctype html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gym Template">
    <meta name="keywords" content="Gym, unica, creative, php">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>no-limits</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

   
    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="fa fa-close"></i>
        </div>
        <div class="canvas-search search-switch">
            <i class="fa fa-search"></i>
        </div>
        <nav class="canvas-menu mobile-menu">
            <ul>
                <li><a href="./index2.php">Home</a></li>
                <li><a href="./about-us.php">About Us</a></li>
                <li><a href="./class-details.php">Classes</a></li>
                <li><a href="./services.php">Services</a></li>
                <li><a href="./team.php">Our Team</a></li>
                <li><a href="#">Pages</a>
                    <ul class="dropdown">
                        <li><a href="./class-timetable.php">Classes timetable</a></li>
                        <li><a href="./calorie-calculator.php">Calorie Calculator</a></li>
                        <li><a href="./bmi-calculator.php">Bmi calculator</a></li>
                        <li><a href="./bodyfat.php">Bodyfat Calculator</a></li>
                        <li><a href="./team.php">Our team</a></li>
                        <li><a href="./gallery.php">Gallery</a></li>
                        
                    </ul>
                </li>
                <?php 
    $page=$_SESSION['role']==0?" <li><a href='./comments.php'>Comments</a></li>":" <li><a href='./contact.php'>Contact</a></li>";
    echo $page;
    ?>
               

            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="canvas-social">
            <a href="https://www.facebook.com/login/"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com/login?lang=en"><i class="fa fa-twitter"></i></a>
            <a href="https://www.youtube.com/account"><i class="fa fa-youtube-play"></i></a>
            <a href="https://www.instagram.com/accounts/login/"><i class="fa fa-instagram"></i></a>
            <a href="./api/logout.php"><i class="fa fa-sign-out"></i></a>

        </div>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="./index2.php">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="nav-menu">
                        <ul>
                            <li class="active"><a href="./index2.php">Home</a></li>
                            <li><a href="./about-us.php">About Us</a></li>
                            <li><a href="./class-details.php">Classes</a></li>
                            <li><a href="./services.php">Services</a></li>
                            <li><a href="./team.php">Our Team</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./class-timetable.php">Classes timetable</a></li>
                        <li><a href="./calorie-calculator.php">Calorie Calculator</a></li>
                        <li><a href="./bmi-calculator.php">Bmi calculator</a></li>
                        <li><a href="./bodyfat.php">Bodyfat Calculator</a></li>
                        <li><a href="./team.php">Our team</a></li>
                        <li><a href="./gallery.php">Gallery</a></li>
                        
                                </ul>
                            </li>
                            <?php 
                            $page=$_SESSION['role']==0?" <li><a href='./comments.php'>Comments</a></li>":" <li><a href='./contact.php'>Contact</a></li>";
                            echo $page;
                            ?>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-2">
                    <div class="top-option">
                        <div class="to-search search-switch">
                            <i class="fa fa-search"></i>
                        </div>
                        <div class="to-social">
                            <a href="https://www.facebook.com/login/"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/login?lang=en"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.youtube.com/account"><i class="fa fa-youtube-play"></i></a>
                            <a href="https://www.instagram.com/accounts/login/"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-1">
                    <div class="top-option">
                        <div class="to-social">
                        <a href="./api/logout.php"><i class="fa fa-sign-out"></i></a>
                        </div>
                        
                       
                    </div>
                  
                </div>
                <div class="col-lg-1">
                    <div class="top-option">
                        <div class="to-social">
                      
                        </div>
                       
                    </div>
                  
                </div>
            </div>
            <div class="canvas-open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hs-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <div class="hi-text">
                                <span>Shape your body</span>
                                <h1>Be <strong>strong</strong> traning hard</h1>
                                <a href="#" class="primary-btn">Get info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <div class="hi-text">
                                <span>Shape your body</span>
                                <h1>Be <strong>strong</strong> traning hard</h1>
                                <a href="#" class="primary-btn">Get info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- ChoseUs Section Begin -->
    <section class="choseus-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Why chose us?</span>
                        <h2>PUSH YOUR LIMITS FORWARD</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-034-stationary-bike"></span>
                        <h4>Modern equipment</h4>
                        <p>The smart tech gym equipment automatically adjusts based on the workout creating a seamless experience.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-033-juice"></span>
                        <h4>Healthy nutrition plan</h4>
                        <p>Muscles rely on carbohydrate foods like breads, cereals, pasta, rice, fruits, and vegetables for quick energy.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-002-dumbell"></span>
                        <h4>Proffesponal training plan</h4>
                        <p> Endurance, Strength, Balance, and Flexibility. Each one has different benefits. Doing one kind also can improve your ability to do the others, and variety helps reduce boredom.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="cs-item">
                        <span class="flaticon-014-heart-beat"></span>
                        <h4>Unique to your needs</h4>
                        <p>Gyms need plenty of backup quality equipment available if something happens with one of the machines so that people can still get a complete workout without having problems.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ChoseUs Section End -->

    <!-- Classes Section Begin -->
    <section class="classes-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Our Classes</span>
                        <h2>WHAT WE CAN OFFER</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="img/classes/class-1.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <span>Cardio</span>
                            <h5>Weight Reduction</h5>
                            <a href="https://www.youtube.com/watch?v=UqFzWx8X5AM"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="img/classes/class-2.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <span>Cardio</span>
                            <h5>Gymnastics</h5>
                            <a href="https://www.youtube.com/watch?v=7okuF3hrBoo"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="img/classes/class-3.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <span>STRENGTH</span>
                            <h5>Kettlebell power</h5>
                            <a href="https://www.youtube.com/watch?v=duHOGJJ71Xs"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="img/classes/class-4.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <span>STRENGTH</span>
                            <h4>Weight Lifting</h4>
                            <a href="https://www.youtube.com/watch?v=RP85w6g7jPU"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="img/classes/class-5.jpg" alt="">
                        </div>
                        <div class="ci-text">
                            <span>Training</span>
                            <h4>Boxing</h4>
                            <a href="https://www.youtube.com/watch?v=kKDHdsVN0b8"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ChoseUs Section End -->

    <!-- Banner Section Begin -->
    <section class="banner-section set-bg" data-setbg="img/banner-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="bs-text">
                        <h2>registration now to get more deals</h2>
                        <div class="bt-tips">Where health, beauty and fitness meet.</div>
                        <a class="primary-btn  btn-normal" onclick=fixed()>Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Pricing Section Begin -->
    <section class="pricing-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Our Plan</span>
                        <h2>Choose your pricing plan</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8">
                    <div class="ps-item">
                        <h3>Class drop-in</h3>
                        <div class="pi-price">
                            <h2>₹ 1250.00</h2>
                            <span>SINGLE CLASS</span>
                        </div>
                        <ul>
                            <!-- <li>Free riding</li> -->
                            <li>Unlimited equipments</li>
                            <!-- <li>Personal trainer</li> -->
                            <li>Weight losing classes</li>
                            <li>Month to Month</li>
                            <li>No time restriction</li>
                        </ul>
                        <a href="#" class="primary-btn pricing-btn">Enroll now</a>
                        <a href="#" class="thumb-icon"><i class="fa fa-picture-o"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="ps-item">
                        <h3>12 Month unlimited</h3>
                        <div class="pi-price">
                            <h2>₹ 5000.00</h2>
                            <span>SINGLE CLASS</span>
                        </div>
                        <ul>
                            <li>Free riding</li>
                            <li>Unlimited equipments</li>
                            <li>Personal trainer</li>
                            <li>Weight losing classes</li>
                            <li>Month to Month</li>
                            <li>No time restriction</li>
                        </ul>
                        <a href="#" class="primary-btn pricing-btn">Enroll now</a>
                        <a href="#" class="thumb-icon"><i class="fa fa-picture-o"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="ps-item">
                        <h3>6 Month unlimited</h3>
                        <div class="pi-price">
                            <h2>₹ 3500.00</h2>
                            <span>SINGLE CLASS</span>
                        </div>
                        <ul>
                            <li>Free riding</li>
                            <li>Unlimited equipments</li>
                            <li>Personal trainer</li>
                            <li>Weight losing classes</li>
                            <li>Month to Month</li>
                            <li>Trainer availability timings </li>
                        </ul>
                        <a href="#" class="primary-btn pricing-btn">Enroll now</a>
                        <a href="#" class="thumb-icon"><i class="fa fa-picture-o"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Section End -->

    <!-- Gallery Section Begin -->
    <div class="gallery-section">
        <div class="gallery">
            <div class="grid-sizer"></div>
            <div class="gs-item grid-wide set-bg" data-setbg="img/gallery/gallery-1.jpg">
                <a href="img/gallery/gallery-1.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item set-bg" data-setbg="img/gallery/gallery-2.jpg">
                <a href="img/gallery/gallery-2.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item set-bg" data-setbg="img/gallery/gallery-3.jpg">
                <a href="img/gallery/gallery-3.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item set-bg" data-setbg="img/gallery/gallery-4.jpg">
                <a href="img/gallery/gallery-4.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item set-bg" data-setbg="img/gallery/gallery-5.jpg">
                <a href="img/gallery/gallery-5.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <div class="gs-item grid-wide set-bg" data-setbg="img/gallery/gallery-6.jpg">
                <a href="img/gallery/gallery-6.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
        </div>
    </div>
    <!-- Gallery Section End -->

    <!-- Team Section Begin -->
    <section class="team-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-title">
                        <div class="section-title">
                            <span>Our Team</span>
                            <h2>TRAIN WITH EXPERTS</h2>
                        </div>
                        <a class="primary-btn btn-normal appoinment-btn" onclick=fixed()>appointment</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="ts-slider owl-carousel">
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="img/team/team-1.jpg">
                            <div class="ts_text">
                                <h4>Vyoma Sailor</h4>
                                <span>Weight reduction assistant</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="img/team/team-2.jpg">
                            <div class="ts_text">
                                <h4>Matt Roberts</h4>
                                <span>Workout Assistant(Male)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="img/team/team-3.jpg">
                            <div class="ts_text">
                                <h4>David Laid</h4>
                                <span>Body building Trainer(Male)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="img/team/team-4.jpg">
                            <div class="ts_text">
                                <h4>Christopher Adam Bumstead</h4>
                                <span>Weight lifting Trainer(Male)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="img/team/team-5.jpg">
                            <div class="ts_text">
                                <h4>Athart Rachel</h4>
                                <span>Gymnastic Trainer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="img/team/team-6.jpg">
                            <div class="ts_text">
                                <h4>Louise Parker</h4>
                                <span>Weight lifting Trainer(Female)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    <!-- Get In Touch Section Begin -->
    <div class="gettouch-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="gt-text">
                        <i class="fa fa-map-marker"></i>
                        <p>Mettupalayam Road, Satyamangalam, Erode<br/>near NH544H</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gt-text">
                        <i class="fa fa-mobile"></i>
                        <ul>
                            <li>8760943561</li>
                            <li>1234567890</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gt-text email">
                        <i class="fa fa-envelope"></i>
                        <p>gym123@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Get In Touch Section End -->

        <!-- Footer Section Begin -->
    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="fs-about">
                        <div class="fa-logo">
                            <a href="#"><img src="img/logo.png" alt=""></a>
                        </div>
                        <p>Believe in yourself and all that you are. Know that there is something inside you that is greater than any obstacle.</p>
                        <div class="fa-social">
                            <a href="https://www.facebook.com/login/"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/login?lang=en"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.youtube.com/account"><i class="fa fa-youtube-play"></i></a>
                            <a href="https://www.instagram.com/accounts/login/"><i class="fa fa-instagram"></i></a>
                            <a href="https://mail.google.com/mail/u/0/"><i class="fa  fa-envelope-o"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="fs-widget">
                        <h4>Our Pages</h4>
                        <ul>
                            <li><a href="./index2.php">Home</a></li>
                            <li><a href="./services.php">Services</a></li>
                            <li><a href="./class-timetable.php">Classes</a></li>
                            <li><a href="./team.php">Team</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="fs-widget">
                        <h4>Assist</h4>
                        <ul>
                            <li><a href="./api/logout.php">Logout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="fs-widget">
                        <h4>Tips & Guides</h4>
                        <div class="fw-recent">
                            <h6><a href="https://fitbod.me/blog/gym-tips-for-beginners/">16 Gym Tips For Beginners</a></h6>
                            <ul>
                                <li>15 min read</li>
                                <li>1.5M Views</li>
                            </ul>
                        </div>
                        <div class="fw-recent">
                            <h6><a href="https://www.sweat.com/blogs/fitness/workout-tips">How To Make Your Workout More Effective...</a></h6>
                            <ul>
                                <li>30 min read</li>
                                <li>3.2M Views</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
    </section>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

<script>
    function fixed(){
        window.alert("Appointment fixed");
    }
</script>

</body>

</html>