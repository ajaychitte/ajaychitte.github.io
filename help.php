<?php
session_start();

// Redirect the user to the login page if they are not logged in
if (!isset($_SESSION['loggedin'])) {
	header('Location: adminlogin.php');
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
   
    <?php include 'links.php' ?>
     <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link fs-4" aria-current="page" href="home.php">Home</a>
                    <a class="nav-link fs-4" href="about.php">About Us</a>
                    <a class="nav-link active fs-4" href="help.php">Help</a>

                </div>
                
            </div>
            <div class="d-flex">
                    <a href="logout.php" class="btn btn-danger btn-lg">Logout</a>
                </div>
        </div>
    </nav>
	<div class="container center-div">
        <h1 class="heading text-center">Welcome to MIS Help Desk</h1>
    <div class="d-flex">
        <button class="btn btn-primary container row mt-2 me-2">User Guide For MIS</button>
    <button class="btn btn-primary container row mt-2 ms-2">Shorthand ID's</button>
    </div>
    
    </div>
    



    <div class="container center-div">
        <div class="row mt-4">
        <div class="col-md-3"><h5>1. Reg_ID :</h5></div>
        <div class="col-md-9">
            Reg_ID is the Registration Number of the student provided by the Institute.
        </div>             
    </div>
    <div class="row mt-2">
        <div class="col-md-3"><h5>2. SAE_ID :</h5></div>
        <div class="col-md-9">
            SAE_ID is provided to member when they register for SAE India Website.
        </div>             
    </div>
    <div class="row mt-2">
         <div class="col-md-3"><h5>3. Branch_ID :</h5></div>
        <div class="col-md-9">
            Branch_ID is the ID for the particular branch of the student. You can select the Branch_ID for your branch. <br>
<table class="table table-striped mt-2" >
  <tr>
    <th>Branch_ID</th>
    <th>Branch</th>
    </tr>
  <tr>
    <td>MECH</td>
    <td>Mechanical Engineering</td>   
  </tr>
  <tr>
    <td>PROD</td>
    <td>Production Engineering</td>   
  </tr>
  <tr>
    <td>CHEM</td>
    <td>Chemical Engineering</td>   
  </tr>
  <tr>
    <td>TEXT</td>
    <td>Textile Engineering</td>   
  </tr>
  <tr>
    <td>CSE</td>
    <td>Computer Science Engineering</td>   
  </tr>
  <tr>
    <td>IT</td>
    <td>Information Technology</td>   
  </tr>
  <tr>
    <td>CIVIL</td>
    <td>Civil Engineering</td>   
  </tr>
  <tr>
    <td>EXTC</td>
    <td>Electronics & Telecommunication Engineering</td>   
  </tr>
  <tr>
    <td>EE</td>
    <td>Electrical Engineering</td>   
  </tr>
  <tr>
    <td>INSTR</td>
    <td>Instrumentation Engineering</td>   
  </tr>
</table>
 </div>
 </div>
    <div class="row mt-2">
        <div class="col-md-3">
           <h5>4. Dept_ID :</h5>
        </div>
        <div class="col-md-9">Dept_ID is the ID for the department of student in the Team Phoenix.
             <table class="table table-striped mt-2">
  <tr>
    <th>Dept_ID</th>
    <th>Department</th>
    </tr>
  <tr>
    <td>CAE</td>
    <td>Computer Aided Engineering</td>   
  </tr>
  <tr>
    <td>BRK</td>
    <td>Braking Department</td>   
  </tr>
  <tr>
    <td>DA</td>
    <td>Design & Analysis Department</td>   
  </tr>
  <tr>
    <td>SS</td>
    <td>Steering & Suspension Department</td>   
  </tr>
  <tr>
    <td>TRANS</td>
    <td>Transmission Department</td>   
  </tr>
</table>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-md-3"><h5>5. College_ID :</h5></div>
        <div class="col-md-9">
            College_ID is the DTE code of the Institute provided by the Government. For SGGS it is 2020. 
        </div>     
    </div>
    <div class="row mt-2">
        <div class="col-md-3"><h5>6. Role_ID :</h5></div>
        <div class="col-md-9">
            Role_ID is for the Role of member in the Team.
             <table class="table table-striped mt-2">
  <tr>
    <th>Role_ID</th>
    <th>Role/Postion</th>
    </tr>
  <tr>
    <td>CPT</td>
    <td>Captain</td>   
  </tr>
  <tr>
    <td>VCPT</td>
    <td>Vice Captain</td>   
  </tr>
  <tr>
    <td>DR1</td>
    <td>Primary Driver</td>   
  </tr>
  <tr>
    <td>DR2</td>
    <td>Secondary Driver</td>   
  </tr>
  <tr>
    <td>TM</td>
    <td>Team Manager</td>   
  </tr>
  <tr>
    <td>MoT</td>
    <td>Team Member</td>   
  </tr>
  <tr>
    <td>FA1</td>
    <td>First Faculty Advisor</td>   
  </tr>
  <tr>
    <td>FA2</td>
    <td>First Faculty Advisor</td>   
  </tr>
</table> 
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-3"><h5>7. Status_ID :</h5></div>
        <div class="col-md-9">
            Status_ID is used to show the current status of the member in the Team.
             <table class="table table-striped mt-2">
  <tr>
    <th>Status_ID</th>
    <th>Member Status</th>
    </tr>
  <tr>
    <td>SW</td>
    <td>Student Studying & Working in the Team</td>   
  </tr>
  <tr>
    <td>SnW</td>
    <td>Student Currently studying but not Working in the Team</td>   
  </tr>
  <tr>
    <td>FA</td>
    <td>Faculty Advisor</td>   
  </tr>
  <tr>
    <td>AL</td>
    <td>Alumni</td>   
  </tr>
</table> 
        </div>
    </div>

    </div>
    
</body>
</html>
