<?php
  session_start();
  $db=new mysqli("localhost","root","","project2");
  $pass=$_POST["password"];
  $username=$_POST["username"];
  $n=$db->query("select Name,Username,Category from admin where Username='$username' and Password='$pass'");
  if(mysqli_num_rows($n)>0)
  { 
    $name=mysqli_fetch_assoc($n);
    $_SESSION['logged_in']=$name[Name];
    $_SESSION['username']=$name[Username];
    $_SESSION['alogin']=$name[Category];
    header("location:aindex.php");
  }
  else
      header("location:alogin.php?x='Invalid Username Or Password'");
?>
