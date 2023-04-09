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
	<title>Add Team</title>
	<!-- Bootstrap CSS -->
    <?php include 'links.php' ?>
	
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<h2 class="mb-4 text-center"> Team 2022-23</h2>
				<form method="post" action="Team22_23.php">
                </div>
    </div>
        <div class="col-md-10 " id="container">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Reg ID</th>
      <th scope="col">Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">Branch</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
    $con= mysqli_connect('localhost','root');
    $db= mysqli_select_db($con,'mp2');
    $result=mysqli_query($con,"SELECT sae_cc_members.RegId, CONCAT(sae_cc_members.FiratName, ' ', sae_cc_members.LastName) AS Name, sae_cc_members.Gender, sae_cc_members.BranchId AS Branch, sae_cc_members.ContactNumber AS Contact, sae_cc_members.Email
    FROM sae_cc_members
    INNER JOIN team22_23 ON team22_23.RegId = sae_cc_members.RegId;");
    while($row=mysqli_fetch_assoc($result)){
      echo "
      <tr>
      <td>$row[RegId]</td>
      <td>$row[Name]</td>
      <td>$row[Gender]</td>
      <td>$row[Email]</td>
      <td>$row[Contact]</td>
      <td>$row[Branch]</td>
      
      
    </tr>
      
      ";
    }
    
    ?>
  </tbody>

</table>
        </div>
      </div>


				</form>
			</div>
		</div>
	</div>

	<!-- Bootstrap JS -->
	
</body>
</html>
