<?php
debug_backtrace();
if(!session_id()) session_start();
if(!$_SESSION['logon']){
    header('location: index.php');
    die();
}
?>

<!DOCTYPE html>
        <html lang="en">
        <head>
        <link rel="stylesheet" href="../style1.css"/>
        <link rel="stylesheet" href="../link.css"/>
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
                        <li><a class="logout" href="logout.php">Logout</a></li>
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
                    <h3><i class="fa fa-angle-right"></i>Set deadline</h3>
                        <div class="row">

                            <div class="form_div">

<form id="login" action="notice.php" method="POST">
<fieldset>
<h1>Set nomination deadline</h1>

<input type="text" name="nsdate" placeholder="yyyy/mm/dd"/>
&nbsp to &nbsp
<input type="text" name="nedate" placeholder="yyyy/mm/dd"/>

<input class="submit" type="submit" value="Submit" name="submit1"/>
</fieldset>
</form>
</div>
<br> </br><br>
<legend> </legend>

<div class="form_div">

<form id="login" action="notice.php" method="POST">
<fieldset>
<h1>Set voting deadline</h1>

<input type="text" name="vsdate" placeholder="yyyy/mm/dd"/>
&nbsp to &nbsp
<input type="text" name="vedate" placeholder="yyyy/mm/dd"/>

<input class="submit" type="submit" value="Submit" name="submit2"/>
</fieldset>
</form>
</div>
                        </div>
                    </section>
                </section>
            </section>
        </body>
    </html>
    