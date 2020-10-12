<!DOCTYPE html>
<html lang="en -US">
<head>
<title>Form</title>
<link rel="stylesheet" href="../style1.css"/>
<link rel="stylesheet" href="../link.css"/>
<link rel="stylesheet" href="../loginstyled.css"/>
<meta  mame="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
<body>
<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    header('location: index.php');
}
include_once '../head.php';
echo "&nbsp";
echo "<h1><b>" . $_SESSION['div7'] . "</b></h1>";
?>

    <h3><p color='red'>Please, fill and submit the form below to enable you nominate your desired candidate.</p></h3>

    <div class="form_div">
        <form id="login" action="addnominee7.php" method="POST">
            <fieldset>
                <legend><h1>Your Info</h1></legend>

                <big><b>Name:<b></big> <span class="invalid">*</span>
                <input class="input" type="text" id="yname" name="yname" placeholder="Your full name..." required/>
                <p></p>

                <big><b>Email:<b></big> <span class="invalid">*</span>
                <input class="input" type="email" id="email1" name="email1" placeholder="Your email address..." required/>
                <p></p>

                <label for="phone"><big><b>Phone number:<b></big> <span class="invalid">*</span></label>
                <input class="input" type="tel" id="phone" name="phone" pattern="[0-9]{11}" placeholder="Your phone number..." required/>

                <input class="submit" type="submit" value="Submit" name="submit1">

            </fieldset>
        </form>
    </div>

</body>
</html>