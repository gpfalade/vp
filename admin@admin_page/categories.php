<?php
debug_backtrace();
error_reporting(0);
if(!session_id()) session_start();
if(!$_SESSION['logon']){
    header('location: index.php');
    die();
}else{
    include 'dbconnection.php';
    // checking session is valid for not 
    if(strlen($_SESSION['id']==0)) {
        header('location:logout.php');
    }else{

        if(isset($_POST['submitc1'])){
            $div1 =$_POST['div1'] ?? '';
            $div1 = mysqli_real_escape_string($con, $_POST['div1']);
            $_SESSION['div1'] = $div1;
            $sql1 = "UPDATE session_names SET word='$div1' WHERE title='div1'";
            $con->query($sql1);
        }

            $sqlst1 = "SELECT word FROM session_names WHERE title='div1'";
        $result1 = $con->query($sqlst1);
        while($row1 = $result1->fetch_array()){
        $div1 = $row1[0];
        }
        

        if(isset($_POST['submitc2'])){
            $div2 =$_POST['div2'] ?? '';
            $div2 = mysqli_real_escape_string($con, $_POST['div2']);
            $_SESSION['div2'] = $div2;
            $sql2 = "UPDATE session_names SET word='$div2' WHERE title='div2'";
            $con->query($sql2);
        }

            $sqlst2 = "SELECT word FROM session_names WHERE title='div2'";
        $result2 = $con->query($sqlst2);
        while($row2 = $result2->fetch_array()){
        $div2 = $row2[0];
        }
        
        if(isset($_POST['submitc3'])){
            $div3 =$_POST['div3'] ?? '';
            $div3 = mysqli_real_escape_string($con, $_POST['div3']);
            $_SESSION['div3'] = $div3;
            $sql3 = "UPDATE session_names SET word='$div3' WHERE title='div3'";
            $con->query($sql3);
        }

            $sqlst3 = "SELECT word FROM session_names WHERE title='div3'";
        $result3 = $con->query($sqlst3);
        while($row3 = $result3->fetch_array()){
        $div3 = $row3[0];
        }

        
        if(isset($_POST['submitc4'])){
            $div4 =$_POST['div4'] ?? '';
            $div4 = mysqli_real_escape_string($con, $_POST['div4']);
            $_SESSION['div4'] = $div4;
            $sql4 = "UPDATE session_names SET word='$div4' WHERE title='div4'";
            $con->query($sql4);
        }

            $sqlst4 = "SELECT word FROM session_names WHERE title='div4'";
        $result4 = $con->query($sqlst4);
        while($row4 = $result4->fetch_array()){
        $div4 = $row4[0];
        }

        if(isset($_POST['submitc5'])){
            $div5 =$_POST['div5'] ?? '';
            $div5 = mysqli_real_escape_string($con, $_POST['div5']);
            $_SESSION['div5'] = $div5;
            $sql5 = "UPDATE session_names SET word='$div5' WHERE title='div5'";
            $con->query($sql5);
        }

            $sqlst5 = "SELECT word FROM session_names WHERE title='div5'";
        $result5 = $con->query($sqlst5);
        while($row5 = $result5->fetch_array()){
        $div5 = $row5[0];
        }

        if(isset($_POST['submitc6'])){
            $div6 =$_POST['div6'] ?? '';
            $div6 = mysqli_real_escape_string($con, $_POST['div6']);
            $_SESSION['div6'] = $div6;
            $sql6 = "UPDATE session_names SET word='$div6' WHERE title='div6'";
            $con->query($sql5);
        }

            $sqlst6 = "SELECT word FROM session_names WHERE title='div6'";
        $result6 = $con->query($sqlst6);
        while($row6 = $result6->fetch_array()){
        $div6 = $row6[0];
        }

        if(isset($_POST['submitc7'])){
            $div7 =$_POST['div7'] ?? '';
            $div7 = mysqli_real_escape_string($con, $_POST['div7']);
            $_SESSION['div7'] = $div7;
            $sql7 = "UPDATE session_names SET word='$div7' WHERE title='div7'";
            $con->query($sql7);
        }

            $sqlst7 = "SELECT word FROM session_names WHERE title='div7'";
        $result7 = $con->query($sqlst7);
        while($row7 = $result7->fetch_array()){
        $div7 = $row7[0];
        }
        
        if(isset($_POST['submitc8'])){
            $div8 =$_POST['div8'] ?? '';
            $div8 = mysqli_real_escape_string($con, $_POST['div8']);
            $_SESSION['div8'] = $div8;
            $sql8 = "UPDATE session_names SET word='$div8' WHERE title='div8'";
            $con->query($sql8);
        }

            $sqlst8 = "SELECT word FROM session_names WHERE title='div8'";
        $result8 = $con->query($sqlst8);
        while($row8 = $result8->fetch_array()){
        $div8 = $row8[0];
        }

        if(isset($_POST['submitc9'])){
            $div9 =$_POST['div9'] ?? '';
            $div9 = mysqli_real_escape_string($con, $_POST['div9']);
            $_SESSION['div9'] = $div9;
            $sql9 = "UPDATE session_names SET word='$div9' WHERE title='div9'";
            $con->query($sql9);
        }

            $sqlst9 = "SELECT word FROM session_names WHERE title='div9'";
        $result9 = $con->query($sqlst9);
        while($row9 = $result9->fetch_array()){
        $div9 = $row9[0];
        }

        if(isset($_POST['submitc10'])){
            $div10 =$_POST['div10'] ?? '';
            $div10 = mysqli_real_escape_string($con, $_POST['div10']);
            $_SESSION['div10'] = $div10;
            $sql10 = "UPDATE session_names SET word='$div10' WHERE title='div10'";
            $con->query($sql10);
        }

            $sqlst10 = "SELECT word FROM session_names WHERE title='div10'";
        $result10 = $con->query($sqlst10);
        while($row10 = $result10->fetch_array()){
        $div10 = $row10[0];
        }


        if(isset($_POST['submit1'])){
            $notice = $_POST['notice'] ?? '';
            $notice = mysqli_real_escape_string($con, $_POST['notice']);
            $_SESSION['notice'] = $notice;
            $sqlc = "UPDATE session_names SET word='$notice' WHERE title='notice'";
            $sqlcs = $con->query($sqlc);
        }

        $sqlr = "SELECT word FROM session_names WHERE title='notice'";
        $results = $con->query($sqlr);
        while($rows = $results->fetch_array()){
        $notice = $rows[0];
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
                    <h3><i class="fa fa-angle-right"></i> Categories</h3>
                    <div class="row">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                            <h1><?php echo $div1; ?></h1>
                            </div>
                            <div class="flip-card-back">
                            <h1><?php echo $div1; ?></h1> 
                            <p><a class="content" id="ones" href="http://localhost/vp/admin@admin_page/div1/nominees111.php">See nominees</a></p>
                            <p><a class="content" id="ones" href="http://localhost/vp/admin@admin_page/div1/shortlist11.php">Shortlisted</a></p>
                            <p><a class="content" id="ones" href="http://localhost/vp/admin@admin_page/div1/vote1.php">View vote</a></p>
                            <p><a class="content" id="ones" href="http://localhost/vp/admin@admin_page/div1/cat1.php">Edit category name</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                            <h1><?php echo $div2; ?></h1>
                            </div>
                            <div class="flip-card-back">
                            <h1><?php echo $div2; ?></h1> 
                            <p><a class="content" id="ones" href="http://localhost/vp/admin@admin_page/div2/nominees222.php">See nominees</a></p>
                            <p><a class="content" id="ones" href="http://localhost/vp/admin@admin_page/div2/shortlist22.php">Shortlisted</a></p>
                            <p><a class="content" id="ones" href="http://localhost/vp/admin@admin_page/div2/vote2.php">View vote</a></p>
                            <p><a class="content" id="ones" href="http://localhost/vp/admin@admin_page/div2/cat2.php">Edit category name</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                            <h1><?php echo $div3; ?></h1>
                            </div>
                            <div class="flip-card-back">
                            <h1><?php echo $div3; ?></h1> 
                            <p><a class="content" id="ones" href="http://localhost/vp/admin@admin_page/div3/nominees333.php">See nominees</a></p>
                            <p><a class="content" id="ones" href="http://localhost/vp/admin@admin_page/div3/shortlist33.php">Shortlisted</a></p>
                            <p><a class="content" id="ones" href="http://localhost/vp/admin@admin_page/div3/vote3.php">View vote</a></p>
                            <p><a class="content" id="ones" href="http://localhost/vp/admin@admin_page/div3/cat3.php">Edit category name</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                            <h1><?php echo $div4; ?></h1>
                            </div>
                            <div class="flip-card-back">
                            <h1><?php echo $div4; ?></h1> 
                            <p><a class="content" id="ones" href="http://localhost/vp/admin@admin_page/div4/nominees444.php">See nominees</a></p>
                            <p><a class="content" id="ones" href="http://localhost/vp/admin@admin_page/div4/shortlist44.php">Shortlisted</a></p>
                            <p><a class="content" id="ones" href="http://localhost/vp/admin@admin_page/div4/vote4.php">View vote</a></p>
                            <p><a class="content" id="ones" href="http://localhost/vp/admin@admin_page/div4/cat4.php">Edit category name</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                            <h1><?php echo $div5; ?></h1>
                            </div>
                            <div class="flip-card-back">
                            <h1><?php echo $div5; ?></h1> 
                            <p><a class="content" id="ones" href="http://localhost/vp/admin@admin_page/div5/nominees555.php">See nominees</a></p>
                            <p><a class="content" id="ones" href="http://localhost/vp/admin@admin_page/div5/shortlist55.php">Shortlisted</a></p>
                            <p><a class="content" id="ones" href="http://localhost/vp/admin@admin_page/div5/vote5.php">View vote</a></p>
                            <p><a class="content" id="ones" href="http://localhost/vp/admin@admin_page/div5/cat5.php">Edit category name</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                            <h1><?php echo $div6; ?></h1>
                            </div>
                            <div class="flip-card-back">
                            <h1><?php echo $div6; ?></h1> 
                            <p><a class="content" id="ones" href="http://localhost/vp/admin@admin_page/div6/nominees666.php">See nominees</a></p>
                            <p><a class="content" id="ones" href="http://localhost/vp/admin@admin_page/div6/shortlist66.php">Shortlisted</a></p>
                            <p><a class="content" id="ones" href="http://localhost/vp/admin@admin_page/div6/vote6.php">View vote</a></p>
                            <p><a class="content" id="ones" href="http://localhost/vp/admin@admin_page/div6/cat6.php">Edit category name</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                            <h1><?php echo $div7; ?></h1>
                            </div>
                            <div class="flip-card-back">
                            <h1><?php echo $div7; ?></h1> 
                            <p><a class="content" id="ones" href="http://localhost/vp/admin@admin_page/div7/nominees777.php">See nominees</a></p>
                            <p><a class="content" id="ones" href="http://localhost/vp/admin@admin_page/div7/shortlist77.php">Shortlisted</a></p>
                            <p><a class="content" id="ones" href="http://localhost/vp/admin@admin_page/div7/vote7.php">View vote</a></p>
                            <p><a class="content" id="ones" href="http://localhost/vp/admin@admin_page/div7/cat7.php">Edit category name</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                            <h1><?php echo $div8; ?></h1>
                            </div>
                            <div class="flip-card-back">
                            <h1><?php echo $div8; ?></h1> 
                            <p><a class="content" id="ones" href="http://localhost/vp/admin@admin_page/div8/nominees888.php">See nominees</a></p>
                            <p><a class="content" id="ones" href="http://localhost/vp/admin@admin_page/div8/shortlist88.php">Shortlisted</a></p>
                            <p><a class="content" id="ones" href="http://localhost/vp/admin@admin_page/div8/vote8.php">View vote</a></p>
                            <p><a class="content" id="ones" href="http://localhost/vp/admin@admin_page/div8/cat8.php">Edit category name</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                            <h1><?php echo $div9; ?></h1>
                            </div>
                            <div class="flip-card-back">
                            <h1><?php echo $div9; ?></h1> 
                            <p><a class="content" id="ones" href="http://localhost/vp/admin@admin_page/div9/nominees999.php">See nominees</a></p>
                            <p><a class="content" id="ones" href="http://localhost/vp/admin@admin_page/div9/shortlist99.php">Shortlisted</a></p>
                            <p><a class="content" id="ones" href="http://localhost/vp/admin@admin_page/div9/vote9.php">View vote</a></p>
                            <p><a class="content" id="ones" href="http://localhost/vp/admin@admin_page/div9/cat9.php">Edit category name</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                            <h1><?php echo $div10; ?></h1>
                            </div>
                            <div class="flip-card-back">
                            <h1><?php echo $div10; ?></h1> 
                            <p><a class="content" id="ones" href="http://localhost/vp/admin@admin_page/div10/nominees101010.php">See nominees</a></p>
                            <p><a class="content" id="ones" href="http://localhost/vp/admin@admin_page/div10/shortlist1010.php">Shortlisted</a></p>
                            <p><a class="content" id="ones" href="http://localhost/vp/admin@admin_page/div10/vote10.php">View vote</a></p>
                            <p><a class="content" id="ones" href="http://localhost/vp/admin@admin_page/div10/cat10.php">Edit category name</a></p>
                            </div>
                        </div>
                    </div>
                                                            
                    </div>
                </section>
            </section>
        </section>
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="assets/js/common-scripts.js"></script>
        <script>
            $(function(){
                $('select.styled').customSelect();
            });
        </script>

        </body>
        </html>
<?php }} ?>