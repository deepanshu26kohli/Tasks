<?php
    echo "your Colors are: ";
    foreach ( $_POST as $fields => $field){
        if ($fields=="name"){
           echo "and your name is " . $_POST[$fields] ;
        }else{
            echo   "<code><span style='color:</code>". $_POST[$fields] ."<code>;'></code>" . $_POST[$fields] .  "<code>,</span> </code>" ;
        }
      
    }
?>