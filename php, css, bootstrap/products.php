<?php
require 'header2.php';
require 'config1.php';

//CREATE

//create variables that will store received data
$product_name = $price = $color = $description = $condition = '';
//create variables that will store error messages
$product_name_err = $price_err = $color_err = $description_err = $condition_err = '';
//check the request method
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $product_name = safisha($_POST['product_name']);
    $price = safisha($_POST['price']);
    $color = safisha($_POST['color']);
    $description = safisha($_POST['description']);
    $condition = safisha($_POST['condition']);
}

//check if data is empty
if (empty($product_name)){
    $product_name_err = "Please fill in the name of the product";
}
if (empty($price)){
    $price_err = "Please fill in price of the product";
}
if (empty($color)){
    $color_err = "Please fill in the color of the product";
}
if (empty($description)){
    $description_err = "Please fill in the description of the product";
}
if (empty($condition)){
    $condition_errr = "Please fill in the condition of the product";
}else{
    $sql = "INSERT INTO `product`(`id`, `productname`, `price`, `color`, `description`, `productcondition`) VALUES (NULL, '$product_name', '$price', '$color', '$description', '$condition')";

    if (mysqli_query($connection, $sql)){
        echo "Data inserted successfully<br>";
    }else{
        echo "Data not inserted".mysqli_error($connection);
    }

}

function safisha($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>

<div class="container">
<div class="row">
<div class="col col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
<div class="col col-sm-4 col-md-4 col-lg-4 col-xl-4">

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data" id="form">
    <fieldset>
        <h3>Products List</h3>
        <label for="">Product Name</label><br>
        <input type="text" name="product_name"><br>
        <span class="error" style="color: orangered"><?php echo $product_name_err?></span><br>

        <label for="">Price</label><br>
        <input type="number" name="price"><br>
        <span class="error" style="color: orangered"><?php echo $price_err?></span><br>

        <label for="">Color</label><br>
        <input type="color" name="color"><br>
        <span class="error" style="color: orangered"><?php echo $color_err?></span><br>

        <label for="">Description</label><br>
        <input type="text" name="description"><br>
        <span class="error" style="color: orangered"><?php echo $description_err?></span><br>

        <label for="">Condition</label><br>
        <input type="checkbox" name="condition" value="good">Good
        <input type="checkbox" name="condition" value="fair">Fair
        <input type="checkbox" name="condition" value="poor">Poor<br><br>
        <span class="error" style="color: orangered"><?php echo $condition_err?></span><br>

        <a href="index2.php" type="submit" class="btn btn-info">Submit</a>
    </fieldset>
</form>
</div>

    <div class="col col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
</div>
</div>

<?php
require 'footer2.php';
?>