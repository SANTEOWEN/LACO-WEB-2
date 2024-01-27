<?php
session_start();
// filter.php

include("../config/config.php");

// Initialize an empty array to store filter conditions
$filterConditions = array();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Get the filter values
    $studN = $_GET["studN"];
    $user_namer = $_SESSION['user_fullname'];

    // Build the SQL query with a prepared statement
    $sql = "SELECT * FROM tbgrades WHERE name=?";
    
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "s", $user_namer);
    mysqli_stmt_execute($stmt);
    
    $result = mysqli_stmt_get_result($stmt);

    // Display table head
    echo "<thead class='table-dark'>
            <tr>
                <th scope='col'>SUBJECT NAME</th>
                <th scope='col'>GRADES</th>
                <th scope='col'>PROFESSOR</th>
            </tr>
        </thead>";

    // Display filtered results
    while ($row = mysqli_fetch_assoc($result)) {
        // Output the result rows as you did in the original code
        echo "<tr>
                <td>{$row['sname']}</td>
                <td>{$row['grades']}</td>
                <td>{$row['prof']}</td>
              </tr>";
    }

    mysqli_stmt_close($stmt);
    mysqli_close($con);
}
?>
