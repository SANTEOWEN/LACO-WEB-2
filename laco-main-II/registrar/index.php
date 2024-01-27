<?php
session_start();
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
    <title>La Consolacion College Novaliches</title>
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
                    <ul class="sidebar-nav nav-pills">
                        <li class="sidebar-item test_3 active" data-tc="tab_items_9">
                            <a href="#" class="sidebar-link">
                                <i class="uil uil-list-ul pe-2"></i>
                                DASHBOARD
                            </a>
                        </li>

                        <!--First main side Menu-->
                        <li class="sidebar-item test_3" data-tc="tab_3">
                            <a href="#" class="sidebar-link">
                            <i class="uil uil-users-alt"></i>
                                STUDENTS
                            </a>
                        </li>
                        <!--Second main side Menu-->
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link collapsed" data-bs-target="#multi" data-bs-toggle="collapse"
                                aria-expanded="false">
                                <i class="uil uil-atom"></i>
                                Classes
                            </a>
                            <ul id="multi" class="sidebar-dropwn list-unstyled collapse" data-bs-parent="#sidebar">
                                <li class="sidebar-item test_2" data-tc="tab_4">
                                    <a class="sidebar-link"><i class="uil uil-books test-1"></i>Course</a>
                                </li>
                                <li class="sidebar-item test_2" data-tc="tab_6">
                                    <a class="sidebar-link "><i class="uil uil-web-section test-1"></i>Section</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item test_3" data-tc="tab_7">
                            <a href="#" class="sidebar-link collapsed hover-me" aria-expanded="false">
                                <i class="uil uil-book-open"></i>
                                Subjects
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
                        <a href="#" class="theme-toggle pl-3">
                            <i class="uil uil-sun"></i>
                            <i class="uil uil-moon"></i>
                        </a>
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                <img src="mona.jpg" class="avatar img-fluid rounded" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Profile</a>
                                <a href="logout.php" class="dropdown-item">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3">
                    </div>

                    <!-- miming box areas -->
                    <div class="tab_item row" id="tab_items_9">
                        <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0 illustration">
                                <div class="card-body p-0 d-flex flex-fill">
                                    <div class="row g-0 w-100">
                                        <div class="col-6">
                                            <div class="p-3 m-1">
                                                <<h4>Welcome Back, <?php echo $_SESSION['user_fullname'];?></h4>
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



                    <!-- Main -->
                    <div class="tab_item" id="tab_items_9">
                        <?php
                        if (isset($_GET['msg_admin'])) {
                            $msg = $_GET['msg_admin'];
                            echo '<div class="alert alert-success" role="alert">' . $msg . '</div>';
                        }
                        if (isset($_GET['msg_warning'])) {
                            $msg = $_GET['msg_warning'];
                            echo '<div class="alert alert-warning" role="alert">' . $msg . '</div>';
                        }
                        ?>
                    </div>

                    <!--Admin-->
                    <div class="tab_item card border-0" id="tab_1" style="display: none;">
                        <div class="card-header">
                            <h5 class="card-title d-flex justify-content-between fs-3">
                                Admin Accounts
                                <a href="1.admin_add.php" class="btn btn-primary">New Admin</a>
                            </h5>

                        </div>
                        <div class="card-body">
                            <table class="table table-hover text-center">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">DOB</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Mobile Number</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include("../config/config.php");
                                    $sql = "SELECT * FROM tbusers where type='admin'";
                                    $verify = mysqli_query($con, $sql);

                                    if (mysqli_num_rows($verify) > 0) {
                                        while ($row = mysqli_fetch_assoc($verify)) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $row['id'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['fullname'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['birthday'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['email'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['mobilenumber'] ?>
                                                </td>
                                                <td>
                                                    <a href="1.admin_edit.php?id=<?php echo $row['id']; ?>"
                                                        class="link-primary"><i class="uil uil-edit"></i></a>
                                                </td>
                                            </tr>
                                            <?php
                                        }

                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- registrar -->
                    <div class="tab_item card border-0" id="tab_9" style="display: none;">
                        <div class="card-header">
                            <h5 class="card-title d-flex justify-content-between fs-3">
                                Registrar Accounts
                                <a href="2.regis_add.php" class="btn btn-primary">New Officer</a>
                            </h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover text-center">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">DOB</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Mobile Number</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include("../config/config.php");
                                    $sql = "SELECT * FROM tbusers where type='registrar'";
                                    $verify = mysqli_query($con, $sql);

                                    if (mysqli_num_rows($verify) > 0) {
                                        while ($row = mysqli_fetch_assoc($verify)) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $row['id'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['fullname'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['birthday'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['email'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['mobilenumber'] ?>
                                                </td>
                                                <td>
                                                    <a href="2.regis_edit.php?id=<?php echo $row['id']; ?>"
                                                        class="link-primary"><i class="uil uil-edit"></i></a>
                                                </td>
                                            </tr>
                                            <?php
                                        }

                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!--Teachers-->
                    <div class="tab_item card border-0" id="tab_2" style="display: none;">
                        <div class="card-header">
                            <h5 class="card-title d-flex justify-content-between fs-3">
                                Teachers Accounts
                                <a href="3.teac_add.php" class="btn btn-primary">New Teacher</a>
                            </h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover text-center">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">DOB</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Mobile Number</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- old example -->
                                    <?php
                                    include("../config/config.php");
                                    $sql = "SELECT * FROM tbusers where type='teacher'";
                                    $verify = mysqli_query($con, $sql);

                                    if (mysqli_num_rows($verify) > 0) {
                                        while ($row = mysqli_fetch_assoc($verify)) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $row['id'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['fullname'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['birthday'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['email'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['mobilenumber'] ?>
                                                </td>
                                                <td>
                                                    <a href="3.teac_edit.php?id=<?php echo $row['id']; ?>"
                                                        class="link-primary"><i class="uil uil-edit"></i></a>
                                                </td>
                                            </tr>
                                            <?php
                                        }

                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!--Students-->
                    <div class="tab_item card border-0" id="tab_3" style="display: none;">
                        <div class="card-header">
                            <h5 class="card-title d-flex justify-content-between fs-3">
                                Student Accounts
                                <a href="4.stud_add.php" class="btn btn-primary">New Student</a>
                            </h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover text-center">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">DOB</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Mobile Number</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include("../config/config.php");
                                    $sql = "SELECT * FROM tbusers WHERE type='student'";
                                    $verify = mysqli_query($con, $sql);

                                    if (mysqli_num_rows($verify) > 0) {
                                        while ($row = mysqli_fetch_assoc($verify)) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $row['id'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['fullname'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['birthday'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['email'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['mobilenumber'] ?>
                                                </td>
                                                <td>
                                                    <a href="4.stud_edit.php?id=<?php echo $row['id']; ?>"
                                                        class="link-primary"><i class="uil uil-edit"></i></a>

                                                    <a href="4.stud_new.php?id=<?php echo $row['id']; ?>" class="link-succes"><i
                                                            class="uil uil-plus"></i></a>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Course -->
                    <div class="tab_item card border-0" id="tab_4" style="display: none;">
                        <div class="card-header">
                            <h5 class="card-title d-flex justify-content-between fs-3">
                                Courses
                                <a href="1.1.course_add.php" class="btn btn-primary">New Course</a>
                            </h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover text-center">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">COURSE</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include("../config/config.php");
                                    $sql = "SELECT * FROM tbcourse";
                                    $verify = mysqli_query($con, $sql);

                                    if (mysqli_num_rows($verify) > 0) {
                                        while ($row = mysqli_fetch_assoc($verify)) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $row['course'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['description'] ?>
                                                </td>
                                                <td>
                                                    <a href="1.2course_edit.php?id=<?php echo $row['id']; ?>"
                                                        class="link-primary"><i class="uil uil-edit"></i></a>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Section -->
                    <div class="tab_item card border-0" id="tab_6" style="display: none;">
                        <div class="card-header">
                            <h5 class="card-title d-flex justify-content-between fs-3">
                                Section
                                <a href="1.3.section_add.php" class="btn btn-primary">New Sections</a>
                            </h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover text-center">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">SECTION</th>
                                        <th scope="col">ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include("../config/config.php");
                                    $sql = "SELECT * FROM tbsection";
                                    $verify = mysqli_query($con, $sql);

                                    if (mysqli_num_rows($verify) > 0) {
                                        while ($row = mysqli_fetch_assoc($verify)) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $row['section'] ?>
                                                </td>
                                                <td>
                                                    <a href="1.3section_edit.php?id=<?php echo $row['id']; ?>"
                                                        class="link-primary"><i class="uil uil-edit"></i></a>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Subjects -->
                    <div class="tab_item card border-0" id="tab_7" style="display: none;">
                        <div class="card-header">
                            <h5 class="card-title d-flex justify-content-between fs-3">
                                Subjects
                                <a href="1.4.subjects_add.php" class="btn btn-primary">New Subjects</a>
                            </h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover text-center">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">SUBJECT CODE</th>
                                        <th scope="col">SUBJECT NAME</th>
                                        <th scope="col">PROFESSOR</th>
                                        <th scope="col">ACTION</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include("../config/config.php");
                                    $sql = "SELECT * FROM tbsubjects";
                                    $verify = mysqli_query($con, $sql);

                                    if (mysqli_num_rows($verify) > 0) {
                                        while ($row = mysqli_fetch_assoc($verify)) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $row['subjectcode'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['subjectname'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['prof'] ?>
                                                </td>
                                                <td>
                                                    <a href="1.4.subjects_edit.php?id=<?php echo $row['id']; ?>"
                                                        class="link-primary"><i class="uil uil-edit"></i></a>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- GRADES -->
                    <div class="tab_item card" id="tab_8" style="display: none;">
                        <div class="card-header">
                            <h5 class="card-title d-flex justify-content-between fs-3">
                                Grades
                            </h5>
                            <p>List of students and there grades</p>
                            <div class="column">
                                <div class="col-md-5">

                                </div>
                                <div class="col-md-6">
                                    <form action="" method="GET" id="filterForm">
                                        <div class="row">
                                            <div class=".col-6 col-md-4 mt-3">
                                                <select name="section" class="form-select">
                                                    <option value="">Select Subject</option>
                                                    <?php
                                                    // Fetch section names from the database
                                                    $sectionQuery = "SELECT DISTINCT section FROM tbgrades";
                                                    $sectionResult = mysqli_query($con, $sectionQuery);
                                                    while ($sectionRow = mysqli_fetch_assoc($sectionResult)) {
                                                        echo '<option value="' . $sectionRow['section'] . '">' . $sectionRow['section'] . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class=".col-6 col-md-3 mt-3">
                                                <select name="subjectN" class="form-select">
                                                    <option value="">Select Subject</option>
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

                                            <div class=".col-6 col-md-4 mt-3">
                                                <select name="profN" class="form-select">
                                                    <option value="">Select Subject</option>
                                                    <?php
                                                    // Fetch section names from the database
                                                    $sectionQuery = "SELECT DISTINCT prof FROM tbgrades";
                                                    $sectionResult = mysqli_query($con, $sectionQuery);
                                                    while ($profRow = mysqli_fetch_assoc($sectionResult)) {
                                                        echo '<option value="' . $profRow['prof'] . '">' . $profRow['prof'] . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>

                                            <div class=".col-6 col-md-7 mt-3">
                                                <button type="submit" class="btn btn-primary">Filter</button>
                                                <a href="index.php" class="btn btn-danger" id="resetButton">Reset</a>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="filteredResults" class="table table-hover text-center">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">NAME</th>
                                        <th scope="col">COURSE</th>
                                        <th scope="col">SECTION</th>
                                        <th scope="col">SUBJECT NAME</th>
                                        <th scope="col">GRADES</th>
                                        <th scope="col">PROFESSOR</th>
                                        <th scope="col">ACTION</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include("../config/config.php");
                                    $sql = "SELECT * FROM tbgrades";
                                    $verify = mysqli_query($con, $sql);

                                    if (mysqli_num_rows($verify) > 0) {
                                        while ($row = mysqli_fetch_assoc($verify)) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $row['name'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['course'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['section'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['sname'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['grades'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['prof'] ?>
                                                </td>
                                                <td>
                                                    <a href="5.grades_edit.php?id=<?php echo $row['id']; ?>"
                                                        class="link-primary"><i class="uil uil-edit"></i></a>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>



                </div>
            </main>

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