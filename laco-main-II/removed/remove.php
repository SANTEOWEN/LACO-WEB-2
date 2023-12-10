<?php
include('php/config.php');

$Id = $_GET['Id'];
$sql = "DELETE FROM tbuser WHERE id = $Id"; 
$result = mysqli_query($con, $sql);
if($result){
    header("Location: index.php?msg=Record deleted Successfully");
}
else{
    echo "Failed: " . mysqli_error($con);
}
?>