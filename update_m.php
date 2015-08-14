<?php
require_once 'config.php';
$tags = explode(" ", trim($_POST['tags']));
$cid = intval($_POST['imgid']);
//TODO VALIDATION

try {

	for ($i=0; $i < count($tags); $i++) { 
	$tags[$i] = strtolower(trim($tags[$i]));

	$statement = $DBO->prepare("SELECT * FROM tags WHERE name = ?", array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
	$statement->execute(array($tags[$i]));
	$tid =0;

	if($statement->rowCount() == 0)
	{
		$statement = $DBO->prepare("INSERT INTO `tags` (name) VALUES (?)", array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
		$statement->execute(array($tags[$i]));
		$tid = $DBO->lastInsertId();
	}
	else
	{
		$tid = $statement->fetch()['id'];
	}
	//TODO ONE STATEMENT

	$statement = $DBO->prepare("INSERT INTO `tagmap` (img_id, tag_id) VALUES (?, ?)", array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
	$statement->execute(array($cid, $tid));

	$statement = $DBO->prepare("UPDATE `imgs` SET count = count+1 WHERE id = ?", array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
	$statement->execute(array($cid));



	}
	
} catch (Exception $e) {

	echo $e->getMessage();
	return -100;
}

header("Location: http://$_SERVER[HTTP_HOST]/sort.php");
die();

?>