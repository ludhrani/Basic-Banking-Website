<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Transfer Record</title>
  </head>
  <link rel="stylesheet" href="users.php">
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
        <a class="nav-link " href="index.html" style="padding-left: 1040px;">Home</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="users.php">Users</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link active" href="#">Transfer Record</a><span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
<h3 style="text-align:center;height:100px;color:black;font-size:35px;padding-top:20px"><i><u>Transfer History</u></i></h3>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Transferred ID</th>
      <th scope="col">Sender</th>
      <th scope="col">Receiver</th>
      <th scope="col">Money</th>
    </tr>
  </thead>

<?php
$db_host="localhost";
$username="root";
$password="";
$db="bank";
$con = mysqli_connect( $db_host , $username, $password , $db);

if(!$con){
    die("connection failed");
}
          $result=mysqli_query($con,"SELECT * FROM transfer");
           while($row=mysqli_fetch_array($result))
           {
             echo "<tr>";
             echo "<td>".$row['Transferred Id']."</td>";
             echo "<td>".$row['Sender']."</td>";
             echo "<td>".$row['Receiver']."</td>";
             echo "<td>".$row['Money']."</td>";
             echo "</tr>";
           }         
          ?>
          </table>  