<?php

//Besides the built-in PHP functions, it is possible to create your own functions
//a function is a block of statements that can be used repeatedly in a program/ does a specific task
//a function will not execute automatically when a page loads
//a function will be executed by a call to the function

//syntax
//function function_name(){
//    code to execute ONLY WHEN THIS FUNCTION IS CALLED/USED
//}

//function creation/ declaration
function greetings(){
    echo 'hello world'.'<br>';
}

//using/calling a function
//use the function name followed by a parenthesis
//function must be called
greetings();

function greetings1(){
    echo 'Pilau'.'<br>';
}

greetings1();

function greetings2($name,$age){
    echo 'Hello '.$name.'<br>'.'You are '.$age.'<br>';
}

greetings2('John',23);
//greetings2();//call these functions with enough arguments

//functions with default arguments
function greetings3($name='PHP'){
    echo 'I am a '.$name.' developer'.'<br>';
}

greetings3();
greetings3('JavaScript');




?>
