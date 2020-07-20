<?php
  include("../../../Form/connect.php");


    $currentDirectory = getcwd();
    $uploadDirectory = "./phpFiles/Slides/";

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

    ?>

    <?php
    //Sending form data to sql db.

mysqli_query($link,"INSERT INTO slides (slideName, slideDescription, slideImage)
VALUES ('$_POST[name]', '$_POST[description]','". $fileName ."')");

header('Location: ./../sliderList.php');
exit; // avoid further execution of code, if any resides below that
    
?>