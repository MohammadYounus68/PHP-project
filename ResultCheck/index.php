<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>test</title>
</head>
<body>

	<?php 
		include "classes.php";
		if(isset($_POST["submit"])) {
			$mark1 = $_POST["mark1"];
			$mark2 = $_POST["mark2"];
			$total = $mark1 + $mark2;
		}
		$cls = new Makeresult();
		$grade = $cls -> result($total);
	?>	


	<form method="POST">
		<input type="text" name="mark1">
		<input type="text" name="mark2">
		<input type="text" value="<?php echo $total ?>">
		<input type="text" value="<?php echo $grade; ?>">
		<button type="submit" name="submit">Reuslt</button>
	</form>
	

</body>
</html>