<?php
	if(isset($_POST["submit_rdata"]))
	{
		$link=mysqli_connect("localhost","root","","login_sys");
		$counter=0;
		$result=mysqli_query($link,"select * from users where User_name='$_POST[u_n]'");
		$counter=mysqli_num_rows($result);
		if($counter>0)
		{
			?>
				<script type="text/javascript">
				alert("This Username already exist please try another.")
				</script>
			<?php
		}
		else
		{
			$salt='hcedc!@#$365236geudg625166526@$%%!^@^$616';
			$pwd=md5(md5(md5(md5($salt.$_POST["pswd"].$salt))));
			mysqli_query($link,"INSERT INTO `users` (`ID`, `First_Name`, `Last_Name`, `User_Name`, `Email_id`, `Mobile`, `Password`) VALUES (NULL,'$_POST[f_n]','$_POST[l_n]','$_POST[u_n]','$_POST[e_id]','$_POST[m_no]','$pwd')");
			?>
				<script type="text/javascript">
				alert("Registration Successfull.")
				</script>
			<?php
			//header('location: index.php');
		}
	}
?>