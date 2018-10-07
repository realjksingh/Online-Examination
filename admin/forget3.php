<?php  
ob_start();
session_start();
$db=new mysqli("localhost","root","","project2");
if(isset($_SESSION["remail"]))
{
	$email=$_SESSION["remail"];
	if(isset($_GET['reset']))
	{
    	$n=$db->query("select random_string from admin where Email='$email'");
    	if(mysqli_num_rows($n)>0)
    	{ 
      		$name=mysqli_fetch_assoc($n);
      		if($_GET['reset']==$name['random_string'])
      		{    
    		?>  
        		<!DOCTYPE html>
        		<html>
        		<head>
          			<link href="../css/login.css" rel="stylesheet">
        		</head>
        		<body>
          		<div class="login">
            		<div class="heading">
              			<h1 class="text-center">Reset Password</h1>
            		</div>
            		<hr>
            		<form method="post" role="form" action="forget4.php">
              			<label for=password>Password</label>
              			<input name="password" id="password" type="password" placeholder="Enter Password" autofocus>  
              			<label for=cpassword>Confirm Password</label>
              			<input name="cpassword" id="cpassword" type="password" placeholder="Confirm Password" autofocus>
              			<button type="submit">Login</button>
            		</form>
            		<hr>
          		</div>  
          		<script src="../js/forget2.js"></script>
        		</body>
        		</html>
      		<?php
      		} 
      		else
        		header("location:forget.php?x=You Entered/Copied an Wrong Link");
    	}
    	else
  			header("location:forget.php?");
	}
	else
		header("location:forget.php?");
}
else
	header("location:aindex.php");
?>
