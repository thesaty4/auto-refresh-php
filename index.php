<html>
<head></head>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
	$(document).ready(function(){
	$("#div_refresh").load("load.php");
	setInterval(function(){
		$("#div_refresh").load("load.php");
	}, 1000);
});
</script>
<body>
<div id="div_refresh"></div>
</body>
</html>