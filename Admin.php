<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>page-4</title>
<link rel="stylesheet" href="admin.css">

<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    
         <header class="hero">
         
            
           <a href="#" class="logo"> University Kasdi Merbah  Ouargla <!-- <span>Merbah</span>--></a>
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
            
            <div class="btn" onclick="window.location.href='Addcomp.php'"><a >ADD COMPANY</a></div>
            <div class="btn"  onclick="window.location.href='deletecomp.php'"><a href="#">DELETE COMPANY</a></div>
            <div class="btn"    onclick="window.location.href='updatecomp.php'"><a href="#">UPDATE  INFORMATION</a></div>
            <div class="btn"><a href="#">UPDATE LINK</a></div>
           
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