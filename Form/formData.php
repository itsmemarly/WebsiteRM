<?php

//Connecting to sql db.
$connect = mysqli_connect("localhost","root","","rm");
//Sending form data to sql db.

mysqli_query($connect,"INSERT INTO form (name, email, message)
VALUES ('$_POST[name]', '$_POST[email]', '$_POST[message]')");

header('Location: ../index.php');
exit; // avoid further execution of code, if any resides below that
?>