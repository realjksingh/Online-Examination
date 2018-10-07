document.querySelector("#password").addEventListener("keyup",function somefunction()
{ 
  var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
  var x=document.querySelector("#password").value;
  var strarr=new Array();
  strarr=x.split(" ");
  if(x.trim()=="")
    document.querySelector("#password").value=strarr[0];
  else if(strongRegex.test(x) == false)
    document.querySelector("#password").value=strarr[0];
  else
    document.querySelector("#password").value=strarr[0];
});
function somefunction()
{
  var count=0;
  var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
  var b=document.querySelector("#password").value;
  var f=document.querySelector("#cpassword").value;
  if(strongRegex.test(b)==false)
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