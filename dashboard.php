<?php
session_start();
// print_r($_SESSION);
if(isset($_SESSION["successLogin"]) && $_SESSION["successLogin"]){
    echo "welcome to Dashboard " . $_SESSION["user"];
} 
else{
    header('Location: /Tasks/Tasks/Login.php');
}

?>