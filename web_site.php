<!DOCTYPE html>
   <html lang="en">
     <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Website internship</title>
       <link rel="stylesheet" href="desing.css">
       <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
     </head>
     <body>

   <header class="header">
       <a href="#" class="Logo"><i class='bx bx-buildings'></i><span>S</span>tudent-<span>i</span>nternship </a>
        <nav class="navbar">
          <button class="bntLogin-popup">student</button>
          <button class="BntLogin-popup">Admin</button>
         
        </nav>
   </header>

   <section class="home" >
      <div class="text-sci">
            <h2>Welcome! <br>
          <span>To Our New Website</span></h2>
            <p> your first step for work.</p>
      </div> 
   </section> 
   <section class="section">
      <div class="wrapper" >
           <span class="icon-close"><i class='bx bx-x'></i></span>
         <div class="logreg-box">
<!-- login form-->
<div class=" form-box login">
<div class="logreg-title">
<h2>Login</h2>
<p>please login to use the platform </p>
</div>
<form action="Login.php" method="post">
<div class="input-box"> 
<span class="icon"><i class='bx bxs-envelope'></i></span>
<input  name="Email" type="email" required>
<label>Email</label>
</div>
<div class="input-box"> 
<span class="icon"><i class='bx bxs-lock-alt'></i></span>
<input  name="Password" type="password" required>
<label>Password</label>
</div>
<button type="submit" class="btn">Login</button>
<div class="logreg-link">
<p>D'ont have an account?<a href="#" class="register-link"> Sign Up</a></p>
</div>
</form>
</div>
<!--register form -->
<div class=" form-box register">
<div class="logreg-title">
<h2>Sign UP</h2>
<p>please provide the following to verify your identity</p>
</div>
<form action="SignUP.php" method="post">
<div class="input-box"> 
<span class="icon"><i class='bx bxs-user'></i></span>
<input name="Fullname" type="text" required>
<label>Full Name</label>
</div>
<div class="input-box"> 
<span class="icon"><i class='bx bxs-envelope'></i></span>
<input type="email" name="email" required>
<label>Email</label>
</div>
<div class="input-box"> 
<span class="icon"><i class='bx bxs-lock-alt'></i></span>
<input type="password" name="password" required>
<label>Password</label>
</div>
<button type="submit" class="btn">Sign UP</button>
<div class="logreg-link">
<p>Already have an account?<a href="" class="login-link"> Login</a></p>
</div>
</form>
</div>
</div>
</div>
</section> 

<script src="script.js"></script>

<footer>
<a href="#" onclick="switchToArabic()">العربية</a> | <a href="#" onclick="switchToEnglish()">English</a>
</footer>

<script>
function switchToArabic() {
    // قم بتغيير اللغة إلى العربية
    window.location.href = "index_ar.html";
}

function switchToEnglish() {
    // قم بتغيير اللغة إلى الإنجليزية
    window.location.href = "index_en.html";
}
</script>

</body>
</html>
