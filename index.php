<?php
require_once 'config.php';


?>

<!DOCTYPE html>
<meta charset="utf8">
<html>
<head>
<link href="css/dropzone.css" type="text/css" rel="stylesheet" />
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" />
<link href="css/custom.css" type="text/css" rel="stylesheet" />
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/dropzone.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>


<div class="container-fluid">

<div class="jumbotron">
<h1> NO JAK TAM</h1>

<form action="upload.php">
    <input type="submit" class="btn btn-default" value="wyślij jedno">
</form>

<form action="multiupload.php">
    <input type="submit" class="btn btn-default" value="wyślij wiele">
</form>

</div>


</div>








</body>
</html> 