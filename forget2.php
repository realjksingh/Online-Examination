<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
if(($_SERVER['REQUEST_METHOD'] == 'POST')) 
{ 
  	ob_start();
  	session_start();
  	$email=$_POST["email"];
  	$db=new mysqli("localhost","root","","project2");
  	$n=$db->query("select Email,Name from users where Email='$email'");
  	if(mysqli_num_rows($n)>0)
  	{	 
		$cookie_value=mt_rand(1000,9999);
		$cookie_value=md5($cookie_value);
  		$name=mysqli_fetch_assoc($n);
  		$n=$db->query("update users set random_string='$cookie_value' where Email='$email'");
    	$_SESSION["remail"]=$email;
  		error_reporting(0);	
		$mail = new PHPMailer(true);                            
		try 
		{
    		$mail->SMTPOptions = array(
    		'ssl' => array(
        	'verify_peer' => false,
        	'verify_peer_name' => false,
        	'allow_self_signed' => true
    		)
    		);
    		//$mail->SMTPDebug = 2;
    		$mail->isSMTP(); 
    		$mail->Host = 'smtp.gmail.com';
    		$mail->SMTPAuth = true;  
    		$mail->Username = '';   #email id 
    		$mail->Password = '';    #pasword    
    		$mail->SMTPSecure = 'tls';
    		$mail->Port = 587;
    		$mail->setFrom('', 'Quiz');   #email id
    		$mail->addAddress($email, $name[Name]);
    		$mail->isHTML(true);
    		$mail->Subject = 'Passwosrd Reset Request';
    		$mail->Body    = "The link to reset your password<br>";
    		$mail->Body   .= "<a href='forget3.php?reset=$cookie_value'>forget3.php?reset=$cookie_value</a>";
			$mail->send();
		} 
		catch (Exception $e) 
		{
		}
	?>
		<!DOCTYPE html>
		<html>
		<head>
			<link href="css/login.css" rel="stylesheet"> 
		</head>
		<body>
  		<div class="login">
    		<hr>
    		<form method="post" role="form">
      			<p>Password Reset mail has been send to you to reset the password. So kindly Click on the link provided in the email or just paste the link in the search bar to reset your password</p>
      			<?php
      			 echo "<a href='forget3.php?reset=$cookie_value'>Click Here</a>"
      			 ?>
    		</form>
    		<hr>
  		</div>	
		</body>
		</html>
	<?php
	} 
  	else
    	header("location:forget.php?x=Email is not registered");
}
else
{
  header("location:index.php");
}
?>