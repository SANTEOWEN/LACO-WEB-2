<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>testing responsive login page</title>

    <!-- ===== Icons Link ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="styling/testing.css">


</head>

<body>
    <div class="container">
        <div class="forms">

            <!-- Login Form -->

            <div class="form login slide-in" id="form-login">
                <div class="logo">
                    <img src="main.png" alt="">
                </div>


                <form action="#">
                    <div class="input-field">
                        <input type="text" placeholder="Enter your email" name="" id="" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>

                    <div class="input-field">
                        <input type="password" class="password" placeholder="Enter your password" name="" id=""
                            required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHide"></i>
                    </div>

                    <div class="checkbox-text">
                        <a href="#" class="text">Forgot password?</a>
                    </div>

                    <div class="input-field button">
                        <input type="button" value="Login Now" id="" required>
                    </div>

                    <div class="login-sign-up">
                        <span class="text">
                            Don't have account yet?
                            <a href="#" class="text signup-link"> Create one here!</a>
                        </span>
                    </div>
                </form>
            </div>



            <!-- Registration Form -->

            <div class="form signup">
                <div class="logo">
                    <img src="main.png" alt="">
                </div>

                <form action="#" id="signup-forms">
                    <div class="input-field">
                        <input type="text" placeholder="Last name" name="" id="" required>
                        <i class="uil uil-user"></i>
                    </div>

                    <div class="input-field">
                        <input type="text" placeholder="First name" name="" id="" required>
                        <i class="uil uil-user"></i>
                    </div>

                    <div class="input-field">
                        <input type="text" placeholder="Middle name" name="" id="" required>
                        <i class="uil uil-user"></i>
                    </div>

                    <div class="input-field">
                        <input type="date" placeholder="Date of Birthday" name="" id="" required>
                        <i class="uil uil-calender"></i>
                    </div>

                    <div class="input-field">
                        <input type="text" placeholder="Email" name="" id="" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>

                    <div class="input-field">
                        <input type="tel" placeholder="Number" name="" id="" required>
                        <i class="uil uil-phone icon"></i>
                    </div>

                    <div class="input-field">
                        <input type="password" class="password" placeholder="Password" name="" id="" required>
                        <i class="uil uil-lock icon"></i>
                    </div>

                    <div class="input-field">
                        <input type="password" class="password" placeholder="Re-enter password" name="" id="" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHide"></i>
                    </div>

                    <!-- <div class="checkbox-text">
                        <a href="#" class="text">Forgot password?</a>
                    </div> -->
                    <div class="login-sign-up">
                        <input type="checkbox" id="" required> <span class="text">
                            I've read and accept the
                            <a href="#" class="text terms-modal"> Terms & condition</a>
                        </span>
                    </div>

                    <div class="input-field button">
                        <input type="Submit" value="Register Now" id="submit-form" required>
                    </div>

                    <div class="login-sign-up">
                        <span class="text">
                            Already have an account?
                            <a href="#form-login" class="text login-link">Login Here!</a>
                        </span>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <!-- Modal popup -->
    <dialog class="modal" id="modal">
        <div class="modal-content">
            <div class="logo">
                <i class="uil uil-check-circle"></i>
            </div>
            <div class="contents">
                <h3>Congratulations, your account
                    has been successfully created!</h3>

                <div class="button-login">
                    <a href="#form-login" onclick="closeModal()">Continue</a>
                </div>
            </div>
        </div>
    </dialog>


    <script src="script.js"></script>
</body>

</html>