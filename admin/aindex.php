<?php
session_start();
if(isset($_SESSION['logged_in']))
{?>
	<!DOCTYPE html>
	<html>
	<head>
		<link href="../css/main.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrap-1">
      <div class="container">
        <div class="row">
          <p>Welcome To Admin Panel</p>
        </div>
      </div>
      <hr>
    </div>
    <div class="wrap-2">
      <div class="container">
        <div class="row">
        	<div class="col-6">
            <div class="logo">
              <h1>Admin Panel</h1>
              <p>Welcome To Admin Panel</p>
            </div>
          </div>
          <div class="col-6">
            <div class="log-in">
              <pre>Hello <?php echo $_SESSION['logged_in'];?></pre></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="wrap-3">
      <hr>
    	<div class="container">
    		<div class="row">
    			<div class="col-11">
    				<div class="nav">
    					<ul>
                <li><a href="addquestion/adquestion.php">Add New Question</a></li>
                <li><a href="deletequestion/delquestion.php">Delete Question</a></li>  
        <?php 
              if(isset($_SESSION['alogin']))
                if($_SESSION['alogin']=='Super')
          echo '<li><a href="asignup.php">New Member</a></li>';
                ?>
                <li><a href="logout.php">Logout</a></li>  
              </ul>
            </div>
			    </div>
        </div>		 
      </div>
    </div>	
</body>
</html>
<?php
}
else
	 header("location:alogin.php");
?>