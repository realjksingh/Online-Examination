<?php   
ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <link href="css\login.css" rel="stylesheet">
</head>
<body>
  <div class="login">
    <div class="heading">
      	<h1 class="text-center">Online Test </h1>
      	<span class="incorrect">
        <?php if(isset($_GET["x"]))
      		echo "Invalid Username or password";
      ?></span>
    </div>
    <hr>
    <form method="post" role="form" action="login2.php">
      <label for=username>Username</label>
      <input name="username" id="username" type="text" placeholder="Enter Username" autofocus> 
      <span></span>
      <label for=email>Password</label>
      <input name="password" id="password" type="password" placeholder="Enter Password"> 
      <button type="submit">Sign in</button>
    </form>
    <hr>
    <p><a href="forget.php">Forget Password</a></p>
    <p><a href="sign_up.php" class="sign-up">Sign Up</a></p> 
  </div>	
  <script src="js/login.js"></script>
</body>
</html>