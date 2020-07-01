<?php
//PHP $_POST is a PHP super global variable which is used to collect form data after submitting a HTML form with method="post"
//$_POST is also widely used to pass variables
//use to send sensitive data
//receive form data using POST request/$_POST() superglobal
//receive data
//declare variables to store sent data
$name = '';
$email = '';

//check the request method : GET or POST: use $_SERVER[]
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

//    if method is post, grab data using the $_POST superglobal
    $name = $_POST['jina'];
    $email = $_POST['arafa'];
    $error = false;
    if (empty($name)){
        $error = true;
        echo "<p style='color: red'>Please fill in your name</p>";
    }
    if (empty($email)){
        $error = true;
        echo "<p style='color: red'>Please fill in your email</p>";
    }else{

//    print the data
//    if (!$error)
        $name = safisha($name);
        $email = safisha($email);
        echo "<p style='color: green'>Your name is $name and email is $email</p> <br>";
    }
}

//validating/cleaning data
//1. To remove unwanted spaces: use trim()
//2. To remove backslashes: use stripslashes()
//create a function to clean data

function safisha($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>



<!--htmlspecialchars prevents data from being hacked-->
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
    <h3>Fill Form...</h3>
    <input type="text" name="jina" placeholder="Enter name..."><br>
    <input type="email" name="arafa" placeholder="Enter email..."><br>
    <button type="submit">Send</button>
<!--    action: location that data will be sent to in the server, value: lesson9.php-->
<!--    method: request method to be used to send data to the server-->
<!--    name: is the key for a value entered in the form-->
<!--    this will result to an associative array of this format-->

<!--        $_POST = array("jina" => "John", "arafa" => "john@gmail.com")-->

</form>

<!--$_GET: Used to collect data from a form just like $_POST-->
<!--collect data sent via the URL-->
<!--use to send non-sensitive data-->

<?php
//grabbing data sent via $_GET
$the_name = $_GET['name'];
$the_age = $_GET['age'];
$the_country = $_GET['country'];
echo "Your details: Name: $the_name, Age: $the_age, Country: $the_country <br>"
?>

<a href="lesson9.php?name=Ha&age=23&country=Kenya">Send Details</a>

