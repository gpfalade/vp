<?php
debug_backtrace() || die();
session_start();
include 'configure.php';

$sqlr = "SELECT word FROM session_names WHERE title='notice'";
$results = $conn->query($sqlr);
while($rowss = $results->fetch_array()){
$notice = $rowss[0];
}
?>

<!DOCTYPE html>
<html lang="en -US">
<head>
<title></title>
<link rel="stylesheet" href="style1.css"/>
<link rel="stylesheet" href="link.css"/>
<link rel="stylesheet" href="table.css"/>
<meta  mame="viewport" content="width=device-width, initial-scale=1.0"/>

<style type="text/css">
.scroll{
		width:100%;
		height:45px;
		overflow:hidden;
    position:relative;
    background: black;
}
	
	.scrollingtext{
		white-space:nowrap;
    position:absolute;
    color: white;
    font-size:30px;
	}
	
</style>

<script type="text/javascript" src="jquery.js"></script>


<script type="text/javascript">
$(document).ready(function() {
	 
	    $('.scrollingtext').bind('marquee', function() {
	        var ob = $(this);
	        var tw = ob.width();
	        var ww = ob.parent().width();
	        ob.css({ right: -tw });
	        ob.animate({ right: ww }, 20000, 'linear', function() {
	            ob.trigger('marquee');
	        });
	    }).trigger('marquee');
	 
	});
	</script>

</head>
<body>
<div class="a">
<span style="float:left" align="left"><b><big><?php
    echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
    ?></big></b></span>

    <span style="float:right" align="right"><b><big><?php
    date_default_timezone_set("Africa/Lagos");
    echo date("D", strtotime("today")) . ", ";
    echo date("M d, Y") . "<br>";
    echo date("h:i A");
    ?></big></b></span>
    <h1><big><big><big><big><center>VOTELINE</center></big></big></big></big></h1>
    <br>
    <center>
        <a class="contents" id="heads" href="http://localhost/vp/index.php">Home</a>
        <a class="contents" id="heads" href="http://localhost/vp/index.php">About</a>
        <a class="contents" id="heads" href="http://localhost/vp/index.php">Contact</a>
        <a class="contents" id="heads" href="http://localhost/vp/index.php">FAQ</a>
    </center>
</div>

<div class="scroll">
    <div class="scrollingtext"><?php echo "$notice"; ?></div>
 </div>


</body>
</html>