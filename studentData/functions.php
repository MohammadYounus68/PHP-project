<?php 
	// include "show.php";
	$con = new mysqli("localhost","root","","studentData");

		function insert($formData) {
			$name = $formData['name'];
			$fName = $formData['fName'];
			$mName = $formData['mName'];
			$email = $formData['email'];
			$status = $formData['status'];
			
			if($name == "") {
				echo '<div class="alert alert-warning"><strong>Error:</strong> Name is Null</div>';
			}
			else if($fName == "") {
				echo '<div class="alert alert-warning"><strong>Error:</strong> Father Name is Null</div>';
			}
			else if($mName == "") {
				echo '<div class="alert alert-warning"><strong>Error:</strong> Mather Name is Null</div>';
			}
			else if($email == "") {
				echo '<div class="alert alert-warning"><strong>Error:</strong> Email is Null</div>';
			}
			else if($status == "") {
				echo '<div class="alert alert-warning"><strong>Error:</strong> status is Null</div>';
			}else{
			$checkEmail = emailcheck($email);
			if ($checkEmail == true) {
				echo '<div class="alert alert-warning"><strong>Error:</strong> This Data Already Exist</div>';
			}
			else{
				global $con;
				$stm="INSERT INTO tbl_student(name,fName, mName,email,status)VALUES('$name','$fName', '$mName','$email','$status')";
				$check = $con->query($stm);
				if ($check) {
					echo '<div class="alert alert-success"><strong>Success:</strong> Data Saved</div>';
				}
				else{
					echo '<div class="alert alert-danger"><strong>Error:</strong> Data Not Saved</div>';
				}
			}			
		}
	}


		function emailcheck($email){
			global $con;
			$data = $con->query("SELECT * FROM tbl_student WHERE email='$email'");
			if($data->num_rows > 0){
				return True;
			}
			else{
				return false;
			}
		}


		function show(){
			global $con;
			$data = $con->query("SELECT * FROM tbl_student");
			return $data;
		}

		function findData($id) {
			global $con;
			$data = $con->query("SELECT * FROM tbl_student WHERE student_id='$id'");
			$all = $data->fetch_assoc();
			return $all;
		}

		function editData($allData,$id) {
			global $con;
			$name = $allData['name'];
			$fName = $allData['fName'];
			$mName = $allData['mName'];
			$email = $allData['email'];
			$status = $allData['status'];
			$data = $con->query("UPDATE tbl_student SET name='$name',fName='$fName',mName='$mName',email='$email',status='$status' WHERE student_id = '$id' ");
			if($data) {
				header("location: show.php");
			}
		}


		function delateData($id) {
			global $con;
			$all = $con->query("DELETE. FROM tbl_student WHERE student_id = '$id'");
			return $all;
		}

?>