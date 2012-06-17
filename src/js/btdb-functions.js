/******************************************************
* btbd-function.js
* javascript functions that mainly control page layout
* 
* author: Nicholas Jurgens [nicholas2010081@gmail.com]
* date: 16 June 2012
* 
*******************************************************/

function displayPart(page,where)
{
	if (window.XMLHttpRequest)
	{   // code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}

	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById(where).innerHTML=xmlhttp.responseText;
		}
	}
	
	xmlhttp.open("GET",page,true);
	xmlhttp.send();
}

function openDialog(who,page,where)
{
	$(document).ready(function() {
		
	});
	if (window.XMLHttpRequest)
	{   // code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}

	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById(where).innerHTML=xmlhttp.responseText;
		}
	}
	
	xmlhttp.open("GET",page+"?email="+who,true);
	xmlhttp.send();
}
