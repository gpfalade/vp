<?php
debug_backtrace();
error_reporting(0);
if(!session_id()) session_start();
if(!$_SESSION['logon']){
    header('location: ../index.php');
    die();
}

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

include '../../configure.php';

$cname = $_POST['cname'] ?? '';
$facebook = $_POST['facebook'] ?? '';
$weblink = $_POST['weblink'] ?? '';
$email2 = $_POST['email2'] ?? '';


$sqltable2 = "CREATE TABLE IF NOT EXISTS nominees_c2 (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    full_name VARCHAR(90) NOT NULL UNIQUE,
    facebook VARCHAR(90) NOT NULL,
    weblink VARCHAR(90) NOT NULL,
    email VARCHAR(100) NOT NULL
    )";
$conn->query($sqltable2);

$sqlc = "INSERT INTO nominees_c2(id, full_name, facebook, weblink, email) VALUES ('', '$cname', '$facebook', '$weblink', '$email2')";
$conn->query($sqlc);

}

?>

<!DOCTYPE html>
        <html lang="en">
        <head>
        <link rel="stylesheet" href="../../style1.css"/>
        <link rel="stylesheet" href="../../link.css"/>
        <link rel="stylesheet" href="../../table.css"/>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

        <title>Admin | Categories</title>
        <link href="../assets/css/bootstrap.css" rel="stylesheet">
        <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href="../assets/css/style.css" rel="stylesheet">
        <link href="../assets/css/style-responsive.css" rel="stylesheet">

        <style>
table {
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2
}
</style>

        </head>

        <body>

        <section id="container" >
            <header class="header black-bg">
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
                </div>
                <a href="#" class="logo"><b>Admin Dashboard</b></a>
                <div class="nav notify-row" id="top_menu">

                </div>
                    
                <div class="top-menu">
                    <ul class="nav pull-right top-menu">
                        <li><a class="logout" href="../logout.php">Logout</a></li>
                    </ul>
                </div>
            </header>
            <aside>
                <div id="sidebar"  class="nav-collapse ">
                    <ul class="sidebar-menu" id="nav-accordion">
                                            
                        <p class="centered"><a href="#"><img src="../assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                        <h5 class="centered"><?php echo $_SESSION['login'];?></h5>
                            
                        

                        <li class="sub-menu">
                            <a href="../categories.php" >
                                <i class="fa fa-users"></i>
                                <span>Categories</span>
                            </a>
                        
                        </li>

                        <li class="sub-menu">
                            <a href="../set-deadline.php" >
                                <i class="fa fa-clock-o"></i>
                                <span>Set Deadline</span>
                            </a>
                        
                        </li>

                        <li class="sub-menu">
                            <a href="../notice.php">
                                <i class="fa fa-cog"></i>
                                <span>Edit page notice</span>
                            </a>
                        </li>

                        <li class="sub-menu">
                            <a href="../change-password.php">
                                <i class="fa fa-cog"></i>
                                <span>Change Password</span>
                            </a>
                        </li>
                    
                        
                    </ul>
                </div>
            </aside>
            <section id="main-content">
                <section class="wrapper">
                    <h3><i class="fa fa-angle-right"></i> Categories</h3>
                    <div class="row">
<?php
echo "<h1><b>" . $_SESSION['div2'] . "</b></h1>";
echo "<h2><u>Nominees</u></h2>";
require '../../configure.php';
?>
<a href="http://localhost/vp/admin@admin_page/div2/addnominee2.php" class="btn btn-success">Add new nominee</a>
<?php
$sqls = "SELECT * FROM nominees_c2 ORDER BY full_name";

if($result = $conn->query($sqls)){
    if($result->num_rows > 0){?>
        <table class="css-serial" id="myTable">
        <thead>
        <tr>
        <th> <big>s/n</big> </th>
        <th> <big>Name</big> </th>
        <th> <big>Facebook</big> </th>
        <th> <big>Web Link</big> </th>
        <th> <big>Email</big> </th>
        <th> <big>Count</big> </th>
        <th> <big>Edit</big> </th>
        <th> <big>Delete</big> </th>
        <th> <big>Shortlist</big> </th>
        </tr>
        </thead>

        <?php
        $counter = 0;
        while($row = $result->fetch_array()){ ?>
        <tbody>
        <tr>
            <td><?php echo ++$counter; ?> </td>
            <td><?php echo "<big><b>" . trim($row[1]) ?? '' . "</br></big>"; ?> </td>
            <td><?php echo trim($row[2]) ?? ''; ?> </td>
            <td><a href="<?php echo trim($row[3]) ?? ''; ?>" target="_blank"><?php echo trim($row[3]) ?? ''; ?></a></td>
            <td><?php echo trim($row[4]) ?? ''; ?> </td>
            <?php $row1 = trim($row[1]);
            $sqlcnt = "SELECT COUNT(id) FROM `$row1`";
            $results = $conn->query($sqlcnt);
            if($results == false){
                ?><td><?php echo 1;
            }else{
                $rows = $results->fetch_row();
                ?><td><?php echo (string)$rows[0] + 1; }?> </td>
            <td><a href="edit2.php?id=<?php echo $row[0];?>" onClick="return confirm('Are you sure you want to edit this candidate\'s details?')" class="btn btn-warning">Edit</a></td>
            <td><a href="delete2.php?nominee=<?php echo $row[1];?>" onClick="return confirm('Are you sure you want to delete this candidate from the nominee list?')" class="btn btn-danger">Delete</a></td>
            <td><a href="shortlist2.php?nominee=<?php echo $row[1];?>" onClick="return confirm('Are you sure you want to shortlist this candidate for voting?')" class="btn btn-success">Shortlist</a></td>
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
</body>
</html>