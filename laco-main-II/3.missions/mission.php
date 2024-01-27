<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="mission.css">
    <title>La Consolacion College Novaliches</title>
</head>

<body>
    <header class="header">
        <div class="nav container">
            <div class="nav__data">
                <div class="main-logo">
                    <a href="#" class="nav__logo"><img src="main-2.png" alt=""></a>
                </div>
                <div class="nav__toggle" id="nav-toggle">
                    <i class="uil uil-bars nav__burger"></i>
                    <i class="uil uil-times nav__close"></i>
                </div>
            </div>

            <!--=============== NAV MENU ===============-->
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">

                    <li><a href="../index.php" class="nav__link">Home</a></li>
                    <!--=============== DROPDOWN 1 ===============-->

                    <li class="dropdown__item">
                        <div class="nav__link">
                            About<i class="ri-arrow-down-s-line dropdown__arrow"></i>

                        </div>

                        <ul class="dropdown__menu">
                            <li>
                                <a href="#" class="dropdown__link">
                                    <i class="uil uil-eye"></i></i>Mission & Vission
                                </a>
                            </li>
                            <li>
                                <a href="../4.data_privacy/data_priv.php" class="dropdown__link">
                                    <i class="uil uil-shield-exclamation"></i>Data Privacy
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
                                <a href="../5.courses/courses.php" class="dropdown__link">
                                    <i class="uil uil-list-ul"></i>Program Offerings
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <section class="MSV-cards">
        <div class="MSV-header">
            <h1>Mission, Vision & Core Values</h1>
        </div>
        <div class="msv-main">
            <div class="card card1">
                <div class="container_1">
                    <img src="3.jpg" alt="">
                </div>
                <div class="details">
                    <h3>Mission Statement</h3>
                    <p>We commit the LCC-NovaIiches to
                        live a Christ-like life, work towards a
                        holistic
                        transformation of
                        the
                        community and render loving and
                        enduring services as we respond to
                        the call of the times.</p>
                </div>
            </div>

            <div class="card card2">
                <div class="container_1">
                    <img src="4.jpg" alt="">
                </div>
                <div class="details">
                    <h3>Vision Statement</h3>
                    <p>We, envision the LCC-Novaliches to
                        become evangelizers in pursuit of
                        Quality Catholic Education rooted to
                        the values of our foundresses Mo.
                        Rita and Mo. Consuelo and in the
                        spirit of St. Augustine.</p>
                </div>
            </div>

            <div class="card card2">
                <div class="container_1">
                    <img src="5.jpg" alt="">
                </div>
                <div class="details">
                    <h3>Vision Statement</h3>
                    <p>We, envision the LCC-Novaliches to
                        become evangelizers in pursuit of
                        Quality Catholic Education rooted to
                        the values of our foundresses Mo.
                        Rita and Mo. Consuelo and in the
                        spirit of St. Augustine.</p>
                </div>
            </div>
        </div>
    </section>

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
            <img src="main-2.png" alt="">
            <div class="text-content">
                <p class="copyright"><i class="ri-copyright-line"></i>All rights reserved</p>
            </div>
        </div>
    </section>
    <script src="mission.js"></script>
</body>

</html>