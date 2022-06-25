function validateForm(){
	var a = document.forms["myForm"]["fname"].value;
	if (a ==""){
		alert("Full name must be filled out.");
		return false;
	}

	var b = document.forms["myForm"]["email"].value;
	if (b ==""){
		alert("Email must be filled out.");
		return false;
	}

	var c = document.forms["myForm"]["phone"].value;
	if (c ==""){
		alert("Phone must be filled out.");
		return false;
	}
	
	var d = document.forms["myForm"]["password"].value;
	if (d ==""){
		alert("Password must be filled out.");
		return false;
	}

	var e = document.forms["myForm"]["address1"].value;
	if (e ==""){
		alert("Address must be filled out.");
		return false;
	}

	var f = document.forms["myForm"]["city"].value;
	if (f ==""){
		alert("City must be filled out.");
		return false;
	}
	
	var g = document.forms["myForm"]["postal"].value;
	if (g ==""){
		alert("Postal code must be filled out.");
		return false;
	}
	
	else{
		alert("Resgistration Successful.");
	}

}
	
	