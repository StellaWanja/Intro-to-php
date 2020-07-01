<?php
//php operators
//used to perform operations on variables and values
//php has the following operators
//1. arithmetic operators
//2. assignment ops
//3. comparison ops
//4. logical ops

//ARITHMETIC OPERATORS
//+, -, *, /, %, **
//+ Addition
$x = 23;
$y = 234;
$sum = $x + $y;
echo $sum.'<br>';
echo 'the sum of 234 and 23 is '.$sum.'<br>';
echo 23 + 234;
echo "<br>";

//- Subtraction
$x = 23;
$y = 234;
$sub = $y - $x;
echo $sub.'<br>';
echo 'the sub of 234 and 23 is '. $sub.'<br>';
echo 234-23;
echo "<br>";

//* Multiplication
$x = 23;
$y = 234;
$mult = $y * $x;
echo $mult.'<br>';
echo 'the mult of 234 and 23 is '. $mult.'<br>';
echo 234*23;
echo "<br>";

// / Division
$x = 23;
$y = 234;
$div = $y / $x;
echo $div.'<br>';
echo 'the div of 234 and 23 is '. $div.'<br>';
echo 234/23;
echo "<br>";

// % Modulus
$x = 3;
$y = 2;
$mod = $x % $y;
echo $mod.'<br>';
echo 'the mod of 3 and 2 is '. $mod.'<br>';
echo 3%2;
echo "<br>";

// ** Exponential
echo 2**3;

//ASSIGNMENT OPERATORS
//used to write a value to a variable
$car = 'Benz';
$i = 12;
$f = 12.12;
echo "<br>";
//assignment ops with other arithmetic ops
$s = 30;
$sum= $i + $s;
$i = $i + $s;
$i += $s;
echo $i;
echo '<br>';
$a = 100;
$b = 200;
$a += 100;
echo $a;
echo '<br>';
$b -= 100;
echo $b;
echo '<br>';
$b *= $a;
echo $b;
echo '<br>';

//COMPARISON OPERATORS
//used to compare values
//comparison ops return a boolean data types: true, false
//1. == (equal)
echo '<br>';
$s = 2;
$t = 3;
$j = 2;
$answer = $s == $t;
var_dump($answer);
echo '<br>';

//data from db
$db_username = "johndoe";
$db_password = 'ekapassword';
//data from user
$user_username = 'mikedoe';
$user_password = 'ekapassword';

$check = $db_username == $user_username;
var_dump($check);
echo '<br>';

//2. === (identical)
//returns true if one variable is equal to another variable and these two variables are of the same data type

$check = $db_password === $user_password;
var_dump($check);
echo '<br>';

//3. != (not equal to)
//return true if two variables are not equal
$check = $db_username != $user_username;
var_dump($check);
echo '<br>';

//4. !== (not identical)
//return true if two variables are not identical
$check = $db_username !== $user_username;
var_dump($check);
echo '<br>';

//5. > (greater than)
//return true if a value is greater than the other value
$myname = 'Stella The Dev';
$yourname = 'John Graham Doe';
$result = strlen($myname)>strlen($yourname);
var_dump($result);
echo '<br>';

//6. < (less than)
//return true if a value is less than the other value
$myname = 'Stella The Dev';
$yourname = 'John Graham Doe';
$result = strlen($myname) < strlen($yourname);
var_dump($result);
echo '<br>';

//7. >= (greater than or equals to)
//return true if a value is greater than or equals to the other value
$myname = 'Stella The Dev';
$yourname = 'John Graham Doe';
$result = strlen($myname) >= strlen($yourname);
var_dump($result);
echo '<br>';

//8. <= (less than or equals to)
//return true if a value is less than or equals to the other value
$myname = 'Stella The Dev';
$yourname = 'John Graham Doe';
$result = strlen($myname) <= strlen($yourname);
var_dump($result);
echo '<br>';

//LOGICAL OPERATORS
//used for combined conditional statements
//1. and
//returns true if two operations are both true
$x = 100;
$y = 200;
if ($x == 100 and $y == 200){
    echo '<h1>It is true $x is equal to 100 and $y is equal to 200</h1>';
}
echo '<br>';

//2. or
//returns true if either one of two operations is true
$x = 100;
$y = 200;
if ($x == 300 or $y != $x){
    echo '<h1>It is true $x is equal to 100 and $y is not equal to 200</h1>';
}
echo '<br>';
//can also be written as
if ($x == 300 || $y != $x){
    echo '<h1>It is true $x is equal to 100 and $y is not equal to 200</h1>';
}
echo '<br>';

//3. not (!)
//returns true if a variable is false
$check = ! ($x == 100 and $y == 200);
var_dump($check);
echo '<br>';


?>
