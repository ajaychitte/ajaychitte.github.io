<?php
session_start();

// Redirect the user to the login page if they are not logged in
if (!isset($_SESSION['loggedin'])) {
	header('Location: adminlogin.php');
	exit();
}

	$con= mysqli_connect('localhost','root');
    $db= mysqli_select_db($con,'mp2');
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$departmentID= $_POST["departmentID"];
		$departmentName= $_POST["departmentName"];

		$sql = "INSERT INTO dept (DeptId,DeptName)
				VALUES ('$departmentID','$departmentName')";
		$result= mysqli_query($con,$sql);

		if(!$result){
			echo "Invalid Entry";
		}

		header("location: student.php");
		exit;

	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Form Example</title>
	<link rel="stylesheet" href="./sty">
	<!-- Bootstrap CSS -->
    <?php include 'links.php' ?>
	
</head>
<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<h2 class="mb-4 text-center">Add Department</h2>
				<form method="post" action="addDepartment.php">
					<div class="mb-3">
						<label for="departmentID" class="form-label">Department ID :</label>
						<input type="text" class="form-control" name="departmentID" id="departmentID" placeholder="Enter Department ID" required>
					</div>
					<div class="mb-3">
						
                            <label for="departmentName" class="form-label">Department Name :</label>
                            <input type="text" class="form-control" name="departmentName" id="departmentName" placeholder="Enter Department Name" required>				
					</div>
					
					<div class="d-grid gap-2 mt-4">
						<button type="submit" class="btn btn-primary">Add</button>
						<button type="button" class="btn btn-danger"><a style="text-decoration: none;color:white; padding:0px 50px;" href="student.php">Cancel</a></button>
					</div>

				</form>
			</div>
		</div>
	</div>

	<!-- Bootstrap JS -->
	
</body>
</html>
