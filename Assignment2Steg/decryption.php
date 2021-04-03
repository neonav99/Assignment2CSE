<?php
$currentDirectory = getcwd();
$uploadDirectory = "/imagesuploaded/";
$uploadPath = $currentDirectory . $uploadDirectory;

require __DIR__ . '/vendor/autoload.php';

$processor = new KzykHys\Steganography\Processor();
$message = $processor->decode($uploadPath.'encrypted_image.png');

echo "<h2> Here is the decrypted message : ".$message."</h2>"; // "Message to hide"
echo "Click the button if you want to start a new encryption. This will remove files from the imagesuploaded folder only.\t\t";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="remove.php" method="post" enctype="multipart/form-data">
        <input type="submit" name="submit" value="Remove and Start Over!">
    </form>
</body>
</html>
