<?php
require_once '../../configure.php';
$delete = $_GET['nominee'] ?? '';
$_SESSION['nominee'] = $delete;

$sqld = "DELETE FROM nominees_c10 WHERE full_name='$delete'";
$conn->query($sqld);

$sqldd = "DELETE FROM shortlisted_c10 WHERE full_name='$delete'";
$conn->query($sqldd);

if($sqld && $sqldd){

    $conn->close();
    header('location: nominees101010.php');
}
?>