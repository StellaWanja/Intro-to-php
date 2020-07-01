<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="main.css">
<title>Products List</title>

<?php

//READ
require 'header2.php'; //to include header code
require 'config1.php';

echo "<h1 style='text-align: center; margin-top: 50px; margin-bottom: 50px'>Our Products</h1>";

$sql = "SELECT * FROM `product` WHERE 1";

$products = mysqli_query($connection, $sql);

while ($row = mysqli_fetch_array($products)){
    echo "<div class='card'>";
        $product_id = $row["id"];
        echo "<a href='details2.php?id=$product_id'>";
            echo $row['productname'].'<br>';
            echo "</a>";
        echo "<a href='delete2.php?id=$product_id'>Delete</a>"    ;
            echo "</div>";
            echo "<br>";
}


require 'footer2.php';
?>