<html lang="en">
  <head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    body
    {
    
      background-repeat: no-repeat;
      background-size: cover;
    }
    .form-group
    {
  width: 50%;
  margin-left: 150px;
  
     }
     .but
     {
     max-width:   50%;
      margin-left: 1px;
     }

     .hcard:hover
     {
      box-shadow: 5px 0px 10px #22A700,0px 5px 10px #22A700,-5px 0px 10px #22A700,0px -5px 10px #22A700;
      transition: 0.5s;
     }

     .mbtn
     {
      height: 50px;
      width: 300px;
      border-radius: 10px;
      border :solid black 3px;
      font-size: 18px;
      color: black;
      background-image: linear-gradient(135deg,white,lightblue,white);
      float: left;
      margin-top: 0px;
     }



     .fmodal
     {
       height: 500px;
       width: 350px;
       background-image: radial-gradient(white 50%,lightblue);
       box-shadow: 2px 2px 10px grey,-2px -2px 10px grey;
       position: absolute;
       left: 40%;
       top: 10%;
       z-index: 5;
       display: none;
       transition: 0.5s;
       
     }

     .fmodal form
     {
      position: relative;
      left: 21%;
      top: 5%;
     }

     .fmodal form p
     {
      left: 20%;
      position: relative;
      font-weight: bold;
     }

     .fmodal form button
     {
      position: relative;
      left: 23%;
      border-radius: 5px;
      background: #00B587;
      border:0;
      font-weight: bold;
      width: 50px;
     }

     .result
     {
      font-size: 20px;
      font-weight: bold;
      color: black;
      margin-top: 20px;
      
     }
     .button
     {
      border:3px solid black;
      padding: 7px;
      background-color: #00B587;
      float: right;

     }
     .container
     {
      margin-top: 10vh;
     }

       
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
   <title>student</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="style.css">
    


  </head>
  <body  style="overflow-x: hidden;">

    

    
     
      
  
    
    

<div class="container" style="margin-top: 40px;margin-top: 20vh" >
  <form >
    <div class="form-group" style="position: relative; left: 10vw">
      <label style="color: black;">STUDENT NAME:</label>
      <input type="text" name="name" class="form-control text" placeholder="Name">
      
       <div class="but">
       <button type="button" onclick="myfunction()" class="btn btn-info btn-block" data-toggle="collapse" data-target="#demo" style="margin-top: 20px; width: 41vw; background: #00B587;">search for room no.</button>
       <p id="demo" class="result"></p>
      </div>
  </div>
  </form>

 

  
  
    
  
</div>
    


  
    
  


    



    
     
     <script type="text/javascript">
      
       
       
       
       function myfunction()
       {
        var str = $("input[type='text'].text").val();
        
       var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML=this.responseText;
      }
      
       };
      xhttp.open("GET","fetch.php?x="+str, true);
      xhttp.send();
       }

     
      

     </script>
 <script src="jscript.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
