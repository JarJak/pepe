<?php
ini_set ("display_errors", "1");
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html>
<head>
<link href="css/dropzone.css" type="text/css" rel="stylesheet" />
<script src="ext/jquery-2.1.4.min.js"></script>
<script src="ext/dropzone.js"></script>
</head>
<body>

<div id=""></div>

<script type="text/javascript">
	var x = $("#mydropzone").dropzone().get(0).dropzone;
	x.processQueue();
</script>



</body>
</html> 