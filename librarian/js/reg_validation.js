function validate_reg()
{
var letters = /^[A-Za-z]+$/;
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 

if(document.registration.f_name.value == "")
	{
		alert("please enter first name");
		document.registration.f_name.focus();
		return false;
	}
else if(!(document.registration.f_name.value.match(letters)))

/*The match() method searches a string for a match against a regular expression, and returns the matches, as an Array object.*/
	
	{
		alert("First name must have alphabet characters only");
		document.registration.f_name.focus();
		return false;
	}
else if(document.registration.l_name.value == "")
	{
		alert("please enter last name");
		document.registration.l_name.focus();
		return false;
	}
else if(!(document.registration.l_name.value.match(letters)))
	{
		alert("Last name must have alphabet characters only");
		document.registration.l_name.focus();
		return false;
	}

else if(document.registration.username.value == "")
	{
		alert("please enter username");
		document.registration.username.focus();
		return false;
	}

else if(document.registration.password.value == "")
	{
		alert("please enter password");
		document.registration.password.focus();
		return false;
	}

else if(document.registration.email.value == "")
	{
		alert("please enter email id");
		document.registration.email.focus();
		return false;
	}
else if(!(document.registration.email.value.match(mailformat)))  
	{  
		alert("You have entered an invalid email address!");  
		document.registration.email.focus();  
		return false; 
	}  
else if(document.registration.contact.value == "")
	{
		alert("please enter mobile number");
		document.registration.contact.focus();
		return false;
	}
else if(isNaN(document.registration.contact.value)||document.registration.contact.value.indexOf(" ")!=-1)

/*The isNaN() function determines whether a value is an illegal number (Not-a-Number).
The indexOf() method returns the position of the first occurrence of a specified value in a string.It is case sensitive.
This method returns -1 if the value to search for never occurs.*/

			{
              alert("mobile number must be numeric")
              return false; 
			}
else if ((document.registration.contact.value.length < 10) || (document.registration.contact.value.length > 10))
			{
                alert("mobile number must be of 10 digits");
                return false;
			}
else if ((document.registration.contact.value.charAt(0)!="9") && (document.registration.contact.value.charAt(0)!="8") && (document.registration.contact.value.charAt(0)!="7"))
           
/*The charAt() method returns the character at the specified index in a string.
The index of the first character is 0, the second character is 1, and so on.*/
		   
		   {
                alert("mobile number must start with 9 or 8 or 7");
                return false
           } 

else if (document.registration.sem.value=="") 
{
	alert("enter semester");
	document.registration.sem.focus();
	return false;
}
else if (document.registration.enrollmentno=="") 
{
	alert("Enter enrollment no.");
	document.registration.enrollmentno.focus();
	return false;
}
	return true

}

