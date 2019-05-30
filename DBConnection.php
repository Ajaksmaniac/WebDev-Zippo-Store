<?php

    //Izmeniti pri promeni baze
    $DatabaseServerName = "localhost";
    $DatabaseUserName = "root";
    $DatabasePassword = "";
    $DatabaseName ="zippors";
    $DatabaseConnection = mysqli_connect($DatabaseServerName, $DatabaseUserName, $DatabasePassword, $DatabaseName);
    
    if(!$DatabaseConnection){
        echo "Connection failed";
        
    }

?>