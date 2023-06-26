


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "moonstone";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if(isset($_POST['submit2'])){
    
    if($_POST['firstname'] != "" || $_POST['lastname'] != "" || $_POST['deposit'] != "" || $_POST['password'] != ""){
     $firstname = $_POST['firstname'];
     $lastname = $_POST['lastname'];
     $balance = $_POST['deposite'];
     $password = $_POST['password'];


  $sql = "INSERT INTO users (firstname, lastname, deposit, password)
  VALUES ('$firstname', '$lastname', '$balance', '$password')";

  $conn->exec($sql);
  echo "New record created successfully";

  header("location: ./index.php");
    }
} 
  }
catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Register Customer</title>
</head>
<body>
  <br>
   <div class="container">
   <div class="card">
  <div class="card-header">
    Register Customer
  </div>
  <div class="card-body">
  <form name="form2" action="post" method="table table-striped table-dark"> 
  <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" placeholder="First name" name="firstname">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Last name" name="lastname">
    </div>
  </div>
    <br>
  <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Deposit" name="Deposite">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Password" name="password">
    </div>
  </div>
  <br>
  <div>
  <button type="button" class="btn btn-success" name="submit2">Submit</button>
  </div>
  
  <a href="./index.php"><p>back to admin</p></a>
  
  
  
</form>
  </div>
</div>
   </div> 

   <br>

<div class="container">
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Deposite</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  
</table>
</div>









    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>