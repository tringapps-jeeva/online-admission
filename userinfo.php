<?php
@include 'config.php';
@session_start();
$_SESSION["OC"]=0;
$_SESSION["SC"]=0;
$_SESSION["BC"]=0;
$_SESSION["MBC"]=0;

if (isset($_POST['submit'])) {
    $_SESSION["OC"] = $_POST['OC'];
    $_SESSION["SC"] = $_POST['SC'];
    $_SESSION["BC"] = $_POST['BC'];
    $_SESSION["MBC"] = $_POST['MBC'];
    echo "<script language='javascript'>alert('DONE');</script>";
    // echo "<script> document.location='userinfo.php';</script>";
}
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
    <style>
        .records {
            margin-left:2%;
            margin-top: 5%;
        }

        table {
            width: 100% ;
            text-align: center;
            border: 3px solid black;
            /* border-collapse: collapse; */
            white-space: nowrap;

        }

        td {
            padding: 5px;
        }

        thead {
            font-weight: bold;
            background-color: blue;
            color: white;
        }

        #select {
            background-color: green;
            margin: 3px;
            width: 50px;
            height: 20px;
        }

        #reject {
            background-color: red;
            margin: 3px;
            width: 50px;
            height: 20px;
        }

        button {
            background-color: skyblue;
            cursor: pointer;
            width: 70px;
            height: 25px;
            border-radius: 5px;
        }

        a {
            color: black;
        }

        .link {
            color: white;
        }

        .page {
            background-color: greenyellow;
        }
        .caste-input{
            color:blue;
        }
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
            <div class="caste-input">
                <form method="post">
                    <label>SC <input type="number" name='SC' required/></label>
                    <label>OC <input type="number" name='OC' required/></label>
                    <label>MBC <input type="number" name='MBC' required/></label>
                    <label>BC <input type="number" name='BC' required/></label>
                    <input type="submit" value="Submit" name="submit">
                </form>
            </div>
            <form method="post" action="">
                <div class="records"  style="overflow-x:auto">
                    <table border="1" cellspacing=5>
                        <thead>
                            <tr>
                                <td>S.No</td>
                                <td>Email</td>
                                <td>Name</td>
                                <td>Personal Details</td>
                                <td>Educational Details</td>
                                <td>Other Details</td>
                                <td>Documents</td>
                                <td>Course applied</td>
                                <td>Community</td>
                            </tr>
                        </thead>
                        <?php
                        $sql = "SELECT * FROM user_form INNER JOIN courses ON email=login_id INNER JOIN applicationform ON applicationform.login_id=courses.login_id";
                        $result = mysqli_query($conn, $sql);
                        $n = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tbody>
                                <tr>
                                    <td>
                                        <?php echo $n?>
                                    </td>
                                    <td>
                                        <?php echo $row['email'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['name'] ?>
                                    </td>
                                    <td>
                                        <?php echo '<button><a href="showPersonal.php?selectemail=' . $row['email'] . '">Show</button>' ?>
                                    </td>
                                    <td>
                                        <?php echo '<button><a href="showEducational.php?selectemail=' . $row['email'] . '">Show</button>' ?>
                                    </td>
                                    <td>
                                        <?php echo '<button><a href="showOther.php?selectemail=' . $row['email'] . '">Show</button>' ?>
                                    </td>
                                    <td>
                                        <?php echo '<button><a href="showDocuments.php?selectemail=' . $row['email'] . '">Show</button>' ?>
                                    </td>
                                    <!-- <td>
                                        <?php echo '<button id="select"><a  class="link" href="selectApplicant.php?selectemail=' . $row['email'] . '">Select</button>' ?>
                                        <?php echo '<button id="reject"><a class="link" href="rejectApplicant.php?rejectemail=' . $row['email'] . '">Reject</button>' ?>
                                    </td> -->
                                    <!-- <td style="text-align:left"><?php //echo $row['aidedcourses'] ?></td> -->
                                    <?php  
                                    if($row["aidedcourses"]=='B.Sc Computer Science')
                                    echo "<td style='background-color:#86A3B8;opacity:0.6;font-weight:bold'>B.Sc Computer Science</td>";
                                    if($row["aidedcourses"]=='B.Sc Mathematics')
                                    echo "<td style='background-color:#57C5B6;opacity:0.6;font-weight:bold'>B.Sc Mathematics</td>";
                                    if($row["aidedcourses"]=='B.Com')
                                    echo "<td style='background-color:#1A5F7A;opacity:0.6;font-weight:bold'>B.Com</td>";
                                    if($row["aidedcourses"]=='B.Sc Zoology')
                                    echo "<td style='background-color:#4D4D4D;opacity:0.6;font-weight:bold'>B.Sc Zoology</td>";
                                    ?>
                                    <!-- <td><?php //echo $row['community'] ?></td> -->
                                    <?php  
                                    if($row["community"]=='OC')
                                    echo "<td style='background-color:#98DFD6;opacity:0.6;font-weight:bold'>OC</td>";
                                    if($row["community"]=='BC')
                                    echo "<td style='background-color:#FFDD83;opacity:0.6;font-weight:bold'>BC</td>";
                                    if($row["community"]=='MBC')
                                    echo "<td style='background-color:#537FE7;opacity:0.6;font-weight:bold'>MBC</td>";
                                    if($row["community"]=='SC')
                                    echo "<td style='background-color:#FFA3FD;opacity:0.6;font-weight:bold'>SC</td>";
                                    ?>
                                </tr>
                                <?php $n++;
                            // $_SESSION['number']=$n;
                        } ?>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
        <div class="sidebar">
            <div class="profile">
                <img src="logo.jpg">
                <!-- <img src="https://1.bp.blogspot.com/-vhmWFWO2r8U/YLjr2A57toI/AAAAAAAACO4/0GBonlEZPmAiQW4uvkCTm5LvlJVd_-l_wCNcBGAsYHQ/s16000/team-1-2.jpg" alt="profile_picture"> -->
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
                    <a href="#" class="active">
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
        hamburger.addEventListener("click", function () {
            document.querySelector("body").classList.toggle("active");
        })
    </script>
</body>

</html>