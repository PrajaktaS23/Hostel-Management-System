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
/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
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
		 <input type="password" id="password" placeholder="Password"   class="ifield"
		 name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
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

var myInput = document.getElementById("password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}





</script>
</body>
</html>