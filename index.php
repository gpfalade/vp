<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<link rel="stylesheet" href="style1.css"/>
<link rel="stylesheet" href="link.css"/>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>
<body>
    
<?php

error_reporting(0);
include_once 'head.php';

$sqlst1 = "SELECT word FROM session_names WHERE title='div1'";
$result1 = $conn->query($sqlst1);
while($row1 = $result1->fetch_array()){
$div1 = $row1[0];
}

$sqlst2 = "SELECT word FROM session_names WHERE title='div2'";
$result2 = $conn->query($sqlst2);
while($row2 = $result2->fetch_array()){
$div2 = $row2[0];
}

$sqlst3 = "SELECT word FROM session_names WHERE title='div3'";
$result3 = $conn->query($sqlst3);
while($row3 = $result3->fetch_array()){
$div3 = $row3[0];
}

$sqlst4 = "SELECT word FROM session_names WHERE title='div4'";
$result4 = $conn->query($sqlst4);
while($row4 = $result4->fetch_array()){
$div4 = $row4[0];
}

$sqlst5 = "SELECT word FROM session_names WHERE title='div5'";
$result5 = $conn->query($sqlst5);
while($row5 = $result5->fetch_array()){
$div5 = $row5[0];
}

$sqlst6 = "SELECT word FROM session_names WHERE title='div6'";
$result6 = $conn->query($sqlst6);
while($row6 = $result6->fetch_array()){
$div6 = $row6[0];
}

$sqlst7 = "SELECT word FROM session_names WHERE title='div7'";
$result7 = $conn->query($sqlst7);
while($row7 = $result7->fetch_array()){
$div7 = $row7[0];
}

$sqlst8 = "SELECT word FROM session_names WHERE title='div8'";
$result8 = $conn->query($sqlst8);
while($row8 = $result8->fetch_array()){
$div8 = $row8[0];
}

$sqlst9 = "SELECT word FROM session_names WHERE title='div9'";
$result9 = $conn->query($sqlst9);
while($row9 = $result9->fetch_array()){
$div9 = $row9[0];
}

$sqlst10 = "SELECT word FROM session_names WHERE title='div10'";
$result10 = $conn->query($sqlst10);
while($row10 = $result10->fetch_array()){
$div10 = $row10[0];
}



$sqlsts11 = "SELECT dates FROM deadline WHERE title='nsdate'";
$results11 = $conn->query($sqlsts11);
while($rows11 = $results11->fetch_array()){
$nsdate = $rows11[0];
}

$sqlsts22 = "SELECT dates FROM deadline WHERE title='nedate'";
$results22 = $conn->query($sqlsts22);
while($rows22 = $results22->fetch_array()){
$nedate = $rows22[0];
}

$sqlsts33 = "SELECT dates FROM deadline WHERE title='vsdate'";
$results33 = $conn->query($sqlsts33);
while($rows33 = $results33->fetch_array()){
$vsdate = $rows33[0];
}

$sqlsts44 = "SELECT dates FROM deadline WHERE title='vedate'";
$results44 = $conn->query($sqlsts44);
while($row44 = $results44->fetch_array()){
$vedate = $rows44[0];
}

$nsdate = $_SESSION['nsdate'];
$nedate = $_SESSION['nedate'];
$vsdate = $_SESSION['vsdate'];
$vedate = $_SESSION['vedate'];


$dates = array();
$current = strtotime($nsdate);

while($current <= strtotime($nedate)){
    $dates[] = date('Y/m/d', $current);
    $current = strtotime('+1 days', $current);
}

$dates2 = array();
$currents = strtotime($vsdate);

while($currents <= strtotime($vedate)){
    $dates2[] = date('Y/m/d', $currents);
    $currents = strtotime('+1 days', $currents);
}

$today = strtotime(date('Y/m/d'));
$nsdates = strtotime($nsdate);
$nedates = strtotime($nedate);
$vsdates = strtotime($vsdate);
$vedates = strtotime($vedate);

