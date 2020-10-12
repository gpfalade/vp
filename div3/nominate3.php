<!DOCTYPE html>
<html lang="en -US">
<head>
<title>Form</title>
<link rel="stylesheet" href="../style1.css"/>
<link rel="stylesheet" href="../link.css"/>
<link rel="stylesheet" href="../loginstyled.css"/>
<meta  mame="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
<body>
<?php
include_once '../head.php';
$nominee = $_GET['nominee'] ?? '';
$_SESSION['nominee'] = $nominee;
if(!isset($_GET['nominee'])){
    header('location: nominees33.php');
}

?>
    <br>&nbsp</br>
    <h3>Please, fill and submit the form below to nominate <?php echo "<big>$nominee</big> as " . $_SESSION['div3'] ; ?></h3>

    <div class="form_div">
        <form id="login" action="" method="POST">
            <fieldset>
                <legend><h1>Your Info</h1></legend>

                <big><b>Name:<b></big> <span class="invalid">*</span>
                <input class="input" type="text" id="yname" name="yname" placeholder="Your full name..." required/>
                <p></p>

                <big><b>Email:<b></big> <span class="invalid">*</span>
                <input class="input" type="email" id="email1" name="email1" placeholder="Your email address..." required/>
                <p></p>

                <label for="phone"><big><b>Phone number:<b></big> <span class="invalid">*</span></label>
                <input class="input" type="tel" id="phone" name="phone" pattern="[0-9]{11}" placeholder="Your phone number..." required/>

                <input class="submit" type="submit" value="Submit" name="submit1">

            </fieldset>
        </form>
    </div>

    <?php
    require_once '../configure.php';
    if(isset($_POST['submit1'])){
    if(($_POST['yname'] != "") && (preg_match("/^[a-zA-Z\s\-\_]+$/", $_POST['yname']))){
        $_POST['yname'] = filter_var($_POST['yname'], FILTER_SANITIZE_STRING);
        $yname = $_POST['yname'] ?? '';
        $yname = mysqli_real_escape_string($conn, $_POST['yname']);
    }else{
        die();
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
    die();
}

$yname = $_POST['yname'] ?? '';
$email1 = $_POST['email1'] ?? '';
$phone = $_POST['phone'] ?? '';
$dates = date("Y-m-d");

$sqld2 = "SELECT * FROM nominations WHERE email='$email1' or phone='$phone'";
$dup2 = $conn->query($sqld2);
$rows2 = $dup2->fetch_array();
if(($dup2->num_rows > 2) && ($rows2['dates'] == date("Y-m-d"))){
  header('location: http://localhost/vp/max.php');
  exit();
}else{
    $sqlcount = "CREATE TABLE IF NOT EXISTS `$nominee` (
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        full_name VARCHAR(90) NOT NULL,
        email VARCHAR(100) NOT NULL,
        phone VARCHAR(20) NOT NULL,
        dates VARCHAR(20) NOT NULL DEFAULT CURRENT_TIMESTAMP
        )";
    $conn->query($sqlcount);
    
    $sqlcounts = "INSERT INTO `$nominee`(id, full_name, email, phone, dates) VALUES ('', '$yname', '$email1', '$phone', '$dates')";
    $conn->query($sqlcounts);

    $sqln2 = "INSERT INTO nominations(id, full_name, email, phone, dates) VALUES ('', '$yname', '$email1', '$phone', '$dates')";
    $conn->query($sqln2);

    $sqln = "INSERT INTO nominations_c3(id, full_name, email, phone, dates) VALUES ('', '$yname', '$email1', '$phone', '$dates')";
    $conn->query($sqln);

    $conn->close();
    header('location: http://localhost/vp/div3/nominees33.php');
}
?>


</body>
</html>