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



$sql = ' UPDATE `company` SET `definition`="' . $def .'",`jour`="' . $jour .'",`duration`="' . $Duration .'",`service`="' . $services .'",
`wilaya`="' . $city .'",`comp_email`="' . $email .'",`raport`="' . $raport .'" WHERE  `name`="' . $name .'"';



if ($conn->query ($sql) == true ) {
    header('Location: ./updatecomp.php?INFORMATION UPDATED'); ;
} else {
    header('Location: ./updatecomp.php?error=notexist');
}

$conn->close();

?>