if(($nsdates <= $today) && ($today < $nedates)){
$nominees1 = "nominees1n.php";
$shortlisted1 = "shortlisted1n.php";
$decoyvote1 = "decoyvote1n.php";

$nominees2 = "nominees2n.php";
$shortlisted2 = "shortlisted2n.php";
$decoyvote2 = "decoyvote2n.php";

$nominees3 = "nominees3n.php";
$shortlisted3 = "shortlisted3n.php";
$decoyvote3 = "decoyvote3n.php";

$nominees4 = "nominees4n.php";
$shortlisted4 = "shortlisted4n.php";
$decoyvote4 = "decoyvote4n.php";

$nominees5 = "nominees5n.php";
$shortlisted5 = "shortlisted5n.php";
$decoyvote5 = "decoyvote5n.php";

$nominees6 = "nominees6n.php";
$shortlisted6 = "shortlisted6n.php";
$decoyvote6 = "decoyvote6n.php";

$nominees7 = "nominees7n.php";
$shortlisted7 = "shortlisted7n.php";
$decoyvote7 = "decoyvote7n.php";

$nominees8 = "nominees8n.php";
$shortlisted8 = "shortlisted8n.php";
$decoyvote8 = "decoyvote8n.php";

$nominees9 = "nominees9n.php";
$shortlisted9 = "shortlisted9n.php";
$decoyvote9 = "decoyvote9n.php";

$nominees10 = "nominees10n.php";
$shortlisted10 = "shortlisted10n.php";
$decoyvote10 = "decoyvote10n.php";
 }elseif(($vsdates <= $today) && ($today <= $vedates)){
$nominees1 = "nominees1v.php";
$shortlisted1 = "shortlisted1v.php";
$decoyvote1 = "decoyvote1v.php";

$nominees2 = "nominees2v.php";
$shortlisted2 = "shortlisted2v.php";
$decoyvote2 = "decoyvote2v.php";

$nominees3 = "nominees3v.php";
$shortlisted3 = "shortlisted3v.php";
$decoyvote3 = "decoyvote3v.php";

$nominees4 = "nominees4v.php";
$shortlisted4 = "shortlisted4v.php";
$decoyvote4 = "decoyvote4v.php";

$nominees5 = "nominees5v.php";
$shortlisted5 = "shortlisted5v.php";
$decoyvote5 = "decoyvote5v.php";

$nominees6 = "nominees6v.php";
$shortlisted6 = "shortlisted6v.php";
$decoyvote6 = "decoyvote6v.php";

$nominees7 = "nominees7v.php";
$shortlisted7 = "shortlisted7v.php";
$decoyvote7 = "decoyvote7v.php";

$nominees8 = "nominees8v.php";
$shortlisted8 = "shortlisted8v.php";
$decoyvote8 = "decoyvote8v.php";

$nominees9 = "nominees9v.php";
$shortlisted9 = "shortlisted9v.php";
$decoyvote9 = "decoyvote9v.php";

$nominees10 = "nominees10v.php";
$shortlisted10 = "shortlisted10v.php";
$decoyvote10 = "decoyvote10v.php";
}
else{

$nominees1 = "nominees1.php";
$shortlisted1 = "shortlisted1.php";
$decoyvote1 = "decoyvote1.php";

$nominees2 = "nominees2.php";
$shortlisted2 = "shortlisted2.php";
$decoyvote2 = "decoyvote2.php";

$nominees3 = "nominees3.php";
$shortlisted3 = "shortlisted3.php";
$decoyvote3 = "decoyvote3.php";

$nominees4 = "nominees4.php";
$shortlisted4 = "shortlisted4.php";
$decoyvote4 = "decoyvote4.php";

$nominees5 = "nominees5.php";
$shortlisted5 = "shortlisted5.php";
$decoyvote5 = "decoyvote5.php";

$nominees6 = "nominees6.php";
$shortlisted6 = "shortlisted6.php";
$decoyvote6 = "decoyvote6.php";

$nominees7 = "nominees7.php";
$shortlisted7 = "shortlisted7.php";
$decoyvote7 = "decoyvote7.php";

$nominees8 = "nominees8.php";
$shortlisted8 = "shortlisted8.php";
$decoyvote8 = "decoyvote8.php";

$nominees9 = "nominees9.php";
$shortlisted9 = "shortlisted9.php";
$decoyvote9 = "decoyvote9.php";

$nominees10 = "nominees10.php";
$shortlisted10 = "shortlisted10.php";
$decoyvote10 = "decoyvote10.php";
}

$_SESSION['div1'] = $div1;
$_SESSION['div2'] = $div2;
$_SESSION['div3'] = $div3;
$_SESSION['div4'] = $div4;
$_SESSION['div5'] = $div5;
$_SESSION['div6'] = $div6;
$_SESSION['div7'] = $div7;
$_SESSION['div8'] = $div8;
$_SESSION['div9'] = $div9;
$_SESSION['div10'] = $div10;
?>

