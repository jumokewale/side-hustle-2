<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<form action="basic_form.php" method="post">
    Full Name: <input type="text" name="full_name" placeholder="Your Full Name"><br>
    Email:     <input type="email" name="e_mail" placeholder="Your E-Mail"><br>
    Address:   <input type="text" name="address" placeholder="Your Address"><br>
    Gender:    <input type="radio" name="gender" value="male">Male
               <input type="radio" name="gender" value="female">Female
               <input type="radio" name="gender" value="other">Other<br>
    <input type="submit">
</form>

</html>

<?php


if (isset($_POST["full_name"]) && isset($_POST["e_mail"]) && isset($_POST["address"])) {
    echo "Full name: " . $_POST["full_name"];
    echo "<br>";
    echo "E-mail: " . $_POST["e_mail"];
    echo "<br>";
    echo "Address: " . $_POST["address"];
    echo "<br>";
    echo "Gender: " . $_POST["gender"];
    }




?>