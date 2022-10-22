<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <title>Login</title>
</head>
<body>
    <!--Nav starts-->
    <header>
        <div class="logo">
            <h1 class="lit">REAL</h1>  <h1>ESTATE</h1>
        </div>
            <nav class="navbar">
                <a href="index.php">Home</a>
                <a href="services.php">Services</a>
                <a href="about.php">About</a>
                <a href="enquiry.php" class="active">Enquiries</a>
            </nav>
    </header>
    <!--Nav ends-->
    <main>
        <!--Contact starts-->
        <div id="log-cont">
            <div id="logbox">
            <h2>Admin Login</h2>
            <form  name="enquiryform" action="admin.php" method="host" onsubmit="return validateAdmin();">
                <input type="text" placeholder="username" id="uname" name="username">
                <input type="text" placeholder="password" name="pword">
                <input type="submit" value="login" class="subbutton">
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