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
                    <a class="nav-link active fs-4" aria-current="page" href="">Home</a>
                    <a class="nav-link fs-4" href="about.php">About</a>
                    <a class="nav-link fs-4" href="help.php">Help</a>

                </div>
                
            </div>
            <div class="d-flex">
                    <a href="logout.php" class="btn btn-danger btn-lg">Logout</a>
                </div>
        </div>
    </nav>
	<div class="container center-div">
        <h1 class="display-2 text-center fw-bolder mt-5 " style="
    margin-bottom: 6rem">Welcome to MIS Team Phoenix</h1>
	<h5 class="text-center fw-lighter">Please select the Module</h5>
    <div class="d-flex justify-content-center gap-2 mt-4">
        <a class="btn btn-primary btn-lg w-50" href="student.php" role="button">Student</a>
    <a class="btn btn-primary btn-lg w-50" href="#" role="button">Inventory</a>
    </div>
    <div class="d-flex justify-content-center gap-2 mt-2">
        <a class="btn btn-primary btn-lg w-50" href="#" role="button">Finance</a>
    <a class="btn btn-primary btn-lg w-50" href="#" role="button">Event</a>
    </div>
    </div>
    
</body>
</html>
