<?php
	session_start();
    $db=new mysqli("localhost","root","","project2");
    $one=$_POST["one"];
    $second=$_POST["second"];
    $third=$_POST["third"];
    $fourth=$_POST["fourth"];
    $answer=$_POST["correct"];
    $subject=$_POST["subject"];
    $question=$_POST["question"];
    $n=$db->query("select Name from question where Name='$question'");
    if(mysqli_num_rows($n)>0)
    {   
        header("location:adquestion.php?x='This Question Already Exist'");
    }
    else
    {
        $n=$db->query("insert into question values('','$question','$one','$second','$third','$fourth','$answer','$subject')");
        header("location:adquestion.php?x='Question Added Succesfully'");   
    }

?>