<?php  
session_start();
if(isset($_SESSION["aloggedin"]) && $_SESSION["aloggedin"] === true){
    header("location: wlcmadmin.php");
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

	
	
	
<div id="login_form" style="margin-top: 25vh;margin-left: 7vw;width:23vw;padding-left: 5vw; font-weight: 5px;box-shadow: 10px 10px grey;
	padding-top: 5vh;padding-bottom: 5vh;  background-color:#b35900 ">
	<form action="auth/login.php" method="post">
		
         <p style="color:  white;font-size: 30px;margin-left: 2vw;"><i>Admin Login</i></p>
		<input type="text" name="username" placeholder="Username"  class="ifield" required>
		
		
		<br>
		<br>
		<input type="password" name="password" placeholder="password" class="ifield"  required>
		<br><br>
		
		<input type="submit" class="btn" value="SUBMIT">
	</form>
	<br>
	
</div>


</body>
</html>