function check()
{
    var count=0;
    var choice=document.querySelector(".choice").value;
    var questions=document.querySelector(".question").value;
    if(choice=="--Choose One Subject--")
        count=count+1;
    if(questions=="--Number Of Question--")
        count=count+1;
    if(count>0)
        return false;
    else
        return true;
}