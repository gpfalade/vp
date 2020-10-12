<?php
$conn = new mysqli("localhost", "root", "", "vote");

if($conn === false){
    die("Error: Could not connect");
}