<?php
require_once '../configure.php';
include_once '../head.php';
echo "&nbsp";
echo "<h1><b>" . $_SESSION['div9'] . "</b></h1>";

if(isset($_POST['submit2'])){
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
}else{
    header('location: http://localhost/vp/div9/nominees99.php');
    exit();
}

echo "<h2><u>Nominees</u></h2>";

$sqltable2 = "CREATE TABLE IF NOT EXISTS nominees_c9 (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    full_name VARCHAR(90) NOT NULL UNIQUE,
    facebook VARCHAR(90) NOT NULL,
    weblink VARCHAR(90) NOT NULL,
    email VARCHAR(100) NOT NULL
    )";
$conn->query($sqltable2);

$sqlc = "INSERT INTO nominees_c9(id, full_name, facebook, weblink, email) VALUES ('', '$cname', '$facebook', '$weblink', '$email2')";
$conn->query($sqlc);

$sqls = "SELECT * FROM nominees_c9 ORDER BY full_name";

if($result = $conn->query($sqls)){
    if($result->num_rows > 0){?>
        <table class="css-serial">
        <thead>
        <tr>
        <th> <big>s/n</big> </th>
        <th> <big>Name</big> </th>
        <th> <big>Facebook</big> </th>
        <th> <big>Web link</big> </th>
        <th> <big>Email</big> </th>
        <th> <big>Nominate</big> </th>
        </tr>
        </thead>

        <?php
        $counter = 0;
        while($row = $result->fetch_array()){ ?>
        <tbody>
        <tr>
            <td><?php echo ++$counter; ?> </td>
            <td><?php echo "<b>" . trim($row[1]) ?? '' . "</br>"; ?> </td>
            <td><?php echo trim($row[2]) ?? ''; ?> </td>
            <td><a href="<?php echo trim($row[3]) ?? ''; ?>" target="_blank"><?php echo trim($row[3]) ?? ''; ?></a></td>
            <td><?php echo trim($row[4]) ?? ''; ?> </td>
            <td><a href="nominate9.php?nominee=<?php echo $row[1];?>" class="btn btn-success">Nominate</a></td>
        </tr>
        </tbody>
        <?php } ?>
        </table>
        <?php
    }else{
        echo "No nominees yet";
    }
}else{
    echo "No nominees yet.";
}

$conn->close();

?>

<!DOCTYPE html>
<html lang="en -US">
<head>
<title>Nominees</title>
<link rel="stylesheet" href="../style1.css"/>
<link rel="stylesheet" href="../link.css"/>
<link rel="stylesheet" href="../table.css"/>
<meta  mame="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<a href="http://localhost/vp/div9/decoyaddnominee9.php" onClick="return confirm('This means you could not find your desired nominee on the list?')" class="class" id="add">Add new nominee</a>
</br>
<br>
</body>
</html>