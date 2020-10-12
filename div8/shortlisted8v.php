<!DOCTYPE html>
<html lang="en">
<head>
<title>Shortlisted</title>
<link rel="stylesheet" href="../style1.css"/>
<link rel="stylesheet" href="../link.css"/>
<link rel="stylesheet" href="../table.css"/>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

<?php
include_once '../head.php';
echo "&nbsp";
echo "<h1><b>" . $_SESSION['div8'] . "</b></h1>";
echo "<h2><u>Shortlisted Nominees</u></h2>";

require_once '../configure.php';

$sqls = "SELECT * FROM shortlisted_c8 ORDER BY full_name";

if($result = $conn->query($sqls)){
    if($result->num_rows > 0){?>
        <table class="css-serial" id="myTable">
        <thead>
        <tr>
        <th> <big>s/n</big> </th>
        <th> <big>Name</big> </th>
        <th> <big>Facebook</big> </th>
        <th> <big>Web Link</big> </th>
        <th> <big>Email</big> </th>
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
          </tr>
        </tbody>
        <?php } ?>
    </table>

        <?php
    }else{
        echo "No shortlisted candidates yet";
    }
}else{
    echo "No shortlisted candidtates yet.";
}

$conn->close();

?>
</body>
</html>