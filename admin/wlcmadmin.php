<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <title>admin</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#"><i style="color: green">Girls Hostel</i></a>
    
      <!--  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Assign Room <span>(5)</span></button> -->
    <?php
    require "auth/config.php";

    $sql = "SELECT COUNT(*) AS ucount FROM user WHERE isallocated=0;";
    $result = $conn->query($sql);
    $row = $result->fetch_array();
    $ucount= $row['ucount'];
    if ($ucount==0)
    {
      echo '<a class="nav-link disabled" href="room/unallocated.php" tabindex="-1" aria-disabled="true">Assign Room</a> ';
    }
    else{
    echo '
        <a class="btn btn-outline-success"  href="room/unallocated.php">Assign Room <span>('. $ucount.')</span></a>';

     }

    ?>
    
    <form action="auth/logout.php"><button class="btn btn-success" style="margin-left: 70vw">Logout</button></form>

    
  </div>
</nav>

<h1><center>Search for room and student details </h1></center>




<div class="col s12 m7" style="margin-left: 20vw;margin-top: 10vh">
     
     
      <div class="card-stacked">
        <div class="card-content">
          <p><b>Enter Name of student and get:</b>
            <ul>
              <li>Room Number</li>
              <li>Hostel Name</li>
              <li>Registration no</li>

            </ul></p>
        </div>
        <div class="card-action">
          <a href="room/search.php">CLICK HERE</a>
        </div>
      </div>
    </div>
  </div>
<br>
<HR>
  <div class="col s12 m7" style="margin-left: 20vw;">
    
     
      <div class="card-stacked">
        <div class="card-content">
          <p><b>Enter room no and get :</b>
            <ul>
              <li>Name of girls</li>
              
              <li>Registration no of girls</li>

            </ul></p>
        </div>
        <div class="card-action">
          <a href="room/search1.php">CLICK HERE</a>
        </div>
      </div>
    </div>
  </div>
<br><br><br>

</HR>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>