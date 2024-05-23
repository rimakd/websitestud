<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";


    $errors = array();
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Reading data from the database
$NOMA =mysqli_real_escape_string($conn, $_POST["Nom"]);
$city =mysqli_real_escape_string($conn, $_POST["city"]);


$sql = 'DELETE FROM `company` WHERE `name` = "' . $NOMA . '" AND `wilaya` = "' . $city . '"';



if ($conn->query ($sql) == true ) {
    header('Location: ./deletecomp.php?INFORMATION UPDATED'); ;
} else {
    header('Location: ./deletecomp.php?error=notexist');
}

error_reporting(E_ALL);
ini_set('display_errors', 1);

//Close the connection
$conn->close();


?>