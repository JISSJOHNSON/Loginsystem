<html>
	<head>
		<title>Register</title>
		<link rel="stylesheet" href="./files/style.css">
	</head>
	<!--##########################################################################-->
	<body class="rbody">
		<div class="rdivmain">
			<div class="rdivhead">
			</div>
			<div class="rdivform">
				<form name="regform" action="registerphp.php" method="post">
					<div class="rdivtbox">
						<input type="text" placeholder="First Name" name="f_n" pattern="^[A-Za-z]+" title="Please Enter valid Name" required class="rtbox" maxlength="15">
					</div>
					<div class="rdivtbox">
						<input type="text" placeholder="Last Name" name="l_n" pattern="^[A-Za-z]+" title="Please Enter valid Name" required class="rtbox" maxlength="15">
					</div>
					<div class="rdivtbox">
						<input type="text" placeholder="Username" name="u_n" pattern="^[A-Za-z0-9]+" required class="rtbox" title="Please Enter valid Name" maxlength="15">
					</div>
					<div class="rdivtbox">
						<input type="email" placeholder="Email" name="e_id" required class="rtbox" title="Please Enter valid Email-Id" maxlength="25">
					</div>
					<div class="rdivtbox">
						<input type="text" placeholder="Mobile No" name="m_no" pattern="^[0-9]+" required class="rtbox" title="Please Enter valid Number" maxlength="10">
					</div>
					<div class="rdivtbox">
						<input type="password" placeholder="Password" id="textpass" name="pswd" required class="rtbox" maxlength="20">
					</div>
					<div class="rdivtbox">
						<input type="password" placeholder="Confirm Password" id="conftextpass" name="cpswd" required class="rtbox" maxlength="20">
					</div>
					<div class="rdivtc">
						<input type="checkbox" required onclick="return Validate()">Accept 
							<a  class="rtc">Tems and Condoitions
								<span class="rtcs">
									<pre>(1) You will keep your username and password
	   safe, and won't share them with anyone.
	(2) You will not pass yourself off as someone
	   else or create multiple, false accounts.
									</pre>
								</span>
							 </a>.
					</div>
					<div class="rdivsubmit">
						<input type="submit" name="submit_rdata" value="Submit" class="ra">
						<a href="./index.php" class="rlogback">Login</a>
					</div>
				</form>
			</div>
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