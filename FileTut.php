<?php
  
  if(isset($_FILES['image'])){
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
    $time = time();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    move_uploaded_file($file_tmp,"Upload/". $time . $file_name );
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
       <form action="" method = "post" enctype="multipart/form-data">
        <input type="file" name="image" />
        <input name="submit" type="submit"/>
       </form>
</body>
</html>
