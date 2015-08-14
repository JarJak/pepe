<?php
require_once 'config.php';

$statement = $DBO->prepare("SELECT * FROM imgs ORDER BY RAND() LIMIT 100", array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
//TODO perf rand()
$statement->execute();
$res = $statement->fetchAll();

$arr = array();
$finfo = finfo_open(FILEINFO_MIME_TYPE);

foreach ($res as $row) {	
	array_push($arr, "data:".finfo_file($finfo, "uploads/".$row['filename']).";base64,".base64_encode(file_get_contents("uploads/".$row['filename'])));
	
}
echo(json_encode($arr));
?>