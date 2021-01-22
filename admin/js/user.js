function addUser() {
		var Name=document.myForm.name.value;  
		//var Gender=document.myForm.gender.value; 
		var Email=document.myForm.email.value;
		var Contact=document.myForm.contact.value;
		var City=document.myForm.city.value;
		var uName=document.myForm.uname.value;
		var Pass=document.myForm.pass.value;
		var conPass=document.myForm.conpass.value;
		
		atpos = Email.indexOf("@");
		dotpos = Email.lastIndexOf(".");
		
	
		if (Name == "" || (!isNaN(Name))) {
			document.myForm.name.focus();
			document.myForm.name.style.border="1px solid red";
			document.getElementById("msg1").innerHTML= " <img src='logo/unchecked.gif'/> Please enter a name"; 
	
		return false;
		}
		
	else{  
	document.getElementById("msg1").innerHTML=" <img src='logo/checked.gif'/>";  
	
	} 
	
	/*if(Gender=""){  
	document.myForm.gender.focus();
	document.myForm.gender.style.border="1px solid red";
	document.getElementById("msg2").innerHTML= " <img src='logo/unchecked.gif'/> Please select your gender";  
	
	return false; 
	}
	else{  
	document.getElementById("msg2").innerHTML=" <img src='logo/checked.gif'/>";  
	}*/
	
	if(Email=="" || atpos < 1 || ( dotpos - atpos < 2 )){
	document.myForm.email.focus();
	document.myForm.email.style.border="1px solid red";
	document.getElementById("msg3").innerHTML= " <img src='logo/unchecked.gif'/> Please provide your email ID in the format X@Y.Z";  
	
	return false; 	
	}
	else{
		document.getElementById("msg3").innerHTML=" <img src='logo/checked.gif'/>";
	}
	
	if(Contact=="" || isNaN(Contact) || Contact.length != 11){  
	document.myForm.contact.focus();
	document.myForm.contact.style.border="1px solid red";
	document.getElementById("msg4").innerHTML= " <img src='logo/unchecked.gif'/>Please provide a contact in the format ###########";  
	
	return false; 
	}
	else{  
	document.getElementById("msg4").innerHTML=" <img src='logo/checked.gif'/>";  
	}
	
	if(City =="0"){  
	document.myForm.city.focus();
	document.myForm.city.style.border="1px solid red";
	document.getElementById("msg5").innerHTML= " <img src='logo/unchecked.gif'/> Please select your city";  
	return false; 
	}
	else{  
	document.getElementById("msg5").innerHTML=" <img src='logo/checked.gif'/>";  
	}
	
	if(uName=="" || uName.length < 4){  
	document.myForm.uname.focus();
	document.myForm.uname.style.border="1px solid red";
	document.getElementById("msg7").innerHTML= " <img src='logo/unchecked.gif'/>Please enter an username of minimum 4 characters";  
	return false; 
	}
	else{  
	document.getElementById("msg7").innerHTML=" <img src='logo/checked.gif'/>";  
	}
	
	if(Pass=="" || Pass.length < 6){  
	document.myForm.pass.focus();
	document.myForm.pass.style.border="1px solid red";
	document.getElementById("msg8").innerHTML= " <img src='logo/unchecked.gif'/>Please enter a password of minimum 6 characters";  
	return false; 
	}
	else{  
	document.getElementById("msg8").innerHTML=" <img src='logo/checked.gif'/>";  
	}
	
	if(conPass==""){  
	document.myForm.conpass.focus();
	document.myForm.conpass.style.border="1px solid red";
	document.getElementById("msg9").innerHTML= " <img src='logo/unchecked.gif'/>Please write your password again";  
	return false; 
	}
	else if (conPass != Pass) {
	document.myForm.conpass.focus();
	document.myForm.conpass.style.border="1px solid red";
	document.getElementById("msg9").innerHTML= " <img src='logo/unchecked.gif'/>Password doesn't match. Type your password again";  
	return false;
	}
	else{  
	document.getElementById("msg9").innerHTML=" <img src='logo/checked.gif'/>";  
	}
	
	return true;  
			}