<?php
session_start();
if(isset($_SESSION['logged_in']))
{?>
  <!DOCTYPE html>
  <html>
  <head>
    <link href="del.css" rel="stylesheet">
  </head>
  <body>
    <div class="login delete">
      <div class="heading">
        <h1 class="text-center">Delete Question</h1>
        <p><?php if(isset($_GET["x"]))
                  echo $_GET["x"];?></p>
      </div>
      <hr>
      <label for="subject" class="subject">Select Subject</label>
      <select name="subject" id="subject">
        <option disabled selected>--Choose subject--</option>
        <?php 
          $db=new mysqli("localhost","root","","project2");
          $n=$db->query("select subject from question group by subject");
          if($n->num_rows>0)
            while($options=mysqli_fetch_assoc($n))
              echo "<option>$options[subject]</option>";
        ?>
      </select>
      <hr>
      <form method="post" role="form" action="qdelete.php">
        <div class="question">

        </div>
      </form>
    </div>
    <script>
      document.querySelector('select').addEventListener("change",function()
      {
        var obj, dbParam,xmlhttp;
        var x=document.querySelector('select').value;
        obj = { "table":"question","type":x};
        dbParam = JSON.stringify(obj);
        xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() 
        {
          var newcontent='';
          document.querySelector('.question').innerHTML=newcontent;
          if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
          {
            var de=JSON.parse(xmlhttp.responseText);
            for(i in de)
            {
              newcontent +='<label><input type="checkbox" name="'+de[i].S_NO+'">'+de[i].Name+'</label>';
            }
            newcontent+='<button class="btn btn-block bt-login" type="submit">Delete</button>';
          }
          newcontent+='<hr><a href="aindex.php">Go To Index Page</a>';
      
          document.querySelector('.question').innerHTML=newcontent;
        }
        xmlhttp.open("GET", "questiondata.php?x=" + dbParam, true);
        xmlhttp.send();
      });

    </script>
  </body>
  </html>
<?php
}
else
  header("location:../alogin.php");
?>