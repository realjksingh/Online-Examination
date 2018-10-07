document.querySelector("#email").addEventListener("keyup",function somefunction()
{ 
  var email = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;
  var x=document.querySelector("#email").value;
  var strarr=new Array();
  strarr=x.split(" ");
  if(x.trim()=="")
   document.querySelector("#email").value=strarr[0];
  else if(email.test(x) == false)
    document.querySelector("#email").value=strarr[0];
  else
   document.querySelector("#email").value=strarr[0];
});
function somefunction()
{
  var count=0;
  var email = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;
  var d=document.querySelector("#email").value;
  if(email.test(d)==false)
    count++;
  if(count>0)
    return false;
  else
    return true;
}