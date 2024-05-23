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

         <div class="box">
             <form action="Update.php" method="post">

             <div class="input-box"> 
             <label>Company Name</label>

        <span class="icon"><i class='bxbxs-user'></i></span>
        <input name="compname" type="text" required>

    </div>
<div class="input-box"> 
<label>Company Email</label>

    <span class="icon"><i class='bxbxs-envelope'></i></span>
    <input type="email" name="email"  required>

</div><div class="input-box"> 
<label>Company Definition</label>

    <span class="icon"><i class='bxbxs-envelope'></i></span>
    <input type="text" name="def"  required>
</div>
<div class="input-box"> 
<label>Days of receiving internship applications</label>

    <span class="icon"><i class='bxbxs-envelope'></i></span>
    <input type="text" name="jour"  required>
</div>
<div class="input-box"> 
<label>Duration of internship</label>

    <span class="icon"><i class='bxbxs-envelope'></i></span>
    <input type="text" name="duration"  required>
</div>
<div class="input-box"> 
<label>Services</label>

    <span class="icon"><i class='bxbxs-envelope'></i></span>
    <input type="text" name="service"  required>
</div>

<div class="selecte_box">
<label>Rapport</label>

<select name="raport"  style="padding: 0 5px;">
  <option value="obligatory">obligatory</option>
  <option value="not obligatory">not obligatory</option>: 
 </select>
 </div>
    <div class="input-box"> 
    <label>ِcity</label>

        <span class="icon"> <i class='bxbxs-lock-alt'></i></span>
        <input type="text" name="city" required>
</div>
<!--<div class="remember-forgot">
    <label><input type="checkbox"> I agree to the terms & conditions</label>
    
</div>-->
   <button type="submit"
      class="btn">Register</button>

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