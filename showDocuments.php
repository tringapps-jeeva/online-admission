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
        body{
            background-color: honeydew;
        }
        div{
            padding:10px;
        }
        h3{
            -webkit-text-stroke: 0.3px black;
            color: blue;
            font-size: 20px;
        }
        #documents {
            background-color: darkblue;
            color: white;
            cursor: pointer;
            width: 200px;
            height: 30px;
            border-radius: 5px;
        }
        #documents:hover{
            background-color: black;
        }
    </style>
</head>

<body>
    <?php
    $sql = "SELECT * FROM doc WHERE login_id ='" .$email. "'";

    $sqlrun = mysqli_query($conn, $sql);
    while ($row1 = mysqli_fetch_assoc($sqlrun)) {


        ?>
      <center>  <div>
            <h3>APPLICANT PHOTO</h3>
            <img src="uploads/<?php echo $row1['images'] ?>" style="width: 200px; height: 200px; border: 2px solid black;">
        </div>
    </center>
        <div>
       <table width="100%" >
        <tr>
            <td><h3>10TH MARK SHEET</h3></td>
            <td style="width:45%"><h3>12TH MARK SHEET</h3></td>
    </tr>
       </table>

    </div>
        <div>
        <embed type="application/pdf" src="uploads/<?php echo $row1['10th']?>" style="width: 45%; height: 500px; border: 2px solid black;">
        <embed type="application/pdf" src="uploads/<?php echo $row1['12th']?>" style="width: 45%; height: 500px; border: 2px solid black;float:right;">
    </div>

    <div>
       <table width="100%" >
        <tr>
            <td><h3>COMMUNITY CERTIFICATE</h3></td>
            <td style="width:45%"><h3>BIRTH CERTIFICATE</h3></td>
    </tr>
       </table>
    </div>
        <div>
        <embed type="application/pdf" src="uploads/<?php echo $row1['community']?>" style="width: 45%; height: 500px; border: 2px solid black;">
        <embed type="application/pdf" src="uploads/<?php echo $row1['birth']?>" style="width: 45%; height: 500px; border: 2px solid black;float:right;">
    </div>

    <div>
       <table width="100%" >
        <tr>
            <td><h3>AADHAR CARD</h3></td>
    </tr>
       </table>

    </div>
        <div>
        <embed type="application/pdf" src="uploads/<?php echo $row1['aadhar']?>" style="width: 45%; height: 500px; border: 2px solid black;">
    </div>
    <br>
    <?php } ?>
    <center><button type="button" id="documents" onclick="window.location.href='userinfo.php'">Back</button></center>
    <br>

</body>

</html>