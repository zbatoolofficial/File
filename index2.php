
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-6 offset-3">
            <center>
                <h3>Login</h3>
            </center>
            <?php include 'connection.php';
            if(isset($_POST['formsubmit'])){
  
//   session_start();
  $email=$_POST['email'];
  $password = $_POST['password'];
  $select = "SELECT * FROM `page` where email = '{$email}' and password = '{$password}'";
  $query = mysqli_query($conn, $select);
  if(mysqli_num_rows($query)>0){
      while($row = mysqli_fetch_assoc($query)){
        $_SESSION['$email'] = $row['email'];
        $_SESSION['$id'] = $row['id'];
        header("LOCATION: index3.php");
          
      }
  }else{
    echo "incorrect password!";
}
            }
  ?>
            <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
                <label for="" class="w-100">
                    Enter Your Password
                    <input type="password" class="form-control" name="password" placeholder="Enter Your Password" required>
                </label>
                <input type="submit" name="formsubmit" value="Login" class="btn btn-primary mt-2 mb-5">
            </form>
            
            
        </div>
    </div>