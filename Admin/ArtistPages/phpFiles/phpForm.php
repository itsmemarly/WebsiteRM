<?php

include("../../../Form/connect.php");

    //Sending form data to sql db.

mysqli_query($link,"INSERT INTO demos (demoLink, demoArtist)
VALUES ('$_POST[name]', '$_POST[yt]')");

header('Location: ./../artistLists.php');
exit; // avoid further execution of code, if any resides below that
    
?>