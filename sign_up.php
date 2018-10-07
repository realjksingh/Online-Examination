<?php   
ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link href="css/login.css" rel="stylesheet">
</head>
<body>
  <div class="login">
    <div class="heading">
      <h1 class="text-center">New User Register </h1>
      <span class="incorrect">
        <?php if(isset($_GET["x"]))
        echo $_GET["x"];
      ?></span>
    </div>
    <hr>
    <form method="post" role="form" onsubmit="return somefunction()" action="sign_up2.php">
      <label for=username>Enter Username</label>
      <input name="username" id="username" type="username" placeholder="Username" autofocus>
      <span class="username"></span>
      <label for="name">Enter Name</label>
      <input name="name" id="name" type="name" placeholder="Name" autofocus> 
      <label for="email">Enter E-Mail</label>
      <input name="email" id="email" type="email" placeholder="E-mail" autofocus>
      <span class="email"></span>
      <label for="password">Enter Password</label>
      <input name="password" id="password" type="password" placeholder="Password" autofocus> 
      <label for="cpassword">Confirm Password</label>
      <input name="cpassword" id="cpassword" type="password" placeholder="Confirm Password" autofocus>
      <button class="button" type="submit">Sign Up</button>
    </form>
    <hr> 
  </div>
  <script src="js/sign_up.js"></script>
</body>
</html>