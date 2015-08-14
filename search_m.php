<?php
require_once 'config.php';

$tags = explode(" ", trim($_POST['tags']));

$query1 = "SELECT b.* FROM tagmap bt, imgs b, tags t WHERE bt.tag_id = t.id AND (t.name IN (";
$query2 = ")) AND b.id = bt.img_id GROUP BY b.id HAVING COUNT(b.id) = ?";
$inp = str_repeat("?, " , count($tags)-1)."?";

$statement = $DBO->prepare($query1.$inp.$query2, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$statement->execute(array_merge($tags, array(count($tags))));
$res = $statement->fetchAll();

$arr = array();
$finfo = finfo_open(FILEINFO_MIME_TYPE);

foreach ($res as $row) {	
	array_push($arr, "data:".finfo_file($finfo, "uploads/".$row['filename']).";base64,".base64_encode(file_get_contents("uploads/".$row['filename'])));
	
}
echo(json_encode($arr));
?>