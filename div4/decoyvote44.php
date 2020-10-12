<?php
session_start();
include_once '../configure.php';
if(isset($_POST['submit'])){
    $vote = $_POST['vote'] ?? '';

    $sqlc = "CREATE TABLE IF NOT EXISTS vote_c4 (nominee VARCHAR(90) NOT NULL)";

        $conn->query($sqlc);

        $sqln2 = "INSERT INTO vote_c4(nominee) VALUES ('$vote')";
$conn->query($sqln2);
}
    $conn->close();
header('location: ../index.php');
exit();
    
?>