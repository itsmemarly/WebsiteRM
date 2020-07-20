<?php
include("./../../Form/connect.php");

// Initialize the session
session_start();


 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../AdminCss/table.css">
  <link rel="stylesheet" href="../../Styles/standard.css">
  <?php 
  include("../../Includes/bootstrap.php");
  ?>
</head>
<body>
<?php
include("../../Includes/AdminNewSlide.php");
?>

<div class="container">
<?php 
include("./phpFiles/SlideLister.php");
?>
</div>

</body>
</html>


