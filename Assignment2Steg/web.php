
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
  <p>Steganography - Website </p>
  <ul>
  <li>Step 1: create a folder named "imagesuploaded" in any directory</li>
  <li>Step 2: cd your way into "imagesuploaded" directory from your terminal or shell</li>
  <li>Step 3:  Run 'php -S 127.0.0.1:8000' in your terminal or shell</li>
  <li>Step 4: open your local browser and type in "http://localhost:8000/web.php"</li>
  <li>Step 5: Hopefully Everything worked out.</li>
 </ul>
    <form action="uploads.php" method="post" enctype="multipart/form-data">
        Upload a File:
        <input type="file" name="the_file" id="fileToUpload">
        Provide Text to Hide:
        <input name="field1" type="text" />
        <input type="submit" name="submit" value="Save Data">
    </form>

  <h1 style="text-align:left">Links and Resources used :</h1>
  <ol>
    <li><a href="https://www.w3schools.com/html/html_examples.asp">Visit W3Schools.com!</a></li>
    <li><a href="https://www-users.cs.umn.edu/~hoppernj/tc-stego.pdf">Provably Secure Steganograph</a></li>
    <li><a href="https://null-byte.wonderhowto.com/how-to/steganography-hide-secret-data-inside-image-audio-file-seconds-0180936/">Steganography in seconds</a></li>
    <li><a href="https://null-byte.wonderhowto.com/how-to/introduction-steganography-its-uses-0155310/">Intro to Steganography</a></li>
    <li><a href="https://github.com/topics/lsb-steganography?o=desc&s=stars">Github Discussion on Steganography</a></li>
    <li><a href="https://www.mikedane.com/web-development/php/getting-input-from-users/">Input from users in php</a></li>
    <li><a href="https://thedebuggers.com/image-steganography-hiding-text-using-php/">php code guide for steganography</a></li>
    <li><a href="https://www.youtube.com/watch?v=Z9aePaXve6s">Handling Submit input for images on text</a></li>
    <li><a href="https://stackoverflow.com/questions/14998961/php-write-file-from-input-to-txt">Converting Text input to Text file</a></li>
    <li><a href="https://www.tutorialspoint.com/php/php_file_uploading.htm">php code for understanding file upload</a></li>
    <li><a href="https://stackoverflow.com/questions/23798732/upload-text-and-image-with-one-form-storing-path-and-text-in-database-with-php">some more code for understanding file upload</a></li>
    <li><a href="https://github.com/kzykhys/Steganography">Library for Steganography php</a></li>
  </ol>
</body>
</html>
