<?php
// reset.php

include("../config/config.php");

$sql = "SELECT * FROM tbgrades";
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

// Display original unfiltered results
while ($row = mysqli_fetch_assoc($result)) {
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
?>
