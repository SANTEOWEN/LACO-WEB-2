<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--=============== MAIN JS ===============-->
    <script src="functions/main.js" defer></script>

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="css/index.css">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!--=============== Title ===============-->
    <title>La Consolacion College Novaliches</title>

</head>

<body>
    <!--=============== HEADER ===============-->
    <header class="header">
        <div class="nav container">
            <div class="nav__data">
                <div class="main-logo">
                <a href="#" class="nav__logo"><img src="assets/logo/main.png" alt=""></a>
                </div>
                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line nav__burger"></i>
                    <i class="ri-close-line nav__close"></i>
                </div>
            </div>

            <!--=============== NAV MENU ===============-->
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">

                    <li><a href="" class="nav__link">Home</a></li>

                    <!--=============== DROPDOWN 1 ===============-->

                    <li class="dropdown__item">
                        <div class="nav__link">
                            About<i class="ri-arrow-down-s-line dropdown__arrow"></i>

                        </div>

                        <ul class="dropdown__menu">
                            <li>
                                <a href="#" class="dropdown__link">
                                    <i class="ri-building-line"></i> History
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dropdown__link">
                                    <i class="ri-bubble-chart-line"></i>Mission & Vission
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dropdown__link">
                                    <i class="ri-book-open-line"></i>Philosopy of Education
                                </a>
                            </li>

                            <li>
                                <a href="#" class="dropdown__link">
                                    <i class="ri-lock-2-line"></i>Data Privacy
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!--=============== DROPDOWN 2 ===============-->

                    <li class="dropdown__item">
                        <div class="nav__link">
                            Admissions<i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>

                        <ul class="dropdown__menu">
                            <li>
                                <a href="#" class="dropdown__link">
                                    <i class="ri-list-check"></i>Program Offerings
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dropdown__link">
                                    <i class="ri-checkbox-line"></i>Requirements
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dropdown__link">
                                    <i class="ri-git-repository-line"></i>Enrollment
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <!--=============== Modal ===============-->
    <dialog class="modal" id="modal">
        <div class="close"><i class="ri-close-line closed"></i></div>
        <div class="content">

            <div class="main-content">
                <h2>Authorize which Account</h2>
                <p>Choose what type of <span> account </span> you have</p>
            </div>

            <div class="buttons-container">
                <div class="btn"><a href="#">TEACHER</a></div>
                <div class="btn"><a href="_components/student-login.php">STUDENT</a></div>
                <div class="btn"><a href="#">ADMIN</a></div>
            </div>

            <p></p>

        </div>
    </dialog>

    <!--=============== Slider ===============-->
    <section class="slider-1">
        <div class="swiper" id="swiper-1">
            <div class="swiper-wrapper">
                <section class="swiper-slide slide" style="background: url('assets/logo/mary_1.jpg') no-repeat;">
                    <div class="content">
                        <h3>Unitas Caritas Veritas</h3>
                        <p><span>La Consolacion College Novaliches</span> commits to provide transformative education
                            and to instill in all the members of the Community of Friends the passion for Peace, Justice
                            and Integrity of Creation.</p>
                        <button class="button open-button btn">Get Started!</button>
                    </div>
                </section>
                <section class="swiper-slide slide" style="background: url('assets/school_photos/3.jpg') no-repeat;">
                    <div class="content">
                        <h3>The Best Courses You Will Find Here</h3>
                        <p>We Have a <span><a href="">Variety</a></span> of courses that you can choose.</p>
                    </div>
                </section>
                <section class="swiper-slide slide" style="background: url('assets/logo/test_1.jpg') no-repeat;">
                    <div class="content">
                        <h3>We Evangelize</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p>
                    </div>
                </section>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!--=============== Small about section ===============-->
    <section class="about">

        <div class="section-container">

            <div class="box">
                <div class="content_1">
                    <h1>Hello and Welcome!</h1>
                    <p>Where curiosity meets opportunity, and every student is set on a path to excel. We're thrilled to have you </p>
                    <div class="button-container">
                        <a href="#">Our History</a>
                    </div>
                </div>
            </div>

            <div class="containers">
                <div class="slider-wrapper">
                    <div class="slider">
                        <img id="slide-1" src="assets/school_photos/1.jpg" alt="">
                        <img id="slide-2" src="assets/school_photos/2.jpg" alt="">
                        <img id="slide-3" src="assets/school_photos/4.jpg" alt="">
                        <img id="slide-4" src="assets/school_photos/5.jpg" alt="">
                    </div>
                    <div class="slider-nav">
                        <a href="#slide-1"></a>
                        <a href="#slide-2"></a>
                        <a href="#slide-3"></a>
                        <a href="#slide-4"></a>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <!--=============== Footer ===============-->
    <section class="footer">
        <div class="footer-content">
            <h4>Quick Links</h4>
            <li><a href="#">Ask Questions</a></li>
            <li><a href="#">Send Feedback</a></li>
            <li><a href="#">Private Policy</a></li>
            <li><a href="#">Terms of Use</a></li>
        </div>

        <div class="footer-content">
            <div class="contact-us">
                <h4>Contact Us</h4>
                <li>
                    <p><i class="ri-facebook-box-fill"></i><a href="https://www.facebook.com/LCCDeparoNovaliches/">La
                            Consolacion College Novaliches</a></p>
                </li>
                <li>
                    <p><i class="ri-mail-fill"></i>lacoco_rdo@yahoo.com.ph</p>
                </li>
                <li>
                    <p><i class="ri-smartphone-fill"></i>0966-549-4493</p>
                </li>
                <li>
                    <p><i class="ri-phone-fill"></i>8287-1013 / 8289-6156</p>
                </li>
            </div>
        </div>

        <div class="footer-content">
            <img src="assets/school_photos/main-2.png" alt="">
            <div class="text-content">
                <p class="copyright"><i class="ri-copyright-line"></i>All rights reserved</p>
            </div>
        </div>
    </section>
    <a href="#top" class="back-to-top">
        <i class="ri-arrow-drop-up-line"></i>
    </a>
    <!--=============== SWIPER JS ===============-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>

</html>