<?php
//intro to php
//php is a widely used open source scripting language
//php scripts are executed on the server
//php files contain text, html,css, js, php
//php is executed on server, and result is returned to browser as plain html
//extension is .php

echo "Hello World";
echo "<h1>Hello World</h1>";
//echo; print content in browser
//hello world is the content to be printed on browser
//; means end of php statement or instruction

//variables in php
//a variable is a container for storing data
//must start with $
$myname = "John Doe <br>";
echo $myname;

$techco1 = "Apple <br>";
echo $techco1;

$techco2 = "Microsoft <br>";
echo $techco2;

$techco3 = "Dell <br>";
echo $techco3;

//concatenation/joining
//joining a variable and variable: use the dot operator
echo $techco1.$techco2.$techco3;

$car1 = "Benz";
$car2 = "Toyota";
//space added either as
echo $car1." ".$car2;
//or
$car1 = "Benz ";
$car2 = "Toyota";
echo $car1.$car2."<br>";

//joining a string and a variable
echo "I love $car1 <br>";
echo "I love $car1 and $car2";

?>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa cumque doloremque expedita facilis laboriosam omnis pariatur quibusdam recusandae rerum voluptates!</p>