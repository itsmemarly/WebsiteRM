<!DOCTYPE html>
<html lang="en">
<head>
  <title> Contact The RM Team </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Insert Bootstrap -->
    <?php
    include("Includes/bootstrap.php");
    ?>

    <!-- Own styling/ scripts -->
    <link rel="stylesheet" href="Styles/standard.css">
</head>
<body>

<?php
include("Includes/StandardNavbar.php");
?>


<div class="container">
  <h2 style="text-align: center;">Contact form</h2>
  <form class="form-horizontal" action="Form/formData.php" method="post">
  <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="name" class="form-control" id="name" placeholder="Enter name" name="name" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="message">Message:</label>
      <div class="col-sm-10">          
        <textarea type="text" class="form-control" id="message" placeholder="Write down what you want to share with us" name="message" required>
        </textarea> 
    </div>
    </div>
  
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit your contact form</button>
      </div>
    </div>
  </form>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>