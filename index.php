<!DOCTYPE html>
<html>
<head>
	<title>JS Sprint - Run javaScript CSS3 HTML5 online</title>

	<script type="text/javascript" src="./jquery.1.7.1.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="./wJSNova.1.0.css"/>
	<script type="text/javascript" src="./wJSNova.1.0.js"></script>
	
	<style>
		body,html{margin:0px; overflow:hidden;}
	</style>
</head>
<body>

	<div id="JSNova" style="width:100%;height:0px;"></div>

	<script type="text/javascript">
		
		var jsn = null;
		
		$(document).ready(function()
		{
			$('#JSNova').height($(window).height());
			jsn = $("#JSNova").wJSNova();
			jsn.wJSNova('resize');
		});
		
		$(window).resize(function()
		{
			$('#JSNova').height($(window).height());
			jsn.wJSNova('resize');
		});
		
	</script>

</body>
</html>










