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
    <title>Other Details</title>
    <style>
        .container {
            /* margin:2%; */
            margin-left: 10%;
            width: 70%;
            background-color: lightcyan;
            height: auto;
            padding: 20px;
            border: 2px solid black;
        }

        th {
            text-align: left;
            width: 60%;
            padding: 10px;
        }

        td {
            color: darkblue;
            padding: 10px;
            font-size: 20px
        }

        table {
            margin-left: 15%;
            width: 75%;
            height: 350px;
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

        #educational:hover {
            background-color: black;
        }

        .courses {
            width: 75%;
            height: auto;
            border: 2px solid black;
            padding: 10px;
            font-size: 25px;
            margin-left: 5%;
            color: red;
        }
    </style>
</head>

<body>
    <div class="container">
        <center>
            <h1>OTHER&nbsp; DETAILS</h1>
        </center>
        <?php
        $sql = "SELECT * FROM other WHERE login_id='" . $email . "' ";
        $query_run = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($query_run)) {
            ?>
            <table border="3">
                <tr>
                    <th>Differently Aided People</th>
                    <td>
                        <?php echo $row['diff'] ?>
                    </td>
                </tr>
                <tr>
                    <th>Son/ Daughter of Ex-Service man of Tamil Origin? </th>
                    <td>
                        <?php echo $row['service'] ?>
                    </td>
                </tr>
                <tr>
                    <th>Tamil origin form Andaman Nicobar islands? </th>
                    <td>
                        <?php echo $row['island'] ?>
                    </td>
                </tr>
                <tr>
                    <th>Having any sports certificate</th>
                    <td>
                        <?php echo $row['cer'] ?>
                    </td>
                </tr>
                <tr>
                    <th>NCC Certificate-A</th>
                    <td>
                        <?php echo $row['ncc'] ?>
                    </td>
                </tr>
                <tr>
                    <th>Hostel accomodations </th>
                    <td>
                        <?php echo $row['hos'] ?>
                    </td>
                </tr>


            </table>
            <br>


        <?php } ?>
        <center>
            <h2>APPLIED COURSES</h2>
            <div class="courses">
                <?php
                $sql = "SELECT * FROM courses WHERE login_id='" . $email . "'";
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
                $sql = "SELECT * FROM courses1 WHERE login_id='" . $email . "'";
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
            </div>
            <br>
            <br>
            <button type="button" id="educational" onclick="window.location.href='userinfo.php?page=<?php echo $_SESSION['page'] + 1 ?>'">Back</button>
            <!-- <center><button type="button" id="educational" onclick="window.location.href='userinfo.php'">Back</button></center> -->

        </center>

    </div>
</body>

</html>