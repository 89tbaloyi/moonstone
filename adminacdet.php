

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "moonstone";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if(isset($_POST['submit'])){
    
    if($_POST['actypename'] != "" || $_POST['acdetails'] != "" || $_POST['facility'] != "" || $_POST['minbal'] != ""){
     $actypname = $_POST['actypename'];
     $acdetails = $_POST['acdetails'];
     $facility = $_POST['facility'];
     $minbal = $_POST['minbal'];


  $sql = "INSERT INTO actypetab (actypename, acdetails, facility, minbal)
  VALUES ('$actypname', '$acdetails', '$facility', '$minbal')";
  // use exec() because no results are returned
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
    <title>LogIn</title>
</head>
<body>
  <br>
  <div class="container">
<div class="card">
  <div class="card-header">
    Register Admin 
  </div>
  <div class="card-body">
  <div>
        <table width=100%>
            <tr>
               
                <td width="50%">
                <div class="card">
                    <div class="card-body">
                        
                    <form name="form1" method="POST" action="./adminacdet.php,./table">
                        <h2>Register Admin</h2>
                        <div class="row">
                            <div class="col">
                            <input type="text" class="form-control" name="actypename"  placeholder="Account Name" >
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" name="acdetails" placeholder="Account Details">
                            </div>
                            <br>                            
                        </div>                        
                        <br>
                        <div class="row">
                            <div class="col">
                            <input type="text" class="form-control" name="facility"  placeholder="Facilities" >
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" name="minbal" placeholder="Min Balance">
                            </div>
                            <br>                            
                        </div>
                        <br>
                        <button Login="button" class="btn btn-success" input type="submit" name="submit">Submit</button>
                        <br>
                        <br>
                        
                        <a href="./admin.php"><p>back</p></a>
                        
                    </form>
                    </div>
                    </div>
                </td>
            </tr>
        </table>

    </div>
  </div>
</div>
</div>




<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>