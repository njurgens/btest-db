<?php

	require_once('../php/header.php');
	require_once('../php/config.php');
	require_once('../php/btdb-functions.php');
?>


<body>
	<?php //<image src="assets/logo.png" width="200px" style="position: absolute; left: 10px; bottom: 10px;"/> ?>
	<div style="-moz-border-radius: 15px;border-radius: 15px;margin-left:auto;margin-right:auto;width:750px;height:100%;border:3px solid #062A78">
		<center style="height:95%">
			<div style="border:1px solid #062A78;margin-left:auto;margin-right:auto;margin-top:20px;margin-top-moz-border-radius: 15px;border-radius: 15px;background-image: url(/assets/banner-washed.png); height:120px; width:700px">
				<div style="border:1px solid #062A78;z-index:2;opacity:0.7;position:absolute; float:left;-moz-border-radius: 15px;border-radius: 15px;margin-top:25px;margin-left:20px;margin-bottom:auto;height:70px;width:240px;background-color:#fff">
				</div>
				<div style="z-index:3;opacity:1;position:absolute; float:left;-moz-border-radius: 15px;border-radius: 15px;margin-top:25px;margin-left:20px;margin-bottom:auto;height:70px;width:240px;">
					<image src="/assets/logo.png" align="left" width="200px" style="float:left;margin-top:10px;margin-left:20px;margin-bottom:auto"/>
				</div>
				
			</div>
			<?php //<image src="assets/banner-washed.png" style="-moz-border-radius: 15px;border-radius: 15px;padding:0px;" width="700px" />?>
			<?php require('../php/menu.php'); ?>
			<div id='main_content' style='height:65%;overflow:auto;margin-top:50px;margin-left:auto;margin-right:auto;width:700px' >

<!-- read in all active cells -->
<?php 

	$con = dbconnect($SERVER,$USER,$PASSWD,$DB_NAME);
	
	$sql="SELECT * FROM $CELL_PROFILE_TABLE";
	$result = mysql_query($sql);
	echo mysql_error();
	$data = readData($result);

	$num = count($data);
	echo"<table border=1 id=\"users\" class=\"ui-widget ui-widget-content\">
				<thead>
					<tr>
						<th>Manufactuer</th>
						<th>Model</th>
						<th>Serial No.</th>
						<th>Barcode</th>
						<th colspan=2><a href=\"/cells/status/new.php\" class=\"popup\">Register Cell</a></th>
					</tr>
				</thead>
				<tbody>
		";
	
	for($i = 0; $i < $num; $i++)
	{
		echo "<tr>";
		echo "<td>" . $data[$i]["manufacturer"] . "</td>";
		echo "<td>" . $data[$i]["model"] . "</td>";
		echo "<td>" . $data[$i]["serial"] . "</td>";
		echo "<td>" . $data[$i]["barcode"] . "</td>";
		echo "<td><a href=\"/cells/status/view.php?bcode=".$data[$i]["barcode"]. "\" class=\"popup\">view</a></td><td>edit</td>";
		echo "</tr>";
	}
	echo "</tbody></table>";

?>				
					<script type="text/javascript"> 
						$('.popup').popupWindow({ 
							height:700, 
							width:600,
							centerScreen:1,
						}); 
					</script>
					
				</div>
		</center>
	</div>
</body>
</html> 
