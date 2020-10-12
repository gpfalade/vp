<?php
debug_backtrace();
error_reporting(0);
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
echo "<h1><b>" . $_SESSION['div7'] . "</b></h1>";
?>

<div class="container">
  <form action="nominees777.php" method="POST">
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
            
            <input type="submit" value="Submit" id="submit2" name="submit2">

        </fieldset>
  </form>
</div>

</body>
</html>