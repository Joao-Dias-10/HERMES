<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">



	<link rel="icon" type="image/png" href="iuricode\assets\img\hermes.png" />
	<!--===============================================================================================-->
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="iuricode\vendor\loginvendor\bootstrap\css\bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="iuricode\assets\fonts\loginfonts\font-awesome-4.7.0\css\font-awesome.min.css">
	<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="iuricode\vendor\loginvendor\animate\animate.css"> -->
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="iuricode\vendor\loginvendor\css-hamburgers\hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="iuricode\vendor\loginvendor\select2\select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="iuricode/assets/css/logincss/util.css">
	<link rel="stylesheet" type="text/css" href="iuricode/assets/css/logincss/main.css">
	<!--===============================================================================================-->
</head>
<style>
	h5 {
		color: red;
		font-family: verdana;

	}

	h1 {
		color: #3413f0;
	}
</style>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="iuricode\assets\img\Webp.net-gifmaker (1).gif" alt="IMG">
				</div>

				<form action="index.php" class="login100-form validate-form" method="post" enctype="multipart/form-data">
					<span class="login100-form-title">
						<img src="iuricode\assets\img\LOGIN.png" height="90">

					</span>

					<div class="wrap-input100 validate-input">
						<select class="input100">
							<option selected>FSA</option>
							<option value="1">SSA</option>
							<option value="2">SP</option>
						</select>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input">
						<!--  data-validate="Valid email is required: ex@abc.xyz" -->
						<input class="input100" type="text" name="login" placeholder="Usuario">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="senha" placeholder="Senha">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">Login</button>
					</div>

				</form>

			</div>

		</div>
	</div>




	<!--===============================================================================================-->
	<script src="iuricode\vendor\loginvendor\jquery\jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="iuricode\vendor\loginvendor\bootstrap\js\popper.js"></script>
	<script src="iuricode\vendor\loginvendor\bootstrap\js\bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="iuricode\vendor\loginvendor\select2\select2.min.js"></script>
	<!--===============================================================================================-->
	<!-- <script src="iuricode\vendor\loginvendor\tilt\tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script> -->
	<!--===============================================================================================-->
	<script src="iuricode\assets\js\loginjs\main.js"></script>

</body>

</html>