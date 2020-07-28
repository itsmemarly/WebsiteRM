<?php

include("../../../Form/connect.php");

    //Sending form data to sql db.
    $times = date("Y-m-d H:i:s");

mysqli_query($link,"INSERT INTO `orders` (amount, firstName, lastName, street, city, state, zip, country, email, timestamp)
VALUES ('$_POST[amount]', '$_POST[firstName]', '$_POST[lastName]', '$_POST[street]', '$_POST[city]', '$_POST[state]',
 '$_POST[zip]', '$_POST[country]', '$_POST[email]', '$times')");



header('Location: ./../shop.php');


exit; // avoid further execution of code, if any resides below that
    
?>