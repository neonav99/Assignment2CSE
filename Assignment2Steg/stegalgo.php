<?php

require __DIR__ . '/vendor/autoload.php';
$currentDirectory = getcwd();
$uploadDirectory = "/imagesuploaded/";
$uploadPath = $currentDirectory . $uploadDirectory;




$line = '';
$file = $uploadPath.'mydata.txt';
if($f = fopen($file, 'r')){
  $line = fgets($f); // read until first newline
  fclose($f);
}
echo $line;




$a = scandir($uploadPath);
print_r($a);



$processor = new KzykHys\Steganography\Processor();
$image = $processor->encode($uploadPath.$a[3],$line);
$image->write($uploadPath.'encrypted_image.png');





echo "Encrypted Image has been stored in your local device in imagesuploaded folder as 'encrypted_image.png'\n";
echo "Do you want to see decryption?\n";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="decryption.php" method="post" enctype="multipart/form-data">
        <input type="submit" name="submit" value="Decrypt!">
    </form>
</body>
</html>
