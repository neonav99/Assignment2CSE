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
        echo "$ret bytes written to file";
    }
}
else {
   die('no post data to process');
}
?>
