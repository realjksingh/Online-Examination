<?php
    use PHPMailer\PHPMailer\PHPMailer;
    require 'vendor/autoload.php';
    if(($_SERVER['REQUEST_METHOD'] == 'POST'))
    {
        session_start();
        $db=new mysqli("localhost","root","","project2");
        $user=$_POST["username"];
        $pass=$_POST["password"];
        $name=$_POST["name"];
        $email=$_POST["email"];
        $cpass=$_POST["cpassword"];
        $n=$db->query("select Username,Email from users where Username='$user' or Email='$email'");
        if(mysqli_num_rows($n)>0)
            header("location:sign_up.php?x=Username or Email already exists");
        else
   	    {
            if(preg_match('/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/', $email)&&preg_match('/[A-Za-z ]{2,}/', $name)&&preg_match('/[A-Za-z0-9]{6,}/', $user)&&preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#",$pass)&&$pass==$cpass)
            {
                $mail = new PHPMailer(true);
                $mail->SMTPOptions = array(
                'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
                )
                );                                 
                $mail->isSMTP();                                      
                $mail->Host = 'smtp.gmail.com';  
                $mail->SMTPAuth = true;                          
                $mail->Username = '';    #email id
                $mail->Password = '';     #password     
                $mail->SMTPSecure = 'tls';         
                $mail->Port = 587;      
                $mail->setFrom('', 'Quiz');  #email id
                $mail->addAddress($email, $name);          
                $mail->isHTML(true); 
                $mail->Subject = 'Here is the subject';
                $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                if(!$mail->Send()) 
                    header("location:sign_up.php?x=Not a valid Email address");   
                else
                {
                    $db->query("insert into users values('','$name','$user','$email','$pass')");
                    $_SESSION['logged_in']=$name;
                    $_SESSION['username']=$user;
                    header("location:index.php"); 
                }
            }
            else
            {
                header("location:sign_up.php?x=Wrong Format");   
            }
   	    }
    }
    else
        header('location:sign_up.php');	
?>
