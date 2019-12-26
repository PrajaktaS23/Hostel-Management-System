<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width" initial-scale=1>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>
   p
  {
    color:black; font-size:30px;
  }
body{
      
      background-repeat: no-repeat;
      background-size: cover;
}

#myDIV {
  width: 100%;
  padding: 50px 0;
  text-align: left;
  
  margin-top: 10px;
}
</style>
</head>
<body>

  <div class="container">
 
<br>
<br>
<br>
<h1 style="color: black;">Enter room number to get names of students:</h1>
<input type="text" style="font-size:24px;width: 430px" class="form" name="rnum" placeholder="Room Number">
<br>
<br>
 <button style="width: 430px;height: 40px;background-color:  #00B587;" onclick="myFunction()">Search</button>
 
<!--reult -->
 <p id="demo">
  
</p>
  <br>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
function myFunction() {
  var str = $("input[type='text'].form").val();

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML=this.responseText;
    }
    
    };
  xhttp.open("GET", "fetch1.php?x="+str, true);
  xhttp.send();
  }


</script>


</body>
