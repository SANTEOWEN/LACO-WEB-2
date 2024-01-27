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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

    <link rel="stylesheet" href="style.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>

    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script src="index.js"></script>
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
                    <ul class="sidebar-nav">
                        <li class="sidebar-item test_3 active" data-tc="tab_items_9">
                            <a href="#" class="sidebar-link">
                                <i class="uil uil-list-ul pe-2"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="sidebar-item test_3" data-tc="tab_1" style="display:none;">
                            <a href="#" class="sidebar-link collapsed hover-me" aria-expanded="false">
                                <i class="uil uil-user"></i>
                                Students
                            </a>
                        </li>

                        <li class="sidebar-item test_3" data-tc="tab_2">
                            <a href="#" class="sidebar-link collapsed hover-me" onclick="handleSubjectFilterClick()"
                                aria-expanded="false">
                                <i class="uil uil-book-open"></i>
                                Subjects
                            </a>
                        </li>

                        <li class="sidebar-item test_3" data-tc="tab_3">
                            <a href="#" class="sidebar-link collapsed hover-me" onclick="handleFilterClick()"
                                aria-expanded="false">
                                <i class="uil uil-analysis"></i>
                                Grades
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
                                                <h4>Welcome Back,
                                                    <?php echo $_SESSION['user_fullname']; ?>
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

                    <!-- Students -->
                    <div class="tab_item card border-0" id="tab_1" style="display: none;">
                        <div class="card-header">
                            <h5 class="card-title d-flex justify-content-between fs-3">
                                Students List
                            </h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover text-center">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">COURSE</th>
                                        <th scope="col">MOBILENUMBER</th>
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
                                                    <?php echo $row['fullname'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['email'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['mobilenumber'] ?>
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

                    <!--Subjects-->
                    <div class="tab_item card border-0" id="tab_2" style="display: none;">
                        <div class="card-header">
                            <h5 class="card-title d-flex justify-content-between fs-3">
                                Subjects List
                            </h5>
                            <div class="row d-flex flex-row-reverse">
                                <form action="" method="GET" id="subjectFilterForm">
                                    <div class="row">
                                        <div class="col-3 mt-3">
                                            <input type="text" name="studS" class="form-control" style="display:none;"
                                                value="<?php
                                                // Fetch section names from the database
                                                $user_namer = $_SESSION['user_fullname'];
                                                $sectionQuery = "SELECT DISTINCT name FROM tbgrades";
                                                $sectionResult = mysqli_query($con, $sectionQuery);

                                                $subvalue = '';
                                                while ($subrow = mysqli_fetch_assoc($sectionResult)) {
                                                    if ($subrow['name'] == $user_namer) {
                                                        $subvalue = $subrow['name'];
                                                        break;
                                                    }
                                                }

                                                echo $subvalue;
                                                ?>">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="subjectFilteredResults" class="table table-hover text-center">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">SUBJECT CODE</th>
                                        <th scope="col">SUBJECT NAME</th>
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
                                            </tr>
                                            <?php
                                        }

                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!--Grades's-->
                    <div class="tab_item card" id="tab_3" style="display: none;">
                        <div class="card-header">
                            <h5 class="card-title fs-3 bg-r">
                                Grades
                            </h5>
                            <p>List of students and there grades</p>
                            <div class="row d-flex flex-row-reverse">
                                <form action="" method="GET" id="filterForm">
                                    <div class="row">
                                        <div class="col-3 mt-3">
                                            <input type="text" name="studN" class="form-control" readonly value="<?php
                                            // Fetch section names from the database
                                            $user_namer = $_SESSION['user_fullname'];
                                            $sectionQuery = "SELECT DISTINCT name FROM tbgrades";
                                            $sectionResult = mysqli_query($con, $sectionQuery);

                                            $studvalue = '';
                                            while ($studrow = mysqli_fetch_assoc($sectionResult)) {
                                                if ($studrow['name'] == $user_namer) {
                                                    $studvalue = $studrow['name'];
                                                    break;
                                                }
                                            }

                                            echo $studvalue;
                                            ?>">
                                        </div>
                                    </div>
                                </form>
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
                                                    <a href="5.grades_edit.php?id=<?php echo $row['id']; ?>"
                                                        class="link-primary"><i class="uil uil-edit"></i></a>
                                                </td>
                                                <td>
                                                    <?php echo $row['prof'] ?>
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