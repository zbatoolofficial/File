<?php 
$dbname = 'submit';
$dbuser = 'root';
$dbpassword = '';
$dbhost = 'localhost';
$conn = new mysqli ($dbhost,$dbuser,$dbpassword,$dbname);
if($conn){
    echo 'Connect';
}else{
    echo 'Not Connect';
}
