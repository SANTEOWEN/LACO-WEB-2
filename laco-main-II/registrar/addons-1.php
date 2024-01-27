Max values

<?php
include("../config/config.php");

if (isset($_POST['new-class'])) {
    $course = $_POST['Course'];
    $section = $_POST['Section'];
    $subjectname = $_POST['Subjectname'];
    $prof = $_POST['Prof'];

    // Validation: Check if any of the input fields is empty
    if (empty($course) || empty($section) || empty($subjectname) || empty($prof)) {
        echo '<div class="alert alert-danger" role="alert">
            Please fill in all required fields.
        </div>';
    } else {
        $verify_query = mysqli_query($con, "SELECT section FROM tbgrades WHERE section = '$section'");

        if (mysqli_num_rows($verify_query) != 0) {
            echo '<div class="alert alert-danger" role="alert">
                Duplicate data. Section already exists.
            </div>';
        } else {
            $name = $_POST['Firstname'] . ' ' . $_POST['Lastname'];

            // Check the number of occurrences of the same subject name for a specific student
            $subject_count_query = mysqli_query($con, "SELECT COUNT(*) AS subject_count FROM tbgrades WHERE name = '$name' AND sname = '$subjectname'");
            $row = mysqli_fetch_assoc($subject_count_query);
            $subject_count = $row['subject_count'];

            // Set the maximum allowed subjects per student
            $max_subjects_per_student = 5;

            if ($subject_count >= $max_subjects_per_student) {
                echo '<div class="alert alert-danger" role="alert">
                    Exceeded the maximum subjects per student.
                </div>';
            } else {
                $sql = mysqli_query($con, "INSERT INTO tbgrades(name, course, section, sname, prof) 
                        VALUES('$name', '$course', '$section', '$subjectname', '$prof')") or die("Error Occurred");

                if ($sql) {
                    echo '<div class="alert alert-success alert-dismissable fade show" role="alert">
                        New Record Added
                    </div>';
                } else {
                    echo '<div class="alert alert-danger alert-dismissable fade show" role="alert">
                        Error saving data.
                    </div>';
                }
            }
        }
    }
}
?>











<?php
include("../config/config.php");

if (isset($_POST['new-class'])) {
    $course = $_POST['Course'];
    $section = $_POST['Section'];
    $subjectname = $_POST['Subjectname'];
    $prof = $_POST['Prof'];

    // Validation: Check if any of the input fields is empty
    if (empty($subjectname) || empty($prof)) {
        echo '<div class="alert alert-danger" role="alert">
                Please fill in all required fields.
              </div>';
    } else {
        $name = $_POST['Firstname'] . ' ' . $_POST['Lastname'];

        $sql = mysqli_query($con, "INSERT INTO tbgrades(name, course, section, sname, prof) 
                    VALUES('$name', '$course', '$section', '$subjectname', '$prof')") or die("Error Occurred");

        if ($sql) {
            echo '<div class="alert alert-success alert-dismissable fade show" role="alert">
                        New Record Added
                      </div>';
        } else {
            echo '<div class="alert alert-danger alert-dismissable fade show" role="alert">
                        Error saving data.
                      </div>';
        }
    }
}
?>















<?php
include("../config/config.php");

$id = $_GET['id'];
$sql = "SELECT * FROM tbusers WHERE id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$password_updated = false;
$image_updated = false;

if (isset($_POST['update'])) {

    $lname = $_POST['Lastname'];
    $fname = $_POST['Firstname'];
    $mname = $_POST['Middlename'];
    $birthday = $_POST['Birthday'];
    $email = $_POST['Email'];
    $mobilenumber = $_POST['MobileNumber'];
    $fullname = $fname . ' ' . $lname;

    // Check if a new image is uploaded
    if (!empty($_FILES['image']['name'])) {
        $image = $_FILES['image']['name'];
        $image_size = $_FILES['image']['size'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_folder = 'uploaded_img/' . $image;

        if ($image_size > 200000000) {
            echo '<div class="alert alert-danger" role="alert">
                    Image is too large!
                  </div>';
        } else {
            move_uploaded_file($image_tmp_name, $image_folder);
            $image_updated = true;
        }
    }

    // Update query
    $update_sql = "UPDATE tbusers 
                    SET lname='$lname', fname='$fname', mname='$mname', fullname='$fullname', birthday='$birthday', email='$email', mobilenumber='$mobilenumber'";

    if ($image_updated) {
        $update_sql .= ", image='$image_folder'";
    }

    $update_sql .= " WHERE id=$id";

    mysqli_query($con, $update_sql);

    if (!empty($_POST['new_password'])) {
        if ($_POST['new_password'] === $_POST['confirm_password']) {

            $new_pass = md5($_POST['new_password']);
            $sql = "UPDATE tbusers SET password='$new_pass' WHERE id=$id";
            mysqli_query($con, $sql);
            $password_updated = true;
        } else {
            echo '<div class="alert alert-danger" role="alert">
                    Passwords do not match
                  </div>';
        }
    }

    if ($password_updated || $image_updated || mysqli_affected_rows($con) > 0) {
        header("Location: index.php?msg_admin=Admin Data Changed!");
        exit;
    } else {
        echo '<div class="alert alert-danger" role="alert">
                Unable to update data. Please check your inputs.
              </div>';
    }
}
?>




































<form action="" method="GET">
    <div class="row">
        <div class="col-md-4">
            <input type="text" class="form-control" placeholder="Search for section" name="section" list="sectionList">
            <datalist id="sectionList">
                <?php
                // Fetch section names from the database
                $sectionQuery = "SELECT DISTINCT section FROM tbgrades";
                $sectionResult = mysqli_query($con, $sectionQuery);
                while ($sectionRow = mysqli_fetch_assoc($sectionResult)) {
                    echo '<option value="' . $sectionRow['section'] . '">';
                }
                ?>
            </datalist>
        </div>
        <div class="col-md-4">
            <select name="subjectN" id="" class="form-select">
                <?php
                // Fetch subject names from the database
                $subjectQuery = "SELECT DISTINCT sname FROM tbgrades";
                $subjectResult = mysqli_query($con, $subjectQuery);
                while ($subjectRow = mysqli_fetch_assoc($subjectResult)) {
                    echo '<option value="' . $subjectRow['sname'] . '">' . $subjectRow['sname'] . '</option>';
                }
                ?>
            </select>
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary">Filter</button>
            <a href="index.php" class="btn btn-danger">Reset</a>
        </div>
    </div>
</form>




















<?php
include("../config/config.php");

if (isset($_POST['admin-save'])) {
    $lname = $_POST['Lastname'];
    $fname = $_POST['Firstname'];
    $mname = $_POST['Middlename'];
    $birthday = $_POST['Birthday'];
    $email = $_POST['Email'];
    $mobilenumber = $_POST['MobileNumber'];
    $pass = $_POST['Password'];
    $cpass = $_POST['cPassword'];
    $Password = md5($pass);
    $fullname = $fname . ' ' . $lname;
    $type = "admin";

    $image = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = 'uploaded_img/' . $image;

    // Validation: Check if any of the input fields is empty
    if (empty($lname) || empty($fname) || empty($mname) || empty($birthday) || empty($email) || empty($mobilenumber) || empty($pass) || empty($image)) {
        echo '<div class="alert alert-danger" role="alert">
                Please fill in all the required fields.
              </div>';
    } elseif ($pass !== $cpass) {
        echo '<div class="alert alert-danger" role="alert">
                Passwords do not match. Please enter the same password in both fields.
              </div>';
    } elseif ($image_size > 200000000) {
        echo '<div class="alert alert-danger" role="alert">
                Image is too large!
              </div>';
    } else {
        $verify_query = mysqli_query($con, "SELECT Email FROM tbusers WHERE Email='$email'");

        if (mysqli_num_rows($verify_query) != 0) {
            echo '<div class="alert alert-danger" role="alert">
                    Email already exists. Please choose a different one.
                  </div>';
        } else {
            if ($_FILES['image']['error'] == UPLOAD_ERR_OK) {
                move_uploaded_file($image_tmp_name, $image_folder);

                $sql = mysqli_query($con, "INSERT INTO tbusers(lname,fname,mname,fullname,birthday,type,email,mobilenumber,password,image) 
                VALUES('$lname','$fname','$mname','$fullname','$birthday','$type','$email','$mobilenumber','$Password','$image')") or die("Error Occurred");

                if ($sql) {
                    echo '<div class="alert alert-success alert-dismissable fade show" role="alert">
                            New Record Added
                          </div>';
                } else {
                    echo '<div class="alert alert-danger alert-dismissable fade show" role="alert">
                            Error saving data.
                          </div>';
                }
            } else {
                echo '<div class="alert alert-danger" role="alert">
                        Error uploading the file.
                      </div>';
            }
        }
    }
}
?>



























<?php
include("../config/config.php");

$id = $_GET['id'];
$sql = "SELECT * FROM tbusers WHERE id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$password_updated = false;
$image_updated = false;

if (isset($_POST['update'])) {

    $lname = $_POST['Lastname'];
    $fname = $_POST['Firstname'];
    $mname = $_POST['Middlename'];
    $birthday = $_POST['Birthday'];
    $email = $_POST['Email'];
    $mobilenumber = $_POST['MobileNumber'];
    $fullname = $fname . ' ' . $lname;

    // Check if a new image is uploaded
    if (!empty($_FILES['image']['name'])) {
        $image = $_FILES['image']['name'];
        $image_size = $_FILES['image']['size'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_folder = 'uploaded_img/' . $image;

        if ($image_size > 200000000) {
            echo '<div class="alert alert-danger" role="alert">
                    Image is too large!
                  </div>';
        } else {
            move_uploaded_file($image_tmp_name, $image_folder);
            $image_updated = true;
        }
    }

    // Update query
    $update_sql = "UPDATE tbusers 
                    SET lname='$lname', fname='$fname', mname='$mname', fullname='$fullname', birthday='$birthday', email='$email', mobilenumber='$mobilenumber'";

    if ($image_updated) {
        $update_sql .= ", image='$image_folder'";
    }

    $update_sql .= " WHERE id=$id";

    mysqli_query($con, $update_sql);

    if (!empty($_POST['new_password'])) {
        if ($_POST['new_password'] === $_POST['confirm_password']) {

            $new_pass = md5($_POST['new_password']);
            $sql = "UPDATE tbusers SET password='$new_pass' WHERE id=$id";
            mysqli_query($con, $sql);
            $password_updated = true;
        } else {
            echo '<div class="alert alert-danger" role="alert">
                    Passwords do not match
                  </div>';
        }
    }

    if ($password_updated || $image_updated || mysqli_affected_rows($con) > 0) {
        header("Location: index.php?msg_admin=Admin Data Changed!");
        exit;
    } else {
        echo '<div class="alert alert-danger" role="alert">
                Unable to update data. Please check your inputs.
              </div>';
    }
}
?>











<?php
include("../config/config.php");

$id = $_GET['id'];
$sql = "SELECT * FROM tbusers WHERE id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$password_updated = false;

if (isset($_POST['update'])) {

    $lname = $_POST['Lastname'];
    $fname = $_POST['Firstname'];
    $mname = $_POST['Middlename'];
    $birthday = $_POST['Birthday'];
    $email = $_POST['Email'];
    $mobilenumber = $_POST['MobileNumber'];
    $fullname = $fname . ' ' . $lname;


    if (!empty($_FILES['image']['name'])) {
        $image = $_FILES['image']['name'];
        $image_size = $_FILES['image']['size'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_folder = 'uploaded_img/' . $image;

        if ($image_size > 200000000) {
            echo '<div class="alert alert-danger" role="alert">
                                                        Image is too large!
                                                     </div>';
        } else {
            move_uploaded_file($image_tmp_name, $image_folder);
            $image_updated = true;
        }
    }


    $update_sql = "UPDATE tbusers SET 
                                        lname='" . mysqli_real_escape_string($con, $lname) . "', 
                                        fname='" . mysqli_real_escape_string($con, $fname) . "', 
                                        mname='" . mysqli_real_escape_string($con, $mname) . "', 
                                        fullname='" . mysqli_real_escape_string($con, $fullname) . "', 
                                        birthday='" . mysqli_real_escape_string($con, $birthday) . "', 
                                        email='" . mysqli_real_escape_string($con, $email) . "', 
                                        mobilenumber='" . mysqli_real_escape_string($con, $mobilenumber) . "'";

    if ($image_updated) {
        $update_sql .= ", image='" . mysqli_real_escape_string($con, $image_folder) . "'";
    }

    $update_sql .= " WHERE id=$id";

    mysqli_query($con, $update_sql);

    if (!empty($_POST['new_password'])) {
        if ($_POST['new_password'] === $_POST['confirm_password']) {

            $new_pass = md5($_POST['new_password']);
            $sql = "UPDATE tbusers SET password='$new_pass' WHERE id=$id";
            mysqli_query($con, $sql);
            $password_updated = true;
        } else {
            echo '<div class="alert alert-danger" role="alert">
                                                Passwords do not match
                                              </div>';
        }
    }

    if ($password_updated || mysqli_affected_rows($con) > 0) {
        header("Location: index.php?msg_admin=Admin Data Changed!");
        exit;
    } else {
        echo '<div class="alert alert-danger" role="alert">
                                                    Unable to update data. Please check your inputs.
                                                  </div>';
    }
}
?>


























<?php
include("../config/config.php");
session_start(); // Start the session (if not already started)

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    // Assuming your user ID is stored in $_SESSION['user_id']
    $user_id = $_SESSION['user_id'];

    // Modify your SQL query to select the specific user based on their ID
    $sql = "SELECT * FROM tbusers WHERE user_id = $user_id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    // Check if a user with the given ID exists
    if ($row) {
        ?>
        <h5>Welcome Back,
            <?php echo $row['fname']; ?>
        </h5>
        <?php
    } else {
        // Handle the case where the user does not exist or the session is invalid
        echo "<p>Error: User not found</p>";
    }
} else {
    // Handle the case where the user is not logged in
    echo "<p>Please log in</p>";
}
?>













<?php
include("../config/config.php");
session_start();

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    // Assuming your user ID is stored in $_SESSION['user_id']
    $user_id = $_SESSION['user_id'];

    // Modify your SQL query to select the specific user based on their ID
    $sql = "SELECT * FROM tbusers WHERE id = $user_id"; // Change 'user_id' to the actual primary key column name
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    // Check if a user with the given ID exists
    if ($row) {
        ?>
        <h5>Welcome Back,
            <?php echo $row['fullname']; // Change 'fname' to 'fullname' ?>
        </h5>
        <?php
    } else {
        // Handle the case where the user does not exist or the session is invalid
        echo "<p>Error: User not found</p>";
    }
} else {
    // Handle the case where the user is not logged in
    echo "<p>Please log in</p>";
}
?>





<?php
include("../config/config.php");
session_start();

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $pass_md5 = md5($pass);

    $query = mysqli_query($con, "SELECT * FROM `tbusers` WHERE `email` = '$email' AND `password` = '$pass_md5'");

    if (mysqli_num_rows($query) > 0) {
        $user = mysqli_fetch_object($query);
        $_SESSION['login'] = true;
        $_SESSION['session_id'] = uniqid();

        $user_type = $user->type;
        $_SESSION['user_type'] = $user_type;
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_name'] = $user->fullname; // Change 'fname' to 'fullname'
        header('Location: ../' . $user_type . '/index.php');
        exit();
    } else {
        echo "<div class='message'>
                    <div class='icon'>
                    <i class='uil uil-exclamation-circle'></i>
                    </div>
                    <div class='content'>
                    <p>WRONG EMAIL/PASSWORD</p>
                    </div>
                    <br>
                    <a href='javascript:self.history.back()'><button class='btn'> Go back</button>
                    </div>";
    }

} else {
    // Your existing code here
}
?>







<?php
include("../config/config.php");

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Using prepared statements to prevent SQL injection
    $stmt = mysqli_prepare($con, "SELECT * FROM `tbusers` WHERE `email` = ? AND `password` = ?");
    mysqli_stmt_bind_param($stmt, "ss", $email, md5($password));
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_object($result);
        $_SESSION['login'] = true;
        $_SESSION['session_id'] = uniqid();

        $user_type = $user->type;
        $_SESSION['user_type'] = $user_type;
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_name'] = $user->fullname;
        header('Location: ../' . $user_type . '/index.php');
        exit();
    } else {
        echo "<div class='message'>
                <div class='icon'>
                    <i class='uil uil-exclamation-circle'></i>
                </div>
                <div class='content'>
                    <p>WRONG EMAIL/PASSWORD</p>
                </div>
                <br>
                <a href='javascript:self.history.back()'><button class='btn'> Go back</button></a>
            </div>";
    }

    // Close statement
    mysqli_stmt_close($stmt);
} else {
    // Your else code here
}
?>\
















<?php
include("../config/config.php");

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass  = $_POST['password'];
    
    $pass_md5 = md5($pass);

    $query = mysqli_query($con, "SELECT * FROM `tbusers` WHERE `email` = '$email' AND `password` = '$pass_md5'");

    if (mysqli_num_rows($query) > 0) {
        $user = mysqli_fetch_object($query);
        $_SESSION['login'] = true;
        $_SESSION['session_id'] = uniqid();
        $_SESSION['user_type'] = $user->type;
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_fullname'] = $user->fullname; // Added line to store the full name
        include("index.php");
        header('Location: ../'.$user->type.'/index.php');
        exit();
    } else {
        echo "<div class='message'>
            <div class='icon'>
                <i class='uil uil-exclamation-circle'></i>
            </div>
            <div class='content'>
                <p>WRONG EMAIL/PASSWORD</p>
            </div>
            <br>
            <a href='javascript:self.history.back()'><button class='btn'> Go back</button>
        </div>";
    }
} else {
?>
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
            Don't have an account? <a href="student-registration.php">Sign Up Now</a>
        </div>
    </form>
</div>

<div class="col-6">
    <div class="p-3 m-1">
        <h4>Welcome Back, <?php echo isset($_SESSION['user_fullname']) ? $_SESSION['user_fullname'] : ''; ?></h4>
        <p class="mb-0">Main Dashboard</p>
    </div>
</div>

<?php } ?>
