<!DOCTYPE html>
<html lang="en">
<head>
  <title> Send demo to RM </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Insert Bootstrap -->
    <?php
     include("./../../Form/connect.php");
    include("../../Includes/bootstrap.php");
    // include("./phpFiles/PDFForm.php");

    ?>

    <!-- Own styling/ scripts -->
    <link rel="stylesheet" href="../../Styles/standard.css">
</head>
<body>

<?php
include("../../Includes/ArtistNavbar.php");
?>


<div class="container">
  <h2 style="text-align: center;">Demo</h2>
  <form class="form-horizontal" action="./phpFiles/phpForm.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
      <label class="control-label col-sm-2" for="name">Artist name:</label>
      <div class="col-sm-10">
        <input type="name" class="form-control" id="name" placeholder="Enter name" name="name" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="yt">Video link:</label>
      <p>Video must be private, only visable for RM!</p>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="yt" placeholder="Enter a privated youtube link" name="yt" required>
      </div>
    </div>
   
        <!-- <textarea type="text" class="form-control" id="image" placeholder="Enter slide image" name="image" required>
        </textarea>  -->
    </div>
    </div>
  
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" class="btn btn-default">Send demo to RM Staff</button>
      </div>
    </div>
  </form>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>