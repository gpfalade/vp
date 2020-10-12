<?php
session_start();
include_once '../../configure.php';
$id = $_SESSION['id'];

if(isset($_POST['update'])){
    if(($_POST['cname'] != "") && (preg_match("/^[a-zA-Z0-9\s\-\_]+$/", $_POST['cname']))){
        $_POST['cname'] = filter_var($_POST['cname'], FILTER_SANITIZE_STRING);
        $cname = $_POST['cname'] ?? '';
        $cname = mysqli_real_escape_string($conn, $_POST['cname']);
        $_SESSION['cname'] = $cname;
    }else{
        $_POST['cname'] = filter_var($_POST['cname'], FILTER_SANITIZE_STRING);
        $cname = $_POST['cname'] ?? '';
        $cname = mysqli_real_escape_string($conn, $_POST['cname']);
        $_SESSION['cname'] = $cname;
    }

    if($_POST['facebook'] != ""){
        $_POST['facebook'] = filter_var($_POST['facebook'], FILTER_SANITIZE_STRING);
        $facebook = $_POST['facebook'] ?? '';
        $facebook = mysqli_real_escape_string($conn, $_POST['facebook']);
        $_SESSION['facebook'] = $facebook;
    }else{
        $_POST['facebook'] = filter_var($_POST['facebook'], FILTER_SANITIZE_STRING);
        $facebook = $_POST['facebook'] ?? '';
        $facebook = mysqli_real_escape_string($conn, $_POST['facebook']);
        $_SESSION['facebook'] = $facebook;
    }

    if(($_POST['weblink'] != "") && (preg_match("/^[a-zA-Z0-9\.\-\:\/\_]+$/", $_POST['weblink']))){
        $_POST['weblink'] = filter_var($_POST['weblink'], FILTER_SANITIZE_STRING);
        $weblink = $_POST['weblink'] ?? '';
        $weblink = mysqli_real_escape_string($conn, $_POST['weblink']);
        $_SESSION['weblink'] = $weblink;
    }else{
        $_POST['weblink'] = filter_var($_POST['weblink'], FILTER_SANITIZE_STRING);
        $weblink = $_POST['weblink'] ?? '';
        $weblink = mysqli_real_escape_string($conn, $_POST['weblink']);
        $_SESSION['weblink'] = $weblink;
    }

    if($_POST['email2'] != ""){
        $_POST['email2'] = filter_var($_POST['email2'], FILTER_SANITIZE_EMAIL);
        $_POST['email2'] = filter_var($_POST['email2'], FILTER_VALIDATE_EMAIL);
        $email2 = $_POST['email2'] ?? '';
        $email2 = mysqli_real_escape_string($conn, $_POST['email2']);
        $_SESSION['email2'] = $email2;
    }else{
        $_POST['email2'] = filter_var($_POST['email2'], FILTER_SANITIZE_EMAIL);
        $_POST['email2'] = filter_var($_POST['email2'], FILTER_VALIDATE_EMAIL);
        $email2 = $_POST['email2'] ?? '';
        $email2 = mysqli_real_escape_string($conn, $_POST['email2']);
        $_SESSION['email2'] = $email2;
    }
}

$cname = $_POST['cname'] ?? '';
$facebook = $_POST['facebook'] ?? '';
$weblink = $_POST['weblink'] ?? '';
$email2 = $_POST['email2'] ?? '';



$sqle = "UPDATE nominees_c6 SET full_name='$cname', facebook='$facebook', weblink='$weblink', email='$email2' WHERE id = '$id'";
    $conn->query($sqle);
    
    $sqle = "UPDATE shortlisted_c6 SET full_name='$cname', facebook='$facebook', weblink='$weblink', email='$email2' WHERE full_name = '$cname'";
    $conn->query($sqle);

    $sqls = "SELECT * FROM nominees_c6 WHERE id=$id";
    

if($sqle){

  $conn->close();
  header('location: nominees666.php');
}

?>
