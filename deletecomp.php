<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>page-4</title>
<link rel="stylesheet" href="page03.css">

<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<style>
    .box{ 
    position:absolute;
    
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 90%;
    height: 450px;
    background: #36173f42;
    text-align: center;
    border-radius: 100px;
    margin-top: 1px; 

}
.input-box .select-box input{
width: 100%;
height: 100%;
background: transparent;
border: none;
outline:none;
font-size: 16px;
color: #fff;
font-weight: 500;
padding-right: 25px;

}
.input-box label{
position: relative;
top:50%;
left:0;
transform: translateY(-50%);
font-size: 16px;
color:#fff;
font-weight: 500;
pointer-events: none;


}
</style>
</head>
<body>

    
         <header class="hero">
         
            
           <a href="#" class="logo"> University Kasdi Merbah  Ouargla </a>
           <nav class="navbar"> 
           
            <a href="#"><i class='bx bx-home' style='color:#ffffff' ></i>  
                Home</a>
         
           </nav>
        <img src="c:\Users\poste\Downloads\user-circle-solid-24 (2).png" class="user.pic" onclick="toggleMenu()">
        <div class="sub-menu-wrap" id="subMenu">
            <div class="sub-menu">
                <div class="user-info">
                    <img src="c:\Users\poste\Downloads\user-circle-solid-24 (2).png">
                    <h4>your account</h4>
                </div>
                <hr>
                <a href="#" class="sub-menu-link">
                    <img src="c:\Users\poste\Downloads\log-out-regular-24.png">
                    <p>Logout</p>
                    <span>></span>
                </a>
            
            </div>
        </div>
        </header>
         <div class="container" >

         <div class="box">
             <form action="delete.php" method="post">

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

 
 $sql = "SELECT `name`  FROM `company`";
 $result = $conn->query($sql);

 if ($result->num_rows > 0) {
     echo "<label for='Type'>Company Name : </label>";
     echo "<select name='Nom'>";
     while($row = $result->fetch_assoc()) {
         echo "<option value='" . $row["name"] . "'>" . $row["name"] . "</option>";
     }
     echo "</select>";

    
 } else {
     echo "لا توجد عناصر متاحة.";
 }
 
 
 ?>


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

 
 $sql = "SELECT `wilaya` FROM `company`";
 $result = $conn->query($sql);

 if ($result->num_rows > 0) {
echo "<label for='Type'>Company City : </label>";
     echo "<select name='city'>";
     while($row = $result->fetch_assoc()) {
         echo "<option value='" . $row["wilaya"] . "'>" . $row["wilaya"] . "</option>";
     }
     echo "</select>";

    } else {
     echo "لا توجد عناصر متاحة.";
 }
 
 
 ?>
   <button type="submit"
      class="btn">Delete</button>

             </form>

              </div>

        </div>
        <script >
            let subMenu =document.getElementById("subMenu");
            function toggleMenu(){
                subMenu.classList.toggle("open-menu");
            }
            
            let Menu =document.getElementById("Menu");
            function menubar(){
                Menu.classList.toggle("open-m");
            }

        </script>
      
    </body>
    </html>