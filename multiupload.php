<?php
require_once 'config.php';


?>

<!DOCTYPE html>
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

  <div id="dzdiv" class="well" style="height: 400px"> 
  <form id="dzform" class="dropzone" action="upload_m.php" method="post">
  <input type="hidden" name="formtest" value="testval">
  <button type="submit">SUBMIT</button>
    
  </form>
      
  </div>
</div>


<script type="text/javascript">
    Dropzone.options.dzform={
        paramName: "file",
        autoProcessQueue: true,
        maxFilesize: 8,
        maxFiles: null,
        thumbnailWidth: 250,
        clickable: true,
        init:
        function() {
            var dzform = this;
    }
}
</script>





</body>
</html> 