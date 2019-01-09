<?php

session_start();

if(!isset($_SESSION['access_token'])){

	header('Location: login.php');
	exit();

}


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container" style="margin-top: 100px">
		<div class="row">
			
			<div class="col-md-3" >

				<img style="width: 80%"> src="<?php echo $_SESSION['picture'];  ?>">
				
			</div>

			<div class="col-md-9">

				<table class="table table-hover table-bordered">

					<tbody>
						
						<tr>
							<td>ID</td>
							<td><?php echo $_SESSION['id']; ?></td>
						</tr>
						<tr>
							<td>First Name</td>
							<td><?php echo $_SESSION['givenName']; ?></td>
						</tr>
						<tr>
							<td>Last Name</td>
							<td><?php echo $_SESSION['familyName']; ?></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><?php echo $_SESSION['email']; ?></td>
						</tr>
						<tr>
							<td>Gender</td>
							<td><?php echo $_SESSION['gender']; ?></td>
						</tr>

					</tbody>

				</table>
				

			</div>
			

		</div>

	</div>

</body>
</html>