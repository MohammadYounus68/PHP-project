<?php 
	include "functions.php";
	$id = $_GET["user_id"];
	$data = findData($id);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Repeat Database</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
 
	<?php 
		if(isset($_POST['Edit'])) {
			editData($_POST,$id); // $_post = array and id ta upor thake passe | user_id thake
		}

	?>	

	<div class="container con">
		<div class="row mt-5">
			<div class="col-md-6 offset-md-3 mt-5 borders">
				<form method="POST">
					<div class="form-group mt-3">
						<label for="name">Student Name</label>
						<input id="name" type="text" class="form-control" name="name"
						value="<?php echo $data['name'];?>">
					</div>
					<div class="form-group mt-3">
						<label for="fName">Father's Name</label>
						<input id="fName" type="text" class="form-control" name="fName" value="<?php echo $data['fName'];?>" >
					</div>
					<div class="form-group mt-3">
						<label for="mName">Mother's Name</label>
						<input id="mName" type="text" class="form-control" name="mName" value="<?php echo $data['mName'];?>">
					</div>
					<div class="form-group mt-3">
						<label for="email">Email Address</label>
						<input id="email" type="email" class="form-control" name="email" value="<?php echo $data['email'];?>">
					</div>
					<div class="form-group mt-3">
						<label for="status">Status</label>
						<select name="status" id="status" class="form-control">
							<?php 
								if($data['status'] == 1) {
									echo '<option value="1">Active</option>';
								}
								else {
									echo '<option value="2">Inactive</option>';
								}
							?>
							<option value="">------Select Status -----</option>
							<option value="1">Active</option>
							<option value="2">Inactive</option>
						</select>
					</div>
					<button name="Edit" class="btn btn-info mt-3 form-control">Send</button>
					</form>
			</div>
		</div>
	</div>

</body>
</html>