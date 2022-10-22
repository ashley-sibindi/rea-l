<?php
$servername='localhost';
$username='root';
$password='';
$dbname='records';
$conn = mysqli_connect($servername,$username,$password, $dbname);
if(!$conn){
    die("ERROR: Could not connect");
}
$enquiries = $_REQUEST['enquiries'];
$email = $_REQUEST['email'];
$sql = "UPDATE user SET Response = '$enquiry' WHERE Email = '$email'";

if(mysqli_query($conn, $sql)){

    echo"<h2>Successful query response</h2>";
}
else{

    echo"ERROR: We are sorry :".$sql."".mysqli_error($conn);
}

mysqli_close($conn);
?>