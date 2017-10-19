<?php
	if (isset($_POST["submit_ldata"]))
		{
		$salt='hcedc!@#$365236geudg625166526@$%%!^@^$616';
		$pwd=md5(md5(md5(md5($salt.$_POST["pswd"].$salt))));
		$link=mysqli_connect("localhost","root","","login_sys");
		$count=0;
		$result=mysqli_query($link,"select * from users where User_name='$_POST[u_n]' && Password='$pwd'");
		$count=mysqli_num_rows($result);
		if($count>0)
		{
			?>
			<script type="text/javascript">
				window.location="./welcome.php";
			</script>
			<?php
		}
		else
		{
			?>
			<script type="text/javascript">
				alert("Invalid Username/Password");
				window.location="./index.php";
			</script>
			<?php
		}
	}
?>