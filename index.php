<?php
require_once 'config.php';

print_tpl_start();
?>




<div class="container-fluid">

<div class="jumbotron">
<h1> NO JAK TAM</h1>

<form action="upload.php">
    <input type="submit" class="btn btn-default" value="wyślij jedno">
</form>

<form action="multiupload.php">
    <input type="submit" class="btn btn-default" value="wyślij wiele">
</form>

<form action="sort.php">
    <input type="submit" class="btn btn-default" value="porządkuj">
</form>

<form action="search.php">
    <input type="submit" class="btn btn-default" value="przeglądaj">
</form>

</div>


</div>





</body>
</html> 