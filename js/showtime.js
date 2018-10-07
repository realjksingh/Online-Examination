function submitform()
{
	document.getElementById("form").submit();
}
var auto_refresh = setInterval(function() { submitform(); }, 20000);