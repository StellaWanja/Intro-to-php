<?php
//in development, we often need to store data collected from users of our systems
//MySQL is the database system used for both big and small businesses and it uses the SQL (Structured Query Language) to interact with data
//A DB is made up of related tables
//Before using the database, you have to connect to it by providing the following data:
//1. hostname
//2. username
//3. password
//4. database name
//PHP has helper functions that will make database interactions easy

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
////create a database
//$sql = "CREATE DATABASE demo1";//request/query to the db system
////make the request/execute: mysqli_query: return boolean
//if (mysqli_query($connection, $sql)){
//    echo "Database created successfully<br>";
//}else{
//    echo "ERROR: could not execute $sql".mysqli_error($connection);
//}

//inserting data into the table
$sql = "INSERT INTO `users`(`id`, `username`, `firstname`, `lastname`, `email`, `password`, `gender`) VALUES (NULL,'Jonte','John','Maina','john@gmail.com','pass1234','Male')";

if (mysqli_query($connection, $sql)){
    echo "Data inserted successfully<br>";
}else{
    echo "Data not inserted".mysqli_error($connection);
}

?>