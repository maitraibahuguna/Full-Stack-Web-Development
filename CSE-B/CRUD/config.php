<?php
$hostName = 'localhost';
$userName= 'root';
$password = '';
$databaseName = 'cseb';
$conn= mysqli_connect($hostName,$userName,$password,$databaseName);
if($conn){
    
}   
else
{
    echo "CONNECTION FAILED"+
    mysqli_connect_error();
}
?>