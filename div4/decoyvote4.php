<!DOCTYPE html>
<html lang="en -US">
<head>
<title>Vote</title>
<link rel="stylesheet" href="../style1.css"/>
<link rel="stylesheet" href="../link.css"/>
<link rel="stylesheet" href="../loginstyled.css"/>
<meta  mame="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
<body>
<?php
include_once '../head.php';
echo "&nbsp";
echo "<h1><b>" . $_SESSION['div4'] . "</b></h1>";
$conn->close();
?>
    <h3><p color='red'>Voting hasn't commenced yet!</p></h3>

    
</body>
</html>