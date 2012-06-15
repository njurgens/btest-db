<html>
    <head>
        <script type="text/javascript" src="js/functions.js"></script>
		<script type="text/javascript" src="js/floating-1.8.js"></script>
		<script type="text/javascript">
			window.onload = function() 
			{
				document.getElementById("bcodeInput").focus();
			}
		</script>
	</head>
    <body>
	<image src="/assets/logo.png" width="200px" style="position: absolute; left: 10px; bottom: 10px;"/>
	<center>
		<image src="/assets/banner-washed.png" width="700"/>
		<br>
		<input id="bcodeInput" style="color:grey; text-align:center" type="text"  onkeyup="getData(this.value)" />
		<br>

		<br>
		<input type="button" onclick="doPeople()" value="people"/>
		<input type="button" onclick="doCells()" value="cells" />
		<input type="button" onclick="doPacks()" value="packs" />
		<input type="button" onclick="doEquip()" value="equipment" />
        <?php /* <form>
            <input type="text" name="barcode" id="bcode" value="" onkeyup="getData(this.value)"/>
            <input type="button" onclick="getData(document.getElementById('bcode').value)" value="submit">
        </form> */ ?>
        <br><br>
        <div id="txtHint"><b>Database info will be listed here.</b></div>
		<div id="top_content"></div>
		<div id="floatdiv" style="  
			position:absolute;  
			width:700px;top:10px;right:10px;  
			padding:16px;background:#FFFFFF;  
			border:2px solid #2266AA;  
			z-index:100">  
			This is a floating javascript menu.  
		</div>  
		<script type="text/javascript">  
			floatingMenu.add('floatdiv',  
				{  
					// Represents distance from left or right browser window  
					// border depending upon property used. Only one should be  
					// specified.  
					// targetLeft: 0,  
					//targetRight: 10,  
		  
					// Represents distance from top or bottom browser window  
					// border depending upon property used. Only one should be  
					// specified.  
					//targetTop: 10,  
					// targetBottom: 0,  
		  
					// Uncomment one of those if you need centering on  
					// X- or Y- axis.  
					 centerX: true,  
					 centerY: true,  
		  
					// Remove this one if you don't want snap effect  
					snap: true  
				});  
		</script>  
	</center>
    </body>
</html> 
