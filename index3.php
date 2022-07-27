
    <?php
// session_start();
// if(!isset($_SESSION['$name'])){
//   header("LOCATION: index.php");
// }
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
 rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container-fluid mt-5 mb-5">
    <div class="row">
        <div class="col-md-6 offset-3 mt-5 mb-5">
            <center>
                <h3>Home Page</h3>
                <p class="text-uppercase">HI <?php echo $_SESSION['$name'] ?></p>
                <a href="logout.php">logout</a>
            </center>
            
        </div>
    </div>
   
</div>