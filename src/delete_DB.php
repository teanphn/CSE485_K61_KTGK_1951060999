<?php
include("constants.php");
$patientid = $_GET['id'];
$sql = "DELETE FROM `PATIENT` WHERE patientid = $patientid";
$res = mysqli_query($conn, $sql);
if ($res == true) {
    header("location:index.php");
} else {
    header("location:index.php");
}
