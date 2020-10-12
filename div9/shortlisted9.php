<!DOCTYPE html>
<html lang="en">
<head>
<title>Shortlisted</title>
<link rel="stylesheet" href="../style1.css"/>
<link rel="stylesheet" href="../link.css"/>
<link rel="stylesheet" href="../loginstyled.css"/>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

<?php
include_once '../head.php';
echo "&nbsp";
echo "<h1><b>" . $_SESSION['div9'] . "</b></h1>";
$conn->close();
?>
<h3><p color='red'>No shortlisted candidate yet!</p></h3>

</body>
</html>