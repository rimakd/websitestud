<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>page-4</title>
<link rel="stylesheet" href="page4.css">

<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<style>
  p {
    margin-bottom: 2px; /* إضافة مسافة بين الفقرات */
}
  </style>
</head>
<body>

    
         <header class="hero">
         
            
           <a href="#" class="logo"> University Kasdi Merbah  Ouargla <!-- <span>Merbah</span>--></a>
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
       <section>
        <div class="company">
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
           
           if (isset($_GET['id'])) {
               $numA = mysqli_real_escape_string($conn, $_GET['id']);
           } else {
               die("Missing numA parameter");
           }
           
           // تعديل استعلام SQL
           $sql = "SELECT * FROM `company` WHERE `id` = ?";
           $stmt = $conn->prepare($sql);
           $stmt->bind_param("s", $numA);
           $stmt->execute();
           $result = $stmt->get_result();
           $data = array();
           if ($result->num_rows > 0) {
               while ($row = $result->fetch_assoc()) {
                   $data[] = $row;
               }
           }
           foreach ($data as $row) {
         echo " <h2>" . $row["name"] . "</h2>";
           }
           ?>
          <div class="box">
           <img src="IMG COMPANY.jpg" alt="">
           <div >
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

if (isset($_GET['id'])) {
    $numA = mysqli_real_escape_string($conn, $_GET['id']);
} else {
    die("Missing numA parameter");
}

// تعديل استعلام SQL
$sql = "SELECT * FROM `company` WHERE `id` = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $numA);
$stmt->execute();
$result = $stmt->get_result();
$data = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}
foreach ($data as $row) {
  echo "<p>Definition: " . $row["definition"] . "</p>";
  echo "<p>Services: " . $row["service"] . "</p>";
  echo "<p>Days of receiving internship applications: " . $row["jour"] . "</p>";
  echo "<p>Duration of internship: " . $row["duration"] . "</p>";
  echo "<p>Rapport : " . $row["raport"] . "</p>";
  echo '<button class="btn">' . $row["comp_email"] . '</button>';
}

                ?>
                </div>
        </div>
      </div>
       </section> 
       <template class="reply-input-template">
        <div class="reply-input container">
            <img src="photo_2024-05-07_23-12-44.jpg" alt="" class="usr-img">
          <textarea class="cmnt-input" placeholder="Add a comment..."></textarea>
          <button class="bu-primary">SEND</button>
        </div>
        <!--comment-->
      </template>
    
      <template class="comment-template">
        <div class="comment-wrp">
          <div class="comment container">
            <div class="c-score">
              <img src="c:\Users\poste\Downloads\bx-plus.svg" alt="plus" class="score-control score-plus">
              <p class="score-number">5</p>
              <img src="c:\Users\poste\Downloads\bx-minus.svg" alt="minus" class="score-control score-minus">
            </div>
            <div class="c-controls">
              <a  class="delete"><img src="c:\Users\poste\Downloads\icons8-delete.svg" alt="" class="control-icon">Delete</a>
              <a  class="edit"><img src="c:\Users\poste\Downloads\bx-edit-alt.svg" alt="" class="control-icon">Edit</a>
              <a  class="reply"><img src="c:\Users\poste\Downloads\bx-reply.svg" alt="" class="control-icon">Reply</a>
            </div>
            <div class="c-user">
                <img src="00fc57465e2a8f707b2e5338b59358a4.jpg" alt="" class="usr-img">
              <p class="usr-name">maxblagun</p>
              <p class="cmnt-at">2 weeks ago</p>    
            </div>
            <p class="c-text">
              <span class="reply-to"></span>
              <span class="c-body"></span>
            </p>
          </div><!--comment-->
          <div class="replies comments-wrp">
          </div><!--replies-->
        </div>
      </template>
    <main>
      <div class="comment-section">
    
        <div class="comments-wrp">
    
        </div> <!--commentS wrapper      c:\Users\poste\OneDrive\Bureau\student-intership\-->
      <div class="reply-input container">
        <img src="photo_2024-05-07_23-12-44.jpg" alt="" class="usr-img">
          <textarea class="cmnt-input" placeholder="Add a comment..."></textarea>
          <button class="bu-primary">SEND</button>
        </div> <!--reply input-->
      </div> <!--comment sectio-->
      
      <div class="modal-wrp invisible">
        <div class="modal container">
          <h3>Delete comment</h3>
          <p>Are you sure you want to delete this comment? This will remove the comment and cant be undone</p>
          <button class="yes">YES,DELETE</button>
          <button class="no">NO,CANCEL</button>
        </div>
      </div>
    </main>
       <!---->
        <script >
            let subMenu =document.getElementById("subMenu");
            function toggleMenu(){
                subMenu.classList.toggle("open-menu");
            }
           
    
        </script>
       <script src="page3.js"></script>
    </body>
    </html>
    