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
  $email = $_POST['email'];
  $select = "SELECT * FROM `page` where email = '{$email}'";
  $query = mysqli_query($conn, $select);
  if(mysqli_num_rows($query)>0){
      while($row = mysqli_fetch_assoc($query)){
        session_start();
        
        $_SESSION['$name'] = $row['name'];
        $_SESSION['$email'] = $row['email'];
        $_SESSION['$id'] = $row['id'];
        $_SESSION['$status'] = $row['admin'];
          header("LOCATION: index2.php");
          
      }
  }else{
    echo "input correct email!";
}
            }
  ?>
            <form action="logout.php" method="POST">
                <label for="" class="w-100">
                    Enter email
                    <input type="email" class="form-control" name="email" placeholder="Enter Useremail" required>
                </label>
                <input type="submit" name="formsubmit" value="Login" class="btn btn-primary mt-2 mb-5">
            </form> 
        </div>
    </div>
