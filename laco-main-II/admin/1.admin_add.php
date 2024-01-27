<?php
include("../config/config.php");
$sql = "SELECT * FROM tbusers";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="app.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="wrapper">

        <!-- Sidebar nigga-->
        <aside id="sidebar">
            <!--content-->
            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="#"><img src="main-2.png" alt=""></a>
                </div>

                <div class="tabs-list">
                    <ul class="sidebar-nav">
                        <li class="sidebar-header">
                            Add Data
                        </li>
                        <li class="sidebar-item">
                            <a href="index.php?id" class="sidebar-link">
                                <i class="uil uil-arrow-left"></i>
                                Back to main dashboard
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>

        <div class="main">
            <!-- Top header -->
            <nav class="navbar navbar-expand px-3 border-bottom">
                <button class="btn" id="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>

            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3">
                        <h4>Admin Dashboard</h4>
                    </div>


                    <div class="tab_item row" id="tab_items_11">
                        <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0 illustration">
                                <div class="card-body p-0 d-flex flex-fill">
                                    <div class="row g-0 w-100">
                                        <div class="col-6">
                                            <div class="p-3 m-1">
                                                <h4>Welcome Back,
                                                    <?php echo $row['fname']; ?>
                                                </h4>
                                                <p class="mb-0">Main Dashboard</p>
                                            </div>
                                        </div>
                                        <div class="col-6 alig-self-end text-end">
                                            <img src="cat.png" class="img-fluid illustration-img rounded" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0">
                                <div class="card-body py-4">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            <h1 id="current-time-1">
                                                12:00:00
                                            </h1>
                                            <div class="qoutes">
                                                <h4 id="current-date-1"></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab_item card border-0 crud-button" id="tab_items_11">
                        <div class="card-header">
                            <h5 class="card-title">
                                Add Data
                            </h5>
                        </div>
                        <div class="card-body p-3" style="height: 800px;">
                            <div class="container">
                                <div class="text-center mb-4">
                                    <h3>Add new Admin</h3>
                                    <p>Complete the Form below to add a new user</p>
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
                                                        move_uploaded_file($image_tmp_name, $image_folder);
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
                                </div>
                            </div>

                            <div class="">
                                <form class="justify-content-start allign-items-center" action="" method="POST"
                                    enctype="multipart/form-data">

                                    <div class="column">
                                        <div class="col">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" class="form-control" name="Lastname"
                                                placeholder="Last name">
                                        </div>

                                        <div class="col">
                                            <label class="form-label">First Name</label>
                                            <input type="text" class="form-control" name="Firstname"
                                                placeholder="First Name">
                                        </div>

                                        <div class="col">
                                            <label class="form-label">Middle Name</label>
                                            <input type="text" class="form-control" name="Middlename"
                                                placeholder="Middle Name">
                                        </div>

                                        <div class="col">
                                            <label class="form-label">Birthdate</label>
                                            <input type="date" class="form-control" name="Birthday"
                                                placeholder="Birthday">
                                        </div>

                                        <div class="col">
                                            <label class="form-label">Email Address</label>
                                            <input type="text" class="form-control" name="Email"
                                                placeholder="Email Address">
                                        </div>

                                        <div class="col">
                                            <label class="form-label">MobileNumber</label>
                                            <input type="tel" class="form-control" name="MobileNumber"
                                                placeholder="MobileNumber" pattern="[0-9]{11}">
                                        </div>

                                        <div class="col">
                                            <label class="form-label">Profile Picture</label>
                                            <input type="file" class="form-control box"
                                                accept="image/jpg, image/jpeg, image/png" name="image">
                                        </div>

                                        <div class="col">
                                            <label class="form-label">Password</label>
                                            <input type="password" class="form-control" name="Password"
                                                placeholder="Enter password">
                                        </div>

                                        <div class="col">
                                            <label class="form-label">Confirm Password</label>
                                            <input type="password" class="form-control" name="cPassword"
                                                placeholder="Confirm password">
                                        </div>

                                        <div class="mt-3">
                                            <button type="submit" class="btn btn-success"
                                                name="admin-save">Save</button>
                                            <a href="index.php" class="btn btn-danger">Cancel</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
            </main>


            <!-- darkmode nigger -->
            <a href="#" class="theme-toggle">
                <i class="uil uil-sun"></i>
                <i class="uil uil-moon"></i>
            </a>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a href="#" class="text-muted">
                                    <strong>La Consolacion College Novaliches</strong>
                                </a>
                            </p>
                        </div>
                        <div class="col-6 text-end">
                            <ul class="last-inline">
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
    </div>


</body>

</html>