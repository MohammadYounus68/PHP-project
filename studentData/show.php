<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Repeat Database</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>

	<div class="container">
		<div class="row mt-5">
			<?php 
			include "functions.php"; 
				if(isset($_GET['id'])) {
					$id = $_GET['id'];
					$all = delateData($id);
				}

			?>

			<div class="col-md-8 offset-md-2 mt-5">
				<a href="index.php" class="mb-3 btn btn-info">Add Student</a>

				<table class="table" border="1">
					<thead>
						<tr>
							<th>#s1 No</th>
							<th>Student Name</th>
							<th>Father's Name</th>
							<th>Mother's Name</th>
							<th>Email Address</th>
							<th>Status</th>
							<th colspan="2">Active</th>
						</tr>
					</thead>
					<?php
						
						$data = show();
						$sl = 1;
						while ($all = $data->fetch_assoc()) {
							echo "<tr>
								<td>".$all["student_id"]."</td>
								<td>".$all["name"]."</td>
								<td>".$all["fName"]."</td>
								<td>".$all["mName"]."</td>
								<td>".$all["email"]."</td>
								<td>".$all["status"]."</td>
								<td>
									<a href='show.php?id=".$all["student_id"]."' class='btn btn-danger btn-sm'><i class='fa fa-trash'></i></a>
								</td>

								<td><a href='edit.php?user_id=".$all["student_id"]."' class='btn btn-success btn-sm'><i class='fa fa-edit'></i></a></td>

							</tr>";
						}
					?>

				</table>
				
			</div>
		</div>
	</div>

</body>
</html>