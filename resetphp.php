<?php
	if(isset($_POST["submit_fdata"]))
	{
		$link=mysqli_connect("localhost","root","","login_sys");
		$counter=0;
		$result=mysqli_query($link,"select * from users where Email_id='$_POST[e_id]'");
		$counter=mysqli_num_rows($result);
		if($counter>0)
		{
			$salt='hcedc!@#$365236geudg625166526@$%%!^@^$616';
			$pwd=md5(md5(md5(md5($salt.$_POST["pswd"].$salt))));
			mysqli_query($link,"UPDATE `users` SET `Password` = '$pwd' WHERE `users`.`Email_id` = '$_POST[e_id]'");
			//header('location: reset.php');
			?>
			<script type="text/javascript">
			alert("Password Reseted.")
			</script>
			<?php
		}
		else
		{
			?>
				<script type="text/javascript">
				alert("Please Enter valid Email Id given at the time of Registration")
				</script>
			<?php
		}
	}
?>