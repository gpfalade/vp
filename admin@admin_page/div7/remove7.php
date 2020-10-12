<?php
debug_backtrace();
error_reporting(0);
if(!session_id()) session_start();
if(!$_SESSION['logon']){
    header('location: ../index.php');
    die();
}else{
    include_once '../dbconnection.php';

    $nominee = $_GET['nominee'];

    $sqld = "DELETE FROM shortlisted_c7 WHERE full_name='$nominee'";
    $con->query($sqld);

    $con->close();
    header('location: shortlist77.php');

 }
 ?>