<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    header('location: ../max.php');
}
include_once 'head.php';

echo "<br><br><br><br><br>";
echo "...";
echo "</br></br></br></br></br>";
echo "<big><big><big><big><b>MAXIMUM NOMINATION REACHED FOR TODAY!</b></big></big></big></big>";
?>