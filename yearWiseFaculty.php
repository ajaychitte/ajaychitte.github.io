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
			
                  <table class="table">
  <thead>
    <tr>
      <th scope="col">Reg ID</th>
      <th scope="col">First</th>  
      <th scope="col">Last</th>
      <th scope="col">Gender</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">Status</th>
      <th scope="col">Joining Year</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $con= mysqli_connect('localhost','root');
    $db= mysqli_select_db($con,'mp2');
 
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $search_query = $_POST['joiningYearFa'];
        $query = "SELECT * FROM sae_cc_members WHERE JoiningYear LIKE '%$search_query%' AND StatusId = 'SW' ";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        echo "
      <tr>
      <td>$row[RegId]</td>
      <td>$row[FiratName]</td>     
      <td>$row[LastName]</td>
      <td>$row[Gender]</td>
      <td>$row[Email]</td>
      <td>$row[ContactNumber]</td>
      <td>$row[StatusId]</td>
      <td>$row[JoiningYear]</td>
      
    </tr>
      
      ";
    }
} else {
    echo 'No results found';
}
mysqli_close($con);

	}
   
    
    ?>
  </tbody>

</table>
            
		</div>
	</div>

	<!-- Bootstrap JS -->
	
</body>
</html>