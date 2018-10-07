<?php
	session_start();
    $db=new mysqli("localhost","root","","project2");
    $opass=$_POST["opassword"];
    $npass=$_POST["npassword"];
    $cpass=$_POST["cpassword"];
    $n=$db->query("select Password from users where Username='$_SESSION[username]'");
    if(mysqli_num_rows($n)>0)
    {   
        $password=mysqli_fetch_assoc($n);
        if($password[Password]==$opass)
        {  
            $n=$db->query("update users set Password='$npass' where Username='$_SESSION[username]'");
            header('location:details.php?pass="Password Changed Sucessfull"');
        }
        else
            header('location:details.php?pass="Current Password Does not match"');    
    }
?>
