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
		$collegeID= $_POST["collegeID"];
		$collegeName= $_POST["collegeName"];

		$sql = "INSERT INTO college (CollegeId,CollegeName)
				VALUES ('$collegeID','$collegeName')";
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
	<div class="container ">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<h2 class="mb-4 text-center">Add Member</h2>
				<form action = 'addMember.php' method="post">
					<div class="mb-3">
						<label for="registration" class="form-label">Registration ID :</label>
						<input type="text" class="form-control" name="registrationID" id="registration" placeholder="Enter Registration Number" required>
					</div>
					<div class="mb-3 d-flex">
						<div class="d-grid me-2">
                            <label for="firstName" class="form-label">First Name :</label>
                            <input type="text" class="form-control" name="registrationID" id="firstName" placeholder="Enter First Name" required>
                        </div>
						<div class="d-grid me-2">
                           <label for="middleName" class="form-label">Middle Name :</label> 
						
						<input type="text" class="form-control" name="registrationID" id="middleName" placeholder="Enter Middle Name" required>
						
                        </div>
                        <div class="d-grid">
                            <label for="middleName" class="form-label">Last Name :</label>
						<input type="text" class="form-control" name="registrationID" id="lasttName" placeholder="Enter Last Name" required>
                        </div>
						
					</div>
					<div class="d-flex justify-content-between mb-3">
                        <div class="d-grid me-2">
                            <label for="email" class="form-label">Email address :</label>
						    <input type="email" class="form-control" name="registrationID" id="email" placeholder="Enter Institute Email" required>
                        </div>
						<div class="d-grid me-2">
                            <label for="contact" class="form-label">Contact Number :</label>
						    <input type="tel" class="form-control" name="registrationID" id="contact" placeholder="Enter contact number" required>
                        </div>
                        
                        <div class="d-grid">
                            <label for="year" class="form-label">Year :</label>
						<select class="form-select" name="registrationID" id="year" required>
							<option selected disabled>Select Year</option>
							<option>First</option>
							<option>Second</option>
							<option>Third</option>
							<option>B.Tech</option>
						</select>
                        </div>
					</div>

					<div class="d-flex justify-content-between mb-3">
						<div>
                            <label for="gender" class="form-label">Gender :</label>
						<select class="form-select" name="registrationID" id="gender" required>
							<option selected disabled>Select Gender</option>
							<option>Male</option>
							<option>Female</option>
							<option>Other</option>
						</select>
                        </div>
                        <div>
                            <label for="dob" class="form-label">Date of Birth</label>
						<input type="date" class="form-control" name="registrationID" id="dob" required>
                        </div>
                        <div>
                            <label for="joiningYear" class="form-label">Joining Year :</label>
						<select class="form-select" name="registrationID" id="joiningYear" required>
							<option selected disabled>Select Joining Year</option>
                            
  <?php
  $min = 2010;
  $max = 2050;
  for ($i = $min; $i <= $max; $i++) {
    echo "<option value=\"$i\">$i</option>";
  }
  ?>
							
						</select>
                        </div>
                        
					</div>


                    <div class="d-flex justify-content-between mb-3">
						<div class="d-grid">
                            <label for="collegeID" class="form-label">College ID :</label>
						    <input type="text" class="form-control" id="collegeID" placeholder="Enter DTE College Code"required>
                        </div>
                        <div class="d-grid">
                            <label for="branchID" class="form-label">Branch :</label>
						<select class="form-select" id="branchID" required>
							<option selected disabled>Select Branch</option>
							<option>MECH</option>
							<option>CIVIL</option>
							<option>PROD</option>
						</select>
                        </div>
                        <div class="d-grid">
                            <label for="memberStatus" class="form-label">Member Status :</label>
						<select class="form-select" id="memberStatus" required>
							<option selected disabled>Select Status</option>
							<option>SW</option>
							<option>SnW</option>
							<option>AL</option>
							<option>FA</option>
						</select>
                        </div>
                        
                        
					</div>
                    
				
					<div class="d-grid gap-2 mt-4">
						<button type="submit" class="btn btn-primary">Add</button>
						<button type="button" class="btn btn-danger">Cancel</button>
					</div>

				</form>
			</div>
		</div>
	</div>

	<!-- Bootstrap JS -->
	
</body>
</html>
