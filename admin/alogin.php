<?php   
ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <link href="..\css\login.css" rel="stylesheet">
</head>
<body>
  <div class="login">
    <div class="heading">
        <h1 class="text-center">Admin Login </h1>
        <span class="incorrect">
        <?php if(isset($_GET["x"]))
          echo "Invalid Username or password";
        ?></span>
    </div>
    <hr>
    <form method="post" role="form" action="alogin2.php">
      <label for=username>Username</label>
      <input name="username" id="username" type="text" placeholder="Enter Username" autofocus> 
      <span></span>
      <label for=email>Password</label>
      <input name="password" id="password" type="password" placeholder="Enter Password"> 
      <button class="btn btn-block bt-login" type="submit">Sign in</button>
    </form>
    <hr>
    <p><a href="forget.php">Forget Password</a></p>
  </div>  
  <script src="../js/login.js"></script>
</body>
</html>