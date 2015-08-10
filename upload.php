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
        autoProcessQueue: false,
        maxFilesize: 5,
        maxFiles: 1,
        thumbnailWidth: 50,
        thumbnailHeight: 50,
        clickable: true,
        init:
        function() {
            var dzform = this;
        this.on("maxfilesexceeded", function(file) { this.removeAllFiles();     this.addFile(file);  });

            this.element.querySelector("button[type=submit]").addEventListener("click", function(e) {
           // Make sure that the form isn't actually being sent.
           e.preventDefault();
           e.stopPropagation();
           dzform.processQueue();
         });


    }
}
</script>





</body>
</html> 