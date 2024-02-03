

<?php
include './db/connection.php';
include './db/main.php';
checkSession();
CheckRole("0-1",$_SESSION['role']);
?>


<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gym Template">
    <meta name="keywords" content="Gym, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>no-limit</title>

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
                <li class="active"><a href="#">Pages</a>
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
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-youtube-play"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
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

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>Calorie Calculator</h2>
                        <div class="bt-option">
                            <a href="./index2.php">Home</a>
                            <a href="#">Pages</a>
                            <span>Calorie Calculator </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- BMI Calculator Section Begin -->
    <section class="bmi-calculator-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title chart-title">
                        <span>check your body</span>
                        <h2>FOOD CHART</h2>
                    </div>
                    <div class="chart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Protein</th>
                                    <th>Bulking</th>
                                    <th>Cutting</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="point">Chicken (breast)</td>
                                    <td>Dairy products</td>
                                    <td>Whey protein and low fat cheese</td>
                                </tr>
                                <tr>
                                    <td class="point">Meat and Fish</td>
                                    <td>Nuts and Nut Butters</td>
                                    <td>Beans and pulses</td>
                                </tr>
                                <tr>
                                    <td class="point">Eggs (Whites)</td>
                                    <td>Beef, Oats, Pasta</td>
                                    <td>Whole grains</td>
                                </tr>
                                <tr>
                                    <td class="point">Soya chunks and Chick peas</td>
                                    <td>Salmon and Avocado</td>
                                    <td>Leafy greens</td>
                                </tr>
                                <tr>
                                    <td class="point">Sprouts</td>
                                    <td>Rice and Dark chocolate</td>
                                    <td>Fruits</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title chart-calculate-title">
                        <span>check your body</span>
                        <h2>CALCULATE YOUR BODY FAT</h2>
                    </div>
                    <div class="chart-calculate-form">
                        <p>The Maintanance calorie will be displayed down there, so if you wanna bulk up eat 500 calories extra along with your maintanance calorie to gain 0.5kg per week or if you want to Cut your body reduce 500 calories from your maintance calorie to loose body fat. </p>
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input id="weight" type="text" placeholder="Weight / kg">
                                </div>
                                <div class="col-sm-6">
                                    <input id="myfat" type="text" placeholder="Your Body Fat">
                                </div>
                                <div class="col-sm-6">
                                    <input id="achievefat" type="text" placeholder="The Body Fat You want to achieve">
                                </div>
                                <!-- <div class="col-sm-6">
                                    <input id="abdominal" type="text" placeholder="abdominal / inch">
                                </div>
                                <div class="col-sm-6">
                                    <input id="age" type="text" placeholder="age">
                                </div>
                                <div class="col-sm-6">
                                    <input id="gender" type="text" placeholder="Sex">
                                </div> -->
                                <div class="col-lg-12">
                                    <button type="button" onclick=calculateCalorie()>Calculate</button>

                                </div>
                                <div class="col-sm-6">
                                    <p id="result1"></p>
                                    <p id="result2"></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="./js/calorie.js"></script>
    <!-- BMI Calculator Section End -->

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



</body>

</html>