<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
<link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>

</head>
<body>
  <nav>
  <div class="nav-wrapper">
    

     <ul class="left hide-on-med-and-down">

       <li><a href="#" style="background-color:#b35900 ">Home</a></li>
       <li><a href="#">Gallery</a></li>
    
       <li><a href="abtus.html">About</a></li>
       
       <li><a href="fess.html">Fees structure</a></li>
       <li><a href="mess.html">Facility</a></li>

     </ul>
     <b> <a href="reglog.php" class="right hide-on-med-and-down " style="text-shadow: 2px 1px 1px white;
     padding-left: 2px;padding-right: 2px">Login/Signup</a></b>
  </div>
  <div>
   <p><b>GIRLS <br> <br>HOSTEL</b></p>
  </div>
</nav>
  
  <section>

    
  </section>
  

 

</body>
</html>

<!-- script -->


  <script>
     
     $(document).ready(function(){
          
          $(window).scroll(function(){

            if($(window).scrollTop()>300){
              $('nav').addClass('#b35900');
            }else{
              $('nav').removeClass('#b35900');
            }

          });

     });

  </script>
 


<!-- style -->
<style>
    
    nav{
      position: fixed;
      background: rgba(0, 0, 0, 0.2);
      padding:0px 20px;
    }

    section{
      background-image: url(hostel.jpg);
      background-size: cover;
      width: 100%;
      height: 800px;
    }
    nav a{
      font-size: 18px;
      color: #b35900;

    }
    nav a:hover{
      background: white;

    }

    nav li a:hover{
      background: #b35900;
    }

    p{
      margin-top: 20vh;
  text-align: left;
  font-family: 'Prata', Helvetica, sans-serif;
  font-size: 70px;
  margin-left: 4vw;
  
  color: #b35900;
  
    
}

</style>