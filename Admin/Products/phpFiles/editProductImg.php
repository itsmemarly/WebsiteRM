<?php

    $currentDirectory = getcwd();
    $uploadDirectory = "./Product/";

    $errors = []; // Store errors here

    $fileExtensionsAllowed = ['jpeg','jpg','png']; // These will be the only file extensions allowed 

    $fileName = $_FILES['image']['name'];
    $fileSize = $_FILES['image']['size'];
    $fileTmpName  = $_FILES['image']['tmp_name'];
    $fileType = $_FILES['image']['type'];
    $fileExtension = strtolower(end(explode('.',$fileName)));

    $uploadPath = $currentDirectory . $uploadDirectory . basename($fileName); 

    if (isset($_POST['submit'])) {

      if (! in_array($fileExtension,$fileExtensionsAllowed)) {
        $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
      }

      if ($fileSize > 4000000) {
        $errors[] = "File exceeds maximum size (4MB)";
      }

      if (empty($errors)) {
        $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

        if ($didUpload) {
          echo "The file " . basename($fileName) . " has been uploaded";
        } else {
          echo "An error occurred. Please contact the administrator.";
        }
      } else {
        foreach ($errors as $error) {
          echo $error . "These are the errors" . "\n";
        }
      }

    }
    // $sql ="UPDATE `products` SET productName='$postname', productDescription='$postdescription', productPrice = '$postprice', productImage=' $uploadPath' WHERE id=$id";
    ?>
        <?php
    //Sending form data to sql db.

$sql = "UPDATE `products` SET (productName, productDescription, productPrice, productImage)
VALUES ('$_POST[name]', '$_POST[description]', '$_POST[price]',' $uploadPath'";

header('Location: ../../dashboard.php');
exit; 
    
?>