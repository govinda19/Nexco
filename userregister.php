<?php include('userserver.php'); ?>
<!DOCTYPE html>
<html>
<head>
   <title>User registration system PHP and MySQL</title>
   <link rel="stylesheet" type="text/css" href="style.css">
   <title>NEXCO-Home</title>
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
          <h2>YOUR HEALTH IS OUR PRIORITY.</h2>
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
       <h2>Register</h2>
   </div>
   
   <form method="post" action="userregister.php">
   <!-- display validation errors here -->
   <?php include('usererrors.php'); ?>
       <div class="input-group">
	       <label>Username</label>
		   <input type="text" name="username" value="<?php echo $username; ?>">
	   </div>
	   <div class="input-group">
	       <label>Email</label>
		   <input type="text" name="email" value="<?php echo $email; ?>">
	   </div>
	   <div class="input-group">
	       <label>Password</label>
		   <input type="password" name="password_1">
	   </div>
	   <div class="input-group">
	       <label>Confirm Password</label>
		   <input type="password" name="password_2">
	   </div>
	   <div class="input-group">
		   <button type="submit" name="register" class="btn">Register</button>
	   </div>
	   <p>
	        Already a member? <a href="userlogin.php">Sign in</a>
	   </p>
   </form>
   
 </body>
 </html>