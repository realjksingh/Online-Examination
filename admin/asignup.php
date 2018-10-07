<?php   
ob_start();
session_start();
if($_SESSION['alogin']=='Super')
{
?>
<!DOCTYPE html>
<html>
<head>
	<link href="../css/login.css" rel="stylesheet">
</head>
<body>
  <div class="login">
    <div class="heading">
      <h1 class="text-center">New User Register </h1>
      <span class="incorrect">
        <?php if(isset($_GET["x"]))
          echo $_GET["x"];
        ?></span>
    </div>
    <hr>
    <form method="post" role="form" onsubmit="return somefunction()" action="asignup2.php">
      <label for=username>Enter Username</label>
      <input name="username" id="username" type="username" placeholder="Username" autofocus>
      <span class="username"></span>
      <label for="name">Enter Name</label>
      <input name="name" id="name" type="name" placeholder="Name" autofocus> 
      <label for="email">Enter E-Mail</label>
      <input name="email" id="email" type="email" placeholder="E-mail" autofocus>
      <span class="email"></span>
      <label for="password">Enter Password</label>
      <input name="password" id="password" type="password" placeholder="Password" autofocus> 
      <label for="cpassword">Confirm Password</label>
      <input name="cpassword" id="cpassword" type="password" placeholder="Confirm Password" autofocus>
      <label for="category">Category</label>
      <select name="category" id="category">
        <option disabled selected>--Choose Category--</option>
        <option value="Super">Super</option>
        <option value="Normal">Normal</option>
      </select>
      <button class="button" type="submit">Sign Up</button>
    </form>
    <hr> 
  </div>
  <script src="sign_up.js"></script>
</body>
</html>
<?php
}
else
  header("location:aindex.php");
?>