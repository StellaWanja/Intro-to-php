<?php
//an array stores multiple values in one single variable
//an array is a special variable which can hold more than one value at a time
$fruit1 = "Mango";
$fruit2 = "Orange";
$fruit3 = "Apple";
$fruit4 = "Avocado";
$fruit5 = "Pineapple";
$fruit6 = "Watermelon";
$fruit7 = "Guava";
//create an array in php
//the array () function is used to create arrays
$fruits = array('Mango','Orange','Apple','Avocado','Pineapple','Watermelon','Guava');

//count number of items in an array: use count() function
$num_items = count($fruits);
echo $num_items. '<br>';

//ACCESSING ARRAY ITEMS: use square brackets[] with index number inside
echo $fruits[0]. '<br>';
echo $fruits[1]. '<br>';
echo $fruits[2]. '<br>';
echo $fruits[3]. '<br>';
echo $fruits[4]. '<br>';
echo $fruits[5]. '<br>';
echo $fruits[6]. '<br>';
echo "My fav fruit is ".$fruits[0]. " and " .$fruits[3]. "<br>";

//looping through an indexed array: use foreach
foreach ($fruits as $matunda){
    echo $matunda. '<br>';
}

$num_fruits = count($fruits);//stores the number of items in the fruits array
for ($x=0; $x<$num_fruits;$x++){
    echo $fruits[$x].'<br>';
}

//ASSOCIATIVE ARRAY 1 - populating directly
$geeks_fruits = array("Craig"=>"Mango","Steve"=>"Apple","Victor"=>"Mapera","Masood"=>"Grapes");

//ASSOCIATIVE ARRAY 2 - populating one by one
$country_car_brand['Kenya'] = 'Nyayo';
$country_car_brand['Germany'] = array('Benz','BMW','VW');
$country_car_brand['USA'] = 'Ford';
$country_car_brand['Japan'] = array('Mitsubishi','Toyota');
$country_car_brand['China'] = array('Hyundai');
echo '<br>';

//Accessing associative array item : Use the keys
echo $country_car_brand['Kenya'];
echo '<br>';
echo '<br>';

foreach ($country_car_brand['Germany'] as $Germany){
    echo $Germany.'<br>';
}
echo '<br>';

$car_count = count($country_car_brand['Germany']);
for ($i = 0; $i < $car_count; $i++){
    echo $country_car_brand['Germany'][$i].'<br>';
}
echo '<br>';

$car_count = count($country_car_brand['Germany']);//NUMBER OF CARS
$cars_found_germany = $country_car_brand['Germany'];//ACTUAL INDEXED ARRAY IN GERMANY KEY
for ($i = 0; $i < $car_count; $i++){
    echo $cars_found_germany[$i].'<br>';
}
echo '<br>';



?>
