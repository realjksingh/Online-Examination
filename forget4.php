
<?php
if(($_SERVER['REQUEST_METHOD'] == 'POST'))
{
    session_start();
    $db=new mysqli("localhost","root","","project2");
    $pass=$_POST["password"];
    $email=$_SESSION["remail"];
    $n=$db->query("update users set Password='$pass' where Email='$email'");
    $n=$db->query("update users set random_string='NULL' where Email='$email'");
    $n=$db->query("select Name,Username from users where Email='$email'");
    $name=mysqli_fetch_assoc($n);
    $_SESSION['logged_in']=$name['Name'];
    $_SESSION['username']=$name['Username'];
    unset($_SESSION["remail"]);
    header("location:index.php");
}
else
    header('location:index.php');
?>