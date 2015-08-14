<?php
require_once 'config.php';

print_tpl_start();

try {
	$statement = $DBO->prepare("SELECT * FROM imgs ORDER BY count LIMIT 1", array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
	$statement->execute();

	if($statement->rowCount()==1)
	{
		$buf = $statement->fetch();
		$cid = $buf['id'];
		$filename = $buf['filename'];
		?>


<img src="uploads/<?php echo $filename ?>"></img>
<form action="update_m.php" method="POST">
	<input type="text" name="tags">
	<input type="hidden" name="imgid" value="<?php echo $cid ?>">
	<input type="submit" value="submit">
</form>

<?php
	//co za sztynks
//TODO COŚ LEPSZEGO
	}





} catch (Exception $e) {
	echo $e->getMessage();
	return -100;
}
?>



</body>
</html>