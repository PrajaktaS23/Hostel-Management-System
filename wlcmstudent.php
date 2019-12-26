<?php 
session_start();
if (!isset($_SESSION['loggedin'])) {
	echo "something went wrong!!please try again";
	
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<style type="text/css">
 		.header
 		{
 			margin-top: -4px;
 			width: 100%;
 			height: 10vh;
 			background-color: #b35900;
 			border-radius: 5px;
 		}

 	</style>
 </head>
 <body style="background-color: black">
   <div class="header">
   <span  style="color: white;font-size: 40px;margin-left: 6vw;text-transform: uppercase;"><?php echo "WELCOME  " .$_SESSION['fullname']."."; ?>
   	

   </span>
    <span  style="color: white;font-size: 22px;margin-left: 3vw"><?php echo "[".$_SESSION['regno']."]"; ?> </span>
   	<form action='auth/logout.php' style="margin-left: 80vw;margin-top: -6vh;padding: 0px;" ><input type='submit' value='Logout' style="padding: 10px;background-color: white;color: black;font-size: 20px;border-radius: 5px;border-color: white"></form>
   	
   		
   

   	
   </div>



    
    <div style="margin-top: 10vh;margin-left: 30vw;background-image:url('board.png');background-repeat: no-repeat;background-size: cover;width: 40vw;padding: 20px;height: 120vh">
       <center><h1 style="margin-right: 3vw;margin-top: 19vh"><u>My Profile</u></h1></center>
      <div style="margin-top: 4vh;margin-left: 4vw">
    
 	<span style="font-size: 25px;"><b>Name  :</b><?php echo "<i>".$_SESSION['fullname']."</i>"; ?></span><br><br><br>
 	<span style="font-size: 25px"><b>Email :</b><?php echo "<i>".$_SESSION['email']."</i>"; ?></span><br><br><br>
    <span style="font-size: 25px"><b>Contact :</b><?php echo "<i>".$_SESSION['contact']."</i>"; ?></span><br><br><br>
    <span style="font-size: 25px"><b>Address :</b><?php echo "<i>".$_SESSION['address']."</i>"; ?></span><br><br><br>
    <span style="font-size: 25px"><b>Reg. number :</b><?php echo "<i>".$_SESSION['regno']."</i>"; ?></span><br>
    <br>
    <br>
    
    <center><h1 style="margin-right: 5vw"><u>My Room</u></h1></center>
<span style="font-size: 25px">
    <?php
    
    if (isset($_SESSION['isallocated'])) {
      if ($_SESSION['isallocated']==0) {
        echo "<i>you have not yet allocated room.</i>";
      }
      else{
        echo "<b>Hostel Name    :</b><i>".$_SESSION['hostelname']."</i><br>";
        echo "<br><b>Room No    :</b><i>".$_SESSION['roomno']."</i>";
      }
    }
    ?>
  </span>

    </div>


    </div>

 
 </body>
 </html>