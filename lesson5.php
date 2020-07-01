<?php
//Loops
//we use loops to execute a block of code again and again as long as a certain condition is true

//in php, we have the following loop types:
//1. while (loops through a block of code as long as the specified condition is true)

$count = 0;
//syntax
//while (condition){
//    code to execute
//}

while ($count < 20){//first checks the condition. loops only if condition is true.
    if($count == 0){
        echo $count. ' not divisible by 3 <br>';
    }elseif ($count % 3 == 0){
        echo $count. ' divisible by 3 <br>';
    }else{
        echo $count. ' not divisible by 3 <br>';
    }
    $count ++;
}
//$count initializes the loop counter and sets the start value
//$count < 20 continues the loop as long as $count is less than 20
//$count ++ increases the loop counter value by 1 for each loop/iteration

//2. do..while (loops through a block of code once, and then repeats the loop as long as the specified condition is true)
//syntax
//do {
//    code to execute
//}while(condition is true)

$x = 0;
do{
    echo '<div style="border: 2px solid red">
            <p>$x</p>
          </div>';
    $x++;
}while($x < 10);
echo '<br>';

//3. for (loops through a block of codes specified number of times)
//syntax
//for (initial value; test value; increment value){
//    code to be executed
//}

//initial value initializes the loop counter value/ determines the starting of a loop
//test value evaluated for each loop iteration. If it evaluates to TRUE, the loop continues.If it evaluates to FALSE, the loop ends
//increment value increases the loop counter value

for ($x = 0;$x < 10;$x+=2){
    echo "value:" .$x. '<br>';
}
echo '<br>';

for ($y = 0; $y < 100; $y++) {
    if ($y == 0){
        echo 'fail <br>';
    }elseif($y % 5 == 0){
        echo $y. '<br>';
    }else{
        echo 'fail <br>';
    }
}

//4. foreach (loops through a block of code for each element in an array)



?>