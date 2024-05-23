<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    $fullname = $_POST["Fullname"];
    $email = $_POST["email"];
    $password = $_POST["password"];


    // إدراج البيانات في قاعدة البيانات
    $sql = 'INSERT INTO `std`(`Fullname`, `Email`, `Password`) 
    VALUES ("' . $fullname . '", "' . $email . '", "' . $password . '")';

    if ($conn->query($sql) === TRUE) {
        header('Location: ./page03.php?Username=' . $fullname);
    } else {
        echo "Error: " . $conn->error;
    }


// Close the connection
$conn->close();
?>
