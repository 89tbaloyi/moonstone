<?php 

require_once './config/db.php';
session_start();

$_SERVER['REQUEST_METHOD'];
echo"working";

if(ISSET($_POST['submit2'])){
    
   if($_POST['UserId'] != "" || $_POST['pWord'] != ""){
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    
    $sql = "SELECT * FROM `users` WHERE `username`=? AND `password`=?";
    $query = $conn->prepare($sql);
    $query->execute(array($username,$password));
    // $row = $query->rowCount();
    $fetch = $query->fetch();
    if($row > 0){
        header("location: ./admin.php");
            echo "welcome";
        }else{
            echo "Unsuccessful login.";
        }
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Admin LogIn</title>
</head>
<body>
<div class="card">
  <div class="card-header">
    Login
  </div>
  <div class="card-body">
  <div>
        <table width=100%>
            <tr>
                <td width="50%">
                <img src="./images/images1.png" style="width:50%"  align="right">  
                </td>
                <td width="50%">
                <div class="card">
                    <div class="card-body">
                        
                    <form name="form1" method="POST" action="./admin.php">
                        <h2> Admin Login</h2>
                        <div class="row">
                            <div class="col">
                            <input type="text" class="form-control"  placeholder="User ID" >
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Password">
                            </div>
                            <br>                            
                        </div>
                        <br>
                        <button Login="button" class="btn btn-success" input type="submit" name="submit2">Submit</button>
                        </form>
                        <p><a href="./adminacdet.php">Register a admin</a></p>
                    </div>
                    </div>
                    
                </td>
            </tr>
        </table>

    </div>
  </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>