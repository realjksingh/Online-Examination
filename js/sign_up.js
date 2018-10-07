document.querySelector("#username").addEventListener("keyup",function somefunction()
{ 
  var regex = /^[a-zA-Z0-9]{6,}$/;
  var x=document.querySelector("#username").value;
  x=x.toLowerCase();
  var strarr=new Array();
  strarr=x.split(" ");
  if(x.trim()=="")
    document.querySelector("#username").value=strarr[0];
  else if(regex.test(x) == false)
  { 
    document.querySelector("#username").style.border="2px solid #ec5151";
    document.querySelector("#username").style.background="#ec5151";
    document.querySelector("#username").value=strarr[0];
  }
  else
  {
    document.querySelector("#username").style.border="2px solid #1bc516";
    document.querySelector("#username").style.background="#1bc516";
    document.querySelector("#username").value=strarr[0];
  }
});
document.querySelector("#name").addEventListener("keyup",function somefunction()
{ 
  var regex = /^[a-zA-Z ]{2,30}$/;
  var x=document.querySelector("#name").value;
  if(regex.test(x) == false)
  {
    document.querySelector("#name").style.border="2px solid #ec5151";
    document.querySelector("#name").style.background="#ec5151";
  }
  else
  {
    document.querySelector("#name").style.border="2px solid #1bc516";
    document.querySelector("#name").style.background="#1bc516";
  }
});
document.querySelector("#email").addEventListener("keyup",function somefunction()
{ 
  var email = /^[a-z0-9._%+-]+@[a-z0-9.-].[a-z]{2,}$/;
  var x=document.querySelector("#email").value;
  x=x.toLowerCase();
  var strarr=new Array();
  strarr=x.split(" ");
  if(x.trim()=="")
    document.querySelector("#email").value=strarr[0];
  else if(email.test(x) == false)
  { 
    document.querySelector("#email").style.border="2px solid #ec5151";
    document.querySelector("#email").style.background="#ec5151";
    document.querySelector("#email").value=strarr[0];
  }
  else
  {
    document.querySelector("#email").style.border="2px solid #1bc516";
    document.querySelector("#email").style.background="#1bc516";
    document.querySelector("#email").value=strarr[0]; 
  }
});
document.querySelector("#password").addEventListener("keyup",function somefunction()
{ 
  var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
  var x=document.querySelector("#password").value;
  var strarr=new Array();
  strarr=x.split(" ");
  if(x.trim()=="")
    document.querySelector("#password").value=strarr[0];
  else if(strongRegex.test(x) == false)
  { 
    document.querySelector("#password").style.border="2px solid #ec5151";
    document.querySelector("#password").style.background="#ec5151";
    document.querySelector("#password").value=strarr[0];
  }
  else
  {
    document.querySelector("#password").style.border="2px solid #1bc516";
    document.querySelector("#password").style.background="#1bc516";
  }
});
document.querySelector("#cpassword").addEventListener("keyup",function somefunction()
{ 
  var x=document.querySelector("#password").value;
  var y=document.querySelector("#cpassword").value;
  var strarr=new Array();
  strarr=x.split(" ");
  if(x.trim()=="")
    document.querySelector("#cpassword").value=strarr[0];
  else if(x!=y)
  {
    document.querySelector("#cpassword").style.border="2px solid #ec5151";
    document.querySelector("#cpassword").style.background="#ec5151";
  }
  else
  {
    document.querySelector("#cpassword").style.border="2px solid #1bc516";
    document.querySelector("#cpassword").style.background="#1bc516";
  }
});
document.querySelector("#username").addEventListener("blur",function somefunction()
{ 
  var count=0;
  var regex = /^[a-zA-Z ]{2,30}$/;
  var x=document.querySelector("#username").value;
  var obj, dbParam, xmlhttp;
  obj = { "table":"users"};
  dbParam = JSON.stringify(obj);
  xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() 
  {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
    {
      var de=JSON.parse(xmlhttp.responseText);
      for(i in de)
        if(de[i].Username==x)
              count++;
      if(regex.test(x)==true)
      {
        if(count>0)
        {
          document.querySelector("#username").style.border="2px solid #ec5151";
          document.querySelector("#username").style.background="#ec5151";
          document.querySelector(".username").innerText="This Username Is Not Available ";
        }
        else
        {
          document.querySelector("#username").style.border="2px solid #1bc516";
          document.querySelector("#username").style.background="#1bc516";
          document.querySelector(".username").innerText="This Username Is Available "; 
        }  
      }
    }
  };
  xmlhttp.open("GET", "user.php?x=" + dbParam, true);
  xmlhttp.send();
});
document.querySelector("#email").addEventListener("blur",function somefunction()
{ 
  var count=0;
  var x=document.querySelector("#email").value;
  var email = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;
  var obj, dbParam, xmlhttp;
  obj = { "table":"users"};
  dbParam = JSON.stringify(obj);
  xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() 
  {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
    {
      var de=JSON.parse(xmlhttp.responseText);
      for(i in de)
        if(de[i].Email==x)
          count++;
      if(email.test(x)==true)
      {
        if(count>0)
        {
          document.querySelector("#email").style.border="2px solid #ec5151";
          document.querySelector("#email").style.background="#ec5151";
          document.querySelector(".email").innerText="This Email Is Not Available ";
        }
        else
        {
          document.querySelector("#email").style.border="2px solid #1bc516";
          document.querySelector("#email").style.background="#1bc516";
          document.querySelector(".email").innerText="This Email Is Available "; 
        }  
      }
    }
  };
  xmlhttp.open("GET", "email.php?x=" + dbParam, true);
  xmlhttp.send();
});
function somefunction()
{
  var count=0;
  var regex = /^[a-zA-Z0-9]{6,}$/;
  var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
  var name = /^[a-zA-Z ]{2,}$/;
  var email = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;
  var a=document.querySelector("#username").value;
  var b=document.querySelector("#password").value;
  var c=document.querySelector("#name").value;
  var d=document.querySelector("#email").value;
  var f=document.querySelector("#cpassword").value;
  if(regex.test(a)==false)
  { 
    document.querySelector("#username").style.border="2px solid #ec5151";
    document.querySelector("#username").style.background="#ec5151";
    count++;
  }
  if(strongRegex.test(b)==false)
  { 
    document.querySelector("#password").style.border="2px solid #ec5151";
    document.querySelector("#password").style.background="#ec5151";
    count++;
  }
  if(name.test(c)==false)
  { 
    document.querySelector("#password").style.border="2px solid #ec5151";
    document.querySelector("#password").style.background="#ec5151";
    count++;
  }
  if(email.test(d)==false)
  { 
    document.querySelector("#password").style.border="2px solid #ec5151";
    document.querySelector("#password").style.background="#ec5151";
    count++;
  }
  if(f!=b)
    count++;
  if(count>0)
    return false;
  else
    return true;
}