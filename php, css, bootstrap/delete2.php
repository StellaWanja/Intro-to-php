<?php

require 'config1.php';

if (isset($_GET['id'])){
    $id = $_GET['id'];
}

$sql = "DELETE FROM `product` WHERE id = '$id'";

//delete
if(mysqli_query($connection, $sql)){
    header("location: index2.php");
}


?>
