<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="css/adminpanel.css">
    <style>
    .wrapper .section .container {
    margin: 30px;
    background: #fff;
    padding: 50px;
    line-height: 28px;}
    </style>
</head>
<body>
   
    <div class="wrapper">
        <div class="section">
            <div class="top_navbar">
                <div class="hamburger">
                    <a href="#">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
            </div>
            <div class="container">
             <center>  <h1 style="letter-spacing:2px;font-size:40px;font-family:times">WELCOME&nbsp;&nbsp;TO&nbsp;ADMIN&nbsp;PAGE</h1></center>

          </div>
      <center>    <img src="images/i4.jpg" width="70%" height="350px"></center>
        </div>
        <div class="sidebar">
            <div class="profile">
                <img src="logo.jpg">
                <h3>Admin</h3>
                <p>Tcarts</p>
            </div>
            <ul>
                <li>
                    <a href="adminindex.php" class="active">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">Home</span>
                    </a>
                </li>
                <li>
                    <a href="admindashboard.php">
                        <span class="icon"><i class="fas fa-desktop"></i></span>
                        <span class="item">My Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="userinfo.php">
                        <span class="icon"><i class="fas fa-users"></i></span>
                        <span class="item">Applications</span>
                    </a>
                </li>
                <li>
                    <a href="mail.php">
                        <span class="icon"><i class="fa fa-envelope"></i></span>
                        <span class="item">Mail</span>
                    </a>
                </li>
                <li>
                    <a href="adminlogout.php">
                        <span class="icon"><i class="fa fa-sign-out"></i></span>
                        <span class="item">Logout</span>
                    </a>
                </li>

            </ul>
        </div>
        
    </div>
  <script>
       var hamburger = document.querySelector(".hamburger");
	hamburger.addEventListener("click", function(){
		document.querySelector("body").classList.toggle("active");
	})
  </script>
</body>
</html>