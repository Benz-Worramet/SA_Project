<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sa_project";

$conn = new mysqli($servername,$username,$password);
$conn->set_charset("utf8");
if($conn->connect_error){
    die($conn->connect_error."");
}
else
{
    
}
if(!$conn->select_db($dbname)){
    die($conn->connect_error."");
}
else{
  
}


