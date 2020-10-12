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
                    <h3><i class="fa fa-angle-right"></i>View votes</h3>
                    <div class="row">
<?php
echo "<h1><b>" . $_SESSION['div8'] . "</b></h1>";
echo "<h2><u>Nominees</u></h2>";
require_once '../../configure.php';

$sqls = "SELECT full_name FROM shortlisted_c8 ORDER BY full_name";

if($result = $conn->query($sqls)){
    if($result->num_rows > 0){?>
        <table class="css-serial" id="myTable">
        <thead>
        <tr>
        <th> <big>s/n</big> </th>
        <th> <big>Name</big> </th>
        <th> <big>Vote count</big> </th>
        </tr>
        </thead>

        <?php
        $counter = 0;
        while($row = $result->fetch_array()){ ?>
        <tbody>
        <tr>
            <td><?php echo ++$counter; ?> </td>
            <td><?php echo "<big><b>" . trim($row[0]) ?? '' . "</br></big>"; ?> </td>
            <?php $nom = trim($row[0]);
            $sqlcnt = "SELECT COUNT(*) FROM vote_c8 WHERE nominee='$nom'";
            $results = $conn->query($sqlcnt); 
            $rows = $results->fetch_row();?>
            <td><?php echo (string)$rows[0]; ?> </td>
        </tr>
        </tbody>
        <?php } ?>
    </table>
    
        <?php
    }else{
        echo "No votes yet";
    }
}else{
    echo "No votes yet.";
}

$conn->close();

?>
</body>
</html>