<?php
	if(isset($_POST["submit_fdata"]))
	{
		$link=mysqli_connect("localhost","root","","login_sys");
		$counter=0;
		$result=mysqli_query($link,"select * from users where User_name='$_POST[u_n]' && Email_id='$_POST[e_id]'");
		$counter=mysqli_num_rows($result);
		if($counter>0)
		{
			header('location: reset.php');
		}
		else
		{
			?>
				<script type="text/javascript">
				alert("Please Enter valid Email Id and username given at the time of Registration")
				</script>
			<?php
		}
	}
 ?>