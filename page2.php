//page2
    <?php 
session_start();
if(!isset($_SESSION['$username'])){
  header("LOCATION: page1.php");
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-6 offset-3">
            <center>
                <h3>Login</h3>
            </center>
            <?php
            if(isset($_POST['formsubmit'])){
  include 'connection.php';
  session_start();
  $useremail=$_SESSION['$useremail'];
  $userpassword = $_POST['userpassword'];
  $sql = "select * from signup where user_email = '{$useremail}' and user_pass = '{$userpassword}'";
  $result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result)>0){
      while($row = mysqli_fetch_assoc($result)){
        //session_start();
        
        $_SESSION['$username'] = $row['user_name'];
        $_SESSION['$useremail'] = $row['user_email'];
        $_SESSION['$userid'] = $row['user_id'];
        
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
                    <input type="password" class="form-control" name="userpassword" placeholder="Enter Your Password" required>
                </label>
                <input type="submit" name="formsubmit" value="Login" class="btn btn-primary mt-2 mb-5">
            </form>
            
            
        </div>
    </div>