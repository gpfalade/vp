<?php
require_once '../configure.php';
if(isset($_POST['submit1'])){
  if(($_POST['yname'] != "") && (preg_match("/^[a-zA-Z\s\-\_]+$/", $_POST['yname']))){
    $_POST['yname'] = filter_var($_POST['yname'], FILTER_SANITIZE_STRING);
    $yname = $_POST['yname'] ?? '';
    $yname = mysqli_real_escape_string($conn, $_POST['yname']);
  } else{
    header('location: http://localhost/vp/div1/decoyaddnominee1.php');
  }

  if($_POST['email1'] != ""){
    $_POST['email1'] = filter_var($_POST['email1'], FILTER_SANITIZE_EMAIL);
    $_POST['email1'] = filter_var($_POST['email1'], FILTER_VALIDATE_EMAIL);
    $email1 = $_POST['email1'] ?? '';
    $email1 = mysqli_real_escape_string($conn, $_POST['email1']);
  }

  if($_POST['phone'] != ""){
    $_POST['phone'] = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
    $phone = $_POST['phone'] ?? '';
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
  }

}else{
  header('location: http://localhost/vp/index.php');
  exit("Direct access to this page is restricted");
}

$yname = $_POST['yname'] ?? '';
$email1 = $_POST['email1'] ?? '';
$phone = $_POST['phone'] ?? '';
$dates = date("Y-m-d");

$sqltables = "CREATE TABLE IF NOT EXISTS nominations (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  full_name VARCHAR(90) NOT NULL,
  email VARCHAR(100) NOT NULL,
  phone VARCHAR(20) NOT NULL,
  dates VARCHAR(20) NOT NULL DEFAULT CURRENT_TIMESTAMP
  )";
$conn->query($sqltables);

$sqld2 = "SELECT * FROM nominations WHERE email='$email1' or phone='$phone'";
$dup2 = $conn->query($sqld2);
$rows2 = $dup2->fetch_array();
if(($dup2->num_rows > 2) && ($rows2['dates'] == date("Y-m-d"))){
  header('location: http://localhost/vp/max.php');
  exit();
}

$sqln2 = "INSERT INTO nominations(id, full_name, email, phone, dates) VALUES ('', '$yname', '$email1', '$phone', '$dates')";
$conn->query($sqln2);


$sqltable1 = "CREATE TABLE IF NOT EXISTS nominations_c1 (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  full_name VARCHAR(90) NOT NULL,
  email VARCHAR(100) NOT NULL,
  phone VARCHAR(20) NOT NULL,
  dates VARCHAR(20) NOT NULL DEFAULT CURRENT_TIMESTAMP
  )";
$conn->query($sqltable1);

  
$sqln = "INSERT INTO nominations_c1(id, full_name, email, phone, dates) VALUES ('', '$yname', '$email1', '$phone', '$dates')";
$conn->query($sqln);
$conn->close();
?>

<!DOCTYPE html>
<html lang="en -US">
<head>
<title>Add nominee</title>
<link rel="stylesheet" href="../style1.css"/>
<link rel="stylesheet" href="../link.css"/>
<link rel="stylesheet" href="../add.css"/>
<meta  mame="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
<body>

<?php
include_once '../head.php';
echo "&nbsp";
echo "<h1><b>" . $_SESSION['div1'] . "</b></h1>";
?>

<div class="container">
  <form action="nominees1n.php" method="POST">
      <fieldset>
          <legend><h2>Add nominee</h2></legend>
          
            <label for="cname"><b>Name</b></label>
            <input type="text" id="cname" name="cname" placeholder="Nominee's full name..." required/>

            <label for="facebook"><b>Facebook handle</b></label>
            <input type="text" id="facebook" name="facebook" placeholder="Nominee's facebook handle..."/>

            <label for="weblink"><b>Web link</b></label>
            <input type="url" id="weblink" name="weblink" placeholder="https://nominee-weblink.com" />

            <label for="email2"><b>Email</b></label>
            <input type="email" id="email2" name="email2" placeholder="Nominee's email address..."/>

            <input type="checkbox" required/><b>Confirm all entries are correct</b>
            <P></p>
            
            <input type="submit" value="Update" id="submit2" name="submit2">

        </fieldset>
  </form>
</div>

</body>
</html>