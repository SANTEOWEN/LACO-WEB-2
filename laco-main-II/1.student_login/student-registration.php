<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>La Consolacion College Novaliches</title>

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

            include("../config/config.php");
            if (isset($_POST['submit'])) {
                $lname = $_POST['Lastname'];
                $fname = $_POST['Firstname'];
                $mname = $_POST['Middlename'];
                $birthday = $_POST['Birthday'];
                $email = $_POST['Email'];
                $mobilenumber = $_POST['MobileNumber'];
                $pass = $_POST['Password'];
                $Password = md5($pass);
                $rePass = $_POST['ReEnterPass'];
                $fullname = $fname.' '.$lname;

                //Check if the email is unique values
            
                $verify_query = mysqli_query($con, "SELECT Email FROM tbusers WHERE Email='$email'");

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

                } elseif ($pass != $rePass) {
                    echo "<div class='message'>
                            <div class='icon'>
                            <i class='uil uil-exclamation-circle'></i>
                            </div>
                            <div class='content'>
                            <p>PASSWORD NOT MATCH</p>
                            </div>
                            <br>
                            <a href='javascript:self.history.back()'><button class='btn'> Go back</button>
                        </div>";
                } else {


                    mysqli_query($con, "INSERT INTO tbusers(lname,fname,mname,birthday,email,mobilenumber,password,fullname) VALUES('$lname','$fname','$mname','$birthday','$email','$mobilenumber','$Password','$fullname')") or die("Error Occured");

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
                        <input type="tel" name="MobileNumber" id="phone" pattern="[0-9]{11}" autocomplete="off" required>
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