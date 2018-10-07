
document.querySelector("#npassword").addEventListener("keyup",function somefunction()
{ 
  var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
  var x=document.querySelector("#npassword").value;
  var strarr=new Array();
  strarr=x.split(" ");
  if(x.trim()=="")
    document.querySelector("#npassword").value=strarr[0];
  else if(strongRegex.test(x) == false)
  { 
    document.querySelector("#npassword").style.border="2px solid #ec5151";
    document.querySelector("#npassword").style.background="#ec5151";
    document.querySelector("#npassword").value=strarr[0];
  }
  else
  {
    document.querySelector("#npassword").style.border="2px solid #1bc516";
    document.querySelector("#npassword").style.background="#1bc516";
  }
});
document.querySelector("#cpassword").addEventListener("keyup",function somefunction()
{ 
  var x=document.querySelector("#npassword").value;
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
function somefunction()
{
  var count=0;
  var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
  var b=document.querySelector("#npassword").value;
  var f=document.querySelector("#cpassword").value;
  var e=document.querySelector("#opassword").value;
  if(strongRegex.test(b)==false)
  { 
    document.querySelector("#npassword").style.border="2px solid #ec5151";
    document.querySelector("#npassword").style.background="#ec5151";
    count++;
  }
  if(f!=b)
    count++;
  if(e.trim()=="")
    count++;
  if(count>0)
    return false;
  else
    return true;
}
var tabLinks=new Array();
var contentDivs=new Array();
contentDivs[0]='#detail';
contentDivs[1]='#changepassword';
tabLinks[0]='.detail';
tabLinks[1]='.changepassword';
function showTab(e) 
{
	var selectedId = e.getAttribute('href');
	console.log(selectedId);
	for ( var i=0;i<contentDivs.length;i++ )
	{	
		if(contentDivs[i]==selectedId) 
        {
        	document.querySelector(selectedId).classList.remove("hide");
			document.querySelector(selectedId).classList.add("active");
			document.querySelector(tabLinks[i]).classList.add("active_li");
		}
        else 
  		{
  			document.querySelector(contentDivs[i]).classList.remove("active");
         	document.querySelector(contentDivs[i]).classList.add("hide");
         	document.querySelector(tabLinks[i]).classList.remove("active_li");
		}
	}
	return false;
}
