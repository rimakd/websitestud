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



$services = $_POST['service'];
$name = $_POST['compname'];
$email = $_POST['email'];
$def = $_POST['def'];
$jour = $_POST['jour'];
$Duration = $_POST['duration'];
$raport = $_POST['raport'];
$city = $_POST['city'];



$sql = 'INSERT INTO `company`(`name`, `definition`, `service`, `jour`, `duration`, `comp_email`, `raport`, `wilaya`, `id`) 
VALUES ("' . $name .'","' . $def .'","' . $services .'","' . $jour .'","' . $Duration .'","' . $email .'","' . $raport .'","' . $city .'",NULL) ';



if ($conn->query ($sql) == true ) {
    header('Location: ./Addcomp.php?INFORMATION UPDATED'); ;
} else {
    header('Location: ./Addcomp.php?error=notexist');
}

$conn->close();

?>