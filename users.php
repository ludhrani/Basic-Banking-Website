<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>List Of Users</title>
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
      <li class="nav-item active">
        <a class="nav-link" href="#">Users<span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="transfer.php">Transfer Record</a>
      </li>
    </ul>
  </div>
</nav>
<form action="view.php" method="post">
<h3 style="text-align:center;height:100px;color:black;font-size:35px;padding-top:20px"><i><u>View Details</u></i></h3>
    <h5 style="text-align:center;color:gray">
    Select User to view details:
  <select name="sender" id="sender" style="padding-left:60px;padding-right:45px;" required >
    <option >--Select User--</option><br>
<?php
$db = mysqli_connect("localhost", "root", "", "bank");
$res = mysqli_query($db, "SELECT * FROM bank");
while($row = mysqli_fetch_array($res)) {
    echo("<option>  ".$row['Name']."</option>");
}
?>
</select>
</h5><br><br>

<div style="text-align:center">
<button class="btn btn-outline-primary" id="submit" name="submit">View User Details
</div><br></form><hr style="height:2px;border-width:0;color:black;background-color:black">
<h3 style="text-align:center;height:100px;color:black;font-size:35px;padding-top:20px"><i><u>List Of Users</u></i></h3>

    <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">User ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email ID</th>
      <th scope="col">Credits</th>
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
          $result=mysqli_query($con,"SELECT * FROM bank");
           while($row=mysqli_fetch_array($result))
           {
             echo "<tr>";
             echo "<td>".$row['User Id']."</td>";
             echo "<td>".$row['Name']."</td>";
             echo "<td>".$row['Email']."</td>";
             echo "<td>".$row['Credits']."</td>";
             echo "</tr>";
           }         
          ?>
          </table>

          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
