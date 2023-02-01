<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server, $username, $password);
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    $name = $_POST['name'];
    $Email = $_POST['Email'];
    $password = $_POST['Password'];
    $Number = $_POST['Number'];
    $sql = "INSERT INTO `data` (`Sr.no.`, `Name`, `Email`, `Password`, `number`, `date`) VALUES ('$name', '$Email', '$password', '$Number', current_timestamp());"
    if($con->query($sql) == true){
         echo "Successfully inserted";
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();
}
?>