<?php
debug_backtrace();
if(!session_id()) session_start();
if(!$_SESSION['logon']){
    header('location: ../index.php');
    die();
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
                                <i class="fa fa-list"></i>
                                <span>Set deadline</span>
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
echo "<h1><b>" . $_SESSION['div6'] . "</b></h1>";
echo "<h2><u>Shortlisted Nominees</u></h2>";
require_once '../../configure.php';
$shortlist1 = $_GET['nominee'] ?? '';
$_SESSION['nominee'] = $shortlist1;


$sqls = "SELECT * FROM nominees_c6 WHERE full_name='$shortlist1'";

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
            <?php
            $cname = trim($row[1]);
            $facebook = trim($row[2]) ?? '';
            $weblink = trim($row[3]) ?? '';
            $email2 = trim($row[4]) ?? '';
            ?>
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



$sht = "CREATE TABLE IF NOT EXISTS shortlisted_c6 (id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
full_name VARCHAR(90) NOT NULL UNIQUE,
facebook VARCHAR(90) NOT NULL,
weblink VARCHAR(90) NOT NULL,
email VARCHAR(100) NOT NULL
)";

$conn->query($sht);

$shtq = "INSERT INTO shortlisted_c6(id, full_name, facebook, weblink, email) VALUES ('', '$cname', '$facebook', '$weblink', '$email2')";
$conn->query($shtq);

$conn->close();

?>

<script>location.href='nominees666.php';</script>

</body>
</html>