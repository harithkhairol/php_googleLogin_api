<?php

require_once "google-config.php";

if(isset($_SESSION['access_token'])){

	header('Location: index.php');
	exit();

}

$loginUrlGoogle = $gClient->createAuthUrl();

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
		<div class="row justify-content-center">
			
			
			

			<form>
				<h1>Google Login</h1>
				<br><br>
				<input type="email" name="email" class="form-control" placeholder="Email">

				<br>

				<input type="password" name="password" class="form-control" placeholder="Password">

				<br>

				<input type="button" value="continue with google" class="btn btn-danger form-control" onclick="window.location ='<?php echo $loginUrlGoogle; ?>' ">

			</form>

		</div>

	</div>

</body>
</html>