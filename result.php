<?php
session_start();
if(isset($_SESSION['logged_in'])&&($_SERVER['REQUEST_METHOD'] == 'POST'))
  {
      require('final_index.php');
?>
      <div class="wrap-3">
      <hr>
      <div class="container">
      <div class="row">
        <div class="col-11">
    		  <div class="nav">
    				<ul>
    					<li><a href="index.php">Home</a></li>
    					<?php
                if(isset($_SESSION['logged_in'])) 
              { ?>
                <li><a href="details.php">Your Account</a></li>
                <li><a href="logout.php">Logout</a></li>
              <?php
              }
                else
              { ?>
                <li><a href="login.php">login</a></li>
              <?php
              }?>
    				</ul>
					</div>
				</div>
			</div>
		  </div>
      </div>
      <div class="result">
      <?php
        $i=0;
        $db=new mysqli("localhost","root","","project2");
        $subject=$_GET['subject'];
        echo "<div class='showtime1'>";
        foreach($_POST as $key=>$value)
        {  
          $i++;
          $r=$db->query("select * from question where subject='$subject' and S_NO='$key'");
          if($r->num_rows>0)
          {
            while($ques=mysqli_fetch_assoc($r))
            {
              echo '<h3>'.$ques['Name']."</h3>";
              if($ques['ans']==$value)
                echo "<p class='correct'>".$ques[$value]."</p>";
              else
                echo "<p class='incorrect'>".$ques[$value]."</p>";
            } 
          }
          echo "<hr>";
        }
        echo "</div>";
  }
  else
    header('location:index.php');  
?>