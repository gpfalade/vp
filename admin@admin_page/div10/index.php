<?php
if(!session_id()) session_start();
if(!$_SESSION['logon']){
    header('location: ../index.php');
    die();
}else{
  header('location: ../categories.php');
  die();
}
?>
