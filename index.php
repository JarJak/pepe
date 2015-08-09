<?php
ini_set ("display_errors", "1");
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html>
<head>
<link href="css/dropzone.css" type="text/css" rel="stylesheet" />
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" />
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/dropzone.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>


<div class="container-fluid">
  <div id="dztest" class="well col-md-6" style="height: 400px"> 
      
  </div>
</div>

<button id="dzsub">NO DAWAJ KLIKAJ</button>

<script type="text/javascript">
	var myDropzone = new Dropzone("div#dztest", { url: "upload.php"});

	$("#dzsub").click(function() {
		myDropzone.processQueue();
	} );
</script>





</body>
</html> 