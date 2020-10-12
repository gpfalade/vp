<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    header('location: index.php');
}

include_once '../head.php';
echo "&nbsp";
echo "<h1><b>" . $_SESSION['div7'] . "</b></h1>";
echo "<h2><u>Nominees</u></h2>";

require_once '../configure.php';

$sqls = "SELECT * FROM nominees_c7 ORDER BY full_name";

if($result = $conn->query($sqls)){
    if($result->num_rows > 0){?>
        <table class="css-serial">
        <thead>
        <tr>
        <th> <big>s/n</big> </th>
        <th> <big>Name</big> </th>
        <th> <big>Facebook</big> </th>
        <th> <big>Web Link</big> </th>
        <th> <big>Email</big> </th>
        <th> <big>Nominate</big> </th>
        </tr>
        </thead>

        <?php
        $counter = 0;
        while($row = $result->fetch_array()){ ?>
        <tbody>
        <tr>
            <td><?php echo ++$counter; ?> </td>
            <td><?php echo "<big><b>" . trim($row[1]) ?? '' . "</br></big>"; ?> </td>
            <td><?php echo trim($row[2]) ?? ''; ?> </td>
            <td><a href="<?php echo trim($row[3]) ?? ''; ?>" target="_blank"><?php echo trim($row[3]) ?? ''; ?></a></td>
            <td><?php echo trim($row[4]) ?? ''; ?> </td>
            <td><a href="nominate7.php?nominee=<?php echo $row[1];?>" class="btn btn-success">Nominate</a></td>
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
<a href="http://localhost/vp/div7/decoyaddnominee7.php" onClick="return confirm('This means you could not find your desired nominee on the list?')" class="class" id="add">Add new nominee</a>
</br>
<br>
</body>
</html>