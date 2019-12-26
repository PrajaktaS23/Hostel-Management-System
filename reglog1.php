<?php  
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: wlcmstudent.php");
    exit;
    }
?>
<!DOCTYPE html>

<html>
<head>
	<style type="text/css">
		body
		{
			background-image: url("hostel.jpg");
			background-size: cover;
		}
		.ifield
		{
			border-radius: 15px;
			
			background-color: white;
			height: 30px;
			color: black;
			padding-left: 7px;
			border-color:black;
			border:solid 1.5px;
		}
		.btn
		{
			background-color: white;
			color: #b35900;
			border-radius: 15px;
			height: 35px;
			width: 18.5vw;
			border:solid 1.5px;
			border-color: black;

		}
        .txt
        {
        	color: white;

        }
	</style>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>

	
	
	<div id="reg_form" style="margin-top: 7vh;margin-left: 7vw; width:23vw;padding-left: 5vw; font-weight: 5px;box-shadow: 10px 10px grey;
	padding-top: 5vh;padding-bottom: 5vh;  background-color:#b35900;">
	<form action="auth/register.php" method="post" >
		 <p style="color:  white;font-size: 30px;margin-left: 4vw;"><i>Register</i></p>
        <div>
		<input type="name" name="fullname" placeholder="Fullname" class="ifield" required>
		</div>
		<br>
		<div>
		<input type="email" name="email" placeholder="Email id" class="ifield" required>
		</div>
		<br>
		<div>
		<input type="text" name="contact" placeholder="Contact number" class="ifield" required>
		</div>
		<br>
		<div>
		<input type="text" name="address" placeholder="Address" class="ifield" required>
		</div>
		<br>
        <div>
		<input type="text" name="regno" placeholder="RegNO" class="ifield" required>
		</div>
		<br>
		<div>
		<input type="password" name="password" placeholder="password" class="ifield"  required>
		</div>
		<br>
		

		<input class="btn" type="submit" value="SUBMIT">

	</form>
	<br>
	<span class="txt">Already a user ?<a id="registration" style="color: white" href="#">login here</a></span>

</div>
<div id="login_form" style="display: none;margin-top: 25vh;margin-left: 7vw;width:23vw;padding-left: 5vw; font-weight: 5px;box-shadow: 10px 10px grey;
	padding-top: 5vh;padding-bottom: 5vh;  background-color:#b35900 ">
	<form action="auth/login.php" method="post">
		
         <p style="color:  white;font-size: 30px;margin-left: 5vw;"><i>Login</i></p>
		<input type="text" name="regno" placeholder="RegNO"  class="ifield" required>
		
		
		<br>
		<br>
		<input type="password" name="password" placeholder="password" class="ifield"  required>
		<br><br>
		
		<input type="submit" class="btn" value="SUBMIT">
	</form>
	<br>
	<span class="txt">not a user ?<a id="login" href="#" style="color: white">register here</a></span>

</div>

<script>
	$(document).ready(function()
	{
		$("#registration").click(function(){
			$("#reg_form").hide();
			$("#login_form").show();
		});
		$("#login").click(function(){
			$("#login_form").hide();
			$("#reg_form").show();
		});
	})
</script>
</body>
</html>