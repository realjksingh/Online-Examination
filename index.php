<?php
session_start();
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
  <?php
	if(isset($_SESSION["logged_in"]))
	{?>
   <div class="wrap-4">
    <div class="container">
      <div class="row">
        <div class="col-4">
          <div>
          	<form method="post" role="form" onsubmit=" return check()" action="showtime.php">
          		<h2>Select The Subject</h2>
          		<select class="choice" name="subject">
          		  <option disabled selected>--Choose One Subject--</option>
          	<?php
          		$db=new mysqli("localhost","root","","project2");
          		$n=$db->query("select subject from question group by subject");
          		if($n->num_rows>0)
            	while($options=mysqli_fetch_assoc($n))
              echo "<option>$options[subject]</option>";
        		?>
        		  </select>
        			<h2>Number Of Question</h2>
        			<select class="question" name="question">
          		  <option disabled selected>--Number Of Question--</option>
        				<option>5</option>
        			</select>
        			<button type="submit">Show Time</button>
        		</form>
        	</div>
        </div>
      </div>
    </div>
  </div>
  <?php
  }
  ?>
 	<script src="js/index.js"></script>
</body>
</html>       	
