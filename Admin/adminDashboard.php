
<?php 
session_start();
echo $_SESSION['role'];

if ($_SESSION['role'] !== 'admin')  {
  header ("location: dashboard.php");
  exit;
} else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title> Dashboard </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Insert Bootstrap -->
   <?php
    include("../Includes/bootstrap.php");
    include("../Form/connect.php");
    ?>
    
    <!-- Own styling/ scripts -->
    <link rel="stylesheet" href="../Styles/standard.css">
</head>
<body>

<?php
include("../Includes/AdminNavbar.php");
?>


  
<div class="container text-center">    
  <h3>These are our amazing artists:</h3><br>
  <div class="row">
  
<?php $results = mysqli_query($link, "SELECT * FROM artists"); ?>
<?php while ($rows = mysqli_fetch_array($results)) { 

$image = $rows['artistImage'];
$name = $rows['artistName'];
$channel = $rows['artistChannel'];


?>

   <div class="col-sm-4">
   <div class="imgframe" >
      <img src="Artists/phpFiles/Artist/<?php echo $image; ?>" alt="<?php echo $name; ?>" id="imgcover" height="140" width="140">
      </div>

     <p><?php echo $name; ?></p>
     <a href="<?php echo $channel; ?>" target="_blank" rel="noopener noreferrer">View Channel</a>
   
   </div>
<?php
    }
?>
  </div>
</div><br>

<footer class="container-fluid text-center">
  <p>RM - Royalty Music</p>
</footer>

</body>
</html>

<?php
}
?>