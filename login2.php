<?php
    session_start();
    $db=new mysqli("localhost","root","","project2");
    $pass=$_POST["password"];
    $username=$_POST["username"];
    $n=$db->query("select Name,Username from users where Username='$username' and Password='$pass'");
    if(mysqli_num_rows($n)>0)
    {	
      $name=mysqli_fetch_assoc($n);
      $_SESSION['logged_in']=$name[Name];
      $_SESSION['username']=$name[Username];
      header("location:index.php");
    }
    else
   	{
   		header("location:login.php?x='Invalid Username Or Password'");
   	}	
?>
