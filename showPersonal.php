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
    <title>Personal Details</title>
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

        #personal {
            background-color: darkblue;
            color: white;
            cursor: pointer;
            width: 200px;
            height: 30px;
            border-radius: 5px;
        }

        #personal:hover {
            background-color: black;
        }
    </style>
</head>

<body>
    <div class="container">
        <center>
            <h1>PERSONAL DETAILS</h1>
        </center>
        <?php
        $sql = "SELECT * FROM applicationform WHERE login_id='" . $email . "' ";
        $query_run = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($query_run)) {
            ?>
            <table border="1" cellspacing=20>
                <tr>
                    <th>Name</th>
                    <td>
                        <?php echo $row['fullname'] ?>
                    </td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>
                        <?php echo $row['email'] ?>
                    </td>
                </tr>
                <tr>
                    <th>Father Name</th>
                    <td>
                        <?php echo $row['fathername'] ?>
                    </td>
                </tr>
                <tr>
                    <th>Mother Name</th>
                    <td>
                        <?php echo $row['mothername'] ?>
                    </td>
                </tr>
                <tr>
                    <th>Father Occupation</th>
                    <td>
                        <?php echo $row['foccupation'] ?>
                    </td>
                </tr>
                <tr>
                    <th>Mother Occupation</th>
                    <td>
                        <?php echo $row['moccupation'] ?>
                    </td>
                </tr>
                <tr>
                    <th>Dob</th>
                    <td>
                        <?php echo $row['dob'] ?>
                    </td>
                </tr>
                <tr>
                    <th>Applicant PhoneNumber</th>
                    <td>
                        <?php echo $row['appphno'] ?>
                    </td>
                </tr>
                <tr>
                    <th>Gender</th>
                    <td>
                        <?php echo $row['gender'] ?>
                    </td>
                </tr>
                <tr>
                    <th>Community</th>
                    <td>
                        <?php echo $row['community'] ?>
                    </td>
                </tr>
                <tr>
                    <th>Native District</th>
                    <td>
                        <?php echo $row['navdistrict'] ?>
                    </td>
                </tr>
                <tr>
                    <th>Caste</th>
                    <td>
                        <?php echo $row['caste'] ?>
                    </td>
                </tr>
                <tr>
                    <th>Mother Tongue</th>
                    <td>
                        <?php echo $row['tongue'] ?>
                    </td>
                </tr>
                <tr>
                    <th>Religion</th>
                    <td>
                        <?php echo $row['religion'] ?>
                    </td>
                </tr>
                <tr>
                    <th>Aadhar No</th>
                    <td>
                        <?php echo $row['aadhar'] ?>
                    </td>
                </tr>
                <tr>
                    <th>Nationality</th>
                    <td>
                        <?php echo $row['nation'] ?>
                    </td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>
                        <?php echo $row['address'] . ", " . $row['district'] . ", " . $row['state'] . ", " . $row['pincode'] ?>
                    </td>
                </tr>
                <tr>
                    <th>Annual Income</th>
                    <td>
                        <?php echo $row['fincome'] ?>
                    </td>
                </tr>
                <tr>
                    <th>Parent PhoneNumber</th>
                    <td>
                        <?php echo $row['parphone'] ?>
                    </td>
                </tr>
                <tr> 
                    <th>Area</th>
                    <td>
                        <?php echo $row['area'] ?>
                    </td>
                </tr>
            </table>
            
            <br>
        <?php } ?>
        <center><button type="button" id="personal" onclick="window.location.href='userinfo.php'">Back</button></center>
    </div>
</body>

</html>