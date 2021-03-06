<?php include('userserver.php'); ?>
<!DOCTYPE html>
<html>
<head>
   <title>User registration system PHP and MySQL</title>
   <link rel="stylesheet" type="text/css" href="style.css">
   <title>NEXCO</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>
<body>
 <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html"><span class="logo_colour">NEXCO</span></a></h1>
          <h2>Your Health Is Our Priority.</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="selected"><a href="index.html">HOME</a></li>
		</ul>
     </div>
 </div>

   <div class="header">
       <h2>Login</h2>
   </div>
   
   <form method="post" action="userlogin.php">
        <!-- display validation errors here -->
        <?php include('usererrors.php'); ?>
		<img src="log.png" height:"20px" margin:"20px"/>
       <div class="input-group">
	       <label>Username</label>
		   <input type="text" name="username">
	   </div>
	   <div class="input-group">
	       <label>Password</label>
		   <input type="password" name="password">
	   </div>
	   <div class="input-group">
		   <button type="submit" name="login" class="btn">Login</button>
	   </div>
	   <p>
	        Not yet a member? <a href="userregister.php">Sign up</a>
	   </p>
   </form>
   
 </body>
 </html>