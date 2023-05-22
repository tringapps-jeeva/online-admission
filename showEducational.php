<?php
@include 'config.php';
@session_start();
if (isset($_GET['selectemail'])) {
    $email = $_GET['selectemail'];

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educational Details</title>
    <style>
        .container {
            margin-left: 10%;
            width: 70%;
            background-color: lightcyan;
            height: auto;
            padding: 10px;
            border: 2px solid black;
        }

        th {
            text-align: left;
            width: 40%;
            padding: 10px;
        }

        td {
            color: darkblue;
            padding: 10px;
        }

        table {
            margin-left: 15%;
            width: 75%;
            border-collapse: collapse;
        }

        #educational {
            background-color: darkblue;
            color: white;
            cursor: pointer;
            width: 200px;
            height: 30px;
            border-radius: 5px;
        }
        #educational:hover{
            background-color: black;
        }
    </style>
</head>

<body>
    <div class="container">
        <center>
            <h1>EDUCATIONAL&nbsp; DETAILS</h1>
        </center>
        <?php
        $sql = "SELECT * FROM educationdetails WHERE login_id='" . $email . "' ";
        $query_run = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($query_run)) {
            ?>
            <table border="1" height="350px">
            <tr>
                    <th>Name of the institution</th>
                    <td>
                        <?php echo $row['institution'] ?>
                    </td>
                </tr>
                <tr>
                    <th>District</th>
                    <td>
                        <?php echo $row['district'] ?>
                    </td>
                </tr>
                <tr>
                    <th>No of Appearances</th>
                    <td>
                        <?php echo $row['appearances'] ?>
                    </td>
                </tr>
                <tr>
                    <th>HSC Registration Number</th>
                    <td>
                        <?php echo $row['regno'] ?>
                    </td>
                </tr>
                <tr>
                    <th>Month and Year of Passing</th>
                    <td>
                        <?php echo $row['month']." ".$row['year'] ?>
                    </td>
                </tr>
                <tr>
                    <th>Stream</th>
                    <td>
                        <?php echo $row['stream'] ?>
                    </td>
                </tr>
                <tr>
                    <th>Board of Studying</th>
                    <td>
                        <?php echo $row['board'] ?>
                    </td>
                </tr>
                
            </table>
            <br>
            <table border="1">
                <tr style="text-align:center;">
                    <td style="color:black">Subject</td>
                    <td style="color:black"><?php echo $row['subject1'] ?></td>
                    <td style="color:black"><?php echo $row['subject2'] ?></td>
                    <td style="color:black"><?php echo $row['subject3'] ?></td>
                    <td style="color:black"><?php echo $row['subject4'] ?></td>
                    <td style="color:black"><?php echo $row['subject5'] ?></td>
                    <td style="color:black"><?php echo $row['subject6'] ?></td>
                    <td style="color:black">Total</td>

        </tr>
        <tr style="text-align:center">
                    <td>Marks</td>
                    <td><?php echo $row['mark1'] ?></td>
                    <td><?php echo $row['mark2'] ?></td>
                    <td><?php echo $row['mark3'] ?></td>
                    <td><?php echo $row['mark4'] ?></td>
                    <td><?php echo $row['mark5'] ?></td>
                    <td><?php echo $row['mark6'] ?></td>
                    <td><?php echo $row['total'] ?></td>

        </tr>
        </table>
            <br>
        <?php } ?>
        <center><button type="button" id="educational" onclick="window.location.href='userinfo.php'">Back</button></center>
    </div>
</body>

</html>