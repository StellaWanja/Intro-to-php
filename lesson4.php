<?php
//conditional statements are used to perform diffnt actions based on diffnt conditions
//To allow your code to perform diffnt actions based on diffnt variables
//php has the following if conditional statements
//1. if statement (executes some code if one condition is true)
//2. if...else statement (executes some code if a condition is true and another code if that condition is false
//3. if...elseif...else (executes diffnt codes for more than two conditions)
//4. switch statement (selects one of many blocks of code to be executed)

//1. IF STATEMENT
//executes code if condition is true
//syntax
//if(condition to examine){
//    code to be executed if condition is TRUE
//}

$db_first_name = 'John Doe';
$user_first_name = 'John Doe';
if ($user_first_name == $db_first_name){
    echo '<p>Credentials matched. You can login</p>';
}

$age = 17;
if ($age < 18){
    echo '<h1>You cannot take alcohol. Go home and study hard.</h1>';
}

//2. IF...ELSE
$age = 18;
if ($age < 18){
    echo '<h1>You cannot take alcohol. Go home and study hard.</h1>';
}else{
    echo '<h1>Hurray, you are old enough, grab a crate</h1>';
}

//3. IF...ELSEIF...ELSE
//syntax
//if(condition to examine){
//    code to be executed if condition is TRUE
//}elseif(condition){
//    code to be executed if 1st condition is false and this condition is true
//}elseif(condition){
//    code to be executed if 2nd condition is false and this condition is true
//}else{
//    code to be executed if all conditions are false
//}

$age = 19;
$kenyan = false;

if ($age < 18){
    echo '<h1>You cannot take alcohol. Go home and study hard.</h1>';
}elseif($kenyan == true){
    echo '<h1>Hurray, you are old enough, grab a crate</h1>';
}else{
    echo '<h1>You are under age and not Kenyan</h1>';
}

//1.Using a conditional statement, check if 100 is a multiple of 2;
//if true echo "100 is a multiple of 2" else echo "100 is not a multiple of 2"
//2. write code that calculates the volume of a cylinder of height 14 and diameter 14,
//echo "this is the cylinder to use if the volume is greater than 10"

//1.
//use modulus
$m = 100 % 2;
if ($m*2 == 100){
    echo "100 is a multiple of 2";
}else{
    echo "100 is not a multiple of 2";
}
echo '<br>';

//2.
$h = 14;
$r = 14/2;
$r2 = $r**2;
$vol = 3.14*$r2*$h;
if ($vol > 10){
    echo "This is the cylinder to use if the volume is greater than 10";
}
echo '<br>';

//4. SWITCH STATEMENT
//syntax
//switch (n-condition){
//   case label1:
//      code to execute if n = label1
//    break
//
//   case label2:
//      code to execute if n = label2
//    break
//
//   case label3:
//      code to execute if n = label3
//    break
//
//   case label4:
//      code to execute if n = label4
//    break
//
//   default:
//      code to be executed if other conditions are false
//}

$favTeam = 'Chelsea';
switch ($favTeam){
    case 'Man-U':
        echo '<p style="color: red">Man-U at position 5</p>';
        break;

    case 'Liverpool':
        echo '<p style="color: orange">Liverpool at position 1</p>';
        break;

    case 'Leicester':
        echo '<p style="color: blue">Leicester at position 2</p>';
        break;

    default:
        echo '<p style="color: lightblue">None of the above is my fav team</p>';
}

?>
