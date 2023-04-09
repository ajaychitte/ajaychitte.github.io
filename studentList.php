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
			  <table class="table ">
  <thead>
    <tr>
    <th scope="col">Reg ID</th>
      <th scope="col">Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Email</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Branch</th>
      <th scope="col">Joining Year</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $con= mysqli_connect('localhost','root');
    $db= mysqli_select_db($con,'mp2');
    $result=mysqli_query($con,"SELECT `sae_cc_members`.`RegId` ,concat(`sae_cc_members`.`FiratName`,' ' ,`sae_cc_members`.`LastName`) As `Name`,`sae_cc_members`.`Gender`,`sae_cc_members`.`BranchId` as `Branch`,`sae_cc_members`.`ContactNumber` As `Contact` ,`sae_cc_members`.`Email`,`sae_cc_members`.`StatusId` As `Status`,`sae_cc_members`.`JoiningYear` FROM `sae_cc_members` WHERE `sae_cc_members`.`StatusId` != 'FA' ");
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

	<!-- Bootstrap JS -->
	
</body>
</html>
