<?php require_once("config.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print and Status</title>
    <link rel="stylesheet" href="css/printpage.css">
    <style>
        #myDiv {
            width: 50%;
            height: auto;
            border: 5px solid black;
            color: green;
            margin: 5%;
            padding: 15px;
            background-color: yellowgreen;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <img src="images/i1.png">
    <ul>
        <li><a class="active" href="home.php">HOME</a></li>
        <li><a href="about.php">ABOUT</a></li>
        <li><a href="facilities.php">FACILITIES</a></li>
        <li><a href="course.php">COURSES</a></li>
        <li><a href="notification.php">NOTIFICATION</a></li>
        <li><a href="">RESULT</a></li>
        <li><a href="instruction.php">ADMISSION</a></li>
        <li><a href="register.php">SIGNUP</a></li>

    </ul>
    <center>
        <table border="1" cellspacing="10">
            <tr>
                <td>Admission Form</td>
                <td><button onclick="window.location.href='print.php'" class="button">Print</button></td>
            </tr>
            <tr>
                <td>Payment Receipt</td>
                <td><button onclick="window.location.href='paymentreceipt.php'" class="button">Print</button></td>
            </tr>
            <!-- <tr>
                <td>Admission Status </td>
                <td><button class="button" onclick="ShowDiv()">Show</button></td>
            </tr> -->
        </table>

        <?php
        $sql = "SELECT * FROM user_form WHERE email='" . $_SESSION['email'] . "'";

        $sqlrun = mysqli_query($conn, $sql);
        while ($row1 = mysqli_fetch_assoc($sqlrun)) {
            ?>

            <div id="myDiv" style="display:none;" class="status">Your Admission Status:
                <?php echo "<font style='font-weight:bold'>" . $row1['status'] . "</font>" ?>
            </div>
        <?php } ?>
        <script>
            function ShowDiv() {
                document.getElementById("myDiv").style.display = "";
            } </script>
        <!-- </div> -->
    </center>
</body>

</html>