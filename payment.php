<?php
@include 'config.php';
session_start();
if (isset($_POST['submit'])) {
    $login_id = $_SESSION['email'];
    $sql = "SELECT * FROM courses WHERE login_id ='" . $_SESSION['email'] . "'";
    $sql1 = "SELECT * FROM courses1 WHERE login_id ='" . $_SESSION['email'] . "'";
    $sqlrun = mysqli_query($conn, $sql);
    $sqlrun1 = mysqli_query($conn, $sql1);
    while ($row = mysqli_fetch_array($sqlrun)) {
        $amount1 = $row['amount'];
    }
    while ($row1 = mysqli_fetch_array($sqlrun1)) {
        $amount2 = $row1['amount'];
    }
    $totalamount = $amount1 + $amount2;
    $delete = "DELETE FROM payment_amount WHERE login_id='" . $_SESSION['email'] . "'";
    $query_run = mysqli_query($conn, $delete);
    $query = "INSERT INTO payment_amount (login_id,totalamount) VALUES ('$login_id','$totalamount')";
    $query_run = mysqli_query($conn, $query);
    header("location:card.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="css/paymentcss.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

</head>

<body>
    <img src="images/i1.png">
    <header>Selected Courses</header>
    <form method="post" action="">
        <?php
        $sql = "SELECT * FROM courses WHERE login_id ='" . $_SESSION['email'] . "'";
        $sqlrun = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($sqlrun)) {

            ?>
            <?php $a = $row['aidedcourses'];

            $b = explode(",", $a);
            // echo sizeof($b);
            if ($b != [0]) {
                echo "<center style='font-size:25px;color:blue;margin-right:100px' >Aided Courses</center>";
                for ($i = 0; $i <= sizeof($b) - 1; $i++) {
                    // echo $b[$i] . "<br>";
                    echo "<center><table  cellspacing='10' class='div1'>
            <tr>
            <td style='width:250px'>  $b[$i] </td>
            <td style='text-align: center'> &#8377;50 </td>
            </tr>
            </table></center>";
                }
            }
            ?>
        <?php } ?>
        <?php
        $sql = "SELECT * FROM courses1 WHERE login_id ='" . $_SESSION['email'] . "'";
        $sqlrun = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($sqlrun)) {

            ?>
            <?php $a = $row['selfcourses'];
            $b = explode(",", $a);
            // echo $b[0];
            if ($b != [0]) {
                echo "<center style='font-size:25px;color:blue;margin-right:100px'><br>Self financed Courses</center>";
                for ($i = 0; $i <= sizeof($b) - 1; $i++) {
                    // echo $b[$i] . "<br>";
                    echo "<center><table  cellspacing='10' class='div2'>
            <tr>
            <td style='width:250px'>  $b[$i] </td>
            <td style='text-align: center'> &#8377;150 </td>
            </tr>
            </table></center>";
                }
            }
            ?>
        <?php } ?>
        <center> <button class="other" type="submit" name="submit">
                <span class="btnText">Payment
                    <?php
                    $sql = "SELECT * FROM courses WHERE login_id ='" . $_SESSION['email'] . "'";
                    $sql1 = "SELECT * FROM courses1 WHERE login_id ='" . $_SESSION['email'] . "'";
                    $sqlrun = mysqli_query($conn, $sql);
                    $sqlrun1 = mysqli_query($conn, $sql1);
                    while ($row = mysqli_fetch_array($sqlrun)) {
                        $amount1 = $row['amount'];
                    }
                    while ($row1 = mysqli_fetch_array($sqlrun1)) {
                        $amount2 = $row1['amount'];
                    }
                    $totalamount = $amount1 + $amount2;

                    // $_SESSION['totalamount'] = $totalamount;
                    echo '  &#8377;' . $totalamount; ?>
                </span>
            </button>
            <center>
    </form>

</body>

</html>