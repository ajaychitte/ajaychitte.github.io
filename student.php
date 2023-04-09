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
  <link rel="stylesheet" href="style.css">
    <?php include 'links.php' ?>  
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
      
        <div class="container-fluid mb-4">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link fs-4 active" aria-current="page" href="home.php">Home</a>
                    <a class="nav-link fs-4"  href="about.php">About Us</a>
                    <a class="nav-link fs-4"  href="help.php">Help</a>

                </div>
                
            </div>
            <div class="d-flex">
                    <a href="logout.php" class="btn btn-danger btn-lg">Logout</a>
                </div>
        </div>
    </nav>


	<!-- <div class="container center-div mb-4 mt-2">
        <h1 class="heading text-center">Welcome to Student Module</h1>    
  </div> -->
   <div id="popup-box" style="display: none;">
  <h2 >Enter Year</h2>
  
  
  <form action="yearWiseStudent.php" method="post">
    <label for="joiningYear" class="form-label">Joining Year :</label>
	<input type="text" class="form-control" name="joiningYear" id="joiningYear" placeholder="Enter Joining Year" required>
  
  <div class="d-flex mt-3">
   <a onclick="getContent('yearWiseStudent.php', 'container')" class="btn btn-primary me-2" id="submit-btn" href="#">Submit</a>
   <button class="btn btn-danger" id="cancel-btn">Cancel</button>
   
  </div>
  </form>
</div>
  <div id="popup-box1" style="display: none;">
  <h2 >Enter Year</h2>
  
  
  <form action="yearWiseFaculty.php" method="post">
    <label for="joiningYearFa" class="form-label">Joining Year :</label>
	<input type="text" class="form-control" name="joiningYearFa" id="joiningYear" placeholder="Enter Joining Year" required>
  
  <div class="d-flex mt-3">
   <a class="btn btn-primary me-2" id="submit-btn" onclick="getContent('yearWiseFaculty.php', 'container')" href="#">Submit</a>
   <button class="btn btn-danger" id="cancel-btn">Cancel</button>
   
  </div>
  </form>
</div>

  
      <div class="row">
        <div class="col-md-2">
                <div class="d-grid gap-0 ms-3">
                   <div class="input-group mb-2">
                        <button class="btn btn-primary btn-lg w-100" id="popup-button"><a class="btn btn-primary btn-lg w-100" href="">Show All</a></button>  
                    </div>

<div class="input-group mb-2">  
  <button class="btn btn-primary btn-lg dropdown-toggle w-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">Student List</button>
  <ul class="dropdown-menu dropdown-menu-end">
    <li><a onclick="getContent('studentList.php', 'container')" class="dropdown-item" id="studentList" href="#">All</a></li>
    <li><a onclick="showPopup()" class="dropdown-item"  href="#">Year</a></li>      
  </ul>
</div>
<div class="input-group mb-2">
  
  <button class="btn btn-primary btn-lg dropdown-toggle w-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">Faculty List</button>
  <ul class="dropdown-menu dropdown-menu-end">
        <li><a onclick="getContent('facultyList.php', 'container')" class="dropdown-item" id="studentList" href="#">All</a></li>
    <li><a onclick="showPopup1()" class="dropdown-item" href="#">Year</a></li>   
  </ul>
</div>
<div class="input-group mb-2">
  
  <button class="btn btn-primary btn-lg dropdown-toggle w-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">Female List</button>
  <ul class="dropdown-menu dropdown-menu-end">
        <li><a onclick="getContent('femaleList.php', 'container')" class="dropdown-item" id="studentList" href="#">All</a></li>
    <li><a class="dropdown-item" href="#">Year</a></li>
    </ul>
</div>
<div class="input-group mb-2">
  
  <button class="btn btn-primary btn-lg dropdown-toggle w-100" type="button" data-bs-toggle="dropdown" aria-expanded="false" >Team List</button>
  <ul class="dropdown-menu dropdown-menu-end">
        <li><a onclick="getContent('Team22_23.php', 'container')" class="dropdown-item" id="Team22_23" href="#">Team 2022-23</a></li>
  </ul>
  
  
