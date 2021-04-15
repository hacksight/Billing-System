function validate()
{
	if(document.getElementById("err_name").innerHTML=="")
	{if(document.getElementById("err_mail").innerHTML=="")
	{if(document.getElementById("err_psswd").innerHTML=="")
	{if(document.getElementById("err_cpsswd").innerHTML=="")
	{if(document.getElementById("err_phone").innerHTML=="")
	return true;
	}}}}
 	else
	{alert("Error");
         return false;}
}
//Name validation
function v_name()
{
	var patt1=/^[a-zA-Z\s]{3,}$/;
	var name=document.getElementById("name").value;
	if(fname.match(patt1))
	{var msg=document.getElementById("err_name");
	 msg.innerHTML="";
	  return true;
	}
	else
	{
	 var msg=document.getElementById("e_fname");
	 if(fname.length==0)
	{msg.innerHTML="required";}
	else
	 {msg.innerHTML="Invalid Name";}
	 msg.style.color="red";
	 return false;
	}
}
//Email validation
function v_email()
{
	var e_mail= document.getElementById("mail").value;
	var atratepos= e_mail.indexOf("@");
	var dotpos= e_mail.lastIndexOf(".");
	var len= e_mail.length;
	var dif_dot_len = len-dotpos;
	var dif_atrate_dot= dotpos- atratepos;
	if(dif_dot_len<3 || dif_atrate_dot <1 || atratepos <1)
	{
 	 var msg = document.getElementById("err_mail");
	 msg.innerHTML="Enter valid email Id";
	 msg.style.color="red";
	 return false;
	}
	else{
	 var msg=document.getElementById("err_mail");
	 msg.innerHTML="";
	 return true;
	}
}
//Password validation
function v_psswd()
{
	var patt1=/^(?=.*[a-z])(?=.*[0-9])(?=.*[@$%&#!]).{5,15}$/;
	var passwd=document.getElementById("password").value;
	if(passwd.match(patt1))
	{var msg=document.getElementById("err_psswd");
	 msg.innerHTML="";
	  return true;
	}
	else
	{
	 var msg=document.getElementById("err_psswd");
	 if(passwd.length==0)
	{msg.innerHTML="required";}
	else
	 {msg.innerHTML="Please enter valid password. It must include uppercase, lowercase,digit,special character";}
	 msg.style.color="red";
	 return false;
	}
}
//Confirm password
function v_cpsswd()
{
	var passwd=document.getElementById("password").value;
	var cpasswd=document.getElementById("cpassword").value;
	if(passwd==cpasswd)
	{var msg=document.getElementById("err_cpsswd");
	 msg.innerHTML="";
	  return true;
	}
	else
	{
	 var msg=document.getElementById("err_cpsswd");
	 msg.innerHTML="It must be same as password";
	 msg.style.color="red";
	 return false;
	}
}
//contact validation
function v_contact()
{
	var patt1=/^[0-9]{10,10}$/;
	var contact=document.getElementById("phone").value;
	if(contact.match(patt1))
	{var msg=document.getElementById("err_phone");
	 msg.innerHTML="";
	  return true;
	}
	else
	{
	 var msg=document.getElementById("err_phone");
	 if(contact.length==0)
	{msg.innerHTML="required";}
	else
	 {msg.innerHTML="Invalid Contact No.";}
	 msg.style.color="red";
	 return false;
	}
}