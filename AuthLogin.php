
<?php

session_start();
    




if(isset($_POST["submit"]) && $_POST["submit"]=="Login"){
    if ($_POST["user"] == "deepanshu" && $_POST["password"] == "123" ){
        $_SESSION["user"] = "deepanshu"; 
        $_SESSION["successLogin"] = true;
        header('Location: /Tasks/Tasks/dashboard.php');
    }else{
        $_SESSION["successLogin"] = false;
        header('Location: /Tasks/Tasks/Login.php'); 
    }
}


?>