</div>

<div class="input-group mb-2">
  
  <button class="btn btn-primary btn-lg dropdown-toggle w-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">Export List</button>
  <ul class="dropdown-menu dropdown-menu-end">
    <li><a onclick="getContent('test.php', 'container')" class="dropdown-item" id="test" href="#">Team 2022-23</a></li>
    <li><a class="dropdown-item" href="#">College</a></li>
    <li><a class="dropdown-item" href="#">Department</a></li>
    <li><a class="dropdown-item" href="#">Branch</a></li>
    </ul>
</div>


<div class="input-group mb-2">
  
  <button class="btn btn-primary btn-lg dropdown-toggle w-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">Add</button>
  <ul class="dropdown-menu dropdown-menu-end">
    <li><a onclick="getContent('addMember.php', 'container')" class="dropdown-item" id="addMember"  href="#">Member</a></li>
    <li><a onclick="getContent('addCollege.php', 'container')" class="dropdown-item"  id="addCollege" href="#">College</a></li>
    <li><a onclick="getContent('addBranch.php', 'container')" class="dropdown-item" id="addBranch" href="#">Branch</a></li>
    <li><a onclick="getContent('addDepartment.php', 'container')" class="dropdown-item" id="addDepartment" href="#">Department</a></li>
    <li><a onclick="getContent('addRole.php', 'container')" class="dropdown-item" id="addRole" href="#">Role</a></li>
    </ul>
</div>

<div class="input-group mb-2">
  
  <button class="btn btn-primary btn-lg w-100" type="button" >Update Member</button>
  
</div>
<div class="input-group mb-2">
  
  <button class="btn btn-primary btn-lg dropdown-toggle w-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">Create Team</button>
  <ul class="dropdown-menu dropdown-menu-end">

    <li ><a onclick="getContent('addTeam.php', 'container')" class="dropdown-item" id="TeamName"  href="#">Add Team</a></li>
    <!-- <li ><a onclick="getContent('viewTeam.php', 'container')" class="dropdown-item" id="TeamYear"  href="#">View Team</a></li> -->
  </ul>

  
</div>

<div class="input-group mb-2">
  
  <button class="btn btn-primary btn-lg dropdown-toggle w-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">Delete</button>
  <ul class="dropdown-menu dropdown-menu-end">
    <li><a class="dropdown-item" href="#">Member</a></li>
    <li><a class="dropdown-item" href="#">College</a></li>
    <li><a class="dropdown-item" href="#">Branch</a></li>
    <li><a class="dropdown-item" href="#">Department</a></li>
    <li><a class="dropdown-item" href="#">Role</a></li>
    </ul>
</div>

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
      <th scope="col">Joining Year</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $con= mysqli_connect('localhost','root');
    $db= mysqli_select_db($con,'mp2');
    $result=mysqli_query($con,"SELECT `sae_cc_members`.`RegId` ,concat(`sae_cc_members`.`FiratName`,' ' ,`sae_cc_members`.`LastName`) As `Name`,`sae_cc_members`.`Gender`,`sae_cc_members`.`BranchId` as `Branch`,`sae_cc_members`.`ContactNumber` As `Contact` ,`sae_cc_members`.`Email`,`sae_cc_members`.`StatusId` As `Status`,`sae_cc_members`.`JoiningYear` FROM `sae_cc_members` ");
    while($row=mysqli_fetch_assoc($result)){
      echo "
      <tr>
      <td>$row[RegId]</td>
      <td>$row[Name]</td>
      <td>$row[Gender]</td>
      <td>$row[Email]</td>
      <td>$row[Contact]</td>
      <td>$row[Branch]</td>
      <td>$row[JoiningYear]</td>
      
    </tr>
      
      ";
    }
    
    ?>
  </tbody>

</table>
        </div>
      </div>
<script src="script.js"></script>
     
</script>
</body>
</html>
