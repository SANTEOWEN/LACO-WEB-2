<?php
// filter.php

include("../config/config.php");

// Initialize an empty array to store filter conditions
$filterConditions = array();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Get the filter values
    $section = $_GET["section"];
    $subjectN = $_GET["subjectN"];
    $profN = $_GET["profN"];

    // Build filter conditions based on provided values
    if (!empty($section)) {
        $filterConditions[] = "section = '$section'";
    }

    if (!empty($subjectN)) {
        $filterConditions[] = "sname = '$subjectN'";
    }

    if (!empty($profN)) {
        $filterConditions[] = "prof = '$profN'";
    }

    // Build the SQL query
    $sql = "SELECT * FROM tbgrades";

    // Add WHERE clause if there are filter conditions
    if (!empty($filterConditions)) {
        $sql .= " WHERE " . implode(" AND ", $filterConditions);
    }

    $result = mysqli_query($con, $sql);

    // Display table head
    echo "<thead class='table-dark'>
            <tr>
                <th scope='col'>NAME</th>
                <th scope='col'>COURSE</th>
                <th scope='col'>SECTION</th>
                <th scope='col'>SUBJECT NAME</th>
                <th scope='col'>GRADES</th>
                <th scope='col'>PROFESSOR</th>
                <th scope='col'>ACTION</th>
            </tr>
        </thead>";

    // Display filtered results
    while ($row = mysqli_fetch_assoc($result)) {
        // Output the result rows as you did in the original code
        echo "<tr>
                <td>{$row['name']}</td>
                <td>{$row['course']}</td>
                <td>{$row['section']}</td>
                <td>{$row['sname']}</td>
                <td>{$row['grades']}</td>
                <td>{$row['prof']}</td>
                <td><a href='5.grades_edit.php?id={$row['id']}' class='link-primary'><i class='uil uil-edit'></i></a></td>
              </tr>";
    }
}
?>