<?php

include("./../../Form/connect.php");

//getting id from url
$id = isset($_GET['id']) ? $_GET['id'] : '';



//selecting data associated with this particular id
$result = mysqli_query($link, "SELECT * FROM `slides` WHERE id='$id'");
 
while($row = mysqli_fetch_array($result))
{
    $name = $row['slideName'];
  
    $description = $row['slideDescription'];

    $image = $row['slideImage'];

}
?>

<?php
if(isset($_POST['update']))
{  
//     //getting id from url
$id = $_POST['id'];

$postname=$_POST['name'];

    $postdescription=$_POST['description'];

    $postimage=$_POST['image'];

    
    // checking empty fields
    if(empty($postname) || empty($postdescription) || empty($postimage))
     {            
        if(empty($postname)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        if(empty($postdescription)) {
            echo "<font color='red'>Description field is empty.</font><br/>";
        }
        if(empty($postimage)) {
            echo "<font color='red'>Image field is empty.</font><br/>";
        }
         
    } else {    
        //updating the table
        $sql ="UPDATE `slides` SET slideName='$postname', slideDescription='$postdescription', slideImage='$postimage' WHERE id=$id";
             echo $sql;
echo $id;

        $retval = mysqli_query($link, $sql);
            if(!$retval )
            {
              die('Could not update data: ' . mysqli_error($link));
            }
            echo "Updated data successfully\n";

            }
        //redirectig to the display page. In our case, it is index.php
        header("Location: ./sliderList.php");
    }
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title> Contact The RM Team </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Insert Bootstrap -->
    <?php
    
    include("../../Includes/bootstrap.php");
    // include("./phpFiles/PDFForm.php");

    ?>

    <!-- Own styling/ scripts -->
    <link rel="stylesheet" href="../../Styles/standard.css">
</head>
<body>

<?php
include("../../../Includes/AdminNewSlide.php");
?>


<div class="container">
  <h2 style="text-align: center;">Edit slide</h2>
  <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
  <div class="form-group">
      <label class="control-label col-sm-2" for="name">Slide name:</label>
      <div class="col-sm-10">
        <input type="name" class="form-control" id="name" placeholder="Enter name" name="name" value="<?php echo $name ?>" required >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="description">Slide description:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="description" placeholder="Enter slide description" name="description" value="<?php echo $description ?>" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="image">Slide Image:</label>
      <div class="col-sm-10">          
      <input type="file" class="form-control" name="image" id="image" value="<?php echo $image ?>">
        <!-- <textarea type="text" class="form-control" id="image" placeholder="Enter slide image" name="image" required>
        </textarea>  -->
    </div>
    </div>
  
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="update" class="btn btn-default">Edit Slide</button>
      </div>
    </div>
  </form>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>