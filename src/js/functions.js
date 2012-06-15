function watermark(inputId,text){
  var inputBox = document.getElementById(inputId);
    if (inputBox.value.length > 0){
      if (inputBox.value == text)
        inputBox.value = '';
    }
    else
      inputBox.value = text;
}
function getData(str)
{
	if (str=="")
	{
		document.getElementById("txtHint").innerHTML="";
		return;
	}
	if (window.XMLHttpRequest)
	{   // code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}

	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
		}
	}
	
	xmlhttp.open("GET","php/query.php?bcode="+str,true);
	xmlhttp.send();
}

function doPeople()
{
	if (window.XMLHttpRequest)
	{   // code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}

	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
		}
	}
	
	xmlhttp.open("GET","php/people.php",true);
	xmlhttp.send();
}

function addPerson()
{
	if (window.XMLHttpRequest)
	{   // code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}

	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("floatdiv").innerHTML=xmlhttp.responseText;
		}
	}
	
	xmlhttp.open("GET","php/newperson.php",true);
	xmlhttp.send();
}

function viewPeople()
{
	if (window.XMLHttpRequest)
	{   // code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}

	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("floatdiv").innerHTML=xmlhttp.responseText;
		}
	}
	
	xmlhttp.open("GET","php/viewpeople.php",true);
	xmlhttp.send();
}

function doCells()
{
	if (window.XMLHttpRequest)
	{   // code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}

	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
		}
	}
	
	xmlhttp.open("GET","php/cells.php",true);
	xmlhttp.send();
}

function viewCellProfiles()
{
	if (window.XMLHttpRequest)
	{   // code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}

	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("floatdiv").innerHTML=xmlhttp.responseText;
		}
	}
	
	xmlhttp.open("GET","php/cellprofiles.php",true);
	xmlhttp.send();
}

function viewCellRecords()
{
	if (window.XMLHttpRequest)
	{   // code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}

	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			//document.getElementById("cells_sub").innerHTML=xmlhttp.responseText;
			document.getElementById("floatdiv").innerHTML=xmlhttp.responseText;
		}
	}
	
	xmlhttp.open("GET","php/cellrecords.php",true);
	xmlhttp.send();
}


function queryCellRecords(str)
{
	if (str=="")
	{
		document.getElementById("cellrecords_sub").innerHTML="";
		return;
	}
	if (window.XMLHttpRequest)
	{   // code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}

	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("cellrecords_sub").innerHTML=xmlhttp.responseText;
		}
	}
	
	xmlhttp.open("GET","php/getcellrecords.php?bcode="+str,true);
	xmlhttp.send();
}


function viewCellTemplates()
{
	if (window.XMLHttpRequest)
	{   // code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}

	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("cellprofile_sub").innerHTML=xmlhttp.responseText;
		}
	}
	
	xmlhttp.open("GET","php/celltemplates.php",true);
	xmlhttp.send();
}
