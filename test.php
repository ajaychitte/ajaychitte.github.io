
<?php
session_start();

// Redirect the user to the login page if they are not logged in
if (!isset($_SESSION['loggedin'])) {
	header('Location: adminlogin.php');
	exit();
}

?>


<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Export HTML5 Table to Excel</title>
</head>

<body>
  <div class="container table-responsive">
    <div class="d-flex justify-content-between align-items-center flex-wrap mb-2">
      <a href="#"></a>
      <a href="export.php" class="btn btn-outline-info">Export to Excel</a>
    </div>
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
        <th scope="col"></th>
          <th scope="col">Registration Number</th>
          <th scope="col">Academic Year</th>
          <th scope="col">SAE_Id</th>
          <th scope="col">Department </th>
          <th scope="col">Role</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $id = 0;
        $con= mysqli_connect('localhost','root');
        $db= mysqli_select_db($con,'mp2');
        $sql = "SELECT team22_23.RegId,academic_year.AcademicYear,team22_23.SAE_ID ,dept.DeptName,roles.RoleName, team22_23.MemberId  FROM team22_23
        INNER JOIN academic_year ON team22_23.YearId = academic_year.YearId
        INNER JOIN dept ON team22_23.DeptId = dept.DeptId
        INNER JOIN roles ON team22_23.RoleId = roles.RoleId ";
        $res = mysqli_query($con, $sql);
        if (mysqli_num_rows($res) > 0) {
          foreach ($res as $row) {
            $id++;
        ?>
            <tr>
              <th scope="row"><?php echo $id; ?></th>
              <td><?php echo $row['RegId']; ?></td>
              <td><?php echo $row['AcademicYear']; ?></td>
              <td><?php echo $row['SAE_ID']; ?></td>
              <td><?php echo $row['DeptName']; ?></td>
              <td><?php echo $row['RoleName']; ?></td>
            </tr>
        <?php }
        } ?>
      </tbody>
    </table>
  </div>
  <!-- Bootstrap Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
 
</html>