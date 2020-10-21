  <!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

      <title>Transfer Money</title>
    </head>
    <body>
      <nav class="navbar navbar-dark bg-dark navbar-expand-lg" style="background-color: #e3f2fd;">
        <!-- Navbar content -->
    <img src="bank.jpg" width="55" height="55" class="navbar-brand mb-0 h1">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.html" style="padding-left: 1040px;">Home</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link active" href="users.php">Users</a><span class="sr-only">(current)</span>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="transfer.php">Transfer Record</a>
        </li>
      </ul>
    </div>
  </nav>

  <br><br>
  <form action="demo.php" method="POST">
  <div class="container ">
  <div class="row">
    <div class="col-sm-6">
    <div class="card bg-light" style="height:500px;">
        <div class="card-body" style="font-size:23px;">

        <?php
           if (isset($_POST['submit']))
          {
          $db = mysqli_connect("localhost", "root", "", "bank");
            $user=$_POST['sender'];
            $result=mysqli_query($db,"SELECT * FROM bank WHERE Name='$user'");
            while($row=mysqli_fetch_array($result))
            {
              echo "<br><br><br>";
              echo "<b>User ID</b> :- ".$row['User Id'];
              echo "<br><br>";
              echo "<b><p id='Sender'>Name</b> :- ".$row['Name']."</p>";
              echo "<br>";
              echo "<b>Email ID</b> :- ".$row['Email']; 
              echo "<br><br>"; 
              echo "<b>Money</b> :- ".$row['Credits'];
              echo "<br><br>";
            
            }
          }
        ?>

        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card bg-light" style="height:500px">
      
        <div class="card-body"><br><br>
        <b><h4 style="text-align:center;"><i><u>Transfer Money</u><i></h4></b><br></br>
        <input type="text" name="Sender" readonly class="form-control-plaintext" id="staticEmail" value="<?php
        echo "$user";
        ?>  
        "><br>
        <b>Receiver's Name:</b>
        <select name="Receiver" id="dropdown" style="padding-left:60px;padding-right:45px;">
        <option>--- Select Receiver ---</option>>

  <?php
  $db = mysqli_connect("localhost", "root", "", "bank");
  $res = mysqli_query($db, "SELECT * FROM bank WHERE Name!='$user'");
  while($row = mysqli_fetch_array($res)) {
      echo("<option>".$row['Name']."</option>");
  }
  ?>
 
  </select><br><br><br><br>
  <b>Amount to be transferred :<b>
  <input type="number" name="Money"> 
          <br><br><br><br>
          <button class="btn btn-primary" id="transfer" name="transfer">Transfer</button>

        </div>
      </div>
    </div>
    </form>
    </div>
    </div>
</body>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


</html>