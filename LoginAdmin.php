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
$Username = $conn->real_escape_string($_POST["Username"]);
$Password = $conn->real_escape_string($_POST["Password"]);


$sql = 'SELECT * FROM `admine` WHERE `Username` ="'. $Email .'" AND `password` ="'. $Password .'"';
$result = $conn->query($sql);

// التحقق من عدد الصفوف الناتجة عن الاستعلام
if ($result->num_rows > 0) {
    // تم العثور على مستخدم
    header('Location: ./page04.php'); 
} else {
    // لم يتم العثور على مستخدم
    header('Location: ./web_site.php?error=ERROR');
}

// Close the connection
$conn->close();
?>
