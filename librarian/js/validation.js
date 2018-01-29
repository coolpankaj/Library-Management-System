
function validate_login()
{
var letters = /^[A-Za-z]+$/;

if(document.login.username.value == "")
	{
		alert("please enter username");
		document.login.username.focus();
		return false;
	}
else if(!(document.login.username.value.match(letters)))

/*The match() method searches a string for a match against a regular expression, and returns the matches, as an Array object.*/
	
	{
		alert("Username must have alphabet characters only");
		document.login.username.focus();
		return false;
	}

else if (document.login.password.value=="") 
{
			alert("Password must be enter.");
			document.login.password.focus();
			return false;
}
	return true
}
/****************************************************************/




