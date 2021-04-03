<?php
    $currentDirectory = getcwd();
    $uploadDirectory = "/imagesuploaded/";

    $errors = []; // Store errors here

    $fileExtensionsAllowed = ['jpeg','jpg','png']; // These will be the only file extensions allowed

    $fileName = $_FILES['the_file']['name'];
    $fileSize = $_FILES['the_file']['size'];
    $fileTmpName  = $_FILES['the_file']['tmp_name'];
    $fileType = $_FILES['the_file']['type'];
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
          echo "The file " . basename($fileName) . " has been uploaded"."\t\t\r\n";
        } else {
          echo "An error occurred. Please contact the administrator."."\r\n";
        }
      } else {
        foreach ($errors as $error) {
          echo $error . "These are the errors" . "\n";
        }
      }

    }
?>


<?php
$currentDirectory = getcwd();
$uploadDirectory = "/imagesuploaded/";

if(isset($_POST['field1'])) {
    $data = $_POST['field1'] . "\r\n";
    $filename = "mydata.txt";
    $uploadPath = $currentDirectory . $uploadDirectory;
    $ret = file_put_contents($uploadPath."mydata.txt", $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "\n".$ret."bytes written to file"."\t\t\r\n";
    }
}
else {
   die('no post data to process');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
  <p>Click Button to Encrypt Text file into image file.</p>
    <form action="stegalgo.php" method="get">
      <input type="submit" value="Encrypt!">
    </form>
</body>
</html>
