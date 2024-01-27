<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
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
                            <a href="index.php" class="sidebar-link">
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


                <div class="navbar-collapse navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                <img src="mona.jpg" class="avatar img-fluid rounded" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>

            </nav>

            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3">
                        <h4>Admin Dashboard</h4>
                    </div>


                    <!-- need to change this put some identifier -->
                    <!-- add data variable for each class -->

                    <!--Dashboard-->
                    <!-- add data variable for each class -->
                    <div class="tab_item card border-0 crud-button" id="tab_items_11">
                        <div class="card-header">
                            <h5 class="card-title">
                                Add Data
                            </h5>
                        </div>
                        <div class="card-body p-3" style="height: 400px;">
                            <div class="container">
                                <div class="text-center mb-4">
                                    <h3>Add New Course</h3>
                                    <p>Complete the Form below to add a new user</p>
                                    <?php
                                    include("../config/config.php");

                                    if (isset($_POST['course-save'])) {
                                        $course = $_POST['course'];
                                        $description = $_POST['description'];

                                        // Validation: Check if any of the input fields is empty
                                        if (empty($course) || empty($description)) {
                                            echo '<div class="alert alert-danger" role="alert">
                Please fill in all the required fields.
              </div>';
                                        } else {
                                            $verify_query = mysqli_query($con, "SELECT course FROM tbcourse WHERE course='$course'");

                                            if (mysqli_num_rows($verify_query) != 0) {
                                                echo '<div class="alert alert-danger" role="alert">
                    Course already exists. Please choose a different one.
                  </div>';
                                            } else {
                                                $sql = mysqli_query($con, "INSERT INTO tbcourse(course,description) 
                    VALUES('$course','$description')") or die("Error Occurred");

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
                                    ?>

                                </div>
                            </div>

                            <div class="">
                                <form class="justify-content-start allign-items-center" action="" method="post">

                                    <div class="column">
                                        <div class="col">
                                            <label class="form-label">Course Name</label>
                                            <input type="text" class="form-control" name="course" placeholder="Course">
                                        </div>

                                        <div class="col">
                                            <label class="form-label">Description</label>
                                            <input type="text" class="form-control" name="description"
                                                placeholder="Description">
                                        </div>

                                        <div class="mt-3">
                                            <button type="submit" class="btn btn-success"
                                                name="course-save">Save</button>
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



    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="index.js"></script>
</body>

</html>