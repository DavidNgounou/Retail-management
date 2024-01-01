<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'gest_stock';
    $conn = new mysqli($hostname,$username,$password,$dbname);

    if(!$conn){
        die("Sorry!!! a problem occured");
    }else{
        echo "Connection was a success";

        
    }
?>