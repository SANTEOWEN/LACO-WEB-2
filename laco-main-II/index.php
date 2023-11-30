<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial- scale=1.0">
    <!--=============== MAIN JS ===============-->
    <script src="functions/main.js" defer></script>

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
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
                    <a href="#" class="nav__logo"><img src="assets/school_photos/main-2.png" alt=""></a>
                </div>
                <div class="nav__toggle" id="nav-toggle">
                    <i class="uil uil-bars nav__burger"></i>
                    <i class="uil uil-times nav__close"></i>
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
                                <a href="#History_section" class="dropdown__link">
                                    <i class="uil uil-diary"></i></i>History
                                </a>
                            </li>
                            <li>
                                <a href="3.missions/mission.php" class="dropdown__link">
                                    <i class="uil uil-eye"></i></i>Mission & Vission
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dropdown__link">
                                    <i class="uil uil-book-open"></i>Philosopy of Education
                                </a>
                            </li>

                            <li>
                                <a href="4.data_privacy/data_priv.php" class="dropdown__link">
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
                                <a href="5.courses/courses.php" class="dropdown__link">
                                    <i class="uil uil-list-ul"></i>Program Offerings
                                </a </li>
                            <li>
                                <a href="#" class="dropdown__link">
                                    <i class="uil uil-check-square"></i>Requirements
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dropdown__link">
                                    <i class="uil uil-clipboard-notes"></i>Enrollment
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!--=============== Slider ===============-->
    <section class="slider-1">
        <div class="swiper" id="swiper-1">
            <div class="swiper-wrapper">
                <section class="swiper-slide slide" style="background: url('assets/logo/mary_1.jpg') no-repeat;">
                    <div class="content_2">
                        <h3>Unitas Caritas Veritas</h3>
                        <p><span>La Consolacion College Novaliches</span> commits to provide transformative education
                            and to instill in all the members of the Community of Friends the passion for Peace, Justice
                            and Integrity of Creation.</p>
                        <button class="button open_button btn"></a>Register Now!</button>
                    </div>
                </section>
                <section class="swiper-slide slide" style="background: url('assets/school_photos/3.jpg') no-repeat;">
                    <div class="content_2">
                        <h3>The Best Courses You Will Find Here</h3>
                        <p>We Have a <span><a href="">Variety</a></span> of courses that you can choose.</p>
                    </div>
                </section>
                <section class="swiper-slide slide" style="background: url('assets/logo/test_1.jpg') no-repeat;">
                    <div class="content_2">
                        <h3>We Evangelize</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p>
                    </div>
                </section>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    
    <!--================ Registration Modal ===============-->
    <dialog class="modal" id="modal">
        <div class="container">
            <header><img src="assets/logo/main.png" alt=""></header>
            <form action="#" class="form">
                <div class="input-box">
                    <label>First Name</label>
                    <input type="text" name="Fullname" id="fullname" placeholder="Enter First Name" required>
                </div>
                <div class="input-box">
                    <label>Last Name</label>
                    <input type="text" name="Lastname" id="lastname" placeholder="Enter Last Name" required>
                </div>

                <div class="input-box">
                    <label>Middle Name</label>
                    <input type="text" name="Middlename" id="middlename" placeholder="Enter Middle Name" required>
                </div>

                <div class="input-box">
                    <label>Email</label>
                    <input type="text" name="Email" id="email" placeholder="Enter Email" required>
                </div>

                <div class="input-box">
                    <label>Phone Number </label>
                    <input type="text" name="Email" id="email" placeholder="Enter Phone number" required>
                </div>

                <div class="input-box">
                    <label>Birthday</label>
                    <input type="date" class="center" name="Birthday" id="birthday" placeholder="Enter Birthdate" required>
                </div>

                <div class="input-box">
                    <label>Passowrd</label>
                    <input type="password" name="Password" id="password" placeholder="Enter password" required>
                </div>

                <div class="input-box">
                    <label>Re-enter Password</label>
                    <input type="password" name="ReEnterPassword" id="repassword" placeholder="Re-enter Password"
                        required>
                </div>

                <button type="submit" class="submit close_button"> Login </button>
                <div class="links">
                    Already have account? <a href="student-login.php">Log In Here!</a>
                </div>
            </form>
        </div>
    </dialog>
    <!--================ Small about section ===============-->
    <section class="about">

        <div class="section-container">

            <div class="box">
                <div class="content_1">
                    <h1>Hello and Welcome!</h1>
                    <p>Where curiosity meets opportunity, and every student is set on a path to excel. We're thrilled to
                        have you </p>
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

    <!--=============== timeline section ===============-->
    <section class="timeline-section" id="History_section">
        <div class="long-line">
            <p>wow</p>
        </div>
        <div class="intro-content">
            <h2>La Consolacion College Novaliches</h2>
            <p>History</p>
        </div>
        <div class="timeline-items">
            <section class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">2000</div>
                <div class="timeline-content">
                    <h3>La Consolacion College Novaliches (LCCN)</h3>
                    <p>was founded In this year, LCCN was established as an educational institution, marking the
                        beginning of its journey in providing education and academic services.</p>
                    <img id="scale" src="assets/school_photos/3.jpg" alt="">
                </div>
            </section>

            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">2002</div>
                <div class="timeline-content">
                    <h3>LCCN introduced its first batch of college programs</h3>
                    <p>This marked the expansion of LCCN's educational offerings to include college-level programs,
                        providing students with opportunities for higher education.</p>
                    <img src="assets/school_photos/6.jpg" alt="">
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">2005</div>
                <div class="timeline-content">
                    <h3>The college expanded its course offerings</h3>
                    <p>LCCN likely introduced new academic programs or expanded existing ones to cater to a wider range
                        of academic interests and career paths.</p>
                    <img src="assets/school_photos/4.jpg" alt="">
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">2010</div>
                <div class="timeline-content">
                    <h3>LCCN celebrated its 10th anniversary</h3>
                    <p>This milestone was likely celebrated with special events and activities, reflecting on a decade
                        of educational service and achievements.</p>
                    <img src="assets/logo/testing_3.jpg" alt="">
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">2012</div>
                <div class="timeline-content">
                    <h3>The school initiated various community outreach programs</h3>
                    <p>LCCN may have started community engagement initiatives, demonstrating its commitment to social
                        responsibility and community development.</p>
                    <img src="assets/school_photos/wow.jpg" alt="">
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">2015</div>
                <div class="timeline-content">
                    <h3>LCCN underwent infrastructure improvements and expansion</h3>
                    <p>During this year, the college likely invested in upgrading its facilities and possibly expanded
                        its campus to accommodate a growing student population.</p>
                    <img src="assets/school_photos/wow2.jpg" alt="">
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">2020</div>
                <div class="timeline-content">
                    <h3>The school adapted to online learning during the COVID-19 pandemic</h3>
                    <p>Like many educational institutions worldwide, LCCN likely transitioned to online learning to
                        ensure the continuity of education during the global pandemic.</p>
                    <img src="assets/school_photos/wow3.jpg" alt="">
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">2023</div>
                <div class="timeline-content">
                    <h3>LCCN continued to evolve and innovate in education</h3>
                    <p>This year represents the college's ongoing commitment to providing quality education and adapting
                        to changing educational trends and needs.</p>
                    <img src="assets/school_photos/wow4.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="last-timeline">

            <div class="last-content">

                <h3>2023</h3>
                <h1>La Consolacion College Novaliches and its remarkable Journey</h1>
                <p>In this year, La Consolacion College Novaliches (LCCN) celebrated its enduring commitment to
                    education and academic excellence. It marked another significant milestone in the college's history,
                    highlighting its ongoing dedication to providing quality education and adapting to changing
                    educational trends and needs.</p>
                <div class="logo">
                    <img src="" alt="">
                </div>
            </div>
        </div>
    </section>

    <!--=============== Footer ===============-->
    <section class="footer">
        <div class="footer-content">
            <h4>Quick Links</h4>
            <li><a href="./1.student_login/student-login.php">Student Portal</a></li>
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