<?php   
ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link href="../css/login.css" rel="stylesheet"> 
<body>
  	<div class="login">
    	<div class="heading">
      		<h1 class="text-center">Forget Password</h1>
          <span class="incorrect">
          <?php if(isset($_GET["x"]))
          echo $_GET['x'];
      ?></span>
    	</div>
    	<hr>
    	<form method="post" role="form" onsubmit="return somefunction()" action="forget2.php">
      		<label for="email">Enter E-mail</label>
      		<input name="email" id="email" type="email" placeholder="Enter email" autofocus>  
      		<button type="submit">Next</button>
    	</form>
    	<hr>
  	</div>	
  <script link="../js/forget1.js"></script>
</body>
</html>