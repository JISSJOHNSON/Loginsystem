<!DOCTYPE html>
<html>
<head>
	<title>Reset Password</title>
	<link rel="stylesheet" href="./files/style.css">
</head>
<body class="rebody">
		<div class="redivmain">
			<div class="redivtop">
			</div>
			<form name="resform" action="resetphp.php" method="post">
				<div class="redivform">
					<div class="redivpass">
						<input type="email" placeholder="Email ID" name="e_id" class="repass" required maxlength="15">
					</div>
					<div class="redivpass">
						<input type="Password" placeholder="New Password" id="textpass" name="pswd" class="repass" required maxlength="20">
					</div>
					<div class="redivpass">
						<input type="Password" placeholder="Confirm Password" id="conftextpass" name="pswd" class="repass" required maxlength="20">
					</div>
					<div class="redivsubmit">
						<input type="submit" value="Submit" name="submit_fdata" onclick="return Validate()" class="resubmit">
						<a href="./index.php" class="rebacklog">Login</a>
					</div>
				</div>
			</form>
		</div>
		<script type="text/javascript">
			function Validate()
			{
				var password = document.getElementById("textpass").value;
				var confirmPassword = document.getElementById("conftextpass").value;
				if (password != confirmPassword)
				{
					alert("Passwords do not match.");
					return false;
				}
				return true;
			}
		</script>
	</body>
</html>