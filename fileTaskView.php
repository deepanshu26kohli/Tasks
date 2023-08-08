<?php
session_start();




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if(isset($_SESSION["filename"])){

    foreach($_SESSION["filename"] as $file ){
    ?>

    <img src="<?php echo "Upload/" . $file;   ?>" alt="" width=100> 


<?php 
}

 } ?>
</body>
</html>