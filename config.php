<?php
//CONNECTING TO THE DATABASE
//credentials for connecting to a DB
$hostname = 'localhost';
$username = 'root';
$password = '';
$databasename = 'demo1';

//To connect to a db, use the php function called mysqli_connect()
//mysqli_connect function returns a boolean datatype
$connection = mysqli_connect($hostname,$username,$password,$databasename);
//check connection
if ($connection == false){
    echo 'Connection not successful <br>';
//    stop connection if unsuccessful
    die('ERROR: '.mysqli_connect_error());
//    echo mysqli_connect_error().'<br>';
}
?>