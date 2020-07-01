<?php
//php data types
//variables can store diff types of data that do diff things
//php supports the following data types
//1. String
//2. integers
//3. float
//4. boolean
//5. arrays
//6. objects
//7. null
//8. resources

//STRING
//is a sequence of xters in double or single quotes
//eg "hello world", 'hello world'
//rules that govern names for variables
//1. a variable starts with $ sign followed by name of the variable
//2 .a variable name must start with a letter or underscore xter
//3. a variable name cannot start with a number
//4. a variable name can only contain alpha-numeric xters and underscores (a-z, 0-9)
//5. variable names are case sensitive (sage and SAGE are 2 diffnt variables)

$x = "php";
$y = "kotlin";
$Y = "Android";
var_dump($x);
var_dump($y);
var_dump($Y);
echo  "<br>";
//what if you want to know how many xters make up a string?
//use: strlen() function
//function: code that helps you do repetitive tasks
echo strlen($x);
echo "<br>";
echo strlen('John Doe');
echo "<br>";
//count number of words in a string : str_word_count() function
echo  str_word_count('I love coding in php');
echo "<br>";
$num_words = str_word_count('coding is awesome');
echo $num_words;
echo "<br>";
//search for text within a string: strpos ()
$position_for_world = strpos('hello world', 'world');
echo $position_for_world;
echo "<br>";
//replace text within a string: str_replace()
echo str_replace('world', 'dunia', 'hello world');
echo "<br>";


//INTEGERS
//are numbers that are non-decimal
//must at least have one digit
$age = 21;
var_dump($age);
echo "<br>";


//FLOAT
//is a number with a decimal point
$cup_volume = 23.34;
var_dump($cup_volume);
echo "<br>";


//BOOLEAN : true, false are results
//often used in conditional statements
$a = true;
$b = false;
echo "<br>";
echo 3<5; //returns 1, true
echo "<br>";
echo 3>5; //returns nothing on browser, false
echo "<br>";

?>
