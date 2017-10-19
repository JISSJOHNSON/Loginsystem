<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" href="./files/style.css">
		</head>
		<!--####################################################################################################-->
		<body class="ibody">
		<form name="form1" action="indexphp.php" method="post">
			<div class="idivmain">
				<div class="idivtop">
				</div>
				<div class="idivform">
					<div class="idivUsername"> 
						<input type="text" placeholder="Username" class="iusername" name="u_n" required pattern="^[A-Za-z]+" maxlength="15">
					</div>
					<div class="idivPassword">
						<input type="password" placeholder="Password" class="ipassword" name="pswd" required maxlength="20">
					</div>
					<div class="idivsubmit">
						<input type="submit" value="Login" name="submit_ldata" class="isubmit">
						<a href="./forgetpassword.php" class="ia">Forgot Password</a>
					</div>
					<div class="iregister">
						New user? <a href="./register.php" class="iaa">Register here</a>
					</div>
				</div>
			</div>
		</form>
	</body>
</html>