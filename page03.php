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
</style>
</head>
<body>

    
         <header class="hero">
         
            
           <a href="#" class="logo"> University Kasdi Merbah Ouargla </a>
           <nav class="navbar"> 
           
            <a href="#"><i class='bx bx-home' style='color:#ffffff' ></i>  
                Home</a>
         
           </nav>
        <img src="bxs-user-circle (1).svg" class="user.pic" onclick="toggleMenu()">
        <div class="sub-menu-wrap" id="subMenu">
            <div class="sub-menu">
                <div class="user-info">
                    <img src="bxs-user-circle (1).svg">
                    <h4>your account</h4>
                </div>
                <hr>
                <a href="#" class="sub-menu-link">
                    <img src="bx-log-out (1).svg">
                    <p>Logout</p>
                    <span>></span>
                </a>
            
            </div>
        </div>
        </header>
         <div class="container" >

         <div class="box">
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

$sql = "SELECT id, wilaya, name FROM company";
$stmt = $conn->prepare($sql);
$stmt->execute();
$stmt->bind_result($id, $wilaya, $nom);
$data = array();
while ($stmt->fetch()) {
    $row = array(
        'id' => $id,
        'wilaya' => $wilaya,
        'name' => $nom
    );
    $data[] = $row;
}

$wilaya_list = array();
foreach ($data as $row) {
    $wilaya_list[$row['wilaya']][] = $row;
}

foreach ($wilaya_list as $wilaya => $companies) {
    echo "<ul class='stud'>";
    echo "<li class='wilaya' onclick='toggleInfo(\"" . $wilaya . "\")'>" . $wilaya . "</li>";
    echo "<ul class='info' id='" . $wilaya . "' style='display:none;'>";
    foreach ($companies as $company) {
        echo "<li class='nom'><a href='page4.php?id=" . $company['id'] . "'>" . $company['name'] . "</a></li>";
    }
    echo "</ul>";
    echo "</ul>";
}


?>

<script>
function toggleInfo(id) {
    var info = document.getElementById(id);
    if (info.style.display === 'none') {
        info.style.display = 'block';
    } else {
        info.style.display = 'none';
    }
}

</script>

         <div class="content">
                <h1> <span>Click </span>Here</h1>
                <form>
                    <i class='bx bxs-hand-right'></i>
                       <button class="link">Link</button>
                  
                    
                    
                </form>
                
              </div>
                </div>







            <!--
            <div class="btn"  onclick="menubar()" ><a href="#">Ourgla</a>
            
            <div class="menu-wrap" id="Menu" >
                <div class="menu">            
                <li>Telecome</li>
                <li>Mobilis</li>
                
            </div>
            </div>
        </div>
            <div class="btn"><a href="#">Biskra</a></div>
            <div class="btn"><a href="#">Hasi Mesoud</a></div>
            <div class="btn"><a href="#">Tougourt</a></div>
            <div class="btn"><a href="#">Alger</a></div>
            <div class="btn"><a href="#">Ourgla</a></div>
            <div class="btn"><a href="#">Ourgla</a></div>
            <div class="btn"><a href="#">Ourgla</a></div>
            <div class="btn"><a href="#">Ourgla</a></div>
            <div class="btn"><a href="#">Ourgla</a></div>
            <div class="btn"><a href="#">Ourgla</a></div>
            <div class="btn"><a href="#">Ourgla</a></div>-->
        </div>
        <div class="Social-icons">
                <a href="#"><i class='bx bxl-facebook'></i><!-- <span> Face Book</span>--> </a> 
                <a href="#"><i class='bx bx-envelope'></i><!-- <span> Email</span>--> </a>
                <a href="#"><i class='bx bxs-phone'></i> <!--<span> Phone</span>--> </a>
               
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