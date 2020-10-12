<?php
require_once '../configure.php';
include_once '../head.php';
echo "&nbsp";
echo "<h1><b>" . $_SESSION['div9'] . "</b></h1>";
echo "<h2><u>Nominees</u></h2>";

$sqls = "SELECT * FROM nominees_c9 ORDER BY full_name";

if($result = $conn->query($sqls)){
    if($result->num_rows > 0){?>
        <table class="css-serial">
        <thead>
        <tr>
        <th> <big>s/n</big> </th>
        <th> <big>Name</big> </th>
        <th> <big>Facebook</big> </th>
        <th> <big>Web link</big> </th>
        <th> <big>Email</big> </th>
        </tr>
        </thead>

        <?php
        $counter = 0;
        while($row = $result->fetch_array()){ ?>
        <tbody>
        <tr>
            <td><?php echo ++$counter; ?> </td>
            <td><?php echo "<b>" . trim($row[1]) ?? '' . "</br>"; ?> </td>
            <td><?php echo trim($row[2]) ?? ''; ?> </td>
            <td><a href="<?php echo trim($row[3]) ?? ''; ?>" target="_blank"><?php echo trim($row[3]) ?? ''; ?></a></td>
            <td><?php echo trim($row[4]) ?? ''; ?> </td>
        </tr>
        </tbody>
        <?php } ?>
        </table>
        <?php
    }else{
        echo "No nominees yet";
    }
}else{
    echo "No nominees yet.";
}

$conn->close();

?>

<!DOCTYPE html>
<html lang="en -US">
<head>
<title>Nominees</title>
<link rel="stylesheet" href="../style1.css"/>
<link rel="stylesheet" href="../link.css"/>
<link rel="stylesheet" href="../table.css"/>
<meta  mame="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
</br>
<br>
<body>
</html>