<?php
$currentDirectory = getcwd();
$uploadDirectory = "/imagesuploaded/";
$uploadPath = $currentDirectory . $uploadDirectory;
$files = glob($uploadPath.'/*'); // get all file names
foreach($files as $file){ // iterate files
  if(is_file($file)) {
    unlink($file); // delete file
  }
}
echo "All Files removed from the imagesuploaded directory. Click This button to start over.\t\t"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="web.php" method="post" enctype="multipart/form-data">
        <input type="submit" name="submit" value="Start Over">
    </form>
</body>
</html>
