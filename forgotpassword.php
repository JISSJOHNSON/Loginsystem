<html>
	<head>
		<title>Forgot password</title>
		<link rel="stylesheet" href="./files/style.css">
	</head>
	<body class="fbody">
		<form name="forform" action="forgotpasswordphp.php" method="post">
			<div class="fdivmain">
				<div class="fdivtop">
				</div>
				<div class="fdivform">
					<div class="fdivUsername"> 
						<input type="text" placeholder="Username" name="u_n" class="fusername" required maxlength="15">
					</div>
					<div class="fdivmail">
						<input type="email" placeholder="Email" name="e_id" class="fmail" required maxlength="20">
					</div>
					<div class="fdivsubmit">
						<input type="submit" value="Submit" name="submit_fdata" class="fsubmit">
						<a href="./index.php" class="fbacklog">Login</a>
					</div>
					<div class="fdivnote">
						Please Enter valid Email Id and username given at the time of Registration.
					</div>
				</div>
			</div>
		</form>
	</body>
</html>