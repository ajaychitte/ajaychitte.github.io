PHP
<?php
 
// Include Database connection
include("conn.php");
// Include SimpleXLSXGen library
include("xlsxgen.php");
 
$users = [
  ['RegId','AcademicYear','SAE_ID','DeptId','RoleId']
];
 
$id = 0;
$con= mysqli_connect('localhost','root');
$db= mysqli_select_db($con,'mp2');
$sql = "SELECT team22_23.RegId,academic_year.AcademicYear,team22_23.SAE_ID ,dept.DeptName,roles.RoleName, team22_23.MemberId  FROM team22_23
INNER JOIN academic_year ON team22_23.YearId = academic_year.YearId
INNER JOIN dept ON team22_23.DeptId = dept.DeptId
INNER JOIN roles ON team22_23.RoleId = roles.RoleId";
$res = mysqli_query($con, $sql);
if (mysqli_num_rows($res) > 0) {
  foreach ($res as $row) {
    $id++;
    $users = array_merge($users, array(array( $row['RegId'], $row['AcademicYear'], $row['SAE_ID'], $row['DeptName'], $row['RoleName'])));
  }
}
 
$xlsx = SimpleXLSXGen::fromArray($users);
$xlsx->downloadAs('team22_23.xlsx');