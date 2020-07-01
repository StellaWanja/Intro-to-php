<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="main.css">
<title>Product Details</title>

<?php

//fetch user from db using the received id($user_id)
require 'header2.php';
require 'config1.php';

//grab id : use $_GET()
if(isset($_GET['id'])){
    $id = $_GET['id'];

//    fetch data from db using id
    $sql = "SELECT `id`, `productname`, `price`, `color`, `description`, `productcondition` FROM `product` WHERE id='$id'";
    $product = mysqli_query($connection, $sql);
//    create associative array to split data into column titles and actual values: use mysqli_fetch_assoc
    $row = mysqli_fetch_assoc($product);

    echo "<div class='card'>";
    echo "<table>";
    echo "<tr>";
        echo "<th>".'Product Name'."</th>";
        echo "<th>".'Price'."</th>";
        echo "<th>".'Color'."</th>";
        echo "<th>".'Description'."</th>";
        echo "<th>".'Condition'."</th>";
    echo "</tr>";

    echo "<tr>";
        echo "<td>".$row['productname']."</td>";
        echo "<td>".$row['price']."</td>";
        echo "<td>".$row['color']."</td>";
        echo "<td>".$row['description']."</td>";
        echo "<td>".$row['productcondition']."</td>";
        echo "</tr>";
    echo "</table>";
    echo "</div>";


}

require 'footer2.php';

?>

