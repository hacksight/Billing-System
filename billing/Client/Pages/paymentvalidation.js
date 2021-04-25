function validate()
{
	if(document.getElementById("err_atp").innerHTML=="")
	{if(document.getElementById("err_tn").innerHTML=="")
	{if(document.getElementById("err_mr").innerHTML=="")
	{if(document.getElementById("err_mn").innerHTML=="")
	return true;
	}}}
 	else
	{alert("Error");
         return false;}
}

function v_atp()
{
	var patt1=/^[0-9]{0,6}$/;
	var contact=document.getElementById("atp").value;
	if(contact.match(patt1))
	{var msg=document.getElementById("err_atp");
	 msg.innerHTML="";
	  return true;
	}
	else
	{
	 var msg=document.getElementById("err_atp");
	 if(contact.length==0)
	{msg.innerHTML="required";}
	else
	 {msg.innerHTML="Invalid Amount";}
	 msg.style.color="red";
	 return false;
	}
}
function v_tn()
{
	var patt1=/^[0-9]{0,15}$/;
	var contact=document.getElementById("tn").value;
	if(contact.match(patt1))
	{var msg=document.getElementById("err_tn");
	 msg.innerHTML="";
	  return true;
	}
	else
	{
	 var msg=document.getElementById("err_tn");
	 if(contact.length==0)
	{msg.innerHTML="required";}
	else
	 {msg.innerHTML="Invalid Transaction Number";}
	 msg.style.color="red";
	 return false;
	}
}
function v_mr()
{
	var patt1=/^[0-9]{0,20}$/;
	var contact=document.getElementById("mr").value;
	if(contact.match(patt1))
	{var msg=document.getElementById("err_mr");
	 msg.innerHTML="";
	  return true;
	}
	else
	{
	 var msg=document.getElementById("err_mr");
	 if(contact.length==0)
	{msg.innerHTML="required";}
	else
	 {msg.innerHTML="Invalid Meter Reading";}
	 msg.style.color="red";
	 return false;
	}
}
function v_mn()
{
	var patt1=/^[0-9]{0,13}$/;
	var contact=document.getElementById("mn").value;
	if(contact.match(patt1))
	{var msg=document.getElementById("err_mn");
	 msg.innerHTML="";
	  return true;
	}
	else
	{
	 var msg=document.getElementById("err_mn");
	 if(contact.length==0)
	{msg.innerHTML="required";}
	else
	 {msg.innerHTML="Invalid Meter Number";}
	 msg.style.color="red";
	 return false;
	}
}