<?php
debug_backtrace();
error_reporting(0);
if(!session_id()) session_start();
if(!$_SESSION['logon']){
    header('location: index.php');
    die();
}else{
    include_once 'dbconnection.php';
    // checking session is valid for not 
    if(strlen($_SESSION['id']==0)) {
        header('location: logout.php');
    }else{

        if(isset($_POST['submit1'])){
            if(($_POST['nsdate']) && $_POST['nedate']){
            $nsdate = mysqli_real_escape_string($con, $_POST['nsdate']);
            $nedate = mysqli_real_escape_string($con, $_POST['nedate']);
            $_SESSION['nsdate'] = $nsdate;
            $_SESSION['nedate'] = $nedate;
            $sqli = "UPDATE deadline SET dates='$nsdate' WHERE title='nsdate'";
            $con->query($sqli);
            $sqlii = "UPDATE deadline SET dates='$nedate' WHERE title='nedate'";
            $con->query($sqlii);
            }}

        
        
        if(isset($_POST['submit2'])){
            if(($_POST['vsdate']) && $_POST['vedate']){
            $vsdate = mysqli_real_escape_string($con, $_POST['vsdate']);
            $vedate = mysqli_real_escape_string($con, $_POST['vedate']);
            $_SESSION['vsdate'] = $vsdate;
            $_SESSION['vedate'] = $vedate;
            $sqli2 = "UPDATE deadline SET dates='$vsdate' WHERE title='vsdate'";
            $con->query($sqli2);
            $sqlii2 = "UPDATE deadline SET dates='$vedate' WHERE title='vedate'";
            $con->query($sqlii2);
            }}
            
        ?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
        <link rel="stylesheet" href="../style1.css"/>
        <link rel="stylesheet" href="../link.css"/>
        <link rel="stylesheet" href="../loginstyled.css"/>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

        <title>Admin | Categories</title>
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/style-responsive.css" rel="stylesheet">
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
                        <li><a class="logout" href=".logout.php">Logout</a></li>
                    </ul>
                </div>
            </header>
            <aside>
                <div id="sidebar"  class="nav-collapse ">
                    <ul class="sidebar-menu" id="nav-accordion">
                                            
                        <p class="centered"><a href="#"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                        <h5 class="centered"><?php echo $_SESSION['login'];?></h5>
                            
                        

                        <li class="sub-menu">
                            <a href="categories.php" >
                                <i class="fa fa-users"></i>
                                <span>Categories</span>
                            </a>
                        
                        </li>

                        <li class="sub-menu">
                            <a href="set-deadline.php" >
                                <i class="fa fa-clock-o"></i>
                                <span>Set Deadline</span>
                            </a>
                        
                        </li>

                        <li class="sub-menu">
                            <a href="notice.php">
                                <i class="fa fa-cog"></i>
                                <span>Edit page notice</span>
                            </a>
                        </li>

                        <li class="sub-menu">
                            <a href="change-password.php">
                                <i class="fa fa-cog"></i>
                                <span>Change Password</span>
                            </a>
                        </li>
                    
                        
                    </ul>
                </div>
            </aside>
            <section id="main-content">
                <section class="wrapper">
                    <h3><i class="fa fa-angle-right"></i> Edit page notice</h3>
                    <div class="row">
                    <div class="form_div">

                        <form id="login" action="categories.php" method="POST">
                        <fieldset>
                        <legend><h1>Edit page notice</h1></legend>

                        <textarea name="notice" rows="4" cols="40"> Enter notice here...</textarea>

                        <input class="submit" type="submit" value="Submit" name="submit1"/>
                        </fieldset>
                        </form>
                    </div>
                    </div>
                </section>
            </section>
        </section>
        </body>
        </html>
    <?php }} ?>