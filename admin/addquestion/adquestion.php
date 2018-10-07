<?php
session_start();
if(isset($_SESSION['logged_in']))
{?>
  <!DOCTYPE html>
  <html>
  <head>
    <link href="..\..\css\login.css" rel="stylesheet">
  </head>
  <body>
    <div class="login">
      <div class="heading">
        <h1 class="text-center">Add Question</h1>
        <p><?php if(isset($_GET["x"]))
                  echo $_GET["x"];?>
        </p>
      </div>
      <hr>
      <form method="post" role="form" onsubmit="return somefunction()" action="qinsert.php">
        <label for="subject">Enter Subject</label>
        <input name="subject" id="subject" type="text"placeholder="Enter Subject Name">
        <label for='question'>Enter Question</label>
        <input name="question" id="question" type="text" placeholder="Enter Question"> 
        <span></span>
        <label for="one">Enter First Option</label>
        <input name="one" id="one" type="text" placeholder="Enter First Option">
        <label for="second">Enter Second Option</label>
        <input name="second" id="second" type="text" placeholder="Enter Second Option">
        <label for="third">Enter Third Option</label>
        <input name="third" id="third" type="text" placeholder="Enter Third Option">
        <label for="fourth">Enter Fourth Option</label>
        <input name="fourth" id="fourth" type="text" placeholder="Enter Fourth Option">
        <label for="correct">Enter Correct Option</label>
        <input name="correct" id="correct" type="text" placeholder="Enter Correct Option{option2/option3)">
        <button type="submit">Insert</button>
      </form>
      <hr>
      <a href="aindex.php">Go To index page</a> 
    </div>
  	<script>
  	function somefunction()
    {
      var count=0;
      var a=document.querySelector("#subject").value;
      var b=document.querySelector("#question").value;
      var c=document.querySelector("#one").value;
      var d=document.querySelector("#second").value;
      var f=document.querySelector("#third").value;
      var g=document.querySelector("#fourth").value;
      var h=document.querySelector("#correct").value;
      if(a==""||b==""||c==""||d==""||f==""||g==""||h=="")
    		count++;
    	if(a.trim()==""||b.trim()==""||c.trim()==""||d.trim()==""||f.trim()==""||g.trim()==""||h.trim()=="")
      	count++;
      if(count>0)
        return false;
      else
    		return true;
    }	
  	</script>
  </body>
  </html>
<?php
}
else
	 header("location:../alogin.php");
?>