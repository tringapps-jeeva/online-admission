<?php
@include 'config.php';
session_start();
?>
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
    <link rel="stylesheet" href="css/mail.css">
    <script src="js/mailjs.js"></script>
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
            <ul class="subjects">
                <li><button  class="focus">Tamil</button></li>
                <li><button  class="focus">English</button></li>
                <li><button  class="focus">Maths</button></li>
                <li><button  class="focus">Economics</button></li>
                <li><button class="focus">Commerce</button></li>
                <li><button class="focus">B.B.A</button></li>
                <li><button class="focus">Physics</button></li>
                <li><button class="focus">Chemistry</button></li>
                <li><button onclick="showComputerScience()" id="cs" class="focus">Computer Science</button></li>
                <li><button class="focus">Botany</button></li>
                <li><button  class="focus">Zoology</button></li>

            </ul>

           

            <div class="records" id="computer" style="display:none">
                <h1>MERIT LIST</h1>
                <br>
                <table border="1">
                    <thead>
                        <tr>
                            <!-- <td>S.No</td> -->
                            <td>Email</td>
                            <td>Name</td>
                            <td>Mail</td>
                            <td>Cutoff</td>
                            <td>Caste</td>
                            <td>Status</td>

                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                                <td colspan="6" class="heading">Oc Quota</td>
                            </tr>
        <!-- OC -->
                    <?php
            // $sql = "SELECT  * FROM user_form INNER JOIN educationdetails ON email=login_id INNER JOIN(SELECT aidedcourses,login_id FROM courses ) AS department ON educationdetails.login_id=department.login_id INNER JOIN  (SELECT community,login_id FROM applicationform) as personel ON department.login_id=personel.login_id where aidedcourses='B.Sc Computer Science' ORDER BY majorTotal DESC LIMIT ".$_SESSION["OC"]."";
                    $sql ="SELECT * FROM user_form INNER JOIN  (SELECT community,login_id FROM applicationform) as personel ON user_form.email=personel.login_id WHERE aidedcourses='B.Sc Computer Science' ORDER BY majorTotal DESC LIMIT ".$_SESSION["OC"]." ";
                    $update ="UPDATE user_form SET status='selected' WHERE  aidedcourses='B.Sc Computer Science' ORDER BY majorTotal DESC LIMIT ".$_SESSION["OC"]."";
                    $result = mysqli_query($conn, $sql);
                    $result1 = mysqli_query($conn, $update);
                    $n = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tbody>
                            
                            <tr>
                                <!-- <td>
                                    <?php echo $n ?>
                                </td> -->
                                <td>
                                    <?php echo $row['email'] ?>
                                </td>
                                <td>
                                    <?php echo $row['name'] ?>
                                </td>
                                <td>
                                    <?php echo '<button><i class="fa fa-telegram"></i>&nbsp;<a class="link" href="sendMail.php?selectemail=' . $row['email'] . '">Send Mail</button>' ?>
                                </td>
                                <td>
                                    <?php echo $row['majorTotal'] ?>
                                </td>
                                <td>
                                <?php echo $row['community'] ?>
                                </td>
                                <td>Selected</td>
                            </tr>
                            <?php $n++;
                    } ?>
                    <tbody>
                    <tr>
                                <td colspan="6" class="heading">SC Quota</td>
                            </tr>
        <!-- SC -->
                    <?php
                   // $sql = "SELECT  * FROM user_form INNER JOIN educationdetails ON email=login_id INNER JOIN(SELECT aidedcourses,login_id FROM courses ) AS department ON educationdetails.login_id=department.login_id INNER JOIN  (SELECT community,login_id FROM applicationform) as personel ON department.login_id=personel.login_id where community='SC'  AND aidedcourses='B.Sc Computer Science' ORDER BY majorTotal DESC LIMIT ".$_SESSION["SC"]."";
                    $sql ="SELECT  * FROM user_form  INNER JOIN  (SELECT community,login_id FROM applicationform) as personel ON user_form.email=personel.login_id where community='SC'  AND aidedcourses='B.Sc Computer Science' AND status!='selected' ORDER BY majorTotal DESC LIMIT  ".$_SESSION["SC"]."";
                    
                    $result = mysqli_query($conn, $sql);
                    $n = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tbody>
                            <tr>
                                <!-- <td>
                                    <?php echo $n ?>
                                </td> -->
                                <td>
                                    <?php echo $row['email'] ?>
                                </td>
                                <td>
                                    <?php echo $row['name'] ?>
                                </td>
                                <td>
                                    <?php echo '<button><i class="fa fa-telegram"></i>&nbsp;<a class="link" href="sendMail.php?selectemail=' . $row['email'] . '">Send Mail</button>' ?>
                                </td>
                                <td>
                                    <?php echo $row['majorTotal'] ?>
                                </td>
                                <td>
                                <?php echo $row['community'] ?>
                                </td>
                                <td>Selected</td>
                            </tr>
                            <?php $n++;
                    } ?>
 <tbody>
                    <tr>
                                <td colspan="6" class="heading">MBC Quota</td>
                            </tr> 
                    <!-- MBC -->
                    <?php
                   // $sql = "SELECT  * FROM user_form INNER JOIN educationdetails ON email=login_id INNER JOIN(SELECT aidedcourses,login_id FROM courses ) AS department ON educationdetails.login_id=department.login_id INNER JOIN  (SELECT community,login_id FROM applicationform) as personel ON department.login_id=personel.login_id where community='MBC'  AND aidedcourses='B.Sc Computer Science' ORDER BY majorTotal DESC LIMIT ".$_SESSION["MBC"]."";
                    $sql ="SELECT  * FROM user_form  INNER JOIN  (SELECT community,login_id FROM applicationform) as personel ON user_form.email=personel.login_id where community='MBC'  AND aidedcourses='B.Sc Computer Science' AND status!='selected' ORDER BY majorTotal DESC LIMIT  ".$_SESSION["MBC"]."";

                    $result = mysqli_query($conn, $sql);
                    $n = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tbody>
                            <tr>
                                <!-- <td>
                                    <?php echo $n ?>
                                </td> -->
                                <td>
                                    <?php echo $row['email'] ?>
                                </td>
                                <td>
                                    <?php echo $row['name'] ?>
                                </td>
                                <td>
                                    <?php echo '<button><i class="fa fa-telegram"></i>&nbsp;<a class="link" href="sendMail.php?selectemail=' . $row['email'] . '">Send Mail</button>' ?>
                                </td>
                                <td>
                                    <?php echo $row['majorTotal'] ?>
                                </td>
                                <td>
                                <?php echo $row['community'] ?>
                                </td>
                                <td>Selected</td>
                            </tr>
                            <?php $n++;
                    } ?>
 <tbody>
                    <tr>
                                <td colspan="6" class="heading">BC Quota</td>
                            </tr>
