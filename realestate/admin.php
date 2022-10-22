<?php
$servername='localhost';
$username='root';
$password='';
$dbname='records';
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("ERROR: Could not connect");
}
$sql = "SELECT * FROM user";
$result = ($conn->query($sql));
$row = [];
if($result->num_rows > 0){
    $row = $result->fetch_all(MYSQLI_ASSOC);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <title>OUR ADMNISTRATION</title>
</head>
<body>
    <!--Nav starts-->
    <header>
        <div class="logo">
            <h1 class="lit">REAL</h1><h1>ESTATE</h1>
        </div>
            <nav class="navbar">
                <a href="index.php">Home</a>
                <a href="services.php">Services</a>
                <a href="about.php">About</a>
                <a href="enquiry.php">Enquiries</a>
            </nav>
    </header>
    <!--Nav ends-->
    <main>
        <!--Intro starts-->
        <div class="intro">
        <img src="img/houses4.jpg" alt="download">
            <div id="intro-contact">
                <h2>ADMIN</h2>
            </div>
        </div>
        <!--Intro ends-->
        <!--Contact starts-->
        <div id="log-cont">
            <div id="alogbox">
            <center>
            <h2>Customer Queries List</h2>
            </center>
            <table border="1" width="100%">
                <thead>
                    <tr>
                        <th>uname</th>
                        <th>num</th>
                        <th>email</th>
                        <th>enquiries</th>
                        <th>Response</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(!empty($row))
                    foreach($row as $rows)
                   { 
                    ?>
                    <tr>
                        <td><?php echo $rows['uname']; ?></td>
                        <td><?php echo $rows['num']; ?></td>
                        <td><?php echo $rows['email']; ?></td>
                        <td><?php echo $rows['enquiries']; ?></td>
                        <td><?php echo $rows['Response']; ?></td>
                    </tr>
                   <?php } ?>
                </tbody>
            </table>
            </div>
            <div id="logbox">
            <h2>Query Response</h2>
            <form  name="enquiryform" action="respond.php" method="host" onsubmit="return validateForm();">
                <input type="text" placeholder="recepient's email" name="emailaddress">
                <textarea placeholder="enter response" cols="30" rows="10" name="enquiry"></textarea>
                <input type="submit" value="send message" class="subbutton">
            </form>
            </div>
        </div>
        <!--Contact ends-->
        <!--Footer starts-->
        <footer>
            <address>
                <center>
                    <br>&copy;REAL ESTATE <br>
                    <br>info@realestate.co.zw <br>
                </center>
            </address>
        </footer>
        <!--Footer ends-->
    </main>
</body>
</html>

<?php   
    mysqli_close($conn);
?>