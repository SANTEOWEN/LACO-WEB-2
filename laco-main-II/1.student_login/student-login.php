<?php
session_start();

?>
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
            <?php
            include("php/config.php");
            if(isset($_POST['submit'])){
                $email = mysqli_real_escape_string($con, $_POST['email']);
                $password = mysqli_real_escape_string($con, $_POST['password']);
                $result = mysqli_query($con, "SELECT * FROM tbUser Where Email = '$email' AND Password = '$password'") or die("Select error");
                $row = mysqli_fetch_assoc($result);


                if(is_array($row) && !empty($row)){
                   $_SESSION['valid'] = $row['Email'];
                   $_SESSION['valid'] = $row['Password'];

                } else {
                    echo "<div class='message'>
                            <div class='icon'>
                            <i class='uil uil-exclamation-circle'></i>
                            
                            </div>
                            <div class='content'>
                            <p>Wrong User and Password</p>
                            </div>
                            <br>
                            <a href='../1.student_login/student-login.php'><button class='btn'> Go back</button>
                        </div>";
                }
                if(isset($_session['valid'])){
                    header("Location: ../index.php");
                }
            } else {

            ?>

            <header><img src="main.png" alt=""></header>
            <form action="" method="post">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>

                <div class="links">
                    Don't have account? <a href="student-registration.php">Sign Up Now</a>
                </div>
            </form>
        </div>
        <?php } ?>
    </div>
    <script src="script.js"></script>
</body>

</html>