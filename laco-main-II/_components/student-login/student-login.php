<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logo.png">
    <link rel="stylesheet" type="text/css" href="student-login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Log In Form</title>
</head>

<body>

    <div class="container" id="main">
        <div class="sign-up">
            <form action="#">
                <div class="createAccount">
                    <h1>Create Account</h1>
                </div>
                <div class="Signup">
                    <input type="text" name="txt" placeholder="Last Name" id="txtlastName" required="">
                    <input type="text" name="txt" placeholder="First Name" id="txtfirstName" required="">
                    <input type="text" name="txt" placeholder="Middle Name" id="txtmidName" required="">
                    <input type="text" name="txt" placeholder="Gender" id="txtGender" required="">
                    <input type="date" name="txt" placeholder="Birth Date" id="txtBirth" required="">
                    <input type="number" name="txt" placeholder="Number" id="txtNumber" required="">
                    <input type="email" name="email" placeholder="Email" id="txtMiddle" required="">
                    <input type="password" name="pswd" placeholder="Password" id="txtUPW" required="">
                    <button>Sign Up</button>
                </div>

            </form>
        </div>

        <div class="sign-in">
            <form action="#">
                <h1>Sign In</h1>
                <img src="images/logo.png">

                <input type="email" name="email" placeholder="Email" id="txtEmail" required="">
                <input type="password" name="pswd" placeholder="Password" id="txtIPW" required="">
                <button><a href="student-dashboard.html">Sign In</a></button>
            </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-left">
                    <div class="left">
                        <div class="contents">
                            <h1>Hello, Friend</h1>
                        </div>
                        <p class="p-1">Enter your personal details and start journey with us</p>
                        <p class="p-2">Already a User? <a href="#" class="signup-button" id="signIn">Sign in here!</a></p>
                    </div>
                </div>

                <div class="overlay-right">
                    <div class="right">
                        <div class="contents">
                            <h1>Welcome Back!</h1>
                        </div>
                        <p class="p-1">To keep connected with us please login with your personal info</p>
                        <p class="p-2">Don't have account yet? <a href="#" class="signup-button" id="signUp">Create one
                                here!</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        const signUpButton = document.getElementById('signUp')
        const signInButton = document.getElementById('signIn')
        const main = document.getElementById('main')

        signUpButton.addEventListener('click', (event) => {
            main.classList.add("right-panel-active")
            event.preventDefault()
        });

        signInButton.addEventListener('click', (event) => {
            main.classList.remove("right-panel-active")
            event.preventDefault()
        });

        // function signUp(){
        //     signUpButton.addEventListener('click', () => {
        //         main.classList.add("right-panel-active")
        //     });
        // }

        // function signIn(){
        //     signInButton.addEventListener('click', () => {
        //         main.classList.remove("right-panel-active")
        //     });
        // }


    </script>

</body>

</html>