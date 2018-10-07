<?php
	session_start();
	if(isset($_SESSION['logged_in']))
		require("final_index.php");
	else
		header("location:login.php");
?>
	<div class="wrap-3">
      	<hr>
    	<div class="container">
    		<div class="row">
    			<div class="col-11">
    				<div class="nav">
    					<ul>
    						<li><a href='index.php'>Home</a></li>
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
<div class="wrap-5" onload="init()">
    <hr>
    <div class="container">
    	<div class="row" id="tabs">
    		<ul >
    			<li class="detail"><a href='#detail' onclick="showTab(this)">Account Details</a></li>
    			<li class="changepassword active_li"><a href="#changepassword" onclick="showTab(this)">Change Password</a></li>
    		</ul>
    		<div class="col-12 hide" id="detail">
    			<form>
    		<?php
				$db=new mysqli("localhost","root","","project2");
				$name=$_SESSION['username'];
				$r=$db->query("select Name,Username,Email from users where Username='$name'");
				if($r->num_rows>0)
				{
				while($ques=mysqli_fetch_assoc($r))
				{
				$name=$ques["Name"];
				$username=$ques["Username"];
				$email=$ques["Email"];
					?>	
					<label for="name">Name</label>
      				<input id="name" type="text" placeholder=<?php echo "'$name'" ?> disabled >
      				<label for="username">Username</p></label>
      				<input id="username" type="text" placeholder=<?php echo "'$username'" ?> disabled >
					<label for="Email">E-mail</p></label>
      				<input id="email" type="email" placeholder=<?php echo "'$email'"?> disabled>
					<?php
				}
				}
				?>
      </form>
      </div>
			<div class="col-12 active" id="changepassword">
				<form method="POST" action='update.php' onsubmit="return somefunction()"">
					<label for="opassword">Old Password</p></label>
      		<input name="opassword" id="opassword" type="password" placeholder="Old Password">
      		<label for="npassword">New Password</p></label>
      		<input name="npassword" id="npassword" type="password" placeholder="New Password">
      		<label for="cpassword">Confirm Password</p></label>
      		<input name="cpassword" id="cpassword" type="password" placeholder="Confirm Password">
      		<button type='submit' value='Update'>Update</button>
        </form>
        <h2 class="match"><?php 
          if(isset($_GET['pass']))
              echo $_GET['pass'];

            ?></h2>
			</div>
		</div>
	</div>
</div>
<script src="js/update.js"></script>