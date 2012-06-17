
<?php
/******************************************************
* personnel.php
* people page; display opperator information
* 
* author: Nicholas Jurgens [nicholas2010081@gmail.com]
* date: 16 June 2012
* 
*******************************************************/
	require_once('php/header.php');
	require_once('php/config.php');
	require_once('php/btdb-functions.php');
?>

<body>
	<?php //<image src="assets/logo.png" width="200px" style="position: absolute; left: 10px; bottom: 10px;"/> ?>
	<div style="-moz-border-radius: 15px;border-radius: 15px;margin-left:auto;margin-right:auto;width:750px;height:100%;border:3px solid #062A78">
		<center style="height:95%">
			<div style="border:1px solid #062A78;margin-left:auto;margin-right:auto;margin-top:20px;margin-top-moz-border-radius: 15px;border-radius: 15px;background-image: url(assets/banner-washed.png); height:120px; width:700px">
				<div style="border:1px solid #062A78;z-index:2;opacity:0.7;position:absolute; float:left;-moz-border-radius: 15px;border-radius: 15px;margin-top:25px;margin-left:20px;margin-bottom:auto;height:70px;width:240px;background-color:#fff">
				</div>
				<div style="z-index:3;opacity:1;position:absolute; float:left;-moz-border-radius: 15px;border-radius: 15px;margin-top:25px;margin-left:20px;margin-bottom:auto;height:70px;width:240px;">
					<image src="assets/logo.png" align="left" width="200px" style="float:left;margin-top:10px;margin-left:20px;margin-bottom:auto"/>
				</div>
				
			</div>
			<?php //<image src="assets/banner-washed.png" style="-moz-border-radius: 15px;border-radius: 15px;padding:0px;" width="700px" />?>
			<?php require('php/menu.php'); ?>
			<div id='main_content' style='height:65%;overflow:auto;margin-top:50px;margin-left:auto;margin-right:auto;width:700px' >
									
<?php 

	$con = dbconnect($SERVER,$USER,$PASSWD,$DB_NAME);
	
	$sql="SELECT * FROM $PEOPLE_TABLE";
	$result = mysql_query($sql);
	echo mysql_error();
	$data = readData($result);

	$num = count($data);
	echo"<table border=1 id=\"users\" class=\"ui-widget ui-widget-content\">
				<thead>
					<tr>
						<th>Name</th>
						<th>Department</th>
						<th>Email</th>
						<th>Telephone</th>
						<th colspan=2><a href=\"/php/personnel/new.php\" class=\"popup\">New User</a></th>
					</tr>
				</thead>
				<tbody>
		";
	
	for($i = 0; $i < $num; $i++)
	{
		echo "<tr>";
		echo "<td>" . $data[$i]["name"] . "</td>";
		echo "<td>" . $data[$i]["department"] . "</td>";
		echo "<td>" . $data[$i]["email"] . "</td>";
		echo "<td>" . $data[$i]["phone"] . "</td>";
		echo "<td><a href=\"/php/personnel/view.php?email=".$data[$i]["email"]. "\" class=\"popup\">view</a></td><td>edit</td>";
		echo "</tr>";
	}
	echo "</tbody></table>";

?>
					<script type="text/javascript"> 
						$('.popup').popupWindow({ 
							centerScreen:1 
						}); 
					</script>
				</div>
		</center>
	</div>
</body>
</html> 