<center>
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <h1><?php echo $div1; ?></h1>
    </div>
    <div class="flip-card-back">
      <h1><?php echo $div1; ?></h1> 
      <p><a class="content" id="ones" href="http://localhost/vp/div1/<?php echo "$nominees1";?>">See nominees</a></p> 
      <p><a class="content" id="ones" href="http://localhost/vp/div1/<?php echo "$shortlisted1";?>">See shortlisted</a></p>
      <p><a class="content" id="ones" href="http://localhost/vp/div1/<?php echo "$decoyvote1";?>">Vote</a></p>
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
      <p><a class="content" id="ones" href="http://localhost/vp/div2/<?php echo "$nominees2";?>">See nominees</a></p> 
      <p><a class="content" id="ones" href="http://localhost/vp/div2/<?php echo "$shortlisted2";?>">See shortlisted</a></p>
      <p><a class="content" id="ones" href="http://localhost/vp/div2/<?php echo "$decoyvote2";?>">Vote</a></p>
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
      <p><a class="content" id="ones" href="http://localhost/vp/div3/<?php echo "$nominees3";?>">See nominees</a></p> 
      <p><a class="content" id="ones" href="http://localhost/vp/div3/<?php echo "$shortlisted3";?>">See shortlisted</a></p>
      <p><a class="content" id="ones" href="http://localhost/vp/div3/<?php echo "$decoyvote3";?>">Vote</a></p>
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
      <p><a class="content" id="ones" href="http://localhost/vp/div4/<?php echo "$nominees4";?>">See nominees</a></p> 
      <p><a class="content" id="ones" href="http://localhost/vp/div4/<?php echo "$shortlisted4";?>">See shortlisted</a></p>
      <p><a class="content" id="ones" href="http://localhost/vp/div4/<?php echo "$decoyvote4";?>">Vote</a></p>
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
      <p><a class="content" id="ones" href="http://localhost/vp/div5/<?php echo "$nominees5";?>">See nominees</a></p> 
      <p><a class="content" id="ones" href="http://localhost/vp/div5/<?php echo "$shortlisted5";?>">See shortlisted</a></p>
      <p><a class="content" id="ones" href="http://localhost/vp/div5/<?php echo "$decoyvote5";?>">Vote</a></p>
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
      <p><a class="content" id="ones" href="http://localhost/vp/div6/<?php echo "$nominees6";?>">See nominees</a></p> 
      <p><a class="content" id="ones" href="http://localhost/vp/div6/<?php echo "$shortlisted6";?>">See shortlisted</a></p>
      <p><a class="content" id="ones" href="http://localhost/vp/div6/<?php echo "$decoyvote6";?>">Vote</a></p>
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
      <p><a class="content" id="ones" href="http://localhost/vp/div7/<?php echo "$nominees7";?>">See nominees</a></p> 
      <p><a class="content" id="ones" href="http://localhost/vp/div7/<?php echo "$shortlisted7";?>">See shortlisted</a></p>
      <p><a class="content" id="ones" href="http://localhost/vp/div7/<?php echo "$decoyvote7";?>">Vote</a></p>
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
      <p><a class="content" id="ones" href="http://localhost/vp/div8/<?php echo "$nominees8";?>">See nominees</a></p> 
      <p><a class="content" id="ones" href="http://localhost/vp/div8/<?php echo "$shortlisted8";?>">See shortlisted</a></p>
      <p><a class="content" id="ones" href="http://localhost/vp/div8/<?php echo "$decoyvote8";?>">Vote</a></p>
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
      <p><a class="content" id="ones" href="http://localhost/vp/div9/<?php echo "$nominees9";?>">See nominees</a></p> 
      <p><a class="content" id="ones" href="http://localhost/vp/div9/<?php echo "$shortlisted9";?>">See shortlisted</a></p>
      <p><a class="content" id="ones" href="http://localhost/vp/div9/<?php echo "$decoyvote9";?>">Vote</a></p>
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
      <p><a class="content" id="ones" href="http://localhost/vp/div10/<?php echo "$nominees10";?>">See nominees</a></p> 
      <p><a class="content" id="ones" href="http://localhost/vp/div10/<?php echo "$shortlisted10";?>">See shortlisted</a></p>
      <p><a class="content" id="ones" href="http://localhost/vp/div10/<?php echo "$decoyvote10";?>">Vote</a></p>
    </div>
  </div>
</div>
</center>
    <?php $conn->close(); ?>
</body>
</html>