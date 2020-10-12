<?php
require_once '../configure.php';
if(isset($_POST['submit1'])){
  if(($_POST['yname'] != "") && (preg_match("/^[a-zA-Z\s\-\_]+$/", $_POST['yname']))){
    $_POST['yname'] = filter_var($_POST['yname'], FILTER_SANITIZE_STRING);
    $yname = $_POST['yname'] ?? '';
    $yname = mysqli_real_escape_string($conn, $_POST['yname']);
  } else{
    header('location: http://localhost/vp/div5/decoyvote5.php');
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

$sqltables = "CREATE TABLE IF NOT EXISTS voters (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  full_name VARCHAR(90) NOT NULL,
  email VARCHAR(100) NOT NULL,
  phone VARCHAR(20) NOT NULL,
  dates VARCHAR(20) NOT NULL DEFAULT CURRENT_TIMESTAMP
  )";
$conn->query($sqltables);

$sqld2 = "SELECT * FROM voters WHERE email='$email1' or phone='$phone'";
$dup2 = $conn->query($sqld2);
$rows2 = $dup2->fetch_array();
if(($dup2->num_rows > 2) && ($rows2['dates'] == date("Y-m-d"))){
  header('location: http://localhost/vp/maxv.php');
  exit();
}

  $sqln2 = "INSERT INTO voters(id, full_name, email, phone, dates) VALUES ('', '$yname', '$email1', '$phone', '$dates')";
$conn->query($sqln2);


$sqltable1 = "CREATE TABLE IF NOT EXISTS voters_c5 (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  full_name VARCHAR(90) NOT NULL,
  email VARCHAR(100) NOT NULL,
  phone VARCHAR(20) NOT NULL,
  dates VARCHAR(20) NOT NULL DEFAULT CURRENT_TIMESTAMP
  )";
$conn->query($sqltable1);

  
$sqln = "INSERT INTO voters_c5(id, full_name, email, phone, dates) VALUES ('', '$yname', '$email1', '$phone', '$dates')";
$conn->query($sqln);
?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>Vote</title>
<link rel="stylesheet" href="../style1.css"/>
<link rel="stylesheet" href="../link.css"/>
<link rel="stylesheet" href="../table.css"/>
<link rel="stylesheet" href="../votestyle.css"/>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

<?php
include_once '../head.php';
echo "&nbsp";
echo "<h1><b>" . $_SESSION['div5'] . "</b></h1>";
echo "<h2><u>Vote your preferred candidate</u></h2>";

$sqls = "SELECT id, full_name FROM shortlisted_c5";

if($result = $conn->query($sqls)){
    if($result->num_rows > 0){?>
    <div class="form_div">
    <form action="decoyvote55.php" method="POST">
    <?php
        while($row = $result->fetch_array()){?>
        <label for="vote"></label><br>
    <input type="radio" id="<?php echo trim($row[0]); ?>" name="vote" value="<?php echo trim($row[1]); ?>" required><?php echo "<big><b>" . trim($row[1]) . "</br></big>";}?>
    <br>
    <input type="submit" value="Vote" name="submit" onClick="return confirm('Confirm your vote')">
    </form>
    </div>
        <?php }else{
        echo "No shortlisted candidates yet";
    }
}else{
    echo "No shortlisted candidtate yet.";
}


$conn->close();

?>
</body>
</html>