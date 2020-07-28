<!DOCTYPE html>
<html lang="en">
<head>
  <title>RM - Royalty Music </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Insert Bootstrap -->
    <?php
    include("Includes/bootstrap.php");
    ?>

    <!-- Own styling/ scripts -->
    <link rel="stylesheet" href="Styles/standard.css">
    <link rel="stylesheet" href="Styles/carousel.css">
</head>
<body>

<?php
include("Includes/StandardNavbar.php");
include("Form/connect.php");


function make_query($link)
{
 $query = "SELECT * FROM products ORDER BY id ASC";
 $result = mysqli_query($link, $query);
 return $result;
}

function make_slide_indicators($link)
{
 $output = ''; 
 $count = 0;
 $result = make_query($link);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '
   <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'" class="active"></li>
   ';
  }
  else
  {
   $output .= '
   <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'"></li>
   ';
  }
  $count = $count + 1;
 }
 return $output;
}

function make_slides($link)
{
 $output = '';
 $count = 0;
 $result = make_query($link);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '<div class="item showProducts active">';
  }
  else
  {
   $output .= '<div class="item showProducts">';
  }
  $output .= '
   <img src="Admin/Products/phpFiles/Product/'.$row["productImage"].'" alt="'.$row["productName"].'" />
   <div class="carousel-caption">
    <h3>Buy our '.$row["productName"].' for '.$row["productPrice"].' and FREE shipping! </h3>
    <h5>'.$row["productDescription"].'</h5>
   </div>
  </div>
  ';
  $count = $count + 1;
 }
 return $output;
}

?>

<div id="dynamic_slide_show" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <?php echo make_slide_indicators($link); ?>
    </ol>

    <div class="carousel-inner">
     <?php echo make_slides($link); ?>
    </div>
    <a class="left carousel-control" href="#dynamic_slide_show" data-slide="prev">
     <span class="glyphicon glyphicon-chevron-left"></span>
     <span class="sr-only">Previous</span>
    </a>

    <a class="right carousel-control" href="#dynamic_slide_show" data-slide="next">
     <span class="glyphicon glyphicon-chevron-right"></span>
     <span class="sr-only">Next</span>
    </a>

   </div>

  
<div class="container text-center">    
  <h3>What We Do</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Current Project</p>
    </div>
    <div class="col-sm-4"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Project 2</p>    
    </div>
    <div class="col-sm-4">
      <div class="well">
       <p>Some text..</p>
      </div>
      <div class="well">
       <p>Some text..</p>
      </div>
    </div>
  </div>
</div><br>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>