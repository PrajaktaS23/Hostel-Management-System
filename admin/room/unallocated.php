<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css">
    	th{
    		padding:0 15px 0 15px;padding-top: .5em;
    padding-bottom: .5em;
    	}

		.message{
			display:none;
			color:red;
		}
    </style>
</head>
<body style="background-color:  #ffe6ff">
	<table style="margin-left: 20vw;margin-top: 18vh;background-color: white;">
		<tr>
			<th>NAME</th>
			<th>REGNO</th>
			<th>Hostel Name </th>
			<th>Room NO</th>
			<th></th>
		</tr>
		
		<?php
           $username="root";
           $password="";
           $host="localhost";
           $db="dbcl";

            $conn = new mysqli($host, $username, $password,$db);

           // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }

          
          $sql = "SELECT  id, fullname, regno
        FROM   user
        WHERE  isallocated = 0";
         $result = $conn->query($sql);

         while ($row = $result->fetch_assoc()) {
         	echo "<tr><td style='padding:0 15px 0 15px;padding-top: .5em;
    padding-bottom: .5em;'>" . $row['fullname'] . "</td><td>" . $row['regno'] . "</td>
         	<td style='padding:0 15px 0 15px;padding-top: .5em;
    padding-bottom: .5em;'><select class='form-control'><option>Krishna</option>
				<option>Godawari</option>
				<option>Narmada</option></select></td>
			<td style='padding:0 15px 0 15px;padding-top: .5em;
    padding-bottom: .5em;'><span id=m".$row['id']." class='message'>*room is full</span><input id=t".$row['id']." type='text' class='form-control' onkeyup='checkRoom(".$row['id'].")'></td>
			<td style='padding:0 15px 0 15px;padding-top: .5em;
    padding-bottom: .5em;'><button id=b".$row['id']." class='ar btn btn-success'>ADD</button></td></tr>";
       
}

$result->free_result();

		?>
		<script type="text/javascript">
			$(".ar").click(function(){
				var regno=$(this).closest("tr").find("td:eq(1)").text();
				var hostel=$(this).closest("tr").find("td:eq(2) select option:selected").text();
				var room=$(this).closest("tr").find("td:eq(3) input[type='text']").val();
				console.log(regno+" "+hostel+" "+room);
               
				$.ajax({
					url: "assignroom.php",
					type:'post',
					data:{regno:regno,room:room,hostel:hostel},
					success:function(response){
						console.log(response);
						 
					},
					error:function(){
						console.log("errored");
					}
				});
				$(this).parents("tr").first().remove();
			});

		

			// room check logic
			function checkRoom(id){
				 //var id = id;
				var roomNo = $('#t'+id).val().trim();
				if(roomNo != ''){
				$.ajax({
					url: 'checkRoom.php',
					type: 'post',
					data: {roomNo:roomNo},
					success: function(responce){
						if(responce == 4)
						{
							$('#m'+id).show();
							//$('#m'+id).attr('color', 'red');
							$('#b'+id).attr('disabled', true);
						}
						else{
							$('#m'+id).hide();
							$('#b'+id).attr('disabled', false);
						}
					}
				}); 
				}
				
			}



		</script>
	</table>

</body>
</html>