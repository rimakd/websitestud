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

// حماية من حقن SQL (SQL Injection)
$Email = $conn->real_escape_string($_POST["Email"]);
$Password = $conn->real_escape_string($_POST["Password"]);


$sql = 'SELECT * FROM std WHERE  Email ="'. $Email .'" AND Password ="'. $Password .'"';
$result = $conn->query($sql);

// التحقق من عدد الصفوف الناتجة عن الاستعلام
if ($result->num_rows > 0) {
    // تم العثور على مستخدم
    header('Location: ./page03.php'); 
} else {
    // لم يتم العثور على مستخدم
    header('Location: ./web_site.php?error=notexist');
}

// Close the connection
$conn->close();
?>
