<html>
<head>
<title>Transaction</title>
</head>
<body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<nav class="navbar navbar-dark bg-dark navbar-expand-lg" style="background-color: #e3f2fd;">
      <!-- Navbar content -->
  <img src="bank.jpg" width="55" height="55" class="navbar-brand mb-0 h1">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link " href="#" style="padding-left: 1040px;">Home</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link active" href="users.php">Users<span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="transfer.php">Transfer Record</a>
      </li>
    </ul>
  </div>
</nav><br>
<br>
<div id="text" name="text1" class="alert alert-success" role="alert">
  Transaction Successful!
</div>

<div id="text2" name="text2" class="alert alert-danger" role="alert">
  Transaction Cancelled due to Insufficient Balance!
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script>
  $('#text').hide();
  $('#text2').hide();
  
  </script>

</body>
</html>

<?php
//session_start();
$server="localhost";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password,"bank");
if(!$con){
    die("Connection failed");
} 


$flag=false;

if (isset($_POST['transfer']))
{
  $sender=$_POST["Sender"];
$receiver=$_POST["Receiver"];
$amount=$_POST["Money"];
$sql = "SELECT Credits FROM bank WHERE Name='$sender'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
 if($row["Credits"]-$amount>100){
$sql = "UPDATE `bank` SET Credits=(Credits-$amount) WHERE Name='$sender'";

if ($con->query($sql) === TRUE) {

  $flag=true;
} else {
  echo "Error updating record: " . $conn->error;
}
 }
 else{
     echo "";
 }
  }
} else {
  echo "0 results";
} 

if($flag==true){
$sql = "UPDATE `bank` SET Credits=(Credits+$amount) WHERE Name='$receiver'";

if ($con->query($sql) === TRUE) {
  $flag=true;  
  
} else {
  echo "Error updating record: " . $con->error;
}
}
if($flag==true){
$sql = "INSERT INTO `transfer` (`Transferred Id`, `Sender`, `Receiver`, `Money`) VALUES (NULL, '$sender','$receiver','$amount')"; 
if ($con->query($sql) === TRUE) {

} else 
{
  echo "Error updating record: " . $con->error;
}
}
}
if($flag==true){
echo "<script>
$('#text').show();
     </script>";
}
elseif($flag==false)
{
    echo "<script>
        $('#text2').show();
     </script>";
}
?>
