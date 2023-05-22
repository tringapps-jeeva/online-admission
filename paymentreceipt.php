<?php require_once("config.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Receipt</title>
    <style>
        body {
            font-weight: bold;
        }

        .container {
            height: auto;
            width: 50%;
            border: 2px solid black;
            margin: 5px 25%;
            padding: 20px;
        }

        button {
            background-color: yellow;
            cursor: pointer;
        }

        @media print {
            #printbtn {
                display: none;
            }
        }
    </style>

</head>

<body>
    <div class="container">

        <img src="images/i1.png" style="width: 100%; height: 100px; ">
        <div style="background-color:black ;height:40px;color:white;text-align:center; font-size: 25px; padding:2px">
            <?php
            $sql = "SELECT * FROM payment_amount WHERE login_id ='" . $_SESSION['email'] . "'";
            $sqlrun = mysqli_query($conn, $sql);
            while ($row1 = mysqli_fetch_assoc($sqlrun)) {
                ?>
                Amount paid:
                <?php echo "  " . "  Rs.  " . $row1['totalamount'] . ".00"; ?>
            </div><br>
            <div style="background-color:grey ;height:30px;color:black; font-size:25px; padding:10px">Transaction Details
            </div>
            <table cellspacing=10 style="width:600px">
                <tr>
                    <td>Transaction Status:</td>
                    <td>SUCCESSFUL</td>
                </tr>
                <tr>
                    <td>Transaction ID:</td>
                    <td>BD0000000001105519</td>
                </tr>
            </table>
            <div style="background-color:grey ;height:30px;color:black; font-size:25px; padding:10px">Applicant Details
            </div>
            <table cellspacing=10 style="width:650px">
                <tr>
                    <?php
                    $sql = "SELECT * FROM applicationform WHERE login_id ='" . $_SESSION['email'] . "'";
                    $sqlrun = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($sqlrun)) {
                        ?>

                        <td>Applicant Name:</td>
                        <td>
                            <?php echo $row['fullname'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Father Name:</td>
                        <td>
                            <?php echo $row['fathername'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Mobile Number:</td>
                        <td>
                            <?php echo $row['appphno'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Email ID:</td>
                        <td>
                            <?php echo $_SESSION['email'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Selected Courses:</td>
                        <td>
                            <?php
                            $sql = "SELECT * FROM courses WHERE login_id ='" . $_SESSION['email'] . "'";
                            $sqlrun = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_array($sqlrun)) {
                                $a = $row['aidedcourses'];
                                $b = explode(",", $a);
                                if ($b != [0]) {
                                    for ($i = 0; $i <= sizeof($b) - 1; $i++) {
                                        echo $b[$i] . ",";
                                    }
                                }
                            }
                            $sql = "SELECT * FROM courses1 WHERE login_id ='" . $_SESSION['email'] . "'";
                            $sqlrun = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_array($sqlrun)) {
                                $a = $row['selfcourses'];
                                $b = explode(",", $a);
                                if ($b != [0]) {
                                    for ($i = 0; $i <= sizeof($b) - 1; $i++) {
                                        echo $b[$i] . ",";
                                    }
                                }
                            }
                            ?>
                        </td>
                    </tr>
                <?php } ?>
            </table>
            <div style="background-color:grey ;height:30px;color:black; font-size:25px; padding:10px">Payment Summary</div>
            <table cellspacing=10 style="width:470px">
                <tr>
                    <td>Total:</td>
                    <td>
                        <?php echo $row1['totalamount'] . ".00" ?>
                    </td>
                </tr>
                <tr>
                    <td>Net-total:</td>
                    <td>
                        <?php echo $row1['totalamount'] . ".00" ?>
                    </td>
                <?php } ?>
            </tr>
        </table>
    </div>
    <br>
    <center><button type="button" class="btn btn-info" id="printbtn" onclick="window.print()">Print Receipt</button>
    </center>
</body>

</html>