<?php

ob_start();

session_start();


include("config/config.php");

/********************If login button is set ***********************/

if (isset($_POST['login'])) {

	$parameters=array("email"=>$_POST['email'],"password"=>$_POST['password']);

	$response=curl_request("token",$parameters);

	$response=json_decode($response);


	if (isset($response->id)&&$response->id!='') {


		$_SESSION['userid'] = $response->user->id;

		$_SESSION['name'] = $response->user->first_name." ".$response->user->last_name;

		$_SESSION['gender'] = $response->user->gender;

		$_SESSION['active'] = $response->user->active;

		$_SESSION['token'] = $response->token_key;

		$_SESSION['refresh_token_key'] = $response->refresh_token_key;

	
		header("Location: dashboard.php");

		exit;

	} else {

		header("Location: index.php?status=1");

		exit;

	}

}


$msg = '';

if (isset($_GET['status']) && $_GET['status'] == '1') {

	$msg = "<div class='col-md-12 alert alert-danger'>Invalid Login Credentials. Please Enter Correct Login Credentials.</div>";
} 

?>



<!DOCTYPE html>

<html class="h-100" lang="en">



<head>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width,initial-scale=1">

	<title>Royal Apps | Login</title>

	<!-- Favicon icon -->

	<link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">

	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->

	<link href="css/style.css" rel="stylesheet">



</head>



<body class="h-100">



	<!--*******************

        Preloader start

    ********************-->

	<div id="preloader">

		<div class="loader">

			<svg class="circular" viewBox="25 25 50 50">

				<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />

			</svg>

		</div>

	</div>

	<!--*******************

        Preloader end

    ********************-->


	<div class="login-form-bg h-100">

		<div class="container h-100">

			<div class="row justify-content-center h-100">

				<div class="col-xl-6">

					<div class="form-input-content">

						<div class="card login-form mb-0">

							<div class="card-body pt-5">

								<a class="text-center" href="index.php">

									<h4> <br>Royal Apps</h4>

								</a>



								<form action="" method="post" onsubmit='return formValidator();'>

									<div class="form-group">

										<input type="email" class="form-control" placeholder="Email" name="email" id="email">

									</div>

									<div class="form-group">

										<input type="password" class="form-control" placeholder="Password" name="password" id="password">

									</div>

									<button class="btn login-form__btn submit w-100" type="submit" value="Log in" name="login">Sign In</button>

								</form>



							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>









	<!--**********************************

        Scripts

    ***********************************-->

	<script src="plugins/common/common.min.js"></script>

	<script src="js/custom.min.js"></script>

	<script src="js/settings.js"></script>

	<script src="js/gleek.js"></script>

	<script src="js/styleSwitcher.js"></script>

</body>



</html>



<script>

	//function to validate username and password

	function formValidator() {

		var userName = document.getElementById('email').value;

		var password = document.getElementById('password').value;



		if (userName == '') {

			alert("Please enter Email");

			document.getElementById('userName').focus();

			return false;

		}



		if (password == '') {

			alert("Please enter Password");

			document.getElementById('password').focus();

			return false;

		}

	}




	//-----------Function to validate email format--------//		

	function validEmail(e) {

		var filter = /^\s*[\w\-\+_]+(\.[\w\-\+_]+)*\@[\w\-\+_]+\.[\w\-\+_]+(\.[\w\-\+_]+)*\s*$/;

		return String(e).search(filter) != -1;

	}




</script>