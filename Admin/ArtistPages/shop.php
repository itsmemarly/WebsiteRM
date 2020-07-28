
<!DOCTYPE html>
<html lang="en">
<head>
  <title> RM Merch Shop</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Insert Bootstrap -->
    <?php
     include("./../../Form/connect.php");
    include("./../../Includes/bootstrap.php");
    // include("./phpFiles/PDFForm.php");

    ?>
    <link rel="stylesheet" href="./../../Styles/standard.css">


</head>
<body>
<?php
include("../../Includes/ArtistNavbar.php");
?>



  
<?php $results = mysqli_query($link, "SELECT * FROM products"); ?>
<?php $rows = mysqli_fetch_array($results); 

$image = $rows['productImage'];
$name = $rows['productName'];
$price = $rows['productPrice'];
$description = $rows['productDescription'];


?>
<div class="container text-left">    
  <h3>Royalty Music Merch Shop:</h3><br>
  <div class="alert alert-info">
    <strong>Information:</strong> Thank you for showing interest in our products. We will contact you as fast as possible after placing your order for payment.
  </div>
  <div class="alert alert-warning">
    <strong>Disclaimer:</strong> Sadly paypal asks fee from us so if you pay with paypal the price will be a little higher! For example one RM Bracelet would cost 0,50 EUR extra.
  </div>

    <!-- Item 1 -->
    <div class="row" style="float: center;">
    <div class="col-sm-4">

    <div class="imgframe" style="margin-top: 10px; text-align: center;" >
      <img src="../Products/phpFiles/Product/corona.png" alt="bandje" id="imgcover" height="200" width="200">
      </div><br>
      <div class="shopping">
      <h4 style="text-align: left;"><b>Product:</b></h4>
     <h5 style="text-align: left;">RM Silicone Bracelet</h5>
    <h4 style="text-align: left;"><b>Price:</b></h4>
    <h5 style="text-align: left;"><i> 3,50 EUR</i></h5>
     <!-- <p><b><i>Sadly paypal asks fee from us so if you pay with paypal the price will be a little higher!</i></b></p> -->
     <h4 style="text-align: left;"><b>Description:</b></h4>
     <h5 style="text-align: left;">Silicone Bracelet with RM Logo on it.</h5>
    

 
</div>

    </div>
   

<br>


    </div>
</div>
<div class="container">
  <h2 style="text-align: center;">Your RM Merch order</h2>
  <form class="form-horizontal" action="./phpFiles/orders.php" method="post">

  <!-- Amount -->

  <div class="form-group">
      <label class="control-label col-sm-2" for="amount">How many pieces would you like to order?</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="amount" placeholder="Please enter the amount" name="amount" required>
      </div>
    </div>

    <!-- First name -->

    <div class="form-group">
      <label class="control-label col-sm-2" for="firstName">What is your first name?</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="firstName" placeholder="Please enter your first name" name="firstName" required>
      </div>
    </div>

    <!-- Last name -->

    <div class="form-group">
      <label class="control-label col-sm-2" for="lastName">What is your last name?</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="lastName" placeholder="Please enter your last name" name="lastName" required>
      </div>
    </div>


    <!-- Address -->

    <div class="form-group">
    <label class="control-label col-sm-2" for="street">What is your street name?</label>
      <div class="col-sm-10">
  <input type="street" 
         class="form-control" 
         id="autocomplete" 
         placeholder="Street"
         name="street" required>
      </div>
    </div>

    <div class="form-group">
    <label class="control-label col-sm-2" for="city">What city do you live in?</label>
      <div class="col-sm-10">
  <input type="city" 
         class="form-control" 
         id="inputCity" 
         placeholder="City"
         name="city" required>
      </div>
    </div>

   <div class="form-group">
    <label class="control-label col-sm-2" for="state">What state do you live in?</label>
      <div class="col-sm-10">
  <input type="state" 
         class="form-control" 
         id="inputState" 
         placeholder="State"
         name="state">
      </div>
   </div>

   <div class="form-group">
    <label class="control-label col-sm-2" for="zip">What is your zip code?</label>
      <div class="col-sm-10">
  <input type="zip" 
         class="form-control" 
         id="inputZip" 
         placeholder="Zip"
         name="zip" required>
      </div>
   </div>
  
   <div class="form-group">
    <label class="control-label col-sm-2" for="street">What country do you live in?</label>
      <div class="col-sm-10">
  <input type="country" 
         class="form-control" 
         id="inputCounty" 
         placeholder="Country"
         name="country" required>
    </div>
    </div>
   
    <!-- Email -->

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">What is your email?</label>
          <div class="col-sm-10">
        <input type="email" class="form-control" id="lastName" placeholder="Please enter your email" name="email" required>
      </div>
    </div>
   
        <!-- <textarea type="text" class="form-control" id="image" placeholder="Enter slide image" name="image" required>
        </textarea>  -->
    </div>
    </div>
    
  
    <div class="form-group text-center">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" class="btn btn-default">Send order to RM Staff</button>
      </div>
    </div>
  </form>
</div> <br>




    <footer>

    </footer>
</body>
</html>