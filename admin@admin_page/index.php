<?php
//session_start();
error_reporting(0);
include("dbconnection.php");
if(isset($_POST['login'])){
  $adminusername=$_POST['username'];
  $pass=md5($_POST['password']);
  $ret=mysqli_query($con,"SELECT * FROM admin WHERE username='$adminusername' and password='$pass'");
  $num=mysqli_fetch_array($ret);
if($num>0)
{
  if(!session_id())
  session_start();

  $_SESSION['logon'] = true;
$extra="categories.php";
$_SESSION['login']=$_POST['username'];
$_SESSION['id']=$num['id'];

$sqls = "CREATE TABLE IF NOT EXISTS session_names (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(90) NOT NULL UNIQUE,
  word VARCHAR(200) NOT NULL)";

$sqlsc = $con->query($sqls);

$nsdate = "2020/10/01";
$nedate = "2020/10/01";
$vsdate = "2020/10/01";
$vedate = "2020/10/01";

$sqli = "INSERT INTO session_names(id, title, word) VALUES 
('', 'notice', 'Details shortly'),
('', 'div1', 'Best State University in Nigeria'),
('', 'div2', 'Best Federal University in Nigeria'),
('', 'div3', 'Best State Polythenic in Nigeria'),
('', 'div4', 'Best Federal Polythecnic in Nigeria'),
('', 'div5', 'Best State College of Education in Nigeria'),
('', 'div6', 'Best Federal College of Education in Nigeria'),
('', 'div7', 'Best State Secondary School in Nigeria'),
('', 'div8', 'Best Federal Secondary School in Nigeria'),
('', 'div9', 'Best Private University in Nigeria'),
('', 'div10', 'Best Private Secondary School in Nigeria')";

$sqlis = $con->query($sqli);


$sqlsn = "CREATE TABLE IF NOT EXISTS deadline (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(90) NOT NULL UNIQUE,
  dates VARCHAR(20) NOT NULL )";

$con->query($sqlsn);

$sqlsnd = "INSERT INTO deadline(id, title, dates) VALUES 
('', 'nsdate', '$nsdate'),
('', 'nedate', '$nedate'),
('', 'vsdate', '$vsdate'),
('', 'vedate', '$vedate')";

$con->query($sqlsnd);

echo "<script>window.location.href='".$extra."'</script>";
exit();
}
else
{
$_SESSION['action1']="*Invalid username or password";
$extra="index.php";
echo "<script>window.location.href='".$extra."'</script>";
exit();
}
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Admin | Login</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
  </head>

  <body>
	  <div id="login-page">
	  	<div class="container">
      
	  	
		      <form class="form-login" action="" method="post">
		        <h2 class="form-login-heading">sign in now</h2>
                  <p style="color:#F00; padding-top:20px;" align="center">
                    <?php echo $_SESSION['action1'];?><?php echo $_SESSION['action1']="";?></p>
		        <div class="login-wrap">
		            <input type="text" name="username" class="form-control" placeholder="User ID" autofocus>
		            <br>
		            <input type="password" name="password" class="form-control" placeholder="Password"><br >
		            <input  name="login" class="btn btn-theme btn-block" type="submit">
		         
		        </div>
		      </form>	  	
	  	
	  	</div>
	  </div>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
