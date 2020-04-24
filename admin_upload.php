<?php

require "/vendor/autoload.php";
use Google\Cloud\Storage\StorageClient;
if($_POST){
    upload_object("resources-rmit-2020-cc-a2",$_POST["filename"],$_POST["file"]);
}
/**
 * Upload a file.
 *
 * @param string $bucketName the name of your Google Cloud bucket.
 * @param string $objectName the name of the object.
 * @param string $source the path to the file to upload.
 *
 * @return Psr\Http\Message\StreamInterface
 */
function upload_object($bucketName, $objectName, $source)
{
    $storage = new StorageClient();
    $file = fopen($source, 'r');
    $bucket = $storage->bucket($bucketName);
    $object = $bucket->upload($file, [
        'name' => $objectName
    ]);
    printf('Uploaded %s to gs://%s/%s' . PHP_EOL, basename($source), $bucketName, $objectName);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP uploads</h1>
    <form action="" method="post">
    <input type="file" name="file"><br>
    <input type="text" name="filename" 
    placeholder="Example: filename.txt"><br>
    <input type="submit" value="Upload">
    </form>
<br>
<h1>JavaScript uploads</h1>
<form action="gs://resources-rmit-2020-cc-a2" 
      method="post" enctype="multipart/form-data">
  <input name="key" type="text" value="objectName.txt" /><br/>
  <input name="file" type="file" /><br/>
  <input type="submit" value="Upload!" />
</form>


</body>
</html>