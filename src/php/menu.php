<?php
/******************************************************
* menu.php
* contains menu definitions to be added to index.php
* 
* author: Nicholas Jurgens [nicholas2010081@gmail.com]
* date: 16 June 2012
* 
*******************************************************/
?>

<script type="text/javascript">
	$(function() {
		//opens a submenu when clicked on
		$('.dropdown').click(function() { 
			$(this).parent().next().css({
					position:'absolute',
					top: $(this).offset().top + $(this).height() + 'px',
					left: $(this).offset().left - 2 + 'px',
					zIndex:1000
				});
			$(this).parent().next().toggle("fast").siblings("[id]").hide("fast");
		});
		//closes all submenus when a link is clicked on
		$('.sublinks').click(function(){
					$('.sublinks').hide("fast").siblings("[id]");
		});
		//closes all submenus when "Personnel" is clicked
		$('.pagelink').click(function(){
					$('.sublinks').hide("fast").siblings("[id]");
		});
	});
</script>

<style type="text/css">
/* CSS For Dropdown Menu Start */
	ul
	{
	  list-style:none;
	  padding:0px;
	  margin:0px
	}

	ul li
	{
		display:inline;
		float:left;
	}

	ul li a
	{
		color:#fff;
		background:#062A78;
		margin-right:5px;
		font-weight:bold;
		font-size:12px;
		font-family:verdana;
		text-decoration:none;
		display:block;
		width:100px;
		height:16px;
		line-height:16px;
		text-align:center;
		-webkit-border-radius:5px;
		-moz-border-radius:5px;
		border: 1px solid #000;
	}

	ul li a:hover
	{
		color:#cccccc;
		background:#560E00;
		font-weight:bold;
		text-decoration:none;
		display:block;
		width:100px;
		text-align:center;
		-webkit-border-radius:5px;
		-moz-border-radius:5px;
		border: 1px solid #000000;
	}

	ul li.sublinks a
	{
		color:#000000;
		background:#f6f6f6;
		border-bottom:1px solid #cccccc;
		font-weight:normal;
		text-decoration:none;
		display:block;
		width:100px;
		text-align:center;
		margin-top:2px;
	}

	ul li.sublinks a:hover
	{
		color:#000000;
		background:#FFEFC6;
		font-weight:normal;
		text-decoration:none;
		display:block;
		width:100px;
		text-align:center;
	}

	ul li.sublinks
	{
		display:none;
	}
/* CSS For Dropdown Menu End */



	#container
	{
		margin-left: auto;
		margin-right: auto;
		width: 450px;
	}

	.clear
	{
		clear:both;
	}

	.left
	{
		float:left;
	}

	.right
	{
		float:right;
	}
	
	.center
	{
		//margin-left:auto;
		//margin-right:auto;
		width:70%;
		background-color:#b0e0e6;
	}
</style>

<div id="container" style="margin-top:10px; align:center"  align="center">
	<ul class="navigation">
		<li><a href="#" class="dropdown" align="center">Cells</a></li>
		<li class="sublinks">
			<a href="/cells/cell_status.php" >Status</a>
			<a href="/cells/cell_records.php">Records</a>
			<a href="/cells/cell_profiles.php">Profiles</a>
			<a href="/cells/cell_storage.php" >Storage</a>
			<a href="/cells/cell_displosal.php">Disposal</a>
		</li>
		<li><a href="#" class="dropdown">Packs</a></li>
		<li class="sublinks">
			<a href="#" onclick="displayPart('php/packs/pack_profiles.php','main_content')">Profiles</a>
			<a href="#" onclick="displayPart('php/packs/pack_records.php','main_content')">Records</a>
			<a href="#" onclick="displayPart('php/packs/pack_status.php','main_content')">Status</a>
			<a href="#" onclick="displayPart('php/packs/pack_storage.php','main_content')">Storage</a>
			<a href="#" onclick="displayPart('php/packs/pack_disposal.php','main_content')">Disposal</a>
		</li>
		<li><a href="#" class="dropdown">Equipment</a></li>
		<li class="sublinks">
			<a href="#">Maintenance</a>
			<a href="#">Calibrations</a>
		</li>
		<li><a href="/personnel.php" class="pagelink">Personnel</a></li>
	</ul>
</div>
