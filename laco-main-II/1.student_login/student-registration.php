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
        <div class="box form-box">
            <header><img src="main.png" alt=""></header>

            <?php

            include("php/config.php");
            if (isset($_POST['submit'])) {
                $Lastname = $_POST['Lastname'];
                $Firstname = $_POST['Firstname'];
                $Middlename = $_POST['Middlename'];
                $Birthday = $_POST['Birthday'];
                $Email = $_POST['Email'];
                $MobileNumber = $_POST['MobileNumber'];
                $Password = $_POST['Password'];
                $ReEnterPass = $_POST['ReEnterPass'];

                //Check if the email is unique values
            
                $verify_query = mysqli_query($con, "SELECT Email FROM users WHERE Email='$Email'");

                if (mysqli_num_rows($verify_query) != 0) {
                    echo "<div class='message'>
                            <div class='icon'>
                            <i class='uil uil-exclamation-circle'></i>
                            
                            </div>
                            <div class='content'>
                            <p>This email is used alredy, Try another one please!</p>
                            </div>
                            <br>
                            <a href='javascript:self.history.back()'><button class='btn'> Go back</button>
                        </div>";

                } else {


                    mysqli_query($con, "INSERT INTO users(Lastname,Firstname,Middlename,Birthday,Email,MobileNumber,Password,ReEnterPass) VALUES('$Lastname','$Firstname','$Middlename','$Birthday','$Email','$MobileNumber','$Password','$ReEnterPass')") or die("Error Occured");

                    echo "<div class='message_1'>
                            <div class='icon'>
                            <i class='uil uil-check-circle'></i>
                            </div>
                            <div class='content'>
                            <p>Registration Successful</p>
                            </div>
                            <br>
                            <a href='student-login.php', ><button class='btn'>Login Now</button>
                        </div>";

                }

            } else {



                ?>
                <form action="" method="post">
                    <div class="field input">
                        <label for="username">Last Name</label>
                        <input type="text" name="Lastname" id="lastname" required>
                    </div>

                    <div class="field input">
                        <label for="username">First Name</label>
                        <input type="text" name="Firstname" id="firstname" autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="username">Middle Name</label>
                        <input type="text" name="Middlename" id="middlename" autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="username">Birthday</label>
                        <input type="date" name="Birthday" id="birthday" autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="password">Email</label>
                        <input type="email" name="Email" id="email" autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="password">Mobile number</label>
                        <input type="tel" name="MobileNumber" id="phone" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}"
                            placeholder="Format: 0000-000-000" autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="password">Password</label>
                        <input type="password" name="Password" id="password" autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="password">Re-enter Password</label>
                        <input type="password" name="ReEnterPass" id="repassword" autocomplete="off" required>
                    </div>

                    <div class="field">
                        <input type="submit" class="btn" name="submit" value="Login" required>
                    </div>

                    <div class="links">
                        Already have account? <a href="student-login.php">Log In Here!</a>
                    </div>
                </form>
            </div>
        <?php } ?>
    </div>
</body>

</html>