<?php 
$hostname = "localhost"; 
$username = "root"; 
$password = "root"; 
$database = "petvantage_db"; 
$conn = new mysqli($hostname, $username, $password,$database); // Check connection 

    if($conn){
       // print("<br>"."Databse connected");
    }
    else{
        print("Not connected");
    }
?>
