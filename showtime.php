<?php
session_start();
	if(isset($_SESSION['logged_in'])&&($_SERVER['REQUEST_METHOD'] == 'POST'))
	{
		require('final_index.php');
		$subject=$_POST["subject"];
		$no=$_POST["question"];
		$i=1;
		$db=new mysqli("localhost","root","","project2");
		$r=$db->query("select Name,option1,option2,option3,option4,S_No from question where subject=\"$subject\" order by rand() limit $no ");
		echo "<div class='showtime'>";
		echo "<form action='result.php?subject=$subject' method=post id='form'>";
		if($r->num_rows>0)
		{
			while($ques=mysqli_fetch_assoc($r))
			{	
				echo "<div class='showtime1'>";
				echo "<h3>Ques ".$ques['S_No']." ".$ques['Name']."</h3>";
				echo "<p><input type='radio' name='".$ques["S_No"]."' value='option1'>$ques[option1]</p>";
				echo "<p><input type='radio' name='".$ques["S_No"]."' value='option2'>$ques[option2]</p>";
				echo "<p><input type='radio' name='".$ques["S_No"]."' value='option3'>$ques[option3]</p>";
				echo "<p><input type='radio' name='".$ques["S_No"]."' value='option4'>$ques[option4]</p>";
				echo "</div>";
				echo "<hr>";
				$i++;
			}
		}
		echo "<button class='submit' type='submit' value='Calculate'>Calculate</button>";
		echo "</form>";
		echo "</div>";
		echo "<script src='js/showtime.js'></script>";
	}
	else
		header("location:index.php");
?>