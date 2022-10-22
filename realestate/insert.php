<?php
$servername='localhost';
$username='root';
$password='';
$dbname='records';
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("ERROR: Could not connect");
}

    $uname = $_REQUEST['uname'];
    $num = $_REQUEST['num'];
    $email = $_REQUEST['email'];
    $enquiry = $_REQUEST['enquiry'];
    $Response = $_REQUEST ['Response'];
    $sql = "INSERT INTO user VALUES('$uname','$num','$email','$enquiry','$Response','')";

    if(mysqli_query($conn, $sql)){
        echo"<h2>Successful record insertion</h2>";
    }
    else{
        echo"ERROR: You entered a duplicate enquiry. Wait for response.";
    }
    mysqli_close($conn);

?>