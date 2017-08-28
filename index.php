<?php require_once('database.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>oop</title>
</head>
<body>
<?php
		//SIMPLE SELECT USING OOP
	$conn = connect();
	$rows = get($conn);
	foreach ($rows as $row) :  ?>
		<p> <?php echo $row['post_content']; ?></p>
	<?php endforeach; ?>

</body>
</html>