<!-- BC -->
                  <?php
                   // $sql = "SELECT  * FROM user_form INNER JOIN educationdetails ON email=login_id INNER JOIN(SELECT aidedcourses,login_id FROM courses ) AS department ON educationdetails.login_id=department.login_id INNER JOIN  (SELECT community,login_id FROM applicationform) as personel ON department.login_id=personel.login_id where community='BC'  AND aidedcourses='B.Sc Computer Science' ORDER BY majorTotal DESC LIMIT ".$_SESSION["BC"]."";
                   $sql ="SELECT  * FROM user_form  INNER JOIN  (SELECT community,login_id FROM applicationform) as personel ON user_form.email=personel.login_id where community='BC'  AND aidedcourses='B.Sc Computer Science' AND status!='selected' ORDER BY majorTotal DESC LIMIT  ".$_SESSION["BC"]."";

                    $result = mysqli_query($conn, $sql);
                    $n = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tbody>
                            <tr>
                                <!-- <td>
                                    <?php echo $n ?>
                                </td> -->
                                <td>
                                    <?php echo $row['email'] ?>
                                </td>
                                <td>
                                    <?php echo $row['name'] ?>
                                </td>
                                <td>
                                    <?php echo '<button><i class="fa fa-telegram"></i>&nbsp;<a class="link" href="sendMail.php?selectemail=' . $row['email'] . '">Send Mail</button>' ?>
                                </td>
                                <td>
                                    <?php echo $row['majorTotal'] ?>
                                </td>
                                <td>
                                <?php echo $row['community'] ?>
                                </td>
                                <td>Selected</td>
                            </tr>
                            <?php $n++;
                    } ?>

<!-- OC -->

                    </tbody>
                </table>
                <br>

                <div class="info">
<span class="bullelements">&#8226;</span>&nbsp;OC  QUOTA &nbsp; <?php echo $_SESSION['OC']?> &nbsp;&nbsp; &nbsp;
<span class="bullelements">&bull;</span>&nbsp;SC  QUOTA &nbsp; <?php echo $_SESSION['SC']?> &nbsp;&nbsp; &nbsp;
<span class="bullelements">&bull;</span>&nbsp;MBC  QUOTA &nbsp; <?php echo $_SESSION['MBC']?> &nbsp;&nbsp; &nbsp;
<span class="bullelements">&bull;</span>&nbsp;BC  QUOTA &nbsp; <?php echo $_SESSION['BC']?> &nbsp;&nbsp; &nbsp;
<span class="bullelements">&bull;</span>&nbsp;TOTAL &nbsp; <?php echo $_SESSION['BC']+$_SESSION['MBC']+$_SESSION['SC']+$_SESSION['OC']?> &nbsp;&nbsp; 



                </div>
                <br>
            </div>

           
            <div class="sidebar">
                <div class="profile">
                    <img src="logo.jpg">
                    <h3>Admin</h3>
                    <p>Tcarts</p>
                </div>
                <ul>
                    <li>
                        <a href="adminindex.php">
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
                        <a href="#" class="active">
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
    </div>
    <script>
        var hamburger = document.querySelector(".hamburger");
        hamburger.addEventListener("click", function () {
            document.querySelector("body").classList.toggle("active");
        })
    </script>
</body>

</html>