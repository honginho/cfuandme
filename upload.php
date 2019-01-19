<?php
  $path = "upload";
  $filename = $_FILES["file"]["name"];
  if (!is_dir($path)) mkdir($path);
  move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $filename);

//     $uploadedFile = '';
//     $fileName = time().'_'.$_FILES['file']['name'];
//     $sourcePath = $_FILES['file']['tmp_name'];
//     $targetPath = "upload/".$fileName;
//     if(move_uploaded_file($sourcePath,$targetPath)){
//         $uploadedFile = $fileName;
//     }
// $sourcePath = $_FILES['file']['tmp_name'];       // Storing source path of the file in a variable
// $targetPath = "upload/".$_FILES['file']['name']; // Target path where file is to be stored
// move_uploaded_file($sourcePath,$targetPath) ;    // Moving Uploaded file
?>