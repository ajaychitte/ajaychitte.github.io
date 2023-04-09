<?php
session_start();

// Redirect the user to the login page if they are not logged in
if (!isset($_SESSION['loggedin'])) {
	header('Location: adminlogin.php');
	exit();
}


	$con= mysqli_connect('localhost','root');
    $db= mysqli_select_db($con,'mp2');
	$successMessage="";
	$errorMessage="";
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$branchID= $_POST["branchID"];
		$branchName= $_POST["branchName"];

		$sql = "INSERT INTO branch (BranchId,BranchName)
				VALUES ('$branchID','$branchName')";
		$result= mysqli_query($con,$sql);

		if(!$result){
			echo "Invalid Entry";
		}
		header("location: student.php");
	}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Form Example</title>
	<!-- Bootstrap CSS -->
    <?php include 'links.php' ?>
	
</head>
<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<h2 class="mb-4 text-center">Add Branch</h2>
				
				<form method="post" action="addBranch.php">
					<div class="mb-3">
						<label for="branchID" class="form-label">Branch ID :</label>
						<input type="text" class="form-control" name="branchID" id="branchID" placeholder="Enter Branch ID" required>
                        
					</div>
					<div class="mb-3">
						
                            <label for="branchName" class="form-label">Branch Name :</label>
                            <input type="text" class="form-control" name="branchName" id="branchName" placeholder="Enter Branch Name" required>				
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
