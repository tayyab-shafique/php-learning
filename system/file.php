<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "verify_db";


?>
<!-- <h2>Hello world</h2>/d -->
<?php

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("not connected with database" . mysqli_connect_error());
}else{
    echo "connected successfully"; ?> <br> <?php
};

$sql = "SELECT * FROM `users`";

$result = mysqli_query($conn, $sql);

if($result === FALSE){
    die(mysqli_error($conn));
}
// while($data = mysqli_fetch_assoc($result)){

//     echo $data["id"] ;
//     echo $data["name"];
//     echo $data["email"];
//     echo $data["password"];
//     echo $data["phone"]; ?> <br> <?php
// } 
 


?>