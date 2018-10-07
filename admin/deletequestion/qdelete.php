<?php
if(($_SERVER['REQUEST_METHOD'] == 'POST'))
{
	session_start();
    $db=new mysqli("localhost","root","","project2");
    foreach($_POST as $key => $value) 
    {
        $n=$db->query("delete from question where S_NO='$key'");
    }
    header("location:delquestion.php?x='Succesfully Deleted'");
}
else
{
	header("location:../aindex.php");
}
?>