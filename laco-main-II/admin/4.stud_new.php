<!-- fetch users data from sql -->
<?php
include("../config/config.php");
$id = $_GET['id'];
$sql = "SELECT * FROM tbusers WHERE id=$id";
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
    <script defer src="app.js">
    </script>
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
                                Change Data
                            </h5>
                        </div>
                        <div class="card-body p-3" style="height: 1000px;">
                            <div class="container">
                                <div class="text-center mb-4">
                                    <h3>New Class</h3>
                                    <p>change forms for new class</p>

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


                                </div>
                            </div>
                            <form class="justify-content-start allign-items-center" action="" method="post">
                                <div class="column">
                                    <div class="col mt-2">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control" name="Lastname"
                                            value="<?php echo $row['lname'] ?>" readonly>
                                    </div>

                                    <div class="col mt-2">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control" name="Firstname"
                                            value="<?php echo $row['fname'] ?>" readonly>
                                    </div>

                                    <div class="col mt-2">
                                        <label class="form-label">Middle Name</label>
                                        <input type="text" class="form-control" name="Middlename"
                                            value="<?php echo $row['mname'] ?>" readonly>
                                    </div>

                                    <div class="col mt-5">
                                        <label class="form-label">Course</label>
                                        <select class="form-select" aria-label="Default select example" name="Course"
                                            required>

                                            <?php
                                            include("../config/config.php");
                                            $sql = "SELECT * FROM tbcourse";
                                            $result = mysqli_query($con, $sql);

                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $courseValue = $row['course'];
                                                ?>
                                                <option value="<?php echo $row['course']; ?>">
                                                    <?php echo $courseValue; ?>
                                                </option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="col mt-2">
                                        <label class="form-label">Section</label>
                                        <select class="form-select" aria-label="Default select example" name="Section"
                                            required>

                                            <?php
                                            include("../config/config.php");
                                            $sql = "SELECT * FROM tbsection";
                                            $result = mysqli_query($con, $sql);

                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $section = $row['section'];
                                                ?>
                                                <option value="<?php echo $row['section']; ?>">
                                                    <?php echo $section; ?>
                                                </option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <!-- Subject name -->
                                    <div class="col mt-2">
                                        <label class="form-label">Subject Name</label>
                                        <select class="form-select" aria-label="Default select example"
                                            name="Subjectname" required>

                                            <?php
                                            include("../config/config.php");
                                            $sql = "SELECT * FROM tbsubjects";
                                            $result = mysqli_query($con, $sql);

                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $subjectN = $row['subjectname'];
                                                ?>
                                                <option value="<?php echo $row['subjectname']; ?>">
                                                    <?php echo $subjectN; ?>
                                                </option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <!-- Prof -->
                                    <div class="col mt-2">
                                        <label class="form-label">Prof Name</label>
                                        <select class="form-select" aria-label="Default select example" name="Prof"
                                            required>


                                            <?php
                                            include("../config/config.php");
                                        
                                            $sql = "SELECT * FROM tbusers WHERE type='teacher'";
                                            $result = mysqli_query($con, $sql);

                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $profn = $row['fullname'];
                                                ?>
                                                <option value="<?php echo $row['fullname']; ?>">
                                                    <?php echo $profn; ?>
                                                </option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="mt-3">
                                        <button type="submit" class="btn btn-success" name="new-class">New
                                            Class</button>
                                        <a href="index.php" class="btn btn-danger">Cancel</a>
                                    </div>
                                </div>
                            </form>

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
                    </div>
                </div>
            </footer>

        </div>
    </div>
</body>

</html>