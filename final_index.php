<?php 
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link href="css/main.css" rel="stylesheet">
</head>
<body>
	<div class="wrap-1">
    <div class="container">
      <div class="row">
        <p>One Place To Test Your Knowledge</p>
      </div>
    </div>
    <hr>
  </div>
  <div class="wrap-2">
    <div class="container">
      <div class="row">
        <div class="col-6">
          <div class="logo">
            <h1>Online Test</h1>
            <p>One Place to Test Your Knowledge</p>
          </div>
        </div>
        <div class="col-6">
        	<div class="log-in">
        	<?php
            if(isset($_SESSION['logged_in'])) 
              echo "<pre>Hello $_SESSION[logged_in]</pre></a>";
						else
              echo "<pre>Welcome User</pre></a>";
          ?>
          </div>
        </div>
      </div>
    </div>
  </div>	