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
                            TESTING ADMIN
                        </li>
                        <li class="sidebar-item">
                            <a href="" class="sidebar-link">
                                <i class="uil uil-list-ul pe-2"></i>
                                Dashboard
                            </a>
                        </li>

                        <!--First main side Menu-->
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link collapsed" data-bs-target="#pages" data-bs-toggle="collapse"
                                aria-expanded="false">
                                <i class="uil uil-file pe-2"></i>
                                Accounts
                            </a>
                            <ul id="pages" class="sidebar-dropwn list-unstyled collapse" data-bs-parent="#s idebar">
                                <li class="sidebar-item test_2" data-tc="tab_items_1">
                                    <a class="sidebar-link"><i class="uil uil-book-reader test-1"></i>Teacher</a>
                                </li>
                                <li class="sidebar-item test_2" data-tc="tab_items_2">
                                    <a class="sidebar-link"><i class="uil uil-user test-1"></i>Student</a>
                                </li>

                                <li class="sidebar-item test_2" data-tc="tab_items_3">
                                    <a class="sidebar-link"><i class="uil uil-user-plus test-1"></i>Admin</a>
                                </li>
                            </ul>
                        </li>

                        <!--Divider-->
                        <li class="sidebar-header">
                            Second Area
                        </li>

                        <!--Second main side Menu-->
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link collapsed" data-bs-target="#multi" data-bs-toggle="collapse"
                                aria-expanded="false">
                                <i class="uil uil-atom"></i>
                                Classes
                            </a>
                            <ul id="multi" class="sidebar-dropwn list-unstyled collapse" data-bs-parent="#sidebar">
                                <li class="sidebar-item test_2" data-tc="tab_items_4">
                                    <a class="sidebar-link"><i class="uil uil-books test-1"></i>Course</a>
                                </li>
                                <li class="sidebar-item test_2" data-tc="tab_items_5">
                                    <a class="sidebar-link "><i class="uil uil-calender test-1"></i>Year</a>
                                </li>
                                <li class="sidebar-item test_2" data-tc="tab_items_6">
                                    <a class="sidebar-link "><i class="uil uil-web-section test-1"></i>Section</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item" data-tc="tab_items_7">
                            <a href="#" class="sidebar-link collapsed" aria-expanded="false">
                                <i class="uil uil-book-open"></i>
                                Subjects
                            </a>
                        </li>

                        <li class="sidebar-item" data-tc="tab_items_8">
                            <a href="#" class="sidebar-link collapsed" aria-expanded="false">
                                <i class="uil uil-chart-pie"></i>
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
                    <div class="tab_item row" id="tab_items_1">
                        <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0 illustration">
                                <div class="card-body p-0 d-flex flex-fill">
                                    <div class="row g-0 w-100">
                                        <div class="col-6">
                                            <div class="p-3 m-1">
                                                <h4>Welcome Back, Admin</h4>
                                                <p class="mb-0">Teacher's Accounts</p>
                                            </div>
                                        </div>
                                        <div class="col-6 alig-self-end text-end">
                                            <img src="cat.png" class="img-fluid illustration-img" alt="">
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
                                            <h4 class="mb-2">
                                                anong lalagay ko dito
                                            </h4>
                                            <p class="mb-2">
                                                sabihin mo lang lalagay ko dito
                                            </p>
                                            <div class="mb-0">
                                                <span class="badge text-success me2">
                                                    lamaw?
                                                </span>
                                                <span class="text-muted">
                                                    yawa
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab_item row" id="tab_items_2" style="display: none;">
                        <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0 illustration">
                                <div class="card-body p-0 d-flex flex-fill">
                                    <div class="row g-0 w-100">
                                        <div class="col-6">
                                            <div class="p-3 m-1">
                                                <h4>Welcome Back, Admin</h4>
                                                <p class="mb-0">Student's Accounts</p>
                                            </div>
                                        </div>
                                        <div class="col-6 alig-self-end text-end">
                                            <img src="cat.png" class="img-fluid illustration-img" alt="">
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
                                            <h4 class="mb-2">
                                                anong lalagay ko dito
                                            </h4>
                                            <p class="mb-2">
                                                sabihin mo lang lalagay ko dito
                                            </p>
                                            <div class="mb-0">
                                                <span class="badge text-success me2">
                                                    lamaw?
                                                </span>
                                                <span class="text-muted">
                                                    yawa
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab_item row" id="tab_items_3" style="display: none;">
                        <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0 illustration">
                                <div class="card-body p-0 d-flex flex-fill">
                                    <div class="row g-0 w-100">
                                        <div class="col-6">
                                            <div class="p-3 m-1">
                                                <h4>Welcome Back, Admin</h4>
                                                <p class="mb-0">Admin's Accounts</p>
                                            </div>
                                        </div>
                                        <div class="col-6 alig-self-end text-end">
                                            <img src="cat.png" class="img-fluid illustration-img" alt="">
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
                                            <h4 class="mb-2">
                                                anong lalagay ko dito
                                            </h4>
                                            <p class="mb-2">
                                                sabihin mo lang lalagay ko dito
                                            </p>
                                            <div class="mb-0">
                                                <span class="badge text-success me2">
                                                    lamaw?
                                                </span>
                                                <span class="text-muted">
                                                    yawa
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab_item row" id="tab_items_4" style="display: none;">
                        <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0 illustration">
                                <div class="card-body p-0 d-flex flex-fill">
                                    <div class="row g-0 w-100">
                                        <div class="col-6">
                                            <div class="p-3 m-1">
                                                <h4>Welcome Back, Admin(echo adminnamehere)</h4>
                                                <p class="mb-0">3</p>
                                            </div>
                                        </div>
                                        <div class="col-6 alig-self-end text-end">
                                            <img src="cat.png" class="img-fluid illustration-img" alt="">
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
                                            <h4 class="mb-2">
                                                anong lalagay ko dito
                                            </h4>
                                            <p class="mb-2">
                                                sabihin mo lang lalagay ko dito
                                            </p>
                                            <div class="mb-0">
                                                <span class="badge text-success me2">
                                                    lamaw?
                                                </span>
                                                <span class="text-muted">
                                                    yawa
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab_item row" id="tab_items_5" style="display: none;">
                        <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0 illustration">
                                <div class="card-body p-0 d-flex flex-fill">
                                    <div class="row g-0 w-100">
                                        <div class="col-6">
                                            <div class="p-3 m-1">
                                                <h4>Welcome Back, Admin(echo adminnamehere)</h4>
                                                <p class="mb-0">3</p>
                                            </div>
                                        </div>
                                        <div class="col-6 alig-self-end text-end">
                                            <img src="cat.png" class="img-fluid illustration-img" alt="">
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
                                            <h4 class="mb-2">
                                                anong lalagay ko dito
                                            </h4>
                                            <p class="mb-2">
                                                sabihin mo lang lalagay ko dito
                                            </p>
                                            <div class="mb-0">
                                                <span class="badge text-success me2">
                                                    lamaw?
                                                </span>
                                                <span class="text-muted">
                                                    yawa
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab_item row" id="tab_items_6" style="display: none;">
                        <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0 illustration">
                                <div class="card-body p-0 d-flex flex-fill">
                                    <div class="row g-0 w-100">
                                        <div class="col-6">
                                            <div class="p-3 m-1">
                                                <h4>Welcome Back, Admin(echo adminnamehere)</h4>
                                                <p class="mb-0">3</p>
                                            </div>
                                        </div>
                                        <div class="col-6 alig-self-end text-end">
                                            <img src="cat.png" class="img-fluid illustration-img" alt="">
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
                                            <h4 class="mb-2">
                                                anong lalagay ko dito
                                            </h4>
                                            <p class="mb-2">
                                                sabihin mo lang lalagay ko dito
                                            </p>
                                            <div class="mb-0">
                                                <span class="badge text-success me2">
                                                    lamaw?
                                                </span>
                                                <span class="text-muted">
                                                    yawa
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab_item row" id="tab_items_7" style="display: none;">
                        <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0 illustration">
                                <div class="card-body p-0 d-flex flex-fill">
                                    <div class="row g-0 w-100">
                                        <div class="col-6">
                                            <div class="p-3 m-1">
                                                <h4>Welcome Back, Admin(echo adminnamehere)</h4>
                                                <p class="mb-0">3</p>
                                            </div>
                                        </div>
                                        <div class="col-6 alig-self-end text-end">
                                            <img src="cat.png" class="img-fluid illustration-img" alt="">
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
                                            <h4 class="mb-2">
                                                anong lalagay ko dito
                                            </h4>
                                            <p class="mb-2">
                                                sabihin mo lang lalagay ko dito
                                            </p>
                                            <div class="mb-0">
                                                <span class="badge text-success me2">
                                                    lamaw?
                                                </span>
                                                <span class="text-muted">
                                                    yawa
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab_item row" id="tab_items_8" style="display: none;">
                        <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0 illustration">
                                <div class="card-body p-0 d-flex flex-fill">
                                    <div class="row g-0 w-100">
                                        <div class="col-6">
                                            <div class="p-3 m-1">
                                                <h4>Welcome Back, Admin(echo adminnamehere)</h4>
                                                <p class="mb-0">4</p>
                                            </div>
                                        </div>
                                        <div class="col-6 alig-self-end text-end">
                                            <img src="cat.png" class="img-fluid illustration-img" alt="">
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
                                            <h4 class="mb-2">
                                                anong lalagay ko dito
                                            </h4>
                                            <p class="mb-2">
                                                sabihin mo lang lalagay ko dito
                                            </p>
                                            <div class="mb-0">
                                                <span class="badge text-success me2">
                                                    lamaw?
                                                </span>
                                                <span class="text-muted">
                                                    yawa
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Dashboard-->
                    <!-- add data variable for each class -->
                    <div class="tab_item card border-0" id="tab_items_1">
                        <div class="card-header">
                            <h5 class="card-title">
                                Teachers Accounts
                            </h5>
                            <h6 class="card-subtitle text-muted">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis magni reprehenderit
                                ab.
                            </h6>
                            <div class="p-2 ml-1 ">
                                <a href="#" class="btn btn-primary">Add New</a>
                                <a href="#" class="btn btn-primary">Edit</a>
                                <a href="#" class="btn btn-primary">Remove</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover text-center">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Middle Name</th>
                                        <th scope="col">DOB</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Number</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- old example -->

                                    <!-- <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr> -->

                                    <!-- H>eres how u fetch data from database -->
                                    <?php
                                    include("php/config.php");
                                    $sql = "SELECT * FROM tbUser";
                                    $verify = mysqli_query($con, $sql);

                                    if(mysqli_num_rows($verify) > 0) {
                                        while($row = mysqli_fetch_assoc($verify)) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $row['Id'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['Lastname'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['Firstname'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['Middlename'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['Birthday'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['Email'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['Email'] ?>
                                                </td>
                                                <th> <a href="" class="link-light"><i class="uil uil-edit"></i></a>
                                                    <a href="" class="link-danger"><i class="uil uil-trash-alt"></i></a>
                                                </th>
                                            </tr>
                                            <?php
                                        }

                                    }


                                    ?>


                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="tab_item card border-0" id="tab_items_2" style="display: none;">
                        <div class="card-header">
                            <h5 class="card-title">
                                Students Accounts
                            </h5>
                            <h6 class="card-subtitle text-muted">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis magni reprehenderit
                                ab.
                            </h6>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover text-center">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Middle Name</th>
                                        <th scope="col">DOB</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- old example -->

                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>

                                    <!-- Heres how u fetch data from database -->

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="tab_item card border-0" id="tab_items_3" style="display: none;">
                        <div class="card-header">
                            <h5 class="card-title">
                                Admin Accounts
                            </h5>
                            <h6 class="card-subtitle text-muted">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis magni reprehenderit
                                ab.
                            </h6>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover text-center">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Middle Name</th>
                                        <th scope="col">DOB</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- old example -->

                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>



                                    <!-- Heres how u fetch data from database -->
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="tab_item card border-0" id="tab_items_4" style="display: none;">
                        <div class="card-header">
                            <h5 class="card-title">
                                Courses
                            </h5>
                            <h6 class="card-subtitle text-muted">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis magni reprehenderit
                                ab.
                            </h6>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover text-center">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Middle Name</th>
                                        <th scope="col">DOB</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- old example -->

                                    <!-- <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr> -->

                                    <!-- Heres how u fetch data from database -->

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="tab_item card border-0" id="tab_items_5" style="display: none;">
                        <div class="card-header">
                            <h5 class="card-title">
                                Year
                            </h5>
                            <h6 class="card-subtitle text-muted">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis magni reprehenderit
                                ab.
                            </h6>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover text-center">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Middle Name</th>
                                        <th scope="col">DOB</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- old example -->

                                    <!-- <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr> -->

                                    <!-- Heres how u fetch data from database -->

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="tab_item card border-0" id="tab_items_6" style="display: none;">
                        <div class="card-header">
                            <h5 class="card-title">
                                Section
                            </h5>
                            <h6 class="card-subtitle text-muted">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis magni reprehenderit
                                ab.
                            </h6>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover text-center">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Middle Name</th>
                                        <th scope="col">DOB</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- old example -->

                                    <!-- <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr> -->

                                    <!-- Heres how u fetch data from database -->
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="tab_item card border-0" id="tab_items_7" style="display: none;">
                        <div class="card-header">
                            <h5 class="card-title">
                                Subjects
                            </h5>
                            <h6 class="card-subtitle text-muted">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis magni reprehenderit
                                ab.
                            </h6>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover text-center">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Middle Name</th>
                                        <th scope="col">DOB</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- old example -->

                                    <!-- <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr> -->

                                    <!-- Heres how u fetch data from database -->

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="tab_item card border-0" id="tab_items_8" style="display: none;">
                        <div class="card-header">
                            <h5 class="card-title">
                                Grades
                            </h5>
                            <h6 class="card-subtitle text-muted">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis magni reprehenderit
                                ab.
                            </h6>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover text-center">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Middle Name</th>
                                        <th scope="col">DOB</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- old example -->

                                    <!-- <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr> -->

                                    <!-- Heres how u fetch data from database -->
                                </tbody>
                            </table>
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
    <script src="app.js"></script>
</body>

</html>