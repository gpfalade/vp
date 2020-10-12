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
<link rel="stylesheet" href="../../add.css"/>
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
include_once '../../configure.php';
echo "<h1><b>" . $_SESSION['div9'] . "</b></h1>";

$id = $_GET['id'];
 $_SESSION['id'] = $id;


$sqls = "SELECT * FROM nominees_c9 WHERE id=$id";

$result = $conn->query($sqls);
while($row = $result->fetch_array()){
        $cname = $row[1];
        $facebook = $row[2];
        $weblink = $row[3];
        $email2 = $row[4];
}
?>

<div class="container">
  <form action="edit99.php" method="POST">
      <fieldset>
          <legend><h2>Add nominee</h2></legend>
          
            <label for="cname"><b>Name</b></label>
            <input type="text" id="cname" name="cname" value="<?php echo $cname;?>" readonly/>

            <label for="facebook"><b>Facebook handle</b></label>
            <input type="text" id="facebook" name="facebook" value="<?php echo $facebook;?>" placeholder="Nominee's facebook handle..."/>

            <label for="weblink"><b>Web link</b></label>
            <input type="url" id="weblink" name="weblink" value="<?php echo $weblink;?>" placeholder="https://nominee-weblink.com" />

            <label for="email2"><b>Email</b></label>
            <input type="email" id="email2" name="email2" value="<?php echo $email2;?>" placeholder="Nominee's email address..."/>

            <input type="checkbox" required/><b>Confirm all entries are correct</b>
            <P></p>
            
            <input type="submit" value="Update" id="update" name="update">

        </fieldset>
  </form>
</div>

</body>
</html>