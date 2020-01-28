<?php
$hostName = 'localhost';
$userName= 'root';
$password = '';
$databaseName = 'cseb';
$conn= mysqli_connect($hostName,$userName,$password,$databaseName);
if($conn){
    echo "CONNECTION SUCESSFUL";
}   
else
{
    echo "CONNECTION FAILED"+
    mysqli_connect_error();
}
?>