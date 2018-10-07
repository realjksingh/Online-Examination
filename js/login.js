document.querySelector("#username").addEventListener("keyup",function somefunction()
{ 
  var regex = /^[a-zA-Z0-9]{6,}$/;
  var x=document.querySelector("#username").value;
  x=x.toLowerCase();  
  console.log(x);
  var strarr=new Array();
  strarr=x.split(" ");
  if(x.trim()=="")
    document.querySelector("#username").value=strarr[0];
  else if(regex.test(x) == false) 
    document.querySelector("#username").value=strarr[0];
  else
    document.querySelector("#username").value=strarr[0];
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
    document.querySelector("#password").value=strarr[0];
  else
    document.querySelector("#password").value=strarr[0];
});    