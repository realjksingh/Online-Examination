<?php   
ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link href="css/login.css" rel="stylesheet"> 
<body>
  	<div class="login">
    	<hr>
    	<form method="post" role="form" onsubmit="return somefunction()" action="forget2.php">
      		<p>Password Reset mail has been send to you to reset the password. So kindly Click on the link provided in the email or just paste the link in the search bar to reset your password</p>
    	</form>
    	<hr>
  	</div>	
  <script link="js/forget1.js"></script>
</body>
